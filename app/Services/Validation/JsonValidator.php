<?php


namespace App\Services\Validation;


use Illuminate\Support\Facades\Validator;

class JsonValidator
{
    public function validateStoreLeadRequest($request){
        $data = json_decode($request->payload, true);
        $rules = [
            'name' => 'required'
        ];

        $validator = Validator::make($data, $rules);
        if ($validator->passes()) {
            //TODO Handle your data
            dd('test');
        } else {
            //TODO Handle your error
            dd($validator->errors()->all());
        }
    }
}
