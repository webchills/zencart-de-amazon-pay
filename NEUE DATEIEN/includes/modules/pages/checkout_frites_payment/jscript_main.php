<?php
/**
 * jscript_main
 *
 * @package page
 * @copyright Copyright 2003-2017 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart-pro.at/license/2_0.txt GNU Public License V2.0
 * @version $Id: jscript_main.php for Amazon Pay 2017-12-17 13:49:16Z webchills $
 */
?>
<script type="text/javascript"><!--
var selected;
var submitter = null;

function concatExpiresFields(fields) {
    return $(":input[name=" + fields[0] + "]").val() + $(":input[name=" + fields[1] + "]").val();
}
function popupWindow(url) {
  window.open(url,'popupWindow','toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=yes,resizable=yes,copyhistory=no,width=450,height=320,screenX=150,screenY=150,top=150,left=150')
}
function couponpopupWindow(url) {
  window.open(url,'couponpopupWindow','toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=yes,resizable=yes,copyhistory=no,width=450,height=320,screenX=150,screenY=150,top=150,left=150')
}
function submitFunction($gv,$total) {
  if ($gv >=$total) {
    submitter = 1;	
  }
}

function methodSelect(theMethod) {
  if (document.getElementById(theMethod)) {
    document.getElementById(theMethod).checked = 'checked';
  }
}

//--></script>