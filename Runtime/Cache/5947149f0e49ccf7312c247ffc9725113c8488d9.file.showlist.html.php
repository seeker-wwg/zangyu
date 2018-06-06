<?php /* Smarty version Smarty-3.1.6, created on 2018-05-15 10:43:34
         compiled from "G:/MyProject/java/zydongci/Home/View\Ci\showlist.html" */ ?>
<?php /*%%SmartyHeaderCode:58405af9b339d79d29-80989880%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5947149f0e49ccf7312c247ffc9725113c8488d9' => 
    array (
      0 => 'G:/MyProject/java/zydongci/Home/View\\Ci\\showlist.html',
      1 => 1526352033,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '58405af9b339d79d29-80989880',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5af9b339edb12',
  'variables' => 
  array (
    'info' => 0,
    'good' => 0,
    'pagelist' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5af9b339edb12')) {function content_5af9b339edb12($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />

    <title>词库列表 </title>

    <link href="<?php echo @ADMIN_CSS_URL;?>
mine.css" type="text/css" rel="stylesheet" />
    <style>
        #listajax .table_a tbody td {
            text-align: center;
        }
    </style>
</head>

<body>
    <style>
        .tr_color {
            background-color: #9F88FF
        }
    </style>
    <div class="div_head">
        <span>
            <span style="float: left;">当前位置是：词库管理-》词库列表</span>
            <span style="float: right; margin-right: 8px; font-weight: bold;">
                <a style="text-decoration: none;" href="<?php echo @__CONTROLLER__;?>
/add">【添加词库】</a>
            </span>
        </span>
    </div>
    <div></div>





    <div style="font-size: 13px; margin: 10px 5px;" id="listajax 将其提取到另一个页面访问">
        <table class="table_a" border="1" width="100%">
            <thead>
                <tr style="background-color:#0094ff;color:#fff; font-size:18px">
                    <th>序号</th>
                    <th>词</th>
                    <th>是否及物</th>
                    <th>jwbujw </th>
                    <th>dcgoucheng</th>
                    <th>zzbzz</th>
                    <th>dcxingtai</th>
                    <th>操作</th>
                </tr>
            </thead>
            <tbody>
                <?php  $_smarty_tpl->tpl_vars['good'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['good']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['good']->key => $_smarty_tpl->tpl_vars['good']->value){
$_smarty_tpl->tpl_vars['good']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['good']->key;
?>
                <tr id="product1">
                    <td><?php echo $_smarty_tpl->tpl_vars['good']->value['id'];?>
</td>
                    <td>
                        <a href="#"><?php echo $_smarty_tpl->tpl_vars['good']->value['ci'];?>
</a>
                    </td>
                    <td><?php echo $_smarty_tpl->tpl_vars['good']->value['bjdaima'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['good']->value['jwbujw'];?>
</td>
                    <td>
                        <?php echo $_smarty_tpl->tpl_vars['good']->value['dcgoucheng'];?>

                    </td>
                    <td>
                        <?php echo $_smarty_tpl->tpl_vars['good']->value['zzbzz'];?>

                    </td>
                    <td><?php echo $_smarty_tpl->tpl_vars['good']->value['dcxingtai'];?>
</td>
                    <td>
                        <a href="<?php echo @__CONTROLLER__;?>
/del/id/<?php echo $_smarty_tpl->tpl_vars['good']->value['id'];?>
">删除</a>
                    </td>
                </tr>
                <?php } ?>
                <tr>
                    <td colspan="20" style="text-align: center;">
                        <?php echo $_smarty_tpl->tpl_vars['pagelist']->value;?>

                    </td>
                </tr>
            </tbody>
        </table>
    </div>


</body>

</html><?php }} ?>