<!doctype html>
<html lang="en">

<head>
    <title>Problem Solver | Identitas Jiwa</title>
</head>

<body>
    <div class="container">
        <div class="left">
            @include('partial/sidebar')
        </div>

        <div class="l-right">
            <div class="title">
                <h4 class="text-title color-black lead font-bold">Identitas Jiwa</h4>
                <h1 class="color-neutral-400">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Porttitor adipiscing in consectetur sem ut netus scelerisque. Viverra urna vitae viverra habitant a magna vitae, fermentum morbi. Magna magna non ridiculus vitae viverra feugiat morbi sed.</h1>
            </div>

            <div class="ttable border-line bg-white my-4">
                <div class="p-2 bg-light rounded-bottom-0">
                    <p class="m-3 text-dark">Edit Data</p>
                </div>
                <div class="p-2 text-dark border-top">
                    <form class="ml-3 p-5" method="POST" action="/identitas_pasien/updateIdentitas">
                        <input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
                        <input type="hidden" id="id" name="id_pasien" value="{{ $data->id_pasien }}" class="form-control select2bs4">
                        <div class="form-group row py-2">
                            <label for="" class="col-sm-3 col-form-label">ID Register</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control color-neutral-400" name="id_register" id="" value="{{$data->id_register}}">
                            </div>
                        </div>
                        <div class="form-group row py-2">
                            <label for="" class="col-sm-3 col-form-label">Nama Pasien</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control color-neutral-400" name="nama_pasien" id="" value="{{$data->nama_pasien}}">
                            </div>
                        </div>
                        <div class="form-group row py-2">
                            <label for="" class="col-sm-3 col-form-label">Tanggal Lahir</label>
                            <div class="col-sm-8">
                                <input type="date" class="form-control color-neutral-400" name="tanggal_lahir" id="" value="{{$data->tanggal_lahir}}">
                            </div>
                        </div>

                        <div class="form-group row py-2">
                            <label for="" class="col-sm-3 col-form-label">Jenis Kelamin</label>
                            <div class="col-sm-8">
                                <div class="dropdown">
                                    <select name="jenis_kelamin" id="status" class="btn border color-neutral-400 btn-block text-left form-control">
                                        <option selected>{{$data->jenis_kelamin}}</option>
                                        <option>Laki-laki</option>
                                        <option>Perempuan</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row py-2">
                            <label for="" class="col-sm-3 col-form-label">Alamat</label>
                            <div class="col-sm-8">
                                <textarea class="form-control color-neutral-400" name="alamat" id="exampleFormControlTextarea1" rows="3" value="{{$data->alamat}}">{{$data->alamat}}</textarea>
                            </div>
                        </div>

                        <div class="form-group row py-2">
                            <label for="" class="col-sm-3 col-form-label">Kepala Keluarga</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control color-neutral-400" name="kepala_keluarga" id="" value="{{$data->kepala_keluarga}}">
                            </div>
                        </div>

                        <div class="form-group row py-2">
                            <label for="" class="col-sm-3 col-form-label">NIK</label>
                            <div class="col-sm-8">
                                <input type="number" class="form-control color-neutral-400" name="nik" id="" value="{{$data->nik}}">
                            </div>
                        </div>

                        <div class="form-group row py-2">
                            <label for="" class="col-sm-3 col-form-label">No. BPJS</label>
                            <div class="col-sm-8">
                                <input type="number" class="form-control color-neutral-400" name="no_bpjs" id="" value="{{$data->no_bpjs}}">
                            </div>
                        </div>

                        <div class="form-group row py-2">
                            <label for="" class="col-sm-3 col-form-label">Pendidikan</label>
                            <div class="col-sm-8">
                                <div class="dropdown">
                                    <select name="pendidikan" id="pendidikan" class="btn border color-neutral-400 btn-block text-left form-control">
                                        <option selected>{{$data->pendidikan}}</option>
                                        <option>SD</option>
                                        <option>SMP</option>
                                        <option>SMA</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row py-2">
                            <label for="" class="col-sm-3 col-form-label">Pekerjaan</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control color-neutral-400" name="pekerjaan" id="" value="{{$data->pekerjaan}}">
                            </div>
                        </div>

                        <div class="form-group row mx-1 py-2">
                            <label for="" class="col-3"></label>
                            <a href="/identitas_pasien" type="button" class="col-4 py-3 mr-1 btn btn-outline-danger  ">Batal</a>
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