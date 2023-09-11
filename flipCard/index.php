<!-- CSS読みこみ -->
<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- css -->
	<link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="./simplebar.css">
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
		div {
		width: 100%;
		height: 100%;
		}

	.container {
	margin: 20px;
	width: 500px;
	height: 500px;
	perspective: 1000px;
	}

	.card {
	transition: transform 2s;
	transform-style: preserve-3d;
	cursor: pointer;
	}

	.front, .back {
	position: absolute;
	display: flex;
	flex-direction: column;
	justify-content: center;
	align-items: center;
	backface-visibility: hidden;
	}

	.front {
	border: 2px solid black;
	background: url("http://placehold.it/250x250");
	}

	.front:hover {
	bottom: 2px;
	left: 2px;
	box-shadow: 0px 0px 20px 1px #000;
	}

	.back {
	border: 2px solid black;
	background: url("http://placehold.it/100x100");
	transform: rotateY(180deg);
	}

	.back:hover {
	bottom: 2px;
	right: 2px;
	box-shadow: 0px 0px 20px 1px #000;
	}
	button{
		width: 100px;
		height: 50px;
		background-color: #000;
		color: #000;
		perspective: 1000px;
		transition: .3s ease;
	}
	button:hover{
		transform-style: preserve-3d;
		background-color: green;
		transform: rotatex(150deg);
		transition: .3s ease;
	}

	</style>
	<script>
		function flip(event){
			var element = event.currentTarget;
			if (element.className === "card") {
			if(element.style.transform == "rotateY(180deg)") {
			element.style.transform = "rotateY(0deg)";
			}
			else {
			element.style.transform = "rotateY(180deg)";
			}
		}
		};
	</script>
</head>

<body>
<main>

	<div class="container">
		<div class="card" onclick="flip(event)">
			<div class="front">
			<h1>This is the front</h1>
			<p> Here is some additional text</p>
			</div>
			<div class="back">
			<h1>This is the back</h1>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="card"  onclick="flip(event)">
			<div class="front">
			<h1>This is the front</h1>
			<p> Here is some additional text</p>
			</div>
			<div class="back">
			<h1>This is the back</h1>
			</div>
		</div>
	</div>

	<button>click</button>



</main>
<footer>

</footer>
<!-- ここから描いていく -->
<script src="../js/common.js"></script>
<script src="https://cdn.jsdelivr.net/clipboard.js/1.5.13/clipboard.min.js"></script>
</body>
</html>
