	$(function(){
		// 1回目のアクセス
		if($.cookie("access") == undefined) {
		//最初にアクセスしたときにはここに書いたアニメーションのJSが動く
		$.cookie("access","once");
			$("#loading").css("display", "block")
			$("#loading").addClass("is-active")
		// 一回目の時だけloadingにis-activeを付与（画面ちらつき防止）
		} else {
	$("#loading").css("display","none")
		// 2回目以降は動かないようにする
		}
	});
