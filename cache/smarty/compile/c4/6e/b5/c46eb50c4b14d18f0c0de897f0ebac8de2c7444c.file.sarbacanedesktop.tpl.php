<?php /* Smarty version Smarty-3.1.19, created on 2015-03-26 18:59:22
         compiled from "C:\wamp\www\SushiFast\modules\sarbacanedesktop\views\templates\admin\sarbacanedesktop.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12449551448fa701ea8-99085588%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c46eb50c4b14d18f0c0de897f0ebac8de2c7444c' => 
    array (
      0 => 'C:\\wamp\\www\\SushiFast\\modules\\sarbacanedesktop\\views\\templates\\admin\\sarbacanedesktop.tpl',
      1 => 1427392749,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12449551448fa701ea8-99085588',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'css_url' => 0,
    'js_url' => 0,
    'displayed_step' => 0,
    'sd_submit_url' => 0,
    'sd_is_user' => 0,
    'sd_form_key' => 0,
    'stores_array' => 0,
    'store' => 0,
    'general_configuration' => 0,
    'list_configuration' => 0,
    'checked_boolean_newsletter' => 0,
    'checked_boolean_customer' => 0,
    'checked_value_customer' => 0,
    'checked_boolean_customer_data' => 0,
    'website_url' => 0,
    'key_for_synchronisation' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_551448fb200d04_01514603',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_551448fb200d04_01514603')) {function content_551448fb200d04_01514603($_smarty_tpl) {?>

<link href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['css_url']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" rel="stylesheet" type="text/css"/>
<script type="text/javascript" src="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['js_url']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"></script>
<div id="sarbacanedesktop">
	<div class="sd_header">
		<div class="sd_logo_<?php echo smartyTranslate(array('s'=>'sarbacane','mod'=>'sarbacanedesktop'),$_smarty_tpl);?>
"></div>
	</div>
	<p class="sd_title"><?php echo smartyTranslate(array('s'=>'It\'s easy to manage your newsletter and email campaigns','mod'=>'sarbacanedesktop'),$_smarty_tpl);?>
</p>
	<div class="sd_title_separator_page"></div>
	<div class="sd_video_config_container">
		<div class="sd_video_container">
			<iframe width="565" height="315" src="<?php echo smartyTranslate(array('s'=>'https://www.youtube.com/embed/eLMy2tSSYgE','mod'=>'sarbacanedesktop'),$_smarty_tpl);?>
?rel=0&showinfo=0" frameborder="0" allowfullscreen></iframe>
		</div>
		<div class="sd_config_container">
			<p><?php echo smartyTranslate(array('s'=>'This Prestashop module enables you to synchronize clients and accounts that have subscribed to your newsletter from your shop online using Sarbacane Desktop\'s email marketing software.','mod'=>'sarbacanedesktop'),$_smarty_tpl);?>
</p>
			<p><input type="button" onclick="sdDisplayStep(1)" class="sd_config_button" value="<?php echo smartyTranslate(array('s'=>'Begin the set-up','mod'=>'sarbacanedesktop'),$_smarty_tpl);?>
"/></p>
		</div>
	</div>
	<div class="sd_separator"></div>
	<div class="sd_detail_description_container">
		<div>
			<div>
				<div>
					<div class="sd_picto1"></div>
					<p class="sd_long_subtitle"><?php echo smartyTranslate(array('s'=>'Synchronization of your shop data','mod'=>'sarbacanedesktop'),$_smarty_tpl);?>
</p>
				</div>
			</div>
			<div>
				<div>
					<div class="sd_picto2"></div>
					<p class="sd_long_subtitle"><?php echo smartyTranslate(array('s'=>'Responsive visual editor','mod'=>'sarbacanedesktop'),$_smarty_tpl);?>
</p>
				</div>
			</div>
			<div>
				<div>
					<div class="sd_picto3"></div>
					<p class="sd_short_subtitle"><?php echo smartyTranslate(array('s'=>'Detailed statistics','mod'=>'sarbacanedesktop'),$_smarty_tpl);?>
</p>
				</div>
			</div>
			<div>
				<div>
					<div class="sd_picto4"></div>
					<p class="sd_short_subtitle"><?php echo smartyTranslate(array('s'=>'Optimal deliverability','mod'=>'sarbacanedesktop'),$_smarty_tpl);?>
</p>
				</div>
			</div>
		</div>
		<div>
			<div>
				<div>
					<div class="sd_subtitle_separator"></div>
					<p><?php echo smartyTranslate(array('s'=>'Synchronize and manage all the email lists from your Prestashop store','mod'=>'sarbacanedesktop'),$_smarty_tpl);?>
</p>
				</div>
			</div>
			<div>
				<div>
					<div class="sd_subtitle_separator"></div>
					<p><?php echo smartyTranslate(array('s'=>'NEW! Create awesome, responsive newsletters thanks to the EmailBuilder','mod'=>'sarbacanedesktop'),$_smarty_tpl);?>
</p>
				</div>
			</div>
			<div>
				<div>
					<div class="sd_subtitle_separator"></div>
					<p><?php echo smartyTranslate(array('s'=>'Geolocation, openings, opening time, clicks, opt-outs...','mod'=>'sarbacanedesktop'),$_smarty_tpl);?>
</p>
				</div>
			</div>
			<div>
				<div>
					<div class="sd_subtitle_separator"></div>
					<p><?php echo smartyTranslate(array('s'=>'Optimal deliverability thanks to our renowned professional routing platform','mod'=>'sarbacanedesktop'),$_smarty_tpl);?>
</p>
				</div>
			</div>
		</div>
	</div>
	<div class="sd_separator"></div>
	<div class="sd_account_offer_container">
		<p class="sd_account"><?php echo smartyTranslate(array('s'=>'Create your account for free and start sending emails','mod'=>'sarbacanedesktop'),$_smarty_tpl);?>
</p>
		<p class="sd_offer"><?php echo smartyTranslate(array('s'=>'No strings attached','mod'=>'sarbacanedesktop'),$_smarty_tpl);?>
</p>
		<div class="sd_title_separator_account_offer"></div>
	</div>
	<div class="sd_info_container">
		<div class="sd_info_container_left">
			<div>
				<p class="sd_info_title"><?php echo smartyTranslate(array('s'=>'Why choose Sarbacane?','mod'=>'sarbacanedesktop'),$_smarty_tpl);?>
</p>
				<div>
					<p><?php echo smartyTranslate(array('s'=>'Create your account for free and start sending emails','mod'=>'sarbacanedesktop'),$_smarty_tpl);?>
</p>
					<p><?php echo smartyTranslate(array('s'=>'Trusted by over 20,000 users worldwide.','mod'=>'sarbacanedesktop'),$_smarty_tpl);?>
</p>
					<p><?php echo smartyTranslate(array('s'=>'Awarded Best Emailing Solution by Bsoco Awards (an index that compares emailing solutions)','mod'=>'sarbacanedesktop'),$_smarty_tpl);?>
</p>
					<p><?php echo smartyTranslate(array('s'=>'All you need to succeed: design, customize, send, and follow-up on your campaigns','mod'=>'sarbacanedesktop'),$_smarty_tpl);?>
</p>
					<p><?php echo smartyTranslate(array('s'=>'A tech heldpdesk and a variety of resources to help: videos, tutorials, manuals, tips...','mod'=>'sarbacanedesktop'),$_smarty_tpl);?>
</p>
				</div>
			</div>
		</div>
		<div class="sd_info_container_right">
			<div>
				<p class="sd_info_title"><?php echo smartyTranslate(array('s'=>'Need help?','mod'=>'sarbacanedesktop'),$_smarty_tpl);?>
</p>
				<div>
					<p><?php echo smartyTranslate(array('s'=>'Email:','mod'=>'sarbacanedesktop'),$_smarty_tpl);?>
 <?php echo smartyTranslate(array('s'=>'support@sarbacane.com','mod'=>'sarbacanedesktop'),$_smarty_tpl);?>
</p>
					<p><?php echo smartyTranslate(array('s'=>'Tel:','mod'=>'sarbacanedesktop'),$_smarty_tpl);?>
 <?php echo smartyTranslate(array('s'=>'+33(0) 328 328 040','mod'=>'sarbacanedesktop'),$_smarty_tpl);?>
</p>
					<p>
						<?php echo smartyTranslate(array('s'=>'Website:','mod'=>'sarbacanedesktop'),$_smarty_tpl);?>

						<a href="<?php echo smartyTranslate(array('s'=>'http://www.sarbacane.com/?utm_source=module-prestashop&utm_medium=plugin&utm_content=lien-sarbacane&utm_campaign=prestashop','mod'=>'sarbacanedesktop'),$_smarty_tpl);?>
" target="_blank"><?php echo smartyTranslate(array('s'=>'http://www.sarbacane.com','mod'=>'sarbacanedesktop'),$_smarty_tpl);?>
</a>
					</p>
				</div>
			</div>
		</div>
	</div>
	<div id="sd_step"></div>
	<div id="sd_step1" class="sd_step<?php if ($_smarty_tpl->tpl_vars['displayed_step']->value==1) {?> sd_show_step<?php }?>">
		<p class="sd_step_title"><?php echo smartyTranslate(array('s'=>'How to set up the module?','mod'=>'sarbacanedesktop'),$_smarty_tpl);?>
</p>
		<div class="sd_step_line"></div>
		<p class="sd_step1_instruction"><?php echo smartyTranslate(array('s'=>'Do you already have a Sarbacane Desktop account?','mod'=>'sarbacanedesktop'),$_smarty_tpl);?>
</p>
		<form autocomplete="off" action="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['sd_submit_url']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" method="post">
			<p class="sd_step1_selection">
				<span>
					<input onclick="sdUserYesNoDisplayButton('yes')" type="radio" id="sd_user_click_yes" name="sd_is_user" value="yes"<?php if ($_smarty_tpl->tpl_vars['sd_is_user']->value=='yes') {?> checked="checked"<?php }?>/>
					<label for="sd_user_click_yes"><?php echo smartyTranslate(array('s'=>'Yes','mod'=>'sarbacanedesktop'),$_smarty_tpl);?>
</label>
				</span>
				<span>
					<input onclick="sdUserYesNoDisplayButton('no')" type="radio" id="sd_user_click_no" name="sd_is_user" value="no"<?php if ($_smarty_tpl->tpl_vars['sd_is_user']->value=='no') {?> checked="checked"<?php }?>/>
					<label for="sd_user_click_no"><?php echo smartyTranslate(array('s'=>'No','mod'=>'sarbacanedesktop'),$_smarty_tpl);?>
</label>
				</span>
			</p>
			<div class="sd_step_buttons">
				<div class="sd_step_buttons_right">
					<input type="hidden" name="submit_is_user" value="1"/>
					<input type="hidden" name="sd_form_key" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['sd_form_key']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"/>
					<input type="submit" class="sd_button<?php if ($_smarty_tpl->tpl_vars['sd_is_user']->value=='') {?> sd_step1_button<?php }?>" value="<?php echo smartyTranslate(array('s'=>'Next','mod'=>'sarbacanedesktop'),$_smarty_tpl);?>
"/>
				</div>
			</div>
		</form>
	</div>
	<div id="sd_step2" class="sd_step<?php if ($_smarty_tpl->tpl_vars['displayed_step']->value==2) {?> sd_show_step<?php }?>">
		<p class="sd_step_title"><?php echo smartyTranslate(array('s'=>'How to set up the module?','mod'=>'sarbacanedesktop'),$_smarty_tpl);?>
</p>
		<div class="sd_step_line"></div>
		<p class="sd_step2_instruction"><?php echo smartyTranslate(array('s'=>'Select your shop and pick your settings','mod'=>'sarbacanedesktop'),$_smarty_tpl);?>
</p>
		<form autocomplete="off" action="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['sd_submit_url']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" method="post">
			<div class="sd_step2_selection">
				<?php  $_smarty_tpl->tpl_vars['store'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['store']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['stores_array']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['store']->key => $_smarty_tpl->tpl_vars['store']->value) {
$_smarty_tpl->tpl_vars['store']->_loop = true;
?>
				<div class="sd_step2_selection_list">
					<p class="sd_step2_selection_shop_title"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['store']->value['name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</p>
					<div class="sd_step2_selection_shop">
						<?php if ($_smarty_tpl->tpl_vars['general_configuration']->value<3||in_array(($_smarty_tpl->tpl_vars['store']->value['id_shop']).('N0'),$_smarty_tpl->tpl_vars['list_configuration']->value)) {?>
							<?php $_smarty_tpl->tpl_vars['checked_boolean_newsletter'] = new Smarty_variable(true, null, 0);?>
						<?php } else { ?>
							<?php $_smarty_tpl->tpl_vars['checked_boolean_newsletter'] = new Smarty_variable(false, null, 0);?>
						<?php }?>
						<div class="sd_step2_selection_shop_input">
							<input type="checkbox" name="id_shop[]" <?php if ($_smarty_tpl->tpl_vars['checked_boolean_newsletter']->value==true) {?>checked="checked" <?php }?>value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['store']->value['id_shop'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
N0"/>&nbsp;
						</div>
						<div class="sd_step2_selection_shop_text">
							<?php echo smartyTranslate(array('s'=>'Create a list in Sarbacane Desktop with newsletter opt-ins','mod'=>'sarbacanedesktop'),$_smarty_tpl);?>

						</div>
					</div>
					<div class="sd_step2_selection_shop">
						<?php if ($_smarty_tpl->tpl_vars['general_configuration']->value<3||in_array(($_smarty_tpl->tpl_vars['store']->value['id_shop']).('C0'),$_smarty_tpl->tpl_vars['list_configuration']->value)||in_array(($_smarty_tpl->tpl_vars['store']->value['id_shop']).('C1'),$_smarty_tpl->tpl_vars['list_configuration']->value)) {?>
							<?php $_smarty_tpl->tpl_vars['checked_boolean_customer'] = new Smarty_variable(true, null, 0);?>
						<?php } else { ?>
							<?php $_smarty_tpl->tpl_vars['checked_boolean_customer'] = new Smarty_variable(false, null, 0);?>
						<?php }?>
						<?php if (in_array(($_smarty_tpl->tpl_vars['store']->value['id_shop']).('C1'),$_smarty_tpl->tpl_vars['list_configuration']->value)) {?>
							<?php $_smarty_tpl->tpl_vars['checked_value_customer'] = new Smarty_variable(($_smarty_tpl->tpl_vars['store']->value['id_shop']).('C1'), null, 0);?>
						<?php } else { ?>
							<?php $_smarty_tpl->tpl_vars['checked_value_customer'] = new Smarty_variable(($_smarty_tpl->tpl_vars['store']->value['id_shop']).('C0'), null, 0);?>
						<?php }?>
						<div class="sd_step2_selection_shop_input">
							<input id="id_shop_<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['store']->value['id_shop'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
C" type="checkbox" name="id_shop[]" onclick="changeOptionOrdersDataDisplay('<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['store']->value['id_shop'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
C', this.checked)" <?php if ($_smarty_tpl->tpl_vars['checked_boolean_customer']->value==true) {?>checked="checked" <?php }?>value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['checked_value_customer']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"/>&nbsp;
						</div>
						<div class="sd_step2_selection_shop_text">
							<?php echo smartyTranslate(array('s'=>'Create a list in Sarbacane Desktop with your clients who have an account or who have placed an order online','mod'=>'sarbacanedesktop'),$_smarty_tpl);?>

						</div>
					</div>
					<div class="sd_step2_selection_shop_option">
						<?php if (in_array(($_smarty_tpl->tpl_vars['store']->value['id_shop']).('C1'),$_smarty_tpl->tpl_vars['list_configuration']->value)) {?>
							<?php $_smarty_tpl->tpl_vars['checked_value_customer_data'] = new Smarty_variable(($_smarty_tpl->tpl_vars['store']->value['id_shop']).('C1'), null, 0);?>
						<?php } else { ?>
							<?php $_smarty_tpl->tpl_vars['checked_value_customer_data'] = new Smarty_variable(($_smarty_tpl->tpl_vars['store']->value['id_shop']).('C0'), null, 0);?>
						<?php }?>
						<?php if (in_array(($_smarty_tpl->tpl_vars['store']->value['id_shop']).('C1'),$_smarty_tpl->tpl_vars['list_configuration']->value)) {?>
							<?php $_smarty_tpl->tpl_vars['checked_boolean_customer_data'] = new Smarty_variable(true, null, 0);?>
						<?php } else { ?>
							<?php $_smarty_tpl->tpl_vars['checked_boolean_customer_data'] = new Smarty_variable(false, null, 0);?>
						<?php }?>
						<div class="sd_step2_selection_shop_input">
							<input id="sd_customer_data_<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['store']->value['id_shop'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
C" type="checkbox" <?php if ($_smarty_tpl->tpl_vars['checked_boolean_customer']->value==false) {?>disabled="disabled" <?php }?>onclick="changeOptionOrdersData('<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['store']->value['id_shop'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
C', this.checked)" <?php if ($_smarty_tpl->tpl_vars['checked_boolean_customer_data']->value==true) {?>checked="checked" <?php }?>value=""/>&nbsp;
						</div>
						<div class="sd_step2_selection_shop_text">
							<?php echo smartyTranslate(array('s'=>'Add order data (date, amount, etc...)','mod'=>'sarbacanedesktop'),$_smarty_tpl);?>

						</div>
						<div onclick="sdInfoDataOrdersClick('<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['store']->value['id_shop'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
C')" onmouseover="sdInfoDataOrdersHover('<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['store']->value['id_shop'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
C')" onmouseout="sdInfoDataOrdersOut('<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['store']->value['id_shop'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
C')" class="sd_step2_info"></div>
					</div>
				</div>
				<div id="sd_tooltip_<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['store']->value['id_shop'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
C" class="sd_tooltip">
					<div>
						<?php echo smartyTranslate(array('s'=>'As you enable data from orders, you can also gather extra info in your contact list, and target your recipients in Sarbacane Desktop.','mod'=>'sarbacanedesktop'),$_smarty_tpl);?>

						<br/><?php echo smartyTranslate(array('s'=>'Below are pieces of information that will be added to your contact list:','mod'=>'sarbacanedesktop'),$_smarty_tpl);?>

						<br/><?php echo smartyTranslate(array('s'=>'- Date of first order','mod'=>'sarbacanedesktop'),$_smarty_tpl);?>

						<br/><?php echo smartyTranslate(array('s'=>'- Date of latest order','mod'=>'sarbacanedesktop'),$_smarty_tpl);?>

						<br/><?php echo smartyTranslate(array('s'=>'- Total number of orders','mod'=>'sarbacanedesktop'),$_smarty_tpl);?>

						<br/><?php echo smartyTranslate(array('s'=>'- Total amount of orders','mod'=>'sarbacanedesktop'),$_smarty_tpl);?>

						<br/><?php echo smartyTranslate(array('s'=>'- Amount of the cheapest order','mod'=>'sarbacanedesktop'),$_smarty_tpl);?>

						<br/><?php echo smartyTranslate(array('s'=>'- Amount of the most expensive order','mod'=>'sarbacanedesktop'),$_smarty_tpl);?>

						<br/><?php echo smartyTranslate(array('s'=>'- Average amount of the orders placed','mod'=>'sarbacanedesktop'),$_smarty_tpl);?>

					</div>
				</div>
				<?php } ?>
			</div>
			<div class="sd_step_buttons">
				<div class="sd_step_buttons_left">
					<input type="button" onclick="sdDisplayStep(1)" value="<?php echo smartyTranslate(array('s'=>'Previous','mod'=>'sarbacanedesktop'),$_smarty_tpl);?>
"/>
				</div>
				<div class="sd_step_buttons_right">
					<input type="hidden" name="submit_configuration" value="1"/>
					<input type="hidden" name="sd_form_key" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['sd_form_key']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"/>
					<input type="submit" class="sd_button" value="<?php echo smartyTranslate(array('s'=>'Next','mod'=>'sarbacanedesktop'),$_smarty_tpl);?>
"/>
				</div>
			</div>
		</form>
	</div>
	<div id="sd_step3" class="sd_step<?php if ($_smarty_tpl->tpl_vars['displayed_step']->value==3) {?> sd_show_step<?php }?>">
		<p class="sd_step_title"><?php echo smartyTranslate(array('s'=>'How to set up the module?','mod'=>'sarbacanedesktop'),$_smarty_tpl);?>
</p>
		<div class="sd_step_line"></div>
		<div class="sd_step3_instruction">
			<?php if ($_smarty_tpl->tpl_vars['sd_is_user']->value=='no') {?>
			<p>1/ <a href="<?php echo smartyTranslate(array('s'=>'https://www.sarbacane.com/ws/soft-redirect.asp?key=heXmrxBEUO&com=PrestaShopInfo','mod'=>'sarbacanedesktop'),$_smarty_tpl);?>
" target="_blank"><?php echo smartyTranslate(array('s'=>'Download and install Sarbacane','mod'=>'sarbacanedesktop'),$_smarty_tpl);?>
</a></p>
			<p>2/ <?php echo smartyTranslate(array('s'=>'Create your free account','mod'=>'sarbacanedesktop'),$_smarty_tpl);?>
</p>
			<p>3/ <?php echo smartyTranslate(array('s'=>'Enable the Prestashop extension in our extensions menu, and then fill in the following fields:','mod'=>'sarbacanedesktop'),$_smarty_tpl);?>
</p>
			<?php } elseif ($_smarty_tpl->tpl_vars['sd_is_user']->value=='yes') {?>
			<p><?php echo smartyTranslate(array('s'=>'Enable the Prestashop extension in our extensions menu, and then fill in the following fields:','mod'=>'sarbacanedesktop'),$_smarty_tpl);?>
</p>
			<?php }?>
			<form autocomplete="off" action="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['sd_submit_url']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" method="post">
				<div class="sd_key_container">
					<p><?php echo smartyTranslate(array('s'=>'Url','mod'=>'sarbacanedesktop'),$_smarty_tpl);?>
</p>
					<input value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['website_url']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" onclick="this.select()" type="text" readonly/>
				</div>
				<div class="sd_key_container">
					<p><?php echo smartyTranslate(array('s'=>'Key','mod'=>'sarbacanedesktop'),$_smarty_tpl);?>
</p>
					<input value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['key_for_synchronisation']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" onclick="this.select()" type="text" readonly/>
				</div>
				<p class="sd_key_button_container">
					<input type="hidden" name="submit_parameter_key" value="1"/>
					<input type="hidden" name="sd_form_key" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['sd_form_key']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"/>
					<input type="submit" class="sd_key_button" value="<?php echo smartyTranslate(array('s'=>'Generate a new key','mod'=>'sarbacanedesktop'),$_smarty_tpl);?>
"/>
				</p>
			</form>
		</div>
		<div class="sd_step_buttons">
			<div class="sd_step_buttons_left">
				<input type="button" onclick="sdDisplayStep(2)" value="<?php echo smartyTranslate(array('s'=>'Previous','mod'=>'sarbacanedesktop'),$_smarty_tpl);?>
"/>
			</div>
			<div class="sd_step3_right">
				<?php echo smartyTranslate(array('s'=>'Read more','mod'=>'sarbacanedesktop'),$_smarty_tpl);?>
, <a href="<?php echo smartyTranslate(array('s'=>'http://www.sarbacane.com/faq/extensions/configuration-plugin-prestashop/?utm_source=module-prestashop&utm_medium=plugin&utm_content=lien-sarbacane&utm_campaign=prestashop','mod'=>'sarbacanedesktop'),$_smarty_tpl);?>
" target="_blank"><?php echo smartyTranslate(array('s'=>'in the help section online','mod'=>'sarbacanedesktop'),$_smarty_tpl);?>
</a>
			</div>
		</div>
	</div>
</div>
<?php }} ?>
