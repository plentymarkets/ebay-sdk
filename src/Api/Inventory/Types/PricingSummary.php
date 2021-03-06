<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace EbaySdk\Api\Inventory\Types;

/**
 *
 * @property \EbaySdk\Api\Inventory\Types\Amount $minimumAdvertisedPrice
 * @property \EbaySdk\Api\Inventory\Enums\SoldOnEnum $originallySoldForRetailPriceOn
 * @property \EbaySdk\Api\Inventory\Types\Amount $originalRetailPrice
 * @property \EbaySdk\Api\Inventory\Types\Amount $price
 * @property \EbaySdk\Api\Inventory\Enums\MinimumAdvertisedPriceHandlingEnum $pricingVisibility
 */
class PricingSummary extends \Plenty\Modules\Market\Ebay\Api\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'minimumAdvertisedPrice' => [
            'type' => 'EbaySdk\Api\Inventory\Types\Amount',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'minimumAdvertisedPrice'
        ],
        'originallySoldForRetailPriceOn' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'originallySoldForRetailPriceOn'
        ],
        'originalRetailPrice' => [
            'type' => 'EbaySdk\Api\Inventory\Types\Amount',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'originalRetailPrice'
        ],
        'price' => [
            'type' => 'EbaySdk\Api\Inventory\Types\Amount',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'price'
        ],
        'pricingVisibility' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'pricingVisibility'
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
            self::$properties[__CLASS__] = array_merge(self::$properties[\Plenty\Modules\Market\Ebay\Api\Types\BaseType::class], self::$propertyTypes);
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
