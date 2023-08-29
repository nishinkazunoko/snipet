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
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lite-youtube-embed/0.2.0/lite-yt-embed.css" integrity="sha512-a/02IBOTwuaufMgBLYpBKvO9y01S8rmk0l0+xSxQfI8PDgmxC1O/DJaH8PfAL43iTqed/V+q6OsCNH+o963PlQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
		.videoList{
			margin-inline: auto;
			display: grid;
			grid-template-columns: 30% 30% 30%;
			place-content: center;
			place-items: center;
			gap: 30px;
			
		}
		@media (700px >= width){
			.videoList{
				padding: 0 15px;
				grid-template-columns: 100%;
			}
		}
		.videoWrap{
			aspect-ratio: 16/9;
			width: 100%;
			height: 100%;
		}
		.videoWrap iframe{
			width: 100%;
		}
	</style>
</head>

<body>
<main>

<?php include_once '../assets/inc/header.html'; ?>
<div class="outWrap">

<div class="l-container ">
	<ul class="videoList">
		<li class="videoWrap">
			<lite-youtube videoid="emhoqxEb2Pg" style="background-image: url('https://i.ytimg.com/vi/emhoqxEb2Pg/maxresdefault.jpg');">
				<button type="button" class="lty-playbtn"><span class="lyt-visually-hidden">Play</span></button>
			</lite-youtube>
		</li>
		<li class="videoWrap">
			<lite-youtube videoid="emhoqxEb2Pg" style="background-image: url('https://i.ytimg.com/vi/emhoqxEb2Pg/maxresdefault.jpg');">
				<button type="button" class="lty-playbtn"><span class="lyt-visually-hidden">Play</span></button>
			</lite-youtube>
		</li>
		<li class="videoWrap">
			<lite-youtube videoid="emhoqxEb2Pg" style="background-image: url('https://i.ytimg.com/vi/emhoqxEb2Pg/maxresdefault.jpg');">
				<button type="button" class="lty-playbtn"><span class="lyt-visually-hidden">Play</span></button>
			</lite-youtube>
		</li>
		<li class="videoWrap">
			<lite-youtube videoid="emhoqxEb2Pg" style="background-image: url('https://i.ytimg.com/vi/emhoqxEb2Pg/maxresdefault.jpg');">
				<button type="button" class="lty-playbtn"><span class="lyt-visually-hidden">Play</span></button>
			</lite-youtube>
		</li>
		<li class="videoWrap">
			<lite-youtube videoid="emhoqxEb2Pg" style="background-image: url('https://i.ytimg.com/vi/emhoqxEb2Pg/maxresdefault.jpg');">
				<button type="button" class="lty-playbtn"><span class="lyt-visually-hidden">Play</span></button>
			</lite-youtube>
		</li>
		<li class="videoWrap">
			<lite-youtube videoid="emhoqxEb2Pg" style="background-image: url('https://i.ytimg.com/vi/emhoqxEb2Pg/maxresdefault.jpg');">
				<button type="button" class="lty-playbtn"><span class="lyt-visually-hidden">Play</span></button>
			</lite-youtube>
		</li>
		<li class="videoWrap">
			<lite-youtube videoid="emhoqxEb2Pg" style="background-image: url('https://i.ytimg.com/vi/emhoqxEb2Pg/maxresdefault.jpg');">
				<button type="button" class="lty-playbtn"><span class="lyt-visually-hidden">Play</span></button>
			</lite-youtube>
		</li>
		<li class="videoWrap">
			<lite-youtube videoid="emhoqxEb2Pg" style="background-image: url('https://i.ytimg.com/vi/emhoqxEb2Pg/maxresdefault.jpg');">
				<button type="button" class="lty-playbtn"><span class="lyt-visually-hidden">Play</span></button>
			</lite-youtube>
		</li>
	</ul>


</div>
<?php include_once '../assets/inc/toTOP.html'; ?>

</div>


</main>
<footer>

</footer>
<!-- ここから描いていく -->
<script src="../js/common.js"></script>
<script src="https://cdn.jsdelivr.net/clipboard.js/1.5.13/clipboard.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lite-youtube-embed/0.2.0/lite-yt-embed.js" integrity="sha512-8enKnFefzurzM5t8sFERkldg/nw+Kh8GNXLTesyT6/enZ+N1o6MMchxV3C/0G+4RrAZrE8v61EdJ+BuY6qqapA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>
