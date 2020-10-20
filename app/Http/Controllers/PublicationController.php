<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;

use App\Publication;

class PublicationController extends Controller
{
    
	
	public function create(){
    	return view('publication.create');
    }
    public function store(Request $request){
    	$publication = new Publication();
    	$publication->titre = $request->input('titre');
    	$publication->contenu = $request->input('contenu');
		$publication->file=$request->input('file');
		
		$publication->wilaya = $request->input('wilaya');
		$publication->profession = $request->input('profession');
		$publication->maladie = $request->input('maladie');
		
		$publication->source = $request->input('source');
		
		if($request->hasFile('file')){
		$publication= $request->file('file');
		$img = Image::make($publication);
            $publication_name= time().'.'.$publication->getClientOriginalExtension();
            $img->resize(400,300)->save('uploads/photospublications/'.$publication_name,60); 
            $pub->file= 'uploads/photopublications/'.$publication_name;
		
		}
		
		
    	$publication->save();
		return redirect('publications');

    }
	
	
	
	
	
	
	
	public function index(){
    	$listPublication = Publication::all();
    	return view('publication.index', ['publications' => $listPublication]);
    }


	  public function destroy($id){
    	
    	$publication = Publication::find($id);
    	$publication->delete();
    	return redirect('publications');

    } 
	
	public function edit($id){
    	$publication = Publication::find($id);
    	return view('publication.edit', ['publication'=>$publication]);
    }
    public function update(Request $request, $id){
    	$publication = Publication::find($id);
    	$publication->titre = $request->input('titre');
    	$publication->contenu = $request->input('contenu');
		$publication->wilaya = $request->input('wilaya');
		$publication->profession = $request->input('profession');
		$publication->maladie = $request->input('maladie');
		$publication->source = $request->input('source');
    	$publication->save();
    	return redirect('publications');    	
    }

public function show($id){
	
	
	return view('publication.show' , ['id'=> $id]);
	
}

}
