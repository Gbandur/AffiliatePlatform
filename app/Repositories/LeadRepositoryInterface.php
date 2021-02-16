<?php

namespace App\Repositories;

interface  LeadRepositoryInterface
{
    public function save($request);
    public function getLeadStatus($lead);
    public function updateLeadStatus($lead, $request);
}
