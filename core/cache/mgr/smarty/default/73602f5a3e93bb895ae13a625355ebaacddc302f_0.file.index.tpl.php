<?php /* Smarty version 3.1.27, created on 2017-12-10 17:00:19
         compiled from "C:\OpenServer\OpenServer\domains\CompletedProjects\modX\super\templates\default\workspaces\index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:11188023625a2d3df32a1a90_42618711%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '73602f5a3e93bb895ae13a625355ebaacddc302f' => 
    array (
      0 => 'C:\\OpenServer\\OpenServer\\domains\\CompletedProjects\\modX\\super\\templates\\default\\workspaces\\index.tpl',
      1 => 1512726899,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11188023625a2d3df32a1a90_42618711',
  'variables' => 
  array (
    'error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a2d3df32b12a9_23168484',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a2d3df32b12a9_23168484')) {
function content_5a2d3df32b12a9_23168484 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '11188023625a2d3df32a1a90_42618711';
echo (($tmp = @$_smarty_tpl->tpl_vars['error']->value)===null||$tmp==='' ? '' : $tmp);?>

<div id="modx-panel-workspace-div"></div>
<?php }
}
?>