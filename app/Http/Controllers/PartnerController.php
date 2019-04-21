<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;
use App\Partner;
use Auth;
use Validator;

class PartnerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index(){
        $partner = Partner::all();
        $partnerCount = count($partner);
            return view('partner.index', ['partner'=>$partner, 'partnerCount' =>$partnerCount]);
    }

    public function create(){
        return view('partner.create');
    }

    public function store(Request $request){
        
        $validator = \Validator::make($request->all(), [
                'partner_name' => ['bail', 'required', 'string', 'max:100'],
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

                    //Destination Path
                    $destinationPath = public_path('/partner_images');
                    //File to store
                    $filenameToStore = $filename.'_'.time().'.'.$extension;
                    //Upload Image
     //                $path = $request->file('photo');
     //                $img = Image::make($path);
     //                $img->resize(100,100, function ($constraint) {
					//     $constraint->aspectRatio();
					//     $constraint->upsize();
					// })->save($destinationPath, $filenameToStore);
					$path = $request->file('photo')->storeAs('public/partner_images', $filenameToStore); 

               }
               else{
                    $filenameToStore = 'noimage.jpg';
               }

               Partner::create([
                        'name' => $request['partner_name'],
                        'path' => $filenameToStore,
                        'user_id' => Auth::user()->id
               ]);
               return redirect()->route('partner')->with('success', 'Partner Created successfully');;
           }
            
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Partner  $Partner
     * @return \Illuminate\Http\Response
     */
    public function show($id=null)
    {
        $part = Partner::findOrFail($id);
        return view('partner.show', ['part'=>$part]);
    }

    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Partner  $Partner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id=null)
    {
            $partner = Partner::findOrFail($id);
        $validator = \Validator::make($request->all(), [
                'partner_name' => ['bail', 'required', 'string', 'max:100'],
                'photo' => ['bail', 'required', 'image', 'mimes:jpeg,png,jpg', 'max:1999'] 
        ]);

            if ($validator->fails()){
                 return back()->withInput()->with(['errors' => $validator->errors()]);
            }

            else{

                if ($request->hasFile('photo')) {
                  
                        //Delete the formal image
                        Storage::delete('public/partner_images/'.$partner->path);
                 
                    //Get Filename with extension
                    $filenameWithExtension = $request->file('photo')->getClientOriginalName();
                    
                    //Get just the filename
                    $filename = pathinfo($filenameWithExtension, PATHINFO_FILENAME);
                    
                    //Get just the extension
                    $extension = $request->file('photo')->getClientOriginalExtension();

                    //File to store
                    $filenameToStore = $filename.'_'.time().'.'.$extension;
                    
                    //Upload Image
                    $path = $request->file('photo')->storeAs('public/partner_images', $filenameToStore); 

               }
               else{

                    // if($partner->path !== 'noimage.jpg'){
                        
                    //     //Delete the formal image
                    //     Storage::delete('public/partner_images/'.$partner->path);
                    // }
                    
                    $filenameToStore = 'noimage.jpg';
               }

               Partner::where('id', $id)->update([
                        'name' => $request['partner_name'],
                        'path' => $filenameToStore,
                        //'user_id' => Auth::user()->id
               ]);
               return redirect()->route('partner')->with('success', 'Partner Updated successfully');
           }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Partner  $Partner
     * @return \Illuminate\Http\Response
     */
    public function destroy($id=null)
    {
        $partner = Partner::findOrFail($id);

        Storage::delete('public/partner_images/'.$partner->path);
        
        $partner->delete();

        return redirect()->route('partner')->with('success', 'Partner Deleted successfully');
    }
}
