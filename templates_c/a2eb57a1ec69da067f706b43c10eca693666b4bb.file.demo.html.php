<?php /* Smarty version Smarty-3.1.18, created on 2014-10-08 22:30:35
         compiled from "D:\practise\php\Page\templates\demo.html" */ ?>
<?php /*%%SmartyHeaderCode:1330754353a5d3a5eb7-80828968%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a2eb57a1ec69da067f706b43c10eca693666b4bb' => 
    array (
      0 => 'D:\\practise\\php\\Page\\templates\\demo.html',
      1 => 1412778631,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1330754353a5d3a5eb7-80828968',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_54353a5d79ba96_05745631',
  'variables' => 
  array (
    'Template_Dir' => 0,
    'mypage' => 0,
    'pageNow' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54353a5d79ba96_05745631')) {function content_54353a5d79ba96_05745631($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>PHP分页类</title>
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
	});
</script>
</html>



<?php }} ?>
