<?php /* Smarty version 3.1.27, created on 2017-12-08 12:55:36
         compiled from "C:\OpenServer\OpenServer\domains\CompletedProjects\ovk\project\app\modX\setup\templates\footer.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:11296102135a2a61987a9c54_25645573%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '94ca3b3b32c9aab12dc1fdd39fef165c7aab5cac' => 
    array (
      0 => 'C:\\OpenServer\\OpenServer\\domains\\CompletedProjects\\ovk\\project\\app\\modX\\setup\\templates\\footer.tpl',
      1 => 1509516584,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11296102135a2a61987a9c54_25645573',
  'variables' => 
  array (
    '_lang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a2a61987ef416_91873325',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a2a61987ef416_91873325')) {
function content_5a2a61987ef416_91873325 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_replace')) require_once 'C:/OpenServer/OpenServer/domains/CompletedProjects/ovk/project/app/modX/core/model/smarty/plugins\\modifier.replace.php';

$_smarty_tpl->properties['nocache_hash'] = '11296102135a2a61987a9c54_25645573';
?>
        </div>
        <!-- end content -->
        <div class="clear">&nbsp;</div>
    </div>
</div>

<!-- start footer -->
<div id="footer">
    <div id="footer-inner">
    <div class="container_12">
        <p><?php ob_start();
echo date('Y');
$_tmp1=ob_get_clean();
echo smarty_modifier_replace($_smarty_tpl->tpl_vars['_lang']->value['modx_footer1'],'[[+current_year]]',$_tmp1);?>
</p>
        <p><?php echo $_smarty_tpl->tpl_vars['_lang']->value['modx_footer2'];?>
</p>
    </div>
    </div>
</div>

<div class="post_body">

</div>
<!-- end footer -->
</body>
</html><?php }
}
?>