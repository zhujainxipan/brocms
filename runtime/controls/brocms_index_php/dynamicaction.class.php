<?php
	class DynamicAction extends Common {	
		function index(){
			$dynamic=D('dynamic');
			$stat=array("1"=>"文章", "2"=>"评论", "3"=>"收藏", "4"=>"推荐");
			$where=array('uid'=>$_GET['uid']);
			$args='uid/'.$_GET['uid'];
			if(isset($_GET["otype"])){
				$where['otype']=$_GET['otype'];
				$args.='/otype/'.$_GET['otype'];
				$this->assign("tit", $stat[$_GET["otype"]]);
			}
	
			$page=new Page($dynamic->total($where), 10, $args);
			
			$this->assign("dynamic", $dynamic->where($where)->limit($page->limit)->order('id desc')->r_select(array('comment', 'content', 'id', 'pid')));
			$this->assign("fpage", $page->fpage(0,4,5,6));
			$this->display();
		}

		function del(){
			if(D("dynamic")->where(array('uid'=>$_SESSION['id'], 'id'=>$_GET['did']))->delete()){
				if($_GET["otype"]==1){
					$article=D("article", "admin");
					$article->where(array('uid'=>$_SESSION['id'], 'id'=>$_GET['cid']))->delete();
					$article->delres($_GET["cid"]);
				}
				
				if($_GET['otype']==2){
					D("comment")->where(array('uid'=>$_SESSION['id'], 'id'=>$_GET['cid']))->delete();
				}

				$this->redirect('index', "uid/{$_SESSION['id']}/otype/{$_GET['otype']}/flush/true");
			}
		}
				
		//获取收藏数或推荐
		function gts(){
			$GLOBALS["debug"]=0;
			if($_POST['otype']=="3") {
				//收藏数
				echo D('dynamic')->total(array('otype'=>3, 'cid'=>$_POST['cid']));
			}else if($_POST['otype']=='4'){
				$recom=D("article")->field('recommend')->find($_POST['cid']);
				echo $recom["recommend"];
			}
			
		}

	
		//设置收藏数
		function collection(){
			$GLOBALS["debug"]=0;

			$_POST["ptime"]=time();
			$_POST["uid"]=$_SESSION['id'];
			
			if(D('dynamic')->insert()){
				echo 'ok';
			}
		}



		//设置推荐
		function recommend(){
			$GLOBALS["debug"]=0;

			$_POST["ptime"]=time();
			$_POST["uid"]=$_SESSION['id'];

			if(D('dynamic')->insert()){
				
				if(D("article")->where($_POST['cid'])->update('recommend=recommend+1'))
					echo 'ok';
			}
		}

		function addc(){
			$GLOBALS["debug"]=0;
			$comment=D("comment");
		
			
			$_POST['ptime']=time();

			if($_POST["cid"]!=0){
				$data=$comment->find($_POST["cid"]);
				$user=D("user")->field("username")->find($data["uid"]);
				$quote='<table style="border-right: #cccccc 1px dotted; table-layout: fixed; border-top: #cccccc 1px dotted; border-left: #cccccc 1px dotted; border-bottom: #cccccc 1px dotted" cellspacing="0" cellpadding="6" width="95%" align="center" border="0">
    			<tbody>
       				 <tr>
				 <td style="word-wrap: break-word;font-size:12px" bgcolor="#fdfddf">
				<b>'.$user["username"].'</b> 于 '.date("m-d i:s", $data["ptime"]).' 时发布的原贴：
					<br />
					'.$data["content"].'
           				 &nbsp;</td>
        			</tr>
  		 	 </tbody>
		</table><br>';

				$_POST["content"]=$quote.$_POST["content"];
			}
			$_POST["content"]=str_replace(array("\"", "'"), array("&quot;", "&#039;"), stripslashes(un_escape($_POST["content"])));
			$lastid=$comment->insert($_POST, array('content'));
			if($lastid){
				echo 'ok';
				//添加动态
				$dynamic=array("uid"=>$_SESSION['id'], 'otype'=>'2', 'ptime'=>time(), 'pid'=>$lastid, 'cid'=>$_POST['aid'], 'title'=>$_POST['title']);
				D("dynamic")->insert($dynamic, array('content'));
			}
		}

		function modc(){
			$GLOBALS["debug"]=0;
			$comment=D("comment");
			
			$_POST["content"]=str_replace(array("\"", "'"), array("&quot;", "&#039;"), stripslashes(un_escape($_POST["content"])));

			if($_SESSION["articleadmin"]=="1"){
				$where="";
			}else{ 
				$where=array("id"=>$_POST['id'], "uid"=>$_SESSION['id']);
			
			}

			if($comment->where($where)->update($_POST, array('content'))){
				echo 'ok';
			}
		}

		function delc(){
			$GLOBALS["debug"]=0;
			$comment=D("comment");
		
			if($_SESSION["articleadmin"]=="1"){
				$where=$_POST['id'];
			}else{ 
				$where=array("id"=>$_POST['id'], "uid"=>$_SESSION['id']);
			
			}

			if($comment->where($where)->delete()){
				D("dynamic")->where(array("otype"=>2,"pid"=>$_POST['id']))->delete();
				echo 'ok';
			}
		}

		function add() {
			$column=D("column", "admin");
			$this->assign("select", $column->formselect());
			$this->assign("ck", Form::editor("content", "full",300, "#FAFAFA"));
			$this->display();
		}
		
		function insert(){
			if($_POST["pid"]=="0")
				$_POST["pid"]="";
			$article=D("article", "admin");
		
			$_POST["posttime"]=time();
			$_POST["uid"]=$_SESSION["id"];
			$content=$_POST["content"];
			unset($_POST["content"]);
			
			//如果不需要审核的栏目中，直接audit为1
			$column=D("column")->field("audit")->find($_POST["pid"]);
			
			if($column["audit"]==0 || $_SESSION["articleadmin"]=="1"){
				$_POST["audit"]=1;
			}

			$lastid=$article->insert($_POST, 1, 1);
			if($lastid && $article->aimage($content, $lastid)){
				//添加到动态
				$dynamic=array("uid"=>$_SESSION['id'], 'otype'=>'1', 'ptime'=>$_POST["posttime"], 'cid'=>$lastid, 'title'=>$_POST['title']);
				D("dynamic")->insert($dynamic);
				$this->success("添加文章成功!", 1, "dynamic/index/uid/{$_SESSION['id']}/otype/1/flush/true");
			}else{
				$this->error($article->getMsg(),'3', "add");
			}		
		}

		function mod() {
			$article=D("article", "admin");
			$post=$article->find($_GET["id"]);
			$column=D("column", "admin");
			$this->assign("select", $column->formselect("pid", $post["pid"]));
			$this->assign("ck", Form::editor("content", "full",300, "#FAFAFA"));
			$this->assign("post",$post);
			$this->display();
		}
		function update(){
			$article=D("article","admin");
			if($_POST["pid"]=="0")
				$_POST["pid"]="";
			$content=$_POST["content"];
			unset($_POST["content"]);

			$affected=$article->where(array("id"=>$_POST["id"], "uid"=>$_SESSION["id"]))->update($_POST, 1, 1);
			$affected1=$article->aimage($content, $_POST["id"]);
			$affected_rows=$affected+$affected1;
		
			if($affected_rows){
				$this->success("文章修改成功!", 1, "article/index/aid/{$_POST['id']}");
			}else{

				$mess=$article->getMsg();
				if($mess=="")
					$mess="没有数据被改变！";

				$this->error($mess, 3, "dynamic/mod/id/{$_POST['id']}");
			}	
		}

		function upimage(){
			global $pictureSize;
			$up=new FileUpload();
			
			$up->set("allowtype", array("gif", "png", "jpg", "jpeg"))
			   ->set("thumb", array("width"=>$pictureSize["maxWidth"], "height"=>$pictureSize["maxHeight"]));
		

			if($up->upload("upload")){
				$filename=$up->getFileName();
				$_SESSION["article"][]=$filename;
				$this->mkhtml($_GET['CKEditorFuncNum'],B_PUBLIC."/uploads/".$filename);
			}else{
				$mess=strip_tags($up->getErrorMsg());	
				$this->mkhtml($_GET['CKEditorFuncNum'],'', $mess);
			}
		}

		function upflash(){
			$up=new FileUpload();
			$up->set("allowtype", array("flv","swf"));
			if($up->upload("upload")){
				$filename=$up->getFileName();
				$_SESSION["article"][]=$filename;
				$this->mkhtml($_GET['CKEditorFuncNum'],B_PUBLIC."/uploads/".$filename);
			}else{
				$mess=strip_tags($up->getErrorMsg());	
				$this->mkhtml($_GET['CKEditorFuncNum'],'', $mess);
			}
		}


		protected function mkhtml($fn,$fileurl,$message) {
			$str='<script type="text/javascript">window.parent.CKEDITOR.tools.callFunction('.$fn.', \''.$fileurl.'\', \''.$message.'\');</script>';
			exit($str);
		}
	}
