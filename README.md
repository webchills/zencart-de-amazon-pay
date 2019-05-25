# zencart-de-amazon-pay
Amazon Pay - Login und Checkout mit Amazon für Zen Cart 1.5.5 deutsch

Dieses Modul ermöglicht die Zahlungsart Amazon Pay in Ihrem Zen Cart Shop.

Dieses Modul ist noch nicht für die ab 14. September 2019 zwingende Strong Customer Authentication (SCA) ausgelegt. Eine neue Version, die das unterstützt, wird rechtzeitig vor Einführung der SCA erscheinen.

Dieses Modul setzt die Lieferung physischer Waren mit einer Versandadresse voraus. Für einen Downloadshop digitaler Artikel ist es NICHT geeignet! Es wird deaktiviert, wenn virtuelle Artikel im Warenkorb sind.

Kunden können direkt mit ihrem Amazon Account zahlen und alle dort hinterlegten Zahlungsarten zu verwenden.
Wählt der Kunde Bezahlen via Amazon kann er sich mit seinem Amazon Konto (Amazon Emailadresse und Amazon Passwort) einloggen, im Shop wird dann ein enstprechendes Kundenkonto automatisch angelegt, falls die Emailadresse noch nicht vorhanden ist.
Sollte die Emailadresse bereits vorhanden sein, wird das bestehende Kundenkonto verknüpft.

Der Kunde muss im Shop keinerlei Kundendaten angeben, er wählt die gewünschte Zahlungsart und Lieferadresse in einem eigenen Checkout Prozess direkt aus seinem Amazon Adressbuch aus und genau diese Daten werden dann für die Bestellung als Rechnungs- und Lieferadresse verwendet.

Es werden keinerlei Details über die bestellten Artikel an Amazon übermittelt, hier geht es rein um die Bezahlung. Es werden keine Informationen über den Warenkorb-Inhalt an Amazon übermittelt. Lediglich der Gesamtwert des Warenkorbs wird zur Zahlungsabwicklung übermittelt.

Amazon Pay steht derzeit (Stand März 2018) nur für Shopinhaber mit Firmensitz in Deutschland, Österreich, Belgien, Dänemark, Frankreich, Großbritannien, Italien, Irland, Luxemburg, Niederlande, Portugal, Schweden, Spanien, Ungarn oder Zypern zur Verfügung.

Das Modul kann zunächst mit einem Sandbox Account vollständig ohne echte Transaktionen getestet werden. 

Voraussetzungen:

* Zen Cart 1.5.5 deutsch
* Shop verwendet durchgehend SSL
* Bundesland ist im Shop NICHT aktiv (Konfiguration > Kundendetails)
* Firma des Shopinhabers hat Sitz in Deutschland, Österreich, Belgien, Dänemark, Frankreich, Großbritannien, Italien, Irland, Luxemburg, Niederlande, Portugal, Schweden, Spanien, Ungarn oder Zypern (Stand März 2018)
* Amazon Seller Account
* Amazon Payments Konto
* Login mit Amazon ID und andere Kennungen erstellt
* (siehe beiliegendes pdf Wie-bekomme-und-nutze-ich-meine-Login-mit-AmazonClient-ID.pdf)

Copyright, Lizenz, Changelog

Version 2.2.3
2019-05-25
webchills

* Infoseite zur möglichen Blockade des Amazon Widgets in neuen Firefox Versionen integriert
* Prominentere Plazierung des Amazon Buttons mit Infotext auf der Loginseite
* Durchgehende Übergabe von 2 Nachkommatellen bei der Bestellsumme zur Vorberitung auf SCA Compliance

Version 2.2.2
2018-07-31
webchills

* Anpassungen für 1.5.5f
* Bei transaction timed out Rückmeldung von Amazon wird keine Bestellung mehr ausgelöst

Version 2.2.1
2018-04-04
webchills

* Unnötige Anzeige des Modulnamens auf der checkout_frites_confirmation Seite entfernt
* Eingabe von Aktionskupons sichtbar geschaltet
* Fix für abgebrochene Bestellungen aufgrund von Zeilenumbrüchen in Bestellkommentaren
* Anleitung aktualisiert

Version 2.2.0
2018-03-21
webchills

* Korrekte Übernahme von Firmennamen in Lieferadressen
* Einschränkungsmöglichkeit auf Zonen entfernt
* Unnötige Funktionen entfernt
* Anpassungen für PHP 7.1
* Unterstützte Shop Länder erweitert (Stand Ende März 2018)
* Anleitung aktualisiert


Version 2.1.0
2018-01-16
webchills

* Korrekte Integration der Bestätigung von AGB und Widerruf
* Bugfix für Checkout Button bei versandkostenfreiem Versand
* Modul bei Bestellung von virtuellen Artikeln deaktiviert
* Nötige Änderungen bei Verwendung der Module Bestellen ohne Kundenkonto oder Datenweitergabe an Versandunternehmen hinzugefügt
* Anleitung aktualisiert


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
