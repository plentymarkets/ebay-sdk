<?php


namespace EbaySdk\Api\Marketing\Types;

/**
 * @property double $adratecap
 */
class CampaignAdRatePreferences extends \Plenty\Modules\Market\Ebay\Api\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'ADRATECAP' => [
            'type' => 'double',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ADRATECAP'
        ]
    ];

    /**
     * @param array $values Optional properties and values to assign to the object.
     */
    public function __construct(array $values = [])
    {
        [$parentValues, $childValues] = self::getParentValues(self::$propertyTypes, $values);

        parent::__construct($parentValues);

        if (!array_key_exists(__CLASS__, self::$properties)) {
            self::$properties[__CLASS__] = array_merge(self::$properties[\Plenty\Modules\Market\Ebay\Api\Types\BaseType::class], self::$propertyTypes);
        }

        $this->setValues(__CLASS__, $childValues);
    }
}