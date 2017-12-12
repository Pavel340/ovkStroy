<?php /* Smarty version 3.1.27, created on 2017-12-12 12:33:00
         compiled from "C:\OpenServer\OpenServer\domains\CompletedProjects\modX\super\templates\default\element\tv\renders\input\richtext.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:11423985785a2fa24c607908_22433181%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '57fadbdb7d5911e0cd665c53a49e988e064a83cf' => 
    array (
      0 => 'C:\\OpenServer\\OpenServer\\domains\\CompletedProjects\\modX\\super\\templates\\default\\element\\tv\\renders\\input\\richtext.tpl',
      1 => 1512726895,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11423985785a2fa24c607908_22433181',
  'variables' => 
  array (
    'tv' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a2fa24c668a27_88875985',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a2fa24c668a27_88875985')) {
function content_5a2fa24c668a27_88875985 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '11423985785a2fa24c607908_22433181';
?>
<textarea id="tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
" name="tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
" class="modx-richtext" onchange="MODx.fireResourceFormChange();"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tv']->value->get('value'), ENT_QUOTES, 'UTF-8', true);?>
</textarea>

<?php echo '<script'; ?>
 type="text/javascript">

Ext.onReady(function() {
    
    MODx.makeDroppable(Ext.get('tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
'));
    
});
<?php echo '</script'; ?>
><?php }
}
?>