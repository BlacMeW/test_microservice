<?php 
namespace App\Services;

use Illuminate\Support\Facades\Http;

class MiddlewareService
{
    protected $baseUrl;

    public function __construct()
    {
        $this->baseUrl = config('services.middleware_service.url', env('MIDDLEWARE_SERVICE_URL'));
    }

    public function processRequest(array $data)
    {
        $response = Http::get($this->baseUrl, $data);

        if ($response->failed()) {
            throw new \Exception('Middleware Service Error: ' . $this->baseUrl);
        }

        return $response->json();
    }
}