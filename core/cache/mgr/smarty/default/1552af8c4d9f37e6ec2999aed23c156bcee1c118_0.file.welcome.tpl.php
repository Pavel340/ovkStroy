<?php /* Smarty version 3.1.27, created on 2017-12-08 12:56:44
         compiled from "C:\OpenServer\OpenServer\domains\CompletedProjects\ovk\project\app\modX\super\templates\default\welcome.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:14852737605a2a61dcb02340_37706484%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1552af8c4d9f37e6ec2999aed23c156bcee1c118' => 
    array (
      0 => 'C:\\OpenServer\\OpenServer\\domains\\CompletedProjects\\ovk\\project\\app\\modX\\super\\templates\\default\\welcome.tpl',
      1 => 1512726899,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14852737605a2a61dcb02340_37706484',
  'variables' => 
  array (
    'dashboard' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a2a61dcb05084_27448115',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a2a61dcb05084_27448115')) {
function content_5a2a61dcb05084_27448115 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '14852737605a2a61dcb02340_37706484';
?>
<div id="modx-panel-welcome-div"></div>

<div id="modx-dashboard" class="dashboard">
<?php echo $_smarty_tpl->tpl_vars['dashboard']->value;?>

</div><?php }
}
?>