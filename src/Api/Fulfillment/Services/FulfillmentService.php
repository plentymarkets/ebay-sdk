<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace EbaySdk\Api\Fulfillment\Services;

class FulfillmentService extends \EbaySdk\Api\Fulfillment\Services\FulfillmentBaseService
{
    const API_VERSION = 'v1';

    /**
     * @property array $operations Associative array of operations provided by the service.
     */
    protected static $operations = [
        'GetOrders' => [
            'method' => 'GET',
            'resource' => 'order',
            'responseClass' => '\EbaySdk\Api\Fulfillment\Types\GetOrdersRestResponse',
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
                'orderIds' => [
                    'valid' => ['string']
                ]
            ]
        ],
        'GetAnOrder' => [
            'method' => 'GET',
            'resource' => 'order/{orderId}',
            'responseClass' => '\EbaySdk\Api\Fulfillment\Types\GetAnOrderRestResponse',
            'params' => [
                'orderId' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ],
        'CreateAShippingFulfillment' => [
            'method' => 'POST',
            'resource' => 'order/{orderId}/shipping_fulfillment',
            'responseClass' => '\EbaySdk\Api\Fulfillment\Types\CreateAShippingFulfillmentRestResponse',
            'params' => [
                'orderId' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ],
        'GetShippingFulfillments' => [
            'method' => 'GET',
            'resource' => 'order/{orderId}/shipping_fulfillment',
            'responseClass' => '\EbaySdk\Api\Fulfillment\Types\GetShippingFulfillmentsRestResponse',
            'params' => [
                'orderId' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ],
        'GetAShippingFulfillment' => [
            'method' => 'GET',
            'resource' => 'order/{orderId}/shipping_fulfillment/{fulfillmentId}',
            'responseClass' => '\EbaySdk\Api\Fulfillment\Types\GetAShippingFulfillmentRestResponse',
            'params' => [
                'fulfillmentId' => [
                    'valid' => ['string'],
                    'required' => true
                ],
                'orderId' => [
                    'valid' => ['string'],
                    'required' => true
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
     * @param \EbaySdk\Api\Fulfillment\Types\GetOrdersRestRequest $request
     * @return \EbaySdk\Api\Fulfillment\Types\GetOrdersRestResponse
     */
    public function getOrders(\EbaySdk\Api\Fulfillment\Types\GetOrdersRestRequest $request)
    {
        return $this->callOperation('GetOrders', $request);
    }

    /**
     * @param \EbaySdk\Api\Fulfillment\Types\GetAnOrderRestRequest $request
     * @return \EbaySdk\Api\Fulfillment\Types\GetAnOrderRestResponse
     */
    public function getAnOrder(\EbaySdk\Api\Fulfillment\Types\GetAnOrderRestRequest $request)
    {
        return $this->callOperation('GetAnOrder', $request);
    }

    /**
     * @param \EbaySdk\Api\Fulfillment\Types\CreateAShippingFulfillmentRestRequest $request
     * @return \EbaySdk\Api\Fulfillment\Types\CreateAShippingFulfillmentRestResponse
     */
    public function createAShippingFulfillment(\EbaySdk\Api\Fulfillment\Types\CreateAShippingFulfillmentRestRequest $request)
    {
        return $this->callOperation('CreateAShippingFulfillment', $request);
    }

    /**
     * @param \EbaySdk\Api\Fulfillment\Types\GetShippingFulfillmentsRestRequest $request
     * @return \EbaySdk\Api\Fulfillment\Types\GetShippingFulfillmentsRestResponse
     */
    public function getShippingFulfillments(\EbaySdk\Api\Fulfillment\Types\GetShippingFulfillmentsRestRequest $request)
    {
        return $this->callOperation('GetShippingFulfillments', $request);
    }

    /**
     * @param \EbaySdk\Api\Fulfillment\Types\GetAShippingFulfillmentRestRequest $request
     * @return \EbaySdk\Api\Fulfillment\Types\GetAShippingFulfillmentRestResponse
     */
    public function getAShippingFulfillment(\EbaySdk\Api\Fulfillment\Types\GetAShippingFulfillmentRestRequest $request)
    {
        return $this->callOperation('GetAShippingFulfillment', $request);
    }
}
