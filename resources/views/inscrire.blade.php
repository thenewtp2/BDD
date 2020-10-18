
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>S'inscrire</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="vendor/jquery-ui/jquery-ui.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="main">

        <section class="signup">
           <!-- <img src="C:\Users\AZIZIMOUD\Downloads\cdc-bkc-m0iZ4Sk-unsplash.jpg" alt=""> -->
            <div class="container">
                <div class="signup-content">
                    <form method="POST" id="signup-form" class="signup-form">
                        <div class="form-row">
                            <div class="form-group">
                                <label for="first_name">Nom</label>
                                <input type="text" class="form-input" name="first_name" id="first_name" />
                            </div>
                            <div class="form-group">
                                <label for="last_name">Prenom</label>
                                <input type="text" class="form-input" name="last_name" id="last_name" />
                            </div>
                        </div>
                        
                        <div class="form-row">
                            <div class="form-group form-icon">
                                <label for="birth_date">Date de naissance </label>
                                <input type="text" class="form-input" name="birth_date" id="birth_date" placeholder="MM-DD-YYYY" />
                            </div>
                            <div class="form-radio">
                                <label for="gender">Sexe </label>
                                <div class="form-flex">
                                    <input type="radio" name="gender" value="male" id="male" checked="checked" />
                                    <label for="male">Homme</label>
    
                                    <input type="radio" name="gender" value="female" id="female" />
                                    <label for="female">Femme</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="password">Mot de passe</label>
                            <input type="password" class="form-input" name="password" id="password"/>
                        </div>
                        <div class="form-group">
                            <label for="phone_number">Profession </label>
                            <input type="number" class="form-input" name="phone_number" id="phone_number" />
                        </div>
                        <div class="form-row">
                        <div class="form-group">
                            <label for="re_password"> Maladie chronique</label>
                            <div class="select-list">
                                <select name="Maladie" id="Maladie" required>
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
                                    <select name="country" id="country" required>
                                        <option value="US">Adrar</option>
                                        <option value="UK">Chlef</option>
                                        <option value="VN">Laghouat</option>
                                        <option value="VN">Oum el bouaghi</option>
                                        <option value="VN">Batna</option>
                                        <option value="VN">Béjaya</option>
                                        <option value="VN">Biskra</option>
                                        <option value="VN">Béchar</option>
                                        <option value="VN">Blida</option>
                                        <option value="VN">Bouira</option>
                                        <option value="VN">Tamanrasset</option>
                                        <option value="VN">Tébessa</option>
                                        <option value="VN">Tlemcen</option>
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
                                        <select name="country" id="country" required>
                                            <option value="US">Tlemcen</option>
                                            <option value="US">béni mester</option>
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
                           <input type="submit"  name="submit" id="submit" class="form-submit" value="Submit"/>
                        </div>
                    </form>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/jquery-ui/jquery-ui.min.js"></script>
    <script src="vendor/jquery-validation/dist/jquery.validate.min.js"></script>
    <script src="vendor/jquery-validation/dist/additional-methods.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>