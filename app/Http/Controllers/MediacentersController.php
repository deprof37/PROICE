<?php

namespace App\Http\Controllers;

use App\Mediacenter;
use Illuminate\Http\Request;
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
                'url' => ['bail', 'required', 'url'],
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
                    $path = $request->file('photo')->storeAs('public/media_images', $filenameToStore);

               }
               else{
                    $filenameToStore = 'noimage.jpg';
               }

               Mediacenter::create([
                        'title' => $request['title'],
                        'description' => $request['descrip'],
                        'url' => $request['url'],
                        'path' => $filenameToStore,
                        'user_id' => Auth::user()->id
               ]);
               return redirect()->route('media');
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
        $validator = \Validator::make($request->all(), [
                'title' => ['bail', 'required', 'string', 'max:100'],
                'descrip' => ['bail', 'required', 'string', 'max:255'],
                'url' => ['bail', 'required', 'url'],
                'photo' => ['bail', 'required', 'image', 'mimes:jpeg,png,jpg', 'max:1999'] 
        ]);

            if ($validator->fails()){
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
                    $path = $request->file('photo')->storeAs('public/media_images', $filenameToStore);

               }
               else{
                    $filenameToStore = 'noimage.jpg';
               }

               Mediacenter::create([
                        'title' => $request['title'],
                        'description' => $request['descrip'],
                        'url' => $request['url'],
                        'path' => $filenameToStore,
                        'user_id' => Auth::user()->id
               ]);
               return redirect()->route('media');
           }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mediacenter  $mediacenter
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mediacenter $mediacenter)
    {
        //
    }
}
