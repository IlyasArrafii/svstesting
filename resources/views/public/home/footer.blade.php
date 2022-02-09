<!-- FOOTER -->

<div class="container-fluid footer text-center">
	<div class="row">
		<div class="col-md-3">
			<h4 class="text-suvis-footer">Suvis Indonesia</h4>
			<p class="text-suvis-footer-p">#Kamiselesaikanpekerjaanmu</p>
		</div>
		<div class="col-md-3">
			<i class="fa fa-envelope fa-lg ic-footer" aria-hidden="true"></i>
			<i class="fa fa-instagram fa-lg ic-footer" aria-hidden="true"></i>
			<i class="fa fa-whatsapp fa-lg ic-footer" aria-hidden="true"></i>
			<i class="fa fa-facebook fa-lg ic-footer" aria-hidden="true"></i>
		</div>
		<div class="col-md-3">
			<p class="text-copy">Copyright &copy; 2021 PT.Suvis Indonesia</p>
			<a href="" class="text-footer">Kebijkan Privasi</a> | <a href="" class="text-footer">Syarat Penggunaan</a>
		</div>
	</div>
</div>


<!-- AKHIR FOOTER -->

<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
<script type="text/javascript" src="{{ asset('/js/app.js')}}"></script>
<script src="jquery.min.js"></script>
<script src="assets/owlcarousel/owl.carousel.min.js"></script>
<script type="text/javascript">
	if ($('.pages').text() == 'profile') {
		$(".icon-nav-profile").css({
			"filter": "grayscale(0%)"
		});
		$(".icon-nav-beranda").css({
			"filter": "grayscale(100%)"
		});
		$(".icon-nav-pesanan").css({
			"filter": "grayscale(100%)"
		});
	}
	if ($('.pages').text() == 'beranda') {
		$(".icon-nav-beranda").css({
			"filter": "grayscale(0%)"
		});
		$(".icon-nav-profile").css({
			"filter": "grayscale(100%)"
		});
		$(".icon-nav-pesanan").css({
			"filter": "grayscale(100%)"
		});
	}
	if ($('.pages').text() == 'pesanan') {
		$(".icon-nav-pesanan").css({
			"filter": "grayscale(0%)"
		});
		$(".icon-nav-beranda").css({
			"filter": "grayscale(100%)"
		});
		$(".icon-nav-profile").css({
			"filter": "grayscale(100%)"
		});
	}
	$('.owl-carousel').owlCarousel({
		loop: true,
		margin: 10,
		autoplay: true,
		autoplayTimeout: 3000,
		autoplayHoverPause: false,
		responsive: {
			0: {
				items: 1
			},
			600: {
				items: 3
			},
			1000: {
				items: 5
			}
		}
	})
</script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
-->
</body>

</html>