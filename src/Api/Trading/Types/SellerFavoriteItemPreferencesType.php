<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace EbaySdk\Api\Trading\Types;

/**
 *
 * @property string $SearchKeywords
 * @property integer $StoreCategoryID
 * @property \EbaySdk\Api\Trading\Enums\ListingTypeCodeType $ListingType
 * @property \EbaySdk\Api\Trading\Enums\StoreItemListSortOrderCodeType $SearchSortOrder
 * @property \EbaySdk\Api\Trading\Types\AmountType $MinPrice
 * @property \EbaySdk\Api\Trading\Types\AmountType $MaxPrice
 * @property string[] $FavoriteItemID
 */
class SellerFavoriteItemPreferencesType extends \Plenty\Modules\Market\Ebay\Api\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'SearchKeywords' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SearchKeywords'
        ],
        'StoreCategoryID' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'StoreCategoryID'
        ],
        'ListingType' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ListingType'
        ],
        'SearchSortOrder' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SearchSortOrder'
        ],
        'MinPrice' => [
            'type' => 'EbaySdk\Api\Trading\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'MinPrice'
        ],
        'MaxPrice' => [
            'type' => 'EbaySdk\Api\Trading\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'MaxPrice'
        ],
        'FavoriteItemID' => [
            'type' => 'string',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'FavoriteItemID'
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
            self::$xmlNamespaces[__CLASS__] = 'xmlns="urn:ebay:apis:eBLBaseComponents"';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
