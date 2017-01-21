<?php /* Smarty version Smarty-3.1.19, created on 2015-03-26 02:41:57
         compiled from "C:\wamp\www\SushiFast\themes\mon-theme\modules\blockuserinfo\nav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:23523551363e5a1d561-30085291%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f9c3186e62b151f06614f53b79a72cac1378a199' => 
    array (
      0 => 'C:\\wamp\\www\\SushiFast\\themes\\mon-theme\\modules\\blockuserinfo\\nav.tpl',
      1 => 1426836165,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23523551363e5a1d561-30085291',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'is_logged' => 0,
    'link' => 0,
    'cookie' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_551363e5b751b7_13583033',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_551363e5b751b7_13583033')) {function content_551363e5b751b7_13583033($_smarty_tpl) {?><!-- Block user information module NAV  -->
<?php if ($_smarty_tpl->tpl_vars['is_logged']->value) {?>
	<div class="header_user_info">
		<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'View my customer account','mod'=>'blockuserinfo'),$_smarty_tpl);?>
" class="account" rel="nofollow"><span><?php echo $_smarty_tpl->tpl_vars['cookie']->value->customer_firstname;?>
 <?php echo $_smarty_tpl->tpl_vars['cookie']->value->customer_lastname;?>
</span></a>
	</div>
<?php }?>
<div class="header_user_info div-logout">
	<?php if ($_smarty_tpl->tpl_vars['is_logged']->value) {?>
		<a class="logout" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('index',true,null,"mylogout"), ENT_QUOTES, 'UTF-8', true);?>
" rel="nofollow" title="<?php echo smartyTranslate(array('s'=>'Log me out','mod'=>'blockuserinfo'),$_smarty_tpl);?>
">
			<img src="http://sushifast/themes/mon-theme/img/deconnexion.png" alt="Deconnexion" title="D&eacute;connexion" />
			<!-- <?php echo smartyTranslate(array('s'=>'Sign out','mod'=>'blockuserinfo'),$_smarty_tpl);?>
 -->
			<?php echo smartyTranslate(array('s'=>'','mod'=>'blockuserinfo'),$_smarty_tpl);?>

		</a>
	<?php } else { ?>
		<a class="login" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8', true);?>
" rel="nofollow" title="<?php echo smartyTranslate(array('s'=>'Log in to your customer account','mod'=>'blockuserinfo'),$_smarty_tpl);?>
">
			<img src="http://sushifast/themes/mon-theme/img/connexion.png" alt="Connexion" title="Connexion" />
			<?php echo smartyTranslate(array('s'=>'Sign in','mod'=>'blockuserinfo'),$_smarty_tpl);?>

			<!-- <?php echo smartyTranslate(array('s'=>'','mod'=>'blockuserinfo'),$_smarty_tpl);?>
 -->
		</a>
	<?php }?>
</div>
<!-- /Block usmodule NAV -->
<?php }} ?>
