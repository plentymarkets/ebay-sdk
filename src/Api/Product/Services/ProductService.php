<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace EbaySdk\Api\Product\Services;

class ProductService extends \EbaySdk\Api\Product\Services\ProductBaseService
{
    const API_VERSION = '1.4.0';

    /**
     * @param array $config Configuration option values.
     */
    public function __construct(array $config = [])
    {
        parent::__construct($config);
    }

    /**
     * @param \EbaySdk\Api\Product\Types\FindProductsRequest $request
     * @return \EbaySdk\Api\Product\Types\FindProductsResponse
     */
    public function findProducts(\EbaySdk\Api\Product\Types\FindProductsRequest $request)
    {
        return $this->callOperation('findProducts', $request, '\EbaySdk\Api\Product\Types\FindProductsResponse');
    }

    /**
     * @param \EbaySdk\Api\Product\Types\FindProductsByCompatibilityRequest $request
     * @return \EbaySdk\Api\Product\Types\FindProductsResponse
     */
    public function findProductsByCompatibility(\EbaySdk\Api\Product\Types\FindProductsByCompatibilityRequest $request)
    {
        return $this->callOperation('findProductsByCompatibility', $request, '\EbaySdk\Api\Product\Types\FindProductsResponse');
    }

    /**
     * @param \EbaySdk\Api\Product\Types\GetProductDetailsRequest $request
     * @return \EbaySdk\Api\Product\Types\GetProductDetailsResponse
     */
    public function getProductDetails(\EbaySdk\Api\Product\Types\GetProductDetailsRequest $request)
    {
        return $this->callOperation('getProductDetails', $request, '\EbaySdk\Api\Product\Types\GetProductDetailsResponse');
    }

    /**
     * @param \EbaySdk\Api\Product\Types\GetProductCompatibilitiesRequest $request
     * @return \EbaySdk\Api\Product\Types\GetProductCompatiblitiesResponse
     */
    public function getProductCompatibilities(\EbaySdk\Api\Product\Types\GetProductCompatibilitiesRequest $request)
    {
        return $this->callOperation('getProductCompatibilities', $request, '\EbaySdk\Api\Product\Types\GetProductCompatiblitiesResponse');
    }

    /**
     * @param \EbaySdk\Api\Product\Types\FindCompatibilitiesBySpecificationRequest $request
     * @return \EbaySdk\Api\Product\Types\FindCompatibilitiesBySpecificationResponse
     */
    public function findCompatibilitiesBySpecification(\EbaySdk\Api\Product\Types\FindCompatibilitiesBySpecificationRequest $request)
    {
        return $this->callOperation('findCompatibilitiesBySpecification', $request, '\EbaySdk\Api\Product\Types\FindCompatibilitiesBySpecificationResponse');
    }

    /**
     * @param \EbaySdk\Api\Product\Types\AddProductsRequest $request
     * @return \EbaySdk\Api\Product\Types\AddProductsResponse
     */
    public function addProducts(\EbaySdk\Api\Product\Types\AddProductsRequest $request)
    {
        return $this->callOperation('addProducts', $request, '\EbaySdk\Api\Product\Types\AddProductsResponse');
    }

    /**
     * @param \EbaySdk\Api\Product\Types\GetProductSubmissionsRequest $request
     * @return \EbaySdk\Api\Product\Types\GetProductSubmissionsResponse
     */
    public function getProductSubmissions(\EbaySdk\Api\Product\Types\GetProductSubmissionsRequest $request)
    {
        return $this->callOperation('getProductSubmissions', $request, '\EbaySdk\Api\Product\Types\GetProductSubmissionsResponse');
    }
}