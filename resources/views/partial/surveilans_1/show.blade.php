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
                    <p class="m-3 text-dark">Detail Data</p>
                </div>
                <div class="text-dark border-top">
                    <form class="ml-5 p-5" method="POST" action="/surveilans_1">
                        <div class="form-group py-2 row">
                            <label for="" class="col-sm-3 col-form-label">ID Register</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="" disabled value="{{$data->id_register}}">
                            </div>
                        </div>

                        <div class="form-group py-2 row">
                            <label for="" class="col-sm-3 col-form-label">Tanggal</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="" disabled value="{{$data->tanggal}}">
                            </div>
                        </div>

                        <div class="form-group py-2 row">
                            <label for="" class="col-sm-3 col-form-label">Nama Pasien</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="" disabled value="{{$data1y->nama_pasien}}">
                            </div>
                        </div>

                        <div class="form-group py-2 row">
                            <label for="" class="col-sm-3 col-form-label">Umur</label>
                            <div class="col-sm-8">
                                <input type="input" class="form-control" id="" disabled value="{{$data->umur}}">
                            </div>
                        </div>

                        <div class="form-group py-2 row">
                            <label for="" class="col-sm-3 col-form-label">Jenis Kelamin</label>
                            <div class="col-sm-8">
                                <input type="input" class="form-control" id="" disabled value="{{$data1->jenis_kelamin}}">
                            </div>
                        </div>

                        <div class="form-group py-2 row">
                            <label for="" class="col-sm-3 col-form-label">Alamat</label>
                            <div class="col-sm-8">
                                <input type="textarea" class="form-control" id="" disabled value="{{$data1->alamat}}">
                            </div>
                        </div>

                        <div class="form-group py-2 row">
                            <label for="" class="col-sm-3 col-form-label">Diagnosa</label>
                            <div class="col-sm-8">
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" disabled>{{$data->diagnosa}}</textarea>
                            </div>
                        </div>

                        <div class="form-group row mx-1 py-2">
                            <label for="" class="col-3"></label>
                            <a href="/surveilans_1" type="button" class="col-4 py-3 mr-1 btn btn-outline-danger  ">Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>