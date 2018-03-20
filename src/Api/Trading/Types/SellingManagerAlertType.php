<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace EbaySdk\Api\Trading\Types;

/**
 *
 * @property \EbaySdk\Api\Trading\Enums\SellingManagerAlertTypeCodeType $AlertType
 * @property \EbaySdk\Api\Trading\Enums\SellingManagerSoldListingsPropertyTypeCodeType $SoldAlert
 * @property \EbaySdk\Api\Trading\Enums\SellingManagerInventoryPropertyTypeCodeType $InventoryAlert
 * @property \EbaySdk\Api\Trading\Enums\SellingManagerAutomationPropertyTypeCodeType $AutomationAlert
 * @property \EbaySdk\Api\Trading\Enums\SellingManagerPaisaPayPropertyTypeCodeType $PaisaPayAlert
 * @property \EbaySdk\Api\Trading\Enums\SellingManagerGeneralPropertyTypeCodeType $GeneralAlert
 * @property integer $DurationInDays
 * @property integer $Count
 */
class SellingManagerAlertType extends \Plenty\Modules\Market\Ebay\Api\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'AlertType' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'AlertType'
        ],
        'SoldAlert' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SoldAlert'
        ],
        'InventoryAlert' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'InventoryAlert'
        ],
        'AutomationAlert' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'AutomationAlert'
        ],
        'PaisaPayAlert' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PaisaPayAlert'
        ],
        'GeneralAlert' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'GeneralAlert'
        ],
        'DurationInDays' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'DurationInDays'
        ],
        'Count' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Count'
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
