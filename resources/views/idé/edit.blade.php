@extends('layouts.master3')
@yield('content')
<form action= "{{url('idés/'.$idé->id)}}" method="POST">
<input type="hidden" name="_method" value="PUT">


	{{ csrf_field()}}


 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Ajouter une idé:</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
           
        </div><!-- /.col -->
    </div><!-- /.row -->
        
    
    
    <!-- /.content-header -->
<br><br>
    <form>
        <div class="form-group">
          <label for="formGroupExampleInput">titre</label>
          <input type="text" name="titre" class="form-control" id="formGroupExampleInput" placeholder=" " value="{{$idé->titre}}">
        </div>
        <div class="form-group">
          <label for="exampleFormControlTextarea1">contenu</label>
          <textarea class="form-control" name="contenu" id="exampleFormControlTextarea1" rows="3" value="{{$idé->contenu}}"></textarea>
        </div>
		 
		 <div class="form-group">
          <label for="formGroupExampleInput">categories</label>
          <input type="text" name="categories" class="form-control" id="formGroupExampleInput" value="{{$idé->categories}}">
        </div>
		  
                          
		
		<div class="form-group">
          <label for="formGroupExampleInput">status</label>
          <input type="text" name="status" class="form-control" id="formGroupExampleInput" placeholder=" " value="{{$idé->status}}">
        </div>
        

        
		   
		   <button type="submit" value="Modifer" class="btn btn-danger">Modifier</button>
          
          </form>
        </div><br>
          

          <button type="button" class="btn btn-warning">Annuler</button>
      </form>
   
    </div><!-- /.container-fluid -->
</div>

