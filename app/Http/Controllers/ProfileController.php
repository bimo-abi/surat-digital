<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ProfileController extends Controller
{
    // edit
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }
    // update
    public function update(Request $request): RedirectResponse
    {
        //VALIDASI
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:users,email,' . $request->user()->id],
            'nim' => ['nullable', 'regex:/^E\d{8}$/', 'unique:users,nim,' . $request->user()->id],
            'nip' => ['nullable', 'regex:/^[0-9.]+$/'],
            'prodi_id' => ['required', 'exists:prodis,id'],
            'golongan_id' => ['required', 'exists:golongans,id'],
        ], [
            'nim.regex' => 'Format NIM salah! Contoh: E41250904',
            'nip.regex' => 'NIP hanya boleh berisi angka dan titik.',
        ]);

        // --- STEP 2: FILL & SAVE (PBO: Persistence) ---
        $request->user()->fill($request->all());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
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
