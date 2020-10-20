
@extends('layouts.master3')
@section('content')

<form action= "{{url('idés')}}" method="POST">
	{{ csrf_field()}}
<body>

	<form>
	
		

	  <div class="form-group">
          <label for="formGroupExampleInput">titre</label>
          <input type="text" name="titre" class="form-control" id="formGroupExampleInput" placeholder=" ">
        </div>
        <div class="form-group">
          <label for="exampleFormControlTextarea1">contenu</label>
          <textarea class="form-control" name="contenu" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
		 
		  <div class="form-group">
          <label for="formGroupExampleInput">categories</label>
          <input type="text" name="categories" class="form-control" id="formGroupExampleInput" placeholder=" ">
        </div>
		   
 

                                       
   
		
		
                                       
		
		
		<div class="form-group">
          <label for="formGroupExampleInput">status</label>
          <input type="text" name="status" class="form-control" id="formGroupExampleInput" placeholder=" ">
        </div>
        

        
		   
		   <button type="submit" value="Enregistrer" class="btn btn-success">Publier</button>
          
          </form>
        </div><br>
          

          <button type="button" class="btn btn-warning">Annuler</button>
      </form>
   
    </div><!-- /.container-fluid -->
</div>




@endsection