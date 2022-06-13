<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreApplicationRequest;
use App\Models\Application;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Response;

class ApplicationController extends Controller
{
    /**
     * Process the application store request.
     *
     * @param StoreApplicationRequest $request
     * @return JsonResponse
     */
    public function __invoke(StoreApplicationRequest $request)
    {
        Application::create($request->validated());

        return Response::json([
            'message' => 'Application successfully submitted!',
        ]);
    }
}
