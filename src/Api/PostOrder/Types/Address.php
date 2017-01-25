<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace EbaySdk\Api\PostOrder\Types;

/**
 *
 * @property string $addressLine1
 * @property string $addressLine2
 * @property \EbaySdk\Api\PostOrder\Enums\AddressTypeEnum $addressType
 * @property string $city
 * @property \EbaySdk\Api\PostOrder\Enums\CountryCodeEnum $country
 * @property string $county
 * @property boolean $isTransliterated
 * @property string $nationalRegion
 * @property string $postalCode
 * @property \EbaySdk\Api\PostOrder\Enums\LanguageScriptEnum $script
 * @property string $stateOrProvince
 * @property \EbaySdk\Api\PostOrder\Enums\LanguageScriptEnum $transliteratedFromScript
 * @property \EbaySdk\Api\PostOrder\Enums\WorldRegionEnum $worldRegion
 */
class Address extends \Plenty\Modules\Market\Ebay\Api\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'addressLine1' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'addressLine1'
        ],
        'addressLine2' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'addressLine2'
        ],
        'addressType' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'addressType'
        ],
        'city' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'city'
        ],
        'country' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'country'
        ],
        'county' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'county'
        ],
        'isTransliterated' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'isTransliterated'
        ],
        'nationalRegion' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'nationalRegion'
        ],
        'postalCode' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'postalCode'
        ],
        'script' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'script'
        ],
        'stateOrProvince' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'stateOrProvince'
        ],
        'transliteratedFromScript' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'transliteratedFromScript'
        ],
        'worldRegion' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'worldRegion'
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
