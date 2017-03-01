<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace EbaySdk\Api\PostOrder\Types;

/**
 *
 * @property \EbaySdk\Api\PostOrder\Types\ActionDeadlines $actionDeadlines
 * @property \EbaySdk\Api\PostOrder\Types\AppealDetails $appealDetails
 * @property string $buyerClosureReason
 * @property string $buyerProtectedProgramLink
 * @property \EbaySdk\Api\PostOrder\Types\CaseDetails $caseDetails
 * @property \EbaySdk\Api\PostOrder\Types\ClaimHistoryResponse $caseHistoryDetails
 * @property string $caseId
 * @property integer $caseQuantity
 * @property string $caseType
 * @property \EbaySdk\Api\PostOrder\Types\Amount $claimAmount
 * @property \EbaySdk\Api\PostOrder\Types\DateTime $creationDate
 * @property \EbaySdk\Api\PostOrder\Enums\UserPartyEnum $escalatedBy
 * @property string $escalateReason
 * @property string $eventTicketsLink
 * @property string $extTransactionId
 * @property integer $fsnadDaysToAddTrackingAfterShippingItem
 * @property \EbaySdk\Api\PostOrder\Types\DateTime $fsnadShipToSellerByDate
 * @property \EbaySdk\Api\PostOrder\Enums\UserPartyEnum $initiator
 * @property string $itemId
 * @property \EbaySdk\Api\PostOrder\Types\DateTime $lastModifiedDate
 * @property string $payForItemLink
 * @property string $priceSignatureConfirmationAmount
 * @property string $recalledItemLink
 * @property \EbaySdk\Api\PostOrder\Types\ReturnAddress $returnDetails
 * @property string $returnId
 * @property string $sellerClosureReason
 * @property \EbaySdk\Api\PostOrder\Types\Amount $shippingFee
 * @property string $status
 * @property string $transactionId
 */
class CaseDetailsResponse extends \Plenty\Modules\Market\Ebay\Api\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'actionDeadlines' => [
            'type' => 'EbaySdk\Api\PostOrder\Types\ActionDeadlines',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'actionDeadlines'
        ],
        'appealDetails' => [
            'type' => 'EbaySdk\Api\PostOrder\Types\AppealDetails',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'appealDetails'
        ],
        'buyerClosureReason' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'buyerClosureReason'
        ],
        'buyerProtectedProgramLink' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'buyerProtectedProgramLink'
        ],
        'caseDetails' => [
            'type' => 'EbaySdk\Api\PostOrder\Types\CaseDetails',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'caseDetails'
        ],
        'caseHistoryDetails' => [
            'type' => 'EbaySdk\Api\PostOrder\Types\ClaimHistoryResponse',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'caseHistoryDetails'
        ],
        'caseId' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'caseId'
        ],
        'caseQuantity' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'caseQuantity'
        ],
        'caseType' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'caseType'
        ],
        'claimAmount' => [
            'type' => 'EbaySdk\Api\PostOrder\Types\Amount',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'claimAmount'
        ],
        'creationDate' => [
            'type' => 'EbaySdk\Api\PostOrder\Types\DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'creationDate'
        ],
        'escalatedBy' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'escalatedBy'
        ],
        'escalateReason' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'escalateReason'
        ],
        'eventTicketsLink' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'eventTicketsLink'
        ],
        'extTransactionId' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'extTransactionId'
        ],
        'fsnadDaysToAddTrackingAfterShippingItem' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'fsnadDaysToAddTrackingAfterShippingItem'
        ],
        'fsnadShipToSellerByDate' => [
            'type' => 'EbaySdk\Api\PostOrder\Types\DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'fsnadShipToSellerByDate'
        ],
        'initiator' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'initiator'
        ],
        'itemId' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'itemId'
        ],
        'lastModifiedDate' => [
            'type' => 'EbaySdk\Api\PostOrder\Types\DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'lastModifiedDate'
        ],
        'payForItemLink' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'payForItemLink'
        ],
        'priceSignatureConfirmationAmount' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'priceSignatureConfirmationAmount'
        ],
        'recalledItemLink' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'recalledItemLink'
        ],
        'returnDetails' => [
            'type' => 'EbaySdk\Api\PostOrder\Types\ReturnAddress',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'returnDetails'
        ],
        'returnId' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'returnId'
        ],
        'sellerClosureReason' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'sellerClosureReason'
        ],
        'shippingFee' => [
            'type' => 'EbaySdk\Api\PostOrder\Types\Amount',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'shippingFee'
        ],
        'status' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'status'
        ],
        'transactionId' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'transactionId'
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
