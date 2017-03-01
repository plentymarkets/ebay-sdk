<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace EbaySdk\Api\Account\Types;

/**
 *
 * @property \EbaySdk\Api\Account\Enums\ShippingCostTypeEnum $costType
 * @property \EbaySdk\Api\Account\Types\Amount $insuranceFee
 * @property boolean $insuranceOffered
 * @property \EbaySdk\Api\Account\Enums\ShippingOptionTypeEnum $optionType
 * @property \EbaySdk\Api\Account\Types\Amount $packageHandlingCost
 * @property \EbaySdk\Api\Account\Types\ShippingService[] $shippingServices
 */
class ShippingOption extends \Plenty\Modules\Market\Ebay\Api\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'costType' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'costType'
        ],
        'insuranceFee' => [
            'type' => 'EbaySdk\Api\Account\Types\Amount',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'insuranceFee'
        ],
        'insuranceOffered' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'insuranceOffered'
        ],
        'optionType' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'optionType'
        ],
        'packageHandlingCost' => [
            'type' => 'EbaySdk\Api\Account\Types\Amount',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'packageHandlingCost'
        ],
        'shippingServices' => [
            'type' => 'EbaySdk\Api\Account\Types\ShippingService',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'shippingServices'
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
