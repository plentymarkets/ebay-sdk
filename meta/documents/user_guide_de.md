## eBay SDK

Das eBay SDK-Plugin stellt Software-Bibliotheken zur Verfügung, die Zugriff auf verschiedene eBay API-Services und die Entwicklung eigener eBay-Plugins in plentymarkets ermöglichen.


## Credentials

Credentials-IDs werden mit Hilfe des Credentials Repository aufgerufen. Die Authentifiezierung für die Komminukation zwischen plentymarkets und eBay läuft über plentymarkets. 


## Anwendung

Alle Rahmenbedingungen für eine bestimmte eBay-Plattform anhand der Credentials-ID eines bereits durch die plentymarkets Developer App authentifizierten Kunden erhalten.
 
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

$request = pluginApp(GetFulfillmentPoliciesByMarketplaceRestRequest::class, [
    'values' => [
        'marketplace_id' => MarketplaceIdEnum::C_EBAY_DE
    ],
]);

$response = $service->getFulfillmentPoliciesByMarketplace($request);

$list = [];

foreach($response->fulfillmentPolicies as $fulfillmentPolicy)
{
    $list[$fulfillmentPolicy->fulfillmentPolicyId] = $fulfillmentPolicy->name;
}		
```

Sollen die Credentials und der User Token eines Kunden verwendet werden, können diese einfach in der Service-Konfiguration angegeben werden.

```
<?php 

$accountService = pluginApp(AccountService::class, [
    'config' => [
        'accessToken' => 'secret_access_token'
    ]
]);		
```

Da alle eBay Access Token für nur 2 Stunden verfügbar sind, können sie einen Refresh Token übergeben, falls der Request aufgrund des abgelaufenen Access Tokens scheitert. 

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

Das gesamte Projekt unterliegt der GNU AFFERO GENERAL PUBLIC LICENSE – weitere Informationen finden Sie in der [LICENSE.md](https://github.com/plentymarkets/ebay-sdk).
