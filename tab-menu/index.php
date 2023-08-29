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

<div class="container">
	<ul class="tab-list">
		<li class="tab-item ">About</li>
		<li class="tab-item">Works</li>
		<li class="tab-item">Contact</li>
	</ul>
	<div class="tab-container">
		<div class="tab-content active">About2の内容</div>
		<div class="tab-content">Works2の内容</div>
		<div class="tab-content">Contact3の内容</div>
		<div class="tab-content ">Aboutの内容</div>
		<div class="tab-content">Worksの内容</div>
		<div class="tab-content">Contactの内容</div>

	</div>
	</div>
	<div class="accordion">
	<div class="toggle_contents">
		<p class="toggle_title">HTML</p>
		<div class="toggle_txt">
			<pre class="copy">
				<code>
&lt;div class=&quot;container&quot;&gt;
	&lt;ul class=&quot;tab-list&quot;&gt;
		&lt;li class=&quot;tab-item &quot;&gt;About&lt;/li&gt;
		&lt;li class=&quot;tab-item&quot;&gt;Works&lt;/li&gt;
		&lt;li class=&quot;tab-item&quot;&gt;Contact&lt;/li&gt;
	&lt;/ul&gt;
&lt;div class=&quot;tab-container&quot;&gt;
	&lt;div class=&quot;tab-content active&quot;&gt;About2の内容&lt;/div&gt;
	&lt;div class=&quot;tab-content&quot;&gt;Works2の内容&lt;/div&gt;
	&lt;div class=&quot;tab-content&quot;&gt;Contact3の内容&lt;/div&gt;
	&lt;div class=&quot;tab-content &quot;&gt;Aboutの内容&lt;/div&gt;
	&lt;div class=&quot;tab-content&quot;&gt;Worksの内容&lt;/div&gt;
	&lt;div class=&quot;tab-content&quot;&gt;Contactの内容&lt;/div&gt;

&lt;/div&gt;
&lt;/div&gt;
</code>
			</pre>
		</div>
	</div>
	<div class="toggle_contents">
		<p class="toggle_title">SCSS</p>
		<div class="toggle_txt">
			<a href="http://localhost/snipet/scss/object/project/_tab-menu.scss" target="_blank">コードこちら</a>
		</div>
	</div>
	<div class="toggle_contents">
		<p class="toggle_title">js</p>
		<div class="toggle_txt">
			<pre class="copy">
				<code>
				// 一つの箇所のみ開く閉じる
					$(function(){
						$(&#039;.toggle_title&#039;).on(&#039;click&#039;,function() {
							$(this).toggleClass(&#039;selected&#039;);
							$(this).next().slideToggle();
							$(&#039;.toggle_title&#039;).not($(this)).next().slideUp();
							$(&#039;.toggle_title&#039;).not($(this)).removeClass(&#039;selected&#039;);
						});
					});

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
