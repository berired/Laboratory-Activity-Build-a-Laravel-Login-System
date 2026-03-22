<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&family=Fraunces:opsz,wght@9..144,600;9..144,700&display=swap" rel="stylesheet">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased text-slate-900" style="font-family: 'Manrope', sans-serif;">
        <div class="relative min-h-screen overflow-hidden bg-[radial-gradient(circle_at_15%_20%,#fff1c7_0,#ffe0af_22%,transparent_45%),radial-gradient(circle_at_85%_10%,#ffd5bb_0,#ff9f80_26%,transparent_46%),linear-gradient(135deg,#f6f0e7_0%,#ffe9d7_48%,#ffd8bf_100%)]">
            <div class="absolute -left-12 top-14 h-36 w-36 rounded-full bg-white/35 blur-2xl"></div>
            <div class="absolute bottom-8 right-8 h-40 w-40 rounded-full bg-amber-300/20 blur-3xl"></div>

            <div class="relative mx-auto flex min-h-screen w-full max-w-6xl items-center justify-center px-4 py-6 sm:px-8 lg:px-10">
                <div class="grid w-full overflow-hidden rounded-3xl border border-white/60 bg-white/75 shadow-[0_30px_80px_-35px_rgba(15,23,42,0.45)] backdrop-blur md:grid-cols-[1.05fr,1fr]">
                    <section class="relative hidden min-h-[620px] overflow-hidden md:block">
                        <div class="absolute inset-0 bg-[linear-gradient(160deg,#14213d_0%,#223c6f_45%,#4a6289_100%)]"></div>
                        <div class="absolute inset-0 bg-[radial-gradient(circle_at_80%_20%,rgba(255,197,61,0.42),transparent_44%)]"></div>
                        <div class="absolute -right-24 bottom-10 h-52 w-52 rounded-full border border-white/20"></div>
                        <div class="absolute -right-10 bottom-24 h-24 w-24 rounded-full bg-white/10"></div>

                        <div class="relative flex h-full flex-col justify-between p-10 text-white">
                            <a href="{{ url('/') }}" class="inline-flex items-center gap-3 text-sm font-semibold tracking-[0.2em] uppercase text-white/90">
                                <span class="inline-flex h-8 w-8 items-center justify-center rounded-full bg-white/15 text-base">S</span>
                                ShopSphere
                            </a>

                            <div class="space-y-6">
                                <h1 class="max-w-md text-4xl leading-tight" style="font-family: 'Fraunces', serif;">Welcome back to your favorite retail hub.</h1>
                                <p class="max-w-md text-sm text-slate-200">Track orders, unlock member-only offers, and checkout faster with a single secure account.</p>

                                <div class="grid max-w-sm grid-cols-2 gap-3 text-xs">
                                    <div class="rounded-2xl border border-white/20 bg-white/10 px-4 py-3">
                                        <p class="font-semibold text-white">24/7 Support</p>
                                        <p class="mt-1 text-slate-200">Live order help anytime</p>
                                    </div>
                                    <div class="rounded-2xl border border-white/20 bg-white/10 px-4 py-3">
                                        <p class="font-semibold text-white">Easy Returns</p>
                                        <p class="mt-1 text-slate-200">Hassle-free return policy</p>
                                    </div>
                                </div>
                            </div>

                            <p class="text-xs text-white/70">Secure login powered by Laravel</p>
                        </div>
                    </section>

                    <section class="flex min-h-[620px] items-center justify-center p-6 sm:p-10">
                        <div class="w-full max-w-md">
                            <a href="{{ url('/') }}" class="mb-6 inline-flex items-center gap-2 text-sm font-semibold text-slate-700 md:hidden">
                                <span class="inline-flex h-7 w-7 items-center justify-center rounded-full bg-slate-800 text-xs font-bold text-white">S</span>
                                ShopSphere
                            </a>

                            {{ $slot }}
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </body>
</html>
