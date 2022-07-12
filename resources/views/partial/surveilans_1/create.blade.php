<!doctype html>
<html lang="en">

<head>
    <title>Problem Solver | Surveilans 1</title>
</head>

<body>
    <div class="container">
        <div class="left">
            @include('partial/sidebar')
        </div>
        <div class="l-right mt-4">
            <div class="title mb-5">
                <h4 class="text-title color-black lead font-bold">Surveilans 1</h4>
                <h1 class="color-neutral-400">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Porttitor adipiscing in consectetur sem ut netus scelerisque. Viverra urna vitae viverra habitant a magna vitae, fermentum morbi. Magna magna non ridiculus vitae viverra feugiat morbi sed.</h1>
            </div>
            <div class="ttable border-line bg-white border-radius mt-4">
                <div class="p-2 bg-light rounded-bottom-0">
                    <p class="m-3 text-dark">Tambah Data</p>
                </div>
                <div class="text-dark border-top">
                    <form class="ml-5 p-5" method="POST" action="insertSurveilans1">
                        @csrf
                       
                        <input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
                        <!-- <div class="form-group py-2 row">
                            <label for="" class="col-sm-3 col-form-label">ID Register</label>
                            <div class="col-sm-8">
                            <input type="text" class="form-control color-neutral-400" name="id_register" id="" >
                            </div>
                        </div> -->

                        <div class="form-group py-2 row">
                            <label for="" class="col-sm-3 col-form-label">ID Register</label>
                            <div class="col-sm-8">
                                <div class="dropdown">
                                    <select name="id_register" id="id_register" class="btn border btn-block text-left form-control">
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
                            <label for="" class="col-sm-3 col-form-label">Tanggal</label>
                            <div class="col-sm-8">
                                <input type="date" class="form-control" id="" name="tanggal">
                            </div>
                        </div>

                        <div class="form-group py-2 row">
                            <label for="" class="col-sm-3 col-form-label">Nama Pasien</label>
                            <div class="col-sm-8">
                                <div class="dropdown">
                                    <select name="nama_pasien" id="nama_pasien" class="btn border btn-block text-left form-control">
                                        <!-- <option value="" selected>-- Pilih Pasien --</option> -->
                                        @foreach($identitas_pasien as $key)
                                        <option name="id_register" value="{{ $key->nama_pasien}}">{{ $key->nama_pasien }} </option>
                                        @endforeach
                                    </select>
                                </div>
                                <!-- <input type="text" class="form-control" id="" name="nama_pasien"> -->
                            </div>
                        </div>

                        <div class="form-group py-2 row">
                            <label for="" class="col-sm-3 col-form-label">Umur</label>
                            <div class="col-sm-8">
                                <input type="number" class="form-control" id="" name="umur">
                            </div>
                        </div>

                        <div class="form-group py-2 row">
                            <label for="" class="col-sm-3 col-form-label">Diagnosa</label>
                            <div class="col-sm-8">
                                <textarea class="form-control" name="diagnosa" rows="3"></textarea>
                            </div>
                        </div>

                        <div class="form-group row mx-1 py-2">
                            <label for="" class="col-3"></label>
                            <button type="button" class="col-4 py-3 mr-1 btn btn-outline-danger">Batal</button>
                            <button type="submit" class="col-4 py-3 btn btn-purple text-white">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>