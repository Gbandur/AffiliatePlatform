<?php

namespace App\Strategies\Lead;

interface DecideReportableLeadContract{
    public function available(array $requestData):bool;
    public function decide(array $requestData):bool;
}
