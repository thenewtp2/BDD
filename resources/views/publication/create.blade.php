@extends('layouts.app')
@Section('content')
<form action= "{{url('publications')}}" method="POST">
	{{ csrf_field()}}


 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Ajouter une publication:</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
           
        </div><!-- /.col -->
    </div><!-- /.row -->
        
    
    
    <!-- /.content-header -->
<br><br>
    <form>
        <div class="form-group">
          <label for="formGroupExampleInput">titre</label>
          <input type="text" name="titre" class="form-control" id="formGroupExampleInput" placeholder=" ">
        </div>
        <div class="form-group">
          <label for="exampleFormControlTextarea1">contenu</label>
          <textarea class="form-control" name="contenu" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        

        
		   <input type="submit" name="" value="Enregistrer">
          
          </form>
        </div><br>
          

          <button type="button" class="btn btn-warning">Annuler</button>
      </form>
   
    </div><!-- /.container-fluid -->
</div>

@endsection
