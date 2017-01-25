<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace EbaySdk\Api\Inventory\Types;

/**
 *
 * @property string $notes
 * @property \EbaySdk\Api\Inventory\Types\ProductFamilyProperties $productFamilyProperties
 * @property \EbaySdk\Api\Inventory\Types\ProductIdentifier $productIdentifier
 */
class CompatibleProduct extends \Plenty\Modules\Market\Ebay\Api\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'notes' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'notes'
        ],
        'productFamilyProperties' => [
            'type' => 'EbaySdk\Api\Inventory\Types\ProductFamilyProperties',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'productFamilyProperties'
        ],
        'productIdentifier' => [
            'type' => 'EbaySdk\Api\Inventory\Types\ProductIdentifier',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'productIdentifier'
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
