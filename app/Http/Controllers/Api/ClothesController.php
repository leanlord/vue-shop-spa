<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ClotheResource;
use App\Models\Clothe;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ClothesController extends Controller
{
    /**
     * @return JsonResponse
     */
    public function index(): JsonResponse {
        return response()->json([
            'data' => ClotheResource::collection(Clothe::all())
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param Clothe $clothe
     * @return ClotheResource
     */
    public function show(Clothe $clothe): ClotheResource {
        return new ClotheResource($clothe);
    }
}
