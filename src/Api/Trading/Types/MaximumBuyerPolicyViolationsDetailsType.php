<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace EbaySdk\Api\Trading\Types;

/**
 *
 * @property \EbaySdk\Trading\Types\NumberOfPolicyViolationsDetailsType $NumberOfPolicyViolations
 * @property \EbaySdk\Trading\Types\PolicyViolationDurationDetailsType[] $PolicyViolationDuration
 */
class MaximumBuyerPolicyViolationsDetailsType extends \Plenty\Modules\Market\Ebay\Api\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'NumberOfPolicyViolations' => [
            'type' => 'EbaySdk\Trading\Types\NumberOfPolicyViolationsDetailsType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'NumberOfPolicyViolations'
        ],
        'PolicyViolationDuration' => [
            'type' => 'EbaySdk\Trading\Types\PolicyViolationDurationDetailsType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'PolicyViolationDuration'
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
