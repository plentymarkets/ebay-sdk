<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace EbaySdk\Api\ProductMetadata\Types;

/**
 *
 * @property \EbaySdk\ProductMetadata\Enums\AckValue $ack
 * @property \EbaySdk\ProductMetadata\Types\ErrorMessage $errorMessage
 * @property string $version
 * @property \DateTime $timestamp
 * @property \EbaySdk\ProductMetadata\Types\ExtensionType[] $extension
 */
class BaseResponse extends \Plenty\Modules\Market\Ebay\Api\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'ack' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ack'
        ],
        'errorMessage' => [
            'type' => 'EbaySdk\ProductMetadata\Types\ErrorMessage',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'errorMessage'
        ],
        'version' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'version'
        ],
        'timestamp' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'timestamp'
        ],
        'extension' => [
            'type' => 'EbaySdk\ProductMetadata\Types\ExtensionType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'extension'
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
