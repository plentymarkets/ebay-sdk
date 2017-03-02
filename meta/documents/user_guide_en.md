
## eBay SDK

The eBay SDK plugin provides software library and enables plentymarkets customers to use various eBay API services as well as to build their own eBay plugins in plentymarkets.


## Credentials

Get credentials IDs Credentials-IDs using the credentials repository. The authetication for the communication between plentymarkets and eBay is carried out by plentymarkets.


## Usage

Getting all business policies for a given marketplace using the credentials ID for a customer that has already authenticated
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

## License

This project is licensed under the GNU AFFERO GENERAL PUBLIC LICENSE.- find further information in the [LICENSE.md](https://github.com/plentymarkets/ebay-sdk).
