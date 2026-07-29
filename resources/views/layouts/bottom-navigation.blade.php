<!-- Bottom Navigation for Mobile -->
<div x-data="{ showMoreMenu: false }" class="sm:hidden" @click.away="showMoreMenu = false">
    <!-- Backdrop Overlay (gelap & blur saat menu lainnya terbuka, di bawah z-50 bottom nav) -->
    <div x-show="showMoreMenu" 
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0"
         x-transition:enter-end="opacity-100"
         x-transition:leave="transition ease-in duration-150"
         x-transition:leave-start="opacity-100"
         x-transition:leave-end="opacity-0"
         @click="showMoreMenu = false"
         class="fixed inset-0 bg-black/40 backdrop-blur-sm z-40"
         x-cloak></div>

    <!-- Bottom Navigation Bar -->
    <div class="fixed bottom-0 left-0 right-0 bg-white border-t border-gray-200 px-4 py-2 z-50 flex justify-around items-center pb-safe">
        <a href="{{ route('home') }}" class="flex flex-col items-center {{ request()->routeIs('home') ? 'text-primary-600' : 'text-gray-400' }}">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
            </svg>
            <span class="text-[10px] mt-1 font-medium">Beranda</span>
        </a>
        
        <a href="{{ route('explore') }}" class="flex flex-col items-center {{ request()->routeIs('explore') ? 'text-primary-600' : 'text-gray-400' }}">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <span class="text-[10px] mt-1 font-medium">Explore</span>
        </a>

        @if(Auth::check() && Auth::user()->role === 'courier')
            <a href="{{ route('courier.dashboard') }}" class="flex flex-col items-center {{ request()->routeIs('courier.dashboard') ? 'text-primary-600' : 'text-gray-400' }}">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                </svg>
                <span class="text-[10px] mt-1 font-medium">Tugas</span>
            </a>
        @else
            <a href="{{ route('cart.index') }}" class="flex flex-col items-center {{ request()->routeIs('cart.index') ? 'text-primary-600' : 'text-gray-400' }} relative">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                </svg>
                @if(count(session('cart', [])) > 0)
                    <span class="absolute -top-1 -right-1 bg-primary-500 text-white text-[8px] font-bold px-1.5 py-0.5 rounded-full">{{ count(session('cart', [])) }}</span>
                @endif
                <span class="text-[10px] mt-1 font-medium">Keranjang</span>
            </a>
        @endif

        <a href="{{ Auth::check() ? route('dashboard') : route('login') }}" class="flex flex-col items-center {{ request()->routeIs('dashboard') ? 'text-primary-600' : 'text-gray-400' }}">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
            </svg>
            <span class="text-[10px] mt-1 font-medium">Pesanan</span>
        </a>

        <!-- Trigger & Container Menu Lainnya -->
        <div class="relative">
            <button @click="showMoreMenu = !showMoreMenu" class="flex flex-col items-center {{ request()->routeIs('about') || request()->routeIs('profile.edit') ? 'text-primary-600' : 'text-gray-400' }} focus:outline-none">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                </svg>
                <span class="text-[10px] mt-1 font-medium">Lainnya</span>
            </button>

            <!-- Compact Pop-up Menu tepat di atas tombol 'Lainnya' -->
            <div x-show="showMoreMenu"
                 x-transition:enter="transition ease-out duration-150 transform"
                 x-transition:enter-start="opacity-0 scale-95 translate-y-2"
                 x-transition:enter-end="opacity-100 scale-100 translate-y-0"
                 x-transition:leave="transition ease-in duration-100 transform"
                 x-transition:leave-start="opacity-100 scale-100 translate-y-0"
                 x-transition:leave-end="opacity-0 scale-95 translate-y-2"
                 class="fixed right-4 bottom-16 w-48 bg-white rounded-2xl rounded-br-none shadow-2xl border border-gray-100 py-2 z-50 overflow-hidden"
                 x-cloak>
                
                <div class="px-3 py-1.5 border-b border-gray-100 mb-1">
                    <p class="text-xs font-semibold text-gray-500 uppercase tracking-wider">Menu</p>
                </div>

                <a href="{{ route('about') }}" class="flex items-center px-3 py-2 text-xs text-gray-700 hover:bg-primary-50 hover:text-primary-600 transition {{ request()->routeIs('about') ? 'text-primary-600 font-bold bg-primary-50' : '' }}">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2.5 text-primary-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    Tentang Kami
                </a>

                @auth
                    <a href="{{ route('profile.edit') }}" class="flex items-center px-3 py-2 text-xs text-gray-700 hover:bg-primary-50 hover:text-primary-600 transition {{ request()->routeIs('profile.edit') ? 'text-primary-600 font-bold bg-primary-50' : '' }}">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2.5 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                        Profil Saya
                    </a>

                    @if(Auth::user()->role === 'admin')
                        <a href="{{ route('admin.dashboard') }}" class="flex items-center px-3 py-2 text-xs text-gray-700 hover:bg-primary-50 hover:text-primary-600 transition">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2.5 text-purple-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            Admin Panel
                        </a>
                    @endif

                    <div class="border-t border-gray-100 mt-1 pt-1">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="w-full flex items-center px-3 py-2 text-xs text-red-600 hover:bg-red-50 transition font-medium">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2.5 text-red-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                                </svg>
                                Log Out
                            </button>
                        </form>
                    </div>
                @else
                    <div class="border-t border-gray-100 mt-1 pt-1">
                        <a href="{{ route('login') }}" class="flex items-center px-3 py-2 text-xs text-gray-700 hover:bg-primary-50 hover:text-primary-600 transition">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2.5 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                            </svg>
                            Log in
                        </a>
                    </div>
                @endauth
            </div>
        </div>
    </div>
</div>



