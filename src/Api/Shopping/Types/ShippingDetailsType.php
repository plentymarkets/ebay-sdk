<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace EbaySdk\Api\Shopping\Types;

/**
 *
 * @property \EbaySdk\Shopping\Types\AmountType $InsuranceCost
 * @property \EbaySdk\Shopping\Enums\InsuranceOptionCodeType $InsuranceOption
 * @property \EbaySdk\Shopping\Types\InternationalShippingServiceOptionType[] $InternationalShippingServiceOption
 * @property \EbaySdk\Shopping\Types\SalesTaxType $SalesTax
 * @property string $ShippingRateErrorMessage
 * @property \EbaySdk\Shopping\Types\ShippingServiceOptionType[] $ShippingServiceOption
 * @property \EbaySdk\Shopping\Types\TaxTableType $TaxTable
 * @property \EbaySdk\Shopping\Types\AmountType $InternationalInsuranceCost
 * @property \EbaySdk\Shopping\Enums\InsuranceOptionCodeType $InternationalInsuranceOption
 * @property \EbaySdk\Shopping\Types\AmountType $CODCost
 * @property string[] $ExcludeShipToLocation
 */
class ShippingDetailsType extends \Plenty\Modules\Market\Ebay\Api\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'InsuranceCost' => [
            'type' => 'EbaySdk\Shopping\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'InsuranceCost'
        ],
        'InsuranceOption' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'InsuranceOption'
        ],
        'InternationalShippingServiceOption' => [
            'type' => 'EbaySdk\Shopping\Types\InternationalShippingServiceOptionType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'InternationalShippingServiceOption'
        ],
        'SalesTax' => [
            'type' => 'EbaySdk\Shopping\Types\SalesTaxType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SalesTax'
        ],
        'ShippingRateErrorMessage' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ShippingRateErrorMessage'
        ],
        'ShippingServiceOption' => [
            'type' => 'EbaySdk\Shopping\Types\ShippingServiceOptionType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'ShippingServiceOption'
        ],
        'TaxTable' => [
            'type' => 'EbaySdk\Shopping\Types\TaxTableType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'TaxTable'
        ],
        'InternationalInsuranceCost' => [
            'type' => 'EbaySdk\Shopping\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'InternationalInsuranceCost'
        ],
        'InternationalInsuranceOption' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'InternationalInsuranceOption'
        ],
        'CODCost' => [
            'type' => 'EbaySdk\Shopping\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'CODCost'
        ],
        'ExcludeShipToLocation' => [
            'type' => 'string',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'ExcludeShipToLocation'
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
