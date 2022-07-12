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
    <link rel="stylesheet" href="css/style.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
    <title>Setting</title>
</head>

<body>
    <div class="container">
        <div class="left">
            @include('partial/sidebar') 
        </div>

        <div class="l-right mt-3 border">
            <div class="border-line bg-white border-radius">
                <div class="p-2 bg-light border-bottom rounded-bottom-0">
                    <div class="m-3 row">
                        <p class="col-6 text-dark">General Account Settings</p>
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
            <!-- <div class="content">
                <div class="content-body border">
                    <table class="table table-borderless">
                        <thead class="color-neutral-500 bg-neutral-100">
                            <tr class="border-#f6f6f6 border-bottom">
                                <th  scope="col" >General Account Setting</th>
                                <th  scope="col" ></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="color-neutral-500">
                                <td class="p-4">Nama</td>
                                <td><input type="text" class="td-groupe p-3" placeholder="Karoni Marliani"></td>
                            </tr>
                            <tr class="color-neutral-500">
                                <td class="p-4">Username</td>
                                <td><input type="text" class="td-groupe p-3" placeholder="Admin123"></td>
                            </tr>
                            <tr class="color-neutral-500">
                                <td class="p-4">Email</td>
                                <td><input type="text" class="td-groupe p-3" placeholder="Admin123@gmail.com" ></td>
                            </tr>
                            <tr class="color-neutral-500" >
                                <td class="p-4">Alamat</td>
                                <td><input type="text" class="td-groupe pb-5 p-3" placeholder="Karoni Marliani"></td>
                            </tr>
                            <tr class="color-neutral-500">
                                <td class="p-4">Kontak</td>
                                <td><input type="text" class="td-groupe p-3" placeholder="081234567890"></td>
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
            </div>  -->
        </div>
    </div>        
</body>
</html>