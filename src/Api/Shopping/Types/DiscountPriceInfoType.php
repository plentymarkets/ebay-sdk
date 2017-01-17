<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace EbaySdk\Api\Shopping\Types;

/**
 *
 * @property \EbaySdk\Shopping\Types\AmountType $OriginalRetailPrice
 * @property \EbaySdk\Shopping\Types\AmountType $MinimumAdvertisedPrice
 * @property \EbaySdk\Shopping\Enums\MinimumAdvertisedPriceExposureCodeType $MinimumAdvertisedPriceExposure
 * @property \EbaySdk\Shopping\Enums\PricingTreatmentCodeType $PricingTreatment
 * @property boolean $SoldOneBay
 * @property boolean $SoldOffeBay
 */
class DiscountPriceInfoType extends \Plenty\Modules\Market\Ebay\Api\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'OriginalRetailPrice' => [
            'type' => 'EbaySdk\Shopping\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'OriginalRetailPrice'
        ],
        'MinimumAdvertisedPrice' => [
            'type' => 'EbaySdk\Shopping\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'MinimumAdvertisedPrice'
        ],
        'MinimumAdvertisedPriceExposure' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'MinimumAdvertisedPriceExposure'
        ],
        'PricingTreatment' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PricingTreatment'
        ],
        'SoldOneBay' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SoldOneBay'
        ],
        'SoldOffeBay' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SoldOffeBay'
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
            self::$xmlNamespaces[__CLASS__] = 'xmlns="urn:ebay:apis:eBLBaseComponents"';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}