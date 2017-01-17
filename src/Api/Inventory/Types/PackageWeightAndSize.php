<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace EbaySdk\Api\Inventory\Types;

/**
 *
 * @property \EbaySdk\Inventory\Types\Dimension $dimensions
 * @property \EbaySdk\Inventory\Enums\PackageTypeEnum $packageType
 * @property \EbaySdk\Inventory\Types\Weight $weight
 */
class PackageWeightAndSize extends \Plenty\Modules\Market\Ebay\Api\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'dimensions' => [
            'type' => 'EbaySdk\Inventory\Types\Dimension',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'dimensions'
        ],
        'packageType' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'packageType'
        ],
        'weight' => [
            'type' => 'EbaySdk\Inventory\Types\Weight',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'weight'
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
