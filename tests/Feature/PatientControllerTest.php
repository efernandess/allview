<?php

namespace Tests\Feature;

use App\Models\Patient;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PatientControllerTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    public function testSendSMS()
    {
        $patient = Patient::factory()->create();
        $message = $this->faker->sentence;

        $response = $this->post("/api/patient/{$patient->id}/sms", [
            'Message' => $message,
        ]);

        $response->assertStatus(200)
            ->assertJson(['Status' => 'success']);
    }
}
