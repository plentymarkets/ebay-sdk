<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace EbaySdk\Api\Shopping\Types;

/**
 *
 * @property boolean $BestOfferEnabled
 * @property \EbaySdk\Shopping\Types\AmountType $BuyItNowPrice
 * @property string $Description
 * @property string $ItemID
 * @property boolean $BuyItNowAvailable
 * @property \EbaySdk\Shopping\Types\AmountType $ConvertedBuyItNowPrice
 * @property \DateTime $EndTime
 * @property \DateTime $StartTime
 * @property string $ViewItemURLForNaturalSearch
 * @property \EbaySdk\Shopping\Enums\ListingTypeCodeType $ListingType
 * @property string $Location
 * @property \EbaySdk\Shopping\Enums\BuyerPaymentMethodCodeType[] $PaymentMethods
 * @property string $GalleryURL
 * @property string[] $PictureURL
 * @property string $PostalCode
 * @property string $PrimaryCategoryID
 * @property string $PrimaryCategoryName
 * @property integer $Quantity
 * @property \EbaySdk\Shopping\Types\SimpleUserType $Seller
 * @property integer $BidCount
 * @property \EbaySdk\Shopping\Types\AmountType $ConvertedCurrentPrice
 * @property \EbaySdk\Shopping\Types\AmountType $CurrentPrice
 * @property \EbaySdk\Shopping\Types\SimpleUserType $HighBidder
 * @property \EbaySdk\Shopping\Enums\ListingStatusCodeType $ListingStatus
 * @property integer $QuantitySold
 * @property boolean $ReserveMet
 * @property string[] $ShipToLocations
 * @property \EbaySdk\Shopping\Enums\SiteCodeType $Site
 * @property string $TimeLeft
 * @property string $Title
 * @property \EbaySdk\Shopping\Types\ShippingCostSummaryType $ShippingCostSummary
 * @property \EbaySdk\Shopping\Types\NameValueListArrayType $ItemSpecifics
 * @property integer $HitCount
 * @property string $Subtitle
 * @property string $PrimaryCategoryIDPath
 * @property string $SecondaryCategoryID
 * @property string $SecondaryCategoryName
 * @property string $SecondaryCategoryIDPath
 * @property \EbaySdk\Shopping\Types\CharityType $Charity
 * @property \EbaySdk\Shopping\Types\StorefrontType $Storefront
 * @property \EbaySdk\Shopping\Enums\CountryCodeType $Country
 * @property \EbaySdk\Shopping\Enums\HalfItemConditionCodeType $HalfItemCondition
 * @property string $SellerComments
 * @property \EbaySdk\Shopping\Types\ReturnPolicyType $ReturnPolicy
 * @property \EbaySdk\Shopping\Types\AmountType $MinimumToBid
 * @property \EbaySdk\Shopping\Types\ProductIDType $ProductID
 * @property boolean $AutoPay
 * @property \EbaySdk\Shopping\Types\BusinessSellerDetailsType $BusinessSellerDetails
 * @property \EbaySdk\Shopping\Enums\SiteCodeType[] $PaymentAllowedSite
 * @property boolean $IntegratedMerchantCreditCardEnabled
 * @property \EbaySdk\Shopping\Types\VariationsType $Variations
 * @property integer $HandlingTime
 * @property integer $LotSize
 * @property integer $ConditionID
 * @property string $ConditionDisplayName
 * @property \EbaySdk\Shopping\Enums\QuantityAvailableHintCodeType $QuantityAvailableHint
 * @property integer $QuantityThreshold
 * @property \EbaySdk\Shopping\Types\DiscountPriceInfoType $DiscountPriceInfo
 * @property string[] $ExcludeShipToLocation
 * @property boolean $TopRatedListing
 * @property string $VhrUrl
 * @property boolean $VhrAvailable
 * @property \EbaySdk\Shopping\Types\QuantityInfo $QuantityInfo
 * @property \EbaySdk\Shopping\Types\UnitInfoType $UnitInfo
 * @property boolean $GlobalShipping
 * @property string $ConditionDescription
 * @property integer $ItemCompatibilityCount
 * @property \EbaySdk\Shopping\Types\ItemCompatibilityListType $ItemCompatibilityList
 * @property integer $QuantitySoldByPickupInStore
 * @property string $SKU
 * @property boolean $NewBestOffer
 * @property boolean $eBayNowEligible
 * @property boolean $eBayNowAvailable
 * @property boolean $IgnoreQuantity
 * @property boolean $AvailableForPickupDropOff
 * @property boolean $EligibleForPickupDropOff
 */
class SimpleItemType extends \Plenty\Modules\Market\Ebay\Api\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'BestOfferEnabled' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'BestOfferEnabled'
        ],
        'BuyItNowPrice' => [
            'type' => 'EbaySdk\Shopping\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'BuyItNowPrice'
        ],
        'Description' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Description'
        ],
        'ItemID' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ItemID'
        ],
        'BuyItNowAvailable' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'BuyItNowAvailable'
        ],
        'ConvertedBuyItNowPrice' => [
            'type' => 'EbaySdk\Shopping\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ConvertedBuyItNowPrice'
        ],
        'EndTime' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'EndTime'
        ],
        'StartTime' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'StartTime'
        ],
        'ViewItemURLForNaturalSearch' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ViewItemURLForNaturalSearch'
        ],
        'ListingType' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ListingType'
        ],
        'Location' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Location'
        ],
        'PaymentMethods' => [
            'type' => 'string',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'PaymentMethods'
        ],
        'GalleryURL' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'GalleryURL'
        ],
        'PictureURL' => [
            'type' => 'string',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'PictureURL'
        ],
        'PostalCode' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PostalCode'
        ],
        'PrimaryCategoryID' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PrimaryCategoryID'
        ],
        'PrimaryCategoryName' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PrimaryCategoryName'
        ],
        'Quantity' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Quantity'
        ],
        'Seller' => [
            'type' => 'EbaySdk\Shopping\Types\SimpleUserType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Seller'
        ],
        'BidCount' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'BidCount'
        ],
        'ConvertedCurrentPrice' => [
            'type' => 'EbaySdk\Shopping\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ConvertedCurrentPrice'
        ],
        'CurrentPrice' => [
            'type' => 'EbaySdk\Shopping\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'CurrentPrice'
        ],
        'HighBidder' => [
            'type' => 'EbaySdk\Shopping\Types\SimpleUserType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'HighBidder'
        ],
        'ListingStatus' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ListingStatus'
        ],
        'QuantitySold' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'QuantitySold'
        ],
        'ReserveMet' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ReserveMet'
        ],
        'ShipToLocations' => [
            'type' => 'string',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'ShipToLocations'
        ],
        'Site' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Site'
        ],
        'TimeLeft' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'TimeLeft'
        ],
        'Title' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Title'
        ],
        'ShippingCostSummary' => [
            'type' => 'EbaySdk\Shopping\Types\ShippingCostSummaryType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ShippingCostSummary'
        ],
        'ItemSpecifics' => [
            'type' => 'EbaySdk\Shopping\Types\NameValueListArrayType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ItemSpecifics'
        ],
        'HitCount' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'HitCount'
        ],
        'Subtitle' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Subtitle'
        ],
        'PrimaryCategoryIDPath' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PrimaryCategoryIDPath'
        ],
        'SecondaryCategoryID' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SecondaryCategoryID'
        ],
        'SecondaryCategoryName' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SecondaryCategoryName'
        ],
        'SecondaryCategoryIDPath' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SecondaryCategoryIDPath'
        ],
        'Charity' => [
            'type' => 'EbaySdk\Shopping\Types\CharityType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Charity'
        ],
        'Storefront' => [
            'type' => 'EbaySdk\Shopping\Types\StorefrontType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Storefront'
        ],
        'Country' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Country'
        ],
        'HalfItemCondition' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'HalfItemCondition'
        ],
        'SellerComments' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SellerComments'
        ],
        'ReturnPolicy' => [
            'type' => 'EbaySdk\Shopping\Types\ReturnPolicyType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ReturnPolicy'
        ],
        'MinimumToBid' => [
            'type' => 'EbaySdk\Shopping\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'MinimumToBid'
        ],
        'ProductID' => [
            'type' => 'EbaySdk\Shopping\Types\ProductIDType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ProductID'
        ],
        'AutoPay' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'AutoPay'
        ],
        'BusinessSellerDetails' => [
            'type' => 'EbaySdk\Shopping\Types\BusinessSellerDetailsType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'BusinessSellerDetails'
        ],
        'PaymentAllowedSite' => [
            'type' => 'string',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'PaymentAllowedSite'
        ],
        'IntegratedMerchantCreditCardEnabled' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'IntegratedMerchantCreditCardEnabled'
        ],
        'Variations' => [
            'type' => 'EbaySdk\Shopping\Types\VariationsType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Variations'
        ],
        'HandlingTime' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'HandlingTime'
        ],
        'LotSize' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'LotSize'
        ],
        'ConditionID' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ConditionID'
        ],
        'ConditionDisplayName' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ConditionDisplayName'
        ],
        'QuantityAvailableHint' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'QuantityAvailableHint'
        ],
        'QuantityThreshold' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'QuantityThreshold'
        ],
        'DiscountPriceInfo' => [
            'type' => 'EbaySdk\Shopping\Types\DiscountPriceInfoType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'DiscountPriceInfo'
        ],
        'ExcludeShipToLocation' => [
            'type' => 'string',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'ExcludeShipToLocation'
        ],
        'TopRatedListing' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'TopRatedListing'
        ],
        'VhrUrl' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'VhrUrl'
        ],
        'VhrAvailable' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'VhrAvailable'
        ],
        'QuantityInfo' => [
            'type' => 'EbaySdk\Shopping\Types\QuantityInfo',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'QuantityInfo'
        ],
        'UnitInfo' => [
            'type' => 'EbaySdk\Shopping\Types\UnitInfoType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'UnitInfo'
        ],
        'GlobalShipping' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'GlobalShipping'
        ],
        'ConditionDescription' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ConditionDescription'
        ],
        'ItemCompatibilityCount' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ItemCompatibilityCount'
        ],
        'ItemCompatibilityList' => [
            'type' => 'EbaySdk\Shopping\Types\ItemCompatibilityListType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ItemCompatibilityList'
        ],
        'QuantitySoldByPickupInStore' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'QuantitySoldByPickupInStore'
        ],
        'SKU' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SKU'
        ],
        'NewBestOffer' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'NewBestOffer'
        ],
        'eBayNowEligible' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'eBayNowEligible'
        ],
        'eBayNowAvailable' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'eBayNowAvailable'
        ],
        'IgnoreQuantity' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'IgnoreQuantity'
        ],
        'AvailableForPickupDropOff' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'AvailableForPickupDropOff'
        ],
        'EligibleForPickupDropOff' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'EligibleForPickupDropOff'
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

        if (!array_key_exists(__CLASS__, self::$xmlNamespaces)) {
            self::$xmlNamespaces[__CLASS__] = 'xmlns="urn:ebay:apis:eBLBaseComponents"';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}