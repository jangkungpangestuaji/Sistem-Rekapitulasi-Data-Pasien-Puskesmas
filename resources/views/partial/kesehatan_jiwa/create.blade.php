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
                    <p class="m-3 text-dark">Tambah Data</p>
                </div>
                <div class="text-dark border-top">
                    <form class="ml-5 p-5" method="POST" action="insertKJiwa">
                        @csrf
                        <input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
                        <div class="form-group py-2 row">
                            <label for="" class="col-sm-3 col-form-label">Tanggal Kunjungan</label>
                            <div class="col-sm-8">
                                <input type="date" class="form-control" name="tanggal_kunjungan" id="" placeholder="">
                            </div>
                        </div>

                        <div class="form-group py-2 row">
                            <label for="" class="col-sm-3 col-form-label">ID Kunjungan</label>
                            <div class="col-sm-8">
                                <input type="number" class="form-control" name="id_kesehatan_jiwa" id="">
                            </div>
                        </div>

                        <div class="form-group py-2 row">
                        <label for="" class="col-sm-3 col-form-label">ID Register</label>
                            <div class="col-sm-8">
                                <div class="dropdown">
                                    <select name="pasien_id" id="pasien_id" class="btn border btn-block text-left form-control">
                                        <!-- <option value="" selected>-- Pilih Pasien --</option> -->
                                        @foreach($identitas_pasien as $key)
                                        <option name="id_register" value="{{ $key->id_register}}"> {{ $key->id_register }} - {{ $key->nama_pasien }} </option>
                                        @endforeach
                                    </select>
                                </div>
                                <!-- <input type="text" class="form-control" id="" name="nama_pasien"> -->
                            </div>
                        </div>

                        <div class="form-group py-2 row">
                            <label for="" class="col-sm-3 col-form-label">Nama Pasien</label>
                            <div class="col-sm-8">
                                <div class="dropdown">
                                    <select name="nama_pasien" id="nama_pasien" class="btn border btn-block text-left form-control">
                                        <option value="" selected>-- Pilih Pasien --</option>
                                        @foreach($identitas_pasien as $key)
                                        <option value="{{ $key->nama_pasien }}">{{ $key->nama_pasien }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="form-group py-2 row">
                            <label for="" class="col-sm-3 col-form-label">Tanggal Lahir</label>
                            <div class="col-sm-8">
                                <input type="date" class="form-control" name="tanggal_lahir" id="">
                            </div>
                        </div>

                        <div class="form-group py-2 row">
                            <label for="" class="col-sm-3 col-form-label">Jenis Kelamin</label>
                            <div class="col-sm-8">
                                <div class="dropdown"> 
                                    <select name="status" id="status" class="btn border btn-block text-left form-control" name="jenis_kelamin" id="">
                                        <option> </option>
                                        <option>Laki-laki</option>
                                        <option>Perempuan</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="form-group py-2 row">
                            <label for="" class="col-sm-3 col-form-label">Alamat</label>
                            <div class="col-sm-8">
                                <input type="textarea" class="form-control" name="alamat" id="">
                            </div>
                        </div>

                        <div class="form-group py-2 row">
                            <label for="" class="col-sm-3 col-form-label">Kepala Keluarga</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" nama="kepala_keluarga" id="">
                            </div>
                        </div>

                        <div class="form-group py-2 row">
                            <label for="" class="col-sm-3 col-form-label">NIK</label>
                            <div class="col-sm-8">
                                <input type="number" class="form-control" name="nik" id="">
                            </div>
                        </div>

                        <div class="form-group py-2 row">
                            <label for="" class="col-sm-3 col-form-label">No. BPJS</label>
                            <div class="col-sm-8">
                                <input type="number" class="form-control" name="no_bpjs" id="">
                            </div>
                        </div>

                        <div class="form-group py-2 row">
                            <label for="" class="col-sm-3 col-form-label">Pendidikan</label>
                            <div class="col-sm-8">
                                <div class="dropdown"> 
                                    <select name="status" id="status" class="btn border btn-block text-left form-control" name="pendidikan">
                                    <option></option>
                                        <option>SD</option>
                                        <option>SMP</option>
                                        <option>SMA</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="form-group py-2 row">
                            <label for="" class="col-sm-3 col-form-label">Diagnosa</label>
                            <div class="col-sm-8">
                                <textarea class="form-control" id="exampleFormControlTextarea1" name="diagnosa" rows="3"></textarea>
                            </div>
                        </div>

                        <div class="form-group py-2 row">
                            <label for="" class="col-sm-3 col-form-label">Terapi</label>
                            <div class="col-sm-8">
                                <textarea class="form-control" id="exampleFormControlTextarea1" name="terapi" rows="3"></textarea>
                            </div>
                        </div>

                        <div class="form-group py-2 row">
                            <label for="" class="col-sm-3 col-form-label">Dosis</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="dosis" id="">
                            </div>
                        </div>

                        <div class="form-group py-2 row">
                            <label for="" class="col-sm-3 col-form-label">Keterangan</label>
                            <div class="col-sm-8">
                                <textarea class="form-control" id="exampleFormControlTextarea1" name="keterangan" rows="3"></textarea>
                            </div>
                        </div>

                        <div class="form-group py-2 row">
                            <label for="" class="col-sm-3 col-form-label">Kunjungan</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="kunjungan" id="">
                            </div>
                        </div>

                        <div class="form-group row mx-1 py-2">
                            <label for="" class="col-3"></label>
                            <a href="/kesehatan_jiwa" type="button" class="col-4 py-3 mr-1 btn btn-outline-danger">Batal</a>
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