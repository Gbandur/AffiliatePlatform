<?php

/**
 * @OA\Schema(
 *     type="object"
 * ),
 */
class SaveLeadRequest
{
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
     *     title="First Name",
     *     description="First Name of the lead",
     *     example="John",
     * )
     *
     * @var string
     */
    public $first_name;


    /**
     * @OA\Property(
     *     title="Last Name",
     *     description="Last Name of the lead",
     *     example="Doe",
     * )
     *
     * @var string
     */
    public $last_name;


    /**
     * @OA\Property(
     *     title="Email",
     *     description="Email of the lead",
     *     example="johndoe@example.com",
     * )
     *
     * @var string
     */
    public $email;


    /**
     * @OA\Property(
     *     title="Address",
     *     description="Address of the lead",
     *     example="address",
     * )
     *
     * @var string
     */
    public $address;


    /**
     * @OA\Property(
     *     title="Postal Code",
     *     description="Postal Code of the lead",
     *     example="post-code",
     * )
     *
     * @var string
     */
    public $post_code;

    /**
     * @OA\Property(
     *     title="Country",
     *     description="Country of the lead",
     *     example="country",
     * )
     *
     * @var string
     */
    public $country;

    /**
     * @OA\Property(
     *     title="Phone",
     *     description="Phone of the lead",
     *     example="+995555555555",
     * )
     *
     * @var string
     */
    public $phone;


    /**
     * @OA\Property(
     *     title="promo Code",
     *     description="Promo Code of the lead",
     *     example="Promo123",
     * )
     *
     * @var string
     */
    public $promo_code;


    /**
     * @OA\Property(
     *     title="Password",
     *     description="Password",
     *     example="testPassword",
     * )
     *
     * @var string
     */
    public $password;


    /**
     * @OA\Property(
     *     title="Currency",
     *     description="Currency of the lead",
     *     example="EURO",
     * )
     *
     * @var string
     */
    public $currency;
}
