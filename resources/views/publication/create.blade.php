@extends('layouts.master1')
@section('content')

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
		 
		 <div class="form-group">
            <label for="">file</label>
            <input type="file" name="file"class="form-control-file" id="exampleFormControlFile1">
          </div>
		  
		   <div class="form-group">
    <label for="exampleFormControlSelect1">wilaya</label>
    <select class="form-control" name="wilaya" id="exampleFormControlSelect1" >
     <option value=""></option>
                                        <option value="adrar">Adrar</option>
                                        <option value="chlef">Chlef</option>
                                        <option value="laghout">Laghouat</option>
                                        <option value="">Oum el bouaghi</option>
                                        <option value="batna">Batna</option>
                                        <option value="">Béjaya</option>
                                        <option value="">Biskra</option>
                                        <option value="">Béchar</option>
                                        <option value="blida">Blida</option>
                                        <option value="">Bouira</option>
                                        <option value="">Tamanrasset</option>
                                        <option value="">Tébessa</option>
                                        <option value="tlemcen">Tlemcen</option>
                                        <option value="">Tiaret</option>
                                        <option value="">Tizi Ouzou</option>
                                        <option value="">Alger</option>
                                        <option value="">Djelfa</option>
                                        <option value="">Jijel</option>
                                        <option value="">Sétif</option>
                                        <option value="">Saida</option>
                                        <option value="">Skikda</option>
                                        <option value="">Sidi bel abbes</option>
                                        <option value="VN">Annaba/option>
                                        <option value="VN">Guelma</option>
                                        <option value="VN">Constantine</option>
                                        <option value="VN">Médéa</option>
                                        <option value="VN">Mostaghanem</option>
                                        <option value="VN">M'sila</option>
                                        <option value="VN">Mascara</option>
                                        <option value="VN">Ouargla</option>
                                        <option value="VN">Oran</option>
                                        <option value="VN">El bayadh</option>
                                        <option value="VN">Ilizi</option>
                                        <option value="VN">Bordj Bouariridj</option>
                                        <option value="VN">Boumerdes</option>
                                        <option value="VN">El taref</option>
                                        <option value="VN">Tindouf</option>
                                        <option value="VN">Tissemsilt</option>
                                        <option value="VN">El oued</option>
                                        <option value="VN">Khenchela</option>
                                        <option value="VN">Souk Ahras</option>
                                        <option value="VN">Tipaza</option>
                                        <option value="VN">Mila</option>
                                        <option value="VN">Ain Defla</option>
                                        <option value="VN">Naama</option>
                                        <option value="VN">Ain Temouchent</option>
                                        <option value="VN">Ghardaia</option>
                                        <option value="VN">Rélizane</option>
                                        

    </select>
  </div>
 
  <div class="form-group">
    <label for="exampleFormControlSelect1">profession</label>
    <select class="form-control" name="profession" id="exampleFormControlSelect1">
      <option value=""></option>
                                        <option value="medecin">medecin</option>
                                        <option value="professeur">professeur</option>
                                        <option value="commerçant">commerçant</option>
                                        <option value="pharmaciens">pharmaciens</option>
                                        <option value="ingénieurs">ingénieurs</option>
                                        <option value="artisans">artisans</option>
    </select>
  </div>
                                       
   <div class="form-group">
    <label for="exampleFormControlSelect1">maladie</label>
    <select class="form-control" name="maladie" id="exampleFormControlSelect1">
     <option value=""></option>
                                        <option value="diabète">diabète</option>
                                        <option value="a pression artérielle">la pression artérielle</option>
                                        <option value="Collestérole">Collestérole</option>
                                        <option value="Azme">Azme</option>
                                        <option value="Allergie">Allergie</option>
    </select>
  </div>
		
		
                                       
		
		
		<div class="form-group">
          <label for="formGroupExampleInput">source</label>
          <input type="text" name="source" class="form-control" id="formGroupExampleInput" placeholder=" ">
        </div>
        

        
		   
		   <button type="submit" value="Enregistrer" class="btn btn-success">Publier</button>
          
          </form>
        </div><br>
          

          <button type="button" class="btn btn-warning">Annuler</button>
      </form>
   
    </div><!-- /.container-fluid -->
</div>

@endsection