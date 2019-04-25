<?php

namespace App\Http\Controllers;

use App\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Image;
use Auth;
use Validator;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $team = Team::all();
        $teamCount = count($team);
            return view('team.index', ['team'=>$team, 'teamCount' =>$teamCount]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('team.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = \Validator::make($request->all(), [
                'first_name' => ['bail', 'required', 'alpha', 'max:50'],
                'last_name' => ['bail', 'required', 'alpha', 'max:50'],
                'position' => ['bail', 'required', 'string', 'max:100'],
                'fb_link' => ['bail', 'required', 'url', 'max:255'],
                'tw_link' => ['bail', 'required', 'url', 'max:255'],
                'photo' => ['bail', 'required', 'image', 'mimes:jpeg,png,jpg', 'max:1999'] 
        ]);

            if ($validator->fails()){
                 //return Response::json(['errors' => $validator->errors()]);
                 return back()->withInput()->with(['errors' => $validator->errors()]);
            }

            else{

                if ($request->hasFile('photo')) {
                    
                    //Get Filename with extension
                    $filenameWithExtension = $request->file('photo')->getClientOriginalName();
                    
                    //Get just the filename
                    $filename = pathinfo($filenameWithExtension, PATHINFO_FILENAME);
                    
                    //Get just the extension
                    $extension = $request->file('photo')->getClientOriginalExtension();
                    
                    //File to store
                    $filenameToStore = $filename.'_'.time().'.'.$extension;
                    
                    //Upload Image
                    $path = $request->file('photo')->storeAs('public/team_images', $filenameToStore);

                    //Resize image here
                    $thumbnailpath = public_path('storage/team_images/'.$filenameToStore);
                    $img = Image::make($thumbnailpath)->resize(520, 640, function($constraint) {
                            $constraint->aspectRatio();
                        });
                        $img->save($thumbnailpath); 

               }
               else{
                    $filenameToStore = 'noimage.jpg';
               }

               Team::create([
                        'first_name' => $request['first_name'],
                        'last_name' => $request['last_name'],
                        'position' => $request['position'],
                        'fb_link' => $request['fb_link'],
                        'tw_link' => $request['tw_link'],
                        'path' => $filenameToStore,
                        'user_id' => Auth::user()->id
               ]);
               return redirect()->route('team')->with('success', 'New Team Member Added Successfully');
           }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function show($id=null)
    {
        $tm = Team::findOrFail($id);
        return view('team.show', ['tm'=>$tm]);
    }

    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id=null)
    {
        $team = Team::findOrFail($id);
        $validator = \Validator::make($request->all(), [
                'first_name' => ['bail', 'required', 'alpha', 'max:50'],
                'last_name' => ['bail', 'required', 'alpha', 'max:50'],
                'position' => ['bail', 'required', 'string', 'max:100'],
                'fb_link' => ['bail', 'required', 'url', 'max:255'],
                'tw_link' => ['bail', 'required', 'url', 'max:255'],
                'photo' => ['bail', 'required', 'image', 'mimes:jpeg,png,jpg', 'max:1999'] 
        ]);

            if ($validator->fails()){
                 //return Response::json(['errors' => $validator->errors()]);
                 return back()->withInput()->with(['errors' => $validator->errors()]);
            }

            else{

                if ($request->hasFile('photo')) {

                    if($team->path !== 'noimage.jpg'){
                        
                        //Delete the formal image
                        Storage::delete('public/team_images/'.$team->path);
                    }
                    
                    //Get Filename with extension
                    $filenameWithExtension = $request->file('photo')->getClientOriginalName();
                    
                    //Get just the filename
                    $filename = pathinfo($filenameWithExtension, PATHINFO_FILENAME);
                    
                    //Get just the extension
                    $extension = $request->file('photo')->getClientOriginalExtension();
                    
                    //File to store
                    $filenameToStore = $filename.'_'.time().'.'.$extension;
                    
                    //Upload Image
                    $path = $request->file('photo')->storeAs('public/team_images', $filenameToStore);

                    //Resize image here
                    $thumbnailpath = public_path('storage/team_images/'.$filenameToStore);
                    $img = Image::make($thumbnailpath)->resize(520, 640, function($constraint) {
                            $constraint->aspectRatio();
                        });
                        $img->save($thumbnailpath); 

               }
               else{
                    $filenameToStore = 'noimage.jpg';
               }

               Team::where('id', $id)->update([
                        'first_name' => $request['first_name'],
                        'last_name' => $request['last_name'],
                        'position' => $request['position'],
                        'fb_link' => $request['fb_link'],
                        'tw_link' => $request['tw_link'],
                        'path' => $filenameToStore,
                        //'user_id' => Auth::user()->id
               ]);
               return redirect()->route('team')->with('success', 'Team Member Info Updated Successfully');
           }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function destroy($id=null)
    {
        $team = Partner::findOrFail($id);

        Storage::delete('public/team_images/'.$team->path);
        
        $team->delete();

        return redirect()->route('team')->with('success', 'Team Member Deleted successfully');
    }

}
