<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>无标题文档</title>
    <base href="<?= base_url()?>"/>
    <link  type='text/css' rel='stylesheet' href='/css/common.css'></link>
    <style type="text/css">
        <!--
        body {
            margin-left: 3px;
            margin-top: 0px;
            margin-right: 3px;
            margin-bottom: 0px;
        }
        .STYLE1 {
            color: #e1e2e3;
            font-size: 12px;
        }
        .STYLE6 {color: #000000; font-size: 12; }
        .STYLE10 {color: #000000; font-size: 12px; }
        .STYLE19 {
            color: #344b50;
            font-size: 12px;
        }
        .STYLE21 {
            font-size: 12px;
            color: #3b6375;
        }
        .STYLE22 {
            font-size: 12px;
            color: #295568;
        }
        .STYLE21 a{
            color: #295568;
        }
        -->
    </style>
</head>

<body>
<form action="" method="post">
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
        <td height="30"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                    <td height="24" bgcolor="#353c44"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
                                        <tr>
                                            <td width="2%" height="19" valign="bottom"><div align="center"><img src="images/tb.gif" width="14" height="14" /></div></td>
                                            <td width="98%" valign="bottom"><span class="STYLE1"> 管理组编辑</span></td>
                                        </tr>
                                    </table></td>
                                <td></td>
                            </tr>
                        </table></td>
                </tr>
            </table></td>
    </tr>
    <tr>
        <td><table width="100%" border="0" cellpadding="0" cellspacing="1" bgcolor="#a8c7ce">
                <tr>
                    <td width="10%" height="20" bgcolor="d3eaef" class="STYLE6"><div align="center"><span class="STYLE10">模块名</span></div></td>
                    <td width="15%" height="20" bgcolor="d3eaef" class="STYLE6"><div align="center"><span class="STYLE10">权限</span></div></td>

                </tr>
                <?php foreach($module_list as $m){?>
                    <tr onclick="hide(this)" class="a0">
                        <td height="20"  class="STYLE6"><div align="center"><span class="STYLE19"><?= $m['name']?></span></div></td>
                        <td height="20"  class="STYLE19"><div><?php if($m['child']){foreach($m['child'] as $c){?><?= $c['name']?>:
                                    <?php foreach($module_permission[$c['id']] as $m_p){?> <input id="ids<?=$m_p['id']?>" type="checkbox" <?php if($group_permission[$m_p['id']]){?> checked="checked" <?php }?> value="<?= $m_p['id'] ?>" name="group_permission[]"> <label for="ids<?=$m_p['id']?>"><?= $m_p['name'] ?> </label> <?php } ?><br><?php } }?></div></td>
                    </tr>
                <?php }?>
            </table></td>
    </tr>
    <tr>
        <td height="30"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                    <input type="submit" name="save" value="保存">
                    <td></td>
                </tr>
            </table></td>
    </tr>
</table>
</form>
</body>
</html>
