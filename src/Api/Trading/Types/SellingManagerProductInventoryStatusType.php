<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace EbaySdk\Api\Trading\Types;

/**
 *
 * @property integer $QuantityScheduled
 * @property integer $QuantityActive
 * @property integer $QuantitySold
 * @property integer $QuantityUnsold
 * @property double $SuccessPercent
 * @property \EbaySdk\Api\Trading\Types\AmountType $AverageSellingPrice
 */
class SellingManagerProductInventoryStatusType extends \Plenty\Modules\Market\Ebay\Api\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'QuantityScheduled' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'QuantityScheduled'
        ],
        'QuantityActive' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'QuantityActive'
        ],
        'QuantitySold' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'QuantitySold'
        ],
        'QuantityUnsold' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'QuantityUnsold'
        ],
        'SuccessPercent' => [
            'type' => 'double',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SuccessPercent'
        ],
        'AverageSellingPrice' => [
            'type' => 'EbaySdk\Api\Trading\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'AverageSellingPrice'
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

        if (!array_key_exists(__CLASS__, self::$xmlNamespaces)) {
            self::$xmlNamespaces[__CLASS__] = 'xmlns="urn:ebay:apis:eBLBaseComponents"';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
