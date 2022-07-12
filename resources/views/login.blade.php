<!DOCTYPE html>
<html>
<head>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="css/login.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<!-- <script src="https://kit.fontawesome.com/a81368914c.js"></script> -->
	<script src="js/dist/sweetalert1.all.min.js"></script>
	<script src="js/dist/sweetalert2.all.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<div class="bg mx-3 my-4">
		<div class="row">
			<div class="col-7">
				<div class="col">
					<img class="m-5" src="image/icon_problemsolver.png" alt="">
				</div>
				<div class="col py-5">
					<img class="img-background" src="image/Illustration.png" alt="">
				</div>
				<div class="col footer">
					<h1><i> Sistem Rekapitulasi Data</i></h1>
					<p>Created by Problem Solver</p>
				</div>
			</div>
			<div class="col">
				<div class="border m-5 py-5 bg-white login text-center">
					<form action="{{ route('postlogin') }}" method="post" class="py-5">
						{{ csrf_field() }}
						<h1 class="pt-5">Selamat Datang...</h1>
						<h2 class="text-secondary">Mohon masukkan email dan kata sandi anda</h2>
						<div class="mx-5 mt-5 form-group">
							<input type="email" class="form-control p-4" id="email" name="email" aria-describedby="emailHelp" placeholder="Masukkan email anda">
						</div>
						<div class="mx-5 form-group">
							<input type="password" class="form-control p-4" id="password" name="password" placeholder="Masukkan password anda">
						</div>
						<div class="mx-5 form-group">
							<div class="input-group mb-2">
								<div class="input-group-prepend">
									<span class="input-group-text captcha" id="basic-addon3">B12RE3</span>
								</div>
								<input type="text" class="form-control p-4" id="basic-url" aria-describedby="basic-addon3"  placeholder="Input captcha">
							</div>
							<div class="text-right">
								<a href="resetpw" class=" text-secondary">Forgot password ?</a>
							</div>
						</div>
							<button type="submit" class="mt-5 btn btn-login text-white">Login</button>
					</form>
				</div>
			</div>
		</div>
	</div>

	<script>
		function Login(){
			Swal.fire({
			title: 'Do you want to save the changes?',
			showDenyButton: true,
			showCancelButton: true,
			confirmButtonText: 'Save',
			denyButtonText: `Don't save`,
			}).then((result) => {
			/* Read more about isConfirmed, isDenied below */
			if (result.isConfirmed) {
				Swal.fire('Saved!', '', 'success')
				if(result.){
					window.location = "/"
				}
			} else if (result.isDenied) {
				Swal.fire('Changes are not saved', '', 'info')
			}
			})
	}	
    </script>
</body>

</html>
