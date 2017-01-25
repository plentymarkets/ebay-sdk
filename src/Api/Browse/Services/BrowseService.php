<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace EbaySdk\Api\Browse\Services;

class BrowseService extends \EbaySdk\Api\Browse\Services\BrowseBaseService
{
    const API_VERSION = 'v1';

    /**
     * @property array $operations Associative array of operations provided by the service.
     */
    protected static $operations = [
        'getItem' => [
            'method' => 'GET',
            'resource' => 'item/{item_id}',
            'responseClass' => '\EbaySdk\Api\Browse\Types\GetItemRestResponse',
            'params' => [
                'item_id' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ],
        'getItemFeed' => [
            'method' => 'GET',
            'resource' => 'item_feed',
            'responseClass' => '\EbaySdk\Api\Browse\Types\GetItemFeedRestResponse',
            'params' => [
                'category_id' => [
                    'valid' => ['string'],
                    'required' => true
                ],
                'date' => [
                    'valid' => ['string'],
                    'required' => true
                ],
                'feed_type' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ],
        'getItemGroup' => [
            'method' => 'GET',
            'resource' => 'item_group/{item_group_id}',
            'responseClass' => '\EbaySdk\Api\Browse\Types\GetItemGroupRestResponse',
            'params' => [
                'item_group_id' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ],
        'searchForItems' => [
            'method' => 'GET',
            'resource' => 'item_summary/search',
            'responseClass' => '\EbaySdk\Api\Browse\Types\SearchForItemsRestResponse',
            'params' => [
                'filter' => [
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
     * @param \EbaySdk\Api\Browse\Types\GetItemRestRequest $request
     * @return \EbaySdk\Api\Browse\Types\GetItemRestResponse
     */
    public function getItem(\EbaySdk\Api\Browse\Types\GetItemRestRequest $request)
    {
        return $this->callOperation('getItem', $request);
    }

    /**
     * @param \EbaySdk\Api\Browse\Types\GetItemFeedRestRequest $request
     * @return \EbaySdk\Api\Browse\Types\GetItemFeedRestResponse
     */
    public function getItemFeed(\EbaySdk\Api\Browse\Types\GetItemFeedRestRequest $request)
    {
        return $this->callOperation('getItemFeed', $request);
    }

    /**
     * @param \EbaySdk\Api\Browse\Types\GetItemGroupRestRequest $request
     * @return \EbaySdk\Api\Browse\Types\GetItemGroupRestResponse
     */
    public function getItemGroup(\EbaySdk\Api\Browse\Types\GetItemGroupRestRequest $request)
    {
        return $this->callOperation('getItemGroup', $request);
    }

    /**
     * @param \EbaySdk\Api\Browse\Types\SearchForItemsRestRequest $request
     * @return \EbaySdk\Api\Browse\Types\SearchForItemsRestResponse
     */
    public function searchForItems(\EbaySdk\Api\Browse\Types\SearchForItemsRestRequest $request)
    {
        return $this->callOperation('searchForItems', $request);
    }
}
