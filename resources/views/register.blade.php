<!DOCTYPE html>
<html lang="en">
<head>
	<!-- meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Login</title>
	
	<!-- mobile specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	
	
	<!-- CSS Offline -->
    <link rel="stylesheet" href="site.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
</head>
<body class="bg-light">
    <div class="container">
		<div class="row">
            <div class="col-sm-8 col-md-8 col-md-offset-8">
                <img class="login-img" src="img/login-wifi2.jpg" />
            </div>
            <div class="col-sm-4 col-md-4 col-md-offset-4">
                				<!-- Logo -->
				<img class="logo-title" src="img/IANMNet.svg" />
				<!-- Form -->
				<div class="account-wall">
				

				<form action="{{ route('register') }}" method="post">
                    @csrf
						<div class="form-group input-group groups">
							<span class="input-group-text icons bg-secondary"><i class="fa fa-user fa-2x"></i></span>
							<input type="name" class="form-control form-input bg-light" name="name" placeholder="Masukkan Nama Lengkap" required>
						</div>
						
						
						<div class="form-group input-group groups">
							<span class="input-group-text icons bg-secondary"><i class="fa fa-envelope fa-lg"></i></span>
							<input type="email" class="form-control form-input bg-light" name="email" placeholder="Masukkan Email" required>
						</div>
						
						<div class="form-group input-group groups">
							<span class="input-group-text icons bg-secondary"><i class="fa fa-phone fa-2x"></i></span>
							<input type="phone" class="form-control form-input bg-light" name="phone" placeholder="Masukkan Nomor Telepon" required>
						</div>
						
						<div class="form-group input-group groups">
							<span class="input-group-text icons bg-secondary"><i class="fa fa-map fa-lg"></i></span>
							<input type="address" class="form-control form-input bg-light" name="address" placeholder="Masukkan Alamat" required>
						</div>
						
						
						<div class="form-group input-group groups">
							<span class="input-group-text icons bg-secondary"><i class="fa fa-lock fa-2x"></i></span>
							<input type="password" class="form-control form-input bg-light" name="password" placeholder="Masukkan password" required>
						</div>
						
						
						<div class="form-group input-group groups">
							<span class="input-group-text icons bg-secondary"><i class="fa fa-lock fa-2x"></i></span>
							<input type="password" class="form-control form-input bg-light" name="password_confirmation" placeholder="Ulangi password" required>
						</div>
						
						<div class="text-center mt-3">
                            <button type="submit" class="btn btn-md btn-primary btn-block" name="signup">Daftar</button>
                        </div>
						
					</form>
				</div>
				<p class="text-center w">Pernah jadi anggota? <a href="login">Masuk</a></p>
			</div>	
</body>
</html>