<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace EbaySdk\Api\Trading\Types;

/**
 *
 * @property \EbaySdk\Api\Trading\Types\ItemListCustomizationType $WatchList
 * @property \EbaySdk\Api\Trading\Types\ItemListCustomizationType $BidList
 * @property \EbaySdk\Api\Trading\Types\ItemListCustomizationType $BestOfferList
 * @property \EbaySdk\Api\Trading\Types\ItemListCustomizationType $WonList
 * @property \EbaySdk\Api\Trading\Types\ItemListCustomizationType $LostList
 * @property \EbaySdk\Api\Trading\Types\MyeBaySelectionType $FavoriteSearches
 * @property \EbaySdk\Api\Trading\Types\MyeBaySelectionType $FavoriteSellers
 * @property \EbaySdk\Api\Trading\Types\MyeBaySelectionType $SecondChanceOffer
 * @property \EbaySdk\Api\Trading\Types\ItemListCustomizationType $DeletedFromWonList
 * @property \EbaySdk\Api\Trading\Types\ItemListCustomizationType $DeletedFromLostList
 * @property \EbaySdk\Api\Trading\Types\ItemListCustomizationType $BuyingSummary
 * @property \EbaySdk\Api\Trading\Types\MyeBaySelectionType $UserDefinedLists
 * @property boolean $HideVariations
 */
class GetMyeBayBuyingRequestType extends \EbaySdk\Api\Trading\Types\AbstractRequestType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'WatchList' => [
            'type' => 'EbaySdk\Api\Trading\Types\ItemListCustomizationType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'WatchList'
        ],
        'BidList' => [
            'type' => 'EbaySdk\Api\Trading\Types\ItemListCustomizationType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'BidList'
        ],
        'BestOfferList' => [
            'type' => 'EbaySdk\Api\Trading\Types\ItemListCustomizationType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'BestOfferList'
        ],
        'WonList' => [
            'type' => 'EbaySdk\Api\Trading\Types\ItemListCustomizationType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'WonList'
        ],
        'LostList' => [
            'type' => 'EbaySdk\Api\Trading\Types\ItemListCustomizationType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'LostList'
        ],
        'FavoriteSearches' => [
            'type' => 'EbaySdk\Api\Trading\Types\MyeBaySelectionType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'FavoriteSearches'
        ],
        'FavoriteSellers' => [
            'type' => 'EbaySdk\Api\Trading\Types\MyeBaySelectionType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'FavoriteSellers'
        ],
        'SecondChanceOffer' => [
            'type' => 'EbaySdk\Api\Trading\Types\MyeBaySelectionType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SecondChanceOffer'
        ],
        'DeletedFromWonList' => [
            'type' => 'EbaySdk\Api\Trading\Types\ItemListCustomizationType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'DeletedFromWonList'
        ],
        'DeletedFromLostList' => [
            'type' => 'EbaySdk\Api\Trading\Types\ItemListCustomizationType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'DeletedFromLostList'
        ],
        'BuyingSummary' => [
            'type' => 'EbaySdk\Api\Trading\Types\ItemListCustomizationType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'BuyingSummary'
        ],
        'UserDefinedLists' => [
            'type' => 'EbaySdk\Api\Trading\Types\MyeBaySelectionType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'UserDefinedLists'
        ],
        'HideVariations' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'HideVariations'
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
            self::$properties[__CLASS__] = array_merge(self::$properties[\EbaySdk\Api\Trading\Types\AbstractRequestType::class], self::$propertyTypes);
        }

        if (!array_key_exists(__CLASS__, self::$xmlNamespaces)) {
            self::$xmlNamespaces[__CLASS__] = 'xmlns="urn:ebay:apis:eBLBaseComponents"';
        }

        if (!array_key_exists(__CLASS__, self::$requestXmlRootElementNames)) {
            self::$requestXmlRootElementNames[__CLASS__] = 'GetMyeBayBuyingRequest';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
