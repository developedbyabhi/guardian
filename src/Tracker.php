<?php

// src/Tracker.php
namespace Guardian\ExceptionTracker;

use Illuminate\Support\Facades\Log;

class Tracker
{
    /**
     * Capture the exception and log or send it to an external service.
     *
     * @param \Exception $exception
     * @return void
     */
    public function captureException(\Exception $exception)
    {
        // Capture basic exception details
        $exceptionDetails = [
            'message'   => $exception->getMessage(),
            'code'      => $exception->getCode(),
            'file'      => $exception->getFile(),
            'line'      => $exception->getLine(),
            'trace'     => $exception->getTraceAsString(),
        ];

        // You can log it locally using Laravel's Log facade
        Log::error('Exception captured by Guardian Exception Tracker', $exceptionDetails);

        // Optionally, send the details to an external service, e.g., your server
        $this->sendToExternalService($exceptionDetails);
    }

    /**
     * Send exception details to an external service (like your backend).
     *
     * @param array $exceptionDetails
     * @return void
     */
    private function sendToExternalService(array $exceptionDetails)
    {
        // Example: Send the exception to an external service (using Guzzle)
        $client = new \GuzzleHttp\Client();
        
        try {
            $response = $client->post('https://your-exception-tracker-api.com/exceptions', [
                'json' => $exceptionDetails
            ]);
        } catch (\Exception $e) {
            Log::error('Failed to send exception details to external service: ' . $e->getMessage());
        }
    }
}
