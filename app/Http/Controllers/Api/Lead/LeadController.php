<?php

namespace App\Http\Controllers\Api\Lead;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LeadController extends Controller
{
    /**
     * @OA\Info(title="Affzoo Api", version="0.1")
     */

    /**
     * @OA\Post(
     *     path="/api/v1/leads/save",
     *     @OA\Response(response="200", description="Send lead to Affzoo system")
     * )
     */

    public function save()
    {
        return response('Ok', 200);
    }

    /**
     * @OA\Get(
     *     path="/api/v1/leads/{id}/status",
     *     @OA\Response(response="200", description="Get Lead Status")
     * )
     */

    public function leadStatus()
    {
        return response('Ok', 200);
    }



    /**
     * @OA\Post(
     *     path="/api/v1/leads/{id}/report-conversion",
     *     @OA\Response(response="200", description="Get lead conversion status from Brand CRM")
     * )
     */
    public function reportConversion()
    {
        return response('Ok', 200);
    }
}
