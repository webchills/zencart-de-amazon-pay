<?php
define('MODULE_PAYMENT_FRITES_TEXT_TITLE', 'Mit Amazon bezahlen');
define('MODULE_PAYMENT_FRITES_TEXT_ADMIN_TITLE', 'Mit Amazon bezahlen');
define('MODULE_PAYMENT_FRITES_TEXT_DESCRIPTION', '<br/><img src="images/amazonpaylogo.png" alt="Amazon Pay"/><br/><br/><a href="https://pay.amazon.com/de/merchant" target="_blank">Infos zu Amazon Pay</a>');
define('MODULE_PAYMENT_FRITES_TEXT_LOGIN', 'Amazon Login:');
define('MODULE_PAYMENT_FRITES_TEXT_PASSWORD', 'Passwort:');

define('MODULE_PAYMENT_FRITES_TEXT_ORDER_REFERENCE_ID', 'OrderReferenceId:');
define('MODULE_PAYMENT_FRITES_TEXT_AUTHORIZATION_ID', 'AuthorizationId:');
define('MODULE_PAYMENT_FRITES_TEXT_CAPTURE_ID', 'CaptureId:');
define('MODULE_PAYMENT_FRITES_TEXT_REFUND_ID', 'RefundId:');

define('MODULE_PAYMENT_FRITES_BUTTON_REFRESH', 'Neu laden');
define('MODULE_PAYMENT_FRITES_BUTTON_REFUND', 'Rückzahlung');
define('MODULE_PAYMENT_FRITES_BUTTON_CANCEL', 'Stornieren');
define('MODULE_PAYMENT_FRITES_BUTTON_CLOSE', 'Schließen');
define('MODULE_PAYMENT_FRITES_BUTTON_COLLECT', 'Annehmen');
define('MODULE_PAYMENT_FRITES_BUTTON_AUTHORIZE', 'Autorisieren');

define('MODULE_PAYMENT_FRITES_TEXT_ERROR_LOGIN', 'Fehler: Bitte melden Sie sich mit Amazon an!');
define('MODULE_PAYMENT_FRITES_TEXT_ERROR_ORDER_REFERENCE', 'Fehler: No OrderReferenceId!');
define('MODULE_PAYMENT_FRITES_TEXT_ERROR_AUTHORIZATION', 'Fehler: Autorisierung fehlgeschlagen! Status: ');
define('MODULE_PAYMENT_FRITES_TEXT_ERROR_SELECT_DIFFERENT_PAYMENT', '<br />Es gab ein Problem mit der ausgewählten Zahlungsart aus ihrem Amazon Konto. Bitte ändern Sie die gewünschte Zahlungsart oder legen Sie eine neue Zahlungsart an.');

define('MODULE_PAYMENT_FRITES_BUTTON_SIZE_TITLE','Größe des Kassen-Buttons');
define('MODULE_PAYMENT_FRITES_BUTTON_SIZE_DESC','klein (76px x 32px) = small<br/>mittelgroß (101px x 46px) = medium<br/>groß (152px x 64px) = large<br/>extragroß (202px x 92px) = x-large');

define('MODULE_PAYMENT_FRITES_BUTTON_STYLE_TITLE','Button-Stil');
define('MODULE_PAYMENT_FRITES_BUTTON_STYLE_DESC','Wählen Sie einen der Amazon-Buttons aus');

define('MODULE_PAYMENT_FRITES_AUTHORIZATION_TITLE','Zahlungsautorisierung auf Auftragsbestätigung');
define('MODULE_PAYMENT_FRITES_AUTHORIZATION_DESC','Im Vergleich mit der Zahlungsmethode reserviert das <a href="http://docs.developer.amazonservices.com/en_US/off_amazon_payments/OffAmazonPayments_Authorize.html" target="_blank">Autorisierungs-Verfahren</a> einen bestimmten Betrag. Um die Zahlung abzuwickeln, brauchen Sie CaptureNow auf true zu setzen oder das Capture-Verfahren aufzurufen, nachdem der aktuelle Vorgang abgeschlossen ist. Die Autorisierung ist für eine in der Rückantwort festgelegte Zeitperiode gültig. Nach Ablauf der angegebenen Zeitperiode ist die Autorisierung nicht mehr gültig. In diesem Fall wird Ihnen eine Benachrichtigung angezeigt, ob Sie Instant Payment Notifications richtig konfiguriert haben.');

define('MODULE_PAYMENT_FRITES_CAPTURE_TITLE','Wann soll dem Kunden die Zahlung bei Amazon abgezogen werden?');
define('MODULE_PAYMENT_FRITES_CAPTURE_DESC','Voreinstellung auf when the order is placed lassen! <br/>Die Einstellung when the order is shipped wurde mit diesem Modul nicht getestet.');

define('MODULE_PAYMENT_FRITES_ORDER_STATUS_ID_TITLE','Standard Bestellstatus');
define('MODULE_PAYMENT_FRITES_ORDER_STATUS_ID_DESC','Amazon-Bestellstatus angeben');

define('MODULE_PAYMENT_FRITES_ORDER_STATUS_AUTHORIZED_ID_TITLE','Autorisierter Bestellstatus');
define('MODULE_PAYMENT_FRITES_ORDER_STATUS_AUTHORIZED_ID_DESC','Autorisierten Bestellstatus angeben');

define('MODULE_PAYMENT_FRITES_ORDER_STATUS_CAPTURED_ID_TITLE','Erfasster Bestellstatus');
define('MODULE_PAYMENT_FRITES_ORDER_STATUS_CAPTURED_ID_DESC','Erfassten Bestellstatus angeben');

define('MODULE_PAYMENT_FRITES_ORDER_STATUS_CLOSED_ID_TITLE','Erfüllter Bestellstatus');
define('MODULE_PAYMENT_FRITES_ORDER_STATUS_CLOSED_ID_DESC','Erfüllten Bestellstatus angeben');

define('MODULE_PAYMENT_FRITES_ORDER_STATUS_CANCELED_ID_TITLE','Stornierter Bestellstatus');
define('MODULE_PAYMENT_FRITES_ORDER_STATUS_CANCELED_ID_DESC','Stornierten Bestellstatus angeben');

define('MODULE_PAYMENT_FRITES_ORDER_STATUS_REFUNDED_ID_TITLE','Rückgezahlter Bestellstatus');
define('MODULE_PAYMENT_FRITES_ORDER_STATUS_REFUNDED_ID_DESC','Rückgezahlten Bestellstatus angeben');

define('EMAIL_EC_ACCOUNT_INFORMATION', 'Ihre Konto-Login-Daten:');

define('MODULE_PAYMENT_FRITES_STATUS_TITLE', 'Bezahlen mit Amazon-Modul aktivieren');
define('MODULE_PAYMENT_FRITES_STATUS_DESC', 'Möchten Sie Amazon Payments akzeptieren?');

define('MODULE_PAYMENT_FRITES_ZONE_TITLE', 'Zahlungszone');
define('MODULE_PAYMENT_FRITES_ZONE_DESC', 'Wählen Sie eine Zahlungszone aus, wenn Sie diese Zahlungsart nur für diese Zone aktivieren möchten.');
define('MODULE_PAYMENT_FRITES_SORT_ORDER_TITLE', 'Sortierreihenfolge');
define('MODULE_PAYMENT_FRITES_SORT_ORDER_DESC', 'Sortierreihenfolge für die Anzeige dieses Zahlungsmoduls. Niedrigste Werte zuoberst angezeigt.');

define('MODULE_PAYMENT_FRITES_MERCHANT_ID_TITLE', 'Händlernummer');
define('MODULE_PAYMENT_FRITES_MERCHANT_ID_DESC', '<span style="color:red;">*</span><a href="https://sellercentral-europe.amazon.com" target="_blank">Amazon-Händlernummer</a> eingeben');
define('MODULE_PAYMENT_FRITES_CLIENT_ID_TITLE', 'Client-ID');
define('MODULE_PAYMENT_FRITES_CLIENT_ID_DESC', '<span style="color:red;">*</span> Client-ID der Amazon-Anwendung eingeben');
define('MODULE_PAYMENT_FRITES_ACCESSKEY_ID_TITLE', 'MWS-Zugriffsschlüssel-ID');
define('MODULE_PAYMENT_FRITES_ACCESSKEY_ID_DESC', '<span style="color:red;">*</span> MWS-Zugriffsschlüssel-ID eingeben');
define('MODULE_PAYMENT_FRITES_SECRETKEY_ID_TITLE', 'Geheimer Schlüssel');
define('MODULE_PAYMENT_FRITES_SECRETKEY_ID_DESC', '<span style="color:red;">*</span> Geheimen MWS-Schlüssel eingeben');
define('MODULE_PAYMENT_FRITES_CURRENCY_TITLE', 'Zahlungsregion');
define('MODULE_PAYMENT_FRITES_CURRENCY_DESC', 'Zahlungsregion auswählen');
define('MODULE_PAYMENT_FRITES_REGION_TITLE', 'Standardregion auswählen');
define('MODULE_PAYMENT_FRITES_REGION_DESC', 'Wählen Sie ein Standardland aus. Dieser Parameter wird nur verwendet, wenn Amazon Payments Ihren aktuellen Systemsprachencode (EN, DE, FR, IT, ES) nicht erkennen kann oder die Ländereinstellungen Ihres Shops von GB, DE, FR, IT, ES abweichen.');
define('MODULE_PAYMENT_FRITES_HANDLER_TITLE', 'Live oder Sandbox');
define('MODULE_PAYMENT_FRITES_HANDLER_DESC', '<strong>Produktion: </strong> Zur Verarbeitung tatsächlicher "Live"-Transaktionen<br><strong>Sandbox: </strong>Zu Entwicklungs- und Testzwecken');
define('MODULE_PAYMENT_FRITES_IPN_DEBUG_TITLE', 'Debugging-Modus');
define('MODULE_PAYMENT_FRITES_IPN_DEBUG_DESC', 'Debugging-Protokoll aktivieren? <br />HINWEIS: Dies kann extrem viel Speicherplatz belegen.<br />Logfiles werden im Ordner /logs abgelegt.<br /><strong>Diese Option dient nur der Fehlersuche und sollte im normalen Betrieb NICHT aktiviert werden.</strong>');
define('MODULE_PAYMENT_FRITES_ADDRESSBOOK_WIDTH_TITLE', 'Adressbuch-Breite');
define('MODULE_PAYMENT_FRITES_ADDRESSBOOK_WIDTH_DESC', 'Geben Sie hier die gewünschte Breite des iFrames für das Amazon Adressbuch an. Angabe in Pixel mit px');
define('MODULE_PAYMENT_FRITES_ADDRESSBOOK_HEIGHT_TITLE', 'Adressbuch-Höhe');
define('MODULE_PAYMENT_FRITES_ADDRESSBOOK_HEIGHT_DESC', 'Geben Sie hier die gewünschte Höhe des iFrames für das Amazon Adressbuch an. Angabe in Pixel mit px');
define('MODULE_PAYMENT_FRITES_PAYMENTMETHOD_WIDTH_TITLE', 'Zahlungsart-Breite');
define('MODULE_PAYMENT_FRITES_PAYMENTMETHOD_WIDTH_DESC', 'Geben Sie hier die gewünschte Breite des iFrames für die Amazon Zahlungsart an. Angabe in Pixel mit px');
define('MODULE_PAYMENT_FRITES_PAYMENTMETHOD_HEIGHT_TITLE', 'Zahlungsart-Höhe');
define('MODULE_PAYMENT_FRITES_PAYMENTMETHOD_HEIGHT_DESC', 'Geben Sie hier die gewünschte Höhe des iFrames für die Amazon Zahlungsart an. Angabe in Pixel mit px');
define('MODULE_PAYMENT_FRITES_ZONE_DENIED', 'Amazon Payments ist in diesem Land nicht verfügbar.');
define('MODULE_PAYMENT_FRITES_PHONE_REQUIRED_TITLE', 'Telefonnummer erforderlich?');
define('MODULE_PAYMENT_FRITES_PHONE_REQUIRED_DESC', 'Ist in Ihrem Shop die Telefonnummer in den Kundendaten ein Pflichtfeld?<br/>True falls ja, False falls nein');