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
            <?php echo $__env->make('partial/sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> 
        </div>

        <div class="l-right pb-5">
            <div class="title mt-3">
                <h4 class="text-title color-black lead font-bold">Setting</h4>
            </div>
            
            <div class="ttable border-line bg-white border-radius mt-3">
                <div class="p-2 bg-light border-bottom rounded-bottom-0">
                    <p class="m-3 text-dark">General Account Settings</p>
                </div>
                <div class="text-dark py-4">
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
            
            <div class="ttable border-line bg-white border-radius mt-4">
                <div class="p-2 bg-light border-bottom rounded-bottom-0">
                    <p class="m-3 text-dark">Security</p>
                </div>
                <div class="p-2 text-dark row">
                    <label for="" class="col-sm-3 col-form-label ml-3 my-3">Ubah Kata Kandi</label>
                    <div class="col-sm-8 mt-2">
                        <p class="my-3">Sebaiknya gunakan kata sandi yang kuat yang tidak Anda gunakan di tempat lain</p>
                    </div>
                </div>
                <div class="text-dark border-top py-4">
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
                    <div class="ml-2 form-group row py-3">
                        <label for="" class="col-sm-3 col-form-label">Konfirmasi Kata Sandi</label>
                        <div class="col-sm-8">
                            <input type="textarea" class="form-control">
                        </div>
                    </div>
                </div>
            </div> 
        </div>
    </div>  
         
</body>
</html><?php /**PATH D:\Semester_6\Kuliah\MPTI\MPTI\mpti_rekapdatapasien\resources\views/partial/setting/setting.blade.php ENDPATH**/ ?>