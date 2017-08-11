<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace EbaySdk\Api\Browse\Types;

/**
 *
 * @property \EbaySdk\Api\Browse\Types\Image[] $additionalImages
 * @property integer $bidCount
 * @property string[] $buyingOptions
 * @property \EbaySdk\Api\Browse\Types\Category[] $categories
 * @property string $condition
 * @property string $conditionId
 * @property \EbaySdk\Api\Browse\Types\ConvertedAmount $currentBidPrice
 * @property \EbaySdk\Api\Browse\Types\TargetLocation $distanceFromPickupLocation
 * @property string $energyEfficiencyClass
 * @property string $epid
 * @property \EbaySdk\Api\Browse\Types\Image $image
 * @property string $itemAffiliateWebUrl
 * @property string $itemGroupHref
 * @property string $itemGroupType
 * @property string $itemHref
 * @property string $itemId
 * @property \EbaySdk\Api\Browse\Types\ItemLocationImpl $itemLocation
 * @property string $itemWebUrl
 * @property \EbaySdk\Api\Browse\Types\MarketingPrice $marketingPrice
 * @property \EbaySdk\Api\Browse\Types\PickupOptionSummary[] $pickupOptions
 * @property \EbaySdk\Api\Browse\Types\ConvertedAmount $price
 * @property \EbaySdk\Api\Browse\Types\Seller $seller
 * @property \EbaySdk\Api\Browse\Types\ShippingOptionSummary[] $shippingOptions
 * @property \EbaySdk\Api\Browse\Types\Image[] $thumbnailImages
 * @property string $title
 */
class ItemSummary extends \Plenty\Modules\Market\Ebay\Api\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'additionalImages' => [
            'type' => 'EbaySdk\Api\Browse\Types\Image',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'additionalImages'
        ],
        'bidCount' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'bidCount'
        ],
        'buyingOptions' => [
            'type' => 'string',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'buyingOptions'
        ],
        'categories' => [
            'type' => 'EbaySdk\Api\Browse\Types\Category',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'categories'
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
        'currentBidPrice' => [
            'type' => 'EbaySdk\Api\Browse\Types\ConvertedAmount',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'currentBidPrice'
        ],
        'distanceFromPickupLocation' => [
            'type' => 'EbaySdk\Api\Browse\Types\TargetLocation',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'distanceFromPickupLocation'
        ],
        'energyEfficiencyClass' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'energyEfficiencyClass'
        ],
        'epid' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'epid'
        ],
        'image' => [
            'type' => 'EbaySdk\Api\Browse\Types\Image',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'image'
        ],
        'itemAffiliateWebUrl' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'itemAffiliateWebUrl'
        ],
        'itemGroupHref' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'itemGroupHref'
        ],
        'itemGroupType' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'itemGroupType'
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
        'itemLocation' => [
            'type' => 'EbaySdk\Api\Browse\Types\ItemLocationImpl',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'itemLocation'
        ],
        'itemWebUrl' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'itemWebUrl'
        ],
        'marketingPrice' => [
            'type' => 'EbaySdk\Api\Browse\Types\MarketingPrice',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'marketingPrice'
        ],
        'pickupOptions' => [
            'type' => 'EbaySdk\Api\Browse\Types\PickupOptionSummary',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'pickupOptions'
        ],
        'price' => [
            'type' => 'EbaySdk\Api\Browse\Types\ConvertedAmount',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'price'
        ],
        'seller' => [
            'type' => 'EbaySdk\Api\Browse\Types\Seller',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'seller'
        ],
        'shippingOptions' => [
            'type' => 'EbaySdk\Api\Browse\Types\ShippingOptionSummary',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'shippingOptions'
        ],
        'thumbnailImages' => [
            'type' => 'EbaySdk\Api\Browse\Types\Image',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'thumbnailImages'
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
            self::$properties[__CLASS__] = array_merge(self::$properties[\Plenty\Modules\Market\Ebay\Api\Types\BaseType::class], self::$propertyTypes);
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
