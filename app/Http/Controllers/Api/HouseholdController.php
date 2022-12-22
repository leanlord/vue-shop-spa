<?php

    namespace App\Http\Controllers\Api;

    use App\Http\Controllers\Controller;
    use App\Http\Resources\HouseholdResource;
    use App\Models\Household;
    use Illuminate\Http\JsonResponse;

    class HouseholdController extends Controller
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
                'data' => HouseholdResource::collection(Household::all()),
            ]);
        }

        /**
         * Display the specified resource.
         *
         * @param Household $household
         * @return HouseholdResource
         */
        public function show(Household $household): HouseholdResource {
            return new HouseholdResource($household);
        }

        public function store() {
            $household = Household::create(request()->only(['id', 'img', 'price']));
            return response()->json([
                'data' => new HouseholdResource($household),
            ]);
        }
    }
