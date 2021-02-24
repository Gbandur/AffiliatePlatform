<?php


namespace App\Strategies\Lead;


class HandleLeadReporting
{
    private $decision;
    public function __construct ($request, $affiliateId) {
        switch ($request) {
            case $request->get('country'):
                $this->decision = new DecideReportableLeadBasedOnCountry();
                break;
            case $affiliateId:
                $this->decision = new DecideReportableLeadBasedOnAffiliate();
                break;
            default:
                $this->decision = new DecideReportableLeadDefaultReporting();
        }
    }

    public function decideLeadReport (array $requestData): bool
    {
        return $this->decision->decide($requestData);
    }
}
