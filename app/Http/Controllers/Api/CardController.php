<?php

    namespace App\Http\Controllers\Api;

    use App\Http\Controllers\Controller;
    use App\Http\Resources\ProductResource;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Auth;

    class CardController extends Controller
    {
        public function index() {
            return response()->json(
                ProductResource::collection(
                    \request()->user()->products()->get()->load('clothe')
                )
            );
        }
    }
