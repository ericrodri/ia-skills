<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;
use Inertia\Response;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): Response
    {
        $user = $request->user();

        return Inertia::render('Profile/Edit', [
            'mustVerifyEmail' => $user instanceof MustVerifyEmail,
            'status' => session('status'),
            'hasApiToken' => $user->api_token !== null,
            'apiTokenPrefix' => $user->api_token_prefix,
            'apiTokenLastUsedAt' => $user->api_token_last_used_at?->toIso8601String(),
            // Solo llega en el redirect inmediato tras generarla: en la base de
            // datos únicamente vive su hash, así que no hay forma de mostrarla luego.
            'plainTextApiToken' => session('plainTextApiToken'),
        ]);
    }

    public function generateApiToken(Request $request): RedirectResponse
    {
        $plainTextToken = $request->user()->createApiToken();

        return Redirect::route('profile.edit')
            ->with('status', 'api-token-generated')
            ->with('plainTextApiToken', $plainTextToken);
    }

    public function revokeApiToken(Request $request): RedirectResponse
    {
        $request->user()->revokeApiToken();

        return Redirect::route('profile.edit')->with('status', 'api-token-revoked');
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validate([
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
