<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace EbaySdk\Api\Order\Types;

/**
 *
 * @property string $label
 * @property \EbaySdk\Order\Types\Image $logoImage
 * @property \EbaySdk\Order\Types\PaymentMethodBrand[] $paymentMethodBrands
 * @property \EbaySdk\Order\Types\PaymentMethodMessage[] $paymentMethodMessages
 * @property \EbaySdk\Order\Enums\PaymentMethodTypeEnum $paymentMethodType
 */
class PaymentMethod extends \Plenty\Modules\Market\Ebay\Api\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'label' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'label'
        ],
        'logoImage' => [
            'type' => 'EbaySdk\Order\Types\Image',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'logoImage'
        ],
        'paymentMethodBrands' => [
            'type' => 'EbaySdk\Order\Types\PaymentMethodBrand',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'paymentMethodBrands'
        ],
        'paymentMethodMessages' => [
            'type' => 'EbaySdk\Order\Types\PaymentMethodMessage',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'paymentMethodMessages'
        ],
        'paymentMethodType' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'paymentMethodType'
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
