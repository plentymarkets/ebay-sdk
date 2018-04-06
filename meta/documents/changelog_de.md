# Release Notes für EbaySdk

## v1.2.0 (2018-04-06)
#### Hinzugefügt
- Trading API

## v1.1.2 (2017-11-14)
#### Fix
- Folgenden REST Routen für das Marketing API wurden angepasst damit diese konform sind mit das eBay REST API:
 - `campaign/{campaign_id}/bulk_create_ads_by_listing_id` wurde umbenannt in `ad_campaign/{campaign_id}/bulk_create_ads_by_listing_id`
 - `campaign/{campaign_id}/bulk_delete_ads_by_inventory_reference` wurde umbenannt in `ad_campaign/{campaign_id}/bulk_delete_ads_by_inventory_reference`
 - `campaign/{campaign_id}/bulk_delete_ads_by_listing_id` wurde umbenannt in `campaign/{campaign_id}/bulk_delete_ads_by_listing_id`

#### Geändert
- Die Objekte `CreateReportTask` und `ReportTask` können jetzt als Argument für `marketplaceId` ein `string` bekommen.

## v1.1.1 (2017-09-16)
#### Geändert
- Ein Bug wurde behoben für das Analytics API
- Dokumentation beinhaltet jetzt auch Feed API und Taxonomy API

## v1.1.0 (2017-08-11)
#### Hinzugefügt
- Feed API 
- Taxonomy API

#### Geändert
- Alle bestehende APIs wurden aktualisiert

## v1.0.2 (2017-03-16)
#### Hinzugefügt
- Marketplace Namen

## v1.0.1 (2017-03-16)
#### Geändert
- Plugin-Icons wurden überarbeitet

## v1.0.0 (2017-03-02)
#### Hinzugefügt
- Initiale Plugin-Dateien hinzugefügt