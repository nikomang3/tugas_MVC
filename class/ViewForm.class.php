<?php

class ViewForm {

    public function tampilForm(){ ?>

        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>Tugas MVC Form</title>
            <link href="css/bootstrap.min.css" rel="stylesheet">
            <link rel="stylesheet"href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
            <link href="https://fonts.googleapis.com/css?family=Archivo+Narrow|Lobster" rel="stylesheet">
        </head>

        <body>

            <div class="jumbotron text-center" style="background-image: url(/tugasMVC/bg.jpg); margin-bottom: 0px;">
            <img class="img-responsive" src="/tugasMVC/logo.png" alt="Chania" width="460" height="345" style="margin: auto; width: 15%"> 
            <h2 style="font-family: 'Lobster', cursive; color: #ff2b87">Miss Barbie</h2>
            </div>

            <div class="container" style="background-color: #fca2ca">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12" style="margin-top: 0px; padding: 40px">
                <h1 style="font-family: 'Archivo Narrow', sans-serif;">Formulir Miss Barbie</h1>
                <br>
                <div class="col-md-12 col-sm-12 col-xs-12" style="background-color: white; padding: 30px; box-sizing: border-box;">

        <!-- ==============================batas form============================ -->
                    <form class="form-horizontal" action="getHasil" method="POST" enctype="multipart/form-data">

                    <h4><b>Data Diri:</b></h4>
        <!-- ================================NAMA================================ -->
                    <div class="form-group">
                        <label class="control-label col-sm-3 col-md-2" for="nama1">Nama Lengkap:</label>
                        <div class="col-sm-8 col-md-8">
                        <input type="text" name="nama" class="form-control" id="nama1" placeholder="Sesuai KTP/Akte Kelahiran" required>
                        </div>
                    </div>
        <!-- ================================JENIS KELAMIN================================ -->
                    <div class="form-group">
                        <label class="control-label col-sm-3 col-md-2" for="jk1">Jenis Kelamin:</label>
                        <div class="col-sm-8 col-md-8">
                        <label class="radio-inline"><input type="radio" name="jk" value="Laki-laki" required>Laki-laki</label>
                        <label class="radio-inline"><input type="radio" name="jk" value="Perempuan" required>Perempuan</label>
                        </div>
                    </div>        
        <!-- ================================TEMPAT LAHIR================================ -->
                    <div class="form-group">
                        <label class="control-label col-sm-3 col-md-2" for="tpt1">Tempat Lahir:</label>
                        <div class="col-sm-8 col-md-8">
                        <input type="text" name="tempat" class="form-control" id="tpt1" placeholder="Sesuai KTP/Akte Kelahiran" required>
                        </div>
                    </div>
        <!-- ================================TANGGAL LAHIR================================ -->
                    <div class="form-group">
                        <label class="control-label col-sm-3 col-md-2" for="tgl1">Tanggal Lahir</label>
                        <div class="col-sm-4 col-md-3">
                        <input type="date" class="form-control" id="tgl1" name="tgl1" placeholder="Tanggal Lahir Anda" required>
                        </div>
                    </div>
        <!-- ================================AGAMA================================ -->
                    <div class="form-group">
                        <label class="control-label col-sm-3 col-md-2" for="agama">Agama:</label>
                        <div class="col-sm-3 col-md-2">
                        <select class="form-control" id="agama" name="agama">
                            <option value="Hindu">Hindu</option>
                            <option value="Islam">Islam</option>
                            <option value="Buddha">Buddha</option>
                            <option value="Kristen Protestan">Kristen Protestan</option>
                            <option value="Katolik">Katolik</option>
                            <option value="Kong Hu Cu">Kong Hu Cu</option>
                        </select>  
                        </div>
                    </div>
        <!-- ================================ALAMAT================================ -->
                    <div class="form-group">
                        <label class="control-label col-sm-3 col-md-2" for="al1">Alamat:</label>
                        <div class="col-sm-8 col-md-8">
                        <input type="text" name="alamat" class="form-control" id="al1" placeholder="Tempat tinggal saat ini" required>
                        </div>
                    </div>
                    
        <!-- ================================PROFESI================================ -->
                    <div class="form-group">
                        <label class="control-label col-sm-3 col-md-2" for="pro1">Profesi Saat Ini:</label>
                        <div class="col-sm-8 col-md-8">
                        <input type="text" name="profesi" class="form-control" id="pro1" placeholder="e.g: Mahasiswa" required>
                        </div>
                    </div>
        <!-- ================================SEKOLAH/INSTANSI================================ -->
                    <div class="form-group">
                        <label class="control-label col-sm-3 col-md-2" for="ins1">Nama Sekolah/  Universitas/ Instansi:</label>
                        <div class="col-sm-8 col-md-8">
                        <input type="text" name="instansi" class="form-control" id="ins1" placeholder="e.g: Universitas Brawijaya" required>
                        </div>
                    </div>
        <!-- ================================TINGGI================================ -->
                    <div class="form-group">
                        <label class="control-label col-sm-3 col-md-2" for="tb1">Tinggi Badan (cm):</label>
                        <div class="col-sm-2 col-md-1">
                        <input type="text" name="tb" class="form-control" id="tb1" required>
                        </div>
                    </div>
        <!-- ================================BERAT================================ -->
                    <div class="form-group">
                        <label class="control-label col-sm-3 col-md-2" for="bb1">Berat Badan (kg):</label>
                        <div class="col-sm-2 col-md-1">
                        <input type="text" name="bb" class="form-control" id="bb1" required>
                        </div>
                    </div>
        <!-- ================================EMAIL================================ -->
                    <div class="form-group">
                        <label class="control-label col-sm-3 col-md-2" for="email1">Email:</label>
                        <div class="col-sm-8 col-md-8">
                        <input type="email" name="email1" class="form-control" id="email1" placeholder="myemail@example.com" required> 
                        </div>
                    </div>

                    <br>
                    <h4><b>Keterampilan Khusus:</b></h4>
        <!-- ================================CHECK BOX================================ -->
                    <div class="form-group">
                        <label class="control-label col-sm-3 col-md-2" for="msk1">Bermain Alat Musik</label>
                        <div class="col-sm-8 col-md-8">
                        <div class="checkbox">
                            <label><input type="checkbox" id="msk1" name="alat_musik[]" value="Gitar">Gitar</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" id="msk1" name="alat_musik[]" value="Bass">Bass</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" id="msk1" name="alat_musik[]" value="Piano">Piano</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" id="msk1" name="alat_musik[]" value="Drum">Drum</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" id="msk1" name="alat_musik[]" value="Biola">Biola</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="hidden" id="mskhidden" name="alat_musik[]" value="Tidak Ada"></label>
                        </div>
                        <script>
                            if(document.getElementById("msk1").checked) {
                            document.getElementById("mskhidden").disabled = true;
                        }
                        </script>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-3 col-md-2" for="mny1">Menyanyi</label>
                        <div class="col-sm-8 col-md-8">
                        <div class="checkbox">
                            <label><input type="checkbox" id="mny1" name="menyanyi[]" value="Pop">Pop</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox"id="mny1" name="menyanyi[]" value="Jazz">Jazz</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" id="mny1" name="menyanyi[]" value="Rock">Rock</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" id="mny1" name="menyanyi[]" value="Seriosa">Seriosa</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="hidden" id="mnyhidden" name="menyanyi[]" value="Tidak Ada"></label>
                        </div>
                        <script>
                            if(document.getElementById("mny1").checked) {
                            document.getElementById("mnyhidden").disabled = true;
                        }
                        </script> 
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-3 col-md-2" for="mnr1">Menari</label>
                        <div class="col-sm-8 col-md-8">
                        <div class="checkbox">
                            <label><input type="checkbox" id="mnr1" name="menari[]" value="Balet">Balet</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" id="mnr1" name="menari[]" value="Hip Hop">Hip Hop</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" id="mnr1" name="menari[]" value="Tradisional">Tradisional</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="hidden"id="mnyhidden" name="menari[]" value="Tidak Ada"></label>
                        </div>
                        <script>
                            if(document.getElementById("mnr1").checked) {
                            document.getElementById("mnrhidden").disabled=true;
                            }
                        </script>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-3 col-md-2" for="bhs1">Bahasa Yang Dikuasai</label>
                        <div class="col-sm-8 col-md-8">
                        <div class="checkbox">
                            <label><input type="checkbox" id="bhs1" name="bahasa[]" value="Perancis">Perancis</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" id="bhs1" name="bahasa[]" value="Mandarin">Mandarin</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" id="bhs1" name="bahasa[]" value="Inggris">Inggris</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" id="bhs1" name="bahasa[]" value="Spanyol">Spanyol</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="hidden"id="bhshidden" name="bahasa[]" value="Tidak Ada"></label>
                        </div>
                        <script>
                            if(document.getElementById("bhs1").checked) {
                            document.getElementById("bhshidden").disabled = true;
                            }
                        </script>
                        </div>
                    </div>
        <!-- ================================FILE UPLOAD================================ -->
                    <br>
                    <h4><b>Upload Berkas:</b></h4>
                    <div class="col-sm-3 col-md-2"></div>
                    <div class="col-sm-9 col-md-10">
                        <h5>Foto Full Body </h5>
                        <input type="file" name="ffb" accept="image/*" required>
                        <br>
                        <h5>Foto Close Up</h5>
                        <input type="file" name="fcu" accept="image/*" required>
                        <br>
                        <br>
                        <br>
                    </div> 
        <!-- ================================TEXT AREA================================ -->
                    <div class="form-group">
                        <label for="per1">Pernyataan Penutup:</label>
                        <textarea class="form-control" name="pernyataan" rows="5" id="per1" placeholder="Tulislah Pernyataan Penutup Mengapa Anda Berhak Terpilih Menjadi Miss Barbie!" required></textarea>
                    </div>
        <!-- ================================TOMBOL SUBMIT================================ -->
                    <div>
                        <input type="submit" class="btn" value="Menyerahkan Formulir" style="background-color: #d30044; color: white; font-size: 14pt">
                    </div>    

                    </form>
        <!-- ================================BATAS FORM================================ -->
                </div>

                </div>
            </div>
            </div>

        </body>
        </html>
    <?php
    }

    public function tampilHasil($fakultas){ ?>

        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>p2 Tugas II</title>
            <link href="css/bootstrap.min.css" rel="stylesheet">
            <link rel="stylesheet"href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
            <link href="https://fonts.googleapis.com/css?family=Archivo+Narrow|Lobster" rel="stylesheet">
        </head>
        <body>

            <div class="jumbotron text-center" style="background-image: url(/tugasMVC/bg.jpg); margin-bottom: 0px;">
                <img class="img-responsive" src="/tugasMVC/logo.png" alt="Chania" width="460" height="345" style="margin: auto; width: 15%"> 
                <h2 style="font-family: 'Lobster', cursive; color: #ff2b87">Miss Barbie</h2>
            </div>

            <div class="container" style="background-color: #fca2ca">
                <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12" style="margin-top: 0px; padding: 40px">

                    <div class="col-md-12 col-sm-12 col-xs-12" style="background-color: white;">
                    <h2 style="font-family: 'Archivo Narrow', sans-serif; text-align: center;">Peserta Miss Barbie</h2>
                    <div>
        <!-- ================================foto visible xs================================ -->
                        <div class="col-xs-12 visible-xs">
                            <div class="col-xs-6">
                            <?php
                                $dir = './foto/';
                                $foto = $_FILES['fcu']['name'];
                                $tmp  = $_FILES['fcu']['tmp_name'];
                                move_uploaded_file($tmp, $dir.$foto);
                            ?>
                            <img src="<?php echo '/tugasMVC/'.$dir.$foto ?>" class="img-thumbnail" alt="Foto Tidak Tersedia">
                            </div>
                            <div class="col-xs-6">
                            <?php
                                $dir = './foto/';
                                $foto = $_FILES['ffb']['name'];
                                $tmp  = $_FILES['ffb']['tmp_name'];
                                move_uploaded_file($tmp, $dir.$foto);
                            ?>
                            <img src="<?php echo '/tugasMVC/'.$dir.$foto ?>" class="img-thumbnail" alt="Foto Tidak Tersedia">
                            <br>
                            <br>
                            </div>
                        </div>
        <!-- ================================DATA DIRI================================ -->
                        <div class="col-md-8 col-sm-8">
                            <h3>Data Diri</h3>
                            <table class="table table-striped">
                            <tbody>
                                <tr>
                                <td>Nama:</td>
                                <?php echo "<td>".$_POST['nama']."</td>";?>
                                </tr>

                                <tr>
                                <td>Jenis Kelamin:</td>
                                <?php echo "<td>".$_POST['jk']."</td>";?>
                                </tr>

                                <tr>
                                <td>Tempat Lahir:</td>
                                <?php echo "<td>".$_POST['tempat']."</td>";?>
                                </tr>

                                <tr>
                                <td>Tanggal Lahir:</td>
                                <?php $tanggal_lahir = date("d-m-Y", strtotime($_POST['tgl1'])); 
                                echo "<td>".$tanggal_lahir."</td>"; ?>
                                </tr>
                                
                                <tr>
                                <td>Agama:</td>
                                <?php echo "<td>".$_POST['agama']."</td>";?>
                                </tr>
                                
                                <tr>
                                <td>Alamat:</td>
                                <?php echo "<td>".$_POST['alamat']."</td>";?>
                                </tr>

                                <tr>
                                <td>Profesi Saat Ini:</td>
                                <?php echo "<td>".$_POST['profesi']."</td>";?>
                                </tr>

                                <tr>
                                <td>Nama Sekolah/ <br>Universitas/ <br>Instansi:</td>
                                <?php echo "<td>".$_POST['instansi']."</td>";?>
                                </tr>

                                <tr>
                                <td>Fakultas:</td>
                                <?php echo "<td>".$fakultas."</td>";?>
                                </tr>

                                <tr>
                                <td>Tinggi Badan:</td>
                                <?php echo "<td>".$_POST['tb']." cm"."</td>";?>
                                </tr>

                                <tr>
                                <td>Berat Badan:</td>
                                <?php echo "<td>".$_POST['bb']." kg"."</td>";?>
                                </tr>

                                <tr>
                                <td>Email:</td>
                                <?php echo "<td>".$_POST['email1']."</td>";?>
                                </tr>
                            </tbody>
                            </table>
        <!-- ================================keterampilan================================ -->
                        <br>
                        <h3>Keterampilan Khusus</h3>
                            <table class="table table-striped">
                            <tbody>
                                <tr>
                                <td>Bermain Alat Musik:</td> 
                                <?php echo "<td>"; 
                                $data = count($_POST['alat_musik']);
                                foreach ($_POST['alat_musik'] as $key => $alatMusik) {
                                    if($key < $data-2) {
                                    if($key > 0 && $alatMusik == 'Tidak Ada'){
                                        echo " ";
                                    } else{
                                        echo $alatMusik . ", ";
                                    }
                                    }else{
                                    if($key > 0 && $alatMusik == 'Tidak Ada'){
                                        echo " ";
                                    } else{
                                        echo $alatMusik;
                                    }
                                    }
                                } 
                                echo "</td>"
                                ?>
                                </tr>
                                
                                <tr>
                                <td>Menyanyi:</td>
                                <?php echo "<td>"; 
                                $data = count($_POST['menyanyi']);
                                foreach ($_POST['menyanyi'] as $key => $lagu) {
                                    if($key < $data-2) {
                                    if($key > 0 && $lagu == 'Tidak Ada'){
                                        echo " ";
                                    } else{
                                        echo $lagu . ", ";
                                    }
                                    }else{
                                    if($key > 0 && $lagu == 'Tidak Ada'){
                                        echo " ";
                                    } else{
                                        echo $lagu;
                                    }
                                    }
                                } 
                                echo "</td>"
                                ?>
                                </tr>

                                <tr>
                                <td>Menari:</td>
                                <?php echo "<td>"; 
                                $data = count($_POST['menari']);
                                foreach ($_POST['menari'] as $key => $tari) {
                                    if($key < $data-2) {
                                    if($key > 0 && $tari == 'Tidak Ada'){
                                        echo " ";
                                    } else{
                                        echo $tari . ", ";
                                    }
                                    }else{
                                    if($key > 0 && $tari == 'Tidak Ada'){
                                        echo " ";
                                    } else{
                                        echo $tari;
                                    }
                                    }
                                } 
                                echo "</td>"
                                ?>
                                </tr>

                                <tr>
                                <td>Bahasa Yang Dikuasai:</td>
                                <?php echo "<td>"; 
                                $data = count($_POST['bahasa']);
                                foreach ($_POST['bahasa'] as $key => $bhs) {
                                    if($key < $data-2) {
                                    if($key > 0 && $bhs == 'Tidak Ada'){
                                        echo " ";
                                    } else{
                                        echo $bhs . ", ";
                                    }
                                    }else{
                                    if($key > 0 && $bhs == 'Tidak Ada'){
                                        echo " ";
                                    } else{
                                        echo $bhs;
                                    }
                                    }
                                } 
                                echo "</td>"
                                ?>
                                </tr>
                            </tbody>
                            </table>
        <!-- ================================hasil text area================================ -->
                        <br>
                        <h3>Pernyataan Penutup</h3>
                            <table class="table table-striped">
                            <tbody>
                                <tr>
                                <?php echo "<td>".$_POST['pernyataan']."</td>";?>
                                </tr>
                            </tbody>
                            </table>
                        </div>
        <!-- ================================foto MD dan SM================================ -->
                        <div class="col-md-3 col-sm-4 hidden-xs">
                            <br>
                            <br>
                            <br>
                            <div>
                            <?php
                                $dir = './foto/';
                                $foto = $_FILES['fcu']['name'];
                                $tmp  = $_FILES['fcu']['tmp_name'];
                                move_uploaded_file($tmp, $dir.$foto);
                            ?>
                            <img src="<?php echo '/tugasMVC/'.$dir.$foto ?>" class="img-thumbnail" alt="Foto Tidak Tersedia">
                            </div>
                            <br>
                            <div>
                            <?php
                                $dir = './foto/';
                                $foto = $_FILES['ffb']['name'];
                                $tmp  = $_FILES['ffb']['tmp_name'];
                                move_uploaded_file($tmp, $dir.$foto);
                            ?>
                            <img src="<?php echo '/tugasMVC/'.$dir.$foto ?>" class="img-thumbnail" alt="Foto Tidak Tersedia">
                            </div>
                            <br>
                            <br>
                            <br>
                        </div>
                        
                    </div>
                    </div> 
                </div>
                </div>
            </div>

        </body>
        </html>

    <?php
    }
}
