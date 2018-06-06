<?php /* Smarty version Smarty-3.1.6, created on 2018-05-15 20:43:04
         compiled from "G:/MyProject/java/zydongci/Home/View\Index\showlist.html" */ ?>
<?php /*%%SmartyHeaderCode:157905ac24fbe1290d3-92419092%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f8da978c6d0f8b37eac2ca48deac01ab21f18058' => 
    array (
      0 => 'G:/MyProject/java/zydongci/Home/View\\Index\\showlist.html',
      1 => 1526388178,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '157905ac24fbe1290d3-92419092',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5ac24fbe1ebba',
  'variables' => 
  array (
    'data' => 0,
    'v' => 0,
    'k' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac24fbe1ebba')) {function content_5ac24fbe1ebba($_smarty_tpl) {?><!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>藏语列表</title>
    <meta name="keywords" content="CSS3表格,table" />
    <meta name="description" content="" />
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        body {
            font: 18px/1.4 "Microsoft Yahei", "Microsoft Himalaya", Tahoma, Georgia, Serif;
        }

        #page-wrap {
            margin: 10px;
        }

        p {
            margin: 20px 0;
        }

        /* 
            Generic Styling, for Desktops/Laptops 
            */

        table {
            width: 100%;
            border-collapse: collapse;
            background: #fff
        }

        /* Zebra striping */

        tr:nth-of-type(odd) {
            /* background: #ccc; */
            background-color: #fff;
        }


        tr {
            font-weight: bold;
            background-color: #0499cc;
        }

        th {
            padding: 6px;
            border: 1px solid #fff;
            text-align: center;
        }

        @media only screen and (max-width: 760px),
        (min-device-width: 768px) and (max-device-width: 1024px) {

            /* Force table to not be like tables anymore */
            table,
            tbody,
            th,
            td,
            tr {
                display: block;
            }



            tr {
                border: 1px solid #ccc;
            }

            td {
                /* Behave  like a "row" */
                border: none;
                border-bottom: 1px solid #eee;
                position: relative;
                padding-left: 50%;
            }

            td:before {
                /* Now like a table header */
                position: absolute;
                /* Top/left values mimic padding */
                top: 6px;
                left: 6px;
                width: 45%;
                padding-right: 10px;
                white-space: nowrap;
            }


        }

        /* Smartphones (portrait and landscape) ----------- */

        @media only screen and (min-device-width: 320px) and (max-device-width: 480px) {
            body {
                padding: 0;
                margin: 0;
            }
        }

        /* iPads (portrait and landscape) ----------- */

        @media only screen and (min-device-width: 768px) and (max-device-width: 1024px) {
            body {
                width: 100%;
            }
        }

        #teshu {
            margin: 0 auto;
            text-align: center;
            font-size: 30px;
        }

        .laba {
            height: 20px;
            border-radius: 10%;
            border: 1px solid pink;
            cursor: pointer;

        }

        .show {
            display: none;
        }
    </style>
    <!--<![endif]-->
</head>

<body>
    <script type="text/javascript" src="<?php echo @JS_URL;?>
jquery-1.11.3.min.js"></script>
    <script type="text/javascript">

        function zhanshi(sw) {
            $("." + sw).slideToggle();
            console.log(sw);

        }
    </script>
    <div id="page-wrap" style="margin:50px 0 0">
        <!-- 数据列表展示代码 -->
        <table>

            <tbody>
                <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                <tr>
                    <th>
                        <div id="teshu"><?php echo $_smarty_tpl->tpl_vars['v']->value['ci'];?>
</div>
                    </th>
                    <th>
                        <div onclick="zhanshi('sw<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
')" class="laba" style="background-color: #09ff33;">点击查看</div>
                    </th>
                </tr>

                <tr class="show sw<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
">

                    <td style=" background: #fff; color:#0499cc; font-size: 100px; font-weight:900;" rowspan="21" align="center" valign="middle"><?php echo $_smarty_tpl->tpl_vars['v']->value['ci'];?>
</td>

                </tr>

                <tr class="show sw<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
">

                    <td><?php echo $_smarty_tpl->tpl_vars['v']->value['bjdaima'];?>
</td>
                </tr>

                <tr class="show sw<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
">
                    <td><?php echo $_smarty_tpl->tpl_vars['v']->value['jwbujw'];?>
</td>
                </tr>

                <tr class="show sw<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
">
                    <td><?php echo $_smarty_tpl->tpl_vars['v']->value['dcgoucheng'];?>
</td>
                </tr>



                <tr class="show sw<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
">
                    <td><?php echo $_smarty_tpl->tpl_vars['v']->value['zzbzz'];?>
</td>
                </tr>

                <tr class="show sw<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
">
                    <td><?php echo $_smarty_tpl->tpl_vars['v']->value['dcxingtai'];?>
</td>
                </tr>


                <tr class="show sw<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
">
                    <td><?php echo $_smarty_tpl->tpl_vars['v']->value['zhymc'];?>
</td>
                </tr>

                <tr class="show sw<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
">
                    <td><?php echo $_smarty_tpl->tpl_vars['v']->value['zzymc'];?>
</td>
                </tr>


                <tr class="show sw<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
">
                    <td><?php echo $_smarty_tpl->tpl_vars['v']->value['zbjdaima'];?>
</td>
                </tr>

                <tr class="show sw<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
">
                    <td><?php echo $_smarty_tpl->tpl_vars['v']->value['zdci'];?>
</td>
                </tr>


                <tr class="show sw<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
">
                    <td><?php echo $_smarty_tpl->tpl_vars['v']->value['cbjdaima'];?>
</td>
                </tr>

                <tr class="show sw<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
">
                    <td><?php echo $_smarty_tpl->tpl_vars['v']->value['czdc'];?>
</td>
                </tr>

                <tr class="show sw<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
">
                    <td><?php echo $_smarty_tpl->tpl_vars['v']->value['ciyi1'];?>
</td>
                </tr>

                <tr class="show sw<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
">
                    <td><?php echo $_smarty_tpl->tpl_vars['v']->value['liju1'];?>
</td>
                </tr>

                <tr class="show sw<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
">
                    <td><?php echo $_smarty_tpl->tpl_vars['v']->value['ciyi2'];?>
</td>
                </tr>

                <tr class="show sw<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
">
                    <td><?php echo $_smarty_tpl->tpl_vars['v']->value['liju2'];?>
</td>
                </tr>

                <tr class="show sw<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
">
                    <td><?php echo $_smarty_tpl->tpl_vars['v']->value['ciyi3'];?>
</td>
                </tr>

                <tr class="show sw<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
">
                    <td><?php echo $_smarty_tpl->tpl_vars['v']->value['liju3'];?>
</td>
                </tr>

                <tr class="show sw<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
">
                    <td><?php echo $_smarty_tpl->tpl_vars['v']->value['gqs'];?>
</td>
                </tr>

                <tr class="show sw<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
">
                    <td><?php echo $_smarty_tpl->tpl_vars['v']->value['xls'];?>
</td>
                </tr>

                <tr class="show sw<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
">
                    <td><?php echo $_smarty_tpl->tpl_vars['v']->value['jls'];?>
</td>
                </tr>



                <?php } ?>
            </tbody>
        </table>
        <!-- 结束数据展示代码 -->


    </div>



    <!-- 以下是统计及其他信息，与演示无关，不必理会 -->

    <p class="vad">
        <a href="#" target="_blank">藏语动词</a>
        <a href="#" target="_blank">查 找</a>
        <a href="<?php echo @__MODULE__;?>
/ci/showlist" target="_blank">词库管理</a>
    </p>
    <style>
        .vad {
            margin: 250px 0 5px;
            font-family: Consolas, arial, 宋体, sans-serif;
            text-align: center;
        }

        .vad a {
            display: inline-block;
            height: 36px;
            line-height: 36px;
            margin: 0 5px;
            padding: 0 50px;
            font-size: 14px;
            text-align: center;
            color: #eee;
            text-decoration: none;
            background-color: #222;
        }

        .vad a:hover {
            color: #fff;
            background-color: #000;
        }

        .thead {
            width: 728px;
            height: 90px;
            margin: 0 auto;
            border-bottom: 40px solid #fff;
        }
    </style>
    <script type="text/javascript">
        /*120*270 创建于 2018-05-01*/
        var cpro_id = "u2182159";
    </script><?php }} ?>