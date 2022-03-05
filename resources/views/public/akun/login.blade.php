@include('public.layout.header')

<div class="tw-container md:tw-max-w-full tw-bg-[#ff7f00] tw-px-0" style="background-color: #ff7f00; padding-top: 5%;">
	<div class="md:tw-px-5">
		<img src="assets/img/brand/servisin.png" width="255" class="tw-m-auto md:tw-content-start">
	</div>

	<div class="tw-container tw-max-w-full md:tw-max-w-full tw-text-sm tw-bg-white tw-mt-12 tw-p-7 tw-rounded-t-3xl">
		<h5 class="tw-font-bold">Selamat Datang</h5>
		<span class="tw-text-gray-600">Silahkan masuk untuk melanjutkan</span>

		<div class="tw-mt-8">
			<div class="tw-container tw-max-w-full md:tw-max-w-full">
				<form>
					<div class="form-group">
						<input type="text" class="form-control" id="formGroupExampleInput" placeholder="Email">
					</div>
					<div class="form-group">
						<input type="password" class="form-control" id="formGroupExampleInput2" placeholder="Password">
					</div>

					<button type="submit" class="tw-rounded-xl tw-bg-orange-500 tw-text-white hover:tw-bg-orange-600 tw-duration-300 tw-px-10 tw-py-2.5 btn-block">Masuk</button>
				</form>
			</div>

			<p class="middle-border">atau</p>

			<div class="tw-max-w-full md:tw-max-w-full">
				<div class="tw-place-content-center tw-py-3">
					<button type="submit" class="xl:tw-w-56 xl:tw-place-content-center tw-rounded-xl tw-bg-blue-500/100 tw-text-white hover:tw-bg-blue-600 tw-duration-300 tw-px-10 tw-py-2.5 btn-block"><i class="fab fa-google"></i> Sign Google</button>
				</div>
			</div>
			<div class="text-form-konsumen">
				<p class="text-center">Belum Punya Akun? <a class="tw-text-xs" href="{{url('/register')}}">Daftar Disini</a></p>
			</div>
		</div>
	</div>


</div>