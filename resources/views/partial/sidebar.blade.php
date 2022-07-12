<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <!-- CSS Assets -->
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Mulish' rel='stylesheet'>
    <link rel="stylesheet" href="../../css/style.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
</head>

<body>
    <div class="side-bar my-3">
        <div class="menu mt-5">
            <div class="item mx-4"><img src="../../image/icon_problemsolver.png" alt=""></div>
            <div class="item mt-5 ml-4"><a href="/"><img src="../../vectors/icon_dashboard.svg" alt=""></i>Dashboard</a></div>
            <hr class="mx-4 border-bottom">
            </hr>

            <div class="item ml-4">
                <a class="sub-btn"><i class="fa-solid fa-user"></i>Admin<i class="fas fa-angle-right dropdown"></i></a>
                <div class="sub-menu">
                    <a href="/note" class="sub-item"><img src="../../vectors/icon_catatan.svg" alt="">Catatan</a>
                    <a href="/activity" class="sub-item"><img src="../../vectors/icon_aktivitas.svg" alt="">Aktivitas</a>
                </div>
            </div>
            <div class="item ml-4">
                <a class="sub-btn"><i class="fa-solid fa-stethoscope"></i>Report Data<i class="fas fa-angle-right dropdown"></i></a>
                <div class="sub-menu">
                    <a href="/kesehatan_jiwa" class="sub-item"><img src="../../vectors/icon_kesehatan-jiwa.svg" alt="">Kesehatan Jiwa</a>
                    <a href="/surveilans_1" class="sub-item"><img src="../../vectors/icon_surveilans.svg" alt="">Surveilans 1</a>
                    <a href="/surveilans_2" class="sub-item"><img src="../../vectors/icon_surveilans.svg" alt="">Surveilans 2</a>
                    <a href="/perkesmas" class="sub-item"><img src="../../vectors/icon_perkesmas.svg" alt="">Perkesmas</a>
                    <a href="/identitas_pasien" class="sub-item"><img src="../../vectors/icon_identitas-pasien.svg" alt="">Identitas Pasien</a>
                    <a href="/penyakit" class="sub-item"><img src="../../vectors/icon_penyakit.svg" alt="">Penyakit</a>
                </div>
            </div>
            <hr class="mx-4 border-bottom">
            </hr>
            <div class="item ml-4"><a href="/settings"><img src="../../vectors/icon_pengaturan.svg" alt=""></i>Pengaturan</a></div>
            <div class="item ml-4"><a href="#"><img src="../../vectors/icon_keluar.svg" alt="">Keluar</a></div>
        </div>
    </div>

    <script src="{{ asset('lib/select2/js/select2.min.js')}}"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            // 
            $('.sub-btn').click(function() {
                $(this).next('.sub-menu').slideToggle();
            });
        });
    </script>
    <!-- <script src="{{asset('lib/js/scripts.js')}}"></script> -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    {{-- <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script> --}}
</body>