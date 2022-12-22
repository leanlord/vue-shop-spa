<?php

    namespace App\Http\Controllers\Api;

    use App\Http\Controllers\Controller;
    use App\Http\Resources\JewelryResource;
    use App\Models\Jewelry;
    use Illuminate\Http\JsonResponse;

    class ClothesController extends Controller
    {
        public function __construct() {
            $this->middleware('is.admin', [
                'only' => ['store']
            ]);
        }

        /**
         * @return JsonResponse
         */
        public function index(): JsonResponse {
            return response()->json([
                'data' => JewelryResource::collection(Jewelry::all()),
            ]);
        }

        /**
         * Display the specified resource.
         *
         * @param Jewelry $jewelry
         * @return JewelryResource
         */
        public function show(Jewelry $jewelry): JewelryResource {
            return new JewelryResource($jewelry);
        }

        public function store() {
            $jewelry = Jewelry::create(request()->only(['id', 'img', 'price']));
            return response()->json([
                'data' => new JewelryResource($jewelry),
            ]);
        }
    }
