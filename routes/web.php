<?php

use App\Models\User;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;

Route::get('/login', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('homepage');
});

Route::get('/auth/facebook', function () {
    return Socialite::driver('facebook')->redirect();
});

Route::get('/auth/instagram', function () {
    return Socialite::driver("facebook")->scopes(['email','instagram_basic','pages_show_list'])->redirect();
});

Route::get('/auth/facebook/callback', function () {
    $facebookUser = Socialite::driver('facebook')->user();

    // Store user's access token and other info in the database
    $accessToken = $facebookUser->token;
    $expiresAt = now()->addSeconds($facebookUser->expiresIn);

    // Example User model and save access token
    $user = User::updateOrCreate(
        ['facebook_id' => $facebookUser->id],
        [
            'name' => $facebookUser->name,
            'email' => $facebookUser->email,
            'facebook_token' => $accessToken,
            'facebook_token_expires_at' => $expiresAt,
        ]
    );

    // Log in the user or redirect them accordingly
    auth()->login($user);

    return redirect('/dashboard');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::post('/post-to-facebook', function (Illuminate\Http\Request $request) {
    $message = $request->input('message');
    $response = postToFacebook($message);

    return redirect('/dashboard')->with('status', 'Posted to Facebook!');
});

function postToFacebook($message) {
    $user = auth()->user();
    $accessToken = $user->facebook_token;

    $response = Http::withToken($accessToken)->post('https://graph.facebook.com/v12.0/me/feed', [
        'message' => $message,
    ]);

    return $response->json();
}
