<!-- CSS読みこみ -->
<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- css -->
	<link rel="stylesheet" href="../css/style.css?202308291557">
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
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	<script src="./delighters.js"></script>
	
	<title>コード管理</title>
	<style>
		/*        Delighters
---------------------------*/

	#Delighters {
	background-color: #F8F7F5;
	}

	.img-erea {
	margin: 0 auto;
	/* 領域からはみ出た部分を表示しないように指定する */
	overflow: hidden;
	width: 40%;
	}

	.img-box-wrapper {
	display:flex;
	justify-content: center;
	}

	.img-box-wrapper .img-box1, .img-box-wrapper .img-box2 {
	overflow: hidden;
	width: 35%;
	margin: 100px 10px 0 10px;
	}

	.img-erea img, .img-box1 img, .img-box2 img {
	vertical-align: bottom;
	width: 100%;
	}


	/* delighter 基本のスタイル(ズーム) */

	.zoom-out-img.delighter {
	transition: all 1s ease-out;
	-webkit-transform: scale(1.15, 1.15);
	transform: scale(1.15, 1.15);
	}


	/* delighter スタート時のスタイル(ズーム) */

	.zoom-out-img.delighter.started {
	-webkit-transform: scale(1, 1);
	transform: scale(1, 1);
	}


	/* delighter エンド時のスタイル(ズーム) */

	.zoom-out-img.delighter.started.ended {
	-webkit-transform: scale(1, 1);
	transform: scale(1, 1);
	}
	</style>
	<script>
	// Delighters
	/*
		Delighters - Add CSS animations to delight users as they scroll down.
		(c) 2018 - Q42
		Written by Martin Kool
		https://github.com/Q42/delighters
	*/
	var Delighters = new(function () {
		var self = this,
		dels = this.dels = [],
		// default options
		options = {
			attribute: 'data-delighter',
			classNames: ['delighter', 'started', 'ended'],
			start: 0.75, // default start threshold
			end: 0.75, // default end threshold
			autoInit: true // initialize when DOMContentLoaded
		};
		document.addEventListener("DOMContentLoaded", function () {
		if (options.autoInit) init();
		});

		function config(opts) {
		for (var name in opts) options[name] = opts[name];
		}

		function init() {
		document.addEventListener('scroll', scroll)
		var els = document.querySelectorAll('[' + options.attribute + ']');
		for (var i = 0; i < els.length; i++) {
			var el = els[i],
			def = el.getAttribute(options.attribute, 2),
			pairs = def.split(';'),
			del = {};
			del.start = options.start;
			del.end = options.end;
			for (var j = 0; j < pairs.length; j++) {
			var pair = pairs[j].split(':'),
				name = pair[0],
				val = isNaN(pair[1] * 1) ? pair[1] : pair[1] * 1;
			if (name) del[name] = (val === undefined) ? true : val;
			}
			del.el = el;
			del.id = dels.length;
			dels.push(del);
			el.classList.add(options.classNames[0])
			if (del.debug) el.style.outline = 'solid red 4px';
		}
		scroll();
		}

		function scroll() {
		var viewportHeight = window.innerHeight;
		for (var i = 0; i < dels.length; i++) {
			var del = dels[i],
			box = del.el.getBoundingClientRect(),
			factorStart = box.top / viewportHeight,
			factorEnd = box.bottom / viewportHeight;
			if (del.debug) {
			if (factorStart >= 0 && factorStart <= 1) {
				if (!del.startLine) {
				del.startLine = document.createElement('div')
				document.body.appendChild(del.startLine);
				del.startLine.style = 'position:fixed;height:0;width:100%;border-bottom:dotted red 2px;top:' + (del.start * 100) + 'vh';
				}
			}
			if (((factorEnd < del.end) || (factorStart > 1)) && del.startLine) {
				del.startLine.parentNode.removeChild(del.startLine);
				delete del.startLine;
			}
			}
			// trueにすると繰り返し、falseにすると一回だけ         
			if (factorStart < del.start && !del.started) {
			del.started = true;
			del.el.classList.add(options.classNames[1])
			} else if (factorStart > del.start && del.started) {
			del.started = false;
			del.el.classList.remove(options.classNames[1])
			}
			if (factorEnd < del.end && !del.ended) {
			del.ended = true;
			del.el.classList.add(options.classNames[2])
			} else if (factorEnd > del.end && del.ended) {
			del.ended = false;
			del.el.classList.remove(options.classNames[2])
			}
		}
		}
		self.init = init;
		self.config = config;
	})();
	</script>
</head>

<body>
<main>

<!-- <?php include_once '../assets/inc/header.html'; ?> -->
<div class="outWrap">
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
		<section id="Delighters">
		<div class="wrapper">
			<div class="img-erea"> <img class="zoom-out-img" data-delighter src="https://dl.easyuploader.cloud/20220131221337_51385349.webp" alt="サンプル画像" loading="lazy" /> </div>
			<div class="img-box-wrapper">
			<div class="img-box1"> <img class="zoom-out-img" data-delighter src="https://dl.easyuploader.cloud/20220207215853_69655456.webp" alt="サンプル画像2" loading="lazy" /> </div>
			<div class="img-box2"> <img class="zoom-out-img" data-delighter src="https://dl.easyuploader.cloud/20220207215853_39344366.webp" alt="サンプル画像3" loading="lazy" /> </div>
			</div>
		</div>
		</section>
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
</div>


</main>
<footer>

</footer>
<!-- ここから描いていく -->
<script src="../js/common.js"></script>
<script src="https://cdn.jsdelivr.net/clipboard.js/1.5.13/clipboard.min.js"></script>
</body>
</html>
