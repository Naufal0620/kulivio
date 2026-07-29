<x-app-layout>
    <div class="py-12 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            {{-- Hero Section --}}
            <div class="text-center mb-16">
                <h2 class="text-base text-primary-600 font-semibold tracking-wide uppercase">Tentang Kami</h2>
                <p class="mt-2 text-4xl leading-10 font-black tracking-tight text-gray-900 sm:text-5xl">
                    Kulivio: Masa Depan Kuliner Tradisional
                </p>
                <p class="mt-4 max-w-2xl text-xl text-gray-500 lg:mx-auto">
                    Menghubungkan kelezatan autentik kuliner tradisional lokal dengan kemudahan teknologi video interaktif.
                </p>
            </div>

            {{-- Content Section --}}
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center mb-24">
                <div class="relative">
                    <div class="aspect-video bg-gray-100 rounded-[2.5rem] overflow-hidden shadow-2xl border-8 border-white">
                        <img src="https://images.unsplash.com/photo-1556742044-3c52d6e88c62?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Kulivio Mission" class="w-full h-full object-cover">
                    </div>
                    <div class="absolute -bottom-6 -right-6 bg-primary-600 text-white p-6 rounded-3xl shadow-xl hidden sm:block">
                        <p class="text-3xl font-black italic">Visual-First</p>
                        <p class="text-xs uppercase tracking-widest font-bold opacity-80">E-Commerce Experience</p>
                    </div>
                </div>
                <div class="space-y-6">
                    <h3 class="text-3xl font-bold text-gray-900">Visi Kami</h3>
                    <p class="text-gray-600 leading-relaxed text-lg">
                        Kulivio lahir dari keinginan untuk membantu kuliner tradisional naik kelas. Kami percaya bahwa setiap hidangan memiliki cerita, dan video adalah cara terbaik untuk menceritakannya.
                    </p>
                    <p class="text-gray-600 leading-relaxed text-lg">
                        Melalui konsep <strong>Visual Discovery</strong> dan <strong>Hyper-Local E-Commerce</strong>, kami memudahkan konsumen menemukan kuliner tersembunyi di sekitar mereka sekaligus memberikan panggung bagi para pelaku kuliner tradisional untuk bersinar.
                    </p>
                </div>
            </div>

            {{-- Supporters Section --}}
            <div class="border-t border-gray-100 pt-24 pb-12 text-center">
                <h3 class="text-sm font-black text-gray-400 uppercase tracking-[0.3em] mb-12">Supported By</h3>
                <div class="flex flex-wrap justify-center items-center opacity-70 transition-all duration-500 max-w-6xl mx-auto">
                    <div class="w-1/2 md:w-1/3 lg:w-1/5 flex items-center justify-center p-4">
                        <img src="{{ asset('images/logos/unimed.png') }}" alt="Unimed" class="h-24 w-auto object-contain">
                    </div>
                    <div class="w-1/2 md:w-1/3 lg:w-1/5 flex items-center justify-center p-4">
                        <img src="{{ asset('images/logos/kemdikbud.png') }}" alt="Kemdikbud" class="h-24 w-auto object-contain">
                    </div>
                    <div class="w-1/2 md:w-1/3 lg:w-1/5 flex items-center justify-center p-4">
                        <img src="{{ asset('images/logos/kampus_berdampak.png') }}" alt="Kampus Berdampak" class="h-24 w-auto object-contain">
                    </div>
                    <div class="w-1/2 md:w-1/3 lg:w-1/5 flex items-center justify-center p-4">
                        <img src="{{ asset('images/logos/bima.png') }}" alt="Bima" class="h-24 w-auto object-contain">
                    </div>
                    <div class="w-1/2 md:w-1/3 lg:w-1/5 flex items-center justify-center p-4">
                        <img src="{{ asset('images/logos/smk_negeri_3_tanjung_balai.png') }}" alt="SMK Negeri 3 Tanjung Balai" class="h-24 w-auto object-contain">
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
