<?php /* Smarty version 3.1.27, created on 2017-12-11 10:41:08
         compiled from "C:\OpenServer\OpenServer\domains\CompletedProjects\modX\super\templates\default\welcome.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2096362905a2e3694915436_99380642%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e309e66af7bc057ef58c9171af26fc6058769d33' => 
    array (
      0 => 'C:\\OpenServer\\OpenServer\\domains\\CompletedProjects\\modX\\super\\templates\\default\\welcome.tpl',
      1 => 1512726899,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2096362905a2e3694915436_99380642',
  'variables' => 
  array (
    'dashboard' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a2e3694918ae5_45497566',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a2e3694918ae5_45497566')) {
function content_5a2e3694918ae5_45497566 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2096362905a2e3694915436_99380642';
?>
<div id="modx-panel-welcome-div"></div>

<div id="modx-dashboard" class="dashboard">
<?php echo $_smarty_tpl->tpl_vars['dashboard']->value;?>

</div><?php }
}
?>