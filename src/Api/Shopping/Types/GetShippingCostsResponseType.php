<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace EbaySdk\Api\Shopping\Types;

/**
 *
 * @property \EbaySdk\Shopping\Types\ShippingDetailsType $ShippingDetails
 * @property \EbaySdk\Shopping\Types\ShippingCostSummaryType $ShippingCostSummary
 * @property \EbaySdk\Shopping\Types\PickUpInStoreDetailsType $PickUpInStoreDetails
 */
class GetShippingCostsResponseType extends \EbaySdk\Api\Shopping\Types\AbstractResponseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'ShippingDetails' => [
            'type' => 'EbaySdk\Shopping\Types\ShippingDetailsType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ShippingDetails'
        ],
        'ShippingCostSummary' => [
            'type' => 'EbaySdk\Shopping\Types\ShippingCostSummaryType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ShippingCostSummary'
        ],
        'PickUpInStoreDetails' => [
            'type' => 'EbaySdk\Shopping\Types\PickUpInStoreDetailsType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PickUpInStoreDetails'
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