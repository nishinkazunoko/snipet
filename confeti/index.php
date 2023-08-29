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
	<div class="confeti01">
	<button id="button" class="ready" onclick="clickButton();">
	
	<div class="message submitMessage">
		<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 13 12.2">
		<polyline stroke="currentColor" points="2,7.1 6.5,11.1 11,7.1 "/>
		<line stroke="currentColor" x1="6.5" y1="1.2" x2="6.5" y2="10.3"/>
		</svg> <span class="button-text">Congrats</span>
	</div>
	
	<div class="message loadingMessage">
		<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 19 17">
		<circle class="loadingCircle" cx="2.2" cy="10" r="1.6"/>
		<circle class="loadingCircle" cx="9.5" cy="10" r="1.6"/>
		<circle class="loadingCircle" cx="16.8" cy="10" r="1.6"/>
		</svg>
	</div>
	
	<div class="message successMessage">
		<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 13 11">
		<polyline stroke="currentColor" points="1.4,5.8 5.1,9.5 11.6,2.1 "/>
		</svg> <span class="button-text">Thanks</span>
	</div>
	</button>

<canvas id="canvas"></canvas>
	</div>
<div class="confeti2">
	<h1>Happy<br>birthday!!</h1><button onclick="confetti()">Launch confetti</button>
</div>


</div>
<?php include_once '../assets/inc/toTOP.html'; ?>

</div>


</main>
<footer>

</footer>
<!-- ここから描いていく -->
<script src="../js/common.js"></script>
<script src="../js/observers.js"></script>
<script src="https://cdn.jsdelivr.net/clipboard.js/1.5.13/clipboard.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/canvas-confetti@1/dist/confetti.browser.min.js"></script>
<script src="../js/confeti.js"></script>
</body>
</html>
