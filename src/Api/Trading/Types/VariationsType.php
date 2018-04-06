<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace EbaySdk\Api\Trading\Types;

/**
 *
 * @property \EbaySdk\Api\Trading\Types\VariationType[] $Variation
 * @property \EbaySdk\Api\Trading\Types\PicturesType[] $Pictures
 * @property \EbaySdk\Api\Trading\Types\NameValueListArrayType $VariationSpecificsSet
 * @property \EbaySdk\Api\Trading\Types\ModifyNameArrayType $ModifyNameList
 */
class VariationsType extends \Plenty\Modules\Market\Ebay\Api\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'Variation' => [
            'type' => 'EbaySdk\Api\Trading\Types\VariationType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'Variation'
        ],
        'Pictures' => [
            'type' => 'EbaySdk\Api\Trading\Types\PicturesType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'Pictures'
        ],
        'VariationSpecificsSet' => [
            'type' => 'EbaySdk\Api\Trading\Types\NameValueListArrayType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'VariationSpecificsSet'
        ],
        'ModifyNameList' => [
            'type' => 'EbaySdk\Api\Trading\Types\ModifyNameArrayType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ModifyNameList'
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