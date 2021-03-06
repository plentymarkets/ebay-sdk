<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace EbaySdk\Api\Trading\Types;

/**
 *
 * @property \EbaySdk\Api\Trading\Types\BestOfferArrayType $BestOfferArray
 * @property \EbaySdk\Api\Trading\Types\ItemType $Item
 * @property \EbaySdk\Api\Trading\Types\ItemBestOffersArrayType $ItemBestOffersArray
 * @property integer $PageNumber
 * @property \EbaySdk\Api\Trading\Types\PaginationResultType $PaginationResult
 */
class GetBestOffersResponseType extends \EbaySdk\Api\Trading\Types\AbstractResponseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'BestOfferArray' => [
            'type' => 'EbaySdk\Api\Trading\Types\BestOfferArrayType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'BestOfferArray'
        ],
        'Item' => [
            'type' => 'EbaySdk\Api\Trading\Types\ItemType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Item'
        ],
        'ItemBestOffersArray' => [
            'type' => 'EbaySdk\Api\Trading\Types\ItemBestOffersArrayType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ItemBestOffersArray'
        ],
        'PageNumber' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PageNumber'
        ],
        'PaginationResult' => [
            'type' => 'EbaySdk\Api\Trading\Types\PaginationResultType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PaginationResult'
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
            self::$properties[__CLASS__] = array_merge(self::$properties[\EbaySdk\Api\Trading\Types\AbstractResponseType::class], self::$propertyTypes);
        }

        if (!array_key_exists(__CLASS__, self::$xmlNamespaces)) {
            self::$xmlNamespaces[__CLASS__] = 'xmlns="urn:ebay:apis:eBLBaseComponents"';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
