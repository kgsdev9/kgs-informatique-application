<?php

namespace App\Http\Controllers\Provider;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class ProviderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function redirect($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function callback($provider)
    {
        $githubUser = Socialite::driver($provider)->user();
        $user = User::updateOrCreate([
            'provider_id' => $githubUser->id,
            'provider' => $provider,
        ], [
            'name' => $githubUser->name,
            'email' => $githubUser->email,
            'provider_token' => $githubUser->token,
        ]);

        Auth::login($user);
        notify()->success(' Notify ⚡️');
        return redirect()->route('home');

    }


}
