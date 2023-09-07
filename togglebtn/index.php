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
        /* ページのスタイル */

		body{
			position: relative;
		}
        .page {
            display: none;
			transition: opacity 0.5s ease; 
        }
        .active {
            display: block; /* アクティブなページを表示 */
			opacity: 1;
        }
		#btn,#backBtn{
			width: 100px;
			height: 40px;
			border: 2px solid #dddddd;
			border-radius: 9999px;
			position: relative;
			left: 30px;
			top: 30px;
		}
		#backBtn{
			border: 2px solid red;

		}
		#btn::after,#backBtn::after{
			content: "";
			position: absolute;
			top: 3px;
			background-color: red;
			width: 30px;
			height: 30px;
			border-radius: 9999px;
			transition:all .5s ease; 
		}
		#btn::after{
			left: 2px;
			background-color: #dddddd;
		}
		#backBtn::after{
			right: 2px;
			background-color: red;
		}
        .message {
            position: fixed;
            background-color: rgba(0, 0, 0, 0.7);
            color: white;
            padding: 10px;
            border-radius: 5px;
        }

        /* 異なる位置にメッセージを配置 */
        #message1 {
            top: 20px;
            left: 20px;
        }

        #message2 {
            top: 20px;
            right: 20px;
        }

        #message3 {
            bottom: 20px;
            left: 20px;
        }

        #message4 {
            bottom: 20px;
            right: 20px;
        }

        #message5 {
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
    </style>
</head>
<body>
	<main>
		<div class="page active" id="page1">
			<h1>ページ 1</h1>
			<p>これはページ 1 です。</p>
			<button id="btn"></button>
			<div id="message-container"></div>


			<script>
					document.addEventListener("DOMContentLoaded", function() {
						const messageContainer = document.getElementById("message-container");
						const messages = [
							"メッセージ1",
							"メッセージ2",
							"メッセージ3",
							"メッセージ4",
							"メッセージ5"
						];

						let currentIndex = 0;

						function displayNextMessage() {
							const messageElement = document.createElement("div");
							messageElement.classList.add("message");
							messageElement.textContent = messages[currentIndex];

							// メッセージを異なる位置に配置
							messageElement.id = `message${currentIndex + 1}`;

							// メッセージを表示
							messageContainer.appendChild(messageElement);

							currentIndex = (currentIndex + 1) % messages.length; // メッセージをループ

							// 次のメッセージを表示するまでの遅延（ここでは3秒に設定）
							setTimeout(displayNextMessage, 3000);
						}

						// ページ読み込み後に最初のメッセージを表示
						displayNextMessage();
					});
			</script>
		</div>

		<!-- ページ2 -->
		<div class="page" id="page2">
			<h1>ページ 2</h1>
			<p>これはページ 2 です。</p>
			<button id="backBtn"></button>
		</div>

        <script>
			document.addEventListener("DOMContentLoaded", function() {
				const messageContainer = document.getElementById("message-container");
				const messages = [
					"メッセージ1",
					"メッセージ2",
					"メッセージ3",
					"メッセージ4",
					"メッセージ5"
				];
				const displayCount = 5; // 表示するメッセージの回数

				let currentIndex = 0;
				let displayedCount = 0;

				function displayNextMessage() {
					if (displayedCount < displayCount) {
						const messageElement = document.createElement("div");
						messageElement.classList.add("message");
						messageElement.textContent = messages[currentIndex];

						// メッセージを異なる位置に配置
						messageElement.id = `message${currentIndex + 1}`;

						// メッセージを表示
						messageContainer.appendChild(messageElement);

						currentIndex++;
						displayedCount++;
						
						// 次のメッセージを表示するまでの遅延（ここでは3秒に設定）
						setTimeout(displayNextMessage, 3000);
					}
				}

				// ページ読み込み後に最初のメッセージを表示
				displayNextMessage();
			});

        </script>
	</main>
<footer>

</footer>
<!-- ここから描いていく -->
<script src="../js/common.js"></script>
<script src="https://cdn.jsdelivr.net/clipboard.js/1.5.13/clipboard.min.js"></script>
</body>
</html>
