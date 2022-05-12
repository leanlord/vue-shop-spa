<?php

    namespace App\Http\Controllers\Api;

    use App\Http\Controllers\Controller;
    use App\Http\Requests\RegisterRequest;
    use App\Models\User;
    use Illuminate\Http\JsonResponse;
    use Illuminate\Http\Request;

    class AuthController extends Controller
    {
        public function register(RegisterRequest $request): JsonResponse {
            $user = User::create($request->validated());
            return response()->json([
                'user' => $user,
                'token' => $user->createToken('auth_token')->plainTextToken,
            ], 201);
        }
    }
