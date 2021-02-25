<?php


namespace App\Strategies\Lead;


class DecideReportableLeadDefaultReporting implements DecideReportableLeadContract
{
    public function available(array $requestData): bool
    {
        return true;
    }

    public function decide(array $requestData): bool
    {
        return true;

    }
}
