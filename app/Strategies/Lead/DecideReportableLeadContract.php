<?php

namespace App\Strategies\Lead;

interface DecideReportableLeadContract{
    public function decide(array $requestData):bool;
}
