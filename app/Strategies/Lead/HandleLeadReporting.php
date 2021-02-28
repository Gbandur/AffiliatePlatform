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
//                    $leadReportingStrategies = [
//                \App\Strategies\Lead\DecideReportableLeadBasedOnCountry::class,
//                \App\Strategies\Lead\DecideReportableLeadBasedOnAffiliate::class,
//                \App\Strategies\Lead\DecideReportableLeadDefaultReporting::class,
//            ];
//            foreach ($leadReportingStrategies as $strategy) {
//                $strategyProvider = app($strategy);
//
//                $decisionAvailable = $strategyProvider->available($request->all());
//
//                if ($decisionAvailable === false) {
//                    continue;
//                }
//                $decision = $strategyProvider->decide($request);
//
//                $newLead->report_or_not = $decision;
//                $newLead->save();
//                break;
//            }
    }
}
