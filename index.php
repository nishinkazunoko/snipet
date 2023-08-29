<!-- CSS読みこみ -->
<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- css -->
	<link rel="stylesheet" href="css/style.css">
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
	<script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
	<title>コード管理</title>

</head>

<body>
<main>
	<div class="loading" id="loading">
		<div id="loading__logo">
			<svg version="1.1" svg id="loadingIcon" xmlns="http://www.w3.org/2000/svg" width="622.31" height="101.94" viewBox="0 0 622.31 101.94"><defs><style>.cls-1{fill:#444;}</style></defs><path class="cls-1" d="m0,10.97c11.51-1.63,46.03-3.47,63.62-3.47-5.86,9.12-22.36,29.1-26.82,33.55,23.02-.11,38.54,12.92,38.54,26.38,0,9.45-6.51,21.93-28.01,28.23-10.75,3.04-21.71,3.91-28.44,4.23l-1.41-14.44c8.03-.65,15.85-1.96,23.56-4.23,8.47-2.5,15.42-7.71,15.42-13.68,0-9.88-15.52-11.51-26.71-12.7-9.12-.98-15.42-1.19-23.34-1.19,4.99-6.62,7.17-9.45,18.02-21.93.98-1.19,5.54-6.3,6.41-7.49-2.17.22-12.05.98-14.11,1.09-2.5.22-13.9.54-16.18.76l-.54-15.09Z"/><path class="cls-1" d="m186.85,55.48c-9.45.87-39.08,1.95-47.77,2.28-8.79.11-16.29.22-34.96.22v-14.33c4.67-.54,48.64-2.39,82.73-2.39v14.22Z"/><path class="cls-1" d="m208.89,19c5.21-.76,48.31-5.65,85.77-6.19-2.61,4.56-15.2,24.43-17.7,28.55-9.12,14.87-13.46,22.36-13.46,29.31,0,5.86,5.54,13.03,13.57,21.06l-10.31,10.21c-8.03-7.6-20.63-19.65-20.63-31.38,0-6.3,1.95-13.35,10.42-26.71,6.3-9.99,7.82-12.16,9.55-14.66-4.13.76-29.31,3.58-57,4.89l-.22-15.09Zm93.26,10.75c0,4.45-4.02,7.17-7.17,7.17-4.02,0-7.17-4.13-7.17-7.71,0-2.93,2.39-6.95,7.06-6.95,1.95,0,7.27,2.17,7.27,7.49Zm5.1,14.22c0,5.65-4.23,7.17-6.3,7.17-2.5,0-6.84-2.28-6.84-7.17,0-3.8,3.26-6.950,6.3-6.95,2.17,0,6.84,1.85,6.84,6.95Z"/><path class="cls-1" d="m341.23,26.71c.33,3.15.65,17.26.76,20.19.65,11.73,1.3,15.42,4.99,33.44.11,0,11.07-5.65,13.46-6.41l4.56,9.77c-6.41,4.45-21.17,13.14-25.19,14.87-2.5-5.54-4.56-11.62-6.95-21.71-2.61-10.96-3.47-21.17-3.47-32.57,0-8.47.43-14,.76-17.15l11.07-.43Zm51.24,10.1c2.5,8.36,5.75,23.67,5.75,36.04,0,7.82-.98,13.9-1.63,17.26h-11.29c0-2.82.11-15.2,0-17.7-.33-7.49-1.09-14.55-2.28-21.39-1.3-7.71-1.52-8.58-1.85-11.18l11.29-3.04Z"/><path class="cls-1" d="m512.99,94.34c-4.02.43-9.45.54-18.24.76-6.73.22-17.7.43-24.1.43,3.58-16.94,4.13-19.54,4.13-26.17,0-2.06,0-10.53-7.93-10.53-3.69,0-9.01,1.95-12.59,4.23-4.89,13.03-7.82,20.74-14.44,35.94l-12.92-4.34c2.17-7.49,3.58-11.83,16.18-48.42,5.54-15.52,10.1-27.36,16.94-44.29l13.46,4.45c-3.04,10.42-4.23,14-12.81,38.98,3.04-1.09,6.19-1.74,9.55-1.74,8.25,0,22.26,4.89,22.26,23.45,0,4.02-.76,9.99-1.3,12.7,12.05-.54,13.03-.65,21.82-.43v14.98Z"/><path class="cls-1" d="m594.41,8.25c-4.67,8.03-26.49,38.22-30.51,43.32,1.52,1.3,2.28,1.95,3.37,2.82,15.96,14.44,26.49,23.99,39.08,37.13l-10.1,9.88c-4.12-3.04-7.82-5.97-24.97-20.84-13.35-11.51-20.09-18.67-27.36-26.92,4.02-7.71,19.87-29.86,22.58-33.22,2.82-3.69,10.86-13.79,16.39-20.41l11.51,8.25Zm19.76,0c0,4.89-4.88,6.84-7.17,6.84-3.04,0-7.38-3.26-7.38-7.82,0-5.54,4.89-6.73,6.95-6.73,3.91,0,7.6,3.37,7.6,7.71Zm8.14,13.9c0,3.58-2.82,6.95-7.27,6.95-3.8,0-6.62-4.13-6.62-7.71,0-3.15,1.74-6.62,6.62-6.62,5.21,0,7.27,5.1,7.27,7.38Z"/></svg>
		</div>
		<div class="loading__chara">
			<ul>
				<li>
					<img src="./img/logo.webp" width="200" height="100" class="loading__chara01">
				</li>
				<li>
					<img src="./img/logo.webp" width="200" height="100" class="loading__chara02">
				</li>
				<li>
					<img src="./img/logo.webp" width="200" height="100" class="loading__chara03">
				</li>
				<li>
					<img src="./img/logo.webp" width="200" height="100" class="loading__chara04">
				</li>
			</ul>
			<img src="./img/fadeOut.webp" width="300" height="200" class="loading__fadeOut">
			<img src="./img/logo.webp" width="300" height="200" class="loading__fadeIn">

		</div>
		<div class="loading__fireworks">
			<div class="c-firework"></div>
			<div class="c-firework"></div>
			<div class="c-firework"></div>
			<div class="c-firework"></div>
			<div class="c-firework"></div>
			<div class="c-firework"></div>
		</div>
		<button class="loading__skip">Skip</button>

	</div>
	

<?php include_once 'assets/inc/header.html'; ?>
<h3 class="top__ttl">TOPぺーじ</h3>
</main>
<footer>

</footer>
<!-- ここから描いていく -->
<script src="https://cdn.jsdelivr.net/npm/vivus@latest/dist/vivus.min.js"></script>
<script src="https://cdn.jsdelivr.net/clipboard.js/1.5.13/clipboard.min.js"></script>

<script src="js/common.js"></script>
<script src="js/cookie.js"></script>
</body>
</html>
