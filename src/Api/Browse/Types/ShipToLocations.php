<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace EbaySdk\Api\Browse\Types;

/**
 *
 * @property \EbaySdk\Api\Browse\Types\Region[] $regionExcluded
 * @property \EbaySdk\Api\Browse\Types\Region[] $regionIncluded
 */
class ShipToLocations extends \Plenty\Modules\Market\Ebay\Api\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'regionExcluded' => [
            'type' => 'EbaySdk\Api\Browse\Types\Region',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'regionExcluded'
        ],
        'regionIncluded' => [
            'type' => 'EbaySdk\Api\Browse\Types\Region',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'regionIncluded'
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
