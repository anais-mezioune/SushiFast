<?php /* Smarty version Smarty-3.1.19, created on 2015-04-15 17:20:48
         compiled from "C:\wamp\www\SushiFast\modules\blockpaymentlogo\blockpaymentlogo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21925552e81d0583620-58189001%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '90235c695720effb956aa6575fc65ec18c177742' => 
    array (
      0 => 'C:\\wamp\\www\\SushiFast\\modules\\blockpaymentlogo\\blockpaymentlogo.tpl',
      1 => 1425640160,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21925552e81d0583620-58189001',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cms_payement_logo' => 0,
    'link' => 0,
    'img_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_552e81d05fc7c1_69461088',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_552e81d05fc7c1_69461088')) {function content_552e81d05fc7c1_69461088($_smarty_tpl) {?>

<!-- Block payment logo module -->
<div id="paiement_logo_block_left" class="paiement_logo_block">
	<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getCMSLink($_smarty_tpl->tpl_vars['cms_payement_logo']->value), ENT_QUOTES, 'UTF-8', true);?>
">
		<img src="<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
logo_paiement_visa.jpg" alt="visa" width="33" height="21" />
		<img src="<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
logo_paiement_mastercard.jpg" alt="mastercard" width="32" height="21" />
		<img src="<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
logo_paiement_paypal.jpg" alt="paypal" width="61" height="21" />
	</a>
</div>
<!-- /Block payment logo module --><?php }} ?>
