<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace EbaySdk\Api\PostOrder\Types;

/**
 *
 * @property \EbaySdk\Api\PostOrder\Types\Text $comments
 * @property \EbaySdk\Api\PostOrder\Types\DateTime $creationDate
 * @property \EbaySdk\Api\PostOrder\Types\ReturnItemType $item
 * @property \EbaySdk\Api\PostOrder\Enums\ReturnReasonEnum $reason
 * @property \EbaySdk\Api\PostOrder\Enums\ReturnTypeEnum $type
 */
class ReturnCreationInfoType extends \Plenty\Modules\Market\Ebay\Api\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'comments' => [
            'type' => 'EbaySdk\Api\PostOrder\Types\Text',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'comments'
        ],
        'creationDate' => [
            'type' => 'EbaySdk\Api\PostOrder\Types\DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'creationDate'
        ],
        'item' => [
            'type' => 'EbaySdk\Api\PostOrder\Types\ReturnItemType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'item'
        ],
        'reason' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'reason'
        ],
        'type' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'type'
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

        $this->setValues(__CLASS__, $childValues);
    }
}
