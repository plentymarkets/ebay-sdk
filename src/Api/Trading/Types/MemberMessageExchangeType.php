<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace EbaySdk\Api\Trading\Types;

/**
 *
 * @property \EbaySdk\Api\Trading\Types\ItemType $Item
 * @property \EbaySdk\Api\Trading\Types\MemberMessageType $Question
 * @property string[] $Response
 * @property \EbaySdk\Api\Trading\Enums\MessageStatusTypeCodeType $MessageStatus
 * @property \DateTime $CreationDate
 * @property \DateTime $LastModifiedDate
 * @property \EbaySdk\Api\Trading\Types\MessageMediaType[] $MessageMedia
 */
class MemberMessageExchangeType extends \Plenty\Modules\Market\Ebay\Api\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'Item' => [
            'type' => 'EbaySdk\Api\Trading\Types\ItemType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Item'
        ],
        'Question' => [
            'type' => 'EbaySdk\Api\Trading\Types\MemberMessageType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Question'
        ],
        'Response' => [
            'type' => 'string',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'Response'
        ],
        'MessageStatus' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'MessageStatus'
        ],
        'CreationDate' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'CreationDate'
        ],
        'LastModifiedDate' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'LastModifiedDate'
        ],
        'MessageMedia' => [
            'type' => 'EbaySdk\Api\Trading\Types\MessageMediaType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'MessageMedia'
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
