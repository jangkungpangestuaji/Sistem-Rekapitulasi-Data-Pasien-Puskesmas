<!doctype html>
<html lang="en">

<head>
    <title>Problem Solver | Note</title>
</head>

<body>
    <div class="container">
        <div class="left">
            @include('partial/sidebar')
        </div>

        <div class="l-right">
            <div class="title">
                <h4 class="text-title color-black lead font-bold">Catatan</h4>
                <h1 class="color-neutral-400">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Porttitor adipiscing in consectetur sem ut netus scelerisque. Viverra urna vitae viverra habitant a magna vitae, fermentum morbi. Magna magna non ridiculus vitae viverra feugiat morbi sed.</h1>
            </div>

            <div class="ttable border-line bg-grey border-radius mt-4">
                <div class="p-2 bg-light rounded-bottom-0">
                    <p class="m-3 text-dark">Tambah Data</p>
                </div>
                <div class="p-2 text-dark bg-white border-top">
                    <form class="ml-3" method="POST" action="insertNote">
                        @csrf
                        <input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
                        <div class="form-group row">
                            <label for="" class="col-sm-3 col-form-label">Status</label>
                            <div class="col-sm-8">
                                <div class="dropdown bg-grey">
                                    <select name="status" id="status" class="btn border btn-block text-left color-neutral-400 px-4">
                                        <option disabled selected>Pilih Status</option>
                                        <option value="BIASA">Biasa</option>
                                        <option value="MENENGAH">Menengah</option>
                                        <option value="PENTING">Penting</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="" class="col-sm-3 col-form-label">Judul</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control color-neutral-400 bg-grey pl-4" name="judul">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="" class="col-sm-3 col-form-label">Deskripsi</label>
                            <div class="col-sm-8">
                                <textarea class="form-control color-neutral-400 bg-grey pl-4" id="exampleFormControlTextarea1" rows="3" name="deskripsi"></textarea>
                            </div>
                        </div>

                        <div class="form-group row mx-1 py-2">
                            <label for="" class="col-3"></label>
                            <button type="reset" class="col-4 py-3 mr-1 btn btn-outline-danger  ">Reset</button>
                            <button type="submit" id="btn-submit" class="col-4 py-3 btn btn-purple text-white ">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        // $('#btn-submit').click(function() {
        //     var judul = $('[name=judul]').val();
        //     swal({
        //             title: "Apakah Anda Yakin?",
        //             text: "Kamu akan Menambah data dengan Judul " + judul + " ",
        //             icon: "warning",
        //             method: "POST",
        //             buttons: true,
        //             dangerMode: true,
        //         })
        //         .then((willDelete) => {
        //             if (willDelete) {
        //                 window.location = "/note/insertNote";
        //                 swal("Data Berhasil di Tambahkan", {
        //                     title: "Sukses",
        //                     icon: "success",
        //                 });
        //             } else {
        //                 swal("Data Tidak jadi Di Tambahkan");
        //             }
        //         });
        // })
    </script>
</body>

</html>