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
 * @property \EbaySdk\Api\PostOrder\Enums\DecisionEnum $decision
 * @property \EbaySdk\Api\PostOrder\Types\Amount $partialRefundAmount
 * @property string $RMANumber
 */
class DecideReturnRequest extends \Plenty\Modules\Market\Ebay\Api\Types\BaseType
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
        'decision' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'decision'
        ],
        'partialRefundAmount' => [
            'type' => 'EbaySdk\Api\PostOrder\Types\Amount',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'partialRefundAmount'
        ],
        'RMANumber' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'RMANumber'
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

        $this->setValues(__CLASS__, $childValues);
    }
}
