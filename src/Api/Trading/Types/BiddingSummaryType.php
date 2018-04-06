<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace EbaySdk\Api\Trading\Types;

/**
 *
 * @property integer $SummaryDays
 * @property integer $TotalBids
 * @property integer $BidActivityWithSeller
 * @property integer $BidsToUniqueSellers
 * @property integer $BidsToUniqueCategories
 * @property integer $BidRetractions
 * @property \EbaySdk\Api\Trading\Types\ItemBidDetailsType[] $ItemBidDetails
 */
class BiddingSummaryType extends \Plenty\Modules\Market\Ebay\Api\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'SummaryDays' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SummaryDays'
        ],
        'TotalBids' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'TotalBids'
        ],
        'BidActivityWithSeller' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'BidActivityWithSeller'
        ],
        'BidsToUniqueSellers' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'BidsToUniqueSellers'
        ],
        'BidsToUniqueCategories' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'BidsToUniqueCategories'
        ],
        'BidRetractions' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'BidRetractions'
        ],
        'ItemBidDetails' => [
            'type' => 'EbaySdk\Api\Trading\Types\ItemBidDetailsType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'ItemBidDetails'
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
