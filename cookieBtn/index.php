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
		#memberPopup {
			font-family: serif;
			font-size: 16px;
			line-height: 1.6;
			color: #fff;
			/* Default => [ display: none; ] */
			display: none;
			position: fixed;
			z-index: 1;
			left: 0;
			top: 0;
			height: 100%;
			width: 100%;
			overflow: auto;
			background-color: rgba(0,0,0,0.5);
			}

			.member-popup-content {
			background-color: #f4f4f4;
			margin: 20% auto;
			width: 50%;
			box-shadow: 0 5px 8px 0 rgba(0,0,0,0.2),0 7px 20px 0 rgba(0,0,0,0.17);
			}

			.member-popup-header h1 {
			margin: 1rem 0;
			}

			.member-popup-header {
			background: #166540;
			padding: 3px 15px;
			display: flex;
			justify-content: space-between;
			}

				.member-popup-body {
				padding: 10px 20px;
				color: black;
				}

				/* Cookie-Policy */
			.privacy-policy-link {
				color: rgb(110, 169, 211);
			}

			/* 同意/拒否ボタンを中央寄せにする */
			.cookie-consent {
				/* inline-block を中央に寄せる */
				text-align:  center;
			}

			.cookie-agree, .cookie-reject {
				display: inline-block;
				color: #fff;
				background: #166540;
				padding: 20px;
				margin: 20px;
				width: 10%;
			}

			.cookie-agree:hover, .cookie-reject:hover {
				cursor: pointer;
			}

			@keyframes hide {
				from {
				opacity: 1;
				}
				to {
				opacity: 0;
				visibility: hidden;
				}
			}
			/* メディアクエリ */
			@media screen and (max-width: 600px) {
				.cookie-consent {
				flex-direction: column;
				}
				.cookie-text {
				margin-bottom: 1em;
				}
			}
			</style>
			
		</head>
	<body>
	<h1>【Cookie実装・GDPR対応】JavaScriptでCookieの利用同意と拒否のPopupを作る</h1>

		<div id="memberPopup">
			<div class="member-popup-content">

				<div class="member-popup-header">
					<h1>Members Policy </h1>
				</div>

				<div class="member-popup-body">

					<div class="cookie-consent">
						<div class="cookie-text">
						当サイトではCookieを使用します。Cookieの使用に関する詳細は 
						「<a href="https://masanyon.com/privacy-policy/" target="_blank" style="text-decoration: none;" >
							<span class="privacy-policy-link">Privacy Policy</span>
							</a>」
							をご覧ください。
							<br>
							クッキーを受け入れるか拒否するか選択してください。
						</div>
						<div class="cookie-agree">YES</div>
						<div class="cookie-reject">NO</div>
					</div>

				</div>
			</div>
		</div>

		<script type='text/javascript'>
			// Popup全体のHTML-Element
			const popup = document.getElementById('memberPopup');
			// Cookie-同意/拒否のPartsを取得する
			let cookieAgree = document.querySelector('.cookie-agree');
			let cookieReject = document.querySelector('.cookie-reject');
			// [ 処理-Flow ]

			// 1. Reject-FlagをCheckする

			// 2. Accept-FlagをCheckする

			// 3. 条件をClearしている状態ならば、Popupを画面中央に表示する
			// 1. Member-Reject-FlagをCheckする
			let rejectFlag = sessionStorage.getItem('Reject-Flag');
			console.log({rejectFlag});
			// CookieのDataを取得する
			const cookieData = document.cookie;
			console.log({cookieData});
			// 2. Member-Accept-FlagをCheckする
			let acceptFlag = false;
			const cookieDataList = cookieData.split('; '); // 綺麗に分割するために「'; '」 => 半角スペースも必要なので注意！
			console.log({cookieDataList});
			for (const cookie of cookieDataList) {
				const cookieSplit = cookie.split('=');
				console.log({cookieSplit});
				
				if (cookieSplit[0] == 'robotama-cookie') acceptFlag = true;
			}
			console.log({acceptFlag});
			// 3. 条件をClearしている状態ならば、Popupを画面中央に表示する
			if (rejectFlag || acceptFlag) {
				console.log('Reject or Accept済み-User');
			} else {
			console.log('初回-User or Settion切れ-User');
				PopupDisplay();
			}
			// PopupをDisplayするFucntion
			function PopupDisplay() {
				popup.style.display = 'block';
			}
			// Popupを閉じるFunction
			function PopupClose() {
				popup.style.display = 'none';
			}       
			// 有効期限（日）をSetする
			const expire = 31;
			// 1. Cookie-Set-Function => 引数は有効期限（日）
			function SetCookie (expire) {
			const current = new Date();
			expire = current.getTime() + expire * 24 * 3600 * 1000;
			
			// CookieにDataをSetする
			document.cookie = `robotama-cookie=robotama-read; expire=${expire}`;
			}
			// Cookie を拒否したときに、Cookieをすべて削除するFunction
			function DeleteAllCookie () {
			const maxAgeZero = 'max-age=0';
			for (const cookie of cookieDataList) {
				const cookieSplit = cookie.split('=');
				document.cookie = `${cookieSplit[0]}=; ${maxAgeZero}`;
			}
			}
			// YES-ボタンにCookie-Set-Eventを追加する
			cookieAgree.addEventListener('click', () => {
			SetCookie(expire);
			PopupClose();
			});
			// NO-ボタンにCookie-Delete-Eventを追加する
			cookieReject.addEventListener('click', ()=>{
			sessionStorage.setItem('Reject-Flag', true);
			DeleteAllCookie();
			PopupClose();
			});

    </script>

<!-- ここから描いていく -->
<script src="../js/common.js"></script>
<script src="https://cdn.jsdelivr.net/clipboard.js/1.5.13/clipboard.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lite-youtube-embed/0.2.0/lite-yt-embed.js" integrity="sha512-8enKnFefzurzM5t8sFERkldg/nw+Kh8GNXLTesyT6/enZ+N1o6MMchxV3C/0G+4RrAZrE8v61EdJ+BuY6qqapA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</body>
</html>
