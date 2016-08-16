<div id="glist">
<div id="main">	
  	<div class="head-dark-box" style="float:left;width:100%">
		<div class="tit" style="width:80%;float:left" >选择图片（提示：单击图片即可插入，单击名称查看图片信息。）</div>
		<div class="clo" onclick="closewin()"><img src="<{$res}>/images/tipe.gif" ></div>
	</div>	

	<div class="msg-box"  style="float:left;width:100%;">
		
			<div class="light-row" style="float:left;width:564px !important;width:567px;padding:5px 0px 5px 0px">
				&nbsp;&nbsp;请从相册中选择需要编辑的图片&nbsp;&nbsp; <{ $select }> &nbsp;&nbsp; 
			</div>
				
		
			     <div style="width:100%;">
			    	<{ section name=tu loop=$images }>
				<div  class="piclist">				
					<a href="javascript:setImage(<{$images[tu].id}>,'<{$public}>/uploads/<{$images[tu].name}>')"><img src="<{$public}>/uploads/<{ $images[tu].name }>" width="100" height="100"></a>
					
			      	</div>
				 
			   	 <{ sectionelse }>
					<div style="float:left;text-align:center;color:red;width:100%;marign:20px;background:#ccc">
						该类中没有需要的图片
					</div>
			   	 <{ /section }>
			     </div>
			<div class="dark-row" style="float:left;width:564px !important;width:567px;margin-top:10px;padding-bottom:0 !important;padding-bottom:10px;">
				&nbsp;&nbsp;<span style="float:left"><{$fpage}></span>
			</div>
	
	</div>
</div>
</div>
