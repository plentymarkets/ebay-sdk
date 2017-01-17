<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace EbaySdk\Api\ProductMetadata\Types;

/**
 *
 * @property string $propertyName
 * @property \EbaySdk\ProductMetadata\Types\Value $value
 * @property \EbaySdk\ProductMetadata\Types\PropertyNameValue[] $childPropertyNameValue
 */
class PropertyNameValue extends \Plenty\Modules\Market\Ebay\Api\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'propertyName' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'propertyName'
        ],
        'value' => [
            'type' => 'EbaySdk\ProductMetadata\Types\Value',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'value'
        ],
        'childPropertyNameValue' => [
            'type' => 'EbaySdk\ProductMetadata\Types\PropertyNameValue',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'childPropertyNameValue'
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
            self::$xmlNamespaces[__CLASS__] = 'xmlns="http://www.ebay.com/marketplace/marketplacecatalog/v1/services"';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
