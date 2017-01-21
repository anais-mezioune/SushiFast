<?php /* Smarty version Smarty-3.1.19, created on 2015-04-02 16:06:27
         compiled from "C:\wamp\www\SushiFast\admin7922gjvbd\themes\default\template\helpers\list\list_action_view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10938551d4ce3a057b6-23732807%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3b56c43afdf259e6a9ae7bb67e80b144c11a7651' => 
    array (
      0 => 'C:\\wamp\\www\\SushiFast\\admin7922gjvbd\\themes\\default\\template\\helpers\\list\\list_action_view.tpl',
      1 => 1425640160,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10938551d4ce3a057b6-23732807',
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
  'unifunc' => 'content_551d4ce3a5f552_90947895',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_551d4ce3a5f552_90947895')) {function content_551d4ce3a5f552_90947895($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" >
	<i class="icon-search-plus"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>

</a><?php }} ?>
