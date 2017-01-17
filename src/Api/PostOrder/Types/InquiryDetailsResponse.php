<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace EbaySdk\Api\PostOrder\Types;

/**
 *
 * @property \EbaySdk\PostOrder\Types\Amount $claimAmount
 * @property string $extTransactionId
 * @property \EbaySdk\PostOrder\Enums\UserPartyEnum $initiator
 * @property \EbaySdk\PostOrder\Types\InquiryDetails $inquiryDetails
 * @property \EbaySdk\PostOrder\Types\ClaimHistoryResponse $inquiryHistoryDetails
 * @property string $inquiryId
 * @property integer $inquiryQuantity
 * @property \EbaySdk\PostOrder\Types\ItemDetails $itemDetails
 * @property string $itemId
 * @property \EbaySdk\PostOrder\Types\ReturnAddress $returnDetails
 * @property \EbaySdk\PostOrder\Types\DateTime $sellerMakeItRightByDate
 * @property \EbaySdk\PostOrder\Types\Amount $shippingCost
 * @property string $state
 * @property string $status
 * @property string $transactionId
 * @property string $viewPPTrasanctionUrl
 */
class InquiryDetailsResponse extends \Plenty\Modules\Market\Ebay\Api\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'claimAmount' => [
            'type' => 'EbaySdk\PostOrder\Types\Amount',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'claimAmount'
        ],
        'extTransactionId' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'extTransactionId'
        ],
        'initiator' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'initiator'
        ],
        'inquiryDetails' => [
            'type' => 'EbaySdk\PostOrder\Types\InquiryDetails',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'inquiryDetails'
        ],
        'inquiryHistoryDetails' => [
            'type' => 'EbaySdk\PostOrder\Types\ClaimHistoryResponse',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'inquiryHistoryDetails'
        ],
        'inquiryId' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'inquiryId'
        ],
        'inquiryQuantity' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'inquiryQuantity'
        ],
        'itemDetails' => [
            'type' => 'EbaySdk\PostOrder\Types\ItemDetails',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'itemDetails'
        ],
        'itemId' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'itemId'
        ],
        'returnDetails' => [
            'type' => 'EbaySdk\PostOrder\Types\ReturnAddress',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'returnDetails'
        ],
        'sellerMakeItRightByDate' => [
            'type' => 'EbaySdk\PostOrder\Types\DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'sellerMakeItRightByDate'
        ],
        'shippingCost' => [
            'type' => 'EbaySdk\PostOrder\Types\Amount',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'shippingCost'
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
        ],
        'transactionId' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'transactionId'
        ],
        'viewPPTrasanctionUrl' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'viewPPTrasanctionUrl'
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