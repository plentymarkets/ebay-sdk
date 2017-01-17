<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace EbaySdk\Api\Browse\Types;

/**
 *
 * @property string[] $additionalImageUrls
 * @property string $ageGroup
 * @property string $brand
 * @property string $category
 * @property string $categoryId
 * @property string $color
 * @property string $condition
 * @property string $conditionId
 * @property string $description
 * @property string $gender
 * @property string $gtin
 * @property string $imageUrl
 * @property \DateTime $itemEndDate
 * @property string $itemId
 * @property string $material
 * @property string $mpn
 * @property \EbaySdk\Browse\Enums\CurrencyCodeEnum $priceCurrency
 * @property string $priceValue
 * @property integer $quantity
 * @property string $sellerFeedbackPercentage
 * @property integer $sellerFeedbackScore
 * @property string $sellerUsername
 * @property string $shipsTo
 * @property string $size
 * @property string $sizeType
 * @property string $title
 */
class ItemFeed extends \Plenty\Modules\Market\Ebay\Api\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'additionalImageUrls' => [
            'type' => 'string',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'additionalImageUrls'
        ],
        'ageGroup' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ageGroup'
        ],
        'brand' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'brand'
        ],
        'category' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'category'
        ],
        'categoryId' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'categoryId'
        ],
        'color' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'color'
        ],
        'condition' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'condition'
        ],
        'conditionId' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'conditionId'
        ],
        'description' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'description'
        ],
        'gender' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'gender'
        ],
        'gtin' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'gtin'
        ],
        'imageUrl' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'imageUrl'
        ],
        'itemEndDate' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'itemEndDate'
        ],
        'itemId' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'itemId'
        ],
        'material' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'material'
        ],
        'mpn' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'mpn'
        ],
        'priceCurrency' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'priceCurrency'
        ],
        'priceValue' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'priceValue'
        ],
        'quantity' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'quantity'
        ],
        'sellerFeedbackPercentage' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'sellerFeedbackPercentage'
        ],
        'sellerFeedbackScore' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'sellerFeedbackScore'
        ],
        'sellerUsername' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'sellerUsername'
        ],
        'shipsTo' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'shipsTo'
        ],
        'size' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'size'
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