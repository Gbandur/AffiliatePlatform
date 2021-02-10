<?php


namespace App\Repositories;


use App\Models\Lead;
use App\Models\LeadDetail;
use Illuminate\Support\Facades\Auth;

class LeadRepository implements LeadRepositoryInterface
{

    public function save($request)
    {

        // mb use db transactions?

        $lead = Lead::create([
            'name' => $request->get('name'),
            'affiliate_id' => Auth::user()->getAuthIdentifier(),
            'lead_status_id' => 1
        ]);

        LeadDetail::create([
            'lead_id' => $lead->id,
            'first_name' => $request->get('first_name'),
            'last_name' => $request->get('last_name'),
            'email' => $request->get('email'),
            'address' => $request->get('address'),
            'post_code' => $request->get('post_code'),
            'country' => $request->get('country'),
            'phone_number' => $request->get('phone'),
            'promo_code' => $request->get('promo_code'),
            'password' => $request->get('password'),
            'currency' => $request->get('currency'),
        ]);

        return response([
            'id' => $lead->id,
            'name' => $lead->name,
            'status' => $lead->leadStatus->name,
        ], 200);

    }

    public function getLeadStatus($lead){
        return response([
            'id' => $lead->id,
            'name' => $lead->name,
            'status' => $lead->leadStatus->name,
        ], 200);
    }

    public function updateLeadStatus($lead, $request)
    {
        $lead->update([
            'lead_status_id' => $request->lead_status
        ]);

        return response([
            'id' => $lead->id,
            'name' => $lead->name,
            'status' => $lead->leadStatus->name,
        ], 200);
    }
}
