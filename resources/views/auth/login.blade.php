<x-guest-layout>
    <div class="mb-8">
        <p class="text-xs font-semibold uppercase tracking-[0.2em] text-slate-500">Sign In</p>
        <h2 class="mt-2 text-3xl text-slate-900" style="font-family: 'Fraunces', serif;">Continue your shopping journey</h2>
        <p class="mt-2 text-sm text-slate-600">Login to view your wishlist, orders, and member discounts.</p>
    </div>

    <x-auth-session-status class="mb-4 rounded-xl border border-emerald-200 bg-emerald-50 px-4 py-3 text-sm text-emerald-700" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}" class="space-y-5">
        @csrf

        <div>
            <label for="email" class="mb-2 block text-sm font-semibold text-slate-700">Email Address</label>
            <input
                id="email"
                name="email"
                type="email"
                value="{{ old('email') }}"
                required
                autofocus
                autocomplete="username"
                class="block w-full rounded-xl border border-slate-300/80 bg-white px-4 py-3 text-sm text-slate-800 shadow-sm outline-none transition focus:border-orange-400 focus:ring-4 focus:ring-orange-100"
                placeholder="you@example.com"
            >
            <x-input-error :messages="$errors->get('email')" class="mt-2 text-sm" />
        </div>

        <div>
            <label for="password" class="mb-2 block text-sm font-semibold text-slate-700">Password</label>
            <input
                id="password"
                name="password"
                type="password"
                required
                autocomplete="current-password"
                class="block w-full rounded-xl border border-slate-300/80 bg-white px-4 py-3 text-sm text-slate-800 shadow-sm outline-none transition focus:border-orange-400 focus:ring-4 focus:ring-orange-100"
                placeholder="Enter your password"
            >
            <x-input-error :messages="$errors->get('password')" class="mt-2 text-sm" />
        </div>

        <div class="flex items-center justify-between gap-3">
            <label for="remember_me" class="inline-flex items-center gap-2 text-sm text-slate-600">
                <input id="remember_me" type="checkbox" class="h-4 w-4 rounded border-slate-300 text-orange-500 focus:ring-orange-400" name="remember">
                <span>Remember me</span>
            </label>

            @if (Route::has('password.request'))
                <a class="text-sm font-medium text-orange-700 transition hover:text-orange-600" href="{{ route('password.request') }}">
                    Forgot password?
                </a>
            @endif
        </div>

        <div class="pt-2">
            <button type="submit" class="inline-flex w-full items-center justify-center rounded-xl bg-slate-900 px-4 py-3 text-sm font-semibold text-white transition hover:bg-slate-800 focus:outline-none focus:ring-4 focus:ring-slate-300">
                Log In
            </button>

            <p class="mt-4 text-center text-sm text-slate-600">
                New here?
                <a href="{{ route('register') }}" class="font-semibold text-orange-700 transition hover:text-orange-600">Create an account</a>
            </p>
        </div>
    </form>
</x-guest-layout>
