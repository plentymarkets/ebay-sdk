<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace EbaySdk\Api\Trading\Types;

/**
 *
 * @property string $DisputeID
 * @property \EbaySdk\Trading\Enums\DisputeRecordTypeCodeType $DisputeRecordType
 * @property \EbaySdk\Trading\Enums\DisputeStateCodeType $DisputeState
 * @property \EbaySdk\Trading\Enums\DisputeStatusCodeType $DisputeStatus
 * @property \EbaySdk\Trading\Enums\TradingRoleCodeType $OtherPartyRole
 * @property string $OtherPartyName
 * @property \EbaySdk\Trading\Enums\TradingRoleCodeType $UserRole
 * @property string $BuyerUserID
 * @property string $SellerUserID
 * @property string $TransactionID
 * @property \EbaySdk\Trading\Types\ItemType $Item
 * @property \EbaySdk\Trading\Enums\DisputeReasonCodeType $DisputeReason
 * @property \EbaySdk\Trading\Enums\DisputeExplanationCodeType $DisputeExplanation
 * @property \EbaySdk\Trading\Enums\DisputeCreditEligibilityCodeType $DisputeCreditEligibility
 * @property \DateTime $DisputeCreatedTime
 * @property \DateTime $DisputeModifiedTime
 * @property \EbaySdk\Trading\Types\DisputeResolutionType[] $DisputeResolution
 * @property \EbaySdk\Trading\Types\DisputeMessageType[] $DisputeMessage
 * @property boolean $Escalation
 * @property boolean $PurchaseProtection
 * @property string $OrderLineItemID
 */
class DisputeType extends \Plenty\Modules\Market\Ebay\Api\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'DisputeID' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'DisputeID'
        ],
        'DisputeRecordType' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'DisputeRecordType'
        ],
        'DisputeState' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'DisputeState'
        ],
        'DisputeStatus' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'DisputeStatus'
        ],
        'OtherPartyRole' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'OtherPartyRole'
        ],
        'OtherPartyName' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'OtherPartyName'
        ],
        'UserRole' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'UserRole'
        ],
        'BuyerUserID' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'BuyerUserID'
        ],
        'SellerUserID' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SellerUserID'
        ],
        'TransactionID' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'TransactionID'
        ],
        'Item' => [
            'type' => 'EbaySdk\Trading\Types\ItemType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Item'
        ],
        'DisputeReason' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'DisputeReason'
        ],
        'DisputeExplanation' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'DisputeExplanation'
        ],
        'DisputeCreditEligibility' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'DisputeCreditEligibility'
        ],
        'DisputeCreatedTime' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'DisputeCreatedTime'
        ],
        'DisputeModifiedTime' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'DisputeModifiedTime'
        ],
        'DisputeResolution' => [
            'type' => 'EbaySdk\Trading\Types\DisputeResolutionType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'DisputeResolution'
        ],
        'DisputeMessage' => [
            'type' => 'EbaySdk\Trading\Types\DisputeMessageType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'DisputeMessage'
        ],
        'Escalation' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Escalation'
        ],
        'PurchaseProtection' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PurchaseProtection'
        ],
        'OrderLineItemID' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'OrderLineItemID'
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
