<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace EbaySdk\Api\Marketing\Types;

/**
 *
 * @property \EbaySdk\Api\Marketing\Enums\DataTypeEnum $dataType
 * @property string $dimensionKey
 * @property \EbaySdk\Api\Marketing\Types\DimensionKeyAnnotation[] $dimensionKeyAnnotations
 */
class DimensionMetadata extends \Plenty\Modules\Market\Ebay\Api\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'dataType' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'dataType'
        ],
        'dimensionKey' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'dimensionKey'
        ],
        'dimensionKeyAnnotations' => [
            'type' => 'EbaySdk\Api\Marketing\Types\DimensionKeyAnnotation',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'dimensionKeyAnnotations'
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
