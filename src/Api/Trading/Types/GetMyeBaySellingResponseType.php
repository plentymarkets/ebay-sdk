<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace EbaySdk\Api\Trading\Types;

/**
 *
 * @property \EbaySdk\Trading\Types\SellingSummaryType $SellingSummary
 * @property \EbaySdk\Trading\Types\PaginatedItemArrayType $ScheduledList
 * @property \EbaySdk\Trading\Types\PaginatedItemArrayType $ActiveList
 * @property \EbaySdk\Trading\Types\PaginatedOrderTransactionArrayType $SoldList
 * @property \EbaySdk\Trading\Types\PaginatedItemArrayType $UnsoldList
 * @property \EbaySdk\Trading\Types\MyeBaySellingSummaryType $Summary
 * @property \EbaySdk\Trading\Types\PaginatedItemArrayType $BidList
 * @property \EbaySdk\Trading\Types\PaginatedOrderTransactionArrayType $DeletedFromSoldList
 * @property \EbaySdk\Trading\Types\PaginatedItemArrayType $DeletedFromUnsoldList
 */
class GetMyeBaySellingResponseType extends \EbaySdk\Api\Trading\Types\AbstractResponseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'SellingSummary' => [
            'type' => 'EbaySdk\Trading\Types\SellingSummaryType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SellingSummary'
        ],
        'ScheduledList' => [
            'type' => 'EbaySdk\Trading\Types\PaginatedItemArrayType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ScheduledList'
        ],
        'ActiveList' => [
            'type' => 'EbaySdk\Trading\Types\PaginatedItemArrayType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ActiveList'
        ],
        'SoldList' => [
            'type' => 'EbaySdk\Trading\Types\PaginatedOrderTransactionArrayType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SoldList'
        ],
        'UnsoldList' => [
            'type' => 'EbaySdk\Trading\Types\PaginatedItemArrayType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'UnsoldList'
        ],
        'Summary' => [
            'type' => 'EbaySdk\Trading\Types\MyeBaySellingSummaryType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Summary'
        ],
        'BidList' => [
            'type' => 'EbaySdk\Trading\Types\PaginatedItemArrayType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'BidList'
        ],
        'DeletedFromSoldList' => [
            'type' => 'EbaySdk\Trading\Types\PaginatedOrderTransactionArrayType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'DeletedFromSoldList'
        ],
        'DeletedFromUnsoldList' => [
            'type' => 'EbaySdk\Trading\Types\PaginatedItemArrayType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'DeletedFromUnsoldList'
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