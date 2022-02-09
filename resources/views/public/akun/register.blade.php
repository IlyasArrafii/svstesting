@include('public.layout.header')

<div class="container" style="background-color: #ff7f00; padding-top: 5%; padding-left:0px; padding-right: 0px;">
	<div class="brand-servisin">
		<img src="assets/img/brand/servisin.png" width="255">
	</div>

	<div class="form-login-konsumen-register">
		<h5 class="font-weight-bold">Daftar Akun</h5>
		<span>Silahkan mengisi form pendaftaran</span>

		<div class="form-input-konsumen">
			<form>
				<div class="form-group">
					<input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nama Lengkap">
				</div>
				<div class="form-group">
					<input type="text" class="form-control" id="formGroupExampleInput" placeholder="No Whatsapp">
				</div>
				<div class="form-group">
					<input type="text" class="form-control" id="formGroupExampleInput" placeholder="Email">
				</div>
				<div class="form-group">
					<input type="password" class="form-control" id="formGroupExampleInput2" placeholder="Password">
				</div>
				<div class="form-group">
					<input type="password" class="form-control" id="formGroupExampleInput2" placeholder="Konfirmasi Password">
				</div>

				<button type="submit" class="tw-rounded-xl tw-bg-[#ff7f00] tw-text-white hover:tw-bg-orange-600 tw-duration-300 tw-px-10 tw-py-2.5 btn-block">Daftar</button>
			</form>

			<div class="text-form-konsumen-register">
				<p class="text-center">Sudah Punya Akun? <a href="{{url('/login')}}">Masuk Disini</a></p>
			</div>
		</div>
	</div>


</div>