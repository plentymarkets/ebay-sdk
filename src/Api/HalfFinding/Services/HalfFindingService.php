<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace EbaySdk\Api\HalfFinding\Services;

class HalfFindingService extends \EbaySdk\Api\HalfFinding\Services\HalfFindingBaseService
{
    const API_VERSION = '1.2.0';

    /**
     * @param array $config Configuration option values.
     */
    public function __construct(array $config = [])
    {
        parent::__construct($config);
    }

    /**
     * @param \EbaySdk\Api\HalfFinding\Types\GetVersionRequest $request
     * @return \EbaySdk\Api\HalfFinding\Types\GetVersionResponse
     */
    public function getVersion(\EbaySdk\Api\HalfFinding\Types\GetVersionRequest $request)
    {
        return $this->callOperation('getVersion', $request, '\EbaySdk\Api\HalfFinding\Types\GetVersionResponse');
    }

    /**
     * @param \EbaySdk\Api\HalfFinding\Types\FindItemsRequest $request
     * @return \EbaySdk\Api\HalfFinding\Types\FindItemsResponse
     */
    public function findHalfItems(\EbaySdk\Api\HalfFinding\Types\FindItemsRequest $request)
    {
        return $this->callOperation('findHalfItems', $request, '\EbaySdk\Api\HalfFinding\Types\FindItemsResponse');
    }
}