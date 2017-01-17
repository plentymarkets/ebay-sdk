<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace EbaySdk\Api\Browse\Types;

/**
 *
 * @property \EbaySdk\Browse\Types\Image[] $additionalImages
 * @property integer $bidCount
 * @property string[] $buyingOptions
 * @property \EbaySdk\Browse\Types\Category[] $categories
 * @property string $condition
 * @property \EbaySdk\Browse\Types\Amount_0 $currentBidPrice
 * @property \EbaySdk\Browse\Types\TargetLocation $distanceFromPickupLocation
 * @property string $energyEfficiencyClass
 * @property \EbaySdk\Browse\Types\Image $image
 * @property string $itemAffiliateWebUrl
 * @property string $itemGroupHref
 * @property string $itemId
 * @property \EbaySdk\Browse\Types\ItemLocationImpl $itemLocation
 * @property string $itemWebUrl
 * @property \EbaySdk\Browse\Types\MarketingPrice_0 $marketingPrice
 * @property \EbaySdk\Browse\Types\PickupOptionSummary[] $pickupOptions
 * @property \EbaySdk\Browse\Types\Amount_0 $price
 * @property \EbaySdk\Browse\Types\Seller $seller
 * @property \EbaySdk\Browse\Types\ShippingOptionSummary[] $shippingOptions
 * @property \EbaySdk\Browse\Types\Image[] $thumbnailImages
 * @property string $title
 * @property boolean $topRatedBuyingExperience
 */
class ItemSummary extends \Plenty\Modules\Market\Ebay\Api\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'additionalImages' => [
            'type' => 'EbaySdk\Browse\Types\Image',
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
            'type' => 'EbaySdk\Browse\Types\Category',
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
        'currentBidPrice' => [
            'type' => 'EbaySdk\Browse\Types\Amount_0',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'currentBidPrice'
        ],
        'distanceFromPickupLocation' => [
            'type' => 'EbaySdk\Browse\Types\TargetLocation',
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
        'image' => [
            'type' => 'EbaySdk\Browse\Types\Image',
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
        'itemId' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'itemId'
        ],
        'itemLocation' => [
            'type' => 'EbaySdk\Browse\Types\ItemLocationImpl',
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
            'type' => 'EbaySdk\Browse\Types\MarketingPrice_0',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'marketingPrice'
        ],
        'pickupOptions' => [
            'type' => 'EbaySdk\Browse\Types\PickupOptionSummary',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'pickupOptions'
        ],
        'price' => [
            'type' => 'EbaySdk\Browse\Types\Amount_0',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'price'
        ],
        'seller' => [
            'type' => 'EbaySdk\Browse\Types\Seller',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'seller'
        ],
        'shippingOptions' => [
            'type' => 'EbaySdk\Browse\Types\ShippingOptionSummary',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'shippingOptions'
        ],
        'thumbnailImages' => [
            'type' => 'EbaySdk\Browse\Types\Image',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'thumbnailImages'
        ],
        'title' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'title'
        ],
        'topRatedBuyingExperience' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'topRatedBuyingExperience'
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
