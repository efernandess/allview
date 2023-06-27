<?php

namespace App\Services;

use App\Models\Patient;
use App\Models\Record;

class SMSService
{
    protected $apiEndpoint;
    protected $apiKey;

    public function __construct()
    {
        $this->apiEndpoint = env('SMS_API_ENDPOINT');
        $this->apiKey = env('SMS_API_KEY');
    }

    public function sendSMS($patientId, $message)
    {
        try {
            $patient = Patient::findOrFail($patientId);

            // third party provider sending
            $phone = $patient->phone;

            // third party provider successfully sent
            $record = new Record();
            $record->patient_id = $patientId;
            $record->description = $message;
            $record->save();
        } catch (\Exception $e) {
            throw new \Exception($e->getMessage());
        }
    }
}
