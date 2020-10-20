<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Idé;

class IdéController extends Controller
{
  public function create(){
    	return view('idé.create');
    }
	public function idee(){
    	return view('idé.idee');
    }
    public function store(Request $request){
    	$idé = new Idé();
    	$idé->titre = $request->input('titre');
    	$idé->contenu = $request->input('contenu');
		
		$idé->categories = $request->input('categories');
		$idé->status = $request->input('status');
		
		
		
		
		
		
		
    	$idé->save();
		return redirect('idés');

    }
	
   
   
   
   
   
  public function index(){
    	$listIdé = Idé::all();
    	return view('idé.index', ['idés' => $listIdé]);
    } 
   
   
   
    public function destroy($id){
    	
    	$idé = Idé::find($id);
    	$idé->delete();
    	return redirect('idés');

    } 
	
	public function edit($id){
    	$idé = Idé::find($id);
    	return view('idé.edit', ['idé'=>$idé]);
    }
    public function update(Request $request, $id){
    	$idé = Idé::find($id);
    	$idé->titre = $request->input('titre');
    	$idé->contenu = $request->input('contenu');
		$idé->categories = $request->input('categories');
		$idé->status = $request->input('status');
		
		
    	$idé->save();
    	return redirect('idés');    	
    }

public function show($id){
	
	
	return view('idé.show' , ['id'=> $id]);
	
}
   
}
