<!DOCTYPE html>
<html>
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
    <link rel="stylesheet" href="css/resetpw.css">

	<title>Ubah Kata Sandi</title>
</head>
<body>

	<div class="progressbar">
            <li>Identitas</li>
            <li class="active">Ubah Kata Sandi</li>
            <li>Berhasil</li>
</div>
	<div class="container mt-5">
		<form action="cek_login.php" method="POST" class="login-email" >
			<p class="login-text mt-4" style="font-size: 2rem; ">Ubah Kata Sandi</p>
			<div class="input-group">
				<input type="email" placeholder="Kata Sandi Baru" name="email" required>
			</div>
			<div class="input-group">
				<input type="text" placeholder="Konfirmasi Kata Sandi Baru" name="password" required>
			</div>
			<div class="mt-3 btn-group">
				<a href="/ubahpw">
                    <button class="kirim">
                        Kirim
                    </button>
                </a>
			</div>
            <div class="btn-group">
				<a href="/resetpw">
                    <button class="btn mb-5">
                        Reset
                    </button>
                </a>
			</div>
		</form>
	</div>
</body>
</html>