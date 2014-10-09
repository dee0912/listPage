<?php /* Smarty version Smarty-3.1.18, created on 2014-10-09 07:57:36
         compiled from "D:\site\page\templates\demo.html" */ ?>
<?php /*%%SmartyHeaderCode:29713543509f54865b7-05802372%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '869fd2e6e49981fbcf12ed359033a9699f39e0dc' => 
    array (
      0 => 'D:\\site\\page\\templates\\demo.html',
      1 => 1412841454,
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
    'mypage' => 0,
    'pageNow' => 0,
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

	<div id="page"><?php echo $_smarty_tpl->tpl_vars['mypage']->value;?>
</div>
	<input id="pageNow" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['pageNow']->value;?>
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

		if($("#go").length>0){
		
			$("#go").click(function(){
			
				self.location="demo.php?p="+$("#skip").val();
			});
		}

	});
</script>
</html>



<?php }} ?>
