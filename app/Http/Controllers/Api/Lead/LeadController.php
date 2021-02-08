<?php

namespace App\Http\Controllers\Api\Lead;

use App\Http\Controllers\Controller;
use App\Http\Requests\ReportLeadConversionRequest;
use App\Http\Requests\SaveLeadRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class LeadController extends Controller
{
    /**
     * @OA\Post(
     *     path="/api/v1/leads/save",
     *     operationId="saveLead",
     *     tags={"Leads"},
     *     summary="The endpoint to save the lead in Affzoo system",
     *     security={
     *       {"apiAuth": {}},
     *     },
     *
     *     @OA\Response(
     *         response="200",
     *         @OA\JsonContent(ref="#/components/schemas/GetLeadStatusResponse"),
     *         description="Lead has been saved",
     *     ),
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(ref="#/components/schemas/SaveLeadRequest")
     *     ),
     * )
     * Store a newly created resource in storage.
     *
     * @param SaveLeadRequest $request
     *
     * @return JsonResponse
     */

    public function save(SaveLeadRequest $request)
    {
        return response('Ok', 200);
    }

    /**
     * @OA\Get(
     *     path="/api/v1/leads/{id}/status",
     *     operationId="getLeadStatus",
     *     tags={"Leads"},
     *     summary="The endpoint to get a status of the lead in Affzoo system",
     *     security={
     *       {"apiAuth": {}},
     *     },
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="The ID of Lead",
     *         required=true,
     *         example="1",
     *         @OA\Schema(
     *             type="integer",
     *         ),
     *     ),
     *     @OA\Response(
     *         response="200",
     *         @OA\JsonContent(ref="#/components/schemas/GetLeadStatusResponse"),
     *         description="Lead has been saved",
     *     )
     * )
     * Store a newly created resource in storage.
     *
     * @return JsonResponse
     */

    public function leadStatus()
    {
        return response('Ok', 200);
    }

    /**
     * @OA\Post(
     *     path="/api/v1/leads/{id}/report-conversion",
     *     operationId="reportConversion",
     *     tags={"Leads"},
     *     summary="The endpoint to report the lead conversion",
     *     security={
     *       {"apiAuth": {}},
     *     },
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="The ID of Lead",
     *         required=true,
     *         example="1",
     *         @OA\Schema(
     *             type="integer",
     *         ),
     *     ),
     *     @OA\Response(
     *         response="200",
     *         @OA\JsonContent(ref="#/components/schemas/GetLeadStatusResponse"),
     *         description="Lead status changed",
     *     ),
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(ref="#/components/schemas/ReportLeadConversionRequest")
     *     ),
     * )
     * Store a newly created resource in storage.
     *
     * @param ReportLeadConversionRequest $request
     *
     * @return JsonResponse
     */
    public function reportConversion(ReportLeadConversionRequest $request)
    {
        return response('Ok', 200);
    }
}
