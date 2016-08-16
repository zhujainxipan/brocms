//更改字体大小
var status0='';
var curfontsize=10;
var curlineheight=18;
function fontZoomA(){
	if(curfontsize>8){
		document.getElementById('ccont').style.fontSize=(--curfontsize)+'pt';
		document.getElementById('ccont').style.lineHeight=(--curlineheight)+'pt';
	}
}
function fontZoomB(){
	if(curfontsize<64){
		document.getElementById('ccont').style.fontSize=(++curfontsize)+'pt';
		document.getElementById('ccont').style.lineHeight=(++curlineheight)+'pt';
	}
}










