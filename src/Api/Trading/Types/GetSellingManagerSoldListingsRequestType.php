<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace EbaySdk\Api\Trading\Types;

/**
 *
 * @property \EbaySdk\Trading\Types\SellingManagerSearchType $Search
 * @property integer $StoreCategoryID
 * @property \EbaySdk\Trading\Enums\SellingManagerSoldListingsPropertyTypeCodeType[] $Filter
 * @property boolean $Archived
 * @property \EbaySdk\Trading\Enums\SellingManagerSoldListingsSortTypeCodeType $Sort
 * @property \EbaySdk\Trading\Enums\SortOrderCodeType $SortOrder
 * @property \EbaySdk\Trading\Types\PaginationType $Pagination
 * @property \EbaySdk\Trading\Types\TimeRangeType $SaleDateRange
 */
class GetSellingManagerSoldListingsRequestType extends \EbaySdk\Api\Trading\Types\AbstractRequestType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'Search' => [
            'type' => 'EbaySdk\Trading\Types\SellingManagerSearchType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Search'
        ],
        'StoreCategoryID' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'StoreCategoryID'
        ],
        'Filter' => [
            'type' => 'string',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'Filter'
        ],
        'Archived' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Archived'
        ],
        'Sort' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Sort'
        ],
        'SortOrder' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SortOrder'
        ],
        'Pagination' => [
            'type' => 'EbaySdk\Trading\Types\PaginationType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Pagination'
        ],
        'SaleDateRange' => [
            'type' => 'EbaySdk\Trading\Types\TimeRangeType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SaleDateRange'
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

        if (!array_key_exists(__CLASS__, self::$requestXmlRootElementNames)) {
            self::$requestXmlRootElementNames[__CLASS__] = 'GetSellingManagerSoldListingsRequest';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
