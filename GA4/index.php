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
<div  class="l-container ga4Wrap">
<p class="yu">
<span class="b">ファネル(funnel)</span>：じょうごの意　サイトを訪問したユーザーが絞り込まれて、その一部だけがコンバージョンにいたることを端的に表している。（P25参照）
<br>
<span class="b">セグメント(segment)</span>：「区切り」「部分」　サイト全体のパフォーマンスは「自然検索」「広告」「参照トラフィック」等のセグメントの総計である
<br>
<span class="b">ディメンション（dimention）</span>：データを分類するための特性や属性を表します。例えば、ページのURL、国、デバイスタイプなどがディメンションとして使用されます。
<br>
<span class="b">UAの特長</span>：獲得したセッションの中でコンバージョンが発生したかどうかを可視化するように設計されている。「コンバージョン」を目標として設定し、その目標を完了した割合がコンバージョン率となっていた
<br>
<span class="b">GA4の特長</span>：UAと比べユーザーに関する機能や指標が強化されている、（1人のユーザーは複数のセッションをもたらしえるので、セッションを最適化するのではなく、ユーザーを最適化する）
<br>
</p>

<!-- レポート -->
<h3 class="yu pt-40 pl-10 pb-10">レポート</h3>
<p class="yu">
	<span class="b">ユーザー獲得レポート</span>：ユーザーが複数回の訪問を経てからコンバージョンした場合でもそのユーザーが初回訪問をしたチャネルやメディアにコンバージョンする。そのため、どのようなチャネルからメディアやユーザーを獲得すると効率よくコンバージョンが増えるのかが分かる。（Cookieのみに依存したユーザー識別ではなく。ユーザーIDでの識別（会員情報的な）や、ユーザーのGoogleアカウントを集計の対象になるように設定する。）
	<br>
	<span class="b">標準レポート</span>：「サマリーレポート」「詳細レポート」の二つに分類。GA4の画面左側｛ホーム｝の下に｛レポート｝｛探索｝｛広告｝があり、｛レポート｝と｛広告｝には最初からいくつかのレポートがある。それを標準レポートと呼ぶ。標準レポートを参照することで、自社サイトのユーザーや広告に関するレポートを確認できる。分析というよりは、サイトの「現状確認」や「主要な指標のモニタリング」で炉用するといい。カード型のものは追加したら削除したりできる。
	<br>
	<span class="b">探索レポート</span>：左バーの｛探索｝において、自社サイトが抱える課題に応じて自分達でレポートを作成して分析する場所。この時作成するのが、「探索レポート」
	<br>
</p>
<!-- イベント -->
<h3 class="yu pt-40 pl-10 pb-10">イベント</h3>
<p class="yu">
<span class="b">自動収集イベント</span>：GA4の基本的なタグを実装しただけで収集できる（first_visit、page_view）
	<br>
	<span class="b">拡張計測イベント</span>：GA4の管理画面から「拡張計測機能」をオンにすると収集できる（scroll、click、file_download、video_startなど）
	<br>
	<span class="b">推奨イベント</span>：多くのサイトで共通するユーザーアクションについてイベントを収集する場合にできる（login、purchase、sign_upなど）推奨イベントのイベント名と同じ名前を利用すること（loginの場合logged_inとかにしない。目的変数としてみなされなくなってしまうため）
	<br>
	<span class="b">カスタムイベント</span>：上記に該当しないイベントをユーザー側で取得する
	<br>
	GTMの設定：タグに追加、あるいは修正を加え、トラッキングコピーレベルで新たなイベントを収集する<br>
GA4も管理画面の設定：GTM経由で既に収集しているイベント+パラメーターを利用し、それらが特定の条件に合致した場合に新しいイベントを作成する
</p>
</div>
<figure>
<img src="../img/ga4-chara.webp" width="600" height="300">
<figcaption>
	UAとGA4のアプローチ方法の違い
</figcaption>
</figure>
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
