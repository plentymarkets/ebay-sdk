# Release Notes für EbaySdk

## v1.3.0 (2022-12-02)
- CHANGE Property `properties` für LineItem wurde in `lineItemProperties` umbenannt.

## v1.2.6 (2021-08-17)
- NEW Property `couponCode` der Marketing API hinzugefügt.
- NEW Property `couponConfiguration` der Marketing API hinzugefügt.
- NEW Property `maxDiscountAmount` der Marketing API hinzugefügt.

## v1.2.5 (2021-07-27)
- NEW Property `campaignAdRatePreferences` der Marketing API hinzugefügt.
- NEW Property `autoAdRate` der Marketing API hinzugefügt.

## v1.2.4 (2020-02-26)
- NEW Property `easyRelistEligible` PostOrder API hinzugefügt.

## v1.2.3 (2019-12-19)
- NEW Property `applyDiscountToSingleItemOnly` Marketing API hinzugefügt.

## v1.2.2 (2019-07-17)
- NEW Property `cancelQuantity` in `ItemEligibilityResult` für die PostOrder API hinzugefügt.

## v1.2.1 (2019-07-02)
- NEW `PromotionType` und `PromotionTypeEnum` für die Marketing API hinzugefügt.

## v1.2.0 (2018-04-06)
- NEW Trading API

## v1.1.2 (2017-11-14)
- NEW Folgenden REST Routen für das Marketing API wurden angepasst damit diese konform sind mit das eBay REST API:
- NEW `campaign/{campaign_id}/bulk_create_ads_by_listing_id` wurde umbenannt in `ad_campaign/{campaign_id}/bulk_create_ads_by_listing_id`
- NEW `campaign/{campaign_id}/bulk_delete_ads_by_inventory_reference` wurde umbenannt in `ad_campaign/{campaign_id}/bulk_delete_ads_by_inventory_reference`
- NEW `campaign/{campaign_id}/bulk_delete_ads_by_listing_id` wurde umbenannt in `campaign/{campaign_id}/bulk_delete_ads_by_listing_id`
- CHANGE Die Objekte `CreateReportTask` und `ReportTask` können jetzt als Argument für `marketplaceId` ein `string` bekommen.

## v1.1.1 (2017-09-16)
- CHANGE Ein Bug wurde behoben für das Analytics API
- CHANGE Dokumentation beinhaltet jetzt auch Feed API und Taxonomy API

## v1.1.0 (2017-08-11)
- NEW Feed API 
- NEW Taxonomy API
- CHANGE Alle bestehende APIs wurden aktualisiert

## v1.0.2 (2017-03-16)
- NEW Marketplace Namen

## v1.0.1 (2017-03-16)
- CHANGE Plugin-Icons wurden überarbeitet

## v1.0.0 (2017-03-02)
- NEW Initiale Plugin-Dateien hinzugefügt
