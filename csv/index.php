<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>GAS API</title>
	<style>
		input{
			width: 30px;
			border: none;
		}
		.area{
			width: 100px;
		}
        .watingTimeWrap{
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
            max-width: 1200px;
            padding: 0 15px;
            width: 100%;
            justify-content: center;
            margin: 30px auto;
        }
        .waitingTime{
            text-align: center;
            padding:15px;
            background-color: #d3d3d3;
            max-width: 350px;
            width: 100%;
        }

	</style>
</head>

<body>
	<a href="https://masa-enjoy.com/gas-api-spreadsheet">
	参考記事
	</a>
    <div class="watingTimeWrap">
        <div id="data-container"></div>
        <div id="data-container_seishun"></div>
        <div id="data-container_dondoko"></div>
        <div id="data-container_mononoke"></div>
        <div id="data-container_majo"></div>
    </div>

		<script>
        // APIのエンドポイント（Google Apps ScriptのURLに置き換えてください）
        const apiUrl = 'https://script.google.com/macros/s/AKfycby6DLeGhhjJXk21AJIiBbLdQz0rILFZeu7Ns5atVxE7Zj_-MRuR-i0XL6wXJL8OqcNm/exec';

        const apiUrl_seishun="https://script.google.com/macros/s/AKfycbxUUt34MscUlns3JzJAq08wX1lNMI1QTEJwo1xdCCJUyjUrak-6R3WGT3R8KjaCa4jB/exec";

        const apiUrl_dondoko="https://script.google.com/macros/s/AKfycbzHrZov-tBJDGJyGO0xJRu1yyTx78pVB-AsgGCuLzKbS6BpefRmYM33jg_BxbmqnB-E/exec";

        const apiUrl_mononoke="https://script.google.com/macros/s/AKfycbwTpYb6tyM6b9UK40um1MXUtUahdJZvv5W5HepVQe-y2z_eDmAXQLy5NmHJQUsvcIQO/exec";

        const apiUrl_majo="https://script.google.com/macros/s/AKfycbycDx8I3p8CX_UkEaoUyEproJBKzqaN6hpoTztCs8XX21chQDtUE2FpDRNmgd5c7QWc/exec";

        // APIを実行してデータを取得し、HTMLに表示
        fetch(apiUrl)
            .then(response => response.json())
            .then(data => {
                const dataContainer = document.getElementById('data-container');
                data.forEach(item => {
                    const pTag = document.createElement('p');
                    dataContainer.classList.add("waitingTime");
                    pTag.textContent = ` ${item.area}は${item.hour}${item.minutes}現在、${item.waitingTime}分待ちです。`;
					dataContainer.appendChild(pTag);
                });
            })
            fetch(apiUrl_seishun)
            .then(response => response.json())
            .then(data => {
                const dataContainer = document.getElementById('data-container_seishun');
                const titleSeishun = document.createElement('p');

                dataContainer.classList.add("waitingTime");
                dataContainer.appendChild(titleSeishun)

                titleSeishun.textContent=`青春の丘`
                titleSeishun.style.fontWeight = 'bold';
                data.forEach(item => {
                    const pTag = document.createElement('p');
                    pTag.textContent = ` ${item.area}は${item.hour}${item.minutes}現在、${item.waitingTime}分待ちです。`;
					dataContainer.appendChild(pTag);
                });
            })
            fetch(apiUrl_dondoko)
            .then(response => response.json())
            .then(data => {
                const dataContainer = document.getElementById('data-container_dondoko');
                const titleDondoko = document.createElement('p');

                dataContainer.classList.add("waitingTime");
                dataContainer.appendChild(titleDondoko)

                titleDondoko.textContent=`どんどこ森`
                titleDondoko.style.fontWeight = 'bold';
                data.forEach(item => {
                    const pTag = document.createElement('p');
                    pTag.textContent = ` ${item.area}は${item.hour}${item.minutes}現在、${item.waitingTime}分待ちです。`;
					dataContainer.appendChild(pTag);
                });
            })
            fetch(apiUrl_mononoke)
            .then(response => response.json())
            .then(data => {
                const dataContainer = document.getElementById('data-container_mononoke');
                const titleMononoke = document.createElement('p');

                dataContainer.classList.add("waitingTime");
                dataContainer.appendChild(titleMononoke)

                titleMononoke.textContent=`もののけの里`
                titleMononoke.style.fontWeight = 'bold';
                data.forEach(item => {
                    const pTag = document.createElement('p');
                    pTag.textContent = ` ${item.area}は${item.hour}${item.minutes}現在、${item.waitingTime}分待ちです。`;
					dataContainer.appendChild(pTag);
                });
            })
            fetch(apiUrl_majo)
            .then(response => response.json())
            .then(data => {
                const dataContainer = document.getElementById('data-container_majo');
                const titleMajo = document.createElement('p');

                dataContainer.classList.add("waitingTime");
                dataContainer.appendChild(titleMajo)

                titleMajo.textContent=`魔女の谷`
                titleMajo.style.fontWeight = 'bold';

                data.forEach(item => {
                    const pTag = document.createElement('p');
                    pTag.textContent = ` ${item.area}は${item.hour}${item.minutes}現在、${item.waitingTime}分待ちです。`;
					dataContainer.appendChild(pTag);
                });
            })
            .catch(error => {
                console.error('API実行エラー:', error);
            });
    </script>

<!-- ここから描いていく -->
<script src="../js/common.js"></script>
<script src="https://cdn.jsdelivr.net/clipboard.js/1.5.13/clipboard.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lite-youtube-embed/0.2.0/lite-yt-embed.js" integrity="sha512-8enKnFefzurzM5t8sFERkldg/nw+Kh8GNXLTesyT6/enZ+N1o6MMchxV3C/0G+4RrAZrE8v61EdJ+BuY6qqapA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>
