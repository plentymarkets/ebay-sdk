<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace EbaySdk\Api\Finding\Types;

/**
 *
 * @property \EbaySdk\Finding\Types\Amount $currentPrice
 * @property \EbaySdk\Finding\Types\Amount $convertedCurrentPrice
 * @property integer $bidCount
 * @property string $sellingState
 * @property string $timeLeft
 */
class SellingStatus extends \Plenty\Modules\Market\Ebay\Api\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'currentPrice' => [
            'type' => 'EbaySdk\Finding\Types\Amount',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'currentPrice'
        ],
        'convertedCurrentPrice' => [
            'type' => 'EbaySdk\Finding\Types\Amount',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'convertedCurrentPrice'
        ],
        'bidCount' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'bidCount'
        ],
        'sellingState' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'sellingState'
        ],
        'timeLeft' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'timeLeft'
        ]
    ];

    /**
     * @param array $values Optional properties and values to assign to the object.
     */
    public function __construct(array $values = [])
    {
        list($parentValues, $childValues) = self::getParentValues(self::$propertyTypes, $values);

        parent::__construct($parentValues);

        if (!array_key_exists(__CLASS__, self::$properties)) {
            self::$properties[__CLASS__] = array_merge(self::$properties[get_parent_class()], self::$propertyTypes);
        }

        if (!array_key_exists(__CLASS__, self::$xmlNamespaces)) {
            self::$xmlNamespaces[__CLASS__] = 'xmlns="http://www.ebay.com/marketplace/search/v1/services"';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}