<?php

/**
 * @OA\Schema(
 *     type="object"
 * )
 */
class ReportLeadConversionRequest
{

    /**
     * @OA\Property(
     *     title="Lead Status",
     *     description="Status of the lead",
     *     example="random",
     * )
     *
     * @var string
     */
    public $lead_status;


}
