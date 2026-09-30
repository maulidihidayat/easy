<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Easy Project Studio - Fotografi Pernikahan, Prewedding & Momen Istimewa</title>
    <meta name="description" content="Studio fotografi profesional di Lombok. Mengabadikan prewedding, wedding, portrait, dan event dengan estetika sinematik, hangat, dan natural.">
    
    <!-- Google Fonts: Editorial Serif + Clean Sans -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,600;0,700;1,400;1,600&family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <style>
        :root {
            --font-serif: 'Playfair Display', Georgia, serif;
            --font-sans: 'Plus Jakarta Sans', -apple-system, BlinkMacSystemFont, sans-serif;
            --primary: #33736f;
            --primary-dark: #255855;
            --primary-light: #e8f4f3;
            --accent-warm: #c59b4c;
            --bg-canvas: #faf8f5;
        }

        body {
            font-family: var(--font-sans);
            background-color: var(--bg-canvas);
            color: #262626;
            -webkit-font-smoothing: antialiased;
        }

        .font-editorial {
            font-family: var(--font-serif);
        }

        ::selection {
            background-color: #33736f;
            color: #ffffff;
        }

        /* Subtle film grain effect for hero */
        .bg-film-grain {
            background-image: radial-gradient(rgba(0,0,0,0.12) 1px, transparent 0);
            background-size: 24px 24px;
        }
    </style>
</head>

<body class="bg-[#FAF8F5] text-stone-800 antialiased selection:bg-[#33736f] selection:text-white">

    <!-- Floating WhatsApp Button -->
    <aside aria-label="Kontak Cepat" class="fixed z-40 bottom-6 right-6 flex flex-col items-end">
        <a href="https://wa.me/6281703376283" target="_blank" rel="noopener noreferrer" aria-label="Hubungi kami di WhatsApp"
            class="group flex items-center gap-2.5 bg-emerald-600 hover:bg-emerald-700 text-white px-4 py-3 rounded-full shadow-[0_10px_25px_rgba(5,150,105,0.4)] transition-all duration-300 transform hover:scale-105">
            <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24">
                <path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.582 2.128 2.182-.573c.978.58 1.911.928 3.145.929 3.178 0 5.767-2.587 5.768-5.766.001-3.187-2.575-5.77-5.764-5.771zm3.392 8.244c-.144.405-.837.774-1.17.824-.311.045-.698.077-1.118-.057-.272-.087-.621-.219-1.074-.417-1.895-.83-3.13-2.738-3.224-2.865-.095-.127-.775-1.031-.775-1.966 0-.935.49-1.394.664-1.584.175-.19.381-.237.508-.237.127 0 .254.002.365.007.118.006.277-.045.433.329.16.386.551 1.344.6 1.444.049.1.082.217.016.348-.066.131-.098.213-.196.328-.098.115-.206.257-.294.345-.099.098-.202.205-.087.402.115.197.511.844 1.096 1.365.753.671 1.388.879 1.585.977.197.098.312.082.427-.049.115-.131.49-.571.621-.767.131-.197.262-.164.442-.098.18.066 1.144.539 1.34.637.197.098.328.147.377.23.049.082.049.475-.095.88z"/>
            </svg>
            <span class="text-xs font-semibold tracking-wide hidden sm:inline-block">Tanya Konsep Foto</span>
        </a>
    </aside>

    <!-- Navigation Header -->
    <header class="sticky top-0 z-40 backdrop-blur-md bg-[#FAF8F5]/90 border-b border-stone-200/60 transition-all duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                <!-- Brand Logo -->
                <div class="flex items-center">
                    <a href="#home" class="flex items-center gap-3 group">
                        <img src="{{ asset('images/logo-easy-project.png') }}" alt="Easy Project Studio Logo"
                            class="h-10 w-auto object-contain transition-transform duration-300 group-hover:scale-105">
                    </a>
                </div>

                <!-- Desktop Navigation Links -->
                <nav class="hidden md:flex items-center gap-8">
                    <a href="#portfolio"
                        class="text-xs uppercase tracking-widest font-semibold text-stone-600 hover:text-[#33736f] transition-colors">Galeri Karya</a>
                    <a href="#services"
                        class="text-xs uppercase tracking-widest font-semibold text-stone-600 hover:text-[#33736f] transition-colors">Paket & Harga</a>
                    <a href="#about"
                        class="text-xs uppercase tracking-widest font-semibold text-stone-600 hover:text-[#33736f] transition-colors">Tentang Kami</a>
                    <a href="#testimonials"
                        class="text-xs uppercase tracking-widest font-semibold text-stone-600 hover:text-[#33736f] transition-colors">Ulasan Klien</a>
                    <a href="#booking"
                        class="inline-flex items-center gap-2 bg-[#33736f] hover:bg-[#255855] text-white font-semibold py-2.5 px-5 rounded-full text-xs uppercase tracking-wider transition-all duration-300 shadow-sm hover:shadow-md">
                        <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M8 7V3m8 4V3M3 11h18M5 21h14a2 2 0 002-2v-8H3v8a2 2 0 002 2z" />
                        </svg>
                        <span>Reservasi Sesi</span>
                    </a>
                </nav>

                <!-- Mobile Menu Hamburger -->
                <div class="md:hidden">
                    <button id="mobileMenuBtn" aria-label="Buka menu navigasi"
                        class="text-stone-700 hover:text-stone-900 p-2 rounded-xl focus:outline-none border border-stone-200 bg-white">
                        <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Mobile Drawer Menu -->
            <div id="mobileMenu" class="md:hidden hidden py-4 border-t border-stone-200">
                <div class="flex flex-col gap-2">
                    <a href="#portfolio" class="px-4 py-2 text-sm font-medium text-stone-700 hover:bg-stone-100 rounded-lg">Galeri Karya</a>
                    <a href="#services" class="px-4 py-2 text-sm font-medium text-stone-700 hover:bg-stone-100 rounded-lg">Paket & Harga</a>
                    <a href="#about" class="px-4 py-2 text-sm font-medium text-stone-700 hover:bg-stone-100 rounded-lg">Tentang Kami</a>
                    <a href="#testimonials" class="px-4 py-2 text-sm font-medium text-stone-700 hover:bg-stone-100 rounded-lg">Ulasan Klien</a>
                    <a href="#feedback-form" class="px-4 py-2 text-sm font-medium text-stone-700 hover:bg-stone-100 rounded-lg">Tulis Ulasan</a>
                    <a href="#booking" class="mt-2 text-center py-3 bg-[#33736f] text-white rounded-xl font-semibold text-sm">Reservasi Jadwal Foto</a>
                </div>
            </div>
        </div>
    </header>

    <main>
        <!-- Hero Section -->
        <section id="home" class="relative min-h-[90vh] flex items-center justify-center bg-stone-950 text-white overflow-hidden">
            <!-- Background Image with Subtle Parallax Feel -->
            <div class="absolute inset-0 bg-cover bg-center opacity-55 scale-105 transition-transform duration-1000"
                style="background-image: url('{{ asset('images/image.JPG') }}');"></div>

            <!-- Atmospheric Dark Gradients -->
            <div class="absolute inset-0 bg-gradient-to-t from-stone-950 via-stone-950/60 to-stone-950/40"></div>
            <div class="absolute inset-0 bg-film-grain pointer-events-none"></div>

            <!-- Hero Content -->
            <div class="relative z-10 max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-24 text-center">
                <!-- Top Minimal Badge -->
                <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-white/10 backdrop-blur-md border border-white/20 mb-8 text-xs font-medium tracking-widest uppercase text-stone-200">
                    <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
                    <span>Studio Fotografi Lombok • Est. 2019</span>
                </div>

                <!-- Editorial Headline -->
                <h1 class="font-editorial text-4xl sm:text-6xl md:text-7xl font-bold tracking-tight text-white leading-[1.12] mb-6">
                    Menyimpan Cinta, Cerita, &amp; <br class="hidden sm:inline">
                    <span class="italic font-normal text-amber-200">Setiap Rasa yang Nyata.</span>
                </h1>

                <!-- Subtitle -->
                <p class="text-base sm:text-lg md:text-xl text-stone-300 font-light max-w-2xl mx-auto leading-relaxed mb-10">
                    Kami tidak sekadar mengambil gambar. Kami mendokumentasikan kehangatan emosi, tawa spontan, dan tatapan tulus Anda dalam visual yang hangat dan tak lekang oleh waktu.
                </p>

                <!-- Actions -->
                <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
                    <a href="#booking"
                        class="w-full sm:w-auto inline-flex items-center justify-center gap-2 bg-[#33736f] hover:bg-[#255855] text-white font-semibold py-4 px-8 rounded-full text-sm uppercase tracking-wider transition-all duration-300 transform hover:-translate-y-0.5 shadow-[0_12px_30px_rgba(51,115,111,0.35)]">
                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M8 7V3m8 4V3M3 11h18M5 21h14a2 2 0 002-2v-8H3v8a2 2 0 002 2z" />
                        </svg>
                        <span>Reservasi Jadwal Sekarang</span>
                    </a>
                    <a href="#portfolio"
                        class="w-full sm:w-auto inline-flex items-center justify-center gap-2 bg-white/10 hover:bg-white/20 backdrop-blur-md border border-white/25 text-white font-semibold py-4 px-8 rounded-full text-sm uppercase tracking-wider transition-all duration-300">
                        <span>Jelajahi Galeri</span>
                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </a>
                </div>

                <!-- Trust Metrics Bar -->
                <div class="mt-16 pt-10 border-t border-white/15 grid grid-cols-2 md:grid-cols-4 gap-6 max-w-3xl mx-auto text-center">
                    <div>
                        <div class="font-editorial text-3xl font-bold text-white">500+</div>
                        <div class="text-xs text-stone-400 uppercase tracking-widest mt-1">Sesi Foto Sukses</div>
                    </div>
                    <div>
                        <div class="font-editorial text-3xl font-bold text-white">5+ Thn</div>
                        <div class="text-xs text-stone-400 uppercase tracking-widest mt-1">Pengalaman Kreatif</div>
                    </div>
                    <div>
                        <div class="font-editorial text-3xl font-bold text-white">99%</div>
                        <div class="text-xs text-stone-400 uppercase tracking-widest mt-1">Kepuasan Klien</div>
                    </div>
                    <div>
                        <div class="font-editorial text-3xl font-bold text-amber-300 flex items-center justify-center gap-1">
                            <span>4.9</span>
                            <span class="text-lg">★</span>
                        </div>
                        <div class="text-xs text-stone-400 uppercase tracking-widest mt-1">Rating Terpercaya</div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Portfolio Gallery Section -->
        <section id="portfolio" class="py-24 bg-[#FAF8F5]">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <!-- Section Header -->
                <div class="text-center max-w-2xl mx-auto mb-14">
                    <span class="text-xs font-bold uppercase tracking-widest text-[#33736f]">Portofolio Pilihan</span>
                    <h2 class="font-editorial text-3xl sm:text-5xl font-bold text-stone-900 mt-2 mb-4 leading-tight">
                        Karya Otentik yang Penuh Makna
                    </h2>
                    <p class="text-stone-600 text-sm sm:text-base leading-relaxed">
                        Setiap momen memiliki ceritanya sendiri. Berikut beberapa dokumentasi terbaik yang telah kami abadikan bersama para klien.
                    </p>
                </div>

                <!-- Clean Category Filter Pills -->
                <div class="flex flex-wrap justify-center items-center gap-2 mb-12" id="portfolio-filter-container">
                    <button type="button" data-filter="semua"
                        class="portfolio-filter-btn px-5 py-2 rounded-full text-xs font-semibold uppercase tracking-wider transition-all bg-[#33736f] text-white shadow-sm">
                        Semua Karya
                    </button>
                    <button type="button" data-filter="prewedding"
                        class="portfolio-filter-btn px-5 py-2 rounded-full text-xs font-semibold uppercase tracking-wider transition-all bg-white text-stone-600 border border-stone-200 hover:border-[#33736f] hover:text-[#33736f]">
                        Prewedding
                    </button>
                    <button type="button" data-filter="wedding"
                        class="portfolio-filter-btn px-5 py-2 rounded-full text-xs font-semibold uppercase tracking-wider transition-all bg-white text-stone-600 border border-stone-200 hover:border-[#33736f] hover:text-[#33736f]">
                        Wedding
                    </button>
                    <button type="button" data-filter="graduation"
                        class="portfolio-filter-btn px-5 py-2 rounded-full text-xs font-semibold uppercase tracking-wider transition-all bg-white text-stone-600 border border-stone-200 hover:border-[#33736f] hover:text-[#33736f]">
                        Wisuda / Graduation
                    </button>
                    <button type="button" data-filter="birthday"
                        class="portfolio-filter-btn px-5 py-2 rounded-full text-xs font-semibold uppercase tracking-wider transition-all bg-white text-stone-600 border border-stone-200 hover:border-[#33736f] hover:text-[#33736f]">
                        Birthday &amp; Event
                    </button>
                </div>

                <!-- Portfolio Grid (Card Aspect Ratio 4:5 for Luxury Photography) -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8" id="portfolio-grid">
                    @forelse(($portfolios ?? []) as $item)
                        @if ($item && is_object($item))
                            @php
                                $catLower = strtolower($item->category ?? '');
                                // Normalize category for birthday typo in database
                                if (str_contains($catLower, 'brithday') || str_contains($catLower, 'birthday')) {
                                    $catKey = 'birthday';
                                } elseif (str_contains($catLower, 'prewed')) {
                                    $catKey = 'prewedding';
                                } elseif (str_contains($catLower, 'wed')) {
                                    $catKey = 'wedding';
                                } elseif (str_contains($catLower, 'grad')) {
                                    $catKey = 'graduation';
                                } else {
                                    $catKey = $catLower;
                                }
                                $imgUrl = isset($item->image_path) ? asset('storage/' . $item->image_path) : asset('images/image.JPG');
                            @endphp
                            <article class="portfolio-card group relative bg-white rounded-2xl overflow-hidden shadow-[0_10px_30px_rgba(0,0,0,0.03)] border border-stone-200/70 hover:shadow-xl transition-all duration-500 cursor-pointer"
                                data-category="{{ $catKey }}"
                                onclick="openPhotoLightbox('{{ $imgUrl }}', '{{ addslashes($item->title ?? 'Easy Project Photo') }}', '{{ addslashes($item->category ?? 'Dokumentasi') }}')">
                                
                                <div class="aspect-[4/5] w-full overflow-hidden bg-stone-100 relative">
                                    <img src="{{ $imgUrl }}"
                                        alt="{{ $item->title ?? 'Foto Dokumentasi Easy Project' }}"
                                        loading="lazy"
                                        class="w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-105">
                                    
                                    <!-- Subtle gradient overlay on hover -->
                                    <div class="absolute inset-0 bg-gradient-to-t from-stone-950/80 via-stone-950/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-6 text-white">
                                        <span class="inline-block px-2.5 py-1 bg-white/20 backdrop-blur-md rounded-full text-[10px] uppercase font-bold tracking-wider mb-2 text-stone-200 w-max">
                                            {{ $item->category ?? 'Photography' }}
                                        </span>
                                        <h3 class="font-editorial text-xl font-bold leading-snug">
                                            {{ $item->title ?? 'Momen Istimewa' }}
                                        </h3>
                                        <div class="mt-3 flex items-center gap-1.5 text-xs text-amber-200 font-medium">
                                            <span>Klik untuk perbesar</span>
                                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        @endif
                    @empty
                        <div class="col-span-full py-16 text-center text-stone-500">
                            <p class="font-editorial text-xl">Koleksi foto sedang dipersiapkan untuk Anda.</p>
                        </div>
                    @endforelse
                </div>
            </div>
        </section>

        <!-- Services & Packages Section -->
        <section id="services" class="py-24 bg-[#F4F1EA] border-y border-stone-200/80">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <!-- Section Header -->
                <div class="text-center max-w-2xl mx-auto mb-16">
                    <span class="text-xs font-bold uppercase tracking-widest text-[#33736f]">Investasi Kenangan</span>
                    <h2 class="font-editorial text-3xl sm:text-5xl font-bold text-stone-900 mt-2 mb-4 leading-tight">
                        Paket Layanan Fotografi
                    </h2>
                    <p class="text-stone-600 text-sm sm:text-base leading-relaxed">
                        Transparan, tanpa biaya tersembunyi. Dapatkan hasil foto berkualitas studio dengan arahan gaya yang santai dan natural.
                    </p>
                </div>

                <!-- Service Packages Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Package 1: Prewedding -->
                    <div class="relative bg-white rounded-3xl p-8 border border-stone-200 shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col justify-between group">
                        <div class="absolute -top-3.5 right-6">
                            <span class="bg-amber-600 text-white text-[11px] font-bold px-3 py-1 rounded-full uppercase tracking-wider shadow-sm">Favorit Pasangan</span>
                        </div>
                        <div>
                            <div class="w-12 h-12 rounded-2xl bg-[#e8f4f3] flex items-center justify-center text-[#33736f] mb-6">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                </svg>
                            </div>
                            <h3 class="font-editorial text-2xl font-bold text-stone-900 mb-2">Prewedding Photography</h3>
                            <p class="text-stone-600 text-xs sm:text-sm leading-relaxed mb-6">
                                Sesi foto romantis sebelum hari bahagia Anda dengan konsep bebas, santai, dan penuh cerita cinta.
                            </p>
                            <div class="mb-6 pt-4 border-t border-stone-100">
                                <span class="text-xs text-stone-400 block font-medium">Mulai dari</span>
                                <div class="text-3xl font-extrabold text-stone-900 mt-0.5">Rp 2.500.000</div>
                            </div>
                            <ul class="space-y-2.5 text-xs text-stone-600 mb-8">
                                <li class="flex items-center gap-2.5">
                                    <span class="w-4 h-4 rounded-full bg-emerald-100 text-emerald-600 flex items-center justify-center flex-shrink-0 text-[10px]">✓</span>
                                    <span>2 - 3 Jam sesi foto outdoor / studio</span>
                                </li>
                                <li class="flex items-center gap-2.5">
                                    <span class="w-4 h-4 rounded-full bg-emerald-100 text-emerald-600 flex items-center justify-center flex-shrink-0 text-[10px]">✓</span>
                                    <span>100+ Foto kurasi resolusi tinggi</span>
                                </li>
                                <li class="flex items-center gap-2.5">
                                    <span class="w-4 h-4 rounded-full bg-emerald-100 text-emerald-600 flex items-center justify-center flex-shrink-0 text-[10px]">✓</span>
                                    <span>20 Foto edit tone profesional</span>
                                </li>
                                <li class="flex items-center gap-2.5">
                                    <span class="w-4 h-4 rounded-full bg-emerald-100 text-emerald-600 flex items-center justify-center flex-shrink-0 text-[10px]">✓</span>
                                    <span>Konsultasi moodboard &amp; outfit</span>
                                </li>
                            </ul>
                        </div>
                        <button type="button" onclick="selectServiceForBooking('Prewedding Photography')"
                            class="w-full py-3 px-4 rounded-xl border border-stone-300 hover:border-[#33736f] hover:bg-[#33736f] hover:text-white text-stone-800 text-xs font-bold uppercase tracking-wider transition-all duration-300">
                            Pilih Paket Ini →
                        </button>
                    </div>

                    <!-- Package 2: Wedding -->
                    <div class="relative bg-white rounded-3xl p-8 border-2 border-[#33736f] shadow-lg hover:shadow-2xl transition-all duration-300 flex flex-col justify-between group">
                        <div class="absolute -top-3.5 right-6">
                            <span class="bg-[#33736f] text-white text-[11px] font-bold px-3 py-1 rounded-full uppercase tracking-wider shadow-sm">Paling Lengkap</span>
                        </div>
                        <div>
                            <div class="w-12 h-12 rounded-2xl bg-[#e8f4f3] flex items-center justify-center text-[#33736f] mb-6">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2-2v2m8 0V6a2 2 0 012 2v6a2 2 0 01-2 2H6a2 2 0 01-2-2V8a2 2 0 012-2V6"></path>
                                </svg>
                            </div>
                            <h3 class="font-editorial text-2xl font-bold text-stone-900 mb-2">Wedding Photography</h3>
                            <p class="text-stone-600 text-xs sm:text-sm leading-relaxed mb-6">
                                Dokumentasi penuh dari akad, pemberkatan, hingga resepsi. Menangkap setiap haru dan senyuman.
                            </p>
                            <div class="mb-6 pt-4 border-t border-stone-100">
                                <span class="text-xs text-stone-400 block font-medium">Mulai dari</span>
                                <div class="text-3xl font-extrabold text-[#33736f] mt-0.5">Rp 5.000.000</div>
                            </div>
                            <ul class="space-y-2.5 text-xs text-stone-600 mb-8">
                                <li class="flex items-center gap-2.5">
                                    <span class="w-4 h-4 rounded-full bg-emerald-100 text-emerald-600 flex items-center justify-center flex-shrink-0 text-[10px]">✓</span>
                                    <span>Full Day Coverage (Akad s/d Resepsi)</span>
                                </li>
                                <li class="flex items-center gap-2.5">
                                    <span class="w-4 h-4 rounded-full bg-emerald-100 text-emerald-600 flex items-center justify-center flex-shrink-0 text-[10px]">✓</span>
                                    <span>2 Fotografer Profesional + 1 Asisten</span>
                                </li>
                                <li class="flex items-center gap-2.5">
                                    <span class="w-4 h-4 rounded-full bg-emerald-100 text-emerald-600 flex items-center justify-center flex-shrink-0 text-[10px]">✓</span>
                                    <span>200+ Foto edit tone &amp; Album cetak eksklusif</span>
                                </li>
                                <li class="flex items-center gap-2.5">
                                    <span class="w-4 h-4 rounded-full bg-emerald-100 text-emerald-600 flex items-center justify-center flex-shrink-0 text-[10px]">✓</span>
                                    <span>Wooden Box Flashdisk + Semua file RAW/HD</span>
                                </li>
                            </ul>
                        </div>
                        <button type="button" onclick="selectServiceForBooking('Wedding Photography')"
                            class="w-full py-3.5 px-4 rounded-xl bg-[#33736f] hover:bg-[#255855] text-white text-xs font-bold uppercase tracking-wider transition-all duration-300 shadow-sm">
                            Pilih Paket Ini →
                        </button>
                    </div>

                    <!-- Package 3: Portrait / Headshot -->
                    <div class="relative bg-white rounded-3xl p-8 border border-stone-200 shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col justify-between group">
                        <div>
                            <div class="w-12 h-12 rounded-2xl bg-[#e8f4f3] flex items-center justify-center text-[#33736f] mb-6">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                </svg>
                            </div>
                            <h3 class="font-editorial text-2xl font-bold text-stone-900 mb-2">Portrait Photography</h3>
                            <p class="text-stone-600 text-xs sm:text-sm leading-relaxed mb-6">
                                Sesi personal branding, headshot profesional, atau foto wisuda dengan pencahayaan studio memukau.
                            </p>
                            <div class="mb-6 pt-4 border-t border-stone-100">
                                <span class="text-xs text-stone-400 block font-medium">Mulai dari</span>
                                <div class="text-3xl font-extrabold text-stone-900 mt-0.5">Rp 1.500.000</div>
                            </div>
                            <ul class="space-y-2.5 text-xs text-stone-600 mb-8">
                                <li class="flex items-center gap-2.5">
                                    <span class="w-4 h-4 rounded-full bg-emerald-100 text-emerald-600 flex items-center justify-center flex-shrink-0 text-[10px]">✓</span>
                                    <span>1 - 2 Jam sesi foto studio / outdoor</span>
                                </li>
                                <li class="flex items-center gap-2.5">
                                    <span class="w-4 h-4 rounded-full bg-emerald-100 text-emerald-600 flex items-center justify-center flex-shrink-0 text-[10px]">✓</span>
                                    <span>30+ Foto hasil kurasi &amp; retouch</span>
                                </li>
                                <li class="flex items-center gap-2.5">
                                    <span class="w-4 h-4 rounded-full bg-emerald-100 text-emerald-600 flex items-center justify-center flex-shrink-0 text-[10px]">✓</span>
                                    <span>Panduan pose yang luwes &amp; santai</span>
                                </li>
                                <li class="flex items-center gap-2.5">
                                    <span class="w-4 h-4 rounded-full bg-emerald-100 text-emerald-600 flex items-center justify-center flex-shrink-0 text-[10px]">✓</span>
                                    <span>Pilihan latar studio polos / estetik</span>
                                </li>
                            </ul>
                        </div>
                        <button type="button" onclick="selectServiceForBooking('Portrait Photography')"
                            class="w-full py-3 px-4 rounded-xl border border-stone-300 hover:border-[#33736f] hover:bg-[#33736f] hover:text-white text-stone-800 text-xs font-bold uppercase tracking-wider transition-all duration-300">
                            Pilih Paket Ini →
                        </button>
                    </div>

                    <!-- Package 4: Event Photography -->
                    <div class="relative bg-white rounded-3xl p-8 border border-stone-200 shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col justify-between group">
                        <div>
                            <div class="w-12 h-12 rounded-2xl bg-[#e8f4f3] flex items-center justify-center text-[#33736f] mb-6">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                                </svg>
                            </div>
                            <h3 class="font-editorial text-2xl font-bold text-stone-900 mb-2">Event Photography</h3>
                            <p class="text-stone-600 text-xs sm:text-sm leading-relaxed mb-6">
                                Liputan acara kantor, gathering, seminar, pertunangan, atau ulang tahun tanpa momen terlewat.
                            </p>
                            <div class="mb-6 pt-4 border-t border-stone-100">
                                <span class="text-xs text-stone-400 block font-medium">Mulai dari</span>
                                <div class="text-3xl font-extrabold text-stone-900 mt-0.5">Rp 2.000.000</div>
                            </div>
                            <ul class="space-y-2.5 text-xs text-stone-600 mb-8">
                                <li class="flex items-center gap-2.5">
                                    <span class="w-4 h-4 rounded-full bg-emerald-100 text-emerald-600 flex items-center justify-center flex-shrink-0 text-[10px]">✓</span>
                                    <span>3 - 4 Jam liputan dokumentasi acara</span>
                                </li>
                                <li class="flex items-center gap-2.5">
                                    <span class="w-4 h-4 rounded-full bg-emerald-100 text-emerald-600 flex items-center justify-center flex-shrink-0 text-[10px]">✓</span>
                                    <span>100+ Foto dokumentasi kegiatan</span>
                                </li>
                                <li class="flex items-center gap-2.5">
                                    <span class="w-4 h-4 rounded-full bg-emerald-100 text-emerald-600 flex items-center justify-center flex-shrink-0 text-[10px]">✓</span>
                                    <span>Delivery online drive dalam 3 hari</span>
                                </li>
                            </ul>
                        </div>
                        <button type="button" onclick="selectServiceForBooking('Event Photography')"
                            class="w-full py-3 px-4 rounded-xl border border-stone-300 hover:border-[#33736f] hover:bg-[#33736f] hover:text-white text-stone-800 text-xs font-bold uppercase tracking-wider transition-all duration-300">
                            Pilih Paket Ini →
                        </button>
                    </div>

                    <!-- Package 5: Family Photography -->
                    <div class="relative bg-white rounded-3xl p-8 border border-stone-200 shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col justify-between group">
                        <div>
                            <div class="w-12 h-12 rounded-2xl bg-[#e8f4f3] flex items-center justify-center text-[#33736f] mb-6">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                            </div>
                            <h3 class="font-editorial text-2xl font-bold text-stone-900 mb-2">Family Photography</h3>
                            <p class="text-stone-600 text-xs sm:text-sm leading-relaxed mb-6">
                                Mengabadikan kehangatan, canda, dan keharmonisan keluarga dalam potret yang hidup dan berharga.
                            </p>
                            <div class="mb-6 pt-4 border-t border-stone-100">
                                <span class="text-xs text-stone-400 block font-medium">Mulai dari</span>
                                <div class="text-3xl font-extrabold text-stone-900 mt-0.5">Rp 1.800.000</div>
                            </div>
                            <ul class="space-y-2.5 text-xs text-stone-600 mb-8">
                                <li class="flex items-center gap-2.5">
                                    <span class="w-4 h-4 rounded-full bg-emerald-100 text-emerald-600 flex items-center justify-center flex-shrink-0 text-[10px]">✓</span>
                                    <span>2 Jam sesi hangat (hingga 8 orang)</span>
                                </li>
                                <li class="flex items-center gap-2.5">
                                    <span class="w-4 h-4 rounded-full bg-emerald-100 text-emerald-600 flex items-center justify-center flex-shrink-0 text-[10px]">✓</span>
                                    <span>40+ Foto edit warna alami</span>
                                </li>
                                <li class="flex items-center gap-2.5">
                                    <span class="w-4 h-4 rounded-full bg-emerald-100 text-emerald-600 flex items-center justify-center flex-shrink-0 text-[10px]">✓</span>
                                    <span>Suasana santai &amp; ramah anak</span>
                                </li>
                            </ul>
                        </div>
                        <button type="button" onclick="selectServiceForBooking('Family Photography')"
                            class="w-full py-3 px-4 rounded-xl border border-stone-300 hover:border-[#33736f] hover:bg-[#33736f] hover:text-white text-stone-800 text-xs font-bold uppercase tracking-wider transition-all duration-300">
                            Pilih Paket Ini →
                        </button>
                    </div>

                    <!-- Package 6: Custom Package -->
                    <div class="relative bg-white rounded-3xl p-8 border border-stone-200 shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col justify-between group">
                        <div>
                            <div class="w-12 h-12 rounded-2xl bg-[#e8f4f3] flex items-center justify-center text-[#33736f] mb-6">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M7 4V2a1 1 0 011-1h8a1 1 0 011 1v2m-9 0h10m-10 0a2 2 0 00-2 2v14a2 2 0 002 2h10a2 2 0 002-2V6a2 2 0 00-2-2M9 12h6m-6 4h6"></path>
                                </svg>
                            </div>
                            <h3 class="font-editorial text-2xl font-bold text-stone-900 mb-2">Custom Package</h3>
                            <p class="text-stone-600 text-xs sm:text-sm leading-relaxed mb-6">
                                Punya rencana destinasi unik atau kebutuhan spesifik? Diskusikan dengan tim kami untuk paket tailor-made.
                            </p>
                            <div class="mb-6 pt-4 border-t border-stone-100">
                                <span class="text-xs text-stone-400 block font-medium">Investasi</span>
                                <div class="text-3xl font-extrabold text-stone-900 mt-0.5">Sesuai Kebutuhan</div>
                            </div>
                            <ul class="space-y-2.5 text-xs text-stone-600 mb-8">
                                <li class="flex items-center gap-2.5">
                                    <span class="w-4 h-4 rounded-full bg-emerald-100 text-emerald-600 flex items-center justify-center flex-shrink-0 text-[10px]">✓</span>
                                    <span>Konsultasi konsep &amp; budget gratis</span>
                                </li>
                                <li class="flex items-center gap-2.5">
                                    <span class="w-4 h-4 rounded-full bg-emerald-100 text-emerald-600 flex items-center justify-center flex-shrink-0 text-[10px]">✓</span>
                                    <span>Bisa sesi luar kota / pulau</span>
                                </li>
                                <li class="flex items-center gap-2.5">
                                    <span class="w-4 h-4 rounded-full bg-emerald-100 text-emerald-600 flex items-center justify-center flex-shrink-0 text-[10px]">✓</span>
                                    <span>Fleksibilitas rundown acara</span>
                                </li>
                            </ul>
                        </div>
                        <button type="button" onclick="selectServiceForBooking('Custom Package')"
                            class="w-full py-3 px-4 rounded-xl border border-stone-300 hover:border-[#33736f] hover:bg-[#33736f] hover:text-white text-stone-800 text-xs font-bold uppercase tracking-wider transition-all duration-300">
                            Pilih Paket Ini →
                        </button>
                    </div>
                </div>
            </div>
        </section>

        <!-- About & Philosophy Section -->
        <section id="about" class="py-24 bg-[#FAF8F5]">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                    <div>
                        <span class="text-xs font-bold uppercase tracking-widest text-[#33736f]">Mengapa Easy Project</span>
                        <h2 class="font-editorial text-3xl sm:text-5xl font-bold text-stone-900 mt-2 mb-6 leading-tight">
                            Bukan Sekadar Berpose, <br>
                            <span class="italic font-normal text-stone-700">Ini Tentang Menikmati Momen.</span>
                        </h2>
                        <p class="text-stone-600 text-sm sm:text-base leading-relaxed mb-8">
                            Kami percaya foto terbaik tidak pernah lahir dari paksaan pose yang kaku. Bersama kami, Anda cukup menjadi diri Anda sendiri. Biarkan kami yang merajut tawa, tatapan, dan hembusan angin menjadi kenangan yang selalu hangat untuk dilihat kembali puluhan tahun ke depan.
                        </p>

                        <!-- Key Pillars -->
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                            <div class="p-5 rounded-2xl bg-white border border-stone-200/80 shadow-xs">
                                <div class="w-9 h-9 rounded-xl bg-[#e8f4f3] text-[#33736f] flex items-center justify-center font-bold text-sm mb-3">01</div>
                                <h3 class="font-bold text-stone-900 text-sm mb-1">Tone Warna Alami</h3>
                                <p class="text-stone-500 text-xs leading-relaxed">Color grading hangat, natural, dan timeless yang tidak mudah usang oleh tren sesaat.</p>
                            </div>
                            <div class="p-5 rounded-2xl bg-white border border-stone-200/80 shadow-xs">
                                <div class="w-9 h-9 rounded-xl bg-[#e8f4f3] text-[#33736f] flex items-center justify-center font-bold text-sm mb-3">02</div>
                                <h3 class="font-bold text-stone-900 text-sm mb-1">Arahan yang Santai</h3>
                                <p class="text-stone-500 text-xs leading-relaxed">Merasa canggung di depan kamera? Tim kami memandu dengan penuh keramahan.</p>
                            </div>
                            <div class="p-5 rounded-2xl bg-white border border-stone-200/80 shadow-xs">
                                <div class="w-9 h-9 rounded-xl bg-[#e8f4f3] text-[#33736f] flex items-center justify-center font-bold text-sm mb-3">03</div>
                                <h3 class="font-bold text-stone-900 text-sm mb-1">Peralatan Sinematik</h3>
                                <p class="text-stone-500 text-xs leading-relaxed">Kamera sensor full-frame dan lensa prima kelas atas untuk hasil tajam berkilau.</p>
                            </div>
                            <div class="p-5 rounded-2xl bg-white border border-stone-200/80 shadow-xs">
                                <div class="w-9 h-9 rounded-xl bg-[#e8f4f3] text-[#33736f] flex items-center justify-center font-bold text-sm mb-3">04</div>
                                <h3 class="font-bold text-stone-900 text-sm mb-1">Delivery Tepat Waktu</h3>
                                <p class="text-stone-500 text-xs leading-relaxed">Sneak peek preview cepat dalam 48 jam agar Anda bisa langsung membagikannya.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Right Image Collage -->
                    <div class="relative">
                        <div class="relative rounded-3xl overflow-hidden shadow-2xl border-4 border-white aspect-[4/5] bg-stone-200">
                            <img src="{{ asset('images/banner.JPG') }}" alt="Easy Project Studio Team"
                                class="w-full h-full object-cover">
                            <div class="absolute inset-0 bg-gradient-to-t from-stone-950/70 via-transparent to-transparent flex items-end p-8 text-white">
                                <div>
                                    <p class="font-editorial text-lg italic text-amber-200">"Kamera menangkap gambar, hati menangkap rasa."</p>
                                    <p class="text-xs text-stone-300 mt-1 uppercase tracking-widest font-semibold">Easy Project Photography Studio</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Testimonials / Client Stories Section -->
        <section id="testimonials" class="py-24 bg-[#F4F1EA] border-y border-stone-200/80">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <!-- Section Header -->
                <div class="text-center max-w-2xl mx-auto mb-16">
                    <span class="text-xs font-bold uppercase tracking-widest text-[#33736f]">Kata Mereka</span>
                    <h2 class="font-editorial text-3xl sm:text-5xl font-bold text-stone-900 mt-2 mb-4 leading-tight">
                        Kisah Bahagia Para Klien
                    </h2>
                    <p class="text-stone-600 text-sm sm:text-base leading-relaxed">
                        Kepercayaan dan kepuasan Anda adalah alasan terbesar kami terus berkarya dengan sepenuh hati.
                    </p>
                </div>

                <!-- Testimonial Cards Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @forelse(($feedbacks ?? []) as $fb)
                        <div class="bg-white rounded-3xl p-7 border border-stone-200/90 shadow-sm hover:shadow-md transition duration-300 flex flex-col justify-between">
                            <div>
                                <!-- Stars -->
                                <div class="flex items-center gap-1 text-amber-400 mb-4 text-sm">
                                    @for ($i = 0; $i < ($fb->rating ?? 5); $i++)
                                        <span>★</span>
                                    @endfor
                                </div>
                                <p class="text-stone-700 text-xs sm:text-sm leading-relaxed italic mb-6">
                                    "{{ $fb->message }}"
                                </p>
                            </div>
                            <div class="flex items-center gap-3 pt-4 border-t border-stone-100">
                                @if ($fb && is_object($fb) && $fb->photo_path)
                                    <img src="{{ asset('storage/' . $fb->photo_path) }}" alt="{{ $fb->name }}"
                                        class="w-10 h-10 rounded-full object-cover border border-stone-200">
                                @else
                                    <div class="w-10 h-10 rounded-full bg-[#e8f4f3] text-[#33736f] flex items-center justify-center font-bold text-sm">
                                        {{ substr($fb->name ?? 'K', 0, 1) }}
                                    </div>
                                @endif
                                <div>
                                    <h3 class="font-bold text-stone-900 text-xs sm:text-sm">{{ $fb->name }}</h3>
                                    <p class="text-[11px] text-stone-400">Klien Terverifikasi</p>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="col-span-full py-12 text-center text-stone-500">
                            <p class="font-editorial text-lg">Belum ada ulasan yang ditampilkan.</p>
                        </div>
                    @endforelse
                </div>

                <!-- Invite to feedback -->
                <div class="mt-12 text-center">
                    <a href="#feedback-form" class="inline-flex items-center gap-2 text-xs font-semibold text-[#33736f] hover:text-[#255855] hover:underline">
                        <span>Pernah foto bersama kami? Bagikan pengalaman Anda di sini</span>
                        <span>→</span>
                    </a>
                </div>
            </div>
        </section>

        <!-- Booking & Payment Section (THE HERO EXPERIENCE) -->
        <section id="booking" class="py-24 bg-[#FAF8F5]">
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
                <!-- Section Header -->
                <div class="text-center max-w-2xl mx-auto mb-14">
                    <span class="inline-block px-3.5 py-1 rounded-full bg-[#e8f4f3] text-[#33736f] text-xs font-bold uppercase tracking-widest mb-3">
                        Langkah Mudah
                    </span>
                    <h2 class="font-editorial text-3xl sm:text-5xl font-bold text-stone-900 mb-4 leading-tight">
                        Rencanakan Sesi Foto Anda
                    </h2>
                    <p class="text-stone-600 text-sm sm:text-base leading-relaxed">
                        Pilih jadwal yang Anda inginkan dan amankan tanggal sesi dengan mudah. Tim kami akan menghubungi Anda untuk konfirmasi teknis.
                    </p>
                </div>

                <!-- Main Form Card Container -->
                <div class="bg-white rounded-3xl shadow-[0_20px_50px_rgba(0,0,0,0.05)] border border-stone-200/80 p-6 sm:p-10 md:p-12">
                    
                    <!-- Flash Notifications -->
                    @if (session('success'))
                        <div class="mb-8 rounded-2xl bg-emerald-50 border border-emerald-200 text-emerald-950 p-6 shadow-xs">
                            <div class="flex items-start gap-4">
                                <div class="w-10 h-10 rounded-full bg-emerald-100 flex items-center justify-center flex-shrink-0 text-emerald-700">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                </div>
                                <div class="flex-1">
                                    <h4 class="font-bold text-base text-emerald-950">Terima Kasih! Permintaan Booking Telah Diterima</h4>
                                    <p class="text-xs sm:text-sm text-emerald-800 mt-1 leading-relaxed">{{ session('success') }}</p>
                                    @if (session('booking_id'))
                                        <div class="inline-flex items-center gap-2 mt-3 px-3 py-1 bg-white/80 rounded-lg text-xs font-mono font-bold text-emerald-900 border border-emerald-200">
                                            ID Booking: #{{ session('booking_id') }}
                                        </div>
                                    @endif
                                </div>
                            </div>

                            @if (session('show_whatsapp_buttons'))
                                <div class="mt-5 pt-4 border-t border-emerald-200 flex flex-col sm:flex-row gap-3">
                                    <a href="{{ session('admin_whatsapp_url') }}" target="_blank"
                                        class="inline-flex items-center justify-center px-6 py-3 bg-emerald-600 hover:bg-emerald-700 text-white font-semibold rounded-xl text-xs uppercase tracking-wider transition-all duration-300 shadow-sm gap-2">
                                        <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
                                            <path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.582 2.128 2.182-.573c.978.58 1.911.928 3.145.929 3.178 0 5.767-2.587 5.768-5.766.001-3.187-2.575-5.77-5.764-5.771zm3.392 8.244c-.144.405-.837.774-1.17.824-.311.045-.698.077-1.118-.057-.272-.087-.621-.219-1.074-.417-1.895-.83-3.13-2.738-3.224-2.865-.095-.127-.775-1.031-.775-1.966 0-.935.49-1.394.664-1.584.175-.19.381-.237.508-.237.127 0 .254.002.365.007.118.006.277-.045.433.329.16.386.551 1.344.6 1.444.049.1.082.217.016.348-.066.131-.098.213-.196.328-.098.115-.206.257-.294.345-.099.098-.202.205-.087.402.115.197.511.844 1.096 1.365.753.671 1.388.879 1.585.977.197.098.312.082.427-.049.115-.131.49-.571.621-.767.131-.197.262-.164.442-.098.18.066 1.144.539 1.34.637.197.098.328.147.377.23.049.082.049.475-.095.88z"/>
                                        </svg>
                                        <span>Konfirmasi ke Admin via WhatsApp</span>
                                    </a>
                                </div>
                            @endif
                        </div>
                    @endif

                    @if (isset($errors) && $errors->any())
                        <div class="mb-8 rounded-2xl bg-rose-50 border border-rose-200 text-rose-900 p-5">
                            <div class="flex items-center gap-2 mb-2 font-bold text-sm">
                                <svg class="w-4 h-4 text-rose-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path>
                                </svg>
                                <span>Mohon lengkapi data berikut:</span>
                            </div>
                            <ul class="list-disc list-inside space-y-1 text-xs text-rose-800">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form class="space-y-8" method="POST" action="{{ route('bookings.store') }}" enctype="multipart/form-data">
                        @csrf
                        
                        <!-- Step 1: Identitas Klien -->
                        <div>
                            <div class="flex items-center gap-2.5 mb-5 pb-2 border-b border-stone-100">
                                <span class="w-6 h-6 rounded-full bg-[#e8f4f3] text-[#33736f] flex items-center justify-center font-bold text-xs">1</span>
                                <h3 class="font-bold text-stone-900 text-sm uppercase tracking-wider">Data Diri &amp; Kontak</h3>
                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                                <div>
                                    <label class="block text-xs font-semibold text-stone-700 mb-1.5">Nama Lengkap <span class="text-rose-500">*</span></label>
                                    <input name="full_name" value="{{ old('full_name') }}" type="text"
                                        class="w-full px-4 py-3 bg-[#FAF8F5] border border-stone-200 rounded-xl text-sm focus:ring-2 focus:ring-[#33736f] focus:bg-white focus:outline-none transition"
                                        placeholder="Masukkan nama lengkap Anda" required>
                                </div>
                                <div>
                                    <label class="block text-xs font-semibold text-stone-700 mb-1.5">Nomor WhatsApp Aktif <span class="text-rose-500">*</span></label>
                                    <input name="phone" value="{{ old('phone') }}" type="tel"
                                        class="w-full px-4 py-3 bg-[#FAF8F5] border border-stone-200 rounded-xl text-sm focus:ring-2 focus:ring-[#33736f] focus:bg-white focus:outline-none transition"
                                        placeholder="08xxxxxxxxxx" required>
                                </div>
                                <div class="md:col-span-2">
                                    <label class="block text-xs font-semibold text-stone-700 mb-1.5">Email Aktif <span class="text-rose-500">*</span></label>
                                    <input name="email" value="{{ old('email') }}" type="email"
                                        class="w-full px-4 py-3 bg-[#FAF8F5] border border-stone-200 rounded-xl text-sm focus:ring-2 focus:ring-[#33736f] focus:bg-white focus:outline-none transition"
                                        placeholder="nama@email.com" required>
                                </div>
                            </div>
                        </div>

                        <!-- Step 2: Layanan & Tanggal -->
                        <div>
                            <div class="flex items-center gap-2.5 mb-5 pb-2 border-b border-stone-100">
                                <span class="w-6 h-6 rounded-full bg-[#e8f4f3] text-[#33736f] flex items-center justify-center font-bold text-xs">2</span>
                                <h3 class="font-bold text-stone-900 text-sm uppercase tracking-wider">Detail Sesi Fotografi</h3>
                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                                <div>
                                    <label class="block text-xs font-semibold text-stone-700 mb-1.5">Pilih Layanan <span class="text-rose-500">*</span></label>
                                    <select name="service_type" id="service-select"
                                        class="w-full px-4 py-3 bg-[#FAF8F5] border border-stone-200 rounded-xl text-sm focus:ring-2 focus:ring-[#33736f] focus:bg-white focus:outline-none transition"
                                        required>
                                        <option value="">-- Pilih Paket Layanan --</option>
                                        <option value="Prewedding Photography" data-price="2500000" data-dp="750000" @selected(old('service_type') === 'Prewedding Photography')>Prewedding Photography (Rp 2.500.000)</option>
                                        <option value="Wedding Photography" data-price="5000000" data-dp="1500000" @selected(old('service_type') === 'Wedding Photography')>Wedding Photography (Rp 5.000.000)</option>
                                        <option value="Portrait Photography" data-price="1500000" data-dp="500000" @selected(old('service_type') === 'Portrait Photography')>Portrait Photography (Rp 1.500.000)</option>
                                        <option value="Event Photography" data-price="2000000" data-dp="500000" @selected(old('service_type') === 'Event Photography')>Event Photography (Rp 2.000.000)</option>
                                        <option value="Family Photography" data-price="1800000" data-dp="500000" @selected(old('service_type') === 'Family Photography')>Family Photography (Rp 1.800.000)</option>
                                        <option value="Custom Package" data-price="0" data-dp="500000" @selected(old('service_type') === 'Custom Package')>Custom Package (Sesuai Kebutuhan)</option>
                                    </select>
                                </div>
                                <div>
                                    <label class="block text-xs font-semibold text-stone-700 mb-1.5">Perkiraan Tanggal Acara</label>
                                    <input name="event_date" value="{{ old('event_date') }}" type="date"
                                        class="w-full px-4 py-3 bg-[#FAF8F5] border border-stone-200 rounded-xl text-sm focus:ring-2 focus:ring-[#33736f] focus:bg-white focus:outline-none transition">
                                </div>

                                <div class="md:col-span-2">
                                    <label class="block text-xs font-semibold text-stone-700 mb-1.5">Lokasi Pelaksanaan</label>
                                    <input name="location" value="{{ old('location') }}" type="text"
                                        class="w-full px-4 py-3 bg-[#FAF8F5] border border-stone-200 rounded-xl text-sm focus:ring-2 focus:ring-[#33736f] focus:bg-white focus:outline-none transition"
                                        placeholder="Contoh: Pantai Senggigi, Studio Easy Project, Hotel Grand, dll">
                                </div>

                                <div class="md:col-span-2">
                                    <label class="block text-xs font-semibold text-stone-700 mb-1.5">Detail Kebutuhan &amp; Konsep (Opsional)</label>
                                    <textarea name="details" rows="3"
                                        class="w-full px-4 py-3 bg-[#FAF8F5] border border-stone-200 rounded-xl text-sm focus:ring-2 focus:ring-[#33736f] focus:bg-white focus:outline-none transition"
                                        placeholder="Ceritakan gambaran konsep yang diinginkan, tema pakaian, atau pertanyaan khusus...">{{ old('details') }}</textarea>
                                </div>
                            </div>

                            <!-- Dynamic Price Card -->
                            <div id="service-price-card" class="hidden mt-5 rounded-2xl bg-[#e8f4f3] border border-[#33736f]/30 p-5 transition-all">
                                <div class="flex items-center justify-between flex-wrap gap-2">
                                    <div>
                                        <span class="text-[11px] font-bold uppercase tracking-wider text-[#33736f]">Paket Terpilih</span>
                                        <h4 id="price-card-title" class="font-bold text-stone-900 text-base mt-0.5">-</h4>
                                    </div>
                                    <div class="text-right">
                                        <span class="text-[11px] text-stone-500 font-medium">Estimasi Biaya</span>
                                        <div id="price-card-total" class="font-editorial text-2xl font-bold text-[#33736f]">-</div>
                                    </div>
                                </div>
                                <div class="mt-3 pt-3 border-t border-[#33736f]/20 flex items-center justify-between flex-wrap gap-2 text-xs text-stone-700">
                                    <span>💡 Anjuran DP Pengunci Jadwal: <strong id="price-card-dp" class="text-emerald-800 font-bold">-</strong></span>
                                    <span class="text-stone-500">Pelunasan di hari H pelaksanaan</span>
                                </div>
                            </div>
                            <input type="hidden" name="amount" id="form-amount" value="{{ old('amount') }}">
                        </div>

                        <!-- Step 3: Metode Pembayaran -->
                        <div>
                            <div class="flex items-center justify-between mb-5 pb-2 border-b border-stone-100">
                                <div class="flex items-center gap-2.5">
                                    <span class="w-6 h-6 rounded-full bg-[#e8f4f3] text-[#33736f] flex items-center justify-center font-bold text-xs">3</span>
                                    <h3 class="font-bold text-stone-900 text-sm uppercase tracking-wider">Metode Pembayaran</h3>
                                </div>
                                <span class="text-[11px] text-stone-500">Pilih salah satu rekening</span>
                            </div>

                            <!-- Payment Options -->
                            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-3">
                                <!-- BCA -->
                                <label class="payment-method-card relative flex items-center p-4 rounded-2xl border-2 border-stone-200 hover:border-[#33736f] cursor-pointer transition bg-[#FAF8F5]">
                                    <input type="radio" name="payment_method" value="Transfer Bank BCA" class="sr-only" required @checked(old('payment_method') === 'Transfer Bank BCA' || !old('payment_method'))>
                                    <div class="w-5 h-5 rounded-full border-2 border-stone-300 flex items-center justify-center mr-3 radio-indicator transition flex-shrink-0">
                                        <div class="w-2.5 h-2.5 rounded-full bg-[#33736f] hidden check-dot"></div>
                                    </div>
                                    <div class="flex-1">
                                        <div class="flex items-center justify-between">
                                            <span class="text-xs font-bold text-stone-900">Transfer BCA</span>
                                            <span class="text-[10px] font-bold px-2 py-0.5 bg-blue-100 text-blue-800 rounded-md">BCA</span>
                                        </div>
                                        <p class="text-[11px] text-stone-500 mt-0.5">m-BCA / KlikBCA / ATM</p>
                                    </div>
                                </label>

                                <!-- Mandiri -->
                                <label class="payment-method-card relative flex items-center p-4 rounded-2xl border-2 border-stone-200 hover:border-[#33736f] cursor-pointer transition bg-[#FAF8F5]">
                                    <input type="radio" name="payment_method" value="Transfer Bank Mandiri" class="sr-only" @checked(old('payment_method') === 'Transfer Bank Mandiri')>
                                    <div class="w-5 h-5 rounded-full border-2 border-stone-300 flex items-center justify-center mr-3 radio-indicator transition flex-shrink-0">
                                        <div class="w-2.5 h-2.5 rounded-full bg-[#33736f] hidden check-dot"></div>
                                    </div>
                                    <div class="flex-1">
                                        <div class="flex items-center justify-between">
                                            <span class="text-xs font-bold text-stone-900">Bank Mandiri</span>
                                            <span class="text-[10px] font-bold px-2 py-0.5 bg-indigo-100 text-indigo-800 rounded-md">MANDIRI</span>
                                        </div>
                                        <p class="text-[11px] text-stone-500 mt-0.5">Livin' Mandiri / ATM</p>
                                    </div>
                                </label>

                                <!-- BRI -->
                                <label class="payment-method-card relative flex items-center p-4 rounded-2xl border-2 border-stone-200 hover:border-[#33736f] cursor-pointer transition bg-[#FAF8F5]">
                                    <input type="radio" name="payment_method" value="Transfer Bank BRI" class="sr-only" @checked(old('payment_method') === 'Transfer Bank BRI')>
                                    <div class="w-5 h-5 rounded-full border-2 border-stone-300 flex items-center justify-center mr-3 radio-indicator transition flex-shrink-0">
                                        <div class="w-2.5 h-2.5 rounded-full bg-[#33736f] hidden check-dot"></div>
                                    </div>
                                    <div class="flex-1">
                                        <div class="flex items-center justify-between">
                                            <span class="text-xs font-bold text-stone-900">Bank BRI</span>
                                            <span class="text-[10px] font-bold px-2 py-0.5 bg-sky-100 text-sky-800 rounded-md">BRI</span>
                                        </div>
                                        <p class="text-[11px] text-stone-500 mt-0.5">BRImo / ATM BRI</p>
                                    </div>
                                </label>

                                <!-- QRIS -->
                                <label class="payment-method-card relative flex items-center p-4 rounded-2xl border-2 border-stone-200 hover:border-[#33736f] cursor-pointer transition bg-[#FAF8F5]">
                                    <input type="radio" name="payment_method" value="QRIS" class="sr-only" @checked(old('payment_method') === 'QRIS')>
                                    <div class="w-5 h-5 rounded-full border-2 border-stone-300 flex items-center justify-center mr-3 radio-indicator transition flex-shrink-0">
                                        <div class="w-2.5 h-2.5 rounded-full bg-[#33736f] hidden check-dot"></div>
                                    </div>
                                    <div class="flex-1">
                                        <div class="flex items-center justify-between">
                                            <span class="text-xs font-bold text-stone-900">QRIS Scan</span>
                                            <span class="text-[10px] font-bold px-2 py-0.5 bg-rose-100 text-rose-800 rounded-md">QRIS</span>
                                        </div>
                                        <p class="text-[11px] text-stone-500 mt-0.5">GoPay, OVO, DANA, BCA</p>
                                    </div>
                                </label>

                                <!-- Cash -->
                                <label class="payment-method-card relative flex items-center p-4 rounded-2xl border-2 border-stone-200 hover:border-[#33736f] cursor-pointer transition bg-[#FAF8F5] sm:col-span-2 lg:col-span-2">
                                    <input type="radio" name="payment_method" value="Bayar di Lokasi / Cash" class="sr-only" @checked(old('payment_method') === 'Bayar di Lokasi / Cash')>
                                    <div class="w-5 h-5 rounded-full border-2 border-stone-300 flex items-center justify-center mr-3 radio-indicator transition flex-shrink-0">
                                        <div class="w-2.5 h-2.5 rounded-full bg-[#33736f] hidden check-dot"></div>
                                    </div>
                                    <div class="flex-1">
                                        <div class="flex items-center justify-between">
                                            <span class="text-xs font-bold text-stone-900">Bayar di Tempat / Konsultasi Dulu</span>
                                            <span class="text-[10px] font-bold px-2 py-0.5 bg-stone-200 text-stone-800 rounded-md">CASH</span>
                                        </div>
                                        <p class="text-[11px] text-stone-500 mt-0.5">Pelunasan saat temu teknis atau hari pelaksanaan</p>
                                    </div>
                                </label>
                            </div>

                            <!-- Dynamic Account Details Box -->
                            <div class="mt-4 rounded-2xl bg-[#F4F1EA] border border-stone-200 p-5">
                                <!-- BCA Info -->
                                <div id="info-bca" class="bank-detail-item">
                                    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4">
                                        <div>
                                            <span class="text-xs font-bold text-blue-900">Rekening Bank BCA</span>
                                            <div class="flex items-center gap-3 mt-1.5">
                                                <span class="font-mono text-2xl font-bold tracking-wider text-stone-900" id="rek-bca">8735019281</span>
                                                <button type="button" onclick="copyToClipboard('8735019281', this)"
                                                    class="inline-flex items-center gap-1.5 px-3 py-1.5 bg-white border border-stone-300 rounded-lg text-xs font-semibold text-stone-700 hover:bg-stone-50 transition active:scale-95 shadow-xs">
                                                    <span>Salin Rekening</span>
                                                </button>
                                            </div>
                                            <p class="text-xs text-stone-600 mt-1">Atas Nama: <strong class="text-stone-900">EASY PROJECT STUDIO</strong></p>
                                        </div>
                                        <div class="text-xs text-stone-500 bg-white/80 p-3 rounded-xl border border-stone-200/60 max-w-xs">
                                            Silakan transfer nominal DP (disarankan minimal Rp 500.000) atau pelunasan ke nomor rekening di atas.
                                        </div>
                                    </div>
                                </div>

                                <!-- Mandiri Info -->
                                <div id="info-mandiri" class="bank-detail-item hidden">
                                    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4">
                                        <div>
                                            <span class="text-xs font-bold text-indigo-900">Rekening Bank Mandiri</span>
                                            <div class="flex items-center gap-3 mt-1.5">
                                                <span class="font-mono text-2xl font-bold tracking-wider text-stone-900" id="rek-mandiri">161000892104</span>
                                                <button type="button" onclick="copyToClipboard('161000892104', this)"
                                                    class="inline-flex items-center gap-1.5 px-3 py-1.5 bg-white border border-stone-300 rounded-lg text-xs font-semibold text-stone-700 hover:bg-stone-50 transition active:scale-95 shadow-xs">
                                                    <span>Salin Rekening</span>
                                                </button>
                                            </div>
                                            <p class="text-xs text-stone-600 mt-1">Atas Nama: <strong class="text-stone-900">EASY PROJECT STUDIO</strong></p>
                                        </div>
                                        <div class="text-xs text-stone-500 bg-white/80 p-3 rounded-xl border border-stone-200/60 max-w-xs">
                                            Transfer melalui Livin' by Mandiri atau ATM, lalu lampirkan bukti transfer di formulir berikut.
                                        </div>
                                    </div>
                                </div>

                                <!-- BRI Info -->
                                <div id="info-bri" class="bank-detail-item hidden">
                                    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4">
                                        <div>
                                            <span class="text-xs font-bold text-sky-900">Rekening Bank BRI</span>
                                            <div class="flex items-center gap-3 mt-1.5">
                                                <span class="font-mono text-2xl font-bold tracking-wider text-stone-900" id="rek-bri">002101089210508</span>
                                                <button type="button" onclick="copyToClipboard('002101089210508', this)"
                                                    class="inline-flex items-center gap-1.5 px-3 py-1.5 bg-white border border-stone-300 rounded-lg text-xs font-semibold text-stone-700 hover:bg-stone-50 transition active:scale-95 shadow-xs">
                                                    <span>Salin Rekening</span>
                                                </button>
                                            </div>
                                            <p class="text-xs text-stone-600 mt-1">Atas Nama: <strong class="text-stone-900">EASY PROJECT STUDIO</strong></p>
                                        </div>
                                        <div class="text-xs text-stone-500 bg-white/80 p-3 rounded-xl border border-stone-200/60 max-w-xs">
                                            Transfer via BRImo atau ATM BRI, lalu simpan struk transfer untuk diunggah.
                                        </div>
                                    </div>
                                </div>

                                <!-- QRIS Info -->
                                <div id="info-qris" class="bank-detail-item hidden">
                                    <div class="flex flex-col sm:flex-row items-center gap-5">
                                        <div class="bg-white p-3 rounded-2xl border border-stone-200 shadow-sm flex flex-col items-center">
                                            <div class="w-32 h-32 bg-stone-900 rounded-xl p-2 flex flex-col items-center justify-between text-white text-[9px] font-mono">
                                                <div class="w-full flex justify-between">
                                                    <div class="w-7 h-7 border-2 border-white rounded flex items-center justify-center font-bold">QR</div>
                                                    <span class="text-[8px] font-bold text-rose-400">QRIS</span>
                                                    <div class="w-7 h-7 border-2 border-white rounded flex items-center justify-center font-bold">QR</div>
                                                </div>
                                                <div class="text-center font-sans font-bold text-[11px] text-amber-300">EASY PROJECT</div>
                                                <div class="w-full flex justify-between">
                                                    <div class="w-7 h-7 border-2 border-white rounded"></div>
                                                    <div class="w-12 h-3 bg-white/20 rounded flex items-center justify-center text-[7px]">NMID: 0092</div>
                                                    <div class="w-3 h-3 bg-white/30 rounded"></div>
                                                </div>
                                            </div>
                                            <span class="text-[10px] text-stone-500 mt-2 font-medium">BCA, GoPay, OVO, DANA</span>
                                        </div>
                                        <div class="flex-1 text-xs text-stone-600 space-y-1.5">
                                            <h4 class="font-bold text-stone-900 text-sm">Scan Melalui Mobile Banking / E-Wallet</h4>
                                            <p>1. Buka aplikasi m-Banking atau e-Wallet favorit Anda.</p>
                                            <p>2. Pilih menu <strong>Scan QRIS</strong> dan masukkan nominal DP.</p>
                                            <p>3. Tangkap layar (screenshot) bukti pembayaran dan unggah di form di bawah ini.</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Cash Info -->
                                <div id="info-cash" class="bank-detail-item hidden">
                                    <div class="flex items-start gap-3">
                                        <div class="w-8 h-8 rounded-full bg-stone-200 text-stone-700 flex items-center justify-center flex-shrink-0 text-sm font-bold">
                                            Rp
                                        </div>
                                        <div class="text-xs text-stone-600 space-y-1">
                                            <h4 class="font-bold text-stone-900 text-sm">Pembayaran di Lokasi / Pertemuan</h4>
                                            <p>Anda dapat berdiskusi terlebih dahulu dengan fotografer kami. Pembayaran DP/lunas dapat diserahkan saat sesi konsultasi langsung atau di hari H acara.</p>
                                            <p class="text-amber-800 font-semibold">*Catatan: Jadwal acara diprioritaskan untuk pemesanan yang telah mengunci slot dengan transfer DP.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Step 4: Upload Bukti Pembayaran -->
                        <div>
                            <div class="flex items-center justify-between mb-4 pb-2 border-b border-stone-100">
                                <div class="flex items-center gap-2.5">
                                    <span class="w-6 h-6 rounded-full bg-[#e8f4f3] text-[#33736f] flex items-center justify-center font-bold text-xs">4</span>
                                    <h3 class="font-bold text-stone-900 text-sm uppercase tracking-wider">Unggah Bukti Pembayaran</h3>
                                </div>
                                <span class="text-[11px] text-stone-500" id="proof-optional-badge">Dianjurkan jika transfer</span>
                            </div>

                            <!-- Dropzone Box -->
                            <div id="dropzone-box" class="relative border-2 border-dashed border-stone-300 hover:border-[#33736f] rounded-2xl p-6 text-center transition cursor-pointer bg-[#FAF8F5] hover:bg-[#e8f4f3]/30">
                                <input type="file" name="payment_proof" id="payment_proof_input" accept="image/jpeg,image/png,image/jpg,image/webp" class="absolute inset-0 w-full h-full opacity-0 cursor-pointer z-10">

                                <!-- Placeholder View -->
                                <div id="upload-placeholder" class="space-y-2">
                                    <div class="w-12 h-12 mx-auto rounded-full bg-white border border-stone-200 flex items-center justify-center text-[#33736f] shadow-xs">
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <span class="text-xs sm:text-sm font-bold text-stone-800">Klik untuk memilih foto bukti transfer</span>
                                        <span class="text-xs text-stone-500 block mt-0.5">atau drag &amp; drop gambar struk pembayaran ke sini</span>
                                    </div>
                                    <p class="text-[11px] text-stone-400">Format JPG, PNG, WEBP (Maksimal 5MB)</p>
                                </div>

                                <!-- Image Preview View -->
                                <div id="upload-preview" class="hidden flex flex-col items-center">
                                    <div class="relative group">
                                        <img id="preview-image" src="" alt="Bukti Transfer" class="max-h-60 rounded-xl shadow-md object-contain border border-stone-200 bg-white">
                                        <button type="button" id="remove-file-btn" class="absolute -top-2.5 -right-2.5 w-7 h-7 bg-rose-600 hover:bg-rose-700 text-white rounded-full flex items-center justify-center shadow-md transition z-20">
                                            ✕
                                        </button>
                                    </div>
                                    <div class="mt-3 flex items-center gap-2 text-xs text-stone-700 font-semibold bg-white px-3 py-1.5 rounded-lg border border-stone-200 shadow-xs">
                                        <span class="text-emerald-600 font-bold">✓</span>
                                        <span id="preview-filename" class="truncate max-w-xs">-</span>
                                        <span id="preview-filesize" class="text-stone-400 text-[10px] font-normal">-</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Submit Button Container -->
                        <div class="pt-6 border-t border-stone-100 text-center">
                            <button type="submit"
                                class="w-full sm:w-auto inline-flex items-center justify-center gap-2 bg-[#33736f] hover:bg-[#255855] text-white font-bold py-4 px-12 rounded-full text-sm uppercase tracking-wider transition-all duration-300 transform hover:-translate-y-0.5 shadow-[0_12px_28px_rgba(51,115,111,0.3)]">
                                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path>
                                </svg>
                                <span>Kirim Permintaan Booking</span>
                            </button>
                            <p class="text-xs text-stone-500 mt-4 max-w-md mx-auto leading-relaxed">
                                Jadwal Anda akan segera diperiksa oleh tim kami. Kami akan mengonfirmasi ketersediaan tanggal dan rincian sesi foto dalam 24 jam via WhatsApp.
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </section>

        <!-- Feedback Submission Section -->
        <section id="feedback-form" class="py-24 bg-[#F4F1EA] border-t border-stone-200/80">
            <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center max-w-xl mx-auto mb-12">
                    <span class="text-xs font-bold uppercase tracking-widest text-[#33736f]">Ulasan Pengalaman</span>
                    <h2 class="font-editorial text-3xl sm:text-4xl font-bold text-stone-900 mt-2 mb-3">
                        Bagikan Cerita Anda Bersama Kami
                    </h2>
                    <p class="text-stone-600 text-xs sm:text-sm leading-relaxed">
                        Pendapat dan kesan Anda sangat berarti bagi kami untuk terus menjaga standar kualitas terbaik.
                    </p>
                </div>

                <div class="bg-white rounded-3xl p-8 sm:p-10 border border-stone-200 shadow-sm">
                    @if (session('success_feedback'))
                        <div class="mb-6 rounded-2xl bg-emerald-50 border border-emerald-200 text-emerald-900 p-4 text-xs font-medium">
                            {{ session('success_feedback') }}
                        </div>
                    @endif

                    <form class="space-y-5" method="POST" action="{{ route('feedback.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                            <div>
                                <label class="block text-xs font-semibold text-stone-700 mb-1.5">Nama Anda <span class="text-rose-500">*</span></label>
                                <input name="name" value="{{ old('name') }}" required
                                    class="w-full px-4 py-3 bg-[#FAF8F5] border border-stone-200 rounded-xl text-sm focus:ring-2 focus:ring-[#33736f] focus:bg-white focus:outline-none transition"
                                    placeholder="Contoh: Rian &amp; Maya">
                            </div>
                            <div>
                                <label class="block text-xs font-semibold text-stone-700 mb-1.5">Email (Opsional)</label>
                                <input name="email" value="{{ old('email') }}" type="email"
                                    class="w-full px-4 py-3 bg-[#FAF8F5] border border-stone-200 rounded-xl text-sm focus:ring-2 focus:ring-[#33736f] focus:bg-white focus:outline-none transition"
                                    placeholder="nama@email.com">
                            </div>
                        </div>

                        <div>
                            <label class="block text-xs font-semibold text-stone-700 mb-1.5">Rating Kepuasan <span class="text-rose-500">*</span></label>
                            <select name="rating" required
                                class="w-full px-4 py-3 bg-[#FAF8F5] border border-stone-200 rounded-xl text-sm focus:ring-2 focus:ring-[#33736f] focus:bg-white focus:outline-none transition">
                                <option value="5" @selected(old('rating') === '5' || !old('rating'))>★★★★★ (5/5 Sangat Puas)</option>
                                <option value="4" @selected(old('rating') === '4')>★★★★☆ (4/5 Puas)</option>
                                <option value="3" @selected(old('rating') === '3')>★★★☆☆ (3/5 Cukup)</option>
                                <option value="2" @selected(old('rating') === '2')>★★☆☆☆ (2/5 Kurang)</option>
                                <option value="1" @selected(old('rating') === '1')>★☆☆☆☆ (1/5 Sangat Kurang)</option>
                            </select>
                        </div>

                        <div>
                            <label class="block text-xs font-semibold text-stone-700 mb-1.5">Kesan &amp; Cerita Anda <span class="text-rose-500">*</span></label>
                            <textarea name="message" rows="4" required
                                class="w-full px-4 py-3 bg-[#FAF8F5] border border-stone-200 rounded-xl text-sm focus:ring-2 focus:ring-[#33736f] focus:bg-white focus:outline-none transition"
                                placeholder="Bagikan bagaimana sesi foto bersama tim kami berlangsung...">{{ old('message') }}</textarea>
                        </div>

                        <div>
                            <label class="block text-xs font-semibold text-stone-700 mb-1.5">Foto Kenangan Sesi (Opsional)</label>
                            <input type="file" name="photo" accept="image/*" class="w-full text-xs text-stone-600 file:mr-4 file:py-2 file:px-4 file:rounded-xl file:border-0 file:text-xs file:font-semibold file:bg-[#e8f4f3] file:text-[#33736f] hover:file:bg-[#d8ecea]">
                            <p class="text-[11px] text-stone-400 mt-1">Format foto JPG, PNG max 5MB</p>
                        </div>

                        <div class="pt-2 text-center">
                            <button type="submit"
                                class="w-full sm:w-auto inline-flex items-center justify-center py-3.5 px-8 rounded-full bg-stone-900 hover:bg-stone-800 text-white text-xs font-bold uppercase tracking-wider transition">
                                Kirim Ulasan
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </main>

    <!-- Photo Lightbox Modal -->
    <div id="photo-lightbox" class="fixed inset-0 z-50 bg-stone-950/90 backdrop-blur-md hidden flex items-center justify-center p-4">
        <button type="button" onclick="closePhotoLightbox()" class="absolute top-6 right-6 text-white/70 hover:text-white p-2 text-2xl transition">
            ✕
        </button>
        <div class="max-w-4xl max-h-[85vh] flex flex-col items-center">
            <img id="lightbox-img" src="" alt="Preview Foto" class="max-h-[75vh] w-auto rounded-xl object-contain shadow-2xl">
            <div class="mt-4 text-center text-white">
                <span id="lightbox-cat" class="px-2.5 py-0.5 rounded-full bg-white/20 text-[10px] uppercase tracking-wider font-bold">-</span>
                <h4 id="lightbox-title" class="font-editorial text-lg font-bold mt-1">-</h4>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer id="contact" class="bg-stone-900 text-stone-300 py-16 border-t border-stone-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-10">
                <div class="col-span-1 md:col-span-2">
                    <img src="{{ asset('images/logo-easy-project.png') }}" alt="Easy Project" class="h-9 w-auto brightness-0 invert opacity-90 mb-4">
                    <p class="text-stone-400 text-xs sm:text-sm leading-relaxed max-w-sm mb-6">
                        Studio fotografi profesional berbasis di Lombok. Mengabadikan cinta, keluarga, dan pencapaian Anda dengan kehangatan visual yang tak lekang oleh zaman.
                    </p>
                    <div class="flex items-center gap-3 text-stone-400 text-xs">
                        <span>Lombok, Nusa Tenggara Barat, Indonesia</span>
                    </div>
                </div>

                <div>
                    <h4 class="text-xs uppercase tracking-widest font-bold text-white mb-4">Layanan Studio</h4>
                    <ul class="space-y-2.5 text-xs text-stone-400">
                        <li><a href="#services" class="hover:text-white transition">Prewedding Photography</a></li>
                        <li><a href="#services" class="hover:text-white transition">Wedding Documentation</a></li>
                        <li><a href="#services" class="hover:text-white transition">Portrait &amp; Wisuda</a></li>
                        <li><a href="#services" class="hover:text-white transition">Event &amp; Family</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="text-xs uppercase tracking-widest font-bold text-white mb-4">Hubungi Kami</h4>
                    <ul class="space-y-2.5 text-xs text-stone-400">
                        <li class="flex items-center gap-2">
                            <span>WhatsApp:</span>
                            <a href="https://wa.me/6281703376283" target="_blank" class="text-stone-200 hover:text-white">+62 817-0337-6283</a>
                        </li>
                        <li class="flex items-center gap-2">
                            <span>Email:</span>
                            <a href="mailto:easyproject@gmail.com" class="text-stone-200 hover:text-white">easyproject@gmail.com</a>
                        </li>
                        <li class="pt-2">
                            <span class="inline-block px-2.5 py-1 bg-stone-800 text-emerald-400 rounded-md text-[11px] font-mono">Buka Setiap Hari (09:00 - 20:00)</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="border-t border-stone-800 mt-12 pt-8 flex flex-col sm:flex-row items-center justify-between text-xs text-stone-500">
                <p>&copy; 2026 Easy Project Studio. All rights reserved.</p>
                <div class="flex gap-4 mt-4 sm:mt-0">
                    <a href="#home" class="hover:text-stone-300 transition">Kembali ke Atas ↑</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Interactive Client Scripts -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Mobile Menu Toggle
            const mobileMenuBtn = document.getElementById('mobileMenuBtn');
            const mobileMenu = document.getElementById('mobileMenu');
            if (mobileMenuBtn && mobileMenu) {
                mobileMenuBtn.addEventListener('click', () => {
                    mobileMenu.classList.toggle('hidden');
                });
            }

            // Portfolio Filter
            const filterBtns = document.querySelectorAll('.portfolio-filter-btn');
            const portfolioCards = document.querySelectorAll('.portfolio-card');

            filterBtns.forEach(btn => {
                btn.addEventListener('click', function() {
                    const filter = this.getAttribute('data-filter') || 'semua';

                    // Update button styling
                    filterBtns.forEach(b => {
                        b.classList.remove('bg-[#33736f]', 'text-white');
                        b.classList.add('bg-white', 'text-stone-600', 'border', 'border-stone-200');
                    });
                    this.classList.remove('bg-white', 'text-stone-600', 'border', 'border-stone-200');
                    this.classList.add('bg-[#33736f]', 'text-white');

                    // Filter cards
                    portfolioCards.forEach(card => {
                        const cardCat = (card.getAttribute('data-category') || '').toLowerCase();
                        if (filter === 'semua' || cardCat.includes(filter)) {
                            card.style.display = 'block';
                        } else {
                            card.style.display = 'none';
                        }
                    });
                });
            });

            // Service Type Selector & Auto Price Calculation
            const serviceSelect = document.getElementById('service-select');
            const priceCard = document.getElementById('service-price-card');
            const priceTitle = document.getElementById('price-card-title');
            const priceTotal = document.getElementById('price-card-total');
            const priceDp = document.getElementById('price-card-dp');
            const formAmount = document.getElementById('form-amount');

            function updateServiceDetails() {
                if (!serviceSelect) return;
                const opt = serviceSelect.options[serviceSelect.selectedIndex];
                if (!opt || !opt.value) {
                    if (priceCard) priceCard.classList.add('hidden');
                    if (formAmount) formAmount.value = '';
                    return;
                }

                const price = parseInt(opt.getAttribute('data-price') || '0', 10);
                const dp = parseInt(opt.getAttribute('data-dp') || '500000', 10);

                if (priceCard) priceCard.classList.remove('hidden');
                if (priceTitle) priceTitle.textContent = opt.value;

                if (price > 0) {
                    if (priceTotal) priceTotal.textContent = 'Rp ' + price.toLocaleString('id-ID');
                    if (priceDp) priceDp.textContent = 'Rp ' + dp.toLocaleString('id-ID');
                    if (formAmount) formAmount.value = price;
                } else {
                    if (priceTotal) priceTotal.textContent = 'Sesuai Kebutuhan';
                    if (priceDp) priceDp.textContent = 'Rp 500.000';
                    if (formAmount) formAmount.value = '';
                }
            }

            if (serviceSelect) {
                serviceSelect.addEventListener('change', updateServiceDetails);
                if (serviceSelect.value) updateServiceDetails();
            }

            // Payment Method Switcher
            const paymentCards = document.querySelectorAll('.payment-method-card');
            const bankBoxes = {
                'Transfer Bank BCA': 'info-bca',
                'Transfer Bank Mandiri': 'info-mandiri',
                'Transfer Bank BRI': 'info-bri',
                'QRIS': 'info-qris',
                'Bayar di Lokasi / Cash': 'info-cash'
            };
            const proofBadge = document.getElementById('proof-optional-badge');

            function switchPaymentMethod(methodName) {
                paymentCards.forEach(card => {
                    const input = card.querySelector('input[type="radio"]');
                    const dot = card.querySelector('.check-dot');
                    const radioCircle = card.querySelector('.radio-indicator');

                    if (input && input.value === methodName) {
                        input.checked = true;
                        card.classList.add('border-[#33736f]', 'bg-[#e8f4f3]/40');
                        card.classList.remove('border-stone-200', 'bg-[#FAF8F5]');
                        if (dot) dot.classList.remove('hidden');
                        if (radioCircle) radioCircle.classList.add('border-[#33736f]');
                    } else {
                        card.classList.remove('border-[#33736f]', 'bg-[#e8f4f3]/40');
                        card.classList.add('border-stone-200', 'bg-[#FAF8F5]');
                        if (dot) dot.classList.add('hidden');
                        if (radioCircle) radioCircle.classList.remove('border-[#33736f]');
                    }
                });

                document.querySelectorAll('.bank-detail-item').forEach(el => el.classList.add('hidden'));
                const activeBoxId = bankBoxes[methodName];
                if (activeBoxId) {
                    const activeBox = document.getElementById(activeBoxId);
                    if (activeBox) activeBox.classList.remove('hidden');
                }

                if (proofBadge) {
                    if (methodName === 'Bayar di Lokasi / Cash') {
                        proofBadge.textContent = 'Opsional (Bayar di Tempat)';
                        proofBadge.className = 'text-[11px] text-amber-700 font-semibold';
                    } else {
                        proofBadge.textContent = 'Dianjurkan unggah bukti transfer';
                        proofBadge.className = 'text-[11px] text-[#33736f] font-semibold';
                    }
                }
            }

            paymentCards.forEach(card => {
                card.addEventListener('click', function() {
                    const radio = this.querySelector('input[type="radio"]');
                    if (radio) switchPaymentMethod(radio.value);
                });
            });

            const initialRadio = document.querySelector('input[name="payment_method"]:checked');
            if (initialRadio) switchPaymentMethod(initialRadio.value);

            // File Upload & Preview Handler
            const fileInput = document.getElementById('payment_proof_input');
            const dropzone = document.getElementById('dropzone-box');
            const placeholder = document.getElementById('upload-placeholder');
            const previewContainer = document.getElementById('upload-preview');
            const previewImg = document.getElementById('preview-image');
            const previewFilename = document.getElementById('preview-filename');
            const previewFilesize = document.getElementById('preview-filesize');
            const removeBtn = document.getElementById('remove-file-btn');

            function displayUploadedFile(file) {
                if (!file) return;

                if (!file.type.startsWith('image/')) {
                    alert('Harap pilih file gambar (JPG, PNG, atau WEBP).');
                    return;
                }

                if (file.size > 5 * 1024 * 1024) {
                    alert('Ukuran file maksimal adalah 5MB.');
                    return;
                }

                const reader = new FileReader();
                reader.onload = function(e) {
                    if (previewImg) previewImg.src = e.target.result;
                    if (previewFilename) previewFilename.textContent = file.name;
                    if (previewFilesize) {
                        const sizeKb = (file.size / 1024).toFixed(1);
                        previewFilesize.textContent = sizeKb > 1000 ? (sizeKb / 1024).toFixed(2) + ' MB' : sizeKb + ' KB';
                    }
                    if (placeholder) placeholder.classList.add('hidden');
                    if (previewContainer) previewContainer.classList.remove('hidden');
                };
                reader.readAsDataURL(file);
            }

            if (fileInput) {
                fileInput.addEventListener('change', function() {
                    if (this.files && this.files[0]) {
                        displayUploadedFile(this.files[0]);
                    }
                });
            }

            if (removeBtn) {
                removeBtn.addEventListener('click', function(e) {
                    e.preventDefault();
                    e.stopPropagation();
                    if (fileInput) fileInput.value = '';
                    if (previewImg) previewImg.src = '';
                    if (previewContainer) previewContainer.classList.add('hidden');
                    if (placeholder) placeholder.classList.remove('hidden');
                });
            }

            // Drag and Drop
            if (dropzone) {
                ['dragenter', 'dragover'].forEach(name => {
                    dropzone.addEventListener(name, (e) => {
                        e.preventDefault();
                        e.stopPropagation();
                        dropzone.classList.add('border-[#33736f]', 'bg-[#e8f4f3]/40');
                    });
                });

                ['dragleave', 'drop'].forEach(name => {
                    dropzone.addEventListener(name, (e) => {
                        e.preventDefault();
                        e.stopPropagation();
                        dropzone.classList.remove('border-[#33736f]', 'bg-[#e8f4f3]/40');
                    });
                });

                dropzone.addEventListener('drop', (e) => {
                    const dt = e.dataTransfer;
                    if (dt.files && dt.files[0] && fileInput) {
                        fileInput.files = dt.files;
                        displayUploadedFile(dt.files[0]);
                    }
                });
            }
        });

        // Quick Select Service from Package Cards
        function selectServiceForBooking(serviceName) {
            const select = document.getElementById('service-select');
            if (select) {
                select.value = serviceName;
                select.dispatchEvent(new Event('change'));
            }
            const targetSection = document.getElementById('booking');
            if (targetSection) {
                targetSection.scrollIntoView({ behavior: 'smooth' });
            }
        }

        // 1-Click Copy with Visual Feedback
        function copyToClipboard(text, btn) {
            if (navigator.clipboard && window.isSecureContext) {
                navigator.clipboard.writeText(text).then(() => showCopiedFeedback(btn));
            } else {
                const textarea = document.createElement('textarea');
                textarea.value = text;
                textarea.style.position = 'fixed';
                textarea.style.left = '-999999px';
                document.body.appendChild(textarea);
                textarea.focus();
                textarea.select();
                try {
                    document.execCommand('copy');
                    showCopiedFeedback(btn);
                } catch (err) {
                    console.error('Gagal menyalin:', err);
                }
                document.body.removeChild(textarea);
            }
        }

        function showCopiedFeedback(btn) {
            const originalHTML = btn.innerHTML;
            btn.innerHTML = `<span class="text-emerald-700 font-bold">Tersalin! ✓</span>`;
            btn.classList.add('border-emerald-500', 'bg-emerald-50');
            setTimeout(() => {
                btn.innerHTML = originalHTML;
                btn.classList.remove('border-emerald-500', 'bg-emerald-50');
            }, 2000);
        }

        // Photo Lightbox
        function openPhotoLightbox(src, title, category) {
            const modal = document.getElementById('photo-lightbox');
            const img = document.getElementById('lightbox-img');
            const t = document.getElementById('lightbox-title');
            const c = document.getElementById('lightbox-cat');
            if (modal && img) {
                img.src = src;
                if (t) t.textContent = title;
                if (c) c.textContent = category;
                modal.classList.remove('hidden');
            }
        }

        function closePhotoLightbox() {
            const modal = document.getElementById('photo-lightbox');
            if (modal) modal.classList.add('hidden');
        }

        document.getElementById('photo-lightbox')?.addEventListener('click', function(e) {
            if (e.target === this) closePhotoLightbox();
        });

        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') closePhotoLightbox();
        });
    </script>
</body>
</html>
