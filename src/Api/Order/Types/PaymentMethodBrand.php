<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace EbaySdk\Api\Order\Types;

/**
 *
 * @property \EbaySdk\Api\Order\Types\Image $logoImage
 * @property \EbaySdk\Api\Order\Enums\PaymentMethodBrandEnum $paymentMethodBrandType
 */
class PaymentMethodBrand extends \Plenty\Modules\Market\Ebay\Api\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'logoImage' => [
            'type' => 'EbaySdk\Api\Order\Types\Image',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'logoImage'
        ],
        'paymentMethodBrandType' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'paymentMethodBrandType'
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
