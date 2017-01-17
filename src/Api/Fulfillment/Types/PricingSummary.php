<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace EbaySdk\Api\Fulfillment\Types;

/**
 *
 * @property \EbaySdk\Fulfillment\Types\Amount $adjustment
 * @property \EbaySdk\Fulfillment\Types\Amount $deliveryCost
 * @property \EbaySdk\Fulfillment\Types\Amount $deliveryDiscount
 * @property \EbaySdk\Fulfillment\Types\Amount $fee
 * @property \EbaySdk\Fulfillment\Types\Amount $priceDiscountSubtotal
 * @property \EbaySdk\Fulfillment\Types\Amount $priceSubtotal
 * @property \EbaySdk\Fulfillment\Types\Amount $tax
 * @property \EbaySdk\Fulfillment\Types\Amount $total
 */
class PricingSummary extends \Plenty\Modules\Market\Ebay\Api\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'adjustment' => [
            'type' => 'EbaySdk\Fulfillment\Types\Amount',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'adjustment'
        ],
        'deliveryCost' => [
            'type' => 'EbaySdk\Fulfillment\Types\Amount',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'deliveryCost'
        ],
        'deliveryDiscount' => [
            'type' => 'EbaySdk\Fulfillment\Types\Amount',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'deliveryDiscount'
        ],
        'fee' => [
            'type' => 'EbaySdk\Fulfillment\Types\Amount',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'fee'
        ],
        'priceDiscountSubtotal' => [
            'type' => 'EbaySdk\Fulfillment\Types\Amount',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'priceDiscountSubtotal'
        ],
        'priceSubtotal' => [
            'type' => 'EbaySdk\Fulfillment\Types\Amount',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'priceSubtotal'
        ],
        'tax' => [
            'type' => 'EbaySdk\Fulfillment\Types\Amount',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'tax'
        ],
        'total' => [
            'type' => 'EbaySdk\Fulfillment\Types\Amount',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'total'
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
