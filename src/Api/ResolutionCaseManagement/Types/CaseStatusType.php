<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace EbaySdk\Api\ResolutionCaseManagement\Types;

/**
 *
 * @property \EbaySdk\ResolutionCaseManagement\Enums\INRCaseStatusType $INRStatus
 * @property \EbaySdk\ResolutionCaseManagement\Enums\SNADCaseStatusType $SNADStatus
 * @property \EbaySdk\ResolutionCaseManagement\Enums\EBPINRCaseStatusType $EBPINRStatus
 * @property \EbaySdk\ResolutionCaseManagement\Enums\EBPSNADCaseStatusType $EBPSNADStatus
 * @property \EbaySdk\ResolutionCaseManagement\Enums\UPICaseStatusType $UPIStatus
 * @property \EbaySdk\ResolutionCaseManagement\Enums\CancelTransactionCaseStatusType $cancelTransactionStatus
 * @property \EbaySdk\ResolutionCaseManagement\Enums\ReturnCaseStatusType $returnStatus
 * @property \EbaySdk\ResolutionCaseManagement\Enums\PaypalINRCaseStatusType $PaypalINRStatus
 * @property \EbaySdk\ResolutionCaseManagement\Enums\PaypalSNADCaseStatusType $PaypalSNADStatus
 */
class CaseStatusType extends \Plenty\Modules\Market\Ebay\Api\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'INRStatus' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'INRStatus'
        ],
        'SNADStatus' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SNADStatus'
        ],
        'EBPINRStatus' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'EBPINRStatus'
        ],
        'EBPSNADStatus' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'EBPSNADStatus'
        ],
        'UPIStatus' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'UPIStatus'
        ],
        'cancelTransactionStatus' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'cancelTransactionStatus'
        ],
        'returnStatus' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'returnStatus'
        ],
        'PaypalINRStatus' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PaypalINRStatus'
        ],
        'PaypalSNADStatus' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PaypalSNADStatus'
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
            self::$xmlNamespaces[__CLASS__] = 'xmlns="http://www.ebay.com/marketplace/resolution/v1/services"';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}