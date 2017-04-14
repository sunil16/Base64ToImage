<?php


namespace App\Http\Controllers;
use base64images;
use Illuminate\Http\Request;
use App\Base64image;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class base64ToImageController extends Controller
{
  /**
* Display a listing of the resource.
*
* @return Response
*/
public function index()
{
  //
}


public function create_media_item()
{


function base64ToImage($imageData)
 {
   $data = 'data:image/png;base64,AAAFBfj42Pj4';
   list($type, $imageData) = explode(';', $imageData);
   list(,$extension) = explode('/',$type);
   list(,$imageData)      = explode(',', $imageData);
   $fileName = uniqid().'.'.$extension;
   $imageData = base64_decode($imageData);
   file_put_contents("uploads/images/$fileName", $imageData);
   $url = "http://127.0.0.1:8000/uploads/images/$fileName";
   return $url;
}





$base64data="data:image/png;base64,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";



      $fileUrl = base64ToImage($base64data);  //function calling for decode data
      $entry = new Base64image();
      $entry->imageurl= $fileUrl;  // image access url save to db
      $entry->save();
      $mediaidsall=Base64image::all();
      return view('base64imageview',compact('mediaidsall'));

 }
/**
* Show the form for creating a new resource.
*
* @return Response
*/
public function create()
{
  //
}

/**
* Store a newly created resource in storage.
*
* @return Response
*/
public function store()
{
  //
}

/**
* Display the specified resource.
*
* @param  int  $id
* @return Response
*/
public function show($id)
{
  //
}

/**
* Show the form for editing the specified resource.
*
* @param  int  $id
* @return Response
*/
public function edit($id)
{
  //
}

/**
* Update the specified resource in storage.
*
* @param  int  $id
* @return Response
*/
public function update($id)
{
  //
}

/**
* Remove the specified resource from storage.
*
* @param  int  $id
* @return Response
*/
public function destroy($id)
{
  //
}

}
