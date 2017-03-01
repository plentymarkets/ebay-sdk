<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace EbaySdk\Api\PostOrder\Types;

/**
 *
 * @property \EbaySdk\Api\PostOrder\Types\RefundDetailType $actualRefund
 * @property \EbaySdk\Api\PostOrder\Enums\ReturnRefundInitiatorEnum $refundInitiationType
 * @property \EbaySdk\Api\PostOrder\Types\DateTime $refundIssuedDate
 * @property string $refundStatus
 */
class ActualRefundDetailType extends \Plenty\Modules\Market\Ebay\Api\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'actualRefund' => [
            'type' => 'EbaySdk\Api\PostOrder\Types\RefundDetailType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'actualRefund'
        ],
        'refundInitiationType' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'refundInitiationType'
        ],
        'refundIssuedDate' => [
            'type' => 'EbaySdk\Api\PostOrder\Types\DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'refundIssuedDate'
        ],
        'refundStatus' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'refundStatus'
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
