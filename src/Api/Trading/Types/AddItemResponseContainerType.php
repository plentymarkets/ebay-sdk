<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace EbaySdk\Api\Trading\Types;

/**
 *
 * @property string $ItemID
 * @property \DateTime $StartTime
 * @property \DateTime $EndTime
 * @property \EbaySdk\Trading\Types\FeesType $Fees
 * @property string $CategoryID
 * @property string $Category2ID
 * @property string $CorrelationID
 * @property \EbaySdk\Trading\Types\ErrorType[] $Errors
 * @property string $Message
 * @property \EbaySdk\Trading\Enums\DiscountReasonCodeType[] $DiscountReason
 * @property \EbaySdk\Trading\Types\ListingRecommendationsType $ListingRecommendations
 */
class AddItemResponseContainerType extends \Plenty\Modules\Market\Ebay\Api\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'ItemID' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ItemID'
        ],
        'StartTime' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'StartTime'
        ],
        'EndTime' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'EndTime'
        ],
        'Fees' => [
            'type' => 'EbaySdk\Trading\Types\FeesType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Fees'
        ],
        'CategoryID' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'CategoryID'
        ],
        'Category2ID' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Category2ID'
        ],
        'CorrelationID' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'CorrelationID'
        ],
        'Errors' => [
            'type' => 'EbaySdk\Trading\Types\ErrorType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'Errors'
        ],
        'Message' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Message'
        ],
        'DiscountReason' => [
            'type' => 'string',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'DiscountReason'
        ],
        'ListingRecommendations' => [
            'type' => 'EbaySdk\Trading\Types\ListingRecommendationsType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ListingRecommendations'
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
