<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace EbaySdk\Api\Trading\Types;

/**
 *
 * @property integer $ColorSchemeID
 * @property string $Name
 * @property \EbaySdk\Api\Trading\Types\StoreColorType $Color
 * @property \EbaySdk\Api\Trading\Types\StoreFontType $Font
 */
class StoreColorSchemeType extends \Plenty\Modules\Market\Ebay\Api\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'ColorSchemeID' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ColorSchemeID'
        ],
        'Name' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Name'
        ],
        'Color' => [
            'type' => 'EbaySdk\Api\Trading\Types\StoreColorType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Color'
        ],
        'Font' => [
            'type' => 'EbaySdk\Api\Trading\Types\StoreFontType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Font'
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