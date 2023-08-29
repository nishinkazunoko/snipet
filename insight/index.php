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
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	<title>コード管理</title>
</head>

<body>
<main>

<?php include_once '../assets/inc/header.html'; ?>
<div class="outWrap">
<div  class="l-container">

	<ul class="nav-dummy">
		<li>
			<a href="#">
				<img src="../img/logo.webp" width="200" height="200px">
			</a>
		</li>
		<li>
			<a href="#">ダミー</a>
		</li>
		<li>
			<a href="#">ダミー</a>
		</li>
		<li class="sns-dummy">
			<a href="#">
				<img src="../img/logo.webp" width="50" height="50px">
			</a>
			<a href="#">
				<img src="../img/logo.webp" width="50" height="50px">
			</a>
		</li>
	</ul>
	<div class="insight insight__link yu">
		<a href="https://pagespeed.web.dev/" target="_blank">
			PageSpeed Insightsはこちら
			<div class="arrow">
			<span class="arrow__line"></span>
			</div>
		</a>
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
<script>
	const switching = document.querySelector(".switching");
	switching.addEventListener("click",function(){
		location.href="http://localhost/snipet/slider/";
	});
</script>
</body>
</html>
