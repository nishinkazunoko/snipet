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
	<div class="grid">
		<div class="grid__wrap">
			<img src="../img/02.jpg" alt="" class="img1">
			<img src="../img/04.jpg" alt="" class="img2">
			<img src="../img/01.jpg" alt="" class="img3">
			<img src="../img/05.jpg" alt="" class="img4">
			<img src="../img/01.jpg" alt="" class="img5">
		</div>
	</div>
<div class="accordion">
	<div class="toggle_contents">
		<p class="toggle_title">HTML</p>
		<div class="toggle_txt">
			<pre class="copy">
				<code>
				&lt;a class=&quot;twitter-timeline&quot; data-lang=&quot;ja&quot; data-width=&quot;100%&quot; data-height=&quot;450&quot; data-chrome=&quot;noheader nofooter&quot;  href=&quot;https://twitter.com/ncam_chunichi?ref_src=twsrc%5Etfw&quot;&gt;Tweets by ncam_chunichi&lt;/a&gt;
				</code>
			</pre>
		</div>
	</div>

	<div class="toggle_contents">
		<p class="toggle_title">js</p>
		<div class="toggle_txt">
			<pre class="copy">
				<code>
		(function(window, document) {
	function main() {
		var ad = document.createElement('script');
		ad.type = 'text/javascript';
		ad.async = true;
		ad.src = 'https://platform.twitter.com/widgets.js';
		var sc = document.getElementsByTagName('script')[0];
		sc.parentNode.insertBefore(ad, sc);
	}

	// 遅延読込み
	var lazyLoad = false;
	function onLazyLoad() {
		if (lazyLoad === false) {
		// 複数呼び出し回避 + イベント解除
		lazyLoad = true;
		window.removeEventListener('scroll', onLazyLoad);
		window.removeEventListener('mousemove', onLazyLoad);
		window.removeEventListener('mousedown', onLazyLoad);
		window.removeEventListener('touchstart', onLazyLoad);
		window.removeEventListener('keydown', onLazyLoad);

		main();
		}
	}
	window.addEventListener('scroll', onLazyLoad);
	window.addEventListener('mousemove', onLazyLoad);
	window.addEventListener('mousedown', onLazyLoad);
	window.addEventListener('touchstart', onLazyLoad);
	window.addEventListener('keydown', onLazyLoad);
	window.addEventListener('load', function() {
		// ドキュメント途中（更新時 or ページ内リンク）
		if (window.pageYOffset) {
		onLazyLoad();
		}
	});
	})(window, document);
				</code>
			</pre>
		</div>
	</div>

</div>


</div>
<?php include_once '../assets/inc/toTOP.html'; ?>

</div>


</main>
<footer>

</footer>
<!-- ここから描いていく -->
<script src="../js/common.js"></script>
<script src="https://cdn.jsdelivr.net/clipboard.js/1.5.13/clipboard.min.js"></script>
</body>
</html>
