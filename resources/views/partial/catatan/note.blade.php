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

            <div class="row mt-5">
                <div class="col">
                    <a href="/note/create" class="btn btn-purple text-white border-radius px-5 py-3">+ Tambah Data</a>
                </div>
            </div>

            @csrf
            <div class="mt-5 border-line bg-white">
                <table class="table bg-white">
                    <thead class="bg-grey color-white">
                        <tr>
                            <th class="col-1 th1">ID</th>
                            <th class="col-1 th1">Status</th>
                            <th class="col-1 th1">Judul</th>
                            <th class="col-1 th1">Deskripsi</th>
                            <th class="col-2 th1">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="color-white bg-white color-neutral-400">
                        @foreach($data as $key=>$value)
                        <tr>
                            <td class="col-1 td1">{{ $loop->iteration }}</td>
                            <td class="col-1 td1">{{ $value->status}}</td>
                            <td class="col-1 td1">{{ $value->judul}}</td>
                            <td class="col-2 td1">{{ $value->deskripsi}}</td>
                            <td class="col-1">
                                <a href="/note/editNote/{{ $value->id_note }}" class="btn">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#ffc107" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                    </svg>
                                </a>
                                <a href="/note/detailNote/{{ $value->id_note}}" class="btn">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#3366FF" class="bi bi-info-circle" viewBox="0 0 16 16">
                                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                        <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z" />
                                    </svg>
                                </a>
                                    <button data-id="{{ $value->id_note}}" data-name="{{ $value->judul}}" type="submit" class="btn btn-simpanNote"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#FF4C4C" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                            <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z" />
                                        </svg></button>
                                
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
            <p style="color: red;" class="mb-2">Halaman : {{$data->currentPage()}}</p>
            <p style="color: red;" class="mb-2">Jumlah Data : {{$data->total()}}</p>
            <p style="color: red;" class="mb-2">Data Per Halaman : {{$data->perPage()}}</p>
            {{ $data->links()}}
        </div>
    </div>

    @include('sweetalert::alert')
</body>

<script>
    $('.btn-simpanNote').click(function() {
        var id_note = $(this).attr('data-id');
        var judul = $(this).attr('data-name');
        swal({
                title: "Apakah Anda Yakin?",
                text: "Kamu akan menghapus data dengan Judul " + judul + " ",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    window.location = "/note/hapusNote/" + id_note + "";
                    swal("Data Berhasil di hapus", {
                        title: "Sukses",
                        icon: "success",
                    });
                    window.reload();
                } else {
                    swal("Data Tidak jadi Di hapus");
                }
            });
    })
</script>

</html>