@include('public.layout.header')

<div class="container" style="background-color: #ff7f00; padding-top: 5%; padding-left:0px; padding-right: 0px;">
	<div class="brand-servisin">
		<img src="assets/img/brand/servisin.png" width="255">
	</div>

	<div class="form-login-konsumen">
		<h5 class="font-weight-bold">Selamat Datang</h5>
		<span>Silahkan masuk untuk melanjutkan</span>

		<div class="form-input-konsumen">
			<form>
				<div class="form-group">
					<input type="text" class="form-control" id="formGroupExampleInput" placeholder="Email">
				</div>
				<div class="form-group">
					<input type="password" class="form-control" id="formGroupExampleInput2" placeholder="Password">
				</div>

				<button type="submit" class="btn btn-warning btn-form-konsumen">Masuk</button>
			</form>

			<p class="middle-border">atau</p>

			<button type="submit" class="btn btn-secondary" style="width: 100%; padding:9px; border-radius: 14px;">Tombol Google</button>

			<div class="text-form-konsumen">
				<p class="text-center">Belum Punya Akun? <a href="{{url('/register')}}">Daftar Disini</a></p>
			</div>
		</div>
	</div>


</div>
