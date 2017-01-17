<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace EbaySdk\Api\Merchandising\Services;

class MerchandisingService extends \EbaySdk\Api\Merchandising\Services\MerchandisingBaseService
{
    const API_VERSION = '1.5.0';

    /**
     * @param array $config Configuration option values.
     */
    public function __construct(array $config = [])
    {
        parent::__construct($config);
    }

    /**
     * @param \EbaySdk\Api\Merchandising\Types\GetRelatedCategoryItemsRequest $request
     * @return \EbaySdk\Api\Merchandising\Types\MerchandisingServiceItemResponse
     */
    public function getRelatedCategoryItems(\EbaySdk\Api\Merchandising\Types\GetRelatedCategoryItemsRequest $request)
    {
        return $this->callOperation('getRelatedCategoryItems', $request, '\EbaySdk\Api\Merchandising\Types\MerchandisingServiceItemResponse');
    }

    /**
     * @param \EbaySdk\Api\Merchandising\Types\GetMostWatchedItemsRequest $request
     * @return \EbaySdk\Api\Merchandising\Types\MerchandisingServiceItemResponse
     */
    public function getMostWatchedItems(\EbaySdk\Api\Merchandising\Types\GetMostWatchedItemsRequest $request)
    {
        return $this->callOperation('getMostWatchedItems', $request, '\EbaySdk\Api\Merchandising\Types\MerchandisingServiceItemResponse');
    }

    /**
     * @param \EbaySdk\Api\Merchandising\Types\GetTopSellingProductsRequest $request
     * @return \EbaySdk\Api\Merchandising\Types\MerchandisingServiceProductResponse
     */
    public function getTopSellingProducts(\EbaySdk\Api\Merchandising\Types\GetTopSellingProductsRequest $request)
    {
        return $this->callOperation('getTopSellingProducts', $request, '\EbaySdk\Api\Merchandising\Types\MerchandisingServiceProductResponse');
    }

    /**
     * @param \EbaySdk\Api\Merchandising\Types\GetDealsRequest $request
     * @return \EbaySdk\Api\Merchandising\Types\MerchandisingServiceItemResponse
     */
    public function getDeals(\EbaySdk\Api\Merchandising\Types\GetDealsRequest $request)
    {
        return $this->callOperation('getDeals', $request, '\EbaySdk\Api\Merchandising\Types\MerchandisingServiceItemResponse');
    }

    /**
     * @param \EbaySdk\Api\Merchandising\Types\GetSimilarItemsRequest $request
     * @return \EbaySdk\Api\Merchandising\Types\MerchandisingServiceItemResponse
     */
    public function getSimilarItems(\EbaySdk\Api\Merchandising\Types\GetSimilarItemsRequest $request)
    {
        return $this->callOperation('getSimilarItems', $request, '\EbaySdk\Api\Merchandising\Types\MerchandisingServiceItemResponse');
    }

    /**
     * @param \EbaySdk\Api\Merchandising\Types\GetVersionRequest $request
     * @return \EbaySdk\Api\Merchandising\Types\GetVersionResponse
     */
    public function getVersion(\EbaySdk\Api\Merchandising\Types\GetVersionRequest $request)
    {
        return $this->callOperation('getVersion', $request, '\EbaySdk\Api\Merchandising\Types\GetVersionResponse');
    }
}
