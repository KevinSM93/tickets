<?php /* Smarty version Smarty-3.1.19, created on 2017-10-18 16:23:01
         compiled from "C:\AppServ\www\local\admin6389nqgsi\themes\default\template\content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1036159e7c63557c7d6-11230666%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cf6c606e35dc7118f24f25088affb313b83475af' => 
    array (
      0 => 'C:\\AppServ\\www\\local\\admin6389nqgsi\\themes\\default\\template\\content.tpl',
      1 => 1508171863,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1036159e7c63557c7d6-11230666',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59e7c63558ec12_08664915',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59e7c63558ec12_08664915')) {function content_59e7c63558ec12_08664915($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }} ?>
