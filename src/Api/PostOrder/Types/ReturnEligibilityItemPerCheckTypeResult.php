<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace EbaySdk\Api\PostOrder\Types;

/**
 *
 * @property \EbaySdk\PostOrder\Enums\EligibilityCheckTypeEnum $checkType
 * @property \EbaySdk\PostOrder\Types\EligibilityResultType $eligibilityInfo
 */
class ReturnEligibilityItemPerCheckTypeResult extends \Plenty\Modules\Market\Ebay\Api\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'checkType' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'checkType'
        ],
        'eligibilityInfo' => [
            'type' => 'EbaySdk\PostOrder\Types\EligibilityResultType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'eligibilityInfo'
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
