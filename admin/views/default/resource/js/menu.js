//鼠标放入和离开时改变图像显示
function cimg(obj) {
	if(obj.src.match(/h\.gif/)){
		obj.src=obj.src.replace(/h.gif/, "d.gif");
	}else{
		obj.src=obj.src.replace(/d.gif/,"h.gif");
	}
}
//点击选项管理中的菜单，改变菜单列表的显示
function switchmenu(menutitle, menulist, num){	
	var mTitleObj=document.getElementById(menutitle);
	var tlist=document.getElementById("menulist");
	var mlist=tlist.getElementsByTagName("div");
	
	switch(num){
		case 0: mTitleObj.innerText="【系统管理】"; break;
		case 1: mTitleObj.innerText="【文章管理】"; break;
		case 2: mTitleObj.innerText="【用户管理】"; break;
	}

	for(var i=0; i<mlist.length; i++){
		if(i==num){
			mlist[num].style.display="block";
		}else {
			mlist[i].style.display="none";
		}
	}				 	
}

//点击时收缩菜单
function domenu(menuTitleobj, menuListId){
	var listObj=document.getElementById(menuListId);
	if(listObj.style.display=="none"){
		listObj.style.display="";
		menuTitleobj.className=" ul_down";
	}else{ 
		listObj.style.display="none";
		menuTitleobj.className=" ul_up";
	}
}

var ntu=null;
var up=null;
function changeup(obj){
	var nt=document.getElementById("newwater");	
	if(obj.value=="更 换"){
		obj.value="取 消";
		ntu=document.getElementById("wtu");
		up=document.createElement("input");
		up.type="file";
		up.name="water";
		nt.removeChild(ntu);
		nt.appendChild(up);
	}else{
		obj.value="更 换";
		nt.removeChild(up);
		nt.appendChild(ntu);
	}
}

	//获取父标记为li的列表
	function getParent(obj){
		while(true){
			if(obj.parentNode.nodeName=="LI"){
				return obj.parentNode;
			}else{
				obj=obj.parentNode;
			}
		}
	}

//多选框处理，全选、反选、全不选
	var checkall=document.getElementsByName("id[]");

	

	function setBg(){
		for(var i=0; i<checkall.length; i++)
		{
			if(checkall[i].checked)
			{
				getParent(checkall[i]).style.backgroundColor="#F0BB2B";
			}else
			{
				getParent(checkall[i]).style.backgroundColor="";
			}
		}
	}
onload=function(){
	if(checkall.length > 0) {
		for(var i=0; i<checkall.length; i++)
		{
			checkall[i].onclick=function(){
				setBg();		
			}
		}
	}
}


	function select(){
		for(var i=0; i<checkall.length; i++)
		{
			checkall[i].checked=true;
		}
		setBg();
	}

	function fanselect(){
		for(var i=0; i<checkall.length; i++)
		{
			if(checkall[i].checked)
			{
				checkall[i].checked=false;
			}else
			{
				checkall[i].checked=true;
			}
		}
		setBg();
	}

	function noselect(){
		for(var i=0; i<checkall.length; i++)
		{
			checkall[i].checked=false;
		}
		setBg();
	}
	var win=null;
	//弹出图片选择框
	function showWin(url){
		//弹出一个窗体
		
		if(win==null){
			win=document.createElement("div");
		

			win.className="open";

			document.body.appendChild(win);
			var aj=Ajax();

			aj.get(url, function(data){
				win.innerHTML=data;
			});	
		}

		document.body.onscroll=function(){
			if(win!==null) {
				win.style.left=100+document.body.scrollLeft;
				win.style.top=100+document.body.scrollTop;
			}
		}
	}
	
	var cache=new Array();
	//弹出图片选择框
	function setPage(url){
		//弹出一个窗体
		var win=document.getElementById("glist");

		if(typeof(cache[url])=="undefined") {
			Ajax().get(url, function(data){
				win.innerHTML=data;
				cache[url]=data;
			});
		}else{
			win.innerHTML=cache[url];
		}	
	}
	//关闭弹出窗口
	function closewin(){
		if(win!=null){
			document.body.removeChild(win);
			win=null;
		}
	}
	//设置图片
	function setImage(picId, picName){

		var pic=document.getElementById("pic");
		var picbid=document.getElementById("picId");
		

		picbid.value=picId;
		pic.src=picName; 
		closewin();
		
	}
	//设置分类隐藏和显示
	function dis(obj,id){
		var aj=Ajax();
		if(ieff(obj)=="正常"){
			aj.get(url+"/dis/con/0/id/"+id);
			ieff(obj,"隐藏");
			obj.style.backgroundColor="#ccc";
		}else if(ieff(obj)=="隐藏"){
			aj.get(url+"/dis/con/1/id/"+id);
			ieff(obj,"正常");
			obj.style.backgroundColor="";
		}
	}
	//ie和ff  ie 使用innerText 而ff使用textContent	
	function ieff(obj, value){
		if(document.all){
			  if(typeof(value)=="undefined")
                            	return obj.innerText;
			  else
				obj.innerText=value;
                 } else{
   		 	 if(typeof(value)=="undefined")
                            	return obj.textContent;
			  else
				obj.textContent=value;
                 }
	}

	//设置首页的幻灯内容
	function setPlay(id, stat){
		var play=document.getElementById(id);
		if(stat){
			play.style.display="block";
		}else{
			play.style.display="none";
		}
	}

	
