<?php /* Smarty version Smarty-3.1.19, created on 2015-03-26 19:26:22
         compiled from "C:\wamp\www\SushiFast\modules\shopgate\views\templates\admin\configurations.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1352755144f4e290972-31542624%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bbb2c3a5c4232b179d1498efba295f57b5fb066f' => 
    array (
      0 => 'C:\\wamp\\www\\SushiFast\\modules\\shopgate\\views\\templates\\admin\\configurations.tpl',
      1 => 1427394370,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1352755144f4e290972-31542624',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'mod_dir' => 0,
    'offer_url' => 0,
    'video_url' => 0,
    'api_url' => 0,
    'currencies' => 0,
    'currency' => 0,
    'configs' => 0,
    'langs' => 0,
    'key' => 0,
    'name' => 0,
    'shipping_service_list' => 0,
    'settings' => 0,
    'servers' => 0,
    'product_export_descriptions' => 0,
    'carrier_list' => 0,
    'carrier' => 0,
    'config_key' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_55144f4ef17ce8_48284367',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55144f4ef17ce8_48284367')) {function content_55144f4ef17ce8_48284367($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include 'C:\\wamp\\www\\SushiFast\\tools\\smarty\\plugins\\modifier.escape.php';
?>

<link rel='stylesheet' type='text/css' href='//fonts.googleapis.com/css?family=Open+Sans:400,600&subset=latin,latin-ext'/>
<link rel="stylesheet" type="text/css" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['mod_dir']->value, ENT_QUOTES, 'UTF-8', true);?>
css/MyFontsWebfontsKit.css">
<link rel="stylesheet" type="text/css" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['mod_dir']->value, ENT_QUOTES, 'UTF-8', true);?>
css/configurations.css">

<div id="shopgateTeaser">

    <div id="shopgateTeaserHeader">
        <div>
            <div class="logo">
                <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['mod_dir']->value, ENT_QUOTES, 'UTF-8', true);?>
img/shopgate_logo.png"/>
            </div>
            <div class="devices">
                <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['mod_dir']->value, ENT_QUOTES, 'UTF-8', true);?>
img/devices.png"/>
            </div>
            <div class="register">
                <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['offer_url']->value, ENT_QUOTES, 'UTF-8', true);?>
" target="_blank" class="register"><?php echo smartyTranslate(array('s'=>'Register now​','mod'=>'shopgate'),$_smarty_tpl);?>
</a>
            </div>
        </div>
    </div>

    <div id="shopgateTeaserContent">

        <div id="shopgateTeaserSidebar">
            <h3><?php echo smartyTranslate(array('s'=>'Recommended by Prestashop!','mod'=>'shopgate'),$_smarty_tpl);?>
</h3>
            <ul>
                <li><?php echo smartyTranslate(array('s'=>'Mobile Website','mod'=>'shopgate'),$_smarty_tpl);?>
</li>
                <li><?php echo smartyTranslate(array('s'=>'iPhone App','mod'=>'shopgate'),$_smarty_tpl);?>
</li>
                <li><?php echo smartyTranslate(array('s'=>'iPad App','mod'=>'shopgate'),$_smarty_tpl);?>
</li>
                <li><?php echo smartyTranslate(array('s'=>'Android App','mod'=>'shopgate'),$_smarty_tpl);?>
</li>
                <li><?php echo smartyTranslate(array('s'=>'Android Tablet App','mod'=>'shopgate'),$_smarty_tpl);?>
</li>
                <li><?php echo smartyTranslate(array('s'=>'200+ Features','mod'=>'shopgate'),$_smarty_tpl);?>
</li>
            </ul>
            <iframe width="330" height="168" src="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['video_url']->value, 'all');?>
" frameborder="0" allowfullscreen></iframe>
        </div>

        <div id="shopgateTeaserMain">
            <h3><?php echo smartyTranslate(array('s'=>'Shopgate - Mobile Commerce for Prestashop','mod'=>'shopgate'),$_smarty_tpl);?>
</h3>

            <p><?php echo smartyTranslate(array('s'=>'With Shopgate you can sell your products quickly and easily via mobile devices. We will create a mobile-optimized webshop and innovative shopping apps with numerous features. Increase your sales and the customer\'s interest through targeted marketing!','mod'=>'shopgate'),$_smarty_tpl);?>
</p>

            <img class="contentImage" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['mod_dir']->value, ENT_QUOTES, 'UTF-8', true);?>
img/content_image.png"/>

            <h4><?php echo smartyTranslate(array('s'=>'Your advantages with Shopgate​:','mod'=>'shopgate'),$_smarty_tpl);?>
</h4>
            <ul>
                <li><?php echo smartyTranslate(array('s'=>'Touch-optimized​','mod'=>'shopgate'),$_smarty_tpl);?>
</li>
                <li><?php echo smartyTranslate(array('s'=>'Easy navigation','mod'=>'shopgate'),$_smarty_tpl);?>
</li>
                <li><?php echo smartyTranslate(array('s'=>'High Conversion Rates​','mod'=>'shopgate'),$_smarty_tpl);?>
</li>
                <li><?php echo smartyTranslate(array('s'=>'Active Conversion Optimization​','mod'=>'shopgate'),$_smarty_tpl);?>
</li>
                <li><?php echo smartyTranslate(array('s'=>'SEO Optimized','mod'=>'shopgate'),$_smarty_tpl);?>
</li>
                <li><?php echo smartyTranslate(array('s'=>'Push Marketing','mod'=>'shopgate'),$_smarty_tpl);?>
</li>
                <li><?php echo smartyTranslate(array('s'=>'Barcode & QR-Scanner','mod'=>'shopgate'),$_smarty_tpl);?>
</li>
            </ul>

            <div class="register">
                <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['offer_url']->value, ENT_QUOTES, 'UTF-8', true);?>
" target="_blank" class="register"><?php echo smartyTranslate(array('s'=>'Register now','mod'=>'shopgate'),$_smarty_tpl);?>
</a>
            </div>
            <div class="registerText">
                <?php echo smartyTranslate(array('s'=>'Got questions?','mod'=>'shopgate'),$_smarty_tpl);?>
<br/>
                <?php echo smartyTranslate(array('s'=>'Give us a call at​: 06033 / 7470-100','mod'=>'shopgate'),$_smarty_tpl);?>

            </div>
        </div>

    </div>

</div>


<div style="display:none">
    <h2><?php echo smartyTranslate(array('s'=>'Shopgate','mod'=>'shopgate'),$_smarty_tpl);?>
</h2>

    <p>
        <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['mod_dir']->value, ENT_QUOTES, 'UTF-8', true);?>
img/logo_web.png"/>
    </p>

    <p>
        <?php echo smartyTranslate(array('s'=>'Create fast and easy to own mobile shop. Shopgate developed for you from 19,- EUR a mobile web page and real apps for iPhone, Android, iPad and other mobile systems. About the module, products and inventories with the mobile shop and orders automatically synchronized from the mobile shop in your store Presto transfer. For more information, see','mod'=>'shopgate'),$_smarty_tpl);?>

        <a href=https://www.shopgate.com/fr/prestashop_offer" target="_blank">www.shopgate.com</a>
    </p>
</div>
<p style="clear: both;">&nbsp;</p>

<script src="../js/jquery/jquery-colorpicker.js" type="text/javascript"></script>
<script type="text/javascript">
    
    function shopgate_settings_toggle_server(obj) {
        if ($(obj).val() == 'custom')
            $('#shopgate_server').slideDown();
        else
            $('#shopgate_server').slideUp();
    }
    
</script>

<form method="post" action="">
    <fieldset>
        <legend><img title="" alt="" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['mod_dir']->value, ENT_QUOTES, 'UTF-8', true);?>
img/logo.png"><?php echo smartyTranslate(array('s'=>'Configuration','mod'=>'shopgate'),$_smarty_tpl);?>
</legend>

        <h2><?php echo smartyTranslate(array('s'=>'Info','mod'=>'shopgate'),$_smarty_tpl);?>
</h2>

        <label><?php echo smartyTranslate(array('s'=>'API URL','mod'=>'shopgate'),$_smarty_tpl);?>
</label>

        <div class="margin-form">
            <input type="text" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['api_url']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" readonly="readonly" size="60" onclick="$(this).select();"
                   style="background-color: #EFEFEF;"/>

            <p><?php echo smartyTranslate(array('s'=>'Use this URL in shopgate merchant settings','mod'=>'shopgate'),$_smarty_tpl);?>
</p>
        </div>

        <label><?php echo smartyTranslate(array('s'=>'Currency','mod'=>'shopgate'),$_smarty_tpl);?>
</label>

        <div class="margin-form">
            <select name="configs[currency]">
                <?php  $_smarty_tpl->tpl_vars['currency'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['currency']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['currencies']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['currency']->key => $_smarty_tpl->tpl_vars['currency']->value) {
$_smarty_tpl->tpl_vars['currency']->_loop = true;
?>
                    <option value="<?php echo strtoupper($_smarty_tpl->tpl_vars['currency']->value['iso_code']);?>
"
                            <?php if (strtoupper($_smarty_tpl->tpl_vars['currency']->value['iso_code'])==$_smarty_tpl->tpl_vars['configs']->value['currency']) {?>selected="selected"<?php }?>><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</option>
                <?php } ?>
            </select>
        </div>

        <h2><?php echo smartyTranslate(array('s'=>'Basic','mod'=>'shopgate'),$_smarty_tpl);?>
</h2>

        <label><?php echo smartyTranslate(array('s'=>'Customer number','mod'=>'shopgate'),$_smarty_tpl);?>
</label>

        <div class="margin-form">
            <input type="text" name="configs[customer_number]" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['configs']->value['customer_number'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" size="4"/>
        </div>
        <label><?php echo smartyTranslate(array('s'=>'Shop number','mod'=>'shopgate'),$_smarty_tpl);?>
</label>

        <div class="margin-form">
            <input type="text" name="configs[shop_number]" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['configs']->value['shop_number'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" size="4"/>
        </div>
        <label><?php echo smartyTranslate(array('s'=>'Api key','mod'=>'shopgate'),$_smarty_tpl);?>
</label>

        <div class="margin-form">
            <input type="text" name="configs[apikey]" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['configs']->value['apikey'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" size="20"/>
        </div>
        <label><?php echo smartyTranslate(array('s'=>'Language','mod'=>'shopgate'),$_smarty_tpl);?>
</label>

        <div class="margin-form">
            <select name="configs[language]">
                <?php  $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['name']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['langs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['name']->key => $_smarty_tpl->tpl_vars['name']->value) {
$_smarty_tpl->tpl_vars['name']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['name']->key;
?>
                    <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8', true);?>
"
                            <?php if ($_smarty_tpl->tpl_vars['key']->value==$_smarty_tpl->tpl_vars['configs']->value['language']) {?>selected="selected"<?php }?>><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</option>
                <?php } ?>
            </select>
        </div>
        <label><?php echo smartyTranslate(array('s'=>'Default shipping service','mod'=>'shopgate'),$_smarty_tpl);?>
</label>

        <div class="margin-form">
            <select name="settings[SHOPGATE_SHIPPING_SERVICE]">
                <?php  $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['name']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['shipping_service_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['name']->key => $_smarty_tpl->tpl_vars['name']->value) {
$_smarty_tpl->tpl_vars['name']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['name']->key;
?>
                    <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8', true);?>
"
                            <?php if ($_smarty_tpl->tpl_vars['key']->value==$_smarty_tpl->tpl_vars['settings']->value['SHOPGATE_SHIPPING_SERVICE']) {?>selected="selected"<?php }?>><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</option>
                <?php } ?>
            </select>
        </div>

        <label><?php echo smartyTranslate(array('s'=>'Subscribe mobile customer to newsletter','mod'=>'shopgate'),$_smarty_tpl);?>
</label>
        <div class="margin-form">
            <label class="t"><input type="radio" value="1"
                                    name="settings[SHOPGATE_SUBSCRIBE_NEWSLETTER]"<?php if ($_smarty_tpl->tpl_vars['settings']->value['SHOPGATE_SUBSCRIBE_NEWSLETTER']) {?> checked="checked"<?php }?>/>
                <img title="<?php echo smartyTranslate(array('s'=>'Enabled','mod'=>'shopgate'),$_smarty_tpl);?>
" alt="<?php echo smartyTranslate(array('s'=>'Enabled','mod'=>'shopgate'),$_smarty_tpl);?>
" src="../img/admin/enabled.gif"></label>
            <label class="t"><input type="radio" value="0"
                                    name="settings[SHOPGATE_SUBSCRIBE_NEWSLETTER]"<?php if (!$_smarty_tpl->tpl_vars['settings']->value['SHOPGATE_SUBSCRIBE_NEWSLETTER']) {?> checked="checked"<?php }?>/>
                <img title="<?php echo smartyTranslate(array('s'=>'Disabled','mod'=>'shopgate'),$_smarty_tpl);?>
" alt="<?php echo smartyTranslate(array('s'=>'Disabled','mod'=>'shopgate'),$_smarty_tpl);?>
" src="../img/admin/disabled.gif"></label>
        </div><p style="clear: both;">&nbsp;</p>

        <h2><?php echo smartyTranslate(array('s'=>'Server','mod'=>'shopgate'),$_smarty_tpl);?>
</h2>

        <label><?php echo smartyTranslate(array('s'=>'Server','mod'=>'shopgate'),$_smarty_tpl);?>
</label>

        <div class="margin-form">
            <select name="configs[server]" onchange="shopgate_settings_toggle_server(this);">
                <?php  $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['name']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['servers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['name']->key => $_smarty_tpl->tpl_vars['name']->value) {
$_smarty_tpl->tpl_vars['name']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['name']->key;
?>
                    <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8', true);?>
"
                            <?php if ($_smarty_tpl->tpl_vars['key']->value==$_smarty_tpl->tpl_vars['configs']->value['server']) {?>selected="selected"<?php }?>><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</option>
                <?php } ?>
            </select>
        </div>
        <div id="shopgate_server" <?php if ($_smarty_tpl->tpl_vars['configs']->value['server']!='custom') {?>style="display:none;"<?php }?>>
            <label><?php echo smartyTranslate(array('s'=>'Custom API URL','mod'=>'shopgate'),$_smarty_tpl);?>
</label>

            <div class="margin-form">
                <input type="text" name="configs[api_url]" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['configs']->value['api_url'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" size="40"/>
            </div>
        </div>
        <h2><?php echo smartyTranslate(array('s'=>'Enable','mod'=>'shopgate'),$_smarty_tpl);?>
</h2>

        <label><?php echo smartyTranslate(array('s'=>'Minimum quantity check','mod'=>'shopgate'),$_smarty_tpl);?>
</label>

        <div class="margin-form">
            <label class="t"><input type="radio" value="1"
                                    name="settings[SHOPGATE_MIN_QUANTITY_CHECK]"<?php if ($_smarty_tpl->tpl_vars['settings']->value['SHOPGATE_MIN_QUANTITY_CHECK']) {?> checked="checked"<?php }?>/>
                <img title="<?php echo smartyTranslate(array('s'=>'Enabled','mod'=>'shopgate'),$_smarty_tpl);?>
" alt="<?php echo smartyTranslate(array('s'=>'Enabled','mod'=>'shopgate'),$_smarty_tpl);?>
" src="../img/admin/enabled.gif"></label>
            <label class="t"><input type="radio" value="0"
                                    name="settings[SHOPGATE_MIN_QUANTITY_CHECK]"<?php if (!$_smarty_tpl->tpl_vars['settings']->value['SHOPGATE_MIN_QUANTITY_CHECK']) {?> checked="checked"<?php }?>/>
                <img title="<?php echo smartyTranslate(array('s'=>'Disabled','mod'=>'shopgate'),$_smarty_tpl);?>
" alt="<?php echo smartyTranslate(array('s'=>'Disabled','mod'=>'shopgate'),$_smarty_tpl);?>
" src="../img/admin/disabled.gif"></label>
        </div>
        <label><?php echo smartyTranslate(array('s'=>'Out of stock check','mod'=>'shopgate'),$_smarty_tpl);?>
</label>

        <div class="margin-form">
            <label class="t"><input type="radio" value="1"
                                    name="settings[SHOPGATE_OUT_OF_STOCK_CHECK]"<?php if ($_smarty_tpl->tpl_vars['settings']->value['SHOPGATE_OUT_OF_STOCK_CHECK']) {?> checked="checked"<?php }?>/>
                <img title="<?php echo smartyTranslate(array('s'=>'Enabled','mod'=>'shopgate'),$_smarty_tpl);?>
" alt="<?php echo smartyTranslate(array('s'=>'Enabled','mod'=>'shopgate'),$_smarty_tpl);?>
" src="../img/admin/enabled.gif"></label>
            <label class="t"><input type="radio" value="0"
                                    name="settings[SHOPGATE_OUT_OF_STOCK_CHECK]"<?php if (!$_smarty_tpl->tpl_vars['settings']->value['SHOPGATE_OUT_OF_STOCK_CHECK']) {?> checked="checked"<?php }?>/>
                <img title="<?php echo smartyTranslate(array('s'=>'Disabled','mod'=>'shopgate'),$_smarty_tpl);?>
" alt="<?php echo smartyTranslate(array('s'=>'Disabled','mod'=>'shopgate'),$_smarty_tpl);?>
" src="../img/admin/disabled.gif"></label>
        </div>


        <h2><?php echo smartyTranslate(array('s'=>'Mobile site','mod'=>'shopgate'),$_smarty_tpl);?>
</h2>

        <label><?php echo smartyTranslate(array('s'=>'Accumulative forwarding','mod'=>'shopgate'),$_smarty_tpl);?>
</label>

        <div class="margin-form">
            <label class="t"><input type="radio" value="1"
                                    name="configs[enable_default_redirect]"<?php if ($_smarty_tpl->tpl_vars['configs']->value['enable_default_redirect']) {?> checked="checked"<?php }?>/>
                <img title="<?php echo smartyTranslate(array('s'=>'Enabled','mod'=>'shopgate'),$_smarty_tpl);?>
" alt="<?php echo smartyTranslate(array('s'=>'Enabled','mod'=>'shopgate'),$_smarty_tpl);?>
" src="../img/admin/enabled.gif"></label>
            <label class="t"><input type="radio" value="0"
                                    name="configs[enable_default_redirect]"<?php if (!$_smarty_tpl->tpl_vars['configs']->value['enable_default_redirect']) {?> checked="checked"<?php }?>/>
                <img title="<?php echo smartyTranslate(array('s'=>'Disabled','mod'=>'shopgate'),$_smarty_tpl);?>
" alt="<?php echo smartyTranslate(array('s'=>'Disabled','mod'=>'shopgate'),$_smarty_tpl);?>
" src="../img/admin/disabled.gif"></label>
        </div>
        <br/>
        <label><?php echo smartyTranslate(array('s'=>'Alias','mod'=>'shopgate'),$_smarty_tpl);?>
</label>

        <div class="margin-form">
            <input type="text" name="configs[alias]" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['configs']->value['alias'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" size="16"/>
        </div>
        <label><?php echo smartyTranslate(array('s'=>'CName','mod'=>'shopgate'),$_smarty_tpl);?>
</label>

        <div class="margin-form">
            <input type="text" name="configs[cname]" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['configs']->value['cname'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" size="16"/>
        </div>

		<h2><?php echo smartyTranslate(array('s'=>'Category export','mod'=>'shopgate'),$_smarty_tpl);?>
</h2>
		<label><?php echo smartyTranslate(array('s'=>'Should the root category be exported','mod'=>'shopgate'),$_smarty_tpl);?>
</label>

		<div class="margin-form">
			<label class="t"><input type="radio" value="1"
									name="settings[SHOPGATE_EXPORT_ROOT_CATEGORIES]"<?php if ($_smarty_tpl->tpl_vars['settings']->value['SHOPGATE_EXPORT_ROOT_CATEGORIES']) {?> checked="checked"<?php }?>/>
				<img title="<?php echo smartyTranslate(array('s'=>'Enabled','mod'=>'shopgate'),$_smarty_tpl);?>
" alt="<?php echo smartyTranslate(array('s'=>'Enabled','mod'=>'shopgate'),$_smarty_tpl);?>
" src="../img/admin/enabled.gif"></label>
			<label class="t"><input type="radio" value="0"
									name="settings[SHOPGATE_EXPORT_ROOT_CATEGORIES]"<?php if (!$_smarty_tpl->tpl_vars['settings']->value['SHOPGATE_EXPORT_ROOT_CATEGORIES']) {?> checked="checked"<?php }?>/>
				<img title="<?php echo smartyTranslate(array('s'=>'Disabled','mod'=>'shopgate'),$_smarty_tpl);?>
" alt="<?php echo smartyTranslate(array('s'=>'Disabled','mod'=>'shopgate'),$_smarty_tpl);?>
" src="../img/admin/disabled.gif"></label>
		</div>

        <h2><?php echo smartyTranslate(array('s'=>'Product export','mod'=>'shopgate'),$_smarty_tpl);?>
</h2>
        <label><?php echo smartyTranslate(array('s'=>'Description','mod'=>'shopgate'),$_smarty_tpl);?>
</label>
        <div class="margin-form">
            <select name="settings[SHOPGATE_PRODUCT_DESCRIPTION]">
                <?php  $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['name']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['product_export_descriptions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['name']->key => $_smarty_tpl->tpl_vars['name']->value) {
$_smarty_tpl->tpl_vars['name']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['name']->key;
?>
                    <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8', true);?>
"
                            <?php if ($_smarty_tpl->tpl_vars['key']->value==$_smarty_tpl->tpl_vars['settings']->value['SHOPGATE_PRODUCT_DESCRIPTION']) {?>selected="selected"<?php }?>><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</option>
                <?php } ?>
            </select>
        </div>

        <?php if ($_smarty_tpl->tpl_vars['carrier_list']->value) {?>
            <h2><?php echo smartyTranslate(array('s'=>'Carrier mapping','mod'=>'shopgate'),$_smarty_tpl);?>
</h2>

            <?php  $_smarty_tpl->tpl_vars['carrier'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['carrier']->_loop = false;
 $_smarty_tpl->tpl_vars['config_key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['carrier_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['carrier']->key => $_smarty_tpl->tpl_vars['carrier']->value) {
$_smarty_tpl->tpl_vars['carrier']->_loop = true;
 $_smarty_tpl->tpl_vars['config_key']->value = $_smarty_tpl->tpl_vars['carrier']->key;
?>
                <label><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['carrier']->value['name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</label>
                <div class="margin-form">
                    <select name="settings[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['config_key']->value, ENT_QUOTES, 'UTF-8', true);?>
]">
                        <?php  $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['name']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['shipping_service_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['name']->key => $_smarty_tpl->tpl_vars['name']->value) {
$_smarty_tpl->tpl_vars['name']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['name']->key;
?>
                            <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8', true);?>
"
                                    <?php if ($_smarty_tpl->tpl_vars['key']->value==$_smarty_tpl->tpl_vars['settings']->value[$_smarty_tpl->tpl_vars['config_key']->value]) {?>selected="selected"<?php }?>><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</option>
                        <?php } ?>
                    </select>
                </div>
            <?php } ?>
        <?php }?>

        <center><input class="button" type="submit" value="<?php echo smartyTranslate(array('s'=>'Save','mod'=>'shopgate'),$_smarty_tpl);?>
" name="saveConfigurations"></center>
    </fieldset><?php }} ?>
