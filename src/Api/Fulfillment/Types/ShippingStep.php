<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace EbaySdk\Api\Fulfillment\Types;

/**
 *
 * @property string $shippingCarrierCode
 * @property string $shippingServiceCode
 * @property \EbaySdk\Api\Fulfillment\Types\Contact $shipTo
 */
class ShippingStep extends \Plenty\Modules\Market\Ebay\Api\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'shippingCarrierCode' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'shippingCarrierCode'
        ],
        'shippingServiceCode' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'shippingServiceCode'
        ],
        'shipTo' => [
            'type' => 'EbaySdk\Api\Fulfillment\Types\Contact',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'shipTo'
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
