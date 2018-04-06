<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace EbaySdk\Api\Trading\Types;

/**
 *
 * @property boolean $ActiveItemsOnly
 * @property \DateTime $EndTimeFrom
 * @property \DateTime $EndTimeTo
 * @property string $UserID
 * @property \EbaySdk\Api\Trading\Enums\GranularityLevelCodeType $GranularityLevel
 */
class GetBidderListRequestType extends \EbaySdk\Api\Trading\Types\AbstractRequestType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'ActiveItemsOnly' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ActiveItemsOnly'
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
        'UserID' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'UserID'
        ],
        'GranularityLevel' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'GranularityLevel'
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
            self::$requestXmlRootElementNames[__CLASS__] = 'GetBidderListRequest';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}