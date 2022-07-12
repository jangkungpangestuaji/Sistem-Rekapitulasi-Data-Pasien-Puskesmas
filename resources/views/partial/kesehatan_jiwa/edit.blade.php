<!doctype html>
<html lang="en">

<head>
    <title>Problem Solver | Kesehatan Jiwa</title>
</head>

<body>
    <div class="container">
        <div class="left">
            @include('partial/sidebar')
        </div>

        <div class="l-right">
            <div class="title">
                <h4 class="text-title color-black lead font-bold">Kesehatan Jiwa</h4>
                <h1 class="color-neutral-400">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Porttitor adipiscing in consectetur sem ut netus scelerisque. Viverra urna vitae viverra habitant a magna vitae, fermentum morbi. Magna magna non ridiculus vitae viverra feugiat morbi sed.</h1>
            </div>

            <div class="ttable border-line bg-white border-radius mt-4">
                <div class="p-2 bg-light rounded-bottom-0">
                    <p class="m-3 text-dark">Edit Data</p>
                </div>
                <div class="text-dark border-top">
                    <form class="ml-5 p-5" method="POST" action="/kesehatan_jiwa/updateKJiwa">
                        @csrf
                        <input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
                        <div class="form-group py-2 row">
                            <label for="" class="col-sm-3 col-form-label">Tanggal Kunjungan</label>
                            <div class="col-sm-8">
                                <input type="date" class="form-control" value="{{ $data->tanggal_kunjungan}}" name="tanggal_kunjungan" id="" placeholder="">
                            </div>
                        </div>

                        <div class="form-group py-2 row">
                            <label for="" class="col-sm-3 col-form-label">ID Kunjungan</label>
                            <div class="col-sm-8">
                                <input type="number" class="form-control" value="{{ $data->id_kesehatan_jiwa}}" name="id_kesehatan_jiwa" id="">
                            </div>
                        </div>

                        <div class="form-group py-2 row">
                            <label for="" class="col-sm-3 col-form-label">ID Register</label>
                            <div class="col-sm-8">
                                <input type="number" class="form-control" value="{{ $data->id_register}}" name="id_register" id="" disabled>
                            </div>
                        </div>

                        <div class="form-group py-2 row">
                            <label for="" class="col-sm-3 col-form-label">Nama Pasien</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="" disabled value="{{ $data->nama_pasien }}" name="nama_pasien">
                            </div>
                        </div>

                        <div class="form-group py-2 row">
                            <label for="" class="col-sm-3 col-form-label">Tanggal Lahir</label>
                            <div class="col-sm-8">
                                <input type="date" class="form-control" value="{{ $data->tanggal_lahir }}" name="tanggal_lahir" id="" disabled>
                            </div>
                        </div>

                        <div class="form-group py-2 row">
                            <label for="" class="col-sm-3 col-form-label">Jenis Kelamin</label>
                            <div class="col-sm-8">
                                <input type="input" class="form-control" id="" disabled value="{{ $data->jenis_kelamin }}" name="jenis_kelamin">
                            </div>
                        </div>

                        <div class="form-group py-2 row">
                            <label for="" class="col-sm-3 col-form-label">Alamat</label>
                            <div class="col-sm-8">
                                <input type="textarea" class="form-control" value="{{ $data->alamat}}" name="alamat" id="" disabled>
                            </div>
                        </div>

                        <div class="form-group py-2 row">
                            <label for="" class="col-sm-3 col-form-label">Kepala Keluarga</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" value="{{ $data->kepala_keluarga}}" nama="kepala_keluarga" id="" disabled>
                            </div>
                        </div>

                        <div class="form-group py-2 row">
                            <label for="" class="col-sm-3 col-form-label">NIK</label>
                            <div class="col-sm-8">
                                <input type="number" class="form-control" value="{{ $data->nik}}" name="nik" id="" disabled>
                            </div>
                        </div>

                        <div class="form-group py-2 row">
                            <label for="" class="col-sm-3 col-form-label">No. BPJS</label>
                            <div class="col-sm-8">
                                <input type="number" class="form-control" value="{{ $data->no_bpjs}}" name="no_bpjs" id="" disabled>
                            </div>
                        </div>

                        <div class="form-group py-2 row">
                            <label for="" class="col-sm-3 col-form-label">Pendidikan</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" value="{{ $data->pendidikan}}" name="pendidikan" id="" disabled>
                            </div>
                        </div>

                        

                        <div class="form-group py-2 row">
                            <label for="" class="col-sm-3 col-form-label">Keterangan</label>
                            <div class="col-sm-8">
                                <textarea class="form-control" id="exampleFormControlTextarea1" value="{{ $data->keterangan}}" name="keterangan" rows="3"></textarea>
                            </div>
                        </div>

                        <div class="form-group row mx-1 py-2">
                            <label for="" class="col-3"></label>
                            <a href="/kesehatan_jiwa" type="button" class="col-4 py-3 mr-1 btn btn-outline-danger  ">Batal</a>
                            <button type="submit" class="col-4 py-3 btn btn-purple text-white ">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <script src="js/script.js"></script>
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    -->
</body>

</html>