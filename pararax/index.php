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
	<script src="https://cdn.jsdelivr.net/npm/simple-parallax-js@5.5.1/dist/simpleParallax.min.js"></script>
	<title>コード管理</title>
	<style>

			.title{
			position: absolute;
			top: 50%;
			left: 50%;
			-webkit-transform: translate(-50%, -50%);
			transform: translate(-50%, -50%);
			font-size: 100px;
			}
			img.thumbnail{
				width: 300px;
				height: 300px;
				display: grid;
				place-content: center;
			}
			
			#splash {
				/*fixedで全面に固定*/
			position: fixed;
			z-index: 999;
			width: 100%;
			height: 100%;
			background:#333;
			text-align:center;
			color:#fff;
			}

			/* Loadingバー中央配置　*/
			#splash_text {
			position: absolute;
			top: 50%;
			left: 50%;
				z-index: 999;
			width: 100%;
			transform: translate(-50%, -50%);
			color: #fff;
			}
			.l-container{
				background-color: #fff;
			}

	</style>
</head>

<body>
<main>

<?php include_once '../assets/inc/header.html'; ?>
<div id="splash">
    <div id="splash_text"></div>
  </div>
<div class="outWrap">

<div  class="l-container">
	<!-- <img src="../img/02.jpg" class="img-bg"> -->
	<!-- <div id="luxy">
		<div class="luxy-el" >
			<div class="img-posi0 trigger in" data-speed-y="-10" data-offset="0" data-horizontal='1'>
				<img src="../img/01.jpg" width="200" height="200">
			</div>
			<div class="img-posi1 trigger in" data-speed-y="-10" data-offset="0" data-horizontal='1'>
				<img src="../img/01.jpg" width="200" height="200">
			</div>
			<div class="img-posi2 trigger in" data-speed-y="-10" data-offset="0" data-horizontal='1'>
				<img src="../img/01.jpg" width="200" height="200">
			</div>
			<div class="img-posi3 trigger in" data-speed-y="-10" data-offset="0" data-horizontal='1'>
				<img src="../img/01.jpg" width="200" height="200">
			</div>
			<div class="img-posi4 trigger in" data-speed-y="-10" data-offset="0" data-horizontal='1'>
				<img src="../img/01.jpg" width="200" height="200">
			</div>
			<div class="img-posi5 trigger in" data-speed-y="-10" data-offset="0" data-horizontal='1'>
				<img src="../img/01.jpg" width="200" height="200">
			</div>
			<div class="img-posi6 trigger in" >
				<img src="../img/01.jpg" width="200" height="200">
			</div>
			<div class="img-posi7 trigger in" >
				<img src="../img/01.jpg" width="200" height="200">
			</div>
			<div class="img-posi8 trigger in" >
				<img src="../img/01.jpg" width="200" height="200">
			</div>
			<div class="img-posi9 trigger in" >
				<img src="../img/01.jpg" width="200" height="200">
			</div>
			<div class="img-posi10 trigger in" >
				<img src="../img/01.jpg" width="200" height="200">
			</div>
			<div class="img-posi11 trigger in" >
				<img src="../img/01.jpg" width="200" height="200">
			</div>
			<div class="img-posi12 trigger in" >
				<img src="../img/01.jpg" width="200" height="200">
			</div>
			<div class="img-posi13 trigger in" >
				<img src="../img/01.jpg" width="200" height="200">
			</div>
			<div class="img-posi14 trigger in" >
				<img src="../img/01.jpg" width="200" height="200">
			</div>
			<div class="img-posi15 trigger in" >
				<img src="../img/01.jpg" width="200" height="200">
			</div>
			<div class="img-posi16 trigger in" >
				<img src="../img/01.jpg" width="200" height="200">
			</div>
			<div class="img-posi17 trigger in ">
				<img src="../img/01.jpg" width="200" height="200">
			</div>
		</div>
	</div> -->
	<p>
	株式会社 PENGIN
ホーム
会社概要
サービス
ブログ
お問い合わせ
ブログトップコーディングJavaScript
#JavaScript
2022.09.14
パララックス効果は「simpleParallax」で決まり！使い方をわかりやすく解説！
パララックス効果は「simpleParallax」で決まり！使い方をわかりやすく解説！
パララックス効果のあるサイトをつくってみたいけれど、JavaScriptで書く自信がない…。

そんな方におすすめなのがJavaScriptライブラリの「simpleParallax」です。

JavaScriptを使いますが、仕組みが理解できればカンタンにカスタマイズできるため、Webサイト制作で重宝すると思います。

CSSで実装するよりもsimpleParallaxを使うほうが実はカンタンだったり…

その理由は当記事でフロントエンドエンジニアでもある筆者が、実際のコードとともに解説していきます。

ぜひ最後までお付き合いください！

パララックスとは？

パララックスとは「視差効果」という意味で、奥行き感の演出を意味します。

Web制作におけるパララックスは、画面をスクロールするとスクロール方向とは別方向に要素が動いたり、スクロールタイミングと要素がズレて動くことで、要素間に重なりや奥行き感が出るデザインを指します。

パララックスによりコンテンツをより魅力的に見せたり、ユーザーの関心を引く効果が期待できます。

simpleParallaxとは？
simpleParallaxのトップ画面
simpleParallaxは、パララックスをカンタンに実装できるJavaScriptライブラリです。jQuery非依存のため、ピュアなJavaScriptとして使用できます。

simpleParallax 公式サイト
simpleParallax GitHubページ
simpleParallaxの読み込み
simpleParallaxは大きく分けて2つの方法で使用できます。npm／yarn経由で利用する方法、とCDNを利用する方法です。

> simple-parallax-js

npm / yarn
npm / yarn経由でインストールする場合は以下のコマンドを入力しましょう。

npm


	</p>
	<div class="parallax_box">
		<div class="parallax_content parallax_back">
		<img src="../img/02.jpg" class=" thumbnail " >
			<!-- <div class="title thumbnail">parallax</div> -->
		</div>
	</div>
	<p>

npm install simple-parallax-js
yarn


yarn add simple-parallax-js
次に「simple-parallax-js」からsimpleParallaxをインポートをすればOKです。


// ES6 import
import simpleParallax from 'simple-parallax-js';

//CommonJS
const simpleParallax = require('simple-parallax-js');
CDN
jsDelivr.comが提供しているCDNも利用できます。

> simple-parallax-js CDN by jsDelivr

CDNを利用する場合は、以下のコードをbodyの閉じタグの手前で読み込むだけでOKです。


複数の画像に同じパララックス効果をまとめて適用させる場合、querySelectorAllですべての要素を取得すればOKです。

simpleParallaxの設定オプション
オプション名	タイプ	初期値	設定できる値	説明
orientation	String	up	up – right – down – left – up left – up right – down left – left right	視差効果の方向
scale	Number	1.2	1.0以上で設定	視差効果の大きさ。値が大きいほど顕著になる。
overflow	Boolean	FALSE	trueに変更可	デフォルトだと画像はレイアウトからはみ出すことがない。tureにすることでレイアウトからはみ出す。
delay	Number	0.4	秒単位で指定	視差効果が遅れて発動
transition	String	cubic-bezier(0,0,0,1)’	任意のCSSトランジションを設定	delayとセットで指定する。ease や ease-in-outも指定できる
customContainer	String or Node	–		パララックスのコンテナを指定
customWrapper	String	–		独自のラッパーコンテナを指定
maxTransition	Number	0	1〜99で指定	パララックスアニメーションを止める位置
simpleParallaxでは公式のオプションが用意されています。これらのオプションを使ってさまざまな指定ができます。

simpleParallaxで作るデモ・サンプルを紹介
実際にsimpleParallaxを動かすデモを紹介しつつ、オプションの使用も交えて解説していきます。



.thumbnail {
	width: 100%;
}
※今から紹介するパターンのHTMLとCSSはすべて同じです。

基本の設定


const image = document.getElementsByClassName('thumbnail');
new simpleParallax(image);
横方向にスクロールする


const image = document.getElementsByClassName('thumbnail');
new simpleParallax(image, {
	orientation: 'right'
});
orientation（方向）の値をrightにすることで、視差効果が右方向に働き横向きにスクロールします。ここをleftにするとデモとは逆方向にスクロールします。

視差効果を大きくする


const image = document.getElementsByClassName('thumbnail');
new simpleParallax(image, {
	scale: 1.5
});
単体で見ると少しわかりづらいですが、scaleオプションで元画像が拡大されます。値が大きいほど視差効果が顕著になります。

はみ出した位置から動く


const image = document.getElementsByClassName('thumbnail');
new simpleParallax(image, {
	overflow: true
});
overflowの値をtrueにすることで、レイアウトされていた枠からはみ出した位置に表示されます。

わかりやすいように枠線を設定していますが、画面をスクロールするとズレた位置から画像が動きます。

視差効果の起動を遅延させる


const image = document.getElementsByClassName('thumbnail');
new simpleParallax(image, {
  delay: 1,
  transition: 'cubic-bezier(0,0,0,.1)'
});
delayは視差効果の起動を遅らせる秒数を指定できます。数値が大きいほど、動き出すまでの時間が遅くなります。

transitionは任意のCSSトランジションを設定できます。cubic-bezierやease、ease-in-outなど設定できます（delayとセットで指定する必要があります）。

cubic-bezierやeaseについて知りたい方向け
>> 【CSS】animationプロパティの使い方解説！（アニメーション基礎）

視差効果の止める位置を変える


const image = document.getElementsByClassName('thumbnail');
new simpleParallax(image, {
  maxTransition: 40
});
maxTransitionを使うと、指定したパーセンテージの位置までビューポートがスクロールされた段階で視差効果を停止させられます。

1〜99で値を指定できます。

simpleParallaxで出来ないこと
少しの記述でパララックスを実装できるsimpleParallaxですが、以下のようなケースでは動きません。

背景画像（background-image）を動かす
動画（video）を動かす
埋め込み（iframe）を動かす
simpleParallaxはimgタグに適用されるため、残念ですがHTML上にある画像以外のものはパララックス指定できません。

simpleParallaxを使ったWebサイト紹介
最後にsimpleParallaxを使った印象的なサイトをその特徴とともにご紹介します。ご自身でsimpleParallaxを使うときの参考にしてみてください。

Shibaura CHANNEL

引用元：Shibaura CHANNELトップページ
> hibaura CHANNEL｜芝浦アイランド

パララックスが使われている箇所
メインビジュアル、各コンテンツ画像
使用しているオプション
scale、transition
パララックスの挙動が同方向に統一されており、サイトにおける画像の比率が高めながら落ち着いた印象のあるサイトです。

ヘアサロン FAVOR（フェイバー）

引用元：ヘアサロン FAVOR（フェイバー）
> ヘアサロン FAVOR（フェイバー）

パララックスが使われている箇所
ブランドコンセプト・デザイン・FAVORのデザイナーなど
使用しているオプション
scale、transition
パララックス以外の動きが設定されている画像も別途あり、ユーザーの注目を集める挙動が各所に実装されています。

それでいて動きが早すぎたり、過剰だったりすることもない点に優雅さを感じるサイトです。

おまけ：CSSだけでもパララックスは実現できる？
実はパララックスのような動きは、背景画像を固定するCSSの background-attachment: fixed でも実装できます。


.box {
  background-attachment: fixed;
  background-image: url(./img/image.jpg);
  background-position: top;
  background-size: contain;
  background-repeat: no-repeat;
}

ですが、この方法はiOS端末だと正常に背景固定されません。（iPhoneやiPadから見ると、デザインや挙動がおかしいことが分かります）

これはbackground-attachment: fixed とbackground-size: coverを同時に指定すると起きるバグです。

background-attachment: fixed が一番カンタンな方法なのですが、バグを回避するためには他の手段を選択する必要があり、少々ハック的なやり方を取り入れないといけません。

その点simpleParallaxは、端末関係なく対応可能ですし、挙動も細かく指定できます。そのため、パララックスを実装したいなら、simpleParallaxで実装することをオススメします。

まとめ
simpleParallaxは、ゼロからJavaScriptを書くよりカンタンにパララックス効果のあるサイトをつくれます。

最後にsimpleParallaxの特徴を3つにまとめました。

基本の記述ルールがカンタン
横スクロールや遅延効果などを与えるオプションが豊富
画像（imgタグ）以外には実装できない
やりすぎはユーザーの離脱につながる恐れがありますが、印象付けしたい画像を適切に選ぶことで、オシャレなUIが実現できるので是非試してみてください！

この記事を書いた人

田中 真奈美
フロントエンドエンジニアとして働く兼業ライター。WEBライターとして働きながら独学でWEB制作を学んだ経緯あり。 好きなことは寝ること食べること。キャンプに行ったりゲームをしたり多趣味な人です。

RANKKING
人気ランキング
【初学者必見】HTMLにつけるclassの命名規則の考え方解説！
【初学者必見】HTMLにつけるclassの命名規則の考え方解説！
【2023年最新】Swiperの使い方を初心者向けにやさしく解説
【2023年最新】Swiperの使い方を初心者向けにやさしく解説
Photoshopで画像合成する方法解説！自然になじませるやり方教えます！
Photoshopで画像合成する方法解説！自然になじませるやり方教えます！
【2023年】レスポンシブデザインのブレイクポイントまとめ！
【2023年】レスポンシブデザインのブレイクポイントまとめ！
【初心者でも使える】Notionテンプレート無料配布サイト10選！
【初心者でも使える】Notionテンプレート無料配布サイト10選！
サービスバナー
Web制作を学びたい方
マーケティングを学びたい方
カテゴリー
コードエディタ
サーバー・ドメイン
コーディング学習
Figma
コーディング知識
PENGIN企画記事
Webサイト制作
マーケティング
Excel
Canva
HTML/CSS
マーケティング基礎
コーディング実践課題
就職・フリーランス・スクール情報
ブラウザ
コーディング
XD
JavaScript
Photoshop
SNS運用
Git
Notion
Webデザイン学習
サイト分析改善
デザイン
Web業界の知識
SEO
Webデザイン実践課題
分析ツール
Sass
Illustrator
環境構築
ホワイトペーパー
WordPress
STUDIO
ツール・システム
学習サポート
デザイン・UIパーツ実装方法
デザインの知識
メルマガ
業界情報
広告
ビジネス
CONNECTION
関連記事
jQueryのappendについて解説｜簡単な活用方法も紹介！
2020.10.30

jQueryのappendについて解説｜簡単な活用方法も紹介！
#JavaScript
画像遅延読み込みはこれ！「lazysizes.js」の使い方を徹底解説！
2022.09.15

画像遅延読み込みはこれ！「lazysizes.js」の使い方を徹底解説！
#JavaScript
注目のjsスライダーライブラリ「Splide」の使い方を徹底解説！
2022.08.19

注目のjsスライダーライブラリ「Splide」の使い方を徹底解説！
#JavaScript
【超便利】YubinBango.jsを使った住所自動入力フォームの作り方解説
2022.08.30

【超便利】YubinBango.jsを使った住所自動入力フォームの作り方解説
#JavaScript
【これだけ覚えて！】jQueryの書き方（js学習ステップ第三弾）
2020.08.02

【これだけ覚えて！】jQueryの書き方（js学習ステップ第三弾）
#JavaScript
【Webデザイナー向け】JavaScriptの文法講座（js学習ステップ第二弾）
2020.08.02

【Webデザイナー向け】JavaScriptの文法講座（js学習ステップ第二弾）
#JavaScript
関連記事を見る
CONTACT US
お気軽にお問い合わせください。

お問い合わせはこちらから
株式会社 PENGIN
合同会社PENGIN / PENGIN LLC.

東京都渋谷区神宮前6丁目23番4号桑名ビル2階

HP：https://pengi-n.co.jp/

記事カテゴリー
コードエディタ
サーバー・ドメイン
コーディング学習
Figma
コーディング知識
PENGIN企画記事
Webサイト制作
マーケティング
Excel
Canva
HTML/CSS
マーケティング基礎
コーディング実践課題
就職・フリーランス・スクール情報
ブラウザ
コーディング
XD
JavaScript
Photoshop
SNS運用
Git
Notion
Webデザイン学習
サイト分析改善
デザイン
Web業界の知識
SEO
Webデザイン実践課題
分析ツール
Sass
Illustrator
環境構築
ホワイトペーパー
WordPress
STUDIO
ツール・システム
学習サポート
デザイン・UIパーツ実装方法
デザインの知識
メルマガ
業界情報
広告
ビジネス
サイト情報
会社概要
サービス
ブログ
お問い合わせ
2022 © PENGIN Inc.

Twitter
Facebook
Hatena
Line
Pocket
Pinterest
	</p>
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
<script src="../js/luxy.min.js"></script>
<script>
const image = document.getElementsByClassName('thumbnail');
	new simpleParallax(image, {
	delay: 1,
	transition: 'cubic-bezier(0,0,0,.1)'
	});
</script>
<script>
//テキストのカウントアップ+バーの設定
var bar = new ProgressBar.Line(splash_text, {//id名を指定
  easing: 'easeInOut',//アニメーション効果linear、easeIn、easeOut、easeInOutが指定可能
  duration: 1000,//時間指定(1000＝1秒)
  strokeWidth: 0.2,//進捗ゲージの太さ
  color: '#555',//進捗ゲージのカラー
  trailWidth: 0.2,//ゲージベースの線の太さ
  trailColor: '#bbb',//ゲージベースの線のカラー
  text: {//テキストの形状を直接指定       
    style: {//天地中央に配置
      position: 'absolute',
      left: '50%',
      top: '50%',
      padding: '0',
      margin: '-30px 0 0 0',//バーより上に配置
      transform:'translate(-50%,-50%)',
      'font-size':'1rem',
      color: '#fff',
    },
    autoStyleContainer: false //自動付与のスタイルを切る
  },
  step: function(state, bar) {
    bar.setText(Math.round(bar.value() * 100) + ' %'); //テキストの数値
  }
});

//アニメーションスタート
bar.animate(1.0, function () {//バーを描画する割合を指定します 1.0 なら100%まで描画します
  $("#splash").delay(500).fadeOut(800);//アニメーションが終わったら#splashエリアをフェードアウト
}); 
</script>
</body>
</html>
