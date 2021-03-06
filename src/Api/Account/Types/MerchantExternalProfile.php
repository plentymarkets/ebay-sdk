<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace EbaySdk\Api\Account\Types;

/**
 *
 * @property \EbaySdk\Api\Account\Types\ExternalPaymentMethod $acceptedPaymentMethods
 * @property string $accountCreationDate
 * @property \EbaySdk\Api\Account\Types\ExternalPaymentMethod $billingPaymentMethods
 * @property \EbaySdk\Api\Account\Types\InventorySizing $inventorySizing
 * @property string $merchantCategoryCode
 * @property \EbaySdk\Api\Account\Enums\CurrencyCodeEnum $primaryCurrency
 * @property \EbaySdk\Api\Account\Types\ReturnSnapshot $returnSnapshots
 * @property string $sicCode
 * @property \EbaySdk\Api\Account\Types\TransactionVolume $transactionVolume
 */
class MerchantExternalProfile extends \Plenty\Modules\Market\Ebay\Api\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'acceptedPaymentMethods' => [
            'type' => 'EbaySdk\Api\Account\Types\ExternalPaymentMethod',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'acceptedPaymentMethods'
        ],
        'accountCreationDate' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'accountCreationDate'
        ],
        'billingPaymentMethods' => [
            'type' => 'EbaySdk\Api\Account\Types\ExternalPaymentMethod',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'billingPaymentMethods'
        ],
        'inventorySizing' => [
            'type' => 'EbaySdk\Api\Account\Types\InventorySizing',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'inventorySizing'
        ],
        'merchantCategoryCode' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'merchantCategoryCode'
        ],
        'primaryCurrency' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'primaryCurrency'
        ],
        'returnSnapshots' => [
            'type' => 'EbaySdk\Api\Account\Types\ReturnSnapshot',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'returnSnapshots'
        ],
        'sicCode' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'sicCode'
        ],
        'transactionVolume' => [
            'type' => 'EbaySdk\Api\Account\Types\TransactionVolume',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'transactionVolume'
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
