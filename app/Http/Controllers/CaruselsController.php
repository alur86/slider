<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreateCaruselRequest;
use App\Models\Carusel;
use Carbon\Carbon;
use Illuminate\Http\UploadedFile;
use Image;

class CaruselsController extends Controller
{
   

 public function __construct(){

   $this->middleware('auth');

 }

    public function index(){

    $carusels = Carusel::orderBy('id', 'desc')->get();

    return view('carusels.index',compact('carusels'));

    }




   public function create(CreateCaruselRequest  $request) {
     if($request->hasFile('image')){
       $user_id = intval($request->get('user_id'));
       $image = $request->file('image');
       $filename = time() . '.' . $image->getClientOriginalExtension();
       Image::make($image)->resize(800, 600)->save( public_path('uploads/' .$filename ));
  
       $carusel = new Carusel();
       $carusel->title = $request->get('title');
       $carusel->url = $request->get('url');
       $carusel->image = $filename;
       $carusel->user_id = intval($request->get('user_id'));
       $carusel->created_at = Carbon::now();
       $carusel->save();

       }

       return redirect('index');

       }





}
