@extends('layouts.master')
@Section('content')

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
          <label for="formGroupExampleInput">Titre</label>
          <input type="text" class="form-control" id="formGroupExampleInput" placeholder=" ">
        </div>
        <div class="form-group">
          <label for="exampleFormControlTextarea1">Contenu</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <div class="form-group">
            <label for="exampleFormControlFile1">File input</label>
            <input type="file" class="form-control-file" id="exampleFormControlFile1">
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputEmail4">Source</label>
              <input type="email" class="form-control" id="inputEmail4">
            </div>  
          </div>
          <label for="exampleFormControlFile1">Destinataire</label>
          <div class="form-group">
            <select class="form-control" id="séléctionner la willaya de destinataire">
              <option>séléctionner la willaya de destinataire</option>
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
            </select>
          </div>
          <div class="form-group">
            <select class="form-control" id="séléctionner la willaya de destinataire">
              <option>séléctionner la maladie</option>
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
            </select>
          </div>
          <div class="form-group">
            <select class="form-control" id="séléctionner la willaya de destinataire">
              <option>séléctionner profession</option>
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
            </select>
          </div>
          
          </form>
        </div><br>
          <button type="button" class="btn btn-success">Publier</button>
          <button type="button" class="btn btn-warning">Annuler</button>
      </form>
   
    </div><!-- /.container-fluid -->
</div>

@endsection
