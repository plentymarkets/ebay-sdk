<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace EbaySdk\Api\PostOrder\Types;

/**
 *
 * @property \EbaySdk\Api\PostOrder\Types\AppealDetails $appealDetails
 * @property \EbaySdk\Api\PostOrder\Types\DateTime $creationDate
 * @property \EbaySdk\Api\PostOrder\Types\DateTime $escalationDate
 * @property \EbaySdk\Api\PostOrder\Types\DateTime $expirationDate
 * @property \EbaySdk\Api\PostOrder\Types\DateTime $lastBuyerRespDate
 * @property \EbaySdk\Api\PostOrder\Types\RefundAmounts $refundAmounts
 * @property \EbaySdk\Api\PostOrder\Types\DateTime $refundDeadlineDate
 * @property \EbaySdk\Api\PostOrder\Types\Amount $totalAmount
 */
class InquiryDetails extends \Plenty\Modules\Market\Ebay\Api\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'appealDetails' => [
            'type' => 'EbaySdk\Api\PostOrder\Types\AppealDetails',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'appealDetails'
        ],
        'creationDate' => [
            'type' => 'EbaySdk\Api\PostOrder\Types\DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'creationDate'
        ],
        'escalationDate' => [
            'type' => 'EbaySdk\Api\PostOrder\Types\DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'escalationDate'
        ],
        'expirationDate' => [
            'type' => 'EbaySdk\Api\PostOrder\Types\DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'expirationDate'
        ],
        'lastBuyerRespDate' => [
            'type' => 'EbaySdk\Api\PostOrder\Types\DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'lastBuyerRespDate'
        ],
        'refundAmounts' => [
            'type' => 'EbaySdk\Api\PostOrder\Types\RefundAmounts',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'refundAmounts'
        ],
        'refundDeadlineDate' => [
            'type' => 'EbaySdk\Api\PostOrder\Types\DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'refundDeadlineDate'
        ],
        'totalAmount' => [
            'type' => 'EbaySdk\Api\PostOrder\Types\Amount',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'totalAmount'
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
