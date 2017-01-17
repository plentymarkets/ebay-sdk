<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace EbaySdk\Api\ResolutionCaseManagement\Services;

class ResolutionCaseManagementService extends \EbaySdk\Api\ResolutionCaseManagement\Services\ResolutionCaseManagementBaseService
{
    const API_VERSION = '1.3.0';

    /**
     * @param array $config Configuration option values.
     */
    public function __construct(array $config = [])
    {
        parent::__construct($config);
    }

    /**
     * @param \EbaySdk\Api\ResolutionCaseManagement\Types\GetVersionRequest $request
     * @return \EbaySdk\Api\ResolutionCaseManagement\Types\GetVersionResponse
     */
    public function getVersion(\EbaySdk\Api\ResolutionCaseManagement\Types\GetVersionRequest $request)
    {
        return $this->callOperation('getVersion', $request, '\EbaySdk\Api\ResolutionCaseManagement\Types\GetVersionResponse');
    }

    /**
     * @param \EbaySdk\Api\ResolutionCaseManagement\Types\GetUserCasesRequest $request
     * @return \EbaySdk\Api\ResolutionCaseManagement\Types\GetUserCasesResponse
     */
    public function getUserCases(\EbaySdk\Api\ResolutionCaseManagement\Types\GetUserCasesRequest $request)
    {
        return $this->callOperation('getUserCases', $request, '\EbaySdk\Api\ResolutionCaseManagement\Types\GetUserCasesResponse');
    }

    /**
     * @param \EbaySdk\Api\ResolutionCaseManagement\Types\GetEBPCaseDetailRequest $request
     * @return \EbaySdk\Api\ResolutionCaseManagement\Types\GetEBPCaseDetailResponse
     */
    public function getEBPCaseDetail(\EbaySdk\Api\ResolutionCaseManagement\Types\GetEBPCaseDetailRequest $request)
    {
        return $this->callOperation('getEBPCaseDetail', $request, '\EbaySdk\Api\ResolutionCaseManagement\Types\GetEBPCaseDetailResponse');
    }

    /**
     * @param \EbaySdk\Api\ResolutionCaseManagement\Types\GetActivityOptionsRequest $request
     * @return \EbaySdk\Api\ResolutionCaseManagement\Types\GetActivityOptionsResponse
     */
    public function getActivityOptions(\EbaySdk\Api\ResolutionCaseManagement\Types\GetActivityOptionsRequest $request)
    {
        return $this->callOperation('getActivityOptions', $request, '\EbaySdk\Api\ResolutionCaseManagement\Types\GetActivityOptionsResponse');
    }

    /**
     * @param \EbaySdk\Api\ResolutionCaseManagement\Types\IssueFullRefundRequest $request
     * @return \EbaySdk\Api\ResolutionCaseManagement\Types\IssueFullRefundResponse
     */
    public function issueFullRefund(\EbaySdk\Api\ResolutionCaseManagement\Types\IssueFullRefundRequest $request)
    {
        return $this->callOperation('issueFullRefund', $request, '\EbaySdk\Api\ResolutionCaseManagement\Types\IssueFullRefundResponse');
    }

    /**
     * @param \EbaySdk\Api\ResolutionCaseManagement\Types\ProvideTrackingInfoRequest $request
     * @return \EbaySdk\Api\ResolutionCaseManagement\Types\ProvideTrackingInfoResponse
     */
    public function provideTrackingInfo(\EbaySdk\Api\ResolutionCaseManagement\Types\ProvideTrackingInfoRequest $request)
    {
        return $this->callOperation('provideTrackingInfo', $request, '\EbaySdk\Api\ResolutionCaseManagement\Types\ProvideTrackingInfoResponse');
    }

    /**
     * @param \EbaySdk\Api\ResolutionCaseManagement\Types\OfferOtherSolutionRequest $request
     * @return \EbaySdk\Api\ResolutionCaseManagement\Types\OfferOtherSolutionResponse
     */
    public function offerOtherSolution(\EbaySdk\Api\ResolutionCaseManagement\Types\OfferOtherSolutionRequest $request)
    {
        return $this->callOperation('offerOtherSolution', $request, '\EbaySdk\Api\ResolutionCaseManagement\Types\OfferOtherSolutionResponse');
    }

    /**
     * @param \EbaySdk\Api\ResolutionCaseManagement\Types\EscalateToCustomerSupportRequest $request
     * @return \EbaySdk\Api\ResolutionCaseManagement\Types\EscalateToCustomerSupportResponse
     */
    public function escalateToCustomerSupport(\EbaySdk\Api\ResolutionCaseManagement\Types\EscalateToCustomerSupportRequest $request)
    {
        return $this->callOperation('escalateToCustomerSupport', $request, '\EbaySdk\Api\ResolutionCaseManagement\Types\EscalateToCustomerSupportResponse');
    }

    /**
     * @param \EbaySdk\Api\ResolutionCaseManagement\Types\AppealToCustomerSupportRequest $request
     * @return \EbaySdk\Api\ResolutionCaseManagement\Types\AppealToCustomerSupportResponse
     */
    public function appealToCustomerSupport(\EbaySdk\Api\ResolutionCaseManagement\Types\AppealToCustomerSupportRequest $request)
    {
        return $this->callOperation('appealToCustomerSupport', $request, '\EbaySdk\Api\ResolutionCaseManagement\Types\AppealToCustomerSupportResponse');
    }

    /**
     * @param \EbaySdk\Api\ResolutionCaseManagement\Types\OfferPartialRefundRequest $request
     * @return \EbaySdk\Api\ResolutionCaseManagement\Types\OfferPartialRefundResponse
     */
    public function offerPartialRefund(\EbaySdk\Api\ResolutionCaseManagement\Types\OfferPartialRefundRequest $request)
    {
        return $this->callOperation('offerPartialRefund', $request, '\EbaySdk\Api\ResolutionCaseManagement\Types\OfferPartialRefundResponse');
    }

    /**
     * @param \EbaySdk\Api\ResolutionCaseManagement\Types\IssuePartialRefundRequest $request
     * @return \EbaySdk\Api\ResolutionCaseManagement\Types\IssuePartialRefundResponse
     */
    public function issuePartialRefund(\EbaySdk\Api\ResolutionCaseManagement\Types\IssuePartialRefundRequest $request)
    {
        return $this->callOperation('issuePartialRefund', $request, '\EbaySdk\Api\ResolutionCaseManagement\Types\IssuePartialRefundResponse');
    }

    /**
     * @param \EbaySdk\Api\ResolutionCaseManagement\Types\ProvideShippingInfoRequest $request
     * @return \EbaySdk\Api\ResolutionCaseManagement\Types\ProvideShippingInfoResponse
     */
    public function provideShippingInfo(\EbaySdk\Api\ResolutionCaseManagement\Types\ProvideShippingInfoRequest $request)
    {
        return $this->callOperation('provideShippingInfo', $request, '\EbaySdk\Api\ResolutionCaseManagement\Types\ProvideShippingInfoResponse');
    }

    /**
     * @param \EbaySdk\Api\ResolutionCaseManagement\Types\ProvideReturnInfoRequest $request
     * @return \EbaySdk\Api\ResolutionCaseManagement\Types\ProvideReturnInfoResponse
     */
    public function provideReturnInfo(\EbaySdk\Api\ResolutionCaseManagement\Types\ProvideReturnInfoRequest $request)
    {
        return $this->callOperation('provideReturnInfo', $request, '\EbaySdk\Api\ResolutionCaseManagement\Types\ProvideReturnInfoResponse');
    }

    /**
     * @param \EbaySdk\Api\ResolutionCaseManagement\Types\ProvideRefundInfoRequest $request
     * @return \EbaySdk\Api\ResolutionCaseManagement\Types\ProvideRefundInfoResponse
     */
    public function provideRefundInfo(\EbaySdk\Api\ResolutionCaseManagement\Types\ProvideRefundInfoRequest $request)
    {
        return $this->callOperation('provideRefundInfo', $request, '\EbaySdk\Api\ResolutionCaseManagement\Types\ProvideRefundInfoResponse');
    }

    /**
     * @param \EbaySdk\Api\ResolutionCaseManagement\Types\UploadDocumentsRequest $request
     * @return \EbaySdk\Api\ResolutionCaseManagement\Types\UploadDocumentsResponse
     */
    public function uploadDocuments(\EbaySdk\Api\ResolutionCaseManagement\Types\UploadDocumentsRequest $request)
    {
        return $this->callOperation('uploadDocuments', $request, '\EbaySdk\Api\ResolutionCaseManagement\Types\UploadDocumentsResponse');
    }

    /**
     * @param \EbaySdk\Api\ResolutionCaseManagement\Types\OfferRefundUponReturnRequest $request
     * @return \EbaySdk\Api\ResolutionCaseManagement\Types\OfferRefundUponReturnResponse
     */
    public function offerRefundUponReturn(\EbaySdk\Api\ResolutionCaseManagement\Types\OfferRefundUponReturnRequest $request)
    {
        return $this->callOperation('offerRefundUponReturn', $request, '\EbaySdk\Api\ResolutionCaseManagement\Types\OfferRefundUponReturnResponse');
    }
}