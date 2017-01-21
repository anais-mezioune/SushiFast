<?php /* Smarty version Smarty-3.1.19, created on 2015-03-26 19:14:11
         compiled from "C:\wamp\www\SushiFast\modules\affinityitems\\views\templates\admin\authentication.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2408655144c73dbb481-70487074%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '19a541f923969af68be9b81a8d4b4d119bbcac69' => 
    array (
      0 => 'C:\\wamp\\www\\SushiFast\\modules\\affinityitems\\\\views\\templates\\admin\\authentication.tpl',
      1 => 1427393640,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2408655144c73dbb481-70487074',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ajaxController' => 0,
    'module_dir' => 0,
    'url' => 0,
    'prestashopToken' => 0,
    'aetoken' => 0,
    'employee' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_55144c7414bba4_72834586',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55144c7414bba4_72834586')) {function content_55144c7414bba4_72834586($_smarty_tpl) {?>

	<?php if ($_smarty_tpl->tpl_vars['ajaxController']->value) {?>
	<?php $_smarty_tpl->tpl_vars["url"] = new Smarty_variable("'index.php?controller=AEAjax&configure=affinityitems&ajax'", null, 0);?>
	<?php } else { ?>
	<?php ob_start();?><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['module_dir']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars["url"] = new Smarty_variable("'".$_tmp1."ajax/customer.php'", null, 0);?>
	<?php }?>

	<script>
		
		var e = /^[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]+$/;
		var v = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
		var n = /^[A-Za-z0-9!@#$%^&*()_]{6,20}$/;
		var r;

		function error(e) {
			$(".items-alert").hide();
			$(".items-alert").empty();
			var t = "<?php echo smartyTranslate(array('s'=>'Please enter valid data','mod'=>'affinityitems'),$_smarty_tpl);?>
 : <br>";
			for (var n = 0; n < e.length; n++) {
				var r = n + 1;
				t += "\n" + r + ". " + e[n] + "<br>";
			}
			$(".items-alert").append(t);
			$(".items-alert").slideDown();
		}

		$(document).ready(function () {
			$('#rdiscount').hide();
			$('.items-register-container').on('submit', function() {
				r = [];
				if (!v.test($("#remail").val())) {
					r[r.length] = "<?php echo smartyTranslate(array('s'=>'Please enter a valid email address','mod'=>'affinityitems'),$_smarty_tpl);?>
";
				}
				if (!n.test($("#rpassword").val())) {
					r[r.length] = "<?php echo smartyTranslate(array('s'=>'You password must be between 6 and 20 characters long.','mod'=>'affinityitems'),$_smarty_tpl);?>
";
				}
				if ($("#rcgv").attr('checked') != "checked") {
					r[r.length] = "<?php echo smartyTranslate(array('s'=>'You have to accept the terms and conditions of use','mod'=>'affinityitems'),$_smarty_tpl);?>
";
				}
				if (r.length > 0) {
					error(r);
					return false;
				} else {
					$.ajax({
						url: <?php echo $_smarty_tpl->tpl_vars['url']->value;?>
,
						type: "POST",
						async: true,
						data: {
							action: "register",
							email: $("#remail").val(),
							password: $("#rpassword").val(),
							discountCode: $("#rdiscount").val(),
							token : "<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['prestashopToken']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
",
							aetoken : '<?php echo $_smarty_tpl->tpl_vars['aetoken']->value;?>
'
						},
						success: function (e, t, n) {
							var response = jQuery.parseJSON(e);
							if(response._ok == "true") {
								location.reload();
							} else {
								r = [];
								if(typeof response._errorMessage != "undefined") {
									r[r.length] = response._errorMessage;
								} else {
									r[r.length] = "<?php echo smartyTranslate(array('s'=>'An error has occured, it seems there is no connection between your shop and our servers, please contact','mod'=>'affinityitems'),$_smarty_tpl);?>
 <a href=\'mailto:mathieu@affinity-engine.fr\'>mathieu@affinity-engine.fr</a>";
								}
								error(r);
							}
						},
						error: function (e, t, n) {
							r = [];
							r[r.length] = "<?php echo smartyTranslate(array('s'=>'An error has occured, please contact','mod'=>'affinityitems'),$_smarty_tpl);?>
 <a href=\'mailto:mathieu@affinity-engine.fr\'>mathieu@affinity-engine.fr</a>";
							error(r);		
						}
					})
}
return false;
});
});

</script>
<div class="items-wrapper">
	
	<div class="items-header">
		<div class="aelogo"></div>
	</div>
	<div class="items-alert" style="display:none;"></div>
	<div class="items-content">
		<div class="items-auth-zone">
			<div class="items-auth-container items-left">

				<div class="items-auth-register">

					<h3><?php echo smartyTranslate(array('s'=>'Sign up for 30-days free trial','mod'=>'affinityitems'),$_smarty_tpl);?>
</h3>
					<p><?php echo smartyTranslate(array('s'=>'To get a clear view of the impact on your sales ','mod'=>'affinityitems'),$_smarty_tpl);?>
</p>
					<p><?php echo smartyTranslate(array('s'=>'at the end of the trial','mod'=>'affinityitems'),$_smarty_tpl);?>
</p>
					<form class="items-register-container">
						<input type="text" class="aeinput" id="remail" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['employee']->value[0]['email'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" placeholder="<?php echo smartyTranslate(array('s'=>'Email','mod'=>'affinityitems'),$_smarty_tpl);?>
" />
						<br>
						<input type="password" class="aeinput" id="rpassword" placeholder="<?php echo smartyTranslate(array('s'=>'Password','mod'=>'affinityitems'),$_smarty_tpl);?>
" />
						<br>
						<a href="#" onClick="$(this).hide(); $('#rdiscount').show(); $('#aeregister').css('margin-top', '48px'); return false;" class="items-text-discount-code"><?php echo smartyTranslate(array('s'=>'I\'ve got a discount code','mod'=>'affinityitems'),$_smarty_tpl);?>
</a>
						<input type="text" class="aeinput" id="rdiscount" placeholder="<?php echo smartyTranslate(array('s'=>'Discount code','mod'=>'affinityitems'),$_smarty_tpl);?>
" />

						<div class="ae-cgv">
							<input type="checkbox" id="rcgv">
							<?php echo smartyTranslate(array('s'=>'I accept the','mod'=>'affinityitems'),$_smarty_tpl);?>
 <a target='_blank' href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['module_dir']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
resources/pdf/contract.pdf" ><?php echo smartyTranslate(array('s'=>'terms and conditions of use.','mod'=>'affinityitems'),$_smarty_tpl);?>
</a>
						</div>
						<input id="aeregister" class="items-button items-green" type="submit" value="<?php echo smartyTranslate(array('s'=>'Install affinity items','mod'=>'affinityitems'),$_smarty_tpl);?>
" />
					</form>

				</div>

			</div>
			
			<div class="items-auth-presentation items-right">
				
				<div class="items-auth-presentation-content">
					<h3><?php echo smartyTranslate(array('s'=>'Boost your transformation rate','mod'=>'affinityitems'),$_smarty_tpl);?>
</h3>
					<p><?php echo smartyTranslate(array('s'=>'Suggest automatically, on each page,','mod'=>'affinityitems'),$_smarty_tpl);?>
</p>
					<p><?php echo smartyTranslate(array('s'=>'a selection of products that match each visitor needs.','mod'=>'affinityitems'),$_smarty_tpl);?>
</p>
					<div class="items-video">
						<span class="items-video-promotion"><object type="text/html" data="http://www.youtube.com/embed/rxn3fHYNL3s" width="340" height="210"></object></span>
					</div>
					<p><?php echo smartyTranslate(array('s'=>'Up to 60','mod'=>'affinityitems'),$_smarty_tpl);?>
% <?php echo smartyTranslate(array('s'=>'of products sold','mod'=>'affinityitems'),$_smarty_tpl);?>
</p>
					<p><?php echo smartyTranslate(array('s'=>'have been recommended by affinity items.','mod'=>'affinityitems'),$_smarty_tpl);?>
</p>
					<a class="items-button items-purple" href="http://addons.prestashop.com/fr/ventes-croisees-cross-selling/17491-affinityitems.html"><?php echo smartyTranslate(array('s'=>'More about','mod'=>'affinityitems'),$_smarty_tpl);?>
</a>
				</div>

			</div>
			
			<div class="clear"></div>

		</div>
	</div>

</div><?php }} ?>
