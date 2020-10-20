
@extends('layouts.master2')
@section('content')

<form action= "{{url('signals')}}" method="POST">
	{{ csrf_field()}}
<body>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">je dénonce:</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
           
        </div><!-- /.col -->
    </div><!-- /.row -->

	
	
		

	  <form>
	
		

	   <div class="form-row">
                            <div class="form-group">
                                <label for="password">Wilaya</label>
                                <div class="select-list">
                                    <select name="wilaya" id="country" >
									<option></option>
                                        <option value="adrar">Adrar</option>
                                        <option value="chlef">Chlef</option>
                                        <option value="laghout">Laghouat</option>
                                        <option value="VN">Oum el bouaghi</option>
                                        <option value="VN">Batna</option>
                                        <option value="VN">Béjaya</option>
                                        <option value="VN">Biskra</option>
                                        <option value="VN">Béchar</option>
                                        <option value="blida">Blida</option>
                                        <option value="VN">Bouira</option>
                                        <option value="VN">Tamanrasset</option>
                                        <option value="VN">Tébessa</option>
                                        <option value="tlemcen">Tlemcen</option>
                                        <option value="VN">Tiaret</option>
                                        <option value="VN">Tizi Ouzou</option>
                                        <option value="VN">Alger</option>
                                        <option value="VN">Djelfa</option>
                                        <option value="VN">Jijel</option>
                                        <option value="VN">Sétif</option>
                                        <option value="VN">Saida</option>
                                        <option value="VN">Skikda</option>
                                        <option value="VN">Sidi bel abbes</option>
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
                                    <label for="password">Commune</label>
                                    <div class="select-list">
                                        <select name="commune" id="country" >
										 <option value="US"></option>
                                            <option value="US">Tlemcen</option>
                                            <option value="beni master">béni mester</option>
                                            <option value="UK">Chetouane</option>
                                           
                                            <option value="VN">Ain Talout</option>
                                            <option value="VN">Remchi</option>
                                            <option value="VN">El Fhoul</option>
                                            <option value="VN">Sabra</option>
                                            <option value="VN">Ghazaouet</option>
                                            <option value="VN">Souani</option>
                                            <option value="VN">Djebala</option>
                                            <option value="VN">El Gour</option>
                                            <option value="VN">Oued Lakhder</option>
                                            <option value="VN">Ain Fezza</option>
                                            <option value="VN">Ouled Mimoune</option>
                                            <option value="VN">Amier</option>
                                            <option value="VN">Ain Youssef</option>
                                            <option value="VN">Zenata/option>
                                            <option value="VN">Beni Snous</option>
                                            <option value="VN">Bab El Assa</option>
                                            <option value="VN">Dar yaghmouracene</option>
                                            <option value="VN">Fellaoucene</option>
                                            <option value="VN">Azails</option>
                                            <option value="US">Sebaa Chioukh</option>
                                            <option value="US">Terni beni hdyel</option>
                                            <option value="US">Ben sekrane</option>
                                            <option value="US">Ain Nehhala</option>
                                            <option value="US">Hennaya</option>
                                            <option value="US">Maghnia</option>
                                            <option value="US">Hamem Boughrara</option>
                                            <option value="US">Souahlia</option>
                                            <option value="US">M'sirda Fouaga</option>
                                            <option value="US">Ain Fettah</option>
                                            <option value="US">El Aricha</option>
                                            <option value="US">Souk tlata</option>
                                            <option value="US">Sid el abdli</option>
                                            <option value="US">Sebdou</option>
                                            <option value="US">Beni warsous</option>
                                            <option value="US">Sidi Medjahed</option>
                                            <option value="US">béni bousid</option>
                                            <option value="US">Marsa ben mhidi</option>
                                            <option value="US">Nedroma</option>
                                            <option value="US">Sid djilali</option>
                                            <option value="US">béni bahdel</option>
                                            <option value="US">El Bouihi</option>
                                            <option value="US">Honaine</option>
                                            <option value="US">Tianet</option>
                                            <option value="US">Ouled riyah</option>
                                            <option value="US">Bouhlou</option>
                                            <option value="US">béni khellad</option>
                                            <option value="US">Ain Ghoraba</option>
                                            <option value="US">Mansourah</option>
                                            <option value="US">béni Semiel</option>
                                            <option value="US">Ain El Kbira</option>






                                        </select>
                                    </div>
                                </div>
                          
                        </div>
		
	  <div class="form-group">
          <label for="formGroupExampleInput">status</label>
          <input type="text" name="status" class="form-control" id="formGroupExampleInput" placeholder=" ">
        </div>
        <div class="form-group">
          <label for="exampleFormControlTextarea1">contenu</label>
          <textarea class="contenu" name="contenu" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
		 
		  <div class="form-group">
            <label for="">file</label>
            <input type="file" name="file"class="form-control-file" id="exampleFormControlFile1">
          </div>
		 
		
        

        
		   
		   <button type="submit" value="Enregistrer" class="btn btn-success">Publier</button>
          
          </form>
        </div><br>
          
      </form>
   
    </div><!-- /.container-fluid -->
</div>
  





</body>




@endsection


