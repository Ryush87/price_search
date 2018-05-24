$(document).ready(function(){
	loadNav();
	loadBtn();
});

//common
var wideMode=false;

//nav
function loadNav(){
	$('#gnbBox > .depth1').hover(function(){
		$(this).find('.depth1_1').addClass('actOn');
		$(this).find('.depth2Box').addClass('actOn');
	},function(){
		$(this).find('.depth1_1').removeClass('actOn');
		$(this).find('.depth2Box').removeClass('actOn');
	});
	$('.depth2').hover(function(){
		$(this).find('a').addClass('actOn');
	},function(){
		$(this).find('a').removeClass('actOn');
	});
}

//main
function loadBtn(){
	$('#wideBtn').click(function(){
		if(!wideMode){
			$('.wMode').css('width','88%');
			wideMode=true;
		}else{
			$('.wMode').css('width','60%');
			wideMode=false;
		}
	});

	$('.textBtn').hover(function(){
		$(this).css('color','#339900');
	},function(){
		$(this).css('color','#666');
	});

	$('.btnOn').hover(function(){
		$(this).addClass('actOn');
	},function(){
		$(this).removeClass('actOn');
	});
	
	$('.scBoxPlus').click(function(){
		$('.plusItem').toggle(0);
		changeBtnText('.scBoxPlus','+ 더보기','- 접기');
	});

	$('#topBtn').click(function(){
		$('body, html').animate({scrollTop:0}, 800);
	});

	$('#useAutoSearchCheck').change(function(){
		if(this.checked){
			$('#useAutoSearchBox .setOption2').css('display','block');
		}else{
			$('#useAutoSearchBox .setOption2').css('display','none');
		}
	});

	$('#tMessageCheck').change(function(){
		if(this.checked){
			$('#tMessageBox .setOption2').css('display','block');
		}else{
			$('#tMessageBox .setOption2').css('display','none');
		}
	});
}

function changeBtnText(obj,text1,text2){
	var tempT=$(obj).html();
	if(tempT==text1){
		$(obj).html(text2)
	}
	if(tempT==text2){
		$(obj).html(text1)
	}
}

function popupOpen(windowName,urlData){
	var openSet="width=500, heigth=300, location=no, menubar=no, toolbar=no, resizable=yes, status=yes, scrollbars=yes";
	var tempURL=windowName+".php?"+urlData;
	switch (windowName){
		case 'companyEdit':
			window.open(tempURL,windowName,openSet);
			break;
		case 'companyWrite':
			location.href="company.php";
			window.open(tempURL,windowName,openSet);
			break;
		case 'managerEdit':
			window.open(tempURL,windowName,openSet);
			break;
		case 'managerWrite':
			location.href="manager.php";
			window.open(tempURL,windowName,openSet);
			break;
		case 'passChange':
			tempURL="managerEdit.php?"+urlData;
			window.open(tempURL,windowName,openSet);
			break;
		default :
			alert("이동할 페이지가 없습니다.");
			break;
	}
}

function closePopup(){
	window.close();
}
