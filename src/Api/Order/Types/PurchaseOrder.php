<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace EbaySdk\Api\Order\Types;

/**
 *
 * @property \EbaySdk\Api\Order\Types\LineItem[] $lineItems
 * @property \EbaySdk\Api\Order\Types\PaymentInstrument $paymentInstrument
 * @property \EbaySdk\Api\Order\Types\PricingSummary $pricingSummary
 * @property string $purchaseOrderCreationDate
 * @property string $purchaseOrderId
 * @property \EbaySdk\Api\Order\Enums\PurchaseOrderPaymentStatusEnum $purchaseOrderPaymentStatus
 * @property \EbaySdk\Api\Order\Enums\PurchaseOrderStatusEnum $purchaseOrderStatus
 * @property \EbaySdk\Api\Order\Types\Amount $refundedAmount
 * @property \EbaySdk\Api\Order\Types\ShippingAddress $shippingAddress
 * @property \EbaySdk\Api\Order\Types\ShippingFulfillment[] $shippingFulfillments
 * @property \EbaySdk\Api\Order\Types\ErrorDetailV3[] $warnings
 */
class PurchaseOrder extends \Plenty\Modules\Market\Ebay\Api\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'lineItems' => [
            'type' => 'EbaySdk\Api\Order\Types\LineItem',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'lineItems'
        ],
        'paymentInstrument' => [
            'type' => 'EbaySdk\Api\Order\Types\PaymentInstrument',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'paymentInstrument'
        ],
        'pricingSummary' => [
            'type' => 'EbaySdk\Api\Order\Types\PricingSummary',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'pricingSummary'
        ],
        'purchaseOrderCreationDate' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'purchaseOrderCreationDate'
        ],
        'purchaseOrderId' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'purchaseOrderId'
        ],
        'purchaseOrderPaymentStatus' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'purchaseOrderPaymentStatus'
        ],
        'purchaseOrderStatus' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'purchaseOrderStatus'
        ],
        'refundedAmount' => [
            'type' => 'EbaySdk\Api\Order\Types\Amount',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'refundedAmount'
        ],
        'shippingAddress' => [
            'type' => 'EbaySdk\Api\Order\Types\ShippingAddress',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'shippingAddress'
        ],
        'shippingFulfillments' => [
            'type' => 'EbaySdk\Api\Order\Types\ShippingFulfillment',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'shippingFulfillments'
        ],
        'warnings' => [
            'type' => 'EbaySdk\Api\Order\Types\ErrorDetailV3',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'warnings'
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
