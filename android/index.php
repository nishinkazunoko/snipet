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
	<style>
		.AndroidTxt{
			max-width: 800px;
			margin-inline: auto;
			line-height: 2;
			padding: 50px 0;
		}
	</style>
</head>

<body>
<main>

<?php include_once '../assets/inc/header.html'; ?>
<div class="outWrap">

<div  class="l-container">
<P class="AndroidTxt">
	<span>useragentでAndroidを判別（matchだ”Android”の大文字小文字を区別しない、） <br>if (navigator.userAgent.indexOf('Android') > 0)だと大文字小文字を区別する</span> <br>
	下記のコードを使用<br>
	if (navigator.userAgent.match(/Android/i)) {
	let body = document.getElementsByTagName('body')[0];
	body.classList.add('Android');
	}
</P>
<p>
<span>プレフィックスでfirefoxを判別 <br>
/* firefoxのみ適用 */
	@-moz-document url-prefix() {
		.ticket__postcard .ticket__btn a{
			line-height: 1.2;
		}
}
</p>

<div class="accordion">
	<div class="toggle_contents">
		<p class="toggle_title">css</p>
		<div class="toggle_txt">
			<pre class="copy">
				<code>
				&lt;style&gt;
			@media screen and (max-width:768px) {
				body.Android .situation__item {
					margin:20px auto 0;
				}
				body.Android .about{
					padding: 100px 15px 300px;
					background-size: 100% 100%;
				}
			}
		&lt;/style&gt;
				</code>
			</pre>
		</div>
	</div>

	<div class="toggle_contents">
		<p class="toggle_title">js</p>
		<div class="toggle_txt">
			<pre class="copy">
				<code>
				&lt;script&gt;
	if (navigator.userAgent.match(/Android/i)) {
	let body = document.getElementsByTagName('body')[0];
	body.classList.add('Android');
	}
	&lt;/script&gt;
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
<script>
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
</script>
</body>
</html>
