<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace EbaySdk\Api\PostOrder\Types;

/**
 *
 * @property \EbaySdk\Api\PostOrder\Types\ReturnAddressType $buyerAddress
 * @property string $buyerLoginName
 * @property \EbaySdk\Api\PostOrder\Types\ReturnCloseInfoType $closeInfo
 * @property \EbaySdk\Api\PostOrder\Types\DispositionRuleDetailType[] $dispositionRuleDetail
 * @property \EbaySdk\Api\PostOrder\Types\ReturnFileType[] $files
 * @property \EbaySdk\Api\PostOrder\Types\ReturnHoldInfoType $holdInfo
 * @property \EbaySdk\Api\PostOrder\Types\ItemDetailType $itemDetail
 * @property \EbaySdk\Api\PostOrder\Enums\MarketplaceIdEnum $marketplaceId
 * @property \EbaySdk\Api\PostOrder\Types\MoneyMovementDetailType[] $moneyMovementInfo
 * @property \EbaySdk\Api\PostOrder\Types\RefundInfoType $refundInfo
 * @property \EbaySdk\Api\PostOrder\Types\ShipmentType $replacementShipmentInfo
 * @property \EbaySdk\Api\PostOrder\Types\ReturnResponseHistoryType[] $responseHistory
 * @property \EbaySdk\Api\PostOrder\Types\ShipmentType $returnShipmentInfo
 * @property string $RMANumber
 * @property \EbaySdk\Api\PostOrder\Types\ReturnAddressType $sellerAddress
 * @property string $sellerLoginName
 */
class ReturnDetailType extends \Plenty\Modules\Market\Ebay\Api\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'buyerAddress' => [
            'type' => 'EbaySdk\Api\PostOrder\Types\ReturnAddressType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'buyerAddress'
        ],
        'buyerLoginName' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'buyerLoginName'
        ],
        'closeInfo' => [
            'type' => 'EbaySdk\Api\PostOrder\Types\ReturnCloseInfoType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'closeInfo'
        ],
        'dispositionRuleDetail' => [
            'type' => 'EbaySdk\Api\PostOrder\Types\DispositionRuleDetailType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'dispositionRuleDetail'
        ],
        'files' => [
            'type' => 'EbaySdk\Api\PostOrder\Types\ReturnFileType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'files'
        ],
        'holdInfo' => [
            'type' => 'EbaySdk\Api\PostOrder\Types\ReturnHoldInfoType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'holdInfo'
        ],
        'itemDetail' => [
            'type' => 'EbaySdk\Api\PostOrder\Types\ItemDetailType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'itemDetail'
        ],
        'marketplaceId' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'marketplaceId'
        ],
        'moneyMovementInfo' => [
            'type' => 'EbaySdk\Api\PostOrder\Types\MoneyMovementDetailType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'moneyMovementInfo'
        ],
        'refundInfo' => [
            'type' => 'EbaySdk\Api\PostOrder\Types\RefundInfoType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'refundInfo'
        ],
        'replacementShipmentInfo' => [
            'type' => 'EbaySdk\Api\PostOrder\Types\ShipmentType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'replacementShipmentInfo'
        ],
        'responseHistory' => [
            'type' => 'EbaySdk\Api\PostOrder\Types\ReturnResponseHistoryType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'responseHistory'
        ],
        'returnShipmentInfo' => [
            'type' => 'EbaySdk\Api\PostOrder\Types\ShipmentType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'returnShipmentInfo'
        ],
        'RMANumber' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'RMANumber'
        ],
        'sellerAddress' => [
            'type' => 'EbaySdk\Api\PostOrder\Types\ReturnAddressType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'sellerAddress'
        ],
        'sellerLoginName' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'sellerLoginName'
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
