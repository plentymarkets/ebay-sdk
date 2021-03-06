<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace EbaySdk\Api\Marketing\Services;

class MarketingService extends \EbaySdk\Api\Marketing\Services\MarketingBaseService
{
    const API_VERSION = 'v1';

    /**
     * @property array $operations Associative array of operations provided by the service.
     */
    protected static $operations = [
        'BulkCreateAdsByInventoryReference' => [
            'method' => 'POST',
            'resource' => 'ad_campaign/{campaign_id}/bulk_create_ads_by_inventory_reference',
            'responseClass' => '\EbaySdk\Api\Marketing\Types\BulkCreateAdsByInventoryReferenceRestResponse',
            'params' => [
                'campaign_id' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ],
        'BulkCreateAdsByListingID' => [
            'method' => 'POST',
            'resource' => 'ad_campaign/{campaign_id}/bulk_create_ads_by_listing_id',
            'responseClass' => '\EbaySdk\Api\Marketing\Types\BulkCreateAdsByListingIDRestResponse',
            'params' => [
                'campaign_id' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ],
        'BulkDeleteAdsByInventoryReference' => [
            'method' => 'POST',
            'resource' => 'ad_campaign/{campaign_id}/bulk_delete_ads_by_inventory_reference',
            'responseClass' => '\EbaySdk\Api\Marketing\Types\BulkDeleteAdsByInventoryReferenceRestResponse',
            'params' => [
                'campaign_id' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ],
        'BulkDeleteAdsByListingID' => [
            'method' => 'POST',
            'resource' => 'ad_campaign/{campaign_id}/bulk_delete_ads_by_listing_id',
            'responseClass' => '\EbaySdk\Api\Marketing\Types\BulkDeleteAdsByListingIDRestResponse',
            'params' => [
                'campaign_id' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ],
        'BulkUpdateAdBidsByInventoryReference' => [
            'method' => 'POST',
            'resource' => 'ad_campaign/{campaign_id}/bulk_update_ads_bid_by_inventory_reference',
            'responseClass' => '\EbaySdk\Api\Marketing\Types\BulkUpdateAdBidsByInventoryReferenceRestResponse',
            'params' => [
                'campaign_id' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ],
        'BulkUpdateAdBidsByListingID' => [
            'method' => 'POST',
            'resource' => 'ad_campaign/{campaign_id}/bulk_update_ads_bid_by_listing_id',
            'responseClass' => '\EbaySdk\Api\Marketing\Types\BulkUpdateAdBidsByListingIDRestResponse',
            'params' => [
                'campaign_id' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ],
        'CreateAdByListingID' => [
            'method' => 'POST',
            'resource' => 'ad_campaign/{campaign_id}/ad',
            'responseClass' => '\EbaySdk\Api\Marketing\Types\CreateAdByListingIDRestResponse',
            'params' => [
                'campaign_id' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ],
        'CreateAdsByInventoryReference' => [
            'method' => 'POST',
            'resource' => 'ad_campaign/{campaign_id}/create_ads_by_inventory_reference',
            'responseClass' => '\EbaySdk\Api\Marketing\Types\CreateAdsByInventoryReferenceRestResponse',
            'params' => [
                'campaign_id' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ],
        'DeleteAdByID' => [
            'method' => 'DELETE',
            'resource' => 'ad_campaign/{campaign_id}/ad/{ad_id}',
            'responseClass' => '\EbaySdk\Api\Marketing\Types\DeleteAdByIDRestResponse',
            'params' => [
                'ad_id' => [
                    'valid' => ['string'],
                    'required' => true
                ],
                'campaign_id' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ],
        'DeleteAdsByInventoryReference' => [
            'method' => 'POST',
            'resource' => 'ad_campaign/{campaign_id}/delete_ads_by_inventory_reference',
            'responseClass' => '\EbaySdk\Api\Marketing\Types\DeleteAdsByInventoryReferenceRestResponse',
            'params' => [
                'campaign_id' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ],
        'GetAdByID' => [
            'method' => 'GET',
            'resource' => 'ad_campaign/{campaign_id}/ad/{ad_id}',
            'responseClass' => '\EbaySdk\Api\Marketing\Types\GetAdByIDRestResponse',
            'params' => [
                'ad_id' => [
                    'valid' => ['string'],
                    'required' => true
                ],
                'campaign_id' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ],
        'GetAds' => [
            'method' => 'GET',
            'resource' => 'ad_campaign/{campaign_id}/ad',
            'responseClass' => '\EbaySdk\Api\Marketing\Types\GetAdsRestResponse',
            'params' => [
                'campaign_id' => [
                    'valid' => ['string'],
                    'required' => true
                ],
                'limit' => [
                    'valid' => ['string']
                ],
                'listing_ids' => [
                    'valid' => ['string'],
                    'required' => true
                ],
                'offset' => [
                    'valid' => ['string']
                ]
            ]
        ],
        'GetAdsByInventoryReference' => [
            'method' => 'GET',
            'resource' => 'ad_campaign/{campaign_id}/get_ads_by_inventory_reference',
            'responseClass' => '\EbaySdk\Api\Marketing\Types\GetAdsByInventoryReferenceRestResponse',
            'params' => [
                'campaign_id' => [
                    'valid' => ['string'],
                    'required' => true
                ],
                'inventory_reference_id' => [
                    'valid' => ['string'],
                    'required' => true
                ],
                'inventory_reference_type' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ],
        'UpdateBid' => [
            'method' => 'POST',
            'resource' => 'ad_campaign/{campaign_id}/ad/{ad_id}/update_bid',
            'responseClass' => '\EbaySdk\Api\Marketing\Types\UpdateBidRestResponse',
            'params' => [
                'ad_id' => [
                    'valid' => ['string'],
                    'required' => true
                ],
                'campaign_id' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ],
        'CloneCampaign' => [
            'method' => 'POST',
            'resource' => 'ad_campaign/{campaign_id}/clone',
            'responseClass' => '\EbaySdk\Api\Marketing\Types\CloneCampaignRestResponse',
            'params' => [
                'campaign_id' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ],
        'CreateCampaign' => [
            'method' => 'POST',
            'resource' => 'ad_campaign',
            'responseClass' => '\EbaySdk\Api\Marketing\Types\CreateCampaignRestResponse',
            'params' => [
            ]
        ],
        'DeleteCampaign' => [
            'method' => 'DELETE',
            'resource' => 'ad_campaign/{campaign_id}',
            'responseClass' => '\EbaySdk\Api\Marketing\Types\DeleteCampaignRestResponse',
            'params' => [
                'campaign_id' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ],
        'EndCampaign' => [
            'method' => 'POST',
            'resource' => 'ad_campaign/{campaign_id}/end',
            'responseClass' => '\EbaySdk\Api\Marketing\Types\EndCampaignRestResponse',
            'params' => [
                'campaign_id' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ],
        'FindCampaignByAdReference' => [
            'method' => 'GET',
            'resource' => 'ad_campaign/find_campaign_by_ad_reference',
            'responseClass' => '\EbaySdk\Api\Marketing\Types\FindCampaignByAdReferenceRestResponse',
            'params' => [
                'inventory_reference_id' => [
                    'valid' => ['string']
                ],
                'inventory_reference_type' => [
                    'valid' => ['string']
                ],
                'listing_id' => [
                    'valid' => ['string']
                ]
            ]
        ],
        'GetAllCampaigns' => [
            'method' => 'GET',
            'resource' => 'ad_campaign',
            'responseClass' => '\EbaySdk\Api\Marketing\Types\GetAllCampaignsRestResponse',
            'params' => [
                'campaign_name' => [
                    'valid' => ['string']
                ],
                'campaign_status' => [
                    'valid' => ['string']
                ],
                'end_date_range' => [
                    'valid' => ['string']
                ],
                'limit' => [
                    'valid' => ['string']
                ],
                'offset' => [
                    'valid' => ['string']
                ],
                'start_date_range' => [
                    'valid' => ['string']
                ]
            ]
        ],
        'GetCampaignByName' => [
            'method' => 'GET',
            'resource' => 'ad_campaign/get_campaign_by_name',
            'responseClass' => '\EbaySdk\Api\Marketing\Types\GetCampaignByNameRestResponse',
            'params' => [
                'campaign_name' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ],
        'GetCampaignByID' => [
            'method' => 'GET',
            'resource' => 'ad_campaign/{campaign_id}',
            'responseClass' => '\EbaySdk\Api\Marketing\Types\GetCampaignByIDRestResponse',
            'params' => [
                'campaign_id' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ],
        'PauseCampaign' => [
            'method' => 'POST',
            'resource' => 'ad_campaign/{campaign_id}/pause',
            'responseClass' => '\EbaySdk\Api\Marketing\Types\PauseCampaignRestResponse',
            'params' => [
                'campaign_id' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ],
        'ResumeCampaign' => [
            'method' => 'POST',
            'resource' => 'ad_campaign/{campaign_id}/resume',
            'responseClass' => '\EbaySdk\Api\Marketing\Types\ResumeCampaignRestResponse',
            'params' => [
                'campaign_id' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ],
        'UpdateCampaignIDentification' => [
            'method' => 'POST',
            'resource' => 'ad_campaign/{campaign_id}/update_campaign_identification',
            'responseClass' => '\EbaySdk\Api\Marketing\Types\UpdateCampaignIDentificationRestResponse',
            'params' => [
                'campaign_id' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ],
        'CreateItemPromotion' => [
            'method' => 'POST',
            'resource' => 'item_promotion',
            'responseClass' => '\EbaySdk\Api\Marketing\Types\CreateItemPromotionRestResponse',
            'params' => [
            ]
        ],
        'DeleteItemPromotion' => [
            'method' => 'DELETE',
            'resource' => 'item_promotion/{promotion_id}',
            'responseClass' => '\EbaySdk\Api\Marketing\Types\DeleteItemPromotionRestResponse',
            'params' => [
                'promotion_id' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ],
        'GetItemPromotion' => [
            'method' => 'GET',
            'resource' => 'item_promotion/{promotion_id}',
            'responseClass' => '\EbaySdk\Api\Marketing\Types\GetItemPromotionRestResponse',
            'params' => [
                'promotion_id' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ],
        'UpdateItemPromotion' => [
            'method' => 'PUT',
            'resource' => 'item_promotion/{promotion_id}',
            'responseClass' => '\EbaySdk\Api\Marketing\Types\UpdateItemPromotionRestResponse',
            'params' => [
                'promotion_id' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ],
        'GetListingsInSpecificPromotion' => [
            'method' => 'GET',
            'resource' => 'promotion/{promotion_id}/get_listing_set',
            'responseClass' => '\EbaySdk\Api\Marketing\Types\GetListingsInSpecificPromotionRestResponse',
            'params' => [
                'promotion_id' => [
                    'valid' => ['string']
                ],
                'limit' => [
                    'valid' => ['string']
                ],
                'offset' => [
                    'valid' => ['string']
                ],
                'q' => [
                    'valid' => ['string']
                ],
                'sort' => [
                    'valid' => ['string']
                ]
            ]
        ],
        'GetPromotions' => [
            'method' => 'GET',
            'resource' => 'promotion',
            'responseClass' => '\EbaySdk\Api\Marketing\Types\GetPromotionsRestResponse',
            'params' => [
                'limit' => [
                    'valid' => ['string']
                ],
                'marketplace_id' => [
                    'valid' => ['string']
                ],
                'offset' => [
                    'valid' => ['string']
                ],
                'promotion_status' => [
                    'valid' => ['string']
                ],
                'q' => [
                    'valid' => ['string']
                ],
                'sort' => [
                    'valid' => ['string']
                ]
            ]
        ],
        'PauseAPromotion' => [
            'method' => 'POST',
            'resource' => 'promotion/{promotion_id}/pause',
            'responseClass' => '\EbaySdk\Api\Marketing\Types\PauseAPromotionRestResponse',
            'params' => [
                'promotion_id' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ],
        'ResumeAPromotion' => [
            'method' => 'POST',
            'resource' => 'promotion/{promotion_id}/resume',
            'responseClass' => '\EbaySdk\Api\Marketing\Types\ResumeAPromotionRestResponse',
            'params' => [
                'promotion_id' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ],
        'GetPromotionSummaryReport' => [
            'method' => 'GET',
            'resource' => 'promotion_summary_report',
            'responseClass' => '\EbaySdk\Api\Marketing\Types\GetPromotionSummaryReportRestResponse',
            'params' => [
                'marketplace_id' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ],
        'GetSpecificReport' => [
            'method' => 'GET',
            'resource' => 'ad_report/{report_id}',
            'responseClass' => '\EbaySdk\Api\Marketing\Types\GetSpecificReportRestResponse',
            'params' => [
                'report_id' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ],
        'GetMetadataForAllReports' => [
            'method' => 'GET',
            'resource' => 'ad_report_metadata',
            'responseClass' => '\EbaySdk\Api\Marketing\Types\GetMetadataForAllReportsRestResponse',
            'params' => [
            ]
        ],
        'GetMetadataForAReportType' => [
            'method' => 'GET',
            'resource' => 'ad_report_metadata/{report_type}',
            'responseClass' => '\EbaySdk\Api\Marketing\Types\GetMetadataForAReportTypeRestResponse',
            'params' => [
                'report_type' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ],
        'CreateReportTask' => [
            'method' => 'POST',
            'resource' => 'ad_report_task',
            'responseClass' => '\EbaySdk\Api\Marketing\Types\CreateReportTasktRestResponse',
            'params' => [
            ]
        ],
        'DeleteSpecificReportTask' => [
            'method' => 'DELETE',
            'resource' => 'ad_report_task/{report_task_id}',
            'responseClass' => '\EbaySdk\Api\Marketing\Types\DeleteSpecificReportTaskRestResponse',
            'params' => [
                'report_task_id' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ],
        'GetReportTasks' => [
            'method' => 'GET',
            'resource' => 'ad_report_task',
            'responseClass' => '\EbaySdk\Api\Marketing\Types\GetReportTasksRestResponse',
            'params' => [
                'limit' => [
                    'valid' => ['string']
                ],
                'offset' => [
                    'valid' => ['string']
                ],
                'report_task_statuses' => [
                    'valid' => ['string']
                ]
            ]
        ],
        'GetSpecificReportTask' => [
            'method' => 'GET',
            'resource' => 'ad_report_task/{report_task_id}',
            'responseClass' => '\EbaySdk\Api\Marketing\Types\GetSpecificReportTaskRestResponse',
            'params' => [
                'report_task_id' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ],
        'GetAPromotionReport' => [
            'method' => 'GET',
            'resource' => 'promotion_report',
            'responseClass' => '\EbaySdk\Api\Marketing\Types\GetAPromotionReportRestResponse',
            'params' => [
                'limit' => [
                    'valid' => ['string']
                ],
                'marketplace_id' => [
                    'valid' => ['string'],
                    'required' => true
                ],
                'offset' => [
                    'valid' => ['string']
                ],
                'promotion_status' => [
                    'valid' => ['string']
                ],
                'q' => [
                    'valid' => ['string']
                ]
            ]
        ]
    ];

    /**
     * @param array $config Configuration option values.
     */
    public function __construct(array $config = [])
    {
        parent::__construct($config);
    }

    /**
     * @param \EbaySdk\Api\Marketing\Types\BulkCreateAdsByInventoryReferenceRestRequest $request
     * @return \EbaySdk\Api\Marketing\Types\BulkCreateAdsByInventoryReferenceRestResponse
     */
    public function bulkCreateAdsByInventoryReference(\EbaySdk\Api\Marketing\Types\BulkCreateAdsByInventoryReferenceRestRequest $request)
    {
        return $this->callOperation('BulkCreateAdsByInventoryReference', $request);
    }

    /**
     * @param \EbaySdk\Api\Marketing\Types\BulkCreateAdsByListingIDRestRequest $request
     * @return \EbaySdk\Api\Marketing\Types\BulkCreateAdsByListingIDRestResponse
     */
    public function bulkCreateAdsByListingID(\EbaySdk\Api\Marketing\Types\BulkCreateAdsByListingIDRestRequest $request)
    {
        return $this->callOperation('BulkCreateAdsByListingID', $request);
    }

    /**
     * @param \EbaySdk\Api\Marketing\Types\BulkDeleteAdsByInventoryReferenceRestRequest $request
     * @return \EbaySdk\Api\Marketing\Types\BulkDeleteAdsByInventoryReferenceRestResponse
     */
    public function bulkDeleteAdsByInventoryReference(\EbaySdk\Api\Marketing\Types\BulkDeleteAdsByInventoryReferenceRestRequest $request)
    {
        return $this->callOperation('BulkDeleteAdsByInventoryReference', $request);
    }

    /**
     * @param \EbaySdk\Api\Marketing\Types\BulkDeleteAdsByListingIDRestRequest $request
     * @return \EbaySdk\Api\Marketing\Types\BulkDeleteAdsByListingIDRestResponse
     */
    public function bulkDeleteAdsByListingID(\EbaySdk\Api\Marketing\Types\BulkDeleteAdsByListingIDRestRequest $request)
    {
        return $this->callOperation('BulkDeleteAdsByListingID', $request);
    }

    /**
     * @param \EbaySdk\Api\Marketing\Types\BulkUpdateAdBidsByInventoryReferenceRestRequest $request
     * @return \EbaySdk\Api\Marketing\Types\BulkUpdateAdBidsByInventoryReferenceRestResponse
     */
    public function bulkUpdateAdBidsByInventoryReference(\EbaySdk\Api\Marketing\Types\BulkUpdateAdBidsByInventoryReferenceRestRequest $request)
    {
        return $this->callOperation('BulkUpdateAdBidsByInventoryReference', $request);
    }

    /**
     * @param \EbaySdk\Api\Marketing\Types\BulkUpdateAdBidsByListingIDRestRequest $request
     * @return \EbaySdk\Api\Marketing\Types\BulkUpdateAdBidsByListingIDRestResponse
     */
    public function bulkUpdateAdBidsByListingID(\EbaySdk\Api\Marketing\Types\BulkUpdateAdBidsByListingIDRestRequest $request)
    {
        return $this->callOperation('BulkUpdateAdBidsByListingID', $request);
    }

    /**
     * @param \EbaySdk\Api\Marketing\Types\CreateAdByListingIDRestRequest $request
     * @return \EbaySdk\Api\Marketing\Types\CreateAdByListingIDRestResponse
     */
    public function createAdByListingID(\EbaySdk\Api\Marketing\Types\CreateAdByListingIDRestRequest $request)
    {
        return $this->callOperation('CreateAdByListingID', $request);
    }

    /**
     * @param \EbaySdk\Api\Marketing\Types\CreateAdsByInventoryReferenceRestRequest $request
     * @return \EbaySdk\Api\Marketing\Types\CreateAdsByInventoryReferenceRestResponse
     */
    public function createAdsByInventoryReference(\EbaySdk\Api\Marketing\Types\CreateAdsByInventoryReferenceRestRequest $request)
    {
        return $this->callOperation('CreateAdsByInventoryReference', $request);
    }

    /**
     * @param \EbaySdk\Api\Marketing\Types\DeleteAdByIDRestRequest $request
     * @return \EbaySdk\Api\Marketing\Types\DeleteAdByIDRestResponse
     */
    public function deleteAdByID(\EbaySdk\Api\Marketing\Types\DeleteAdByIDRestRequest $request)
    {
        return $this->callOperation('DeleteAdByID', $request);
    }

    /**
     * @param \EbaySdk\Api\Marketing\Types\DeleteAdsByInventoryReferenceRestRequest $request
     * @return \EbaySdk\Api\Marketing\Types\DeleteAdsByInventoryReferenceRestResponse
     */
    public function deleteAdsByInventoryReference(\EbaySdk\Api\Marketing\Types\DeleteAdsByInventoryReferenceRestRequest $request)
    {
        return $this->callOperation('DeleteAdsByInventoryReference', $request);
    }

    /**
     * @param \EbaySdk\Api\Marketing\Types\GetAdByIDRestRequest $request
     * @return \EbaySdk\Api\Marketing\Types\GetAdByIDRestResponse
     */
    public function getAdByID(\EbaySdk\Api\Marketing\Types\GetAdByIDRestRequest $request)
    {
        return $this->callOperation('GetAdByID', $request);
    }

    /**
     * @param \EbaySdk\Api\Marketing\Types\GetAdsRestRequest $request
     * @return \EbaySdk\Api\Marketing\Types\GetAdsRestResponse
     */
    public function getAds(\EbaySdk\Api\Marketing\Types\GetAdsRestRequest $request)
    {
        return $this->callOperation('GetAds', $request);
    }

    /**
     * @param \EbaySdk\Api\Marketing\Types\GetAdsByInventoryReferenceRestRequest $request
     * @return \EbaySdk\Api\Marketing\Types\GetAdsByInventoryReferenceRestResponse
     */
    public function getAdsByInventoryReference(\EbaySdk\Api\Marketing\Types\GetAdsByInventoryReferenceRestRequest $request)
    {
        return $this->callOperation('GetAdsByInventoryReference', $request);
    }

    /**
     * @param \EbaySdk\Api\Marketing\Types\UpdateBidRestRequest $request
     * @return \EbaySdk\Api\Marketing\Types\UpdateBidRestResponse
     */
    public function updateBid(\EbaySdk\Api\Marketing\Types\UpdateBidRestRequest $request)
    {
        return $this->callOperation('UpdateBid', $request);
    }

    /**
     * @param \EbaySdk\Api\Marketing\Types\CloneCampaignRestRequest $request
     * @return \EbaySdk\Api\Marketing\Types\CloneCampaignRestResponse
     */
    public function cloneCampaign(\EbaySdk\Api\Marketing\Types\CloneCampaignRestRequest $request)
    {
        return $this->callOperation('CloneCampaign', $request);
    }

    /**
     * @param \EbaySdk\Api\Marketing\Types\CreateCampaignRestRequest $request
     * @return \EbaySdk\Api\Marketing\Types\CreateCampaignRestResponse
     */
    public function createCampaign(\EbaySdk\Api\Marketing\Types\CreateCampaignRestRequest $request)
    {
        return $this->callOperation('CreateCampaign', $request);
    }

    /**
     * @param \EbaySdk\Api\Marketing\Types\DeleteCampaignRestRequest $request
     * @return \EbaySdk\Api\Marketing\Types\DeleteCampaignRestResponse
     */
    public function deleteCampaign(\EbaySdk\Api\Marketing\Types\DeleteCampaignRestRequest $request)
    {
        return $this->callOperation('DeleteCampaign', $request);
    }

    /**
     * @param \EbaySdk\Api\Marketing\Types\EndCampaignRestRequest $request
     * @return \EbaySdk\Api\Marketing\Types\EndCampaignRestResponse
     */
    public function endCampaign(\EbaySdk\Api\Marketing\Types\EndCampaignRestRequest $request)
    {
        return $this->callOperation('EndCampaign', $request);
    }

    /**
     * @param \EbaySdk\Api\Marketing\Types\FindCampaignByAdReferenceRestRequest $request
     * @return \EbaySdk\Api\Marketing\Types\FindCampaignByAdReferenceRestResponse
     */
    public function findCampaignByAdReference(\EbaySdk\Api\Marketing\Types\FindCampaignByAdReferenceRestRequest $request)
    {
        return $this->callOperation('FindCampaignByAdReference', $request);
    }

    /**
     * @param \EbaySdk\Api\Marketing\Types\GetAllCampaignsRestRequest $request
     * @return \EbaySdk\Api\Marketing\Types\GetAllCampaignsRestResponse
     */
    public function getAllCampaigns(\EbaySdk\Api\Marketing\Types\GetAllCampaignsRestRequest $request)
    {
        return $this->callOperation('GetAllCampaigns', $request);
    }

    /**
     * @param \EbaySdk\Api\Marketing\Types\GetCampaignByNameRestRequest $request
     * @return \EbaySdk\Api\Marketing\Types\GetCampaignByNameRestResponse
     */
    public function getCampaignByName(\EbaySdk\Api\Marketing\Types\GetCampaignByNameRestRequest $request)
    {
        return $this->callOperation('GetCampaignByName', $request);
    }

    /**
     * @param \EbaySdk\Api\Marketing\Types\GetCampaignByIDRestRequest $request
     * @return \EbaySdk\Api\Marketing\Types\GetCampaignByIDRestResponse
     */
    public function getCampaignByID(\EbaySdk\Api\Marketing\Types\GetCampaignByIDRestRequest $request)
    {
        return $this->callOperation('GetCampaignByID', $request);
    }

    /**
     * @param \EbaySdk\Api\Marketing\Types\PauseCampaignRestRequest $request
     * @return \EbaySdk\Api\Marketing\Types\PauseCampaignRestResponse
     */
    public function pauseCampaign(\EbaySdk\Api\Marketing\Types\PauseCampaignRestRequest $request)
    {
        return $this->callOperation('PauseCampaign', $request);
    }

    /**
     * @param \EbaySdk\Api\Marketing\Types\ResumeCampaignRestRequest $request
     * @return \EbaySdk\Api\Marketing\Types\ResumeCampaignRestResponse
     */
    public function resumeCampaign(\EbaySdk\Api\Marketing\Types\ResumeCampaignRestRequest $request)
    {
        return $this->callOperation('ResumeCampaign', $request);
    }

    /**
     * @param \EbaySdk\Api\Marketing\Types\UpdateCampaignIDentificationRestRequest $request
     * @return \EbaySdk\Api\Marketing\Types\UpdateCampaignIDentificationRestResponse
     */
    public function updateCampaignIDentification(\EbaySdk\Api\Marketing\Types\UpdateCampaignIDentificationRestRequest $request)
    {
        return $this->callOperation('UpdateCampaignIDentification', $request);
    }

    /**
     * @param \EbaySdk\Api\Marketing\Types\CreateItemPromotionRestRequest $request
     * @return \EbaySdk\Api\Marketing\Types\CreateItemPromotionRestResponse
     */
    public function createItemPromotion(\EbaySdk\Api\Marketing\Types\CreateItemPromotionRestRequest $request)
    {
        return $this->callOperation('CreateItemPromotion', $request);
    }

    /**
     * @param \EbaySdk\Api\Marketing\Types\DeleteItemPromotionRestRequest $request
     * @return \EbaySdk\Api\Marketing\Types\DeleteItemPromotionRestResponse
     */
    public function deleteItemPromotion(\EbaySdk\Api\Marketing\Types\DeleteItemPromotionRestRequest $request)
    {
        return $this->callOperation('DeleteItemPromotion', $request);
    }

    /**
     * @param \EbaySdk\Api\Marketing\Types\GetItemPromotionRestRequest $request
     * @return \EbaySdk\Api\Marketing\Types\GetItemPromotionRestResponse
     */
    public function getItemPromotion(\EbaySdk\Api\Marketing\Types\GetItemPromotionRestRequest $request)
    {
        return $this->callOperation('GetItemPromotion', $request);
    }

    /**
     * @param \EbaySdk\Api\Marketing\Types\UpdateItemPromotionRestRequest $request
     * @return \EbaySdk\Api\Marketing\Types\UpdateItemPromotionRestResponse
     */
    public function updateItemPromotion(\EbaySdk\Api\Marketing\Types\UpdateItemPromotionRestRequest $request)
    {
        return $this->callOperation('UpdateItemPromotion', $request);
    }

    /**
     * @param \EbaySdk\Api\Marketing\Types\GetListingsInSpecificPromotionRestRequest $request
     * @return \EbaySdk\Api\Marketing\Types\GetListingsInSpecificPromotionRestResponse
     */
    public function getListingsInSpecificPromotion(\EbaySdk\Api\Marketing\Types\GetListingsInSpecificPromotionRestRequest $request)
    {
        return $this->callOperation('GetListingsInSpecificPromotion', $request);
    }

    /**
     * @param \EbaySdk\Api\Marketing\Types\GetPromotionsRestRequest $request
     * @return \EbaySdk\Api\Marketing\Types\GetPromotionsRestResponse
     */
    public function getPromotions(\EbaySdk\Api\Marketing\Types\GetPromotionsRestRequest $request)
    {
        return $this->callOperation('GetPromotions', $request);
    }

    /**
     * @param \EbaySdk\Api\Marketing\Types\PauseAPromotionRestRequest $request
     * @return \EbaySdk\Api\Marketing\Types\PauseAPromotionRestResponse
     */
    public function pauseAPromotion(\EbaySdk\Api\Marketing\Types\PauseAPromotionRestRequest $request)
    {
        return $this->callOperation('PauseAPromotion', $request);
    }

    /**
     * @param \EbaySdk\Api\Marketing\Types\ResumeAPromotionRestRequest $request
     * @return \EbaySdk\Api\Marketing\Types\ResumeAPromotionRestResponse
     */
    public function resumeAPromotion(\EbaySdk\Api\Marketing\Types\ResumeAPromotionRestRequest $request)
    {
        return $this->callOperation('ResumeAPromotion', $request);
    }

    /**
     * @param \EbaySdk\Api\Marketing\Types\GetPromotionSummaryReportRestRequest $request
     * @return \EbaySdk\Api\Marketing\Types\GetPromotionSummaryReportRestResponse
     */
    public function getPromotionSummaryReport(\EbaySdk\Api\Marketing\Types\GetPromotionSummaryReportRestRequest $request)
    {
        return $this->callOperation('GetPromotionSummaryReport', $request);
    }

    /**
     * @param \EbaySdk\Api\Marketing\Types\GetSpecificReportRestRequest $request
     * @return \EbaySdk\Api\Marketing\Types\GetSpecificReportRestResponse
     */
    public function getSpecificReport(\EbaySdk\Api\Marketing\Types\GetSpecificReportRestRequest $request)
    {
        return $this->callOperation('GetSpecificReport', $request);
    }

    /**
     * @param \EbaySdk\Api\Marketing\Types\GetMetadataForAllReportsRestRequest $request
     * @return \EbaySdk\Api\Marketing\Types\GetMetadataForAllReportsRestResponse
     */
    public function getMetadataForAllReports(\EbaySdk\Api\Marketing\Types\GetMetadataForAllReportsRestRequest $request)
    {
        return $this->callOperation('GetMetadataForAllReports', $request);
    }

    /**
     * @param \EbaySdk\Api\Marketing\Types\GetMetadataForAReportTypeRestRequest $request
     * @return \EbaySdk\Api\Marketing\Types\GetMetadataForAReportTypeRestResponse
     */
    public function getMetadataForAReportType(\EbaySdk\Api\Marketing\Types\GetMetadataForAReportTypeRestRequest $request)
    {
        return $this->callOperation('GetMetadataForAReportType', $request);
    }

    /**
     * @param \EbaySdk\Api\Marketing\Types\CreateReportTaskRestRequest $request
     * @return \EbaySdk\Api\Marketing\Types\CreateReportTasktRestResponse
     */
    public function createReportTask(\EbaySdk\Api\Marketing\Types\CreateReportTaskRestRequest $request)
    {
        return $this->callOperation('CreateReportTask', $request);
    }

    /**
     * @param \EbaySdk\Api\Marketing\Types\DeleteSpecificReportTaskRestRequest $request
     * @return \EbaySdk\Api\Marketing\Types\DeleteSpecificReportTaskRestResponse
     */
    public function deleteSpecificReportTask(\EbaySdk\Api\Marketing\Types\DeleteSpecificReportTaskRestRequest $request)
    {
        return $this->callOperation('DeleteSpecificReportTask', $request);
    }

    /**
     * @param \EbaySdk\Api\Marketing\Types\GetReportTasksRestRequest $request
     * @return \EbaySdk\Api\Marketing\Types\GetReportTasksRestResponse
     */
    public function getReportTasks(\EbaySdk\Api\Marketing\Types\GetReportTasksRestRequest $request)
    {
        return $this->callOperation('GetReportTasks', $request);
    }

    /**
     * @param \EbaySdk\Api\Marketing\Types\GetSpecificReportTaskRestRequest $request
     * @return \EbaySdk\Api\Marketing\Types\GetSpecificReportTaskRestResponse
     */
    public function getSpecificReportTask(\EbaySdk\Api\Marketing\Types\GetSpecificReportTaskRestRequest $request)
    {
        return $this->callOperation('GetSpecificReportTask', $request);
    }

    /**
     * @param \EbaySdk\Api\Marketing\Types\GetAPromotionReportRestRequest $request
     * @return \EbaySdk\Api\Marketing\Types\GetAPromotionReportRestResponse
     */
    public function getAPromotionReport(\EbaySdk\Api\Marketing\Types\GetAPromotionReportRestRequest $request)
    {
        return $this->callOperation('GetAPromotionReport', $request);
    }
}
