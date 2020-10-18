@extends('layouts.app')
@yield('content')
<form action= "{{url('chifres/'.$chifre->id)}}" method="POST">
<input type="hidden" name="_method" value="PUT">

	{{ csrf_field()}}


 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Ajouter un chiffre:</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
           
        </div><!-- /.col -->
    </div><!-- /.row -->
        
    
    
    <!-- /.content-header -->
<br><br>
    <form>
         <div class="form-row">
                            <div class="form-group">
                                <label for="password" value="{{$chifre->wilaya}}">Wilaya</label>
                                <div class="select-list" >
                                    <select name="wilaya" id="country" required >
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
		
		<div class="form-group">
          <label for="formGroupExampleInput">nombre de malade</label>
          <input type="text" name="nbmal" class="form-control" id="formGroupExampleInput" placeholder=" " value="{{$chifre->nbmal}}">
        </div>
        
		 
		  <div class="form-group">
          <label for="formGroupExampleInput">nombre de guérie</label>
          <input type="text" name="nbgue" class="form-control" id="formGroupExampleInput" placeholder=" " value="{{$chifre->nbgue}}">
        </div>
		<div class="form-group">
          <label for="formGroupExampleInput">nombre de mort</label>
          <input type="text" name="nbmort" class="form-control" id="formGroupExampleInput" placeholder=" " value="{{$chifre->nbmort}}">
        </div>
		
		<div>
    <label for="party">date</label>
    <input type="date" id="party" name="date"   placeholder=" " value="{{$chifre->date}}" >
    <span class="validity"></span>
  </div>
		

        
		   
		   <button type="submit" value="Modifer" class="btn btn-danger">Modifier</button>
          
          </form>
        </div><br>
          

          <button type="button" class="btn btn-warning">Annuler</button>
      </form>
   
    </div><!-- /.container-fluid -->
</div>

