<?php /* Smarty version Smarty-3.1.19, created on 2017-10-19 12:23:42
         compiled from "C:\AppServ\www\local\themes\classic\templates\checkout\_partials\steps\unreachable.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2328359e8df9e2e0285-87586071%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '43eb20bf71afb4bf96215432a366fa39fb53b0e3' => 
    array (
      0 => 'C:\\AppServ\\www\\local\\themes\\classic\\templates\\checkout\\_partials\\steps\\unreachable.tpl',
      1 => 1508171908,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2328359e8df9e2e0285-87586071',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'identifier' => 0,
    'position' => 0,
    'title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59e8df9e32de27_88135382',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59e8df9e32de27_88135382')) {function content_59e8df9e32de27_88135382($_smarty_tpl) {?>

  <section class="checkout-step -unreachable" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['identifier']->value, ENT_QUOTES, 'UTF-8');?>
">
    <h1 class="step-title h3">
      <span class="step-number"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['position']->value, ENT_QUOTES, 'UTF-8');?>
</span> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>

    </h1>
  </section>

<?php }} ?>
