<?php

namespace App\Http\Controllers;

use App\Mediacenter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Validator;
use Auth;

class MediacentersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index(){
        $media = Mediacenter::all();
        $mediaCount = count($media);
            return view('media.index', ['media'=>$media, 'mediaCount' =>$mediaCount]);
    }

    public function create(){
        return view('media.create');
    }

    public function store(Request $request){
        
        $validator = \Validator::make($request->all(), [
                'title' => ['bail', 'required', 'string', 'max:100'],
                'descrip' => ['bail', 'required', 'string', 'max:255'],
                'url' => ['bail', 'required', 'url']
                //'photo' => ['bail', 'image', 'mimes:jpeg,png,jpg', 'max:1999'] 
        ]);

            if ($validator->fails()){
                 //return Response::json(['errors' => $validator->errors()]);
                 return back()->withInput()->with(['errors' => $validator->errors()]);
            }

            else{

           /*     if ($request->hasFile('photo')) {
                    //Get Filename with extension
                    $filenameWithExtension = $request->file('photo')->getClientOriginalName();
                    //Get just the filename
                    $filename = pathinfo($filenameWithExtension, PATHINFO_FILENAME);
                    //Get just the extension
                    $extension = $request->file('photo')->getClientOriginalExtension();

                    //File to store
                    $filenameToStore = $filename.'_'.time().'.'.$extension;
                    //Upload Image
                    $path = $request->file('photo')->storeAs('public/media_images', $filenameToStore);

               }
               else{
                    $filenameToStore = 'noimage.jpg';
               }  */
               
               $url = $request->input('url');

               preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $url, $match);

               $youtubeID = $match[1];

               Mediacenter::create([
                'title' => $request['title'],
                'description' => $request['descrip'],
                'url' => 'https://www.youtube.com/embed/'.$youtubeID.'?rel=0',
                //'path' => $filenameToStore,
                'user_id' => Auth::user()->id
               ]);
               return redirect()->route('media')->with('success', 'Media Created successfully');;
           }
            
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Mediacenter  $mediacenter
     * @return \Illuminate\Http\Response
     */
    public function show($id=null)
    {
        $med = Mediacenter::findOrFail($id);
        return view('media.show', ['med'=>$med]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Mediacenter  $mediacenter
     * @return \Illuminate\Http\Response
     */
    public function edit(Mediacenter $mediacenter)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Mediacenter  $mediacenter
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id=null)
    {
            $media = Mediacenter::findOrFail($id);
        $validator = \Validator::make($request->all(), [
                'title' => ['bail', 'required', 'string', 'max:100'],
                'descrip' => ['bail', 'required', 'string', 'max:255'],
                'url' => ['bail', 'required', 'url']
                //'photo' => ['bail', 'image', 'mimes:jpeg,png,jpg', 'max:1999'] 
        ]);

            if ($validator->fails()){
                 return back()->withInput()->with(['errors' => $validator->errors()]);
            }

            else{

        /*        if ($request->hasFile('photo')) {

                    if($media->path !== 'noimage.jpg'){
                        
                        //Delete the formal image
                        Storage::delete('public/media_images/'.$media->path);
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
                    $path = $request->file('photo')->storeAs('public/media_images', $filenameToStore); 

               }
               else{

                    if($media->path !== 'noimage.jpg'){
                        
                        //Delete the formal image
                        Storage::delete('public/media_images/'.$media->path);
                    }
                    
                    $filenameToStore = 'noimage.jpg';
               }  */

               $url = $request->input('url');

               preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $url, $match);

               $youtubeID = $match[1];

               Mediacenter::where('id', $id)->update([
                'title' => $request['title'],
                'description' => $request['descrip'],
                'url' => 'https://www.youtube.com/embed/'.$youtubeID.'?rel=0'
                        //'path' => $filenameToStore,
                        //'user_id' => Auth::user()->id
               ]);
               return redirect()->route('media')->with('success', 'Media Updated successfully');
           }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mediacenter  $mediacenter
     * @return \Illuminate\Http\Response
     */
    public function destroy($id=null)
    {
        $media = Mediacenter::findOrFail($id);

        /*if($media->path !== 'noimage.jpg'){
            Storage::delete('public/media_images/'.$media->path);
        }  */
        //File::delete(public_path() . '/media_images/', $media->file->path);
        $media->delete();  

        return redirect()->route('media')->with('success', 'Media Deleted successfully');
    }
}
