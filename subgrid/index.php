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
		.Container{
			display: grid;
			place-content: center;
			grid-template-columns: repeat(auto-fill, minmax(30ch, 1fr));
			margin: 0 auto;
		}
		.card{
				display: grid;
				grid-template-columns:subgrid;
				grid-row: span 4;
				gap: 1em;
			}
	</style>
</head>

<body>
<main>

<?php include_once '../assets/inc/header.html'; ?>
<div class="outWrap">

<div  class="l-container">

<div class="Container">
	<div class="card">
		<p>
			Lorem, ipsum dolor sit amet consectetur adipisicing elit. Illo, culpa exercitationem repellat quasi facilis qui consectetur commodi sed quam sit sint ipsa fugiat aut saepe. Fugiat quod doloremque animi sint?
		</p>
		<img src="../img/01-1.webp" width="200" height="100" alt="">
		<p>テキスト手すきと</p>
		<small>footer</small>
	</div>
	<div class="card">
		<p>
			Lorem, ipsum dolor sit amet consectetur adipisicing elit. Illo, culpa exercitationem repellat quasi facilis qui consectetur commodi sed quam sit sint ipsa fugiat aut saepe. Fugiat quod doloremque animi sint?Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi a, atque, asperiores magni amet dolorem modi ad necessitatibus molestiae ullam laborum? Voluptatibus maiores necessitatibus impedit quisquam nihil deserunt qui quia.
		</p>
		<img src="../img/01-1.webp" width="200" height="100" alt="">
		<p>テキスト手すきと0000000000</p>
		<small>footer</small>
	</div>
	<div class="card">
		<p>
			Lorem, ipsum dolor sit amet consectetur adipisicing elit. Illo, culpa exercitationem repellat quasi facilis qui consectetur commodi sed quam sit sint ipsa fugiat aut saepe. Fugiat quod doloremque animi sint?Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi a, molestiae ullam laborum? Voluptatibus maiores necessitatibus impedit quisquam nihil deserunt qui quia.
		</p>
		<img src="../img/01-1.webp" width="200" height="100" alt="">
		<p>テキスト手すきと0000000000</p>
		<small>footer</small>
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
