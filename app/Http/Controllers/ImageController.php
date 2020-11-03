<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ImageController extends ControllerBase
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('auth.role:customer');
    }

    /**
     * Main entry point
     *
     * @param Request $request
     *
     * @return JsonResponse
     *
     */
    public function index(Request $request)
    {
        $authors = Author::all();

       return $this->successResponse($authors);
        return response()->json('Please read the API documentation at ' . env('APP_URL') . '/docs', 200);
    }
}