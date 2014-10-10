<?php /* Smarty version Smarty-3.1.18, created on 2014-10-10 09:52:32
         compiled from "D:\site\page\templates\demo.html" */ ?>
<?php /*%%SmartyHeaderCode:29713543509f54865b7-05802372%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '869fd2e6e49981fbcf12ed359033a9699f39e0dc' => 
    array (
      0 => 'D:\\site\\page\\templates\\demo.html',
      1 => 1412934724,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29713543509f54865b7-05802372',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_543509f55e0a96_09806031',
  'variables' => 
  array (
    'Template_Dir' => 0,
    'rowsArray' => 0,
    'val' => 0,
    'mypage' => 0,
    'pageNow' => 0,
    'page_act' => 0,
    'perpageNum' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_543509f55e0a96_09806031')) {function content_543509f55e0a96_09806031($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>PHP分页类</title>
<link href="<?php echo $_smarty_tpl->tpl_vars['Template_Dir']->value;?>
/css/common.css"  rel="stylesheet" type="text/css">
<link href="<?php echo $_smarty_tpl->tpl_vars['Template_Dir']->value;?>
/css/style1.css"  rel="stylesheet" type="text/css">
<script src="<?php echo $_smarty_tpl->tpl_vars['Template_Dir']->value;?>
/js/jquery-1.8.3.min.js"></script>
</head>
<body>

	<div id="list">
		
		<ul id="newsul">
			
			<?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rowsArray']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->_loop = true;
?>
				<li><?php echo $_smarty_tpl->tpl_vars['val']->value['title'];?>
</li>
			<?php } ?>

		</ul>

	</div>
	<div id="page"><?php echo $_smarty_tpl->tpl_vars['mypage']->value;?>
</div>
	<input id="pageNow" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['pageNow']->value;?>
">
	<!--分页方式-->
	<input id="page_act" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['page_act']->value;?>
">
	<!--每页几条数据-->
	<input id="perpageNum" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['perpageNum']->value;?>
">
</body>
<script>

	$(function(){
	
		//遍历a
		$(".pagenum").each(function(){
		
			if($(this).text() == $("#pageNow").val()){
		
				$(this).addClass("selected");
			}
		});
		
		//如果存在跳转输入框
		if($("#skip").length>0){
		
			$("#skip").keydown(function(){
			
				if(event.keyCode == 13){ //回车
				
					self.location="demo.php?p="+$(this).val();
				}
			});
		}

		//点击"GO"按钮跳转
		if($("#go").length>0){
		
			$("#go").click(function(){
			
				self.location="demo.php?p="+$("#skip").val();
			});
		}

		//row
		$("#list ul").children("li:last").css("border-bottom",0);

		//ajax时取消页码a标签跳转
		if($("#page_act").val() == 1){ 
//		
//			$(".pagenum").click(function(){
//			
//				
//			});

			//ajax "首页"
	//		if($("#first_page").length>0){
	//		
	//			$("#first_page").cklick(function(){
	//			
	//				$.post("ajaxpage.php",{
	//				
	//					
	//				},function(data,textStatus){
	//				
	//				
	//				});
	//			});
	//		}

			//ajax "下一页"
			if($("#flo_page").length>0){
			
				$("#flo_page").click(function(){

					//初始值=1
					var apagenow = $("#pageNow").val();

					//每点击"下一次",隐藏域值+1
					apagenow = parseInt(apagenow) + parseInt(1);

					$("#pageNow").val(apagenow);

					//隐藏域的页码值小于总页码时
					if($("#pageNow").val()<$("#totalpage_info").val()){
					
						$.post("../ajaxpage.php",{
					
							pageNow : $("#pageNow").val(),
							perpageNum : $("#perpageNum").val()
						},function(data,textStatus){
					
							//$("#newsul").
						});
					}

					return false; //取消点击翻页
				});
			}
		}

	});
</script>
</html>



<?php }} ?>
