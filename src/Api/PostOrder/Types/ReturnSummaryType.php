<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace EbaySdk\Api\PostOrder\Types;

/**
 *
 * @property \EbaySdk\PostOrder\Types\AvailableOptionType[] $buyerAvailableOptions
 * @property string $buyerLoginName
 * @property \EbaySdk\PostOrder\Types\ReturnResponseDueType $buyerResponseDue
 * @property \EbaySdk\PostOrder\Types\TotalRefundAmountType $buyerTotalRefund
 * @property \EbaySdk\PostOrder\Types\ReturnCreationInfoType $creationInfo
 * @property \EbaySdk\PostOrder\Enums\ReturnTypeEnum $currentType
 * @property \EbaySdk\PostOrder\Enums\DispositionRuleTemplateTypeEnum[] $dispositionRuleTriggered
 * @property \EbaySdk\PostOrder\Types\EscalationInfoType $escalationInfo
 * @property string $returnId
 * @property \EbaySdk\PostOrder\Types\ReturnPolicyType $returnPolicy
 * @property \EbaySdk\PostOrder\Types\AvailableOptionType[] $sellerAvailableOptions
 * @property string $sellerLoginName
 * @property \EbaySdk\PostOrder\Types\ReturnResponseDueType $sellerResponseDue
 * @property \EbaySdk\PostOrder\Types\TotalRefundAmountType $sellerTotalRefund
 * @property string $state
 * @property string $status
 */
class ReturnSummaryType extends \Plenty\Modules\Market\Ebay\Api\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'buyerAvailableOptions' => [
            'type' => 'EbaySdk\PostOrder\Types\AvailableOptionType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'buyerAvailableOptions'
        ],
        'buyerLoginName' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'buyerLoginName'
        ],
        'buyerResponseDue' => [
            'type' => 'EbaySdk\PostOrder\Types\ReturnResponseDueType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'buyerResponseDue'
        ],
        'buyerTotalRefund' => [
            'type' => 'EbaySdk\PostOrder\Types\TotalRefundAmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'buyerTotalRefund'
        ],
        'creationInfo' => [
            'type' => 'EbaySdk\PostOrder\Types\ReturnCreationInfoType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'creationInfo'
        ],
        'currentType' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'currentType'
        ],
        'dispositionRuleTriggered' => [
            'type' => 'string',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'dispositionRuleTriggered'
        ],
        'escalationInfo' => [
            'type' => 'EbaySdk\PostOrder\Types\EscalationInfoType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'escalationInfo'
        ],
        'returnId' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'returnId'
        ],
        'returnPolicy' => [
            'type' => 'EbaySdk\PostOrder\Types\ReturnPolicyType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'returnPolicy'
        ],
        'sellerAvailableOptions' => [
            'type' => 'EbaySdk\PostOrder\Types\AvailableOptionType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'sellerAvailableOptions'
        ],
        'sellerLoginName' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'sellerLoginName'
        ],
        'sellerResponseDue' => [
            'type' => 'EbaySdk\PostOrder\Types\ReturnResponseDueType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'sellerResponseDue'
        ],
        'sellerTotalRefund' => [
            'type' => 'EbaySdk\PostOrder\Types\TotalRefundAmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'sellerTotalRefund'
        ],
        'state' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'state'
        ],
        'status' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'status'
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
