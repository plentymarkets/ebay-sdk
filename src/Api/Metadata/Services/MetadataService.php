<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace EbaySdk\Api\Metadata\Services;

class MetadataService extends \EbaySdk\Api\Metadata\Services\MetadataBaseService
{
    const API_VERSION = 'v1';

    /**
     * @property array $operations Associative array of operations provided by the service.
     */
    protected static $operations = [
        'GetSalesTaxJurisdictions' => [
            'method' => 'GET',
            'resource' => 'country/{countryCode}/sales_tax_jurisdiction',
            'responseClass' => '\EbaySdk\Api\Metadata\Types\GetSalesTaxJurisdictionsRestResponse',
            'params' => [
                'countryCode' => [
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
     * @param \EbaySdk\Api\Metadata\Types\GetSalesTaxJurisdictionsRestRequest $request
     * @return \EbaySdk\Api\Metadata\Types\GetSalesTaxJurisdictionsRestResponse
     */
    public function getSalesTaxJurisdictions(\EbaySdk\Api\Metadata\Types\GetSalesTaxJurisdictionsRestRequest $request)
    {
        return $this->callOperation('GetSalesTaxJurisdictions', $request);
    }
}