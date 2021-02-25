<?php


namespace App\Strategies\Lead;


class DecideReportableLeadBasedOnCountry implements DecideReportableLeadContract
{
    public function available(array $requestData): bool
    {
        return ($requestData['country'] = 'UK');
    }

    public function decide(array $requestData): bool
    {
        $randomChance = rand(1, 100);
        return ($randomChance > 90);
    }
}
