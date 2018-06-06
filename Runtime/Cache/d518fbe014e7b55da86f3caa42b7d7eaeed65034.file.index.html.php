<?php /* Smarty version Smarty-3.1.6, created on 2018-04-28 21:17:14
         compiled from "G:/MyProject/java/zydongci/Home/View\Index\index.html" */ ?>
<?php /*%%SmartyHeaderCode:14495ac24ec9deee00-41356329%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd518fbe014e7b55da86f3caa42b7d7eaeed65034' => 
    array (
      0 => 'G:/MyProject/java/zydongci/Home/View\\Index\\index.html',
      1 => 1524921430,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14495ac24ec9deee00-41356329',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5ac24ec9ed735',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac24ec9ed735')) {function content_5ac24ec9ed735($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<title>藏语动词搜索</title>
	<meta name="keywords" content="Panc.cc-藏语网盘搜索,网盘搜索,藏语搜索,网盘解析,百度网盘搜索,藏语社区,专业网盘搜索,藏语分享,藏语,资源分享,资源问答,藏语网盘,panc.cc" />
	<meta name="description" content="藏语专业网盘搜索引擎，百度云网盘搜索工具，百度云网盘解析工具，结合藏语社区，聚集了大量热爱分享资源的朋友，资源求助，资源问答，我们都有共同的分享精神。" />
	<link rel="stylesheet" href="<?php echo @CSS_URL;?>
normalize.css" />
	<link rel="stylesheet" href="<?php echo @CSS_URL;?>
index.css" />
	<style>
		.hot_word p a {
			margin: 0px 10px;
			font-family: Microsoft Himalaya;
			font-size: 25px;
		}
	</style>
</head>

<body style="background: url('<?php echo @IMG_URL;?>
59926e94e27df.jpg') no-repeat fixed bottom center;background-size: cover;">
	<!--  nav导航部分start  -->
	<div class="nav">
		<div class="w">

		</div>
	</div>
	<!--  nav导航部分end  -->
	<!-- container部分start -->
	<div class="container">
		<h1 class="logo-title"></h1>
		<div class="input-group">
			<form action="<?php echo @__SELF__;?>
" method="post">
				<input type="text" name="ci" placeholder="请输入你要查询的藏语动词" />

				<input type="submit" class="btn" value="搜 索" style="text-align: left;">
			</form>
		</div>
	</div>


</body>

</html><?php }} ?>