<?php

    namespace App\Http\Controllers\Api;

    use App\Http\Controllers\Controller;
    use App\Http\Resources\AutoDetailsResource;
    use App\Models\AutoDetails;
    use Illuminate\Http\JsonResponse;

    class AutoDetailsController extends Controller
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
                'data' => AutoDetailsResource::collection(AutoDetails::all()),
            ]);
        }

        /**
         * Display the specified resource.
         *
         * @param AutoDetails $household
         * @return AutoDetailsResource
         */
        public function show(AutoDetails $household): AutoDetailsResource {
            return new AutoDetailsResource($household);
        }

        public function store() {
            $household = AutoDetails::create(request()->only(['id', 'img', 'price']));
            return response()->json([
                'data' => new AutoDetailsResource($household),
            ]);
        }
    }
