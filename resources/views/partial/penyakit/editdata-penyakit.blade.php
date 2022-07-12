<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" >
    <!-- CSS Assets -->
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Mulish' rel='stylesheet'>
    <link rel="stylesheet" href="css/style1.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
    <title>Penyakit - Edit Data</title>
</head>

<body>
    <div class="container">
        <div class="left">
            <div class="side-bar m-3">
                <div class="menu mt-5">
                    <div class="item mx-4"><img src="image/icon_problemsolver.png" alt=""></div>
                    <div class="item mt-5 ml-4"><a href="#"><img src="vectors/icon_dashboard.svg" alt=""></i>Dashboard</a></div>
                    <hr class="mx-4 border-bottom"></hr>
                    
                    <div class="item ml-4">
                        <a class="sub-btn"><i class="fa-solid fa-user"></i>Admin<i class="fas fa-angle-right dropdown"></i></a>
                        <div class="sub-menu">
                            <a href="#" class="sub-item"><img src="vectors/icon_catatan.svg" alt="">Catatan</a>
                            <a href="#" class="sub-item"><img src="vectors/icon_aktivitas.svg" alt="">Aktivitas</a>
                        </div>
                    </div>
                    <div class="item ml-4">
                        <a class="sub-btn"><i class="fa-solid fa-stethoscope"></i>Report Data<i class="fas fa-angle-right dropdown"></i></a>
                        <div class="sub-menu">
                            <a href="#" class="sub-item"><img src="vectors/icon_kesehatan-jiwa.svg" alt="">Kesehatan Jiwa</a>
                            <a href="/surveilans-1" class="sub-item"><img src="vectors/icon_surveilans.svg" alt="">Surveilans 1</a>
                            <a href="#" class="sub-item"><img src="vectors/icon_surveilans.svg" alt="">Surveilans 2</a>
                            <a href="#" class="sub-item"><img src="vectors/icon_perkesmas.svg" alt="">Perkesmas</a>
                            <a href="#" class="sub-item"><img src="vectors/icon_identitas-pasien.svg" alt="">Identitas Pasien</a>
                            <a href="/penyakit" class="list-group-item list-group-item-action"><img src="vectors/icon_penyakit-ungu.svg" alt="">Penyakit</a>
                        </div>
                    </div>
                    <hr class="mx-4 border-bottom"></hr>
                    <div class="item ml-4"><a href="/setting"><img src="vectors/icon_pengaturan.svg" alt=""></i>Pengaturan</a></div>
                    <div class="item ml-4"><a href="#"><img src="vectors/icon_keluar.svg" alt="">Keluar</a></div>
                </div>
            </div>

            <script type="text/javascript">
                $(document).ready(function(){
                    // 
                    $('.sub-btn').click(function(){
                        $(this).next('.sub-menu').slideToggle();
                    });
                });
            </script>
        </div>

         <div class="l-right mt-4">
             <div class="title mb-5">
                <h4 class="text-title color-black lead font-bold">Identitas Penyakit</h4>
                <h1 class="color-neutral-400">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Porttitor adipiscing in consectetur sem ut netus scelerisque. Viverra urna vitae viverra habitant a magna vitae, fermentum morbi. Magna magna non ridiculus vitae viverra feugiat morbi sed.</h1>
            </div>
            <div class="content">
                <div class="content-body border">
                    <table class="table table-borderless">
                        <thead class="color-neutral-500 bg-neutral-100">
                            <tr class="border-#f6f6f6 border-bottom">
                                <th class="p-4">Edit Data</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="color-neutral-500">
                                <td class="p-4">No</td>
                                <td><input type="text" class="td-groupe p-3" placeholder="1"></td>
                            </tr>
                            <tr class="color-neutral-500">
                                <td class="p-4">ID. Register</td>
                                <td><input type="text" class="td-groupe p-3" placeholder="#12345"></td>
                            </tr>
                            <tr class="color-neutral-500" >
                                <td class="p-4">Nama Penyakit</td>
                                <td><input type="text" class="td-groupe p-3" placeholder="Kolera"></td>
                            </tr>
                            <tr class="color-neutral-500">
                                <td class="p-4">Tanggal</td>
                                <td><input type="date" class="td-groupe p-3"></td>
                            </tr>
                            <tr class="color-neutral-500">
                                <td class="p-4">Deskripsi</td>
                                <td><input type="text" class="td-groupe p-5" placeholder="Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque impedit quaerat, cum exercitationem repellendus corrupti molestias veritatis tempora rerum sit cupiditate vitae quibusdam quod dolor quas optio aliquam maxime iusto."></td>
                            </tr>
                        </tbody>
                    </table>   
                    <div class="row mb-4">
                        <div class="col mr-5">
                        </div>
                        <div class="col mr-5">
                            <button class="btn btn-outline-danger" type="button">Reset</button>
                        </div>
                        <div class="col mr-5">
                            <button class="btn-simpan" type="button">Simpan</button>
                        </div>
                    </div>   
                </div>
            </div> 
        </div>
    </div>        
</body>
</html>