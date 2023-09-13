<!-- CSS読みこみ -->
<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- css -->
	<link rel="stylesheet" href="../css/style.css">
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
		ul{
			max-width: 910px;
			display: flex;
			flex-wrap: wrap;
			justify-content: center;
			align-items: center;
			gap: 30px;
			margin-inline: auto;
		}
		.up {
			display: inline-block;
			vertical-align: middle;
			color: #333;
			line-height: 1;
			width: 0.7em;
			height: 0.7em;
			border: 0.1em solid currentColor;
			border-left: 0;
			border-bottom: 0;
			box-sizing: border-box;
			transform: translateY(25%) rotate(-45deg);
			transition: .3s ease;
		}
		.btn__more{
			margin: 30px auto;
			display: flex;
			width: 150px;
			height: 40px;
			justify-content: center;
			align-items: center;
			gap:10px ;
		}
		.menu__more{
			display: none;
		}
		.menu__more.show{
			display: block;
			margin-bottom: 30px;
			margin-top: 30px;
			opacity: 1;
			animation: fadeIn .5s ease forwards;
		}
		button.btn__more.show i.up{
			transition: .3s ease;
			transform: translateX(25%) rotate(136deg);
		}
		@keyframes fadeIn {
			0%{
				opacity: 0;
			}
			100%{
				opacity: 1;
			}
		}
	</style>

</head>

<body>
<main>
	<div class="menu">
		<ul>
			<li><img src="../img/01.jpg" alt="" width="300" height="300"></li>
			<li><img src="../img/01.jpg" alt="" width="300" height="300"></li>
			<li><img src="../img/01.jpg" alt="" width="300" height="300"></li>
		</ul>
		<div class="menu__more">
			<ul>
				<li><img src="../img/02.jpg" width="300" height="300"></li>
				<li><img src="../img/02.jpg" width="300" height="300"></li>
				<li><img src="../img/02.jpg" width="300" height="300"></li>
				<li><img src="../img/02.jpg" width="300" height="300"></li>
				<li><img src="../img/02.jpg" width="300" height="300"></li>
				<li><img src="../img/02.jpg" width="300" height="300"></li>
			</ul>
		</div>
		<button class="btn__more">
			▶もっと見る
		</button>
	</div>
	<div class="menu mt-100">
		<ul>
			<li><img src="../img/01.jpg" alt="" width="300" height="300"></li>
			<li><img src="../img/01.jpg" alt="" width="300" height="300"></li>
			<li><img src="../img/01.jpg" alt="" width="300" height="300"></li>
		</ul>
		<div class="menu__more">
			<ul>
				<li><img src="../img/02.jpg" width="300" height="300"></li>
				<li><img src="../img/02.jpg" width="300" height="300"></li>
				<li><img src="../img/02.jpg" width="300" height="300"></li>
				<li><img src="../img/02.jpg" width="300" height="300"></li>
				<li><img src="../img/02.jpg" width="300" height="300"></li>
				<li><img src="../img/02.jpg" width="300" height="300"></li>
			</ul>
		</div>
		<button class="btn__more">
		▶もっと見る
		</button>
	</div>
	<script>

const btnMore = document.querySelectorAll(".btn__more");

btnMore.forEach(function (btn) {
	btn.addEventListener("click", function () {
		const showMore = btn.previousElementSibling;
		showMore.classList.toggle("show");
		btn.classList.toggle("show");
		if(btn.classList.contains("show")){
			btn.textContent="▲閉じる";
		}else{
			btn.textContent="▶もっとみる";
		}
	});
});
</script>

</main>

<footer>

</footer>
<!-- ここから描いていく -->
</body>
</html>
