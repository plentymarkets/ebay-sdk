<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace EbaySdk\Api\Trading\Types;

/**
 *
 * @property \EbaySdk\Trading\Types\AmountType $Balance
 * @property \EbaySdk\Trading\Enums\CurrencyCodeType $Currency
 * @property string $AccountCode
 */
class AdditionalAccountType extends \Plenty\Modules\Market\Ebay\Api\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'Balance' => [
            'type' => 'EbaySdk\Trading\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Balance'
        ],
        'Currency' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Currency'
        ],
        'AccountCode' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'AccountCode'
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
