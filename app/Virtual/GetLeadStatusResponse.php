<?php

/**
 * @OA\Schema(
 *     type="object"
 * )
 */
class GetLeadStatusResponse
{

    /**
     * @OA\Property(
     *     title="ID",
     *     description="Unique ID of the lead",
     *     example="1",
     * )
     *
     * @var int
     */
    public $id;


    /**
     * @OA\Property(
     *     title="Name",
     *     description="Name of the lead",
     *     example="random",
     * )
     *
     * @var string
     */
    public $name;


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
