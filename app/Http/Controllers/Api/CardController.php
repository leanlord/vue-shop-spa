<?php

    namespace App\Http\Controllers\Api;

    use App\Http\Controllers\Controller;
    use App\Http\Resources\ProductResource;
    use Illuminate\Http\JsonResponse;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Auth;

    class CardController extends Controller
    {
        public function index(): JsonResponse {
            return response()->json([
                'data' => ProductResource::collection(
                    \request()->user()->products()->get()->load('clothe')
                )
            ]);
        }
    }
