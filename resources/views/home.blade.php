<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Easy Project - Karya Terbaik untuk Momen Terindah</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans bg-gray-50">
<div class="fixed z-50 bottom-6 right-6 flex flex-col items-end space-y-2">
    <a href="https://wa.me/6281703376283"
       target="_blank"
       aria-label="Chat di WhatsApp"
       class="flex items-center justify-center w-14 h-14 bg-green-500 hover:bg-green-600 text-white rounded-full  transition-all duration-300 transform hover:scale-110">
        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" class="w-7 h-7">
            <path
                d="M12 0C5.373 0 0 5.373 0 12c0 2.114.553 4.163 1.604 5.98L0 24l6.227-1.623A11.94 11.94 0 0012 24c6.627 0 12-5.373 12-12S18.627 0 12 0zm0 21.6a9.6 9.6 0 01-4.896-1.344l-.349-.209-3.734.974.996-3.637-.22-.365A9.565 9.565 0 1121.6 12a9.544 9.544 0 01-9.6 9.6zm5.04-7.344c-.276-.137-1.632-.804-1.884-.895-.252-.092-.436-.137-.62.137-.184.276-.712.895-.872 1.08-.16.184-.32.207-.596.069-.276-.138-1.164-.428-2.217-1.364-.82-.732-1.372-1.635-1.532-1.911-.16-.276-.017-.424.12-.562.124-.123.276-.32.414-.48.138-.16.184-.276.276-.46.092-.184.046-.345-.023-.483-.069-.138-.62-1.5-.852-2.052-.224-.536-.452-.464-.62-.472l-.528-.01c-.184 0-.483.069-.737.345-.253.276-.966.944-.966 2.3 0 1.356.99 2.667 1.128 2.851.138.184 1.948 2.978 4.723 4.175.661.285 1.178.455 1.58.583.664.211 1.268.182 1.747.111.532-.079 1.632-.668 1.863-1.311.23-.644.23-1.196.161-1.311-.069-.115-.252-.184-.528-.322z" />
        </svg>
    </a>
</div>
            
    <nav class="sticky top-0 z-50 backdrop-blur bg-white/70 border-b border-white/60">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <a href="#home" class="flex items-center gap-2">
                            {{-- <span class="inline-flex h-8 w-8 rounded-lg bg-gradient-to-br from-[#65bcb5] to-purple-600 shadow-lg"></span> --}}
                            {{-- <h1 class="text-xl md:text-2xl font-extrabold bg-gradient-to-r from-[#65bcb5] via-fuchsia-600 to-purple-700 bg-clip-text text-transparent">Studio Foto Cihuy</h1> --}}
                    <img src="{{ asset('images/logo-easy-project.png') }}" alt="Studio Foto Cihuy" class="w-60 h-30 ">
                        </a>
                    </div>
                </div>
                <div class="hidden md:block">
                    <div class="ml-10 flex items-center gap-2">
                        <a href="#portfolio" class="text-gray-700 hover:text-[#65bcb5] px-3 py-2 rounded-md text-sm font-medium transition-colors">Portfolio</a>
                        <a href="#services" class="text-gray-700 hover:text-[#65bcb5] px-3 py-2 rounded-md text-sm font-medium transition-colors">Layanan</a>
                        <a href="#about" class="text-gray-700 hover:text-[#65bcb5] px-3 py-2 rounded-md text-sm font-medium transition-colors">Tentang</a>
                        <a href="#feedback-form" class="text-gray-700 hover:text-[#65bcb5] px-3 py-2 rounded-md text-sm font-medium transition-colors">Feedback</a>
                        <a href="#contact" class="text-gray-700 hover:text-[#65bcb5] px-3 py-2 rounded-md text-sm font-medium transition-colors">Kontak</a>
                        <a href="#booking" class="ml-2 inline-flex items-center gap-2 bg-gradient-to-r bg-[#FF9013] hover:to-yellow-500 text-white font-semibold py-2 px-4 rounded-lg text-sm transition-all shadow-[0_8px_24px_rgba(251,191,36,0.45)]">
                            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3M3 11h18M5 21h14a2 2 0 002-2v-8H3v8a2 2 0 002 2z"/></svg>
                            Booking
                        </a>
                    </div>
                </div>
                <div class="md:hidden">
                    <button id="mobileMenuBtn" class="text-gray-700 hover:text-gray-900 focus:outline-none p-2 rounded-md focus:ring-2 focus:ring-[#65bcb5]">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>
            <div id="mobileMenu" class="md:hidden hidden pb-4">
                <div class="grid gap-2 border-t border-gray-200 pt-4">
                    <a href="#portfolio" class="px-3 py-2 rounded-md text-sm font-medium text-gray-700 hover:bg-pink-50 hover:text-[#65bcb5]">Portfolio</a>
                    <a href="#services" class="px-3 py-2 rounded-md text-sm font-medium text-gray-700 hover:bg-pink-50 hover:text-[#65bcb5]">Layanan</a>
                    <a href="#about" class="px-3 py-2 rounded-md text-sm font-medium text-gray-700 hover:bg-pink-50 hover:text-[#65bcb5]">Tentang</a>
                    <a href="#feedback-form" class="px-3 py-2 rounded-md text-sm font-medium text-gray-700 hover:bg-pink-50 hover:text-[#65bcb5]">Feedback</a>
                    <a href="#contact" class="px-3 py-2 rounded-md text-sm font-medium text-gray-700 hover:bg-pink-50 hover:text-[#65bcb5]">Kontak</a>
                    <a href="#booking" class="px-3 py-2 rounded-md text-sm font-semibold bg-gradient-to-r from-yellow-400 to-amber-400 text-gray-900">Booking</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section
    id="home"
        class="relative bg-gradient-to-br from-[#65bcb5] via-fuchsia-600 to-indigo-700 text-white overflow-hidden min-h-screen flex items-center justify-center"
    style="background-image: url('{{ asset('images/image.JPG') }}'); background-size: cover; background-position: center;">
    
    <!-- Overlay hitam transparan -->
    <div class="absolute inset-0 bg-black/40"></div>

    <!-- Konten utama -->
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
        <div class="text-center">
            <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white/10 ring-1 ring-white/20 mb-6">
                <span class="h-2 w-2 rounded-full bg-green-400 animate-pulse"></span>
                <span class="text-sm text-white/90">Slot booking tersedia minggu ini</span>
            </div>
            <h1 class="text-4xl md:text-6xl font-extrabold mb-16 leading-tight opacity-80">
                Abadikan Moment mu, <br/>Bersama
            Kami
            </h1>
            {{-- <p class="text-md md:text-2xl mb-8 text-pink-100 max-w-3xl mx-auto">
                Graduation, Prewedding, Wedding, Maternity, Brithday
            </p> --}}
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="#booking" class="bg-[#FF9013] hover:to-yellow-500 text-white font-semibold py-3 px-8 rounded-xl text-lg transition-all duration-300 transform hover:scale-105 inline-flex items-center gap-2">
                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3M3 11h18M5 21h14a2 2 0 002-2v-8H3v8a2 2 0 002 2z"/></svg>
                    Pesan Sekarang
                </a>
                <a href="#portfolio" class="bg-white/10 hover:bg-white/20 border border-white/30 text-white font-semibold py-3 px-8 rounded-xl text-lg transition-all duration-300 inline-flex items-center gap-2">
                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618V17a2 2 0 01-2 2H7l-4 2V7a2 2 0 012-2h9"/></svg>
                    Lihat Portfolio
                </a>
            </div>
            <div class="mt-10 grid grid-cols-3 gap-6 max-w-2xl mx-auto text-center">
                <div>
                    <div class="text-2xl font-extrabold">500+</div>
                    <div class="text-sm text-pink-100">Project</div>
                </div>
                <div>
                    <div class="text-2xl font-extrabold">5+</div>
                    <div class="text-sm text-pink-100">Tahun</div>
                </div>
                <div>
                    <div class="text-2xl font-extrabold">200+</div>
                    <div class="text-sm text-pink-100">Klien</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Elemen dekoratif -->
    <div class="absolute -top-10 -left-10 w-52 h-52 bg-white opacity-10 rounded-full blur-3xl"></div>
    <div class="absolute -bottom-10 -right-10 w-72 h-72 bg-yellow-300 opacity-20 rounded-full blur-3xl"></div>
    <div class="absolute top-1/3 left-1/4 w-24 h-24 bg-pink-300 opacity-20 rounded-full blur-2xl"></div>
</section>


    <!-- Feedback Section -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-14">
                <h2 class="text-3xl md:text-4xl font-bold tracking-tight text-gray-900 mb-4">Apa Kata Klien Kami</h2>
                <p class="text-lg text-gray-600">Lihat apa kata klien lain tentang layanan kami.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @forelse(($feedbacks ?? []) as $fb)
                <div class="bg-white rounded-2xl border border-gray-100 shadow-sm p-6">
                    <div class="flex items-center gap-3 mb-3">
                        @if($fb->photo_path)
                        <img src="{{ asset('storage/'.$fb->photo_path) }}" alt="{{ $fb->name }}" class="h-10 w-10 rounded-full object-cover">
                        @else
                        <span class="inline-flex h-10 w-10 rounded-full bg-pink-100"></span>
                        @endif
                        <div>
                            <div class="font-semibold text-gray-900">{{ $fb->name }}</div>
                            <div class="text-xs text-gray-500">@if($fb->rating) {{ str_repeat('★', (int) $fb->rating) }}@endif</div>
                        </div>
                    </div>
                    <p class="text-gray-600">{{ $fb->message }}</p>
                </div>
                @empty
                <div class="col-span-full text-center text-gray-500">Belum ada feedback yang ditampilkan.</div>
                @endforelse
            </div>
        </div>
    </section>

    <!-- Portfolio Section -->
    <section id="portfolio" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                    Portfolio Karya Kami
                </h2>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                    Lihat beberapa hasil karya fotografi terbaik kami yang telah mengabadikan momen-momen berharga
                </p>
            </div>
            
            <!-- Portfolio Filter -->
            <div class="flex flex-wrap justify-center gap-4 mb-12">
                <button class="px-6 py-2 bg-[#65bcb5] text-white rounded-full hover:bg-pink-700 transition-colors">Semua</button>
                <button class="px-6 py-2 bg-gray-200 text-gray-700 rounded-full hover:bg-gray-300 transition-colors">Prewedding</button>
                <button class="px-6 py-2 bg-gray-200 text-gray-700 rounded-full hover:bg-gray-300 transition-colors">Wedding</button>
                <button class="px-6 py-2 bg-gray-200 text-gray-700 rounded-full hover:bg-gray-300 transition-colors">Graduation</button>
                <button class="px-6 py-2 bg-gray-200 text-gray-700 rounded-full hover:bg-gray-300 transition-colors">Brithday</button>
            </div>
            
            <!-- Portfolio Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @forelse(($portfolios ?? []) as $item)
                <div class="group relative overflow-hidden rounded-2xl border border-gray-100 shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2" data-category="{{ strtolower($item->category) }}">
                    <div class="aspect-w-4 aspect-h-3 h-64 bg-gray-100 overflow-hidden">
                        <img src="{{ asset('storage/'.$item->image_path) }}" alt="{{ $item->title }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                    </div>
                    <div class="absolute inset-0 bg-black/0 group-hover:bg-black/50 transition-all duration-300 flex items-center justify-center">
                        <div class="text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300 text-center px-4">
                            <h3 class="text-xl font-semibold mb-2">{{ $item->title }}</h3>
                            <p class="text-sm">{{ $item->category }}</p>
                        </div>
                    </div>
                </div>
                @empty
                <div class="col-span-full text-center text-gray-500">Belum ada portfolio yang dipublikasikan.</div>
                @endforelse
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-20 bg-[#eaeaff]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-[#65bcb5]/10 text-[#65bcb5] text-sm font-medium mb-6">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                    Layanan Profesional
                </div>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                    Layanan Fotografi Kami
                </h2>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                    Berbagai paket layanan fotografi profesional untuk setiap kebutuhan dan momen spesial Anda
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Service 1 -->
                <div class="bg-white/80 backdrop-blur p-8 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 border border-gray-100">
                    <div class="w-16 h-16 bg-pink-100 rounded-full flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-[#65bcb5]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-4">Prewedding Photography</h3>
                    <p class="text-gray-600 mb-6">
                        Sesi foto romantis sebelum pernikahan dengan berbagai konsep dan lokasi menarik. 
                        Mengabadikan momen cinta Anda dengan gaya yang elegan dan natural.
                    </p>
                    <div class="text-2xl font-bold text-[#65bcb5] mb-2">Rp 2.500.000</div>
                    <div class="text-sm text-gray-500">Mulai dari</div>
                    <ul class="mt-4 space-y-2 text-sm text-gray-600">
                        <li class="flex items-center">
                            <svg class="w-4 h-4 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            2-3 jam sesi foto
                        </li>
                        <li class="flex items-center">
                            <svg class="w-4 h-4 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            50+ foto hasil edit
                        </li>
                        <li class="flex items-center">
                            <svg class="w-4 h-4 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Konsultasi konsep gratis
                        </li>
                    </ul>
                </div>

                <!-- Service 2 -->
                <div class="relative bg-white/90 backdrop-blur p-8 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 border-2 border-pink-200">
                    <div class="absolute -top-4 left-1/2 transform -translate-x-1/2">
                        <span class="bg-pink-600 text-white px-4 py-1 rounded-full text-sm font-semibold">Populer</span>
                    </div>
                    <div class="w-16 h-16 bg-rose-100 rounded-full flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-rose-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2-2v2m8 0V6a2 2 0 012 2v6a2 2 0 01-2 2H6a2 2 0 01-2-2V8a2 2 0 012-2V6"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-4">Wedding Photography</h3>
                    <p class="text-gray-600 mb-6">
                        Dokumentasi lengkap pernikahan dari persiapan hingga resepsi. 
                        Menangkap setiap momen berharga dengan detail dan emosi yang mendalam.
                    </p>
                    <div class="text-2xl font-bold text-rose-600 mb-2">Rp 5.000.000</div>
                    <div class="text-sm text-gray-500">Mulai dari</div>
                    <ul class="mt-4 space-y-2 text-sm text-gray-600">
                        <li class="flex items-center">
                            <svg class="w-4 h-4 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Full day coverage
                        </li>
                        <li class="flex items-center">
                            <svg class="w-4 h-4 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            200+ foto hasil edit
                        </li>
                        <li class="flex items-center">
                            <svg class="w-4 h-4 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Album foto fisik
                        </li>
                        <li class="flex items-center">
                            <svg class="w-4 h-4 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Video highlight
                        </li>
                    </ul>
                </div>

                <!-- Service 3 -->
                <div class="bg-white/80 backdrop-blur p-8 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 border border-gray-100">
                    <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-4">Portrait Photography</h3>
                    <p class="text-gray-600 mb-6">
                        Sesi foto portrait profesional untuk berbagai keperluan. 
                        Headshot, foto keluarga, atau foto personal dengan kualitas studio terbaik.
                    </p>
                    <div class="text-2xl font-bold text-purple-600 mb-2">Rp 1.500.000</div>
                    <div class="text-sm text-gray-500">Mulai dari</div>
                    <ul class="mt-4 space-y-2 text-sm text-gray-600">
                        <li class="flex items-center">
                            <svg class="w-4 h-4 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            1-2 jam sesi foto
                        </li>
                        <li class="flex items-center">
                            <svg class="w-4 h-4 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            30+ foto hasil edit
                        </li>
                        <li class="flex items-center">
                            <svg class="w-4 h-4 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Studio & outdoor
                        </li>
                    </ul>
                </div>

                <!-- Service 4 -->
                <div class="bg-white/80 backdrop-blur p-8 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 border border-gray-100">
                    <div class="w-16 h-16 bg-yellow-100 rounded-full flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-4">Event Photography</h3>
                    <p class="text-gray-600 mb-6">
                        Dokumentasi acara perusahaan, ulang tahun, atau event lainnya. 
                        Menangkap momen-momen penting dengan profesional dan detail.
                    </p>
                    <div class="text-2xl font-bold text-yellow-600 mb-2">Rp 2.000.000</div>
                    <div class="text-sm text-gray-500">Mulai dari</div>
                    <ul class="mt-4 space-y-2 text-sm text-gray-600">
                        <li class="flex items-center">
                            <svg class="w-4 h-4 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            3-4 jam coverage
                        </li>
                        <li class="flex items-center">
                            <svg class="w-4 h-4 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            100+ foto hasil edit
                        </li>
                        <li class="flex items-center">
                            <svg class="w-4 h-4 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Delivery cepat
                        </li>
                    </ul>
                </div>

                <!-- Service 5 -->
                <div class="bg-white/80 backdrop-blur p-8 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 border border-gray-100">
                    <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-4">Family Photography</h3>
                    <p class="text-gray-600 mb-6">
                        Sesi foto keluarga yang hangat dan natural. 
                        Mengabadikan kebahagiaan dan keharmonisan keluarga Anda.
                    </p>
                    <div class="text-2xl font-bold text-green-600 mb-2">Rp 1.800.000</div>
                    <div class="text-sm text-gray-500">Mulai dari</div>
                    <ul class="mt-4 space-y-2 text-sm text-gray-600">
                        <li class="flex items-center">
                            <svg class="w-4 h-4 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            2 jam sesi foto
                        </li>
                        <li class="flex items-center">
                            <svg class="w-4 h-4 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            40+ foto hasil edit
                        </li>
                        <li class="flex items-center">
                            <svg class="w-4 h-4 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Maksimal 6 orang
                        </li>
                    </ul>
                </div>

                <!-- Service 6 -->
                <div class="bg-white/80 backdrop-blur p-8 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 border border-gray-100">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 4V2a1 1 0 011-1h8a1 1 0 011 1v2m-9 0h10m-10 0a2 2 0 00-2 2v14a2 2 0 002 2h10a2 2 0 002-2V6a2 2 0 00-2-2M9 12h6m-6 4h6"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-4">Custom Package</h3>
                    <p class="text-gray-600 mb-6">
                        Paket khusus sesuai kebutuhan Anda. 
                        Konsultasikan kebutuhan fotografi Anda dan dapatkan solusi terbaik.
                    </p>
                    <div class="text-2xl font-bold text-blue-600 mb-2">Custom</div>
                    <div class="text-sm text-gray-500">Harga sesuai kebutuhan</div>
                    <ul class="mt-4 space-y-2 text-sm text-gray-600">
                        <li class="flex items-center">
                            <svg class="w-4 h-4 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Konsultasi gratis
                        </li>
                        <li class="flex items-center">
                            <svg class="w-4 h-4 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Fleksibel
                        </li>
                        <li class="flex items-center">
                            <svg class="w-4 h-4 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Sesuai budget
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">
                        Mengapa Memilih Studio Foto Cihuy?
                    </h2>
                    <p class="text-lg text-gray-600 mb-8">
                        Studio Foto Cihuy telah dipercaya oleh ratusan pasangan dan keluarga untuk mengabadikan momen-momen berharga mereka. 
                        Dengan pengalaman lebih dari 5 tahun dan tim fotografer profesional, kami berkomitmen memberikan hasil terbaik untuk setiap sesi foto.
                    </p>
                    <div class="space-y-4">
                        <div class="flex items-center">
                            <div class="w-6 h-6 bg-[#65bcb5] rounded-full flex items-center justify-center mr-3">
                                <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <span class="text-gray-700">Fotografer berpengalaman dan profesional</span>
                        </div>
                        <div class="flex items-center">
                            <div class="w-6 h-6 bg-[#65bcb5] rounded-full flex items-center justify-center mr-3">
                                <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <span class="text-gray-700">Peralatan fotografi terbaru dan berkualitas tinggi</span>
                        </div>
                        <div class="flex items-center">
                            <div class="w-6 h-6 bg-[#65bcb5] rounded-full flex items-center justify-center mr-3">
                                <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <span class="text-gray-700">Editing foto profesional dan konsultasi gratis</span>
                        </div>
                        <div class="flex items-center">
                            <div class="w-6 h-6 bg-[#65bcb5] rounded-full flex items-center justify-center mr-3">
                                <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <span class="text-gray-700">Harga terjangkau dengan kualitas premium</span>
                        </div>
                    </div>
                </div>
                <div class="relative">
                    <div class="bg-gradient-to-br from-[#65bcb5] to-purple-600 rounded-2xl p-8 text-white">
                        <div class="text-center">
                            <div class="text-4xl font-bold mb-2">500+</div>
                            <div class="text-pink-100 mb-6">Sesi Foto Berhasil</div>
                            <div class="text-4xl font-bold mb-2">200+</div>
                            <div class="text-pink-100 mb-6">Pasangan Bahagia</div>
                            <div class="text-4xl font-bold mb-2">5+</div>
                            <div class="text-pink-100">Tahun Pengalaman</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Booking Form Section -->
    <section id="booking" class="py-20 bg-[#eaeaff]">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-[#65bcb5]/10 text-[#65bcb5] text-sm font-medium mb-6">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                    Booking Sekarang
                </div>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                    Pesan Layanan Fotografi
                </h2>
                <p class="text-xl text-gray-600">
                    Konsultasikan kebutuhan fotografi Anda dan dapatkan penawaran terbaik
                </p>
            </div>
            
            <div class="bg-white rounded-2xl shadow-xl p-8 border border-gray-100">
                @if (session('success'))
                <div class="mb-6 rounded-lg bg-green-50 border border-green-200 text-green-800 px-4 py-3">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="font-semibold">{{ session('success') }}</p>
                            @if (session('booking_id'))
                                {{-- <p class="text-sm mt-1">ID Booking: #{{ session('booking_id') }}</p> --}}
                            @endif
                        </div>
                        <div class="flex-shrink-0">
                            <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                        </div>
                    </div>
                    
                    @if (session('show_whatsapp_buttons'))
                    <div class="mt-4 flex flex-col sm:flex-row gap-3">
                        <a href="{{ session('admin_whatsapp_url') }}" 
                           target="_blank"
                           class="inline-flex items-center justify-center px-4 py-2 bg-green-600 hover:bg-green-700 text-white font-semibold rounded-lg transition-all duration-300 transform hover:scale-105 shadow-lg">
                            <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.885 3.488"/>
                            </svg>
                            Kirim ke Admin
                        </a>
                        {{-- <a href="{{ session('customer_whatsapp_url') }}" 
                           target="_blank"
                           class="inline-flex items-center justify-center px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white font-semibold rounded-lg transition-all duration-300 transform hover:scale-105 shadow-lg">
                            <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.885 3.488"/>
                            </svg>
                            Konfirmasi ke Customer
                        </a> --}}
                    </div>
                    @endif
                </div>
                @endif
                @if ($errors->any())
                <div class="mb-6 rounded-lg bg-red-50 border border-red-200 text-red-800 px-4 py-3">
                    <ul class="list-disc list-inside space-y-1">
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form class="space-y-6" method="POST" action="{{ route('bookings.store') }}">
                    @csrf
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Nama Lengkap</label>
                            <input name="full_name" value="{{ old('full_name') }}" type="text" class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:ring-2 focus:ring-[#65bcb5] focus:border-transparent placeholder-gray-400" placeholder="Masukkan nama lengkap" required>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Nomor Telepon</label>
                            <input name="phone" value="{{ old('phone') }}" type="tel" class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:ring-2 focus:ring-[#65bcb5] focus:border-transparent placeholder-gray-400" placeholder="08xxxxxxxxxx" required>
                        </div>
                    </div>
                    
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Email</label>
                        <input name="email" value="{{ old('email') }}" type="email" class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:ring-2 focus:ring-[#65bcb5] focus:border-transparent placeholder-gray-400" placeholder="email@example.com" required>
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Jenis Layanan</label>
                            <select name="service_type" class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:ring-2 focus:ring-[#65bcb5] focus:border-transparent" required>
                                <option value="">Pilih layanan</option>
                                <option value="Prewedding Photography" @selected(old('service_type')==='Prewedding Photography')>Prewedding Photography</option>
                                <option value="Wedding Photography" @selected(old('service_type')==='Wedding Photography')>Wedding Photography</option>
                                <option value="Portrait Photography" @selected(old('service_type')==='Portrait Photography')>Portrait Photography</option>
                                <option value="Event Photography" @selected(old('service_type')==='Event Photography')>Event Photography</option>
                                <option value="Family Photography" @selected(old('service_type')==='Family Photography')>Family Photography</option>
                                <option value="Custom Package" @selected(old('service_type')==='Custom Package')>Custom Package</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Tanggal Acara</label>
                            <input name="event_date" value="{{ old('event_date') }}" type="date" class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:ring-2 focus:ring-[#65bcb5] focus:border-transparent">
                        </div>
                    </div>
                    
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Lokasi Acara</label>
                        <input name="location" value="{{ old('location') }}" type="text" class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:ring-2 focus:ring-[#65bcb5] focus:border-transparent placeholder-gray-400" placeholder="Masukkan alamat lokasi acara">
                    </div>
                    
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Detail Kebutuhan</label>
                        <textarea name="details" rows="4" class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:ring-2 focus:ring-[#65bcb5] focus:border-transparent placeholder-gray-400" placeholder="Ceritakan detail kebutuhan fotografi Anda, konsep yang diinginkan, atau pertanyaan lainnya...">{{ old('details') }}</textarea>
                    </div>
                    
                    <div class="text-center">
                        <button type="submit" class="bg-[#65bcb5] hover:bg-pink-700 text-white font-semibold py-4 px-12 rounded-lg text-lg transition-all duration-300 transform hover:scale-105 shadow-lg">
                            Kirim Permintaan
                        </button>
                        <p class="text-sm text-gray-500 mt-4">
                            Tim kami akan menghubungi Anda dalam 24 jam untuk konfirmasi dan konsultasi lebih lanjut
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- Feedback Form Section -->
    <section id="feedback-form" class="py-20 bg-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-[#65bcb5]/10 text-[#65bcb5] text-sm font-medium mb-6">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                    Berikan Feedback mu
                </div>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                    Bagikan Pengalaman Anda
                </h2>
                <p class="text-xl text-gray-600">
                    Ceritakan pengalaman Anda menggunakan layanan kami dan bantu calon klien lainnya
                </p>
            </div>
            
            <div class="bg-gray-50 border border-gray-100 rounded-2xl p-8">
                @if (session('success_feedback'))
                <div class="mb-6 rounded-lg bg-green-50 border border-green-200 text-green-800 px-4 py-3">
                    {{ session('success_feedback') }}
                </div>
                @endif
                @if ($errors->any())
                <div class="mb-6 rounded-lg bg-red-50 border border-red-200 text-red-800 px-4 py-3">
                    <ul class="list-disc list-inside space-y-1">
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form class="space-y-6" method="POST" action="{{ route('feedback.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Nama</label>
                            <input name="name" value="{{ old('name') }}" required class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:ring-2 focus:ring-[#65bcb5] focus:border-transparent placeholder-gray-400" placeholder="Nama Anda">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Email (opsional)</label>
                            <input name="email" value="{{ old('email') }}" type="email" class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:ring-2 focus:ring-[#65bcb5] focus:border-transparent placeholder-gray-400" placeholder="email@example.com">
                        </div>
                    </div>
                    
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Rating</label>
                        <select name="rating" required class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:ring-2 focus:ring-[#65bcb5] focus:border-transparent">
                            <option value="">Pilih rating</option>
                            <option value="5" @selected(old('rating')==='5')>★★★★★</option>
                            <option value="4" @selected(old('rating')==='4')>★★★★</option>
                            <option value="3" @selected(old('rating')==='3')>★★★</option>
                            <option value="2" @selected(old('rating')==='2')>★★</option>
                            <option value="1" @selected(old('rating')==='1')>★</option>
                        </select>
                    </div>
                    
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Pesan</label>
                        <textarea name="message" rows="4" required class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:ring-2 focus:ring-[#65bcb5] focus:border-transparent placeholder-gray-400" placeholder="Tulis pengalaman Anda menggunakan layanan kami...">{{ old('message') }}</textarea>
                    </div>
                    
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Foto (opsional)</label>
                        <input type="file" name="photo" accept="image/*" class="w-full text-sm text-gray-600">
                        <p class="text-xs text-gray-500 mt-1">Upload foto dari sesi fotografi Anda (maksimal 5MB)</p>
                    </div>
                    
                    <div class="text-center">
                        <button type="submit" class="bg-[#65bcb5] hover:bg-pink-700 text-white font-semibold py-4 px-12 rounded-lg text-lg transition-all duration-300 transform hover:scale-105 shadow-lg">
                            Kirim Feedback
                        </button>
                        <p class="text-sm text-gray-500 mt-4">
                            Feedback Anda akan direview admin sebelum ditampilkan di halaman utama
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-gradient-to-r from-[#65bcb5] to-purple-600 text-white">
        <div class="max-w-4xl mx-auto text-center px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl md:text-4xl font-bold mb-6">
                Siap Mengabadikan Momen Berharga Anda?
            </h2>
            <p class="text-xl mb-8 text-pink-100">
                Hubungi kami sekarang untuk konsultasi gratis dan dapatkan penawaran terbaik untuk sesi foto Anda...
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="#booking" class="bg-yellow-400 hover:bg-yellow-500 text-gray-900 font-semibold py-4 px-10 rounded-lg text-lg transition-all duration-300 transform hover:scale-105 shadow-lg inline-block">Hubungi Sekarang</a>
                <a href="#portfolio" class="border-2 border-white hover:bg-white hover:text-[#65bcb5] text-white font-semibold py-4 px-10 rounded-lg text-lg transition-all duration-300 inline-block">Lihat Portfolio</a>
                <a href="#feedback-form" class="border-2 border-white hover:bg-white hover:text-[#65bcb5] text-white font-semibold py-4 px-10 rounded-lg text-lg transition-all duration-300 inline-block">Berikan Feedback</a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer id="contact" class="bg-gray-900 text-white py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div class="col-span-1 md:col-span-2">
                    <img class="text-2xl font-bold mb-4">Studio Foto Cihuy</img>
                    <p class="text-gray-400 mb-4">
                        Studio fotografi profesional yang mengabadikan momen-momen berharga Anda dengan kualitas terbaik. 
                        Dari prewedding hingga event photography dengan hasil yang memukau.
                    </p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-white transition-colors">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
                            </svg>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition-colors">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M22.46 6c-.77.35-1.6.58-2.46.69.88-.53 1.56-1.37 1.88-2.38-.83.5-1.75.85-2.72 1.05C18.37 4.5 17.26 4 16 4c-2.35 0-4.27 1.92-4.27 4.29 0 .34.04.67.11.98C8.28 9.09 5.11 7.38 3 4.79c-.37.63-.58 1.37-.58 2.15 0 1.49.75 2.81 1.91 3.56-.71 0-1.37-.2-1.95-.5v.03c0 2.08 1.48 3.82 3.44 4.21a4.22 4.22 0 0 1-1.93.07 4.28 4.28 0 0 0 4 2.98 8.521 8.521 0 0 1-5.33 1.84c-.34 0-.68-.02-1.02-.06C3.44 20.29 5.7 21 8.12 21 16 21 20.33 14.46 20.33 8.79c0-.19 0-.37-.01-.56.84-.6 1.56-1.36 2.14-2.23z"/>
                            </svg>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition-colors">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                            </svg>
                        </a>
                    </div>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4">Layanan</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="#services" class="hover:text-white transition-colors">Prewedding</a></li>
                        <li><a href="#services" class="hover:text-white transition-colors">Wedding</a></li>
                        <li><a href="#services" class="hover:text-white transition-colors">Portrait</a></li>
                        <li><a href="#services" class="hover:text-white transition-colors">Event</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4">Kontak</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li class="flex items-center">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                            </svg>
                            0812-3456-7890
                        </li>
                        <li class="flex items-center">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                            info@studiofotocihuy.com
                        </li>
                        <li class="flex items-center">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                            Jakarta, Indonesia
                        </li>
                    </ul>
                </div>
            </div>
            <div class="border-t border-gray-800 mt-8 pt-8 text-center text-gray-400">
                <p>&copy; 2024 Studio Foto Cihuy. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Add scroll effect to navigation
        window.addEventListener('scroll', function() {
            const nav = document.querySelector('nav');
            if (window.scrollY > 100) {
                nav.classList.add('backdrop-blur-md', 'bg-white/90');
            } else {
                nav.classList.remove('backdrop-blur-md', 'bg-white/90');
            }
        });

        // Portfolio filter functionality (uses data-category)
        const filterButtons = document.querySelectorAll('#portfolio button');
        const portfolioItems = document.querySelectorAll('#portfolio .group');

        filterButtons.forEach(button => {
            button.addEventListener('click', function() {
                // Remove active class from all buttons
                filterButtons.forEach(btn => {
                    btn.classList.remove('bg-[#65bcb5]', 'text-white');
                    btn.classList.add('bg-gray-200', 'text-gray-700');
                });
                
                // Add active class to clicked button
                this.classList.remove('bg-gray-200', 'text-gray-700');
                this.classList.add('bg-[#65bcb5]', 'text-white');
                
                const filter = this.textContent.toLowerCase();
                
                portfolioItems.forEach(item => {
                    const cat = item.getAttribute('data-category') || '';
                    if (filter === 'semua' || cat.includes(filter)) {
                        item.style.display = 'block';
                    } else {
                        item.style.display = 'none';
                    }
                });
            });
        });

        // Mobile menu toggle
        const mobileMenuBtn = document.getElementById('mobileMenuBtn');
        const mobileMenu = document.getElementById('mobileMenu');
        if (mobileMenuBtn && mobileMenu) {
            mobileMenuBtn.addEventListener('click', () => {
                mobileMenu.classList.toggle('hidden');
            });
        }
    </script>
</body>
</html>