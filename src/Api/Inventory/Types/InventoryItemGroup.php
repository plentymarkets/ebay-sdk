<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace EbaySdk\Api\Inventory\Types;

/**
 *
 * @property mixed $aspects
 * @property string $description
 * @property string[] $imageUrls
 * @property string $inventoryItemGroupKey
 * @property string $subtitle
 * @property string $title
 * @property string[] $variantSKUs
 * @property \EbaySdk\Api\Inventory\Types\VariesBy $variesBy
 */
class InventoryItemGroup extends \Plenty\Modules\Market\Ebay\Api\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'aspects' => [
            'type' => 'any',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'aspects'
        ],
        'description' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'description'
        ],
        'imageUrls' => [
            'type' => 'string',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'imageUrls'
        ],
        'inventoryItemGroupKey' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'inventoryItemGroupKey'
        ],
        'subtitle' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'subtitle'
        ],
        'title' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'title'
        ],
        'variantSKUs' => [
            'type' => 'string',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'variantSKUs'
        ],
        'variesBy' => [
            'type' => 'EbaySdk\Api\Inventory\Types\VariesBy',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'variesBy'
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
