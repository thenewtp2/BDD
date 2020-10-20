@extends('layouts.master3')
@section('content')

<form action= "{{url('citoyens')}}" method="POST">
	{{ csrf_field()}}


 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
           
          </div><!-- /.col -->
          <div class="col-sm-6">
           
        </div><!-- /.col -->
    </div><!-- /.row -->
        
    </div>
	</div>
    </div>
    <!-- /.content-header -->
<br><br>
    <form>
	
		

	 <div class="main">

        <section class="signup">
           <!-- <img src="C:\Users\AZIZIMOUD\Downloads\cdc-bkc-m0iZ4Sk-unsplash.jpg" alt=""> -->
            <div class="container">
                <div class="signup-content">
                    <form method="POST" id="signup-form" class="signup-form">
                        <div class="form-row">
                            <div class="form-group">
                                <label for="first_name">nom</label>
                                <input type="text" class="form-input" name="nom" id="" />
                            </div>
                            <div class="form-group">
                                <label for="last_name">prenom</label>
                                <input type="text" class="form-input" name="prenom" id="" />
                            </div>
                        </div>
                        
                        		<div>
    <label for="party">date</label>
    <input type="date" id="party" name="date" min="1900-01-01" max="2020-12-12" required>
    <span class="validity"></span>
  </div>
                        <div class="form-group">
                            <label for="password">email</label>
                            <input type="email" class="form-input" name="email" id=""/>
                        </div>
						<div class="form-group">
                            <label for="password">password</label>
                            <input type="password" class="form-input" name="password" id="password"/>
                        </div>
<div class="form-group">
    <label for="exampleFormControlSelect1">profession</label>
    <select class="form-control" name="profession">
                            
								<option></option>
                                    <option value="medecin">medecin<option>
                                    <option value="professeur">professeur</option>
                                    <option value="commerçant">commerçant</option>
									<option value="pharmaciens">pharmaciens</option>
									<option value="ingénieure">ingénieure</option>
                                    


                                </select>
                            </div>

                        
                        <div class="form-row">
                        <div class="form-group">
                            <label for="re_password"> maladie</label>
                            <div class="select-list">
                                <select name="maladie" id="Maladie" >
								<option></option>
                                    <option value="US">Les maladies cardiovasculaires</option>
                                    <option value="US">Diabète</option>
                                    <option value="US">Cancer</option>
                                    


                                </select>
                            </div>
                        </div>
                        </div>
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
                            
                        
                        <div class="form-group">
                           <input type="submit"  name="submit" id="submit" class="form-submit" value="Submit"/>
                        </div>
                    </form>
                </div>
            </div>
        </section>

    </div>

@endsection