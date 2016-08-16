var rclick=null;
function notnull(val){
	return val.match(/^\S+$/) ? true : false;
}

//找下一个span
function nextspan(obj){
	while(true){
		if(obj.nextSibling.tagName=="SPAN"){
			return obj.nextSibling;
		}else{
			obj=obj.nextSibling;
		}
	}
}
//设置三种状态
function setStats(obj,mess,check) {
	obj.onfocus=function(){
		nextspan(obj).className="stats1";
		nextspan(obj).innerHTML=mess;
	}

	obj.onblur=function(){	
		info=check(this.value, mess);
		if(info[0]){
			nextspan(obj).className="stats2";
			nextspan(obj).innerHTML="输入正确";	
		}else{
			nextspan(obj).className="stats3";
			nextspan(obj).innerHTML=info[1];
			
		} 
	}

	if(rclick=='click')
		obj.onblur();

}
//加载时用
window.onload=validate;
//点注册时使用
function validate(click){
	if(click)
		rclick=click;		

	var fg=true;
	var username=document.getElementsByName("username")[0];
	var userpwd=document.getElementsByName("userpwd")[0];
	var repwd=document.getElementsByName("repwd")[0];
	var email=document.getElementsByName("email")[0];
	var code=document.getElementsByName("code")[0];
		
	setStats(username, '用户名应该为3-20位之间',function(val, mess){
		var info=[false, mess];	
		if(notnull(val) && val.length >=3 && val.length <=20 ){
		
			Ajax('html', false).get(url+"/unique/username/"+val, function(data){
			
				info[0]=eval(data);	
			
				if(!info[0]){
					info[1]="用户 "+val+" 已经存在";
					fg=false;
				}
			})			
		}else{
			fg=false;
		}
		return info;

	});

	setStats(userpwd,'用户密码应该为6-20位之间', function(val, mess){
		var info=[false, mess];
		if(notnull(val) && val.length >=6 && val.length <=20 ){
			info[0]=true;
		}else{
			fg=false;
		}
		return info;
	});

	setStats(repwd,'输入的确认密码要和上面的密码一致,规则也要相同',function(val, mess){
		var info=[false, mess];
		if(val==userpwd.value && val.length >= 6  && val.length <=20 ){
			info[0]=true;	
		}else{
			fg=false;
		}
		return info;
	});

	setStats(email, '请正解输入EMAIL格式', function(val, mess){
		var info=[false, mess];		

		if(val.match(/\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*/)){
			info[0]=true;	
		}else{
			fg=false;
		}
		return info;
	});
	setStats(code, '输入内容必须和图片一致，看不清可以单击图片换一张', function(val, mess){
		var info=[false, mess];
		if(notnull(val)){
			
			Ajax('html', false).get(url+"/vcode/code/"+val, function(data){
					
				info[0]=eval(data);	
				if(!info[0]){
					info[1]="验证码 "+val+" 和图片中内容不一致";
					fg=false;
				}
			});
				
		}else{
			fg=false;
		}
		return info;
	});
	if(click=='click')
		return fg;
}

