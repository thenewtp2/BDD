@extends('layouts.app')
@yield('content')
<form action= "{{url('publications/'.$publication->id)}}" method="POST">
<input type="hidden" name="_method" value="PUT">

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
          <input type="text" name="titre" class="form-control" id="formGroupExampleInput" placeholder=" " value="{{$publication->titre}}">
        </div>
        <div class="form-group">
          <label for="exampleFormControlTextarea1">contenu</label>
          <textarea class="form-control" name="contenu" id="exampleFormControlTextarea1" rows="3" value="{{$publication->contenu}}"></textarea>
        </div>
		 
		 <div class="form-group">
            <label for="exampleFormControlFile1">file</label>
            <input type="file" class="form-control-file" id="exampleFormControlFile1" value="{{$publication->file}}">
          </div>
		  <div class="form-row">
                            <div class="form-group">
                                <label for="password">Wilaya</label>
                                <div class="select-list">
                                    <select name="wilaya" id="country" required>
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
                            </div>
		<div class="form-row">
                            <div class="form-group">
                                <label for="password">profession</label>
                                <div class="select-list">
                                    <select name="profession" id="country" required>
									<option value="US"></option>
                                        <option value="medecin">medecin</option>
                                        <option value="professeur">professeur</option>
                                        <option value="commerçant">commerçant</option>
                                        <option value="pharmaciens">pharmaciens</option>
                                        <option value="ingénieurs">ingénieurs</option>
                                        <option value="artisans">artisans</option>
                                       
                                        



                                    </select>
                                </div>
                            </div>
		<div class="form-row">
                            <div class="form-group">
                                <label for="password">maladie</label>
                                <div class="select-list">
                                    <select name="maladie" id="country" required>
									<option value="US"></option>
                                        <option value="diabète">diabète</option>
                                        <option value="a pression artérielle">la pression artérielle</option>
                                        <option value="Collestérole">Collestérole</option>
                                        <option value="Azme">Azme</option>
                                        <option value="Allergie">Allergie</option>
                                       
                                     
                                   



                                    </select>
                                </div>
                            </div>
		
		<div class="form-group">
          <label for="formGroupExampleInput">source</label>
          <input type="text" name="source" class="form-control" id="formGroupExampleInput" placeholder=" " value="{{$publication->source}}">
        </div>
        

        
		   
		   <button type="submit" value="Modifer" class="btn btn-danger">Modifier</button>
          
          </form>
        </div><br>
          

          <button type="button" class="btn btn-warning">Annuler</button>
      </form>
   
    </div><!-- /.container-fluid -->
</div>

