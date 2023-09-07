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
	<!-------------- Swiper CSS ------------------------------------------------------------->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/simplebar/6.2.5/simplebar.min.js"></script>
	<title>コード管理</title>
	<style>
section {
  display: flex;
}
.one {
	display: flex;
	align-items: center;
	width: 100%;
	min-height: 100vh;
	padding: 20px;
}
.bg {
	position: fixed;
	top: 0;
	left: 0;
	right: 0;
	width: 100%;
	height: 100%;
	background-position: center center;
	background-size: cover;
	background-repeat: no-repeat;
	opacity: 0;
	transition: all 0.5s ease 0s;
	z-index: -1;
}
.show .bg {
	opacity: 1;
}
.bg._01 {
	background-image: url("https://125naroom.com/demo/img/itukanokotonokoto01.jpg");
}
.bg._02 {
	background-image: url("https://125naroom.com/demo/img/itukanokotonokoto02.jpg");
}

	.onebox {
	max-width: 400px;
	margin: 0 auto;
	padding: 20px;
	background: #ffffff;
	}
	.onebox img {
	width: 100%;
	height: auto;
	vertical-align: top;
	margin-bottom: 15px;
	}
	.onebox p {
	text-align: center;
	margin: 0;
	}

	</style>
	<script>
$(function(){
	$(".one").each(function(i, elem){
		var one = $(elem).offset().top;
		$(window).on("load scroll resize", function(){
		var two = $(window).height();
		var three = $(window).scrollTop();
		var showClass = "show";
		var timing = 500; // 50px, add to css
		if (three >= one - two + timing){
			$(elem).addClass(showClass);
		} else {
			$(elem).removeClass(showClass);
		}
		});
	});
	});
	</script>
</head>

<body>
<main>

<?php include_once '../assets/inc/header.html'; ?>
<div class="outWrap">

<div class="l-container">
<section>
	<div class="one">
		<div class="bg _01"></div>
		<div class="onebox">
			<img src="https://125naroom.com/demo/img/itukanokotonokoto01.jpg" alt="">
			<p>1st</p>
			<p class="_a"><a href="https://125naroom.com/web/3431" target="_blank" class="link">View the note</a></p>
		</div>
	</div>
	<p>
		中日ドラゴンズ オフィシャルウェブサイト中日ドラゴンズ オフィシャルウェブサイト
		TICKET
		ONLINE SHOP
		マイページ
		オーナーズサイト
		ニュース
		試合情報
		チケット
		チームデータ
		ファーム
		ファンエンタメ
		バンテリンドーム
		グッズショップ
		ファンクラブ
		スポンサー
		ドラゴンズベースボールアカデミー Let's Baseball Kids（キッズ野球教室）
		ドラゴンズベースボールアカデミー“Let‛s Baseball Kids”（キッズ野球教室）は、「野球を教える」「野球を習う」のではなく『野球の楽しさ』を知ってもらうための野球体験会です。園児年長から小学校４年生までの野球に興味を持ち始めた“こども”達を対象としています。「野球っておもしろそうだなぁ！」「ボールを思い切って打ってみたいなぁ！」「プロ野球選手になりたいなぁ！」と、興味を持ち始めた“こども”達が対象です。“Let‛s Baseball Kids”（キッズ野球教室）に、参加してくれた“こども”達が野球に興味を持ち、地元のチームに入団して本格的に野球を続けてほしい、と願っています。さぁ 野球好き！あつまれ！！
		会場・日程
		開催日	開催時間	担当チーム	開催場所	応募
		9/16(土)	9:00～12:00	愛知県軟式野球連盟
		半田支部学童部	半田北部グラウンド
		（半田市石塚町3丁目1）
		地図を見る
		9/13まで
		受付中
		9/17(日)	9:00～12:00	岩倉南野球スポーツ少年団	岩倉市立岩倉南小学校
		（岩倉市大地町小森93−1）
		地図を見る
		9/14まで
		受付中
		9/18(月)	9:00～12:00	日進市少年軟式野球連盟	日進市総合運動公園　スポーツ広場
		（日進市岩藤町大清水919−1）
		地図を見る
		9/15まで
		受付中
		9/23(土)	9:00～12:00	蟹江南JBC	蟹江町日光川ウォーターパーク野球場
		（蟹江町大字蟹江新田字銭袋101）
		地図を見る
		9/20まで
		受付中
		応募要項
		参加対象	園児年長～小学校4年生の男女
		野球に興味があり、開催地区およびその周辺にお住まいの方
		参加費	参加費無料
		定員	各回60名
		教室内容	ティーボール（柔らかいボール）を使用。
		キャッチボールやスタンドティーでの打撃体験、ベースランニング体験、ティーボールゲームでの試合体験など。
		野球の技術指導教室ではなく、野球の楽しさを体験してもらう。
		指導	中日ドラゴンズOB及び開催地区軟式野球チーム指導者
		服装	運動のできる服装、シューズ
		持ち物	グローブ、飲み物（必ずご持参ください）、保険証（コピー可）
		申込方法	氏名、学年、お住まい、電話番号を記載し、開催日の3日前までに開催日ごとの応募フォームよりお申込みください。
		定員に達した時点で応募受付を終了させていただきます。
		定員に達していない場合は、当日参加も受け付けます
		中止の連絡	
		中止の場合は、ドラゴンズベースボールアカデミーTwitterにて開催2時間前に案内します
		小雨決行、荒天中止
		その他	
		主催者は傷害保険に加入し、事故の場合の応急処置はいたしますが、その後の責任は負いません
		本教室の映像・写真・記事・個人情報等の新聞・雑誌・テレビ・インターネット等への掲載権と肖像権は主催者に属します
	</p>
	</section>
	<section>
	<div class="one">
		<div class="bg _02"></div>
		<div class="onebox">
			<img src="https://125naroom.com/demo/img/itukanokotonokoto02.jpg" alt="">
			<p>2nd</p>
			<p class="_a"><a href="https://125naroom.com/web/3431" target="_blank" class="link">View the note</a></p>
		</div>
	</div>
	</section>
</div>


</main>
<footer>

</footer>
<!-- ここから描いていく -->
<script src="../js/common.js"></script>
<script src="https://cdn.jsdelivr.net/clipboard.js/1.5.13/clipboard.min.js"></script>
</body>
</html>
