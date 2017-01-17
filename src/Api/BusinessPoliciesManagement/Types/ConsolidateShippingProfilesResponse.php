<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace EbaySdk\Api\BusinessPoliciesManagement\Types;

/**
 *
 * @property \EbaySdk\BusinessPoliciesManagement\Types\ConsolidationJob $Job
 */
class ConsolidateShippingProfilesResponse extends \EbaySdk\Api\BusinessPoliciesManagement\Types\BaseResponse
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'Job' => [
            'type' => 'EbaySdk\BusinessPoliciesManagement\Types\ConsolidationJob',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Job'
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
            self::$xmlNamespaces[__CLASS__] = 'xmlns="http://www.ebay.com/marketplace/selling/v1/services"';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
