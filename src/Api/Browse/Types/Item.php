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
 * @property string $ageGroup
 * @property \EbaySdk\Browse\Enums\AvailabilityStatusEnum $availabilityStatusForShipToHome
 * @property integer $bidCount
 * @property string $brand
 * @property string[] $buyingOptions
 * @property string $categoryPath
 * @property string $color
 * @property string $condition
 * @property \EbaySdk\Browse\Types\Amount $currentBidPrice
 * @property string $description
 * @property string $energyEfficiencyClass
 * @property string $gender
 * @property string $gtin
 * @property \EbaySdk\Browse\Types\Image $image
 * @property string $itemAffiliateWebUrl
 * @property string $itemEndDate
 * @property string $itemId
 * @property \EbaySdk\Browse\Types\Address $itemLocation
 * @property string $itemWebUrl
 * @property \EbaySdk\Browse\Types\TypedNameValue[] $localizedAspects
 * @property \EbaySdk\Browse\Types\MarketingPrice $marketingPrice
 * @property string $material
 * @property string $mpn
 * @property string $pattern
 * @property \EbaySdk\Browse\Types\Amount $price
 * @property \EbaySdk\Browse\Enums\PriceDisplayConditionEnum $priceDisplayCondition
 * @property string $primaryItemGroupHref
 * @property string $primaryItemGroupId
 * @property \EbaySdk\Browse\Types\ReviewRating $primaryProductReviewRating
 * @property integer $quantityLimitPerBuyer
 * @property integer $quantitySold
 * @property \EbaySdk\Browse\Types\ItemReturnTerms $returnTerms
 * @property \EbaySdk\Browse\Types\Seller $seller
 * @property \EbaySdk\Browse\Types\ShippingOption[] $shippingOptions
 * @property string $shortDescription
 * @property string $size
 * @property string $sizeSystem
 * @property string $sizeType
 * @property string $subtitle
 * @property string $title
 * @property boolean $topRatedBuyingExperience
 * @property integer $uniqueBidderCount
 * @property \EbaySdk\Browse\Types\ErrorDetailV3[] $warnings
 */
class Item extends \Plenty\Modules\Market\Ebay\Api\Types\BaseType
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
        'bidCount' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'bidCount'
        ],
        'brand' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'brand'
        ],
        'buyingOptions' => [
            'type' => 'string',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'buyingOptions'
        ],
        'categoryPath' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'categoryPath'
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
        'currentBidPrice' => [
            'type' => 'EbaySdk\Browse\Types\Amount',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'currentBidPrice'
        ],
        'description' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'description'
        ],
        'energyEfficiencyClass' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'energyEfficiencyClass'
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
        'itemEndDate' => [
            'type' => 'string',
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
        'itemLocation' => [
            'type' => 'EbaySdk\Browse\Types\Address',
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
        'localizedAspects' => [
            'type' => 'EbaySdk\Browse\Types\TypedNameValue',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'localizedAspects'
        ],
        'marketingPrice' => [
            'type' => 'EbaySdk\Browse\Types\MarketingPrice',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'marketingPrice'
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
        'pattern' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'pattern'
        ],
        'price' => [
            'type' => 'EbaySdk\Browse\Types\Amount',
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
        'primaryItemGroupHref' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'primaryItemGroupHref'
        ],
        'primaryItemGroupId' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'primaryItemGroupId'
        ],
        'primaryProductReviewRating' => [
            'type' => 'EbaySdk\Browse\Types\ReviewRating',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'primaryProductReviewRating'
        ],
        'quantityLimitPerBuyer' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'quantityLimitPerBuyer'
        ],
        'quantitySold' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'quantitySold'
        ],
        'returnTerms' => [
            'type' => 'EbaySdk\Browse\Types\ItemReturnTerms',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'returnTerms'
        ],
        'seller' => [
            'type' => 'EbaySdk\Browse\Types\Seller',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'seller'
        ],
        'shippingOptions' => [
            'type' => 'EbaySdk\Browse\Types\ShippingOption',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'shippingOptions'
        ],
        'shortDescription' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'shortDescription'
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
        'topRatedBuyingExperience' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'topRatedBuyingExperience'
        ],
        'uniqueBidderCount' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'uniqueBidderCount'
        ],
        'warnings' => [
            'type' => 'EbaySdk\Browse\Types\ErrorDetailV3',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'warnings'
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