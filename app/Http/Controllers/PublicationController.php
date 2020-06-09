<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
		
		
    	$publication->save();
		return redirect('publications');

    }
	
	
	
	
	
	
	
	public function index(){
    	$listPublication = Publication::all();
    	return view('publication.index', ['publications' => $listPublication]);
    }


	public function edit(){
	}
	public function update(){
	}
	public function destroy(){
	}
}
