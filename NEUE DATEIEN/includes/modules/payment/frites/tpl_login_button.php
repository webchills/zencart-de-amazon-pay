<?php
/**
 * AMAZON FRITES Login button display template
 *
 * @package paymentMethod
 * @copyright Copyright 2003-2014 Webiprog
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart-pro.at/license/2_0.txt GNU Public License V2.0
 * @Author: Webiprog  Mon Mar 21 18:36:04 2016 +0200 $ 
 */



include_once((IS_ADMIN_FLAG === true ? DIR_FS_CATALOG_MODULES : DIR_WS_MODULES) . 'payment/frites/frites_functions.php');

$only_login = false;

$frites_enabled = (defined('MODULE_PAYMENT_FRITES_STATUS') && MODULE_PAYMENT_FRITES_STATUS == 'True');

if ($frites_enabled) {
	if (isset($_SESSION['customer_id']) && (int)$_SESSION['customer_id'] > 0) {
		//zencart customer is logged
	} else {
		//clear frites login
		if (isset($_SESSION['frites'])) {
			unset($_SESSION['frites']);
		}

		if (isset($_SESSION['frites_login'])) {
			unset($_SESSION['frites_login']);
		}

		if (isset($_COOKIE['frites_Login_state_cache'])) {
			//setcookie('frites_Login_state_cache', '', time()-36000, '/', $_SERVER['HTTP_HOST']);
			unset($_COOKIE['frites_Login_state_cache']);
		}
	}

	// check if logged-in customer's address is in an acceptable zone
	/*if ((int)MODULE_PAYMENT_FRITES_ZONE > 0 && isset($_SESSION['customer_id']) && (int)$_SESSION['customer_id'] > 0) {
		$custCountryCheck = (isset($order)) ? $order->billing['country']['id'] : $_SESSION['customer_country_id'];
		$custZoneCheck = (isset($order)) ? $order->billing['zone_id'] : $_SESSION['customer_zone_id'];
		$check_flag = false;
		$sql = "SELECT zone_id FROM " . TABLE_ZONES_TO_GEO_ZONES . "
				WHERE geo_zone_id = :zoneId
				AND zone_country_id = :countryId
				ORDER BY zone_id";
		$sql = $db->bindVars($sql, ':zoneId', (int)MODULE_PAYMENT_FRITES_ZONE, 'integer');
		$sql = $db->bindVars($sql, ':countryId', $custCountryCheck, 'integer');
		$result = $db->Execute($sql);

		while (!$result->EOF) {
			if ($result->fields['zone_id'] < 1 || $result->fields['zone_id'] == $custZoneCheck) {
				$check_flag = true;
				break;
			}

			$result->MoveNext();
		}

		if (!$check_flag) {
			$frites_enabled = false;
		}
	}*/

	// TODO FIX countries and currencies
	if ((int)MODULE_PAYMENT_FRITES_ZONE > 0 && isset($_SESSION['customer_id']) && (int)$_SESSION['customer_id'] > 0) {
		$custCountryCheck = (isset($order)) ? $order->billing['country']['id'] : $_SESSION['customer_country_id'];
		$custZoneCheck = (isset($order)) ? $order->billing['zone_id'] : $_SESSION['customer_zone_id'];
		$check_flag = false;
		$sql = "SELECT zone_country_id, zone_id FROM " . TABLE_ZONES_TO_GEO_ZONES . "
				WHERE geo_zone_id = :zoneId
				/*AND zone_country_id = :countryId*/
				ORDER BY zone_id";
		$sql = $db->bindVars($sql, ':zoneId', (int)MODULE_PAYMENT_FRITES_ZONE, 'integer');
		//$sql = $db->bindVars($sql, ':countryId', $custCountryCheck, 'integer');
		$result = $db->Execute($sql);

		while (!$result->EOF) {
			if (($result->fields['zone_id'] < 1 && $result->fields['zone_country_id'] < 1) || $result->fields['zone_country_id'] == $custCountryCheck) {
				$check_flag = true;
				break;
			}

			$result->MoveNext();
		}
	}

	// cart contents qty must be >0 and value >0
	if ($_SESSION['cart']->count_contents() <= 0 || $_SESSION['cart']->total == 0) {
		$frites_enabled = false;
	}

	// Amazon module cannot be used for purchase > $10,000 USD or 5500 GBP
	/*if ( ($_SESSION['currency'] == 'USD' && $currencies->value($_SESSION['cart']->total, true, 'USD') > 10000)
	  || ($_SESSION['currency'] == 'GBP' && $currencies->value($_SESSION['cart']->total, true, 'GBP') > 5500) ) {
		$frites_enabled = false;
	}*/

	if (isset($_GET['main_page']) && ($_GET['main_page'] == 'login' || $_GET['main_page'] == 'time_out')) {
		$frites_enabled = true;
		$only_login = true;
	}
}
// if all is okay, display the button
if ($frites_enabled) {
	$links = fritesLinks();

	$frites_logged = fritesLogin();

//echo '<pre>';print_r($_SERVER);echo '</pre>';
//echo '<pre>';print_r($frites_logged);echo '</pre>';
?>

<script type='text/javascript'>
	window.onAmazonLoginReady = function() {
		amazon.Login.setClientId('<?php echo MODULE_PAYMENT_FRITES_CLIENT_ID; ?>');
	};
</script>
<script type='text/javascript' src='<?php echo $links['widget_link'] ?>?sellerId=<?php echo MODULE_PAYMENT_FRITES_MERCHANT_ID; ?>'></script>

<?php if (isset($_SESSION['customer_id']) && (int)$_SESSION['customer_id'] > 0) {
		//zencart customer is logged
	} else { ?>
<script type="text/javascript">
	try {
		amazon.Login.logout();
	} catch(e) {}
</script>
<?php } ?>

<?php
	// get default language and code array('link' => 'uk', 'code' => 'en', 'locale' => 'en_GB');
	$frites_lang = frites_get_default_language();
?>

<?php if (!$frites_logged['status']) { ?>

<?php $_SESSION['frites_login_redirect'] = $links['checkout_frites_shipping']; ?>

<div align="right" class="buttonRow">
			<div id="AmazonPayButton"></div>
			<script type="text/javascript">
				var authRequest;
				OffAmazonPayments.Button("AmazonPayButton", "<?php echo MODULE_PAYMENT_FRITES_MERCHANT_ID; ?>", {
					type:  "<?php echo ($only_login?'LwA':'PwA') ?>",
					color: "<?php echo MODULE_PAYMENT_FRITES_BUTTON_STYLE ?>",
					size:  "<?php echo MODULE_PAYMENT_FRITES_BUTTON_SIZE ?>",
					language: "<?php echo $frites_lang['locale'] ?>",
					useAmazonAddressBook: true,
					authorization: function() {
						var loginOptions = {scope: "profile postal_code payments:widget payments:shipping_address", popup: <?php echo strtolower(MODULE_PAYMENT_FRITES_POPUP) ?>};
						authRequest = amazon.Login.authorize(loginOptions, "<?php echo $links['checkout_frites_login'].($only_login?'&only_login=1':''); ?>");
					},
					onError: function(error) {
						console.error(error);
					}
				});
			</script>
</div>
<?php } else { ?>
	<?php if (isset($_SESSION['frites_login_redirect'])) {unset($_SESSION['frites_login_redirect']);} ?>
<?php 
	$image_src = "https://images-na.ssl-images-amazon.com/images/G/01/EP/offAmazonPayments/".
					$frites_lang['link'].
					"/".(MODULE_PAYMENT_FRITES_HANDLER == 'production'?'live':'sandbox')."/prod/image/lwa/".
					strtolower(MODULE_PAYMENT_FRITES_BUTTON_STYLE).
					"/".strtolower(MODULE_PAYMENT_FRITES_BUTTON_SIZE).
					"/PwA.png"; 
?>
<div align="right" class="buttonRow"><div id="AmazonPayButton">
	<img src="<?php echo $image_src ?>" style="cursor:pointer;" id="PayWithAmazon" onclick="location='<?php echo $links['checkout_frites_shipping'] ?>'" style="cursor:pointer;">
</div></div>
<?php } ?>
<?php } ?>
