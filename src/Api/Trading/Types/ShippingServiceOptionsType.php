<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace EbaySdk\Api\Trading\Types;

/**
 *
 * @property \EbaySdk\Api\Trading\Types\AmountType $ShippingInsuranceCost
 * @property string $ShippingService
 * @property \EbaySdk\Api\Trading\Types\AmountType $ShippingServiceCost
 * @property \EbaySdk\Api\Trading\Types\AmountType $ShippingServiceAdditionalCost
 * @property integer $ShippingServicePriority
 * @property boolean $ExpeditedService
 * @property integer $ShippingTimeMin
 * @property integer $ShippingTimeMax
 * @property \EbaySdk\Api\Trading\Types\AmountType $ShippingSurcharge
 * @property boolean $FreeShipping
 * @property boolean $LocalPickup
 * @property \EbaySdk\Api\Trading\Types\AmountType $ImportCharge
 * @property \EbaySdk\Api\Trading\Types\ShippingPackageInfoType[] $ShippingPackageInfo
 * @property \DateTime $ShippingServiceCutOffTime
 */
class ShippingServiceOptionsType extends \Plenty\Modules\Market\Ebay\Api\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'ShippingInsuranceCost' => [
            'type' => 'EbaySdk\Api\Trading\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ShippingInsuranceCost'
        ],
        'ShippingService' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ShippingService'
        ],
        'ShippingServiceCost' => [
            'type' => 'EbaySdk\Api\Trading\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ShippingServiceCost'
        ],
        'ShippingServiceAdditionalCost' => [
            'type' => 'EbaySdk\Api\Trading\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ShippingServiceAdditionalCost'
        ],
        'ShippingServicePriority' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ShippingServicePriority'
        ],
        'ExpeditedService' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ExpeditedService'
        ],
        'ShippingTimeMin' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ShippingTimeMin'
        ],
        'ShippingTimeMax' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ShippingTimeMax'
        ],
        'ShippingSurcharge' => [
            'type' => 'EbaySdk\Api\Trading\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ShippingSurcharge'
        ],
        'FreeShipping' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'FreeShipping'
        ],
        'LocalPickup' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'LocalPickup'
        ],
        'ImportCharge' => [
            'type' => 'EbaySdk\Api\Trading\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ImportCharge'
        ],
        'ShippingPackageInfo' => [
            'type' => 'EbaySdk\Api\Trading\Types\ShippingPackageInfoType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'ShippingPackageInfo'
        ],
        'ShippingServiceCutOffTime' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ShippingServiceCutOffTime'
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
