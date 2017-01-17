<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace EbaySdk\Api\Finding\Types;

/**
 *
 * @property \EbaySdk\Finding\Types\AspectValueHistogram[] $valueHistogram
 * @property string $name
 */
class Aspect extends \Plenty\Modules\Market\Ebay\Api\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'valueHistogram' => [
            'type' => 'EbaySdk\Finding\Types\AspectValueHistogram',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'valueHistogram'
        ],
        'name' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => true,
            'attributeName' => 'name'
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
            self::$xmlNamespaces[__CLASS__] = 'xmlns="http://www.ebay.com/marketplace/search/v1/services"';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}