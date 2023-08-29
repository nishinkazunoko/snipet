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

// hamburger
const ham = document.querySelector(".ham");
const ham2 = document.querySelector(".ham2");
const menu = document.querySelector(".globalMenu");
const circle1 = document.querySelector(".circle-bg");
const circle2 = document.querySelector(".circle-bg2");

let value = menu.getAttribute('a href');

ham.addEventListener('click',function(){
this.classList.toggle('active');
if(this.classList.contains('active')){
	menu.classList.add("active");
	circle1.classList.add("active");
}else{
	menu.classList.remove('active');
	circle1.classList.remove("active");
}
});
ham2.addEventListener('click',function(){
	this.classList.toggle('active');
	if(this.classList.contains('active')){
		menu.classList.add("active");
		circle2.classList.add("active");
	}else{
		menu.classList.remove('active');
		circle2.classList.remove("active");
	}
	});

$('a[href^="#"]').on('click', function() {
	menu.classList.remove("active");
	ham.classList.remove('active');
	ham2.classList.remove("active");
	circle1.classList.remove("active");
	circle2.classList.remove("active");

});

