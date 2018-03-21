<?php
/**
 * Page Template
 *
 * Loaded automatically by index.php?main_page=checkout_frites_payment<br />
 * Displays payment selection for Amazon Checkout
 *
 * @package templateSystem
 * @copyright Copyright 2003-2014 Webiprog
 * @copyright Copyright 2003-2018 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart-pro.at/license/2_0.txt GNU Public License V2.0
 * @version $Id: tpl_checkout_frites_payment_default.php 2018-03-21 09:08:16Z webchills $
 */
?>
<div class="centerColumn" id="checkoutPayment">
<?php echo zen_draw_form('checkout_payment', $links['checkout_frites_payment'], 'post'); ?>
<?php echo zen_draw_hidden_field('action', 'submit'); ?>

<h1 id="checkoutPaymentHeading"><?php echo HEADING_TITLE; ?></h1>

<?php if ($messageStack->size('redemptions') > 0) echo $messageStack->output('redemptions'); ?>
<?php if ($messageStack->size('checkout') > 0) echo $messageStack->output('checkout'); ?>
<?php if ($messageStack->size('checkout_payment') > 0) echo $messageStack->output('checkout_payment'); ?>


<?php
  if (DISPLAY_CONDITIONS_ON_CHECKOUT == 'true') {
?>
<fieldset>
<legend><?php echo TABLE_HEADING_CONDITIONS; ?></legend>
<div><?php echo TEXT_CONDITIONS_DESCRIPTION;?></div>
<?php echo  zen_draw_checkbox_field('conditions', '1', false, 'id="conditions"');?>
<label class="checkboxLabel" for="conditions"><?php echo TEXT_CONDITIONS_CONFIRM; ?></label>
</fieldset>
<?php
  }
?>
<input id="fritesOrderReferenceId" type="hidden" name="frites[OrderReferenceId]" value="<?php echo isset($_SESSION['frites']['OrderReferenceId']) ? $_SESSION['frites']['OrderReferenceId'] : '' ?>" />
<div align="center">
<script type='text/javascript'>
	window.onAmazonLoginReady = function() {
		amazon.Login.setClientId('<?php echo MODULE_PAYMENT_FRITES_CLIENT_ID; ?>');
	};
</script>
<script type='text/javascript' src='<?php echo $links['widget_link'] ?>?sellerId=<?php echo MODULE_PAYMENT_FRITES_MERCHANT_ID; ?>'></script>

<div id="walletWidgetDiv"></div>

<?php
	// get default language and code array('link' => 'uk', 'code' => 'en', 'locale' => 'en_GB');
	$frites_lang = frites_get_default_language();
?>

<script type='text/javascript'>
	new OffAmazonPayments.Widgets.Wallet({
		sellerId: '<?php echo MODULE_PAYMENT_FRITES_MERCHANT_ID; ?>',
		language: '<?php echo $frites_lang['locale'] ?>',
		design: {
			size: {width:'<?php echo MODULE_PAYMENT_FRITES_PAYMENTMETHOD_WIDTH ?>', height:'<?php echo MODULE_PAYMENT_FRITES_PAYMENTMETHOD_HEIGHT ?>'}
		},
		<?php if (!isset($_SESSION['frites']['OrderReferenceId'])) { ?>
		onOrderReferenceCreate: function(orderReference) {
			fritesOrderReferenceId = orderReference.getAmazonOrderReferenceId();
			document.getElementById('fritesOrderReferenceId').value = fritesOrderReferenceId;
			<?php if (MODULE_PAYMENT_FRITES_IPN_DEBUG == 'Log File') { ?>
				console.log(fritesOrderReferenceId);
			<?php } ?>
		},
		<?php } ?>
		onPaymentSelect: function(orderReference) {
			// Display your custom complete purchase button
			if (document.getElementById('fritesOrderReferenceId').value) {
				document.getElementById('continue-box').style.display = "block";

				/*OffAmazonPayments.jQuery.ajax({
					url: '<?php echo $links['checkout_frites_shipping'] ?>',
					data: 'function=GetOrderReferenceDetails&OrderReferenceId='+document.getElementById('fritesOrderReferenceId').value,
					type: 'post',
					async: false,
					dataType: 'json',
					beforeSend: function() {},
					complete: function() {},
					success: function(json) {},
					error: function(xhr, ajaxOptions, thrownError) {
						console.error(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
					}
				});*/
			}
		},
		onError: function(error) {
			console.error(error);
		}
	}).bind("walletWidgetDiv");
</script>
</div>


<fieldset id="checkoutOrderTotals">
<legend id="checkoutPaymentHeadingTotal"><?php echo TEXT_YOUR_TOTAL; ?></legend>
<?php
  if (MODULE_ORDER_TOTAL_INSTALLED) {
    $order_totals = $order_total_modules->process();
?>
<?php $order_total_modules->output(); ?>
<?php
  }
?>
</fieldset>


<div id="shipping-box">

<?php if (defined('MODULE_PAYMENT_FRITES_HANDLER') && MODULE_PAYMENT_FRITES_HANDLER == 'sandbox') { ?>

<?php
	$States = array(
		'Closed',
		'Declined',
		'Pending'
	);
	$ReasonCodes = array(
		'AmazonClosed',
		'InvalidPaymentMethod',
		'AmazonRejected',
		'ExpiredUnused',
		'TransactionTimedOut'
	);
	$PaymentMethodUpdateTimeInMins = array(
		'1',
		'5',
		'30',
		'60',
		'120',
		'240'
	);
	$ExpirationTimeInMins = array(
		'1',
		'5',
		'30',
		'60'
	);
?>

<br /><a href="http://docs.developer.amazonservices.com/en_DE/apa_guide/APAGuide_Testing.html" target="_blank"><h2>Authorization SandboxSimulation:</h2></a> <br />
<b>State:</b>
<select name="frites[SandboxSimulation][State]">
	<option value=""></option>
	<?php foreach ($States as $result) { ?>
	<?php if (isset($_SESSION['frites']['SandboxSimulation']['State']) && $_SESSION['frites']['SandboxSimulation']['State'] == $result) { ?>
	<option value="<?php echo $result ?>" selected="selected"><?php echo $result ?></option>
	<?php } else { ?>
	<option value="<?php echo $result ?>"><?php echo $result ?></option>
	<?php } ?>
	<?php } ?>
</select>
<br /><b>State:</b>
<select name="frites[SandboxSimulation][ReasonCode]">
	<option value=""></option>
	<?php foreach ($ReasonCodes as $result) { ?>
	<?php if (isset($_SESSION['frites']['SandboxSimulation']['ReasonCode']) && $_SESSION['frites']['SandboxSimulation']['ReasonCode'] == $result) { ?>
	<option value="<?php echo $result ?>" selected="selected"><?php echo $result ?></option>
	<?php } else { ?>
	<option value="<?php echo $result ?>"><?php echo $result ?></option>
	<?php } ?>
	<?php } ?>
</select>
<br /><b>PaymentMethodUpdateTimeInMins:</b>
<select name="frites[SandboxSimulation][PaymentMethodUpdateTimeInMins]">
	<option value=""></option>
	<?php foreach ($PaymentMethodUpdateTimeInMins as $result) { ?>
	<?php if (isset($_SESSION['frites']['SandboxSimulation']['PaymentMethodUpdateTimeInMins']) && $_SESSION['frites']['SandboxSimulation']['PaymentMethodUpdateTimeInMins'] == $result) { ?>
	<option value="<?php echo $result ?>" selected="selected"><?php echo $result ?></option>
	<?php } else { ?>
	<option value="<?php echo $result ?>"><?php echo $result ?></option>
	<?php } ?>
	<?php } ?>
</select>
<br /><b>ExpirationTimeInMins:</b>
<select name="frites[SandboxSimulation][ExpirationTimeInMins]">
	<option value=""></option>
	<?php foreach ($ExpirationTimeInMins as $result) { ?>
	<?php if (isset($_SESSION['frites']['SandboxSimulation']['ExpirationTimeInMins']) && $_SESSION['frites']['SandboxSimulation']['ExpirationTimeInMins'] == $result) { ?>
	<option value="<?php echo $result ?>" selected="selected"><?php echo $result ?></option>
	<?php } else { ?>
	<option value="<?php echo $result ?>"><?php echo $result ?></option>
	<?php } ?>
	<?php } ?>
</select>
<br/>
<?php } ?>

</div>

<div id="coupon-box" style="display:none">

<?php
  $selection =  $order_total_modules->credit_selection();
  if (sizeof($selection)>0) {
    for ($i=0, $n=sizeof($selection); $i<$n; $i++) {
      if ($_GET['credit_class_error_code'] == $selection[$i]['id']) {
?>
<div class="messageStackError"><?php echo zen_output_string_protected($_GET['credit_class_error']); ?></div>

<?php
      }
      for ($j=0, $n2=sizeof($selection[$i]['fields']); $j<$n2; $j++) {
?>
<fieldset>
<legend><?php echo $selection[$i]['module']; ?></legend>
<?php echo $selection[$i]['redeem_instructions']; ?>
<div class="gvBal larger"><?php echo $selection[$i]['checkbox']; ?></div>
<label class="inputLabel"<?php echo $selection[$i]['fields'][$j]['tag'] ? ' for="'.$selection[$i]['fields'][$j]['tag'].'"': ''; ?>><?php echo $selection[$i]['fields'][$j]['title']; ?></label>
<?php echo $selection[$i]['fields'][$j]['field']; ?>
</fieldset>
<?php
      }
    }
?>

<?php
    }
?>

</div>

<fieldset>
<legend><?php echo TABLE_HEADING_COMMENTS; ?></legend>
<?php echo zen_draw_textarea_field('comments', '45', '3'); ?>
</fieldset>
<div id="continue-box" style="display:none">
    <div class="buttonRow forward"><?php echo zen_image_submit(BUTTON_IMAGE_CONTINUE_CHECKOUT, BUTTON_CONTINUE_ALT, 'onclick="submitFunction('.zen_user_has_gv_account($_SESSION['customer_id']).','.$order->info['total'].')"'); ?></div>
    <div class="buttonRow back"><?php echo TITLE_CONTINUE_CHECKOUT_PROCEDURE . '<br />' . TEXT_CONTINUE_CHECKOUT_PROCEDURE; ?></div>
</div>

</form>
</div>
