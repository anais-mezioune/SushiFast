<?php /*%%SmartyHeaderCode:2341558835be505ab14-14831071%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '068adfb8f091f8e9f715338c2719e39914ab2bd9' => 
    array (
      0 => 'C:\\wamp\\www\\SushiFast\\themes\\mon-theme\\modules\\blockcustomerprivacy\\blockcustomerprivacy.tpl',
      1 => 1425640160,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2341558835be505ab14-14831071',
  'variables' => 
  array (
    'privacy_message' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58835be522b902_18058780',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58835be522b902_18058780')) {function content_58835be522b902_18058780($_smarty_tpl) {?>
<div class="error_customerprivacy" style="color:red;"></div>
<fieldset class="account_creation customerprivacy">
	<h3 class="page-subheading">
		Confidentialité des données clients
	</h3>
	<div style="width:21px; float:left;">
		<div class="required checkbox">
			<input type="checkbox" value="1" id="customer_privacy" name="customer_privacy" autocomplete="off"/>
		</div>
	</div>
	<div style="width: 92%; float: left; margin-top: 8px;">
        <label for="customer_privacy" style="font-weight: normal;">Les informations personnelles que nous collectons sont destinées à mieux répondre à vos demandes et traiter vos commandes. Vous disposez à tout moment d’un droit d’accès, de modification et de suppression de vos informations personnelles que vous pouvez exercer via la page &quot;Mon Compte&quot; de ce site internet.</label>				
	</div>
</fieldset><?php }} ?>
