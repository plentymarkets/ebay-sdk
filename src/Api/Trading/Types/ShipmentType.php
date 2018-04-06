<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace EbaySdk\Api\Trading\Types;

/**
 *
 * @property \DateTime $EstimatedDeliveryDate
 * @property \EbaySdk\Api\Trading\Types\AmountType $InsuredValue
 * @property \EbaySdk\Api\Trading\Types\MeasureType $PackageDepth
 * @property \EbaySdk\Api\Trading\Types\MeasureType $PackageLength
 * @property \EbaySdk\Api\Trading\Types\MeasureType $PackageWidth
 * @property string $PayPalShipmentID
 * @property integer $ShipmentID
 * @property \EbaySdk\Api\Trading\Types\AmountType $PostageTotal
 * @property \DateTime $PrintedTime
 * @property \EbaySdk\Api\Trading\Types\AddressType $ShipFromAddress
 * @property \EbaySdk\Api\Trading\Types\AddressType $ShippingAddress
 * @property \EbaySdk\Api\Trading\Enums\ShippingFeatureCodeType[] $ShippingFeature
 * @property \EbaySdk\Api\Trading\Enums\ShippingPackageCodeType $ShippingPackage
 * @property string $ShippingServiceUsed
 * @property \EbaySdk\Api\Trading\Types\MeasureType $WeightMajor
 * @property \EbaySdk\Api\Trading\Types\MeasureType $WeightMinor
 * @property \EbaySdk\Api\Trading\Types\ItemTransactionIDType[] $ItemTransactionID
 * @property \DateTime $DeliveryDate
 * @property \EbaySdk\Api\Trading\Enums\ShipmentDeliveryStatusCodeType $DeliveryStatus
 * @property \DateTime $RefundGrantedTime
 * @property \DateTime $RefundRequestedTime
 * @property \EbaySdk\Api\Trading\Enums\ShipmentStatusCodeType $Status
 * @property \DateTime $ShippedTime
 * @property string $Notes
 * @property \EbaySdk\Api\Trading\Types\ShipmentTrackingDetailsType[] $ShipmentTrackingDetails
 * @property \EbaySdk\Api\Trading\Types\ShipmentLineItemType $ShipmentLineItem
 */
class ShipmentType extends \Plenty\Modules\Market\Ebay\Api\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'EstimatedDeliveryDate' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'EstimatedDeliveryDate'
        ],
        'InsuredValue' => [
            'type' => 'EbaySdk\Api\Trading\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'InsuredValue'
        ],
        'PackageDepth' => [
            'type' => 'EbaySdk\Api\Trading\Types\MeasureType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PackageDepth'
        ],
        'PackageLength' => [
            'type' => 'EbaySdk\Api\Trading\Types\MeasureType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PackageLength'
        ],
        'PackageWidth' => [
            'type' => 'EbaySdk\Api\Trading\Types\MeasureType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PackageWidth'
        ],
        'PayPalShipmentID' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PayPalShipmentID'
        ],
        'ShipmentID' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ShipmentID'
        ],
        'PostageTotal' => [
            'type' => 'EbaySdk\Api\Trading\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PostageTotal'
        ],
        'PrintedTime' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PrintedTime'
        ],
        'ShipFromAddress' => [
            'type' => 'EbaySdk\Api\Trading\Types\AddressType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ShipFromAddress'
        ],
        'ShippingAddress' => [
            'type' => 'EbaySdk\Api\Trading\Types\AddressType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ShippingAddress'
        ],
        'ShippingFeature' => [
            'type' => 'string',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'ShippingFeature'
        ],
        'ShippingPackage' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ShippingPackage'
        ],
        'ShippingServiceUsed' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ShippingServiceUsed'
        ],
        'WeightMajor' => [
            'type' => 'EbaySdk\Api\Trading\Types\MeasureType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'WeightMajor'
        ],
        'WeightMinor' => [
            'type' => 'EbaySdk\Api\Trading\Types\MeasureType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'WeightMinor'
        ],
        'ItemTransactionID' => [
            'type' => 'EbaySdk\Api\Trading\Types\ItemTransactionIDType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'ItemTransactionID'
        ],
        'DeliveryDate' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'DeliveryDate'
        ],
        'DeliveryStatus' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'DeliveryStatus'
        ],
        'RefundGrantedTime' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'RefundGrantedTime'
        ],
        'RefundRequestedTime' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'RefundRequestedTime'
        ],
        'Status' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Status'
        ],
        'ShippedTime' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ShippedTime'
        ],
        'Notes' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Notes'
        ],
        'ShipmentTrackingDetails' => [
            'type' => 'EbaySdk\Api\Trading\Types\ShipmentTrackingDetailsType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'ShipmentTrackingDetails'
        ],
        'ShipmentLineItem' => [
            'type' => 'EbaySdk\Api\Trading\Types\ShipmentLineItemType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ShipmentLineItem'
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