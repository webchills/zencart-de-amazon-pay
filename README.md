# zencart-de-amazon-pay
Amazon Pay - Login und Checkout mit Amazon 2.0.0 für Zen Cart 1.5.5 deutsch

Dieses Modul ermöglicht die Zahlungsart Amazon Pay in Ihrem Zen Cart Shop.

Kunden können direkt mit ihrem Amazon Account zahlen und alle dort hinterlegten Zahlungsarten zu verwenden.
Wählt der Kunde Bezahlen via Amazon kann er sich mit seinem Amazon Konto (Amazon Emailadresse und Amazon Passwort) einloggen, im Shop wird dann ein enstprechendes Kundenkonto automatisch angelegt, falls die Emailadresse noch nicht vorhanden ist.
Sollte die Emailadresse bereits vorhanden sein, wird das bestehende Kundenkonto verknüpft.

Der Kunde muss im Shop keinerlei Kundendaten angeben, er wählt die gewünschte Zahlungsart und Lieferadresse in einem eigenen Checkout Prozess direkt aus seinem Amazon Adressbuch aus und genau diese Daten werden dann für die Bestellung als Rechnungs- und Lieferadresse verwendet.

Es werden keinerlei Details über die bestellten Artikel an Amazon übermittelt, hier geht es rein um die Bezahlung. Es werden keine Informationen über den Warenkorb-Inhalt an Amazon übermittelt. Lediglich der Gesamtwert des Warenkorbs wird zur Zahlungsabwicklung übermittelt.

Amazon Pay steht derzeit nur für Shopinhaber mit Firmensitz in Deutschland, Frankreich, Italien, Spanien oder Großbritannien zur Verfügung.

Das Modul kann zunächst mit einem Sandbox Account vollständig ohne echte Transaktionen getestet werden.

Voraussetzungen:

* Zen Cart 1.5.5 deutsch
* Shop verwendet durchgehend SSL
* Firma des Shopinhabers hat Sitz in Deutschland, Frankreich, Italien, Spanien oder Großbritannien
* Amazon Seller Account
* Amazon Payments Konto
* Login mit Amazon ID und andere Kennungen erstellt
* (siehe beiliegendes pdf Wie-bekomme-und-nutze-ich-meine-Login-mit-AmazonClient-ID.pdf)

Copyright, Lizenz, Changelog

Version 2.0.0
2017-11-16
webchills (www.webchills.at)

Übersetzung/Anpassung/Überarbeitung des Moduls Amazon Pay 1.0 von webiprog für die deutsche Zen Cart Version 1.5.5
http://www.webiprog.de/loesungen/bezahlen-mit-amazon-fuer-zen-cart

Copyright Originalmodul 2014-2017:
www.webiprog.de

Änderungen/Fehlerbehebungen gegenüber der Original Version 1.0:

* Unterstützung der in Zen Cart 1.5.5 verwendeten mehrsprachigen Ländernamen
* Anpassung der Dateien an die deutsche Zen Cart Version 1.5.5
* Kundenkommentare in der Bestellung werden übernommen
* Firmennamen aus dem Amazon Adressbuch werden korrekt übernommen
* Um zu verhindern, dass Kunden nach abgebrochener Amazon Zahlung mit unvollständigen Kundendaten mit einer anderen Zahlungsart zur Kasse gehen, werden Kunden mit fehlenden Stammdaten zuerst zur Accountseite geleitet, um ihre Daten zu aktualisieren
* Entfernen des von Amazon hinterlegten Bundeslandes nach erfolgreicher Amazonzahlung um Schwierigkeiten mit PayPal bei künftigen Bestellungen zu verhindern
* Konfigurationsoptionen auf deutsch hinterlegt
* Anleitung aktualisiert

Portions Copyright (c) 2003 osCommerce
Portions Copyright (c) 2003-2017 Zen Cart

This contribution is subject to version 2.0 of the GPL license available through the world-wide-web at the following url:
http://www.zen-cart-pro.at/license/2_0.txt
