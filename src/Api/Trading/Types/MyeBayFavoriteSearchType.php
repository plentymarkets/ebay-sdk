<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace EbaySdk\Api\Trading\Types;

/**
 *
 * @property string $SearchName
 * @property string $SearchQuery
 * @property string $QueryKeywords
 * @property string $CategoryID
 * @property \EbaySdk\Trading\Enums\SimpleItemSortCodeType $ItemSort
 * @property \EbaySdk\Trading\Enums\SortOrderCodeType $SortOrder
 * @property \DateTime $EndTimeFrom
 * @property \DateTime $EndTimeTo
 * @property integer $MaxDistance
 * @property string $PostalCode
 * @property \EbaySdk\Trading\Enums\ItemTypeCodeType $ItemType
 * @property \EbaySdk\Trading\Types\AmountType $PriceMax
 * @property \EbaySdk\Trading\Types\AmountType $PriceMin
 * @property \EbaySdk\Trading\Enums\CurrencyCodeType $Currency
 * @property integer $BidCountMax
 * @property integer $BidCountMin
 * @property \EbaySdk\Trading\Enums\SearchFlagCodeType[] $SearchFlag
 * @property \EbaySdk\Trading\Enums\PaymentMethodSearchCodeType $PaymentMethod
 * @property \EbaySdk\Trading\Enums\PreferredLocationCodeType $PreferredLocation
 * @property string[] $SellerID
 * @property string[] $SellerIDExclude
 * @property \EbaySdk\Trading\Enums\CountryCodeType $ItemsAvailableTo
 * @property \EbaySdk\Trading\Enums\CountryCodeType $ItemsLocatedIn
 * @property \EbaySdk\Trading\Enums\SellerBusinessCodeType $SellerBusinessType
 * @property \EbaySdk\Trading\Enums\ItemConditionCodeType $Condition
 * @property integer $Quantity
 * @property \EbaySdk\Trading\Enums\QuantityOperatorCodeType $QuantityOperator
 */
class MyeBayFavoriteSearchType extends \Plenty\Modules\Market\Ebay\Api\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'SearchName' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SearchName'
        ],
        'SearchQuery' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SearchQuery'
        ],
        'QueryKeywords' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'QueryKeywords'
        ],
        'CategoryID' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'CategoryID'
        ],
        'ItemSort' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ItemSort'
        ],
        'SortOrder' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SortOrder'
        ],
        'EndTimeFrom' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'EndTimeFrom'
        ],
        'EndTimeTo' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'EndTimeTo'
        ],
        'MaxDistance' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'MaxDistance'
        ],
        'PostalCode' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PostalCode'
        ],
        'ItemType' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ItemType'
        ],
        'PriceMax' => [
            'type' => 'EbaySdk\Trading\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PriceMax'
        ],
        'PriceMin' => [
            'type' => 'EbaySdk\Trading\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PriceMin'
        ],
        'Currency' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Currency'
        ],
        'BidCountMax' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'BidCountMax'
        ],
        'BidCountMin' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'BidCountMin'
        ],
        'SearchFlag' => [
            'type' => 'string',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'SearchFlag'
        ],
        'PaymentMethod' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PaymentMethod'
        ],
        'PreferredLocation' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PreferredLocation'
        ],
        'SellerID' => [
            'type' => 'string',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'SellerID'
        ],
        'SellerIDExclude' => [
            'type' => 'string',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'SellerIDExclude'
        ],
        'ItemsAvailableTo' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ItemsAvailableTo'
        ],
        'ItemsLocatedIn' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ItemsLocatedIn'
        ],
        'SellerBusinessType' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SellerBusinessType'
        ],
        'Condition' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Condition'
        ],
        'Quantity' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Quantity'
        ],
        'QuantityOperator' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'QuantityOperator'
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
