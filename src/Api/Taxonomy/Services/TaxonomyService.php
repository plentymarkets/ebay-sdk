<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace EbaySdk\Api\Taxonomy\Services;

class TaxonomyService extends \EbaySdk\Api\Taxonomy\Services\TaxonomyBaseService
{
    const API_VERSION = 'v1_beta';

    /**
     * @property array $operations Associative array of operations provided by the service.
     */
    protected static $operations = [
        'GetADefaultCategoryTreeId' => [
            'method' => 'GET',
            'resource' => 'get_default_category_tree_id',
            'responseClass' => '\EbaySdk\Api\Taxonomy\Types\GetADefaultCategoryTreeIdRestResponse',
            'params' => [
                'marketplace_id' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ],
        'GetACategoryTree' => [
            'method' => 'GET',
            'resource' => 'category_tree/{category_tree_id}',
            'responseClass' => '\EbaySdk\Api\Taxonomy\Types\GetACategoryTreeRestResponse',
            'params' => [
                'category_tree_id' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ],
        'GetACategorySubtree' => [
            'method' => 'GET',
            'resource' => 'category_tree/{category_tree_id}/get_category_subtree',
            'responseClass' => '\EbaySdk\Api\Taxonomy\Types\GetACategorySubtreeRestResponse',
            'params' => [
                'category_id' => [
                    'valid' => ['string'],
                    'required' => true
                ],
                'category_tree_id' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ],
        'GetSuggestedCategories' => [
            'method' => 'GET',
            'resource' => 'category_tree/{category_tree_id}/get_category_suggestions',
            'responseClass' => '\EbaySdk\Api\Taxonomy\Types\GetSuggestedCategoriesRestResponse',
            'params' => [
                'category_tree_id' => [
                    'valid' => ['string'],
                    'required' => true
                ],
                'q' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ]
    ];

    /**
     * @param array $config Configuration option values.
     */
    public function __construct(array $config = [])
    {
        parent::__construct($config);
    }

    /**
     * @param \EbaySdk\Api\Taxonomy\Types\GetADefaultCategoryTreeIdRestRequest $request
     * @return \EbaySdk\Api\Taxonomy\Types\GetADefaultCategoryTreeIdRestResponse
     */
    public function getADefaultCategoryTreeId(\EbaySdk\Api\Taxonomy\Types\GetADefaultCategoryTreeIdRestRequest $request)
    {
        return $this->callOperation('GetADefaultCategoryTreeId', $request);
    }

    /**
     * @param \EbaySdk\Api\Taxonomy\Types\GetACategoryTreeRestRequest $request
     * @return \EbaySdk\Api\Taxonomy\Types\GetACategoryTreeRestResponse
     */
    public function getACategoryTree(\EbaySdk\Api\Taxonomy\Types\GetACategoryTreeRestRequest $request)
    {
        return $this->callOperation('GetACategoryTree', $request);
    }

    /**
     * @param \EbaySdk\Api\Taxonomy\Types\GetACategorySubtreeRestRequest $request
     * @return \EbaySdk\Api\Taxonomy\Types\GetACategorySubtreeRestResponse
     */
    public function getACategorySubtree(\EbaySdk\Api\Taxonomy\Types\GetACategorySubtreeRestRequest $request)
    {
        return $this->callOperation('GetACategorySubtree', $request);
    }

    /**
     * @param \EbaySdk\Api\Taxonomy\Types\GetSuggestedCategoriesRestRequest $request
     * @return \EbaySdk\Api\Taxonomy\Types\GetSuggestedCategoriesRestResponse
     */
    public function getSuggestedCategories(\EbaySdk\Api\Taxonomy\Types\GetSuggestedCategoriesRestRequest $request)
    {
        return $this->callOperation('GetSuggestedCategories', $request);
    }
}
