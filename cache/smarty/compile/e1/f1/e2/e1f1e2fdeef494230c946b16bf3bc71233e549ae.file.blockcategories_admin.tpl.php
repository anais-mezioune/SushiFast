<?php /* Smarty version Smarty-3.1.19, created on 2015-04-15 15:20:12
         compiled from "C:\wamp\www\SushiFast\modules\blockcategories\views\blockcategories_admin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21202551363ee7aa681-88221341%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e1f1e2fdeef494230c946b16bf3bc71233e549ae' => 
    array (
      0 => 'C:\\wamp\\www\\SushiFast\\modules\\blockcategories\\views\\blockcategories_admin.tpl',
      1 => 1427395084,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21202551363ee7aa681-88221341',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_551363ee7dd313_84639958',
  'variables' => 
  array (
    'helper' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_551363ee7dd313_84639958')) {function content_551363ee7dd313_84639958($_smarty_tpl) {?>
<div class="form-group">
	<label class="control-label col-lg-3">
		<span class="label-tooltip" data-toggle="tooltip" data-html="true" title="" data-original-title="<?php echo smartyTranslate(array('s'=>'You can upload a maximum of 3 images.','mod'=>'blockcategories'),$_smarty_tpl);?>
">
			<?php echo smartyTranslate(array('s'=>'Thumbnails','mod'=>'blockcategories'),$_smarty_tpl);?>

		</span>
	</label>
	<div class="col-lg-4">
		<?php echo $_smarty_tpl->tpl_vars['helper']->value;?>

	</div>
</div>
<?php }} ?>
