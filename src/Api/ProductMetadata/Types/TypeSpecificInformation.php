<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace EbaySdk\Api\ProductMetadata\Types;

/**
 *
 * @property \EbaySdk\ProductMetadata\Types\URITypeSpecificInformation $uriTypeSpecificInformation
 * @property \EbaySdk\ProductMetadata\Types\NumericTypeSpecificInformation $numericTypeSpecificInformation
 * @property \EbaySdk\ProductMetadata\Types\MediaTypeSpecificInformation $mediaTypeSpecificInformation
 * @property \EbaySdk\ProductMetadata\Types\StringTypeSpecificInformation $stringTypeSpecificInformation
 */
class TypeSpecificInformation extends \Plenty\Modules\Market\Ebay\Api\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'uriTypeSpecificInformation' => [
            'type' => 'EbaySdk\ProductMetadata\Types\URITypeSpecificInformation',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'uriTypeSpecificInformation'
        ],
        'numericTypeSpecificInformation' => [
            'type' => 'EbaySdk\ProductMetadata\Types\NumericTypeSpecificInformation',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'numericTypeSpecificInformation'
        ],
        'mediaTypeSpecificInformation' => [
            'type' => 'EbaySdk\ProductMetadata\Types\MediaTypeSpecificInformation',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'mediaTypeSpecificInformation'
        ],
        'stringTypeSpecificInformation' => [
            'type' => 'EbaySdk\ProductMetadata\Types\StringTypeSpecificInformation',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'stringTypeSpecificInformation'
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
