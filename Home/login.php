<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form method="post" action="signup.php">
			<h1>Buat Akun</h1>
                <link rel="stylesheet" href="../CSS/style.css">
			<input type="text" name="name" placeholder="Username" />
			<input type="password" name="password" placeholder="Password" />
			<button type="submit">Sign Up</button>
		</form>
	</div>
	<div class="form-container sign-in-container">
		<form method="post" action="singin.php">
			<h1>Sign in</h1>
			<div class="social-container">
				<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
				<a href="#" class="
                \+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++_social"><i class="fab fa-google-plus-g"></i></a>
				<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
			</div>
			<input type="name" name="name" placeholder="Username" />
			<input type="password" name="password" placeholder="Password" />
			<a href="#">Lupa Password?</a>
			<button type="submit">Sign In</button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Selamat Datang Kembali</h1>
				<p>Untuk tetap terhubung dengan kami, silakan login dengan informasi pribadi anda</p>
				<button class="ghost" id="signIn">Sign In</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Halo</h1>
				<p>Masukkan detail pribadi Anda dan mulailah bersama kami</p>
				<button class="ghost" id="signUp">Sign Up</button>
			</div>
		</div>
	</div>
</div>

<div class="d-flex flex-column justify-content-center w-100 h-100">

	<div class="d-flex flex-column justify-content-center align-items-center">
		<h1 class="fw-light text-white m-0"></h1>
		<div class="btn-group my-5">
			<a href="https://codepen-api-export-production.s3.us-west-2.amazonaws.com/zip/PEN/pyBNzX/1578778289271/pure-css-gradient-background-animation.zip" class="btn btn-outline-light" aria-current="page"><i class="fas fa-file-download me-2"></i></a>
			<a href="https://codepen.io/P1N2O/full/pyBNzX" class="btn btn-outline-light"><i class="fas fa-expand ms-2"></i></a>
		</div>
		<a href="https://manuel.pinto.dev" class="text-decoration-none">
			<h5 class="fw-light text-white m-0"></h5>
		</a>
	</div>
</div>
</div>

<footer>
	<p>
		Created by <i class="fa fa-heart"></i><a>Kelompok 1</a> - Audrick, Kenzo Avila Nicole, Khenzo Fernando Indra, Joen Jea Min, and Kevin.
	</p>
</footer>

<script>
    const signUpButton = document.getElementById('signUp');
    const signInButton = document.getElementById('signIn');
    const container = document.getElementById('container');

    signUpButton.addEventListener('click', () => {
        container.classList.add("right-panel-active");
    });

    signInButton.addEventListener('click', () => {
        container.classList.remove("right-panel-active");
    });
</script>