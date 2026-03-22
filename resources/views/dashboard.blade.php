<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between gap-4">
            <div>
                <p class="text-xs font-semibold uppercase tracking-[0.18em] text-slate-500">Account Dashboard</p>
                <h2 class="mt-1 text-2xl text-slate-900" style="font-family: 'Fraunces', serif;">
                    Welcome back, {{ Auth::user()->name }}
                </h2>
            </div>
            <span class="rounded-full bg-orange-100 px-4 py-1.5 text-xs font-semibold text-orange-800">Gold Member</span>
        </div>
    </x-slot>

    <div class="py-8">
        <div class="mx-auto max-w-7xl space-y-6 px-4 sm:px-6 lg:px-8">
            <section class="grid gap-4 sm:grid-cols-2 xl:grid-cols-4">
                <article class="rounded-2xl border border-white/70 bg-white/80 p-5 shadow-[0_16px_35px_-25px_rgba(15,23,42,0.5)] backdrop-blur">
                    <p class="text-xs font-semibold uppercase tracking-[0.15em] text-slate-500">Active Orders</p>
                    <p class="mt-3 text-3xl font-extrabold text-slate-900">3</p>
                    <p class="mt-1 text-sm text-slate-500">2 shipped, 1 processing</p>
                </article>
                <article class="rounded-2xl border border-white/70 bg-white/80 p-5 shadow-[0_16px_35px_-25px_rgba(15,23,42,0.5)] backdrop-blur">
                    <p class="text-xs font-semibold uppercase tracking-[0.15em] text-slate-500">Reward Points</p>
                    <p class="mt-3 text-3xl font-extrabold text-slate-900">1,240</p>
                    <p class="mt-1 text-sm text-slate-500">260 points to next tier</p>
                </article>
                <article class="rounded-2xl border border-white/70 bg-white/80 p-5 shadow-[0_16px_35px_-25px_rgba(15,23,42,0.5)] backdrop-blur">
                    <p class="text-xs font-semibold uppercase tracking-[0.15em] text-slate-500">Saved Items</p>
                    <p class="mt-3 text-3xl font-extrabold text-slate-900">12</p>
                    <p class="mt-1 text-sm text-slate-500">4 with limited stock</p>
                </article>
                <article class="rounded-2xl border border-white/70 bg-white/80 p-5 shadow-[0_16px_35px_-25px_rgba(15,23,42,0.5)] backdrop-blur">
                    <p class="text-xs font-semibold uppercase tracking-[0.15em] text-slate-500">Wallet Credit</p>
                    <p class="mt-3 text-3xl font-extrabold text-slate-900">$48</p>
                    <p class="mt-1 text-sm text-slate-500">Valid through next month</p>
                </article>
            </section>

            <section class="grid gap-6 lg:grid-cols-[1.1fr,0.9fr]">
                <div class="rounded-3xl border border-white/70 bg-white/80 p-6 shadow-[0_20px_45px_-30px_rgba(15,23,42,0.6)] backdrop-blur sm:p-7">
                    <div class="flex items-center justify-between gap-3">
                        <h3 class="text-lg font-extrabold text-slate-900">Recent Orders</h3>
                        <a href="#" class="text-sm font-semibold text-orange-700 hover:text-orange-600">View all</a>
                    </div>

                    <div class="mt-4 space-y-3 text-sm">
                        <div class="flex items-center justify-between rounded-2xl border border-slate-200/80 bg-white p-4">
                            <div>
                                <p class="font-semibold text-slate-800">#SPH-4021</p>
                                <p class="mt-1 text-slate-500">Smart Sneaker X1 • 1 item</p>
                            </div>
                            <span class="rounded-full bg-emerald-100 px-3 py-1 text-xs font-semibold text-emerald-700">Delivered</span>
                        </div>
                        <div class="flex items-center justify-between rounded-2xl border border-slate-200/80 bg-white p-4">
                            <div>
                                <p class="font-semibold text-slate-800">#SPH-4018</p>
                                <p class="mt-1 text-slate-500">Leather Carry Tote • 2 items</p>
                            </div>
                            <span class="rounded-full bg-sky-100 px-3 py-1 text-xs font-semibold text-sky-700">Shipped</span>
                        </div>
                        <div class="flex items-center justify-between rounded-2xl border border-slate-200/80 bg-white p-4">
                            <div>
                                <p class="font-semibold text-slate-800">#SPH-4009</p>
                                <p class="mt-1 text-slate-500">Summer Cotton Set • 1 item</p>
                            </div>
                            <span class="rounded-full bg-amber-100 px-3 py-1 text-xs font-semibold text-amber-700">Processing</span>
                        </div>
                    </div>
                </div>

                <div class="space-y-6">
                    <article class="rounded-3xl border border-white/70 bg-[linear-gradient(155deg,#172a4a_0%,#27477b_55%,#2b5aa0_100%)] p-6 text-white shadow-[0_20px_45px_-30px_rgba(15,23,42,0.7)]">
                        <p class="text-xs font-semibold uppercase tracking-[0.16em] text-slate-200">Limited Offer</p>
                        <h3 class="mt-2 text-2xl leading-tight" style="font-family: 'Fraunces', serif;">20% off your next cart</h3>
                        <p class="mt-3 text-sm text-slate-200">Use code WELCOME20 before checkout. Valid for 48 hours.</p>
                        <button type="button" class="mt-5 rounded-full bg-white px-5 py-2.5 text-sm font-semibold text-slate-900 transition hover:bg-slate-100">Apply Promo</button>
                    </article>

                    <article class="rounded-3xl border border-white/70 bg-white/80 p-6 shadow-[0_20px_45px_-30px_rgba(15,23,42,0.6)] backdrop-blur">
                        <h3 class="text-lg font-extrabold text-slate-900">Quick Actions</h3>
                        <div class="mt-4 grid gap-3 text-sm">
                            <a href="{{ route('profile.edit') }}" class="rounded-xl border border-slate-200 bg-white px-4 py-3 font-semibold text-slate-700 transition hover:border-slate-300">Update profile settings</a>
                            <a href="#" class="rounded-xl border border-slate-200 bg-white px-4 py-3 font-semibold text-slate-700 transition hover:border-slate-300">Track active delivery</a>
                            <a href="#" class="rounded-xl border border-slate-200 bg-white px-4 py-3 font-semibold text-slate-700 transition hover:border-slate-300">Browse recommended products</a>
                        </div>
                    </article>
                </div>
            </section>
        </div>
    </div>
</x-app-layout>
