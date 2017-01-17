<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace EbaySdk\Api\Trading\Types;

/**
 *
 * @property \EbaySdk\Trading\Types\ApplicationDeliveryPreferencesType $ApplicationDeliveryPreferences
 * @property string $DeliveryURLName
 * @property \EbaySdk\Trading\Types\NotificationEnableArrayType $UserDeliveryPreferenceArray
 * @property \EbaySdk\Trading\Types\NotificationUserDataType $UserData
 * @property \EbaySdk\Trading\Types\NotificationEventPropertyType[] $EventProperty
 */
class GetNotificationPreferencesResponseType extends \EbaySdk\Api\Trading\Types\AbstractResponseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'ApplicationDeliveryPreferences' => [
            'type' => 'EbaySdk\Trading\Types\ApplicationDeliveryPreferencesType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ApplicationDeliveryPreferences'
        ],
        'DeliveryURLName' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'DeliveryURLName'
        ],
        'UserDeliveryPreferenceArray' => [
            'type' => 'EbaySdk\Trading\Types\NotificationEnableArrayType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'UserDeliveryPreferenceArray'
        ],
        'UserData' => [
            'type' => 'EbaySdk\Trading\Types\NotificationUserDataType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'UserData'
        ],
        'EventProperty' => [
            'type' => 'EbaySdk\Trading\Types\NotificationEventPropertyType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'EventProperty'
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