<?php

namespace App\Http\Controllers\Api\Lead;

use App\Http\Controllers\Controller;
use App\Http\Requests\ReportLeadConversionRequest;
use App\Http\Requests\SaveLeadRequest;
use App\Models\Lead;
use App\Repositories\LeadRepositoryInterface;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use function React\Promise\all;

class LeadController extends Controller
{
    private LeadRepositoryInterface $leadRepository;

    public function __construct(LeadRepositoryInterface $leadRepository){
        $this->leadRepository = $leadRepository;
    }


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
     * @return Application|ResponseFactory|JsonResponse|Response
     */

    public function store(Request $request)
    {
        if (empty($request->json()->all())) {
            return response()->json([
                'message' => 'The request is not a valid JSON.',
            ], 400);
        }
        $data = json_decode($request->getContent(), true);
        $rules = [
            'name' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'address' => 'required',
            'post_code' => 'required',
            'country' => 'required',
            'phone' => 'required',
            'promo_code' => 'required',
            'password' => 'required',
            'currency' => 'required',
        ];

        $validator = Validator::make($data, $rules);
        if ($validator->passes()) {
            $newLead = $this->leadRepository->save($request);

            return response()
                ->json(
                    ['data' => $newLead]
                );
        } else {
            //TODO Handle your error
//           return \response($validator->errors()->all(), 500);
            return response()
                ->json(['messages' => $validator->errors()->all()]);
        }

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
     * @param Lead $lead
     * @return mixed
     */

    public function leadStatus(Lead $lead)
    {
       return $this->leadRepository->getLeadStatus($lead);
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
     * @param Lead $lead
     */
    public function reportConversion(ReportLeadConversionRequest $request, Lead $lead)
    {
        return $this->leadRepository->updateLeadStatus($lead, $request);
    }
}
