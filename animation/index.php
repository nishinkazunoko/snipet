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
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Darumadrop+One&display=swap" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	<title>コード管理</title>
	<style>
/* ===============
js-trigger up
===============*/
/* //trigger upをつける */
.trigger {
opacity: 0;
}
.trigger.in.is-active {
	animation: fadeIn 1.5s cubic-bezier(0.25, 1, 0.5, 1) 1 forwards;
}
.trigger.up.is-active {
		animation: slideUp 2s .3s cubic-bezier(0.25, 1, 0.5, 1) 1 forwards;
	}
.trigger.left.is-active {
	animation: slideLeft 2s .3s cubic-bezier(0.25, 1, 0.5, 1) 1 forwards;
}
.trigger.right.is-active {
	animation: slideRight 2s .3s cubic-bezier(0.25, 1, 0.5, 1) 1 forwards;
}
	@keyframes fadeIn {
	0% {
		display: none;
		opacity: 0;
	}
	
	1% {
		display: block;
		opacity: 0;
	}

	100% {
		display: block;
		opacity: 1;
	}
}
	@keyframes slideUp {
	0% {
			transform: translateY(180px);
			opacity: 0;
			transform: scale(1,2);
	}
	
	100% {
		transform: translateY(0);
	transform: scale(1,1);
	}
	
	40%, 100% {
		opacity: 1;
		}
	}
	@keyframes slideLeft {
	0% {
		-webkit-transform: translateX(-180px);
		transform: translateX(-180px);
		opacity: 0;
		}
	100% {
		-webkit-transform: translateX(0);
		transform: translateX(0);
	}
	40%, 100% {
		opacity: 1;
		}
	}
@keyframes slideRight {
	0% {
		-webkit-transform: translateX(180px);
		transform: translateX(180px);
		opacity: 0;
		}
	100% {
		-webkit-transform: translateX(0);
		transform: translateX(0);
	}
	40%, 100% {
		opacity: 1;
		}
	}
	</style>
</head>

<body>
<main>

<?php include_once '../assets/inc/header.html'; ?>
<div class="outWrap">

<div  class="l-container">
	<div class="margin200"></div>
	<h3>上から下に</h3>
	<img src="../img/01.jpg" alt="" width="300" height="400">
	
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
</body>
</html>
