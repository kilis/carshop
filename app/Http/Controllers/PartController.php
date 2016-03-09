<?php

namespace App\Http\Controllers;
 
use App\Part;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Request;
use DB;
use Illuminate\Http\Response;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class PartController extends Controller
{
    //
	public function index(){
        $parts = Part::all();
		return view('admin.part',['parts' => $parts]);
    }
 
    public function destroy($id){
        Part::destroy($id);
        return redirect('/admin/part');
    }
 
    public function newPart(){
        return view('admin.new');
    }
	
	public function get($file_id){
		
		$results = DB::select('select * from files where id = :id', ['id' => $file_id]);
		$file = Storage::disk('local')->get($results[0]->filename);
 
		return (new Response($file, 200))
              ->header('Content-Type', $results[0]->mime);
	}
	
    public function add() {
 
        $file = Request::file('file');
        $extension = $file->getClientOriginalExtension();
        Storage::disk('local')->put($file->getFilename().'.'.$extension,  File::get($file));
 
        $entry = new \App\File();
        $entry->mime = $file->getClientMimeType();
        $entry->original_filename = $file->getClientOriginalName();
        $entry->filename = $file->getFilename().'.'.$extension;
 
        $entry->save();
 
        $part  = new Part();
        $part->file_id=$entry->id;
        $part->name =Request::input('name');
        $part->description =Request::input('description');
        $part->price =Request::input('price');
        $part->imageurl =Request::input('imageurl');
 
        $part->save();
 
        return redirect('/admin/part');
 
    }
}
