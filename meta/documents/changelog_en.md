# Release Notes for EbaySdk

## v1.2.0 (2018-04-06)
#### Added
- Trading API

## v1.1.2 (2017-11-14)
#### Fix
- Following REST routes for the Marketing API were changed so that this are now compliant with the eBay REST API:
 - `campaign/{campaign_id}/bulk_create_ads_by_listing_id` was changed to `ad_campaign/{campaign_id}/bulk_create_ads_by_listing_id`
 - `campaign/{campaign_id}/bulk_delete_ads_by_inventory_reference` was changed to `ad_campaign/{campaign_id}/bulk_delete_ads_by_inventory_reference`
 - `campaign/{campaign_id}/bulk_delete_ads_by_listing_id` was changed to `campaign/{campaign_id}/bulk_delete_ads_by_listing_id`

#### Changed
- A `string` can now be passed for the `marketplaceId` argument of the `CreateReportTask` and `ReportTask` objects.

## v1.1.1 (2017-09-16)
#### Geändert
- Fixed a bug on the Analytics API
- Documentation now includes Feed API and Taxonomy API

## v1.1.0 (2017-08-11)
#### Added
- Feed API 
- Taxonomy API

#### Changed
- All existing APIs were revised

## v1.0.2 (2017-03-16)
#### Added
- Marketplace name

## v1.0.1 (2017-03-16)
#### Changed
- Changed plugin icons

## v1.0.0 (2017-03-02)
#### Added
- Added initial plugin files