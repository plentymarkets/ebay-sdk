<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace EbaySdk\Api\Browse\Types;

/**
 *
 * @property string $ageGroup
 * @property \EbaySdk\Api\Browse\Enums\AvailabilityStatusEnum $availabilityStatusForShipToHome
 * @property string $brand
 * @property string $color
 * @property string $gender
 * @property \EbaySdk\Api\Browse\Types\Image $image
 * @property string $itemHref
 * @property string $itemId
 * @property \EbaySdk\Api\Browse\Types\TypedNameValue[] $localizedAspects
 * @property string $material
 * @property string $pattern
 * @property \EbaySdk\Api\Browse\Types\Amount $price
 * @property \EbaySdk\Api\Browse\Enums\PriceDisplayConditionEnum $priceDisplayCondition
 * @property integer $quantitySold
 * @property string $size
 * @property string $sizeSystem
 * @property string $sizeType
 * @property string $title
 */
class ItemDigest extends \Plenty\Modules\Market\Ebay\Api\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'ageGroup' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ageGroup'
        ],
        'availabilityStatusForShipToHome' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'availabilityStatusForShipToHome'
        ],
        'brand' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'brand'
        ],
        'color' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'color'
        ],
        'gender' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'gender'
        ],
        'image' => [
            'type' => 'EbaySdk\Api\Browse\Types\Image',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'image'
        ],
        'itemHref' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'itemHref'
        ],
        'itemId' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'itemId'
        ],
        'localizedAspects' => [
            'type' => 'EbaySdk\Api\Browse\Types\TypedNameValue',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'localizedAspects'
        ],
        'material' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'material'
        ],
        'pattern' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'pattern'
        ],
        'price' => [
            'type' => 'EbaySdk\Api\Browse\Types\Amount',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'price'
        ],
        'priceDisplayCondition' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'priceDisplayCondition'
        ],
        'quantitySold' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'quantitySold'
        ],
        'size' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'size'
        ],
        'sizeSystem' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'sizeSystem'
        ],
        'sizeType' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'sizeType'
        ],
        'title' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'title'
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
