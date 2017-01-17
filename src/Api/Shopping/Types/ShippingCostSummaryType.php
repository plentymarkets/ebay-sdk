<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace EbaySdk\Api\Shopping\Types;

/**
 *
 * @property string $ShippingServiceName
 * @property \EbaySdk\Shopping\Types\AmountType $ShippingServiceCost
 * @property \EbaySdk\Shopping\Types\AmountType $InsuranceCost
 * @property \EbaySdk\Shopping\Enums\ShippingTypeCodeType $ShippingType
 * @property boolean $LocalPickup
 * @property \EbaySdk\Shopping\Enums\InsuranceOptionCodeType $InsuranceOption
 * @property \EbaySdk\Shopping\Types\AmountType $ListedShippingServiceCost
 * @property \EbaySdk\Shopping\Types\AmountType $ImportCharge
 * @property string $LogisticPlanType
 */
class ShippingCostSummaryType extends \Plenty\Modules\Market\Ebay\Api\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'ShippingServiceName' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ShippingServiceName'
        ],
        'ShippingServiceCost' => [
            'type' => 'EbaySdk\Shopping\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ShippingServiceCost'
        ],
        'InsuranceCost' => [
            'type' => 'EbaySdk\Shopping\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'InsuranceCost'
        ],
        'ShippingType' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ShippingType'
        ],
        'LocalPickup' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'LocalPickup'
        ],
        'InsuranceOption' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'InsuranceOption'
        ],
        'ListedShippingServiceCost' => [
            'type' => 'EbaySdk\Shopping\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ListedShippingServiceCost'
        ],
        'ImportCharge' => [
            'type' => 'EbaySdk\Shopping\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ImportCharge'
        ],
        'LogisticPlanType' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'LogisticPlanType'
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
