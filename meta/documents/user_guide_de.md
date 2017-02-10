## eBay SDK

Das eBay SDK-Plugin stellt Software-Bibliotheken zur Verfügung, die Zugriff auf verschiedene eBay API-Services und die Entwicklung eigener eBay-Plugins in plentymarkets ermöglichen.

## Erste Schritte

Plugins, die Sie auf plentyMarketplace kaufen, werden in dem Tab **Einkäufe** im Menü **Start » Plugins** ihres plentymarkets Systems gespeichert. Gehen Sie, wie im Folgenden beschrieben vor, um gekaufte Plugins zu installieren.

##### Plugins installieren:

1. Öffnen Sie das Menü **Start » Plugins**.
2. Wechseln Sie in das Tab **Einkäufe**.<br /> → Alle im plentyMarketplace erworbenen Plugins werden hier angezeigt.
3. Klicken Sie in der Zeile des Plugins auf **Plugin installieren**.<br /> → Das Fenster **Plugin installieren** wird geöffnet.
4. Wählen Sie die Version des Plugins aus dem Dropdown-Menü.<br /> → Die neueste Version des Plugins ist vorausgewählt.
5. Klicken Sie auf **Installieren**.<br /> → Das Plugin wird installiert und ist in Ihrer Inbox verfügbar.

Nachdem Sie die Plugins Ihrer plentymarkets Inbox hinzugefügt haben, müssen Sie die Plugins veröffentlichen, um das Design in Ihrem Webshop anzuzeigen. In Tabelle 1 werden die Einstellungsmöglichkeiten in der Menüleiste erläutert.

##### Plugins in Productive bereitstellen:

1. Öffnen Sie das Menü **Start » Plugins**.<br /> → Die Plugin-Übersicht wird geöffnet.
2. Aktivieren Sie die Plugins in der Spalte **Productive**.
3. Klicken Sie in der Zeile der aktivierten Plugins auf **Mandanten wählen**.<br /> → Ein Fenster wird geöffnet.
4. Aktivieren Sie die Mandanten.
5. **Speichern** Sie die Einstellungen.<br /> → Die Plugins werden den Mandanten zugeordnet.
6. Klicken Sie in der Menüleiste auf **Plugins in Productive bereitstellen**.<br /> → Die aktivierten Plugins werden geprüft und die Bereitstellung gestartet.<br /> → Das Symbol bereitgestellter Plugins wird in der Zustandspalte blau angezeigt.

<table>
<caption>Bereitstellungsoptionen der Menüleiste</caption>
<tr>
<th>Einstellung</th>
<th>Erläuterung</th>
</tr>
<tr>
<td><b>Bereitstellungsstatus aktualisieren</b></td>
<td>Die Plugin-Übersicht wird alle 5 Minuten automatisch aktualisiert, also u.U. nicht zeitgleich mit der erfolgreichen Bereitstellung. Klicken, um die Zustandsanzeige manuell zu aktualisieren.</td>
</tr>
<tr>
<td><b>Plugins in Stage bereitstellen</b></td>
<td>Prüft alle aktivierten Plugins und stellt sie dann im Vorschaumodus <strong>Stage</strong> bereit. In diesem Modus wird eine Vorschau der aktiven Plugins bereitgestellt und ihre Funktion kann getestet werden.<br /> <b><i>Hinweis</i></b>: Bei der Bereitstellung werden alle aktivierten Plugins nacheinander für Stage kompiliert. Dieser Vorgang kann einige Minuten dauern. Bei Fehlern wird keines der Plugins bereitgestellt.</td>
</tr>
<tr>
<td><b>Stage: Fehler anzeigen</b></td>
<td>Anzahl der beim letzten Bereitstellungsvorgang der Plugins in Stage aufgetretenen Fehler. Auf den Button klicken, um eine Liste der Fehler anzuzeigen.</td>
</tr>
<tr>
<td><b>Plugins in Productive bereitstellen</b></td>
<td>Prüft alle Plugins und stellt sie dann im produktiven Modus <strong>Productive</strong> bereit. In diesem Modus werden die aktiven Plugins ausgeführt und veröffentlicht.<br /> <b><i>Hinweis</i></b>: Bei der Bereitstellung werden alle aktivierten Plugins nacheinander für Productive kompiliert. Dieser Vorgang kann einige Minuten dauern. Bei Fehlern wird keines der Plugins bereitgestellt.</td>
</tr>
<tr>
<td><b>Productive: Fehler anzeigen</b></td>
<td>Anzahl der beim letzten Bereitstellungsvorgang der Plugins an Productive aufgetretenen Fehler. Auf den Button klicken, um eine Liste der Fehler anzuzeigen.</td>
</tr>
<tr>
<td><b>Zu Stage wechseln;<br /> Zu Productive wechseln</b></td>
<td><strong>Zu Stage wechseln</strong> = Modus aller im Produktivmodus Productive bereitgestellten Plugins in den Vorschaumodus Stage wechseln. Der Modus wird nach 20 Minuten automatisch wieder auf Productive gestellt.<br /> <b><i>Wichtig:</i></b> Bereitgestellte Plugins wechseln zwar in den Vorschaumodus, die Datenbank wird aber nicht gewechselt. Mit den entsprechenden Berechtigungen können diese Plugins auf Daten in der Datenbank des Produktivsystems zugreifen, Daten verändern oder sogar löschen.<br /> <strong>Zu Productive wechseln</strong> = Modus von Stage zurück in Productive wechseln.</td>
</tr>
</table>


## Usage

Getting all fulfillment policies for a given marketplace using the credentials ID for a customer that has already authenticated
via plentymarkets developer app. 
 
```
<?php 
use EbaySdk\Api\Account\Services\AccountService;
use EbaySdk\Api\Account\Types\GetFulfillmentPoliciesByMarketplaceRestRequest;
use EbaySdk\Api\Account\Types\GetFulfillmentPoliciesByMarketplaceRestResponse;

$service = pluginApp(AccountService::class, [
    'config' => [
        'credentialsId' => 8,
    ]
]);

$request = pluginApp(GetFulfillmentPoliciesByMarketplaceRestRequest::class);

$request->marketplace_id = 'EBAY_US';

$response = $service->getFulfillmentPoliciesByMarketplace($request);

$list = [];

foreach($response->fulfillmentPolicies as $fulfillmentPolicy)
{
    $list[$fulfillmentPolicy->fulfillmentPolicyId] = $fulfillmentPolicy->name;
}		
```

If we want to use our custom credentials and an custom user token we can simply provide them in the service configuration.

```
<?php 

$accountService = pluginApp(AccountService::class, [
    'config' => [
        'accessToken' => 'secret_access_token'
    ]
]);		
```

Due to the fact that all eBay access tokens are available for only two hours you also have the possibility to pass an
 refresh token that will be used in case the request fails because of the expired access token. 

```
<?php 

$accountService = pluginApp(AccountService::class, [
    'config' => [
        'sandbox' => true,
        'accessToken' => 'secret_access_token',
        'refreshToken' => 'secret_refresh_token',
    ]
]);		
```

### 

## API Reference

|  API            |  Overview                                                                                   |  API Reference                                                                            |
|-----------------|---------------------------------------------------------------------------------------------|-------------------------------------------------------------------------------------------|
| Account API     | [Overview](http://developer.ebay.com/devzone/rest/sell/content/account/overview.html)       |  [API Reference](http://developer.ebay.com/devzone/rest/api-ref/account/index.html)       |
| Analytics API   | [Overview](http://developer.ebay.com/devzone/rest/sell/content/analytics/overview.html)     |  [API Reference](http://developer.ebay.com/devzone/rest/api-ref/analytics/index.html)     |
| Browse API      | [Overview](http://developer.ebay.com/devzone/rest/buy/content/browse/overview.html)         |  [API Reference](http://developer.ebay.com/devzone/rest/api-ref/browse/index.html)        |
| Fulfillment API | [Overview](http://developer.ebay.com/devzone/rest/sell/content/fulfillment/overview.html)   |  [API Reference](http://developer.ebay.com/devzone/rest/api-ref/fulfillment/index.html)   |
| Inventory API   | [Overview](http://developer.ebay.com/devzone/rest/sell/content/inventory/overview.html)     |  [API Reference](http://developer.ebay.com/devzone/rest/api-ref/inventory/index.html)     |
| Marketing API   | [Overview](http://developer.ebay.com/devzone/rest/sell/content/marketing/overview.html)     |  [API Reference](http://developer.ebay.com/devzone/rest/api-ref/marketing/index.html)     |
| Metadata API    | [Overview](http://developer.ebay.com/devzone/rest/sell/content/metadata/overview.html)      |  [API Reference](http://developer.ebay.com/devzone/rest/api-ref/metadata/index.html)      |
| Order API       | [Overview](http://developer.ebay.com/devzone/rest/buy/content/order/overview.html)          |  [API Reference](http://developer.ebay.com/devzone/rest/api-ref/order/index.html)         |
| PostOrder API   | [Overview](http://developer.ebay.com/Devzone/post-order/Concepts/UsageGuide.html)           |  [API Reference](http://developer.ebay.com/Devzone/post-order/index.html)                 |

## Lizenz

Das gesamte Projekt unterliegt der GNU AFFERO GENERAL PUBLIC LICENSE – weitere Informationen finden Sie in der [LICENSE.md](https://github.com/plentymarkets/plugin-etsy/blob/master/LICENSE.md).
