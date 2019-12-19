# Release Notes for EbaySdk

## v1.2.3 (2019-12-19)
- NEW Property `applyDiscountToSingleItemOnly` for Marketing API added.

## v1.2.2 (2019-07-17)
- NEW Property `cancelQuantity` in `ItemEligibilityResult` for PostOrder API added.

## v1.2.1 (2019-07-02)
- NEW `PromotionType` and `PromotionTypeEnum` for Marketing API added.

## v1.2.0 (2018-04-06)
- NEW Trading API

## v1.1.2 (2017-11-14)
- FIX Following REST routes for the Marketing API were changed so that this are now compliant with the eBay REST API:
- FIX `campaign/{campaign_id}/bulk_create_ads_by_listing_id` was changed to `ad_campaign/{campaign_id}/bulk_create_ads_by_listing_id`
- FIX `campaign/{campaign_id}/bulk_delete_ads_by_inventory_reference` was changed to `ad_campaign/{campaign_id}/bulk_delete_ads_by_inventory_reference`
- FIX `campaign/{campaign_id}/bulk_delete_ads_by_listing_id` was changed to `campaign/{campaign_id}/bulk_delete_ads_by_listing_id`
- CHANGE A `string` can now be passed for the `marketplaceId` argument of the `CreateReportTask` and `ReportTask` objects.

## v1.1.1 (2017-09-16)
- CHANGE Fixed a bug on the Analytics API
- CHANGE Documentation now includes Feed API and Taxonomy API

## v1.1.0 (2017-08-11)
- NEW Feed API 
- NEW Taxonomy API
- CHANGE ll existing APIs were revised

## v1.0.2 (2017-03-16)
- NEW Marketplace name

## v1.0.1 (2017-03-16)
- CHANGE Plugin icons

## v1.0.0 (2017-03-02)
- NEW Initial plugin files