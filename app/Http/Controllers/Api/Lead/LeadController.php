<?php

namespace App\Http\Controllers\Api\Lead;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LeadController extends Controller
{
    /** @OA\Info(title="My First API", version="0.1") */
    /**
     * @OA\Post(

     *  path="/v1/leads",

     *  summary="Recieves a lead",

     *  @OA\Parameter(name="name",

     *    required=true,

     *    @OA\Schema(type="string")

     *  ),

     *  @OA\Response(response="200",

     *    description="Validation Response",

     *  )

     * )

     */
    public function save(){
        return response('Ok', 200);
    }
}
