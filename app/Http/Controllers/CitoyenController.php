<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;

use App\Citoyen;
class CitoyenController extends Controller
{
	
	
  
  public function index(){
    	$listCit = Citoyen::all();
    	return view('citoyen.index', ['citoyens' => $listCit]);
    }


	  public function destroy($id){
    	
    	$citoyen = Citoyen::find($id);
    	$citoyen->delete();
    	return redirect('citoyens');

    } 
	
	
	public function show($id){
	
	
	return view('citoyen.show' , ['id'=> $id]);
	
}

public function create(){
    	return view('citoyen.create');
    }
    public function store(Request $request){
    	$citoyen = new Citoyen();
    	$citoyen->nom = $request->input('nom');
    	$citoyen->prenom = $request->input('prenom');
		
		$citoyen->date = $request->input('date');
		
		$citoyen->email = $request->input('email');
		
		$citoyen->password = $request->input('password');
		$citoyen->profession = $request->input('profession');
		$citoyen->maladie = $request->input('maladie');
		$citoyen->wilaya = $request->input('wilaya');
		
		
		
		
    	$citoyen->save();
		return redirect('citoyens');

    }
	
  
  
}
