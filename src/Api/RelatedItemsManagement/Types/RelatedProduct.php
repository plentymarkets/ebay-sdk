<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace EbaySdk\Api\RelatedItemsManagement\Types;

/**
 *
 * @property string $SKU
 * @property \EbaySdk\Api\RelatedItemsManagement\Types\Discount $discount
 * @property integer $rank
 * @property string $title
 * @property integer $maxQtyForSinglePrimary
 */
class RelatedProduct extends \Plenty\Modules\Market\Ebay\Api\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'SKU' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SKU'
        ],
        'discount' => [
            'type' => 'EbaySdk\Api\RelatedItemsManagement\Types\Discount',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'discount'
        ],
        'rank' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'rank'
        ],
        'title' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'title'
        ],
        'maxQtyForSinglePrimary' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'maxQtyForSinglePrimary'
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

        if (!array_key_exists(__CLASS__, self::$xmlNamespaces)) {
            self::$xmlNamespaces[__CLASS__] = 'xmlns="http://www.ebay.com/marketplace/sellerinventory/v1/services"';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
