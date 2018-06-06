<?php /* Smarty version Smarty-3.1.6, created on 2018-05-15 20:43:11
         compiled from "G:/MyProject/java/zydongci/Home/View\Ci\add.html" */ ?>
<?php /*%%SmartyHeaderCode:184445afa47e42eade3-48757999%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c53aa566b94c49cb1d0fb5fe4ef945bac4e7ebc7' => 
    array (
      0 => 'G:/MyProject/java/zydongci/Home/View\\Ci\\add.html',
      1 => 1526351911,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '184445afa47e42eade3-48757999',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5afa47e43fc14',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5afa47e43fc14')) {function content_5afa47e43fc14($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>

<head>
    <title>添加词库</title>
    <meta http-equiv="content-type" content="text/html;charset=utf-8">
    <link href="<?php echo @ADMIN_CSS_URL;?>
mine.css" type="text/css" rel="stylesheet">
</head>

<body>

    <div class="div_head">
        <span>
            <span style="float:left">当前位置是：词库管理-》添加词库信息</span>
            <span style="float:right;margin-right: 8px;font-weight: bold">
                <a style="text-decoration: none" href="<?php echo @__CONTROLLER__;?>
/showList.html">【返回】</a>
            </span>
        </span>
    </div>
    <div></div>

    <div style="font-size: 13px;margin: 10px 5px">
        <form action="<?php echo @__SELF__;?>
" method="post" enctype="multipart/form-data">
            <table border="1" width="100%" class="table_a">
                <tr>
                    <td>ci</td>
                    <td>
                        <input type="text" name="ci" />
                    </td>
                </tr>


                <tr>
                    <td>bjdaima</td>
                    <td>
                        <input type="radio" name="bjdaima" value="vt" /> vt
                        <input type="radio" name="bjdaima" value="vi" /> vi
                    </td>
                </tr>
                <tr>
                    <td>jwbujw</td>
                    <td>
                        <input type="text" name="jwbujw" />
                    </td>
                </tr>
                <tr>
                    <td>dcgoucheng</td>
                    <td>
                        <input type="text" name="dcgoucheng" />
                    </td>
                </tr>
                <tr>
                    <td>zzbzz</td>
                    <td>
                        <input type="text" name="zzbzz" />
                    </td>
                </tr>
                <tr>
                    <td>dcxingtai</td>
                    <td>
                        <input type="text" name="dcxingtai" />
                    </td>
                </tr>
                <tr>
                    <td>zbjdaima</td>
                    <td>
                        <input type="text" name="zbjdaima" />
                    </td>
                </tr>
                <tr>
                    <td>zdci</td>
                    <td>
                        <input type="text" name="zdci" />
                    </td>
                </tr>
                <tr>
                    <td>cbjdaima</td>
                    <td>
                        <input type="text" name="cbjdaima" />
                    </td>
                </tr>
                <tr>
                    <td>czdc</td>
                    <td>
                        <input type="text" name="czdc" />
                    </td>
                </tr>
                <tr>
                    <td>ciyi1</td>
                    <td>
                        <input type="text" name="ciyi1" />
                    </td>
                </tr>
                <tr>
                    <td>liju1</td>
                    <td>
                        <input type="text" name="liju1" />
                    </td>
                </tr>
                <tr>
                    <td>ciyi2</td>
                    <td>
                        <input type="text" name="ciyi2" />
                    </td>
                </tr>


                <tr>
                    <td>liju2</td>
                    <td>
                        <input type="text" name="liju2" />
                    </td>
                </tr>
                <tr>
                    <td>ciyi3</td>
                    <td>
                        <input type="text" name="ciyi3" />
                    </td>
                </tr>
                <tr>
                    <td>liju3</td>
                    <td>
                        <input type="text" name="liju3" />
                    </td>
                </tr>
                <tr>
                    <td>gqs</td>
                    <td>
                        <input type="text" name="gqs" />
                    </td>
                </tr>
                <tr>
                    <td>xls</td>
                    <td>
                        <input type="text" name="xls" />
                    </td>
                </tr>
                <tr>
                    <td>jls</td>
                    <td>
                        <input type="text" name="jls" />
                    </td>
                </tr>


                <tr>
                    <td colspan="2" align="center">
                        <input type="submit" value="添加">
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>

</html><?php }} ?>