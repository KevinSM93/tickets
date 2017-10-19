<?php /* Smarty version Smarty-3.1.19, created on 2017-10-18 16:24:07
         compiled from "C:\AppServ\www\local\admin6389nqgsi\themes\default\template\helpers\list\list_action_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1154459e7c677cd5dc6-79637093%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '064637a0f891d498ff6f1fe30c8b9d6676a64d3f' => 
    array (
      0 => 'C:\\AppServ\\www\\local\\admin6389nqgsi\\themes\\default\\template\\helpers\\list\\list_action_edit.tpl',
      1 => 1508171865,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1154459e7c677cd5dc6-79637093',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59e7c677d05bf7_38360316',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59e7c677d05bf7_38360316')) {function content_59e7c677d05bf7_38360316($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['href']->value,'html','UTF-8');?>
" title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['action']->value,'html','UTF-8');?>
" class="edit">
	<i class="icon-pencil"></i> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['action']->value,'html','UTF-8');?>

</a>
<?php }} ?>
