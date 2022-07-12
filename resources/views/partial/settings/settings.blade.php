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
    <title>Setting</title>
</head>

<body>
    <div class="container">
        <div class="left">
            @include('partial/sidebar') 
        </div>

        <div class="l-right pb-4">
            <div class="title mt-3">
                <h4 class="text-title color-black lead font-bold">Setting</h4>
            </div>
            
            <div class="ttable border-line bg-white border-radius mt-3">
                <div class="p-2 bg-light border-bottom rounded-bottom-0">
                    <div class="m-3 row">
                        <p class="col-6 text-dark">General Account Settings</p>
                        <!-- <div class=""><label>Detail Data</label></div> -->
                        <div class="col-6 text-right"><a href="/settings-edit"><small class="text-dark"> Ubah data</small></a></div>
                    </div>
                </div>
                <div class="text-dark p-5">
                    <div class="ml-2 form-group row">
                        <label for="" class="col-sm-3 col-form-label">Nama</label>
                        <div class="col-sm-8 mt-2">
                            <p>Karoni Marliani</p>
                        </div>
                    </div>
                    <div class="ml-2 form-group row">
                        <label for="" class="col-sm-3 col-form-label">Username</label>
                        <div class="col-sm-8 mt-2">
                            <p>Admin123</p>
                        </div>
                    </div>
                    <div class="ml-2 form-group row">
                        <label for="" class="col-sm-3 col-form-label">Email</label>
                        <div class="col-sm-8 mt-2">
                            <p>Admin123@gmail.com</p>
                        </div>
                    </div>
                    <div class="ml-2 form-group row">
                        <label for="" class="col-sm-3 col-form-label">Alamat</label>
                        <div class="col-sm-8 mt-2">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. At placerat pellentesque fusce felis at ultricies.</p>
                        </div>
                    </div>
                    <div class="ml-2 form-group row">
                        <label for="" class="col-sm-3 col-form-label">Kontak</label>
                        <div class="col-sm-8 mt-2">
                            <p>081234567890</p>
                        </div>
                    </div>
                </div>
            </div> 
            
            <div class="ttable border-line bg-white border-radius mt-4" id="item">
                <div class="p-2 bg-light border-bottom rounded-bottom-0">
                    <p class="m-3 text-dark">Security</p>
                </div>
                <a class="p-2 row" id="toggle-dropdown">
                    <p for="" class="col-sm-3 col-form-label ml-3 my-3 text-dark">Ubah Kata Kandi</p>
                    <div class="col-sm-8 mt-2">
                        <p class="my-3 text-dark">Sebaiknya gunakan kata sandi yang kuat yang tidak Anda gunakan di tempat lain</p>
                    </div>
                </a>
                <div class="text-dark border-top p-5" id="form-password">
                    <div class="ml-2 form-group row py-3">
                        <label for="" class="col-sm-3 col-form-label">Kata Sandi Sebelumnya</label>
                        <div class="col-sm-8">
                            <input type="textarea" class="form-control">
                        </div>
                    </div>
                    <div class="ml-2 form-group row py-3">
                        <label for="" class="col-sm-3 col-form-label">Kata Sandi Baru</label>
                        <div class="col-sm-8">
                            <input type="textarea" class="form-control">
                        </div>
                    </div>
                    <div class="ml-2 form-group row pt-3">
                        <label for="" class="col-sm-3 col-form-label">Konfirmasi Kata Sandi</label>
                        <div class="col-sm-8">
                            <input type="textarea" class="form-control">
                        </div>
                    </div>
                    <div class="text-right mr-4 pb-3">
                        <a href="" class="mr-5 pr-3 form-label text-dark"><small> Lupa kata sandi?</small></a>
                    </div>
                    <div class="ml-2 form-group row py-3">
                        <label for="" class="col-sm-3"></label>
                        <div class="col-sm-9">
                            <button type="reset" class="col-5 btn btn-outline-danger mr-4">Batal</button>
                            <button type="submit" class="col-5 btn btn-purple text-white ml-3">Simpan</button>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
    </div>  

    <script type="text/javascript">
        $(document).ready(function(){
            // 
            $('#toggle-dropdown').click(function(){
                $(this).next('#form-password').slideToggle();
            });
        });
    </script>
</body>
</html>