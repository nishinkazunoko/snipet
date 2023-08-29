<!-- CSS読みこみ -->
<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- css -->
	<link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="https://use.typekit.net/gkq7oar.css">
<!-- favicon -->
	<link rel="icon" href="img/favicon.ico">
<!-- OGP -->
	<meta property="og:url" content="ページのURL">
	<meta property="og:title" content="ページのタイトル">
	<meta property="og:description" content="ページの説明文">
	<meta property="og:type" content="Webページのタイプ">
	<meta property="og:image" content="サムネイルとして表示したい画像パス">
	<link rel="apple-touch-icon" sizes="180×180" href="img/favicon.ico">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Darumadrop+One&display=swap" rel="stylesheet">
	<!-------------- Swiper CSS ------------------------------------------------------------->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	<title>コード管理</title>
</head>

<body>
<main>

<?php include_once '../assets/inc/header.html'; ?>
<div class="outWrap">

<div  class="l-container slider">
	<!-- Swiper -->
	<div class="swiper-container two">
		<div class="swiper-wrapper">
							<div class="swiper-slide">
					<div class="slider-image">
						<img src="../img/02.jpg" alt="slide 1">
					</div>
				</div>
							<div class="swiper-slide">
					<div class="slider-image">
						<img src="../img/03.jpg" alt="slide 1">
					</div>
				</div>
							<div class="swiper-slide">
					<div class="slider-image">
						<img src="../img/04.jpg" alt="slide 1">
					</div>
				</div>
							<div class="swiper-slide">
					<div class="slider-image">
						<img src="../img/02.jpg" alt="slide 1">
					</div>
				</div>
							<div class="swiper-slide">
					<div class="slider-image">
						<img src="../img/01.jpg" alt="slide 1">
					</div>
				</div>
						<!-- Add Pagination -->
		</div>
		<div class="swiper-pagination"></div>
	</div>

<div class="popup">
	<div class="container">
		<button class="modal-toggle btn-example" data-modal="modalOne">モーダル1</button>
		<button class="modal-toggle btn-example" data-modal="modalTwo">モーダル2</button>
		<button class="modal-toggle btn-example" data-modal="modalThree">モーダル3</button>
		</div>
	<!-- modalOne -->
	<div id="modalOne" class="modal">
		<div class="modal-top">
			<span class="modal-close">×</span>
		</div>
		<div class="modal-content">
			<div class="modal-container">
			<img class="img" src="https://dubdesign.net/wp-content/uploads/2021/11/cms.svg" alt="">
			<p>Windowsでコンピューターの世界が広がります。1234567890Windowsでコンピューターの世界が広がります。1234567890Windowsでコンピューターの世界が広がります。1234567890Windowsでコンピューターの世界が広がります。1234567890Windowsでコンピューターの世界が広がります。1234567890Windowsでコンピューターの世界が広がります。1234567890Windowsでコンピューターの世界が広がります。1234567890Windowsでコンピューターの世界が広がります。</p><p>1234567890Windowsでコンピューターの世界が広がります。1234567890Windowsでコンピューターの世界が広がります。1234567890Windowsでコンピューターの世界が広がります。1234567890Windowsでコンピューターの世界が広がります。1234567890Windowsでコンピューターの世界が広がります。1234567890Windowsでコンピューターの世界が広がります。</p><p>1234567890Windowsでコンピューターの世界が広がります。1234567890Windowsでコンピューターの世界が広がります。1234567890Windowsでコンピューターの世界が広がります。1234567890Windo</p>
			</div>
		</div>
	</div>
	<!-- modalOne -->
	<!-- modalTwo -->
	<div id="modalTwo" class="modal">
		<div class="modal-top">
			<span class="modal-close">×</span>
		</div>
		<div class="modal-content">
			<div class="modal-container">
			<p>山路を登りながら、こう考えた。智に働けば角が立つ。情に棹させば流される。意地を通せば窮屈だ。とかくに人の世は住みにくい。住みにくさが高じると、安い所へ引き越したくなる。どこへ越しても住みにくいと悟った時、詩が生れて、画が出来る。山路を登りながら、こう考えた。智に働けば角が立つ。情に棹させば流される。</p><p>意地を通せば窮屈だ。とかくに人の世は住みにくい。住みにくさが高じると、安い所へ引き越したくなる。どこへ越しても住みにくいと悟った時、詩が生れて、画が出来る。山路を登りながら、こう考えた。智に働けば角が立つ。情に棹させば流される。意地を通せば窮屈だ。とかくに人の</p>
			</div>
		</div>
	</div>
	<!-- modalTwo -->
	<!-- modalThree -->
	<div id="modalThree" class="modal">
		<div class="modal-top">
			<span class="modal-close">×</span>
		</div>
		<div class="modal-content">
			<div class="modal-container">
			<p>日本国民は正当に選挙された国会における代表者を通じて行動し、われらとわれらの子孫のために、諸国民と協和による成果と、わが国全土にわたって自由のもたらす恵沢を確保し、政府の行為によって再び戦争の惨禍が起こることのないようにすることを決意し、ここに主権が国民に存することを宣言し、この</p>
			</div>
		</div>
	</div>
	<!-- modalThree -->
</div>
<button class="switching">切り替える</button>

</div>
<?php include_once '../assets/inc/toTOP.html'; ?>

</div>


</main>
<footer>

</footer>
<!-- ここから描いていく -->
<script src="../js/common.js"></script>
<script src="https://cdn.jsdelivr.net/clipboard.js/1.5.13/clipboard.min.js"></script>
<!-------------- Swiper JS -------------------------------------------------------------->
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
<script>
	
var swiper = new Swiper( '.swiper-container.two', {
	pagination: '.swiper-pagination',
	paginationClickable: true,
	effect: 'coverflow',
	loop: true,
	centeredSlides: true,
	slidesPerView: 'auto',
	coverflow: {
		rotate: 0,
		stretch: 100,
		depth: 150,
		modifier: 1.5,
		slideShadows : false,
	}
} );

</script>
<script>
const modalBtns = document.querySelectorAll(".modal-toggle");
modalBtns.forEach(function (btn) {
	btn.onclick = function () {
		var modal = btn.getAttribute('data-modal');
		document.getElementById(modal).style.display = "block";
	};
});
const closeBtns = document.querySelectorAll(".modal-close");
closeBtns.forEach(function (btn) {
	btn.onclick = function () {
		var modal = btn.closest('.modal');
		modal.style.display = "none";
	};
});

window.onclick = function (event) {
	if (event.target.className === "modal") {
		event.target.style.display = "none";
	}
};
</script>
<script>
	const switching = document.querySelector(".switching");
	switching.addEventListener("click",function(){
		location.href="http://localhost/snipet/insight/";
	});
</script>
</body>
</html>
