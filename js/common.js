// 要素の取得
const tabItem = document.querySelectorAll(".tab-item");
const tabContent = document.querySelectorAll(".tab-content");

// tabItemに対してクリックイベントを追加
// クリックした時にtabToggle関数を発火
for (let i = 0; i < tabItem.length; i++) {
	tabItem[i].addEventListener("click", tabToggle);
	}
	function tabToggle() {
	// tabItemとtabContentの.activeを削除する
	for (let i = 0; i < tabItem.length; i++) {
		tabItem[i].classList.remove("active");
	}
	for (let i = 0; i < tabContent.length; i++) {
		tabContent[i].classList.remove("active");
	}

	// クリックしたtabItemに.activeを追加
	this.classList.add("active");

	// tabItemを配列にする
	// [<li class="tab-item active">About</li>, <li class="tab-item">Works</li>, <li class="tab-item">Contact</li>]
	const aryTabs = Array.prototype.slice.call(tabItem);

	// 配列に格納したキーワードと最初一致したインデックスを格納
	// <li class="tab-item active">About</li>の場合は「0」が返ってくる
	const index = aryTabs.indexOf(this);

	// インデックスに対応したtabContentに.activeを追加
	tabContent[index].classList.add("active");
}
	
// 一つの箇所のみ開く閉じる
$(function(){
	$('.toggle_title').on('click',function() {
		$(this).toggleClass('selected');
		$(this).next().slideToggle();
		$('.toggle_title').not($(this)).next().slideUp();
		$('.toggle_title').not($(this)).removeClass('selected');
	});
});


//クリックしたときの挙動

$(function() {
		$("pre.copy code").append("<button>copy</button>");
	});
	
	$(function(){
		const copybtn = $("pre code button");
		copybtn.click(function(){
		const selection = window.getSelection();
		const code = this.parentNode;
		selection.selectAllChildren(code);
		selection.extend(code, code.childNodes.length-1);
		navigator.clipboard.writeText(selection);
		});
	});
	
	$(function(){
	$('pre code button').on('click', function () {
		if ($(this).text() === "copy") {
		$(this).text("copied");
		} else {
		$(this).text("copy");
		}
		});
	});

	// ハンバーガーメニュー
	//js

$(function() {
$('.ham').click(function() {
	$(this).toggleClass('active');

	if ($(this).hasClass('active')) {
		$('.globalMenu').addClass('active');
	} else {
		$('.globalMenu').removeClass('active');
	} 
	
});
});
//メニュー内を閉じておく
$(function() {
$('.globalMenu a[href]').click(function() {
	$('.globalMenu').removeClass('active');
	$('.ham').removeClass('active');

});
});


// loading
// new Vivus('loadingIcon', { duration: 5 , start: 'autostart',type: 'scenario-sync', pathTimingFunction: Vivus.EASE,}, function(obj){
// 	$("#loadingIcon").attr("class", "done");
// });
		
// 	$(window).on('load',function(){
// 		$("#loading").delay(10000).fadeOut('slow');//ローディング画面を3秒（3000ms）待機してからフェイドアウト
// 		$("#loading__logo").delay(10000).fadeOut('slow');//ロゴを3秒（3000ms）待機してからフェイドアウト
// 	});
// 	$(window).on('load',function(){
// 		const bd = document.querySelector("body");
// 		bd.classList.add('appear');
// 	});

// // backToTop
// 	window.addEventListener("scroll", function () {
// 		const elm = document.querySelector(".backToTop");
// 		const scroll = window.pageYOffset;
// 		if (scroll > 200) {
// 			elm.classList.add("active");
// 		// console.log(scroll);
// 		} else {
// 			elm.classList.remove("active");
// 		// console.log(scroll);
// 		}
// 	});

	/* ==================================================
	skip btn
================================================== */
// skipボタンを押したとき class を付与
const skip = document.querySelector(".loading__skip"),
loading = document.querySelector("#loading");
skip.addEventListener("click", () => {
loading.style.display = "none";
loading.classList.add("is-skip");
});




