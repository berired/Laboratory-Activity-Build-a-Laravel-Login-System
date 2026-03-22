<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&family=Fraunces:opsz,wght@9..144,600;9..144,700&display=swap" rel="stylesheet">

        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <style>
            :root {
                --brand-ink: #14213d;
                --brand-accent: #f97316;
                --brand-warm: #fef3c7;
            }

            @keyframes float-up {
                from { opacity: 0; transform: translateY(18px); }
                to { opacity: 1; transform: translateY(0); }
            }

            .reveal {
                animation: float-up 0.8s ease both;
            }

            .reveal-delay {
                animation-delay: 0.16s;
            }
        </style>
    </head>
    <body class="antialiased text-slate-900" style="font-family: 'Manrope', sans-serif;">
        <div class="min-h-screen bg-[radial-gradient(circle_at_10%_10%,#fff2c2_0,#ffe4bf_24%,transparent_46%),radial-gradient(circle_at_90%_8%,#ffd9b8_0,#ffb8a1_24%,transparent_46%),linear-gradient(160deg,#fff6ec_0%,#ffe8d6_55%,#ffd8be_100%)]">
            <header class="relative z-20 mx-auto flex w-full max-w-6xl items-center justify-between px-4 py-6 sm:px-8">
                <a href="{{ url('/') }}" class="inline-flex items-center gap-3 text-sm font-semibold tracking-[0.2em] uppercase text-slate-800">
                    <span class="inline-flex h-9 w-9 items-center justify-center rounded-full bg-slate-900 text-sm font-bold text-white">S</span>
                    ShopSphere
                </a>

                @if (Route::has('login'))
                    <nav class="flex items-center gap-2 sm:gap-3">
                        @auth
                            <a href="{{ url('/dashboard') }}" class="rounded-full bg-slate-900 px-5 py-2.5 text-sm font-semibold text-white transition hover:bg-slate-800">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}" class="rounded-full border border-slate-300/90 bg-white/80 px-5 py-2.5 text-sm font-semibold text-slate-700 transition hover:border-slate-400">Log in</a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="rounded-full bg-orange-600 px-5 py-2.5 text-sm font-semibold text-white transition hover:bg-orange-500">Register</a>
                            @endif
                        @endauth
                    </nav>
                @endif
            </header>

            <main class="mx-auto grid w-full max-w-6xl gap-8 px-4 pb-14 pt-4 sm:px-8 lg:grid-cols-[1.1fr,0.9fr] lg:items-center lg:gap-12 lg:pb-20">
                <section class="reveal space-y-6">
                    <p class="inline-flex rounded-full border border-amber-300 bg-amber-100/70 px-4 py-1 text-xs font-bold tracking-[0.16em] uppercase text-amber-900">New Season Offers</p>
                    <h1 class="max-w-xl text-4xl leading-tight text-slate-900 sm:text-5xl" style="font-family: 'Fraunces', serif;">Retail shopping that feels personal, fast, and rewarding.</h1>
                    <p class="max-w-xl text-base leading-7 text-slate-600">Discover curated essentials, track your orders instantly, and unlock member-only deals through one secure account experience.</p>

                    <div class="flex flex-wrap items-center gap-3 pt-1">
                        <a href="{{ route('register') }}" class="rounded-full bg-slate-900 px-6 py-3 text-sm font-semibold text-white transition hover:bg-slate-800">Start Shopping</a>
                        <a href="{{ route('login') }}" class="rounded-full border border-slate-300 bg-white/80 px-6 py-3 text-sm font-semibold text-slate-700 transition hover:border-slate-400">I Have an Account</a>
                    </div>

                    <div class="grid max-w-xl grid-cols-3 gap-3 pt-4 text-sm">
                        <div class="rounded-2xl border border-white/70 bg-white/75 p-4 shadow-sm">
                            <p class="font-extrabold text-slate-900">3K+</p>
                            <p class="mt-1 text-slate-500">Products</p>
                        </div>
                        <div class="rounded-2xl border border-white/70 bg-white/75 p-4 shadow-sm">
                            <p class="font-extrabold text-slate-900">99%</p>
                            <p class="mt-1 text-slate-500">Satisfaction</p>
                        </div>
                        <div class="rounded-2xl border border-white/70 bg-white/75 p-4 shadow-sm">
                            <p class="font-extrabold text-slate-900">24/7</p>
                            <p class="mt-1 text-slate-500">Support</p>
                        </div>
                    </div>
                </section>

                <section class="reveal reveal-delay">
                    <div class="relative overflow-hidden rounded-3xl border border-white/70 bg-white/75 p-6 shadow-[0_30px_70px_-40px_rgba(15,23,42,0.6)] backdrop-blur">
                        <div class="absolute -right-14 -top-14 h-44 w-44 rounded-full bg-orange-200/70 blur-2xl"></div>
                        <div class="absolute -left-10 bottom-6 h-32 w-32 rounded-full bg-amber-200/60 blur-2xl"></div>

                        <div class="relative space-y-4">
                            <h2 class="text-xl font-extrabold text-slate-900">Featured Picks</h2>

                            <div class="space-y-3">
                                <article class="rounded-2xl border border-slate-200/80 bg-white/80 p-4">
                                    <div class="flex items-center justify-between">
                                        <p class="font-semibold text-slate-800">Summer Cotton Set</p>
                                        <span class="text-sm font-bold text-orange-700">$49</span>
                                    </div>
                                    <p class="mt-1 text-sm text-slate-500">Breathable, lightweight, and designed for everyday comfort.</p>
                                </article>

                                <article class="rounded-2xl border border-slate-200/80 bg-white/80 p-4">
                                    <div class="flex items-center justify-between">
                                        <p class="font-semibold text-slate-800">Leather Carry Tote</p>
                                        <span class="text-sm font-bold text-orange-700">$79</span>
                                    </div>
                                    <p class="mt-1 text-sm text-slate-500">Minimal design with generous storage and secure pockets.</p>
                                </article>

                                <article class="rounded-2xl border border-slate-200/80 bg-white/80 p-4">
                                    <div class="flex items-center justify-between">
                                        <p class="font-semibold text-slate-800">Smart Sneaker X1</p>
                                        <span class="text-sm font-bold text-orange-700">$99</span>
                                    </div>
                                    <p class="mt-1 text-sm text-slate-500">Adaptive cushioning made for all-day city movement.</p>
                                </article>
                            </div>
                        </div>
                    </div>
                </section>
            </main>
        </div>
    </body>
</html>
