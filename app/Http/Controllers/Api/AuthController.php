<?php

    namespace App\Http\Controllers\Api;

    use App\Http\Controllers\Controller;
    use App\Http\Requests\RegisterRequest;
    use App\Models\User;
    use Illuminate\Contracts\Foundation\Application;
    use Illuminate\Http\JsonResponse;
    use Illuminate\Http\RedirectResponse;
    use Illuminate\Http\Request;
    use Illuminate\Routing\Redirector;
    use Illuminate\Support\Facades\Auth;

    class AuthController extends Controller
    {
        /**
         * @param RegisterRequest $request
         * @return JsonResponse
         */
        public function register(RegisterRequest $request): JsonResponse {
            $user = User::create($request->validated());
            return response()->json([
                'user' => $user,
                'token' => $user->createToken('auth_token')->plainTextToken,
            ], 201);
        }

        /**
         * @return JsonResponse
         */
        public function login(): JsonResponse {
            $credentials = \request()->only([
                'email',
                'password',
            ]);

            if (Auth::attempt($credentials, true)) {
                \request()->session()->regenerate();
                return response()->json([
                    'message' => 'Successfully!'
                ]);
            }

            return response()->json(['message' => 'Wrong login or password'], 403);

        }

        /**
         * @return JsonResponse
         */
        public function logout() {
            Auth::logout();

            return response()->json([
                'message' => 'Logged out'
            ]);
        }
    }
