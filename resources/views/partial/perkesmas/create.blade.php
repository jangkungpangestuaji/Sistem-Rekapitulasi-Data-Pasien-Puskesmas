<!doctype html>
<html lang="en">

<head>
    <title>Problem Solver | Perkesmas</title>
</head>

<body>
    <div class="container">
        <div class="left">
            @include('partial/sidebar')
        </div>

        <div class="l-right">
            <div class="title">
                <h4 class="text-title color-black lead font-bold">Perkesmas</h4>
                <h1 class="color-neutral-400">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Porttitor adipiscing in consectetur sem ut netus scelerisque. Viverra urna vitae viverra habitant a magna vitae, fermentum morbi. Magna magna non ridiculus vitae viverra feugiat morbi sed.</h1>
            </div>

            <div class="ttable border-line bg-white border-radius my-4">
                <div class="p-2 bg-light rounded-bottom-0">
                    <p class="m-3 text-dark">Tambah Data</p>
                </div>
                <div class="p-2 text-dark border-top">
                    <form class="ml-5 p-5" method="POST" action="insertPerkesmas">
                        @csrf
                        <input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
                        <div class="form-group row py-2">
                            <label for="" class="col-sm-3 col-form-label">ID Register</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="id_register" id="">
                            </div>
                        </div>

                        <div class="form-group row py-2">
                            <label for="" class="col-sm-3 col-form-label">Nama Pasien</label>
                            <div class="col-sm-8">
                                <div class="dropdown">
                                    <select name="nama_pasien" id="nama_pasien" class="btn border btn-block text-left form-control">
                                        <option value="" selected>-- Pilih Pasien --</option>
                                        @foreach($identitas_pasien as $key)
                                        <option value="{{ $key->id_pasien }}">{{ $key->nama_pasien }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <!-- <input type="text" class="form-control" id="nama_pasien"> -->
                            </div>
                        </div>

                        <div class="form-group row py-2">
                            <label for="" class="col-sm-3 col-form-label">Tanggal Lahir</label>
                            <div class="col-sm-8">
                                <input type="date" class="form-control" name="tanggal_lahir" id="" disabled>
                            </div>
                        </div>

                        <div class="form-group row py-2">
                            <label for="" class="col-sm-3 col-form-label">Jenis Kelamin</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="jenis_kelamin" id="" disabled>
                            </div>
                        </div>

                        <div class="form-group row py-2">
                            <label for="" class="col-sm-3 col-form-label">Alamat</label>
                            <div class="col-sm-8">
                                <textarea class="form-control" id="exampleFormControlTextarea1" name="alamat" rows="3" disabled></textarea>
                            </div>
                        </div>

                        <div class="form-group row py-2">
                            <label for="" class="col-sm-3 col-form-label">Kepala Keluarga</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="kepala_keluarga" id="" disabled>
                            </div>
                        </div>

                        <div class="form-group row py-2">
                            <label for="" class="col-sm-3 col-form-label">NIK</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="nik" id="" disabled>
                            </div>
                        </div>

                        <div class="form-group row py-2">
                            <label for="" class="col-sm-3 col-form-label">No. BPJS</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="no_bpjs" id="" disabled>
                            </div>
                        </div>

                        <div class="form-group row py-2">
                            <label for="" class="col-sm-3 col-form-label">Pendidikan</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="pendidikan" id="" disabled>
                            </div>
                        </div>

                        <div class="form-group row py-2">
                            <label for="" class="col-sm-3 col-form-label">Pekerjaan</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="pekerjaan" id="" disabled>
                            </div>
                        </div>

                        <div class="form-group row py-2">
                            <label for="" class="col-sm-3 col-form-label">Tanggal Kunjungan</label>
                            <div class="col-sm-8">
                                <input type="date" class="form-control" name="tanggal_kunjungan" id="">
                            </div>
                        </div>

                        <div class="form-group row py-2">
                            <label for="" class="col-sm-3 col-form-label">Intervensi Keperawatan</label>
                            <div class="col-sm-8">
                                <textarea class="form-control" id="exampleFormControlTextarea1" name="interensi_keperawatan" rows="3"></textarea>
                            </div>
                        </div>

                        <div class="form-group row py-2">
                            <label for="" class="col-sm-3 col-form-label">Diagnosa Keperawatan</label>
                            <div class="col-sm-8">
                                <textarea class="form-control" id="exampleFormControlTextarea1" name="diagnosa_keperawatan" rows="3"></textarea>
                            </div>
                        </div>

                        <div class="form-group row py-2">
                            <label for="" class="col-sm-3 col-form-label">Implementasi Keperawatan</label>
                            <div class="col-sm-8">
                                <textarea class="form-control" id="exampleFormControlTextarea1" name="implementasi_keperawatan" rows="3"></textarea>
                            </div>
                        </div>

                        <div class="form-group row py-2">
                            <label for="" class="col-sm-3 col-form-label">Keterangan</label>
                            <div class="col-sm-8">
                                <textarea class="form-control" id="exampleFormControlTextarea1" name="keterangan" rows="3"></textarea>
                            </div>
                        </div>

                        <div class="form-group row mx-1 py-2">
                            <label for="" class="col-3"></label>
                            <button type="button" class="col-4 py-3 mr-1 btn btn-outline-danger  ">Batal</button>
                            <button type="button" class="col-4 py-3 btn btn-purple text-white ">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

<script>
    $(document).ready(function() {
        $("#nama_pasien").select2({
            ajax: {
                url: 'PuskesmasController/get_pasien',
                type: "post",
                dataType: 'json',
                data: function(params) {
                    return {
                        searchTerm: params.term
                    };
                },
                processResults: function(response) {
                    return {
                        results: response
                    };
                },
            }
        });
    });
</script>

</html>