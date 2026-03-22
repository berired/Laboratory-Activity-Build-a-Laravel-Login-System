<x-guest-layout>
    <div class="mb-8">
        <p class="text-xs font-semibold uppercase tracking-[0.2em] text-slate-500">Create Account</p>
        <h2 class="mt-2 text-3xl text-slate-900" style="font-family: 'Fraunces', serif;">Join ShopSphere today</h2>
        <p class="mt-2 text-sm text-slate-600">Set up your profile and get access to faster checkout and exclusive offers.</p>
    </div>

    <form method="POST" action="{{ route('register') }}" class="space-y-5">
        @csrf

        <div>
            <label for="name" class="mb-2 block text-sm font-semibold text-slate-700">Full Name</label>
            <input
                id="name"
                name="name"
                type="text"
                value="{{ old('name') }}"
                required
                autofocus
                autocomplete="name"
                class="block w-full rounded-xl border border-slate-300/80 bg-white px-4 py-3 text-sm text-slate-800 shadow-sm outline-none transition focus:border-orange-400 focus:ring-4 focus:ring-orange-100"
                placeholder="John Doe"
            >
            <x-input-error :messages="$errors->get('name')" class="mt-2 text-sm" />
        </div>

        <div>
            <label for="email" class="mb-2 block text-sm font-semibold text-slate-700">Email Address</label>
            <input
                id="email"
                name="email"
                type="email"
                value="{{ old('email') }}"
                required
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
                autocomplete="new-password"
                class="block w-full rounded-xl border border-slate-300/80 bg-white px-4 py-3 text-sm text-slate-800 shadow-sm outline-none transition focus:border-orange-400 focus:ring-4 focus:ring-orange-100"
                placeholder="Create a password"
            >
            <x-input-error :messages="$errors->get('password')" class="mt-2 text-sm" />
        </div>

        <div>
            <label for="password_confirmation" class="mb-2 block text-sm font-semibold text-slate-700">Confirm Password</label>
            <input
                id="password_confirmation"
                name="password_confirmation"
                type="password"
                required
                autocomplete="new-password"
                class="block w-full rounded-xl border border-slate-300/80 bg-white px-4 py-3 text-sm text-slate-800 shadow-sm outline-none transition focus:border-orange-400 focus:ring-4 focus:ring-orange-100"
                placeholder="Re-enter your password"
            >
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2 text-sm" />
        </div>

        <div class="pt-2">
            <button type="submit" class="inline-flex w-full items-center justify-center rounded-xl bg-orange-600 px-4 py-3 text-sm font-semibold text-white transition hover:bg-orange-500 focus:outline-none focus:ring-4 focus:ring-orange-200">
                Create My Account
            </button>

            <p class="mt-4 text-center text-sm text-slate-600">
                Already have an account?
                <a href="{{ route('login') }}" class="font-semibold text-orange-700 transition hover:text-orange-600">Log in here</a>
            </p>
        </div>
    </form>
</x-guest-layout>
