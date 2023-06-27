<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\SMSService;

class PatientController extends Controller
{

    public function sendSMS(Request $request, $id)
    {
        try {
            $message = $request->input('Message');

            $smsService = new SMSService();
            $smsService->sendSMS($id, $message);

            return response()->json(['Status' => 'success'], 200);
        } catch (\Exception $e) {
            return response()->json([
                'Status' => 'error',
                'Message' => $e->getMessage(),
            ], 422);
        }
    }
}
