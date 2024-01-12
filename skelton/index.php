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
		lite-youtube{
			position: absolute;
			width: 100%;
			top: 0;
			height: auto;
		}
		.videoWrap{
			aspect-ratio: 16/9;
			width: 100%;
			height: 100%;
			position: relative;
		}
		.videoWrap iframe{
			width: 100%;
		}
		.loading{
			position: relative;
			display: block;
			width: 100%;
			height: 100%;
			background:#fff ;
			overflow: hidden;
			z-index: 50;
		}
		.loading::before{
			position: absolute;
			top: 0;
			left: 0;
			z-index: 100;
			content: "";
			display: block;
			height: 100%;
			width: 100%;
			background: linear-gradient(
				90deg,
				transparent,
				rgba(255, 255, 255, 0.2),
				transparent
			);
			animation: skeleton-animation 1.2s linear infinite;
		}
		@keyframes skeleton-animation {
			0%{
				transform: translateX(-100%);
			}
			100%{
				transform: translateX(100%);
			}
		}
		/* 画像部分のスケルトンスクリーン */
		.loading__img {
			display: block;
			width: 100%;
			height: 100%;
			background-color: #e2e2e2;
			}

/* スケルトンスクリーンを非表示にするクラス */
		.loading.none {
			display: none;
		}
	</style>
	<script>
// ローディングの要素取得
    window.addEventListener('load', () => {
        const loadingItems = document.querySelectorAll(".loading");
        loadingItems.forEach((element) => {
            element.classList.add("none");
        });
    });

	</script>
</head>

<body>
<main>

<?php include_once '../assets/inc/header.html'; ?>
<div class="outWrap">

<div class="l-container ">
	<ul class="videoList">
		<li class="videoWrap">
			<span class="loading" data-js="loading">
				<span class="loading__img"></span>
			</span>
				<lite-youtube videoid="emhoqxEb2Pg" style="background-image: url('https://i.ytimg.com/vi/emhoqxEb2Pg/maxresdefault.jpg');">
					<button type="button" class="lty-playbtn"><span class="lyt-visually-hidden">Play</span></button>
				</lite-youtube>
		</li>
		<li class="videoWrap">
			<span class="loading" data-js="loading">
				<span class="loading__img"></span>
			</span>
				<lite-youtube videoid="emhoqxEb2Pg" style="background-image: url('https://i.ytimg.com/vi/emhoqxEb2Pg/maxresdefault.jpg');">
					<button type="button" class="lty-playbtn"><span class="lyt-visually-hidden">Play</span></button>
				</lite-youtube>
		</li>		
		<li class="videoWrap">
			<span class="loading" data-js="loading">
				<span class="loading__img"></span>
			</span>
				<lite-youtube videoid="emhoqxEb2Pg" style="background-image: url('https://i.ytimg.com/vi/emhoqxEb2Pg/maxresdefault.jpg');">
					<button type="button" class="lty-playbtn"><span class="lyt-visually-hidden">Play</span></button>
				</lite-youtube>
		</li>
		<li class="videoWrap">
			<span class="loading" data-js="loading">
				<span class="loading__img"></span>
			</span>
				<lite-youtube videoid="emhoqxEb2Pg" style="background-image: url('https://i.ytimg.com/vi/emhoqxEb2Pg/maxresdefault.jpg');">
					<button type="button" class="lty-playbtn"><span class="lyt-visually-hidden">Play</span></button>
				</lite-youtube>
		</li>
		<li class="videoWrap">
			<span class="loading" data-js="loading">
				<span class="loading__img"></span>
			</span>
				<lite-youtube videoid="emhoqxEb2Pg" style="background-image: url('https://i.ytimg.com/vi/emhoqxEb2Pg/maxresdefault.jpg');">
					<button type="button" class="lty-playbtn"><span class="lyt-visually-hidden">Play</span></button>
				</lite-youtube>
		</li>
		<li class="videoWrap">
			<span class="loading" data-js="loading">
				<span class="loading__img"></span>
			</span>
				<lite-youtube videoid="emhoqxEb2Pg" style="background-image: url('https://i.ytimg.com/vi/emhoqxEb2Pg/maxresdefault.jpg');">
					<button type="button" class="lty-playbtn"><span class="lyt-visually-hidden">Play</span></button>
				</lite-youtube>
		</li>
		<li class="videoWrap">
			<span class="loading" data-js="loading">
				<span class="loading__img"></span>
			</span>
				<lite-youtube videoid="emhoqxEb2Pg" style="background-image: url('https://i.ytimg.com/vi/emhoqxEb2Pg/maxresdefault.jpg');">
					<button type="button" class="lty-playbtn"><span class="lyt-visually-hidden">Play</span></button>
				</lite-youtube>
		</li>
		<li class="videoWrap">
			<span class="loading" data-js="loading">
				<span class="loading__img"></span>
			</span>
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
