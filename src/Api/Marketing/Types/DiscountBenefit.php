<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace EbaySdk\Api\Marketing\Types;

/**
 *
 * @property \EbaySdk\Api\Marketing\Types\Amount $amountOffItem
 * @property \EbaySdk\Api\Marketing\Types\Amount $amountOffOrder
 * @property string $percentageOffItem
 * @property string $percentageOffOrder
 */
class DiscountBenefit extends \Plenty\Modules\Market\Ebay\Api\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'amountOffItem' => [
            'type' => 'EbaySdk\Api\Marketing\Types\Amount',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'amountOffItem'
        ],
        'amountOffOrder' => [
            'type' => 'EbaySdk\Api\Marketing\Types\Amount',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'amountOffOrder'
        ],
        'percentageOffItem' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'percentageOffItem'
        ],
        'percentageOffOrder' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'percentageOffOrder'
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

        $this->setValues(__CLASS__, $childValues);
    }
}
