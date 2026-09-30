<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Admin - Kelola Booking & Pembayaran</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-gray-100 text-gray-800">
    <div class="min-h-screen flex flex-col">
        <!-- Header -->
        <header class="bg-white shadow-sm border-b sticky top-0 z-30">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between items-center py-4">
                    <div class="flex items-center space-x-3">
                        <div class="w-10 h-10 rounded-xl bg-[#65bcb5] flex items-center justify-center text-white shadow-md">
                            <i class="fas fa-camera text-lg"></i>
                        </div>
                        <div>
                            <h1 class="text-xl font-bold text-gray-900 leading-tight">Admin Studio Foto</h1>
                            <p class="text-xs text-gray-500">Kelola Booking, Pembayaran & Approval</p>
                        </div>
                    </div>
                    <div class="flex items-center space-x-3">
                        <a href="/admin" class="inline-flex items-center px-3.5 py-2 border border-gray-300 rounded-lg text-xs font-semibold text-gray-700 bg-white hover:bg-gray-50 transition shadow-sm">
                            <i class="fas fa-tachometer-alt mr-2 text-indigo-500"></i> Dashboard Filament
                        </a>
                        <a href="/" target="_blank" class="inline-flex items-center px-3.5 py-2 bg-[#65bcb5] hover:bg-[#52a6a0] rounded-lg text-xs font-semibold text-white transition shadow-sm">
                            <i class="fas fa-external-link-alt mr-2"></i> Kunjungi Website
                        </a>
                    </div>
                </div>
            </div>
        </header>

        <!-- Main Content -->
        <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 flex-1 w-full">
            <!-- Stats Cards -->
            <!-- Rekap Pembayaran 1 & 2 Bulan -->
            <div class="mb-6">
                <div class="flex items-center justify-between mb-3">
                    <div>
                        <h2 class="text-base font-bold text-gray-900">Rekap Pembayaran Studio</h2>
                        <p class="text-xs text-gray-500">Ringkasan transaksi lunas dan omset 1 sampai 2 bulan terakhir</p>
                    </div>
                    <span class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-semibold bg-emerald-100 text-emerald-800">
                        <i class="fas fa-chart-pie mr-1"></i> Live Rekap
                    </span>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    <!-- Bulan Ini -->
                    <div class="bg-gradient-to-br from-emerald-500 to-teal-700 rounded-2xl p-5 text-white shadow-sm hover:shadow-md transition">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-xs uppercase tracking-wider text-emerald-100 font-semibold">Omset Bulan Ini</p>
                                <h3 class="text-2xl font-black mt-1" id="revenue-this-month">Rp 0</h3>
                                <p class="text-xs text-emerald-100 mt-1" id="paid-count-this-month">0 booking lunas</p>
                            </div>
                            <div class="w-12 h-12 bg-white/20 rounded-xl flex items-center justify-center text-white text-xl backdrop-blur-xs">
                                <i class="fas fa-wallet"></i>
                            </div>
                        </div>
                    </div>

                    <!-- Bulan Lalu -->
                    <div class="bg-gradient-to-br from-indigo-500 to-blue-700 rounded-2xl p-5 text-white shadow-sm hover:shadow-md transition">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-xs uppercase tracking-wider text-indigo-100 font-semibold">Omset Bulan Lalu</p>
                                <h3 class="text-2xl font-black mt-1" id="revenue-last-month">Rp 0</h3>
                                <p class="text-xs text-indigo-100 mt-1" id="paid-count-last-month">0 booking lunas</p>
                            </div>
                            <div class="w-12 h-12 bg-white/20 rounded-xl flex items-center justify-center text-white text-xl backdrop-blur-xs">
                                <i class="fas fa-calendar-alt"></i>
                            </div>
                        </div>
                    </div>

                    <!-- Akumulasi 2 Bulan -->
                    <div class="bg-gradient-to-br from-amber-500 to-orange-600 rounded-2xl p-5 text-white shadow-sm hover:shadow-md transition">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-xs uppercase tracking-wider text-amber-100 font-semibold">Rekap 2 Bulan Terakhir</p>
                                <h3 class="text-2xl font-black mt-1" id="revenue-two-months">Rp 0</h3>
                                <p class="text-xs text-amber-100 mt-1" id="paid-count-two-months">Akumulasi 60 hari</p>
                            </div>
                            <div class="w-12 h-12 bg-white/20 rounded-xl flex items-center justify-center text-white text-xl backdrop-blur-xs">
                                <i class="fas fa-coins"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Stats Cards Status Booking -->
            <div class="grid grid-cols-2 md:grid-cols-5 gap-3 md:gap-4 mb-8">
                <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-4 hover:shadow-md transition">
                    <div class="flex items-center">
                        <div class="w-10 h-10 bg-amber-100 rounded-xl flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-clock text-amber-600"></i>
                        </div>
                        <div class="ml-3 truncate">
                            <p class="text-[11px] font-medium text-gray-500 uppercase tracking-wider">Pending</p>
                            <p class="text-xl font-black text-gray-900 mt-0.5" id="pending-count">0</p>
                        </div>
                    </div>
                </div>
                
                <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-4 hover:shadow-md transition">
                    <div class="flex items-center">
                        <div class="w-10 h-10 bg-emerald-100 rounded-xl flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-check-circle text-emerald-600"></i>
                        </div>
                        <div class="ml-3 truncate">
                            <p class="text-[11px] font-medium text-gray-500 uppercase tracking-wider">Approved</p>
                            <p class="text-xl font-black text-gray-900 mt-0.5" id="approved-count">0</p>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-4 hover:shadow-md transition">
                    <div class="flex items-center">
                        <div class="w-10 h-10 bg-purple-100 rounded-xl flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-ban text-purple-600"></i>
                        </div>
                        <div class="ml-3 truncate">
                            <p class="text-[11px] font-medium text-gray-500 uppercase tracking-wider">Dibatalkan</p>
                            <p class="text-xl font-black text-gray-900 mt-0.5" id="cancelled-count">0</p>
                        </div>
                    </div>
                </div>
                
                <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-4 hover:shadow-md transition">
                    <div class="flex items-center">
                        <div class="w-10 h-10 bg-rose-100 rounded-xl flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-times-circle text-rose-600"></i>
                        </div>
                        <div class="ml-3 truncate">
                            <p class="text-[11px] font-medium text-gray-500 uppercase tracking-wider">Rejected</p>
                            <p class="text-xl font-black text-gray-900 mt-0.5" id="rejected-count">0</p>
                        </div>
                    </div>
                </div>
                
                <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-4 hover:shadow-md transition">
                    <div class="flex items-center">
                        <div class="w-10 h-10 bg-blue-100 rounded-xl flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-calendar-check text-blue-600"></i>
                        </div>
                        <div class="ml-3 truncate">
                            <p class="text-[11px] font-medium text-gray-500 uppercase tracking-wider">Total</p>
                            <p class="text-xl font-black text-gray-900 mt-0.5" id="total-count">0</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bookings Table Section -->
            <div class="bg-white shadow-sm rounded-2xl border border-gray-100 overflow-hidden">
                <!-- Table Filters and Header -->
                <div class="p-5 border-b border-gray-100 bg-white flex flex-col md:flex-row md:items-center justify-between gap-4">
                    <div>
                        <h2 class="text-lg font-bold text-gray-900">Daftar Booking Masuk</h2>
                        <p class="text-xs text-gray-500">Monitor status booking, konfirmasi WhatsApp ke klien, dan kelola pembatalan</p>
                    </div>

                    <div class="flex flex-wrap items-center gap-3">
                        <!-- Search Box -->
                        <div class="relative">
                            <span class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none text-gray-400">
                                <i class="fas fa-search text-xs"></i>
                            </span>
                            <input type="text" id="search-input" placeholder="Cari nama, hp, layanan..." 
                                class="pl-9 pr-4 py-2 border border-gray-200 rounded-xl text-xs focus:ring-2 focus:ring-[#65bcb5] focus:outline-none w-44 sm:w-56">
                        </div>

                        <!-- Periode Rekap Filter -->
                        <select id="period-filter" class="py-2 px-3 border border-gray-200 rounded-xl text-xs focus:ring-2 focus:ring-[#65bcb5] focus:outline-none bg-white font-medium text-gray-700">
                            <option value="all">Semua Waktu</option>
                            <option value="this_month">Bulan Ini</option>
                            <option value="last_month">Bulan Lalu (1 Bulan Terakhir)</option>
                            <option value="two_months">Rekap 2 Bulan Terakhir</option>
                        </select>

                        <!-- Status Filter -->
                        <select id="status-filter" class="py-2 px-3 border border-gray-200 rounded-xl text-xs focus:ring-2 focus:ring-[#65bcb5] focus:outline-none bg-white">
                            <option value="all">Semua Status</option>
                            <option value="pending">Pending</option>
                            <option value="approved">Approved</option>
                            <option value="cancelled">Dibatalkan</option>
                            <option value="rejected">Rejected</option>
                        </select>

                        <!-- Refresh Button -->
                        <button onclick="loadBookings()" class="p-2 border border-gray-200 rounded-xl text-gray-600 hover:text-gray-900 hover:bg-gray-50 transition" title="Refresh Data">
                            <i class="fas fa-sync-alt text-xs"></i>
                        </button>
                    </div>
                </div>
                
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50/70">
                            <tr>
                                <th class="px-5 py-3.5 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">ID</th>
                                <th class="px-5 py-3.5 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">Customer</th>
                                <th class="px-5 py-3.5 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">Layanan</th>
                                <th class="px-5 py-3.5 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">Tgl Acara</th>
                                <th class="px-5 py-3.5 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">Pembayaran & Bukti</th>
                                <th class="px-5 py-3.5 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">Status</th>
                                <th class="px-5 py-3.5 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">Waktu Masuk</th>
                                <th class="px-5 py-3.5 text-center text-xs font-semibold text-gray-500 uppercase tracking-wider">Aksi</th>
                            </tr>
                        </thead>
                        <tbody id="bookings-table" class="bg-white divide-y divide-gray-100">
                            <tr>
                                <td colspan="8" class="text-center py-12 text-sm text-gray-400">
                                    <i class="fas fa-spinner fa-spin text-xl mb-2 text-[#65bcb5]"></i>
                                    <p>Memuat data booking...</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div id="empty-state" class="hidden text-center py-12">
                    <div class="w-16 h-16 bg-gray-100 rounded-full flex items-center justify-center mx-auto text-gray-400 mb-3">
                        <i class="fas fa-inbox text-2xl"></i>
                    </div>
                    <p class="text-sm font-semibold text-gray-700">Tidak ada data booking yang sesuai</p>
                    <p class="text-xs text-gray-400 mt-1">Coba ubah kata kunci pencarian atau filter status</p>
                </div>
            </div>
        </main>
    </div>

    <!-- Bukti Pembayaran Modal -->
    <div id="proof-modal" class="fixed inset-0 bg-gray-900/60 backdrop-blur-sm hidden z-50 flex items-center justify-center p-4">
        <div class="bg-white rounded-2xl shadow-2xl max-w-lg w-full overflow-hidden transform transition-all">
            <div class="px-6 py-4 border-b border-gray-100 flex items-center justify-between bg-gray-50/70">
                <div class="flex items-center gap-2">
                    <i class="fas fa-receipt text-[#65bcb5]"></i>
                    <h3 class="text-base font-bold text-gray-900">Bukti Pembayaran</h3>
                </div>
                <button type="button" onclick="closeModals()" class="text-gray-400 hover:text-gray-600 rounded-lg p-1.5 transition">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <div class="p-6">
                <!-- Info Customer & Pembayaran -->
                <div class="bg-teal-50/60 rounded-xl p-3.5 mb-4 border border-teal-100 text-xs text-teal-950 flex justify-between items-center">
                    <div>
                        <p class="font-bold" id="proof-modal-customer">-</p>
                        <p class="text-teal-700 mt-0.5" id="proof-modal-service">-</p>
                    </div>
                    <div class="text-right">
                        <span class="px-2 py-0.5 rounded text-[11px] font-bold bg-white text-teal-900 shadow-sm" id="proof-modal-method">-</span>
                        <p class="font-mono font-bold mt-1 text-sm text-[#65bcb5]" id="proof-modal-amount">-</p>
                    </div>
                </div>

                <!-- Gambar Bukti -->
                <div class="rounded-xl border border-gray-200 overflow-hidden bg-gray-100 flex items-center justify-center max-h-96">
                    <img id="proof-modal-img" src="" alt="Bukti Transfer" class="max-h-96 w-auto object-contain mx-auto">
                </div>
            </div>
            <div class="px-6 py-4 bg-gray-50 border-t border-gray-100 flex justify-between items-center">
                <a id="proof-modal-download" href="#" target="_blank" class="inline-flex items-center text-xs font-semibold text-blue-600 hover:text-blue-800">
                    <i class="fas fa-external-link-alt mr-1.5"></i> Buka Gambar Penuh
                </a>
                <button type="button" onclick="closeModals()" class="px-4 py-2 text-xs font-semibold text-gray-700 bg-white border border-gray-300 rounded-xl hover:bg-gray-50 transition shadow-sm">
                    Tutup
                </button>
            </div>
        </div>
    </div>

    <!-- Approval Modal -->
    <div id="approval-modal" class="fixed inset-0 bg-gray-900/60 backdrop-blur-sm hidden z-50 flex items-center justify-center p-4">
        <div class="bg-white rounded-2xl shadow-2xl max-w-md w-full overflow-hidden transform transition-all">
            <div class="px-6 py-4 border-b border-gray-100 flex items-center justify-between bg-emerald-50/50">
                <div class="flex items-center gap-2">
                    <div class="w-8 h-8 rounded-full bg-emerald-100 text-emerald-600 flex items-center justify-center text-sm">
                        <i class="fas fa-check"></i>
                    </div>
                    <h3 class="text-base font-bold text-gray-900">Approve Booking</h3>
                </div>
                <button type="button" onclick="closeModals()" class="text-gray-400 hover:text-gray-600 rounded-lg p-1.5 transition">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <form id="approval-form">
                <div class="p-6 space-y-4">
                    <!-- Ringkasan Booking -->
                    <div id="approval-booking-info" class="p-3.5 bg-gray-50 rounded-xl border border-gray-200 text-xs space-y-1">
                        <div class="flex justify-between font-semibold text-gray-900">
                            <span id="approve-customer-name">-</span>
                            <span id="approve-booking-id" class="font-mono text-gray-500">#0</span>
                        </div>
                        <div class="flex justify-between text-gray-600">
                            <span id="approve-service-name">-</span>
                            <span id="approve-event-date">-</span>
                        </div>
                        <div class="flex justify-between text-gray-600 pt-1 border-t border-gray-200">
                            <span>Metode: <strong id="approve-payment-method" class="text-gray-800">-</strong></span>
                            <span id="approve-proof-status" class="text-emerald-600 font-bold">Bukti Ada</span>
                        </div>
                    </div>

                    <!-- Status Pembayaran Check -->
                    <div>
                        <label class="block text-xs font-bold text-gray-700 mb-1.5">Status Pembayaran</label>
                        <select name="payment_status" id="approve-payment-status" class="w-full px-3 py-2 text-xs border border-gray-300 rounded-xl focus:ring-2 focus:ring-emerald-500 focus:outline-none bg-white">
                            <option value="paid">Lunas / Terverifikasi (Bukti Valid)</option>
                            <option value="pending">Pending (Menunggu Pelunasan)</option>
                            <option value="unpaid">Belum Bayar (Bayar di Lokasi)</option>
                        </select>
                    </div>

                    <div>
                        <label for="admin_notes" class="block text-xs font-bold text-gray-700 mb-1.5">Catatan Admin untuk Customer (Opsional)</label>
                        <textarea id="admin_notes" name="admin_notes" rows="3" class="w-full px-3 py-2 text-xs border border-gray-300 rounded-xl focus:ring-2 focus:ring-emerald-500 focus:outline-none" placeholder="Contoh: Jadwal telah dikunci. Sampai jumpa di studio tanggal 15 Oktober pukul 10:00 WIB..."></textarea>
                    </div>

                    <p class="text-[11px] text-gray-500 italic">
                        *Setelah di-approve, Anda dapat langsung mengirim pesan konfirmasi resmi ke WhatsApp customer dengan 1 klik.
                    </p>
                </div>
                <div class="px-6 py-4 bg-gray-50 border-t border-gray-100 flex justify-end space-x-2">
                    <button type="button" onclick="closeModals()" class="px-4 py-2 text-xs font-semibold text-gray-700 bg-white border border-gray-300 rounded-xl hover:bg-gray-50 transition shadow-sm">
                        Batal
                    </button>
                    <button type="submit" id="btn-submit-approve" class="px-5 py-2 text-xs font-bold text-white bg-emerald-600 hover:bg-emerald-700 rounded-xl transition shadow-md inline-flex items-center gap-1.5">
                        <i class="fas fa-check"></i>
                        <span>Setujui & Approve</span>
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Rejection Modal -->
    <div id="rejection-modal" class="fixed inset-0 bg-gray-900/60 backdrop-blur-sm hidden z-50 flex items-center justify-center p-4">
        <div class="bg-white rounded-2xl shadow-2xl max-w-md w-full overflow-hidden transform transition-all">
            <div class="px-6 py-4 border-b border-gray-100 flex items-center justify-between bg-rose-50/50">
                <div class="flex items-center gap-2">
                    <div class="w-8 h-8 rounded-full bg-rose-100 text-rose-600 flex items-center justify-center text-sm">
                        <i class="fas fa-times"></i>
                    </div>
                    <h3 class="text-base font-bold text-gray-900">Tolak Booking</h3>
                </div>
                <button type="button" onclick="closeModals()" class="text-gray-400 hover:text-gray-600 rounded-lg p-1.5 transition">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <form id="rejection-form">
                <div class="p-6 space-y-4">
                    <p class="text-xs text-gray-600">Apakah Anda yakin ingin menolak booking ini? Berikan alasan penolakan yang jelas agar customer memahami alasannya.</p>
                    <div>
                        <label for="rejection_notes" class="block text-xs font-bold text-gray-700 mb-1.5">Alasan Penolakan <span class="text-rose-500">*</span></label>
                        <textarea id="rejection_notes" name="admin_notes" rows="3" class="w-full px-3 py-2 text-xs border border-gray-300 rounded-xl focus:ring-2 focus:ring-rose-500 focus:outline-none" placeholder="Contoh: Jadwal pada tanggal tersebut sudah penuh atau bukti transfer tidak terbaca..." required></textarea>
                    </div>
                </div>
                <div class="px-6 py-4 bg-gray-50 border-t border-gray-100 flex justify-end space-x-2">
                    <button type="button" onclick="closeModals()" class="px-4 py-2 text-xs font-semibold text-gray-700 bg-white border border-gray-300 rounded-xl hover:bg-gray-50 transition shadow-sm">
                        Batal
                    </button>
                    <button type="submit" id="btn-submit-reject" class="px-5 py-2 text-xs font-bold text-white bg-rose-600 hover:bg-rose-700 rounded-xl transition shadow-md inline-flex items-center gap-1.5">
                        <i class="fas fa-times"></i>
                        <span>Tolak Booking</span>
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Cancellation Modal (Pembatalan Booking) -->
    <div id="cancel-modal" class="fixed inset-0 bg-gray-900/60 backdrop-blur-sm hidden z-50 flex items-center justify-center p-4">
        <div class="bg-white rounded-2xl shadow-2xl max-w-md w-full overflow-hidden transform transition-all">
            <div class="px-6 py-4 border-b border-gray-100 flex items-center justify-between bg-amber-50/50">
                <div class="flex items-center gap-2">
                    <div class="w-8 h-8 rounded-full bg-amber-100 text-amber-700 flex items-center justify-center text-sm">
                        <i class="fas fa-ban"></i>
                    </div>
                    <div>
                        <h3 class="text-base font-bold text-gray-900">Batalkan Pesanan Booking</h3>
                        <p class="text-[11px] text-gray-500" id="cancel-customer-info">-</p>
                    </div>
                </div>
                <button type="button" onclick="closeModals()" class="text-gray-400 hover:text-gray-600 rounded-lg p-1.5 transition">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <form id="cancel-form">
                <div class="p-6 space-y-4">
                    <div class="bg-amber-50 border border-amber-200 rounded-xl p-3 text-xs text-amber-800">
                        <i class="fas fa-info-circle mr-1"></i> Setelah dibatalkan, status akan diperbarui dan Anda dapat mengirim notifikasi pembatalan serta rincian refund langsung ke WhatsApp klien.
                    </div>
                    <div>
                        <label for="cancel_payment_status" class="block text-xs font-bold text-gray-700 mb-1.5">Status Pembayaran / Refund</label>
                        <select id="cancel_payment_status" class="w-full px-3 py-2 text-xs border border-gray-300 rounded-xl focus:ring-2 focus:ring-amber-500 focus:outline-none bg-white">
                            <option value="refunded">Refunded (Dana sudah/akan dikembalikan ke klien)</option>
                            <option value="unpaid">Unpaid / No Refund (Belum bayar / tanpa pengembalian dana)</option>
                            <option value="rejected">Rejected (Pembayaran Ditolak)</option>
                        </select>
                    </div>
                    <div>
                        <label for="cancel_notes" class="block text-xs font-bold text-gray-700 mb-1.5">Alasan Pembatalan & Catatan Refund <span class="text-rose-500">*</span></label>
                        <textarea id="cancel_notes" rows="3" class="w-full px-3 py-2 text-xs border border-gray-300 rounded-xl focus:ring-2 focus:ring-amber-500 focus:outline-none" placeholder="Tulis alasan pembatalan (misal: permintaan klien, jadwal bentrok, DP telah dikembalikan via BCA...)" required></textarea>
                    </div>
                </div>
                <div class="px-6 py-4 bg-gray-50 border-t border-gray-100 flex justify-end space-x-2">
                    <button type="button" onclick="closeModals()" class="px-4 py-2 text-xs font-semibold text-gray-700 bg-white border border-gray-300 rounded-xl hover:bg-gray-50 transition shadow-sm">
                        Kembali
                    </button>
                    <button type="submit" id="btn-submit-cancel" class="px-5 py-2 text-xs font-bold text-white bg-amber-600 hover:bg-amber-700 rounded-xl transition shadow-md inline-flex items-center gap-1.5">
                        <i class="fas fa-ban"></i>
                        <span>Konfirmasi Batalkan</span>
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Success Modal with WhatsApp Action -->
    <div id="success-modal" class="fixed inset-0 bg-gray-900/60 backdrop-blur-sm hidden z-50 flex items-center justify-center p-4">
        <div class="bg-white rounded-2xl shadow-2xl max-w-md w-full overflow-hidden text-center p-6">
            <div class="w-14 h-14 bg-emerald-100 text-emerald-600 rounded-full flex items-center justify-center mx-auto mb-4 text-2xl shadow-inner">
                <i class="fas fa-check"></i>
            </div>
            <h3 class="text-lg font-bold text-gray-900 mb-1">Berhasil Disimpan!</h3>
            <p id="success-message" class="text-xs text-gray-600 mb-6"></p>
            
            <div id="whatsapp-button" class="hidden mb-4">
                <a id="whatsapp-link" href="#" target="_blank" class="w-full inline-flex items-center justify-center px-5 py-3 bg-emerald-600 hover:bg-emerald-700 text-white font-bold rounded-xl text-sm transition transform hover:scale-105 shadow-lg gap-2">
                    <i class="fab fa-whatsapp text-lg"></i>
                    <span>Kirim Pesan WhatsApp ke Klien</span>
                </a>
                <p class="text-[11px] text-gray-400 mt-2">Pesan WhatsApp otomatis siap dikirim ke nomor handphone klien</p>
            </div>

            <button type="button" onclick="closeModals()" class="w-full px-4 py-2.5 text-xs font-semibold text-gray-700 bg-gray-100 hover:bg-gray-200 rounded-xl transition">
                Tutup
            </button>
        </div>
    </div>

    <script>
        let allBookings = [];
        let currentBookingId = null;

        document.addEventListener('DOMContentLoaded', function() {
            loadBookings();

            // Search and filter listeners
            document.getElementById('search-input').addEventListener('input', applyFilters);
            document.getElementById('status-filter').addEventListener('change', applyFilters);
            document.getElementById('period-filter').addEventListener('change', applyFilters);
        });

        // Load bookings from API
        async function loadBookings() {
            const tbody = document.getElementById('bookings-table');
            tbody.innerHTML = `
                <tr>
                    <td colspan="8" class="text-center py-12 text-sm text-gray-400">
                        <i class="fas fa-spinner fa-spin text-xl mb-2 text-[#65bcb5]"></i>
                        <p>Memuat data booking terbaru...</p>
                    </td>
                </tr>
            `;

            try {
                const response = await fetch('/api/bookings');
                allBookings = await response.json();
                updateStats(allBookings);
                applyFilters();
            } catch (error) {
                console.error('Error loading bookings:', error);
                tbody.innerHTML = `
                    <tr>
                        <td colspan="8" class="text-center py-8 text-rose-500 text-sm">
                            <i class="fas fa-exclamation-triangle text-xl mb-2"></i>
                            <p>Gagal memuat data booking. Silakan coba lagi.</p>
                        </td>
                    </tr>
                `;
            }
        }

        // Apply Search and Filters
        function applyFilters() {
            const query = (document.getElementById('search-input').value || '').toLowerCase().trim();
            const status = document.getElementById('status-filter').value;
            const period = document.getElementById('period-filter').value;

            const now = new Date();
            const thisMonth = now.getMonth();
            const thisYear = now.getFullYear();
            const lastMonthDate = new Date(thisYear, thisMonth - 1, 1);
            const lastMonth = lastMonthDate.getMonth();
            const lastMonthYear = lastMonthDate.getFullYear();

            const filtered = allBookings.filter(b => {
                const matchQuery = !query || 
                    (b.full_name && b.full_name.toLowerCase().includes(query)) ||
                    (b.phone && b.phone.toLowerCase().includes(query)) ||
                    (b.email && b.email.toLowerCase().includes(query)) ||
                    (b.service_type && b.service_type.toLowerCase().includes(query)) ||
                    ('#' + b.id).includes(query);

                const matchStatus = (status === 'all') || (b.status === status);

                let matchPeriod = true;
                if (b.created_at) {
                    const d = new Date(b.created_at);
                    if (period === 'this_month') {
                        matchPeriod = (d.getMonth() === thisMonth && d.getFullYear() === thisYear);
                    } else if (period === 'last_month') {
                        matchPeriod = (d.getMonth() === lastMonth && d.getFullYear() === lastMonthYear);
                    } else if (period === 'two_months') {
                        matchPeriod = (d >= new Date(thisYear, thisMonth - 1, 1));
                    }
                }

                return matchQuery && matchStatus && matchPeriod;
            });

            renderBookings(filtered);
        }

        // Update statistics cards & 1-2 month revenue recap
        function updateStats(bookings) {
            const now = new Date();
            const thisMonth = now.getMonth();
            const thisYear = now.getFullYear();
            const lastMonthDate = new Date(thisYear, thisMonth - 1, 1);
            const lastMonth = lastMonthDate.getMonth();
            const lastMonthYear = lastMonthDate.getFullYear();

            let revThisMonth = 0, paidThisMonth = 0;
            let revLastMonth = 0, paidLastMonth = 0;
            let revTwoMonths = 0, paidTwoMonths = 0;

            bookings.forEach(b => {
                const isPaid = (b.payment_status === 'paid');
                const amt = Number(b.amount) || 0;
                if (b.created_at && isPaid) {
                    const d = new Date(b.created_at);
                    if (d.getMonth() === thisMonth && d.getFullYear() === thisYear) {
                        revThisMonth += amt;
                        paidThisMonth++;
                    }
                    if (d.getMonth() === lastMonth && d.getFullYear() === lastMonthYear) {
                        revLastMonth += amt;
                        paidLastMonth++;
                    }
                    if (d >= new Date(thisYear, thisMonth - 1, 1)) {
                        revTwoMonths += amt;
                        paidTwoMonths++;
                    }
                }
            });

            document.getElementById('revenue-this-month').textContent = 'Rp ' + revThisMonth.toLocaleString('id-ID');
            document.getElementById('paid-count-this-month').textContent = paidThisMonth + ' booking lunas';

            document.getElementById('revenue-last-month').textContent = 'Rp ' + revLastMonth.toLocaleString('id-ID');
            document.getElementById('paid-count-last-month').textContent = paidLastMonth + ' booking lunas';

            document.getElementById('revenue-two-months').textContent = 'Rp ' + revTwoMonths.toLocaleString('id-ID');
            document.getElementById('paid-count-two-months').textContent = paidTwoMonths + ' booking lunas (60 hari)';

            document.getElementById('pending-count').textContent = bookings.filter(b => b.status === 'pending').length;
            document.getElementById('approved-count').textContent = bookings.filter(b => b.status === 'approved').length;
            document.getElementById('cancelled-count').textContent = bookings.filter(b => b.status === 'cancelled').length;
            document.getElementById('rejected-count').textContent = bookings.filter(b => b.status === 'rejected').length;
            document.getElementById('total-count').textContent = bookings.length;
        }

        // Render bookings table
        function renderBookings(bookings) {
            const tbody = document.getElementById('bookings-table');
            const emptyState = document.getElementById('empty-state');
            tbody.innerHTML = '';

            if (bookings.length === 0) {
                emptyState.classList.remove('hidden');
                return;
            } else {
                emptyState.classList.add('hidden');
            }

            bookings.forEach(booking => {
                const row = document.createElement('tr');
                row.className = 'hover:bg-gray-50/70 transition';

                // Format Nominal
                let formattedAmount = '-';
                if (booking.amount) {
                    formattedAmount = 'Rp ' + Number(booking.amount).toLocaleString('id-ID');
                }

                // Payment Status Badge
                let paymentBadgeClass = 'bg-gray-100 text-gray-700';
                let paymentStatusText = 'Belum Bayar';
                if (booking.payment_status === 'paid') {
                    paymentBadgeClass = 'bg-emerald-100 text-emerald-800';
                    paymentStatusText = 'Lunas / Verified';
                } else if (booking.payment_status === 'pending') {
                    paymentBadgeClass = 'bg-amber-100 text-amber-800';
                    paymentStatusText = 'Pending Verifikasi';
                } else if (booking.payment_status === 'refunded') {
                    paymentBadgeClass = 'bg-purple-100 text-purple-800';
                    paymentStatusText = 'Refunded';
                } else if (booking.payment_status === 'rejected') {
                    paymentBadgeClass = 'bg-rose-100 text-rose-800';
                    paymentStatusText = 'Ditolak';
                }

                // Bukti Transfer UI
                let proofUI = '';
                if (booking.payment_proof_url) {
                    proofUI = `
                        <div class="mt-1 flex items-center gap-2">
                            <img src="${booking.payment_proof_url}" alt="Bukti" class="w-8 h-8 rounded object-cover border border-gray-200 shadow-xs cursor-pointer hover:scale-105 transition" onclick="openProofModal(${booking.id})">
                            <button type="button" onclick="openProofModal(${booking.id})" class="text-xs text-blue-600 hover:text-blue-800 font-semibold inline-flex items-center gap-1">
                                <i class="fas fa-eye text-[10px]"></i> Lihat Bukti
                            </button>
                        </div>
                    `;
                } else {
                    proofUI = `<span class="text-[11px] text-gray-400 italic block mt-0.5">Tanpa lampiran bukti</span>`;
                }

                row.innerHTML = `
                    <td class="px-5 py-4 whitespace-nowrap text-xs font-mono font-bold text-gray-900">#${booking.id}</td>
                    <td class="px-5 py-4 whitespace-nowrap">
                        <div class="text-xs font-bold text-gray-900">${escapeHtml(booking.full_name)}</div>
                        <div class="text-[11px] text-gray-500 flex items-center gap-1 mt-0.5">
                            <i class="fab fa-whatsapp text-emerald-500"></i> ${escapeHtml(booking.phone)}
                        </div>
                        <div class="text-[11px] text-gray-400">${escapeHtml(booking.email || '')}</div>
                    </td>
                    <td class="px-5 py-4 whitespace-nowrap">
                        <span class="px-2.5 py-1 text-xs font-semibold rounded-lg bg-teal-50 text-teal-800 border border-teal-200">
                            ${escapeHtml(booking.service_type)}
                        </span>
                        ${booking.location ? `<div class="text-[11px] text-gray-500 mt-1 truncate max-w-xs"><i class="fas fa-map-marker-alt text-rose-400 mr-1"></i>${escapeHtml(booking.location)}</div>` : ''}
                    </td>
                    <td class="px-5 py-4 whitespace-nowrap text-xs text-gray-700">
                        ${booking.event_date ? new Date(booking.event_date).toLocaleDateString('id-ID', {day: 'numeric', month: 'short', year: 'numeric'}) : '<span class="text-gray-400">-</span>'}
                    </td>
                    <td class="px-5 py-4 whitespace-nowrap">
                        <div class="text-xs font-bold text-gray-900">${booking.payment_method || 'Bayar di Lokasi'}</div>
                        <div class="text-xs font-semibold text-[#65bcb5] mt-0.5">${formattedAmount}</div>
                        <span class="px-2 py-0.5 text-[10px] font-bold rounded-full mt-1 inline-block ${paymentBadgeClass}">
                            ${paymentStatusText}
                        </span>
                        ${proofUI}
                    </td>
                    <td class="px-5 py-4 whitespace-nowrap">
                        <span class="px-2.5 py-1 text-xs font-bold rounded-full ${getStatusClass(booking.status)}">
                            ${getStatusText(booking.status)}
                        </span>
                    </td>
                    <td class="px-5 py-4 whitespace-nowrap text-[11px] text-gray-500">
                        ${new Date(booking.created_at).toLocaleDateString('id-ID', {day: 'numeric', month: 'short', hour: '2-digit', minute: '2-digit'})}
                    </td>
                    <td class="px-5 py-4 whitespace-nowrap text-center text-xs font-medium">
                        ${getActionButtons(booking)}
                    </td>
                `;
                tbody.appendChild(row);
            });
        }

        // Status Styling
        function getStatusClass(status) {
            switch(status) {
                case 'pending': return 'bg-amber-100 text-amber-800 border border-amber-200';
                case 'approved': return 'bg-emerald-100 text-emerald-800 border border-emerald-200';
                case 'cancelled': return 'bg-purple-100 text-purple-800 border border-purple-200';
                case 'rejected': return 'bg-rose-100 text-rose-800 border border-rose-200';
                default: return 'bg-gray-100 text-gray-800';
            }
        }

        function getStatusText(status) {
            switch(status) {
                case 'pending': return 'Pending';
                case 'approved': return 'Approved';
                case 'cancelled': return 'Dibatalkan';
                case 'rejected': return 'Rejected';
                default: return status || 'Unknown';
            }
        }

        // Format clean phone for WA
        function cleanPhone(phone) {
            if (!phone) return '';
            let p = phone.replace(/[^0-9]/g, '');
            if (p.startsWith('0')) p = '62' + p.substring(1);
            else if (p.startsWith('8')) p = '62' + p;
            return p;
        }

        // Action Buttons
        function getActionButtons(booking) {
            const waChatUrl = `https://wa.me/${cleanPhone(booking.phone)}?text=${encodeURIComponent(`Halo Kak ${booking.full_name}, kami dari tim Studio Foto Cihuy terkait booking #${booking.id} (${booking.service_type})...`)}`;

            if (booking.status === 'pending') {
                return `
                    <div class="flex items-center justify-center space-x-1.5">
                        <button onclick="openApprovalModal(${booking.id})" class="px-2.5 py-1.5 bg-emerald-50 text-emerald-700 hover:bg-emerald-100 rounded-lg text-xs font-semibold border border-emerald-200 transition" title="Approve & Kirim WA">
                            <i class="fas fa-check mr-1"></i> Approve
                        </button>
                        <button onclick="openCancelModal(${booking.id})" class="px-2.5 py-1.5 bg-amber-50 text-amber-700 hover:bg-amber-100 rounded-lg text-xs font-semibold border border-amber-200 transition" title="Batalkan Booking">
                            <i class="fas fa-ban mr-1"></i> Batal
                        </button>
                        <a href="${waChatUrl}" target="_blank" class="px-2.5 py-1.5 bg-gray-50 text-gray-700 hover:bg-gray-100 rounded-lg text-xs font-semibold border border-gray-200 transition" title="Chat WhatsApp">
                            <i class="fab fa-whatsapp text-emerald-600"></i>
                        </a>
                    </div>
                `;
            } else if (booking.status === 'approved') {
                return `
                    <div class="flex items-center justify-center space-x-1.5">
                        <button onclick="sendApprovalWhatsApp(${booking.id})" class="px-3 py-1.5 bg-emerald-600 hover:bg-emerald-700 text-white rounded-lg text-xs font-semibold shadow-xs transition" title="Kirim Konfirmasi WA ke Klien">
                            <i class="fab fa-whatsapp mr-1"></i> WA Konfirmasi
                        </button>
                        <button onclick="openCancelModal(${booking.id})" class="px-2.5 py-1.5 bg-amber-50 text-amber-700 hover:bg-amber-100 rounded-lg text-xs font-semibold border border-amber-200 transition" title="Batalkan Pesanan">
                            <i class="fas fa-ban mr-1"></i> Batal
                        </button>
                    </div>
                `;
            } else if (booking.status === 'cancelled') {
                return `
                    <div class="flex items-center justify-center space-x-1.5">
                        <button onclick="sendCancellationWhatsApp(${booking.id})" class="px-2.5 py-1.5 bg-purple-50 text-purple-700 hover:bg-purple-100 rounded-lg text-xs font-semibold border border-purple-200 transition" title="Kirim Info Batal & Refund via WA">
                            <i class="fab fa-whatsapp mr-1"></i> Info Batal
                        </button>
                        <a href="${waChatUrl}" target="_blank" class="px-2.5 py-1.5 bg-gray-50 text-gray-700 hover:bg-gray-100 rounded-lg text-xs font-semibold border border-gray-200 transition" title="Chat WhatsApp">
                            <i class="fab fa-whatsapp text-emerald-600"></i>
                        </a>
                    </div>
                `;
            } else {
                return `
                    <div class="flex items-center justify-center space-x-1.5">
                        <a href="${waChatUrl}" target="_blank" class="px-2.5 py-1.5 bg-gray-50 text-gray-700 hover:bg-gray-100 rounded-lg text-xs font-semibold border border-gray-200 transition" title="Chat WhatsApp">
                            <i class="fab fa-whatsapp text-emerald-600 mr-1"></i> Chat
                        </a>
                    </div>
                `;
            }
        }

        // Open Bukti Pembayaran Modal
        function openProofModal(bookingId) {
            const booking = allBookings.find(b => b.id === bookingId);
            if (!booking || !booking.payment_proof_url) return;

            document.getElementById('proof-modal-customer').textContent = booking.full_name + ' (' + booking.phone + ')';
            document.getElementById('proof-modal-service').textContent = booking.service_type;
            document.getElementById('proof-modal-method').textContent = booking.payment_method || 'Transfer Bank';
            document.getElementById('proof-modal-amount').textContent = booking.amount ? ('Rp ' + Number(booking.amount).toLocaleString('id-ID')) : '-';
            document.getElementById('proof-modal-img').src = booking.payment_proof_url;
            document.getElementById('proof-modal-download').href = booking.payment_proof_url;

            document.getElementById('proof-modal').classList.remove('hidden');
        }

        // Open Approval Modal
        function openApprovalModal(bookingId) {
            currentBookingId = bookingId;
            const booking = allBookings.find(b => b.id === bookingId);
            if (!booking) return;

            document.getElementById('approve-customer-name').textContent = booking.full_name;
            document.getElementById('approve-booking-id').textContent = '#' + booking.id;
            document.getElementById('approve-service-name').textContent = booking.service_type;
            document.getElementById('approve-event-date').textContent = booking.event_date ? new Date(booking.event_date).toLocaleDateString('id-ID') : '-';
            document.getElementById('approve-payment-method').textContent = booking.payment_method || 'Bayar di Lokasi';

            const proofStatus = document.getElementById('approve-proof-status');
            const paymentSelect = document.getElementById('approve-payment-status');
            if (booking.payment_proof_url) {
                proofStatus.textContent = 'Bukti Ada ✓';
                proofStatus.className = 'text-emerald-600 font-bold';
                paymentSelect.value = 'paid';
            } else {
                proofStatus.textContent = 'Tanpa Bukti';
                proofStatus.className = 'text-gray-400 font-normal';
                paymentSelect.value = (booking.payment_method === 'Bayar di Lokasi / Cash') ? 'unpaid' : 'pending';
            }

            document.getElementById('admin_notes').value = '';
            document.getElementById('approval-modal').classList.remove('hidden');
        }

        // Open Cancellation Modal
        function openCancelModal(bookingId) {
            currentBookingId = bookingId;
            const booking = allBookings.find(b => b.id === bookingId);
            if (!booking) return;

            document.getElementById('cancel-customer-info').textContent = `${booking.full_name} (#${booking.id}) - ${booking.service_type}`;
            document.getElementById('cancel_notes').value = booking.admin_notes || '';
            document.getElementById('cancel_payment_status').value = (booking.payment_status === 'paid' ? 'refunded' : 'unpaid');
            document.getElementById('cancel-modal').classList.remove('hidden');
        }

        // Open Rejection Modal
        function openRejectionModal(bookingId) {
            currentBookingId = bookingId;
            document.getElementById('rejection_notes').value = '';
            document.getElementById('rejection-modal').classList.remove('hidden');
        }

        // Close All Modals
        function closeModals() {
            document.getElementById('proof-modal').classList.add('hidden');
            document.getElementById('approval-modal').classList.add('hidden');
            document.getElementById('cancel-modal').classList.add('hidden');
            document.getElementById('rejection-modal').classList.add('hidden');
            document.getElementById('success-modal').classList.add('hidden');
            currentBookingId = null;
        }

        // Handle Approval Form Submission
        document.getElementById('approval-form').addEventListener('submit', async function(e) {
            e.preventDefault();
            if (!currentBookingId) return;

            const btn = document.getElementById('btn-submit-approve');
            btn.disabled = true;
            btn.innerHTML = `<i class="fas fa-spinner fa-spin"></i> Menyimpan...`;

            const adminNotes = document.getElementById('admin_notes').value;
            const paymentStatus = document.getElementById('approve-payment-status').value;

            try {
                const response = await fetch(`/bookings/${currentBookingId}/approve`, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    },
                    body: JSON.stringify({
                        admin_notes: adminNotes,
                        payment_status: paymentStatus
                    })
                });

                const result = await response.json();
                btn.disabled = false;
                btn.innerHTML = `<i class="fas fa-check"></i> Setujui & Approve`;

                if (result.success) {
                    closeModals();
                    showSuccessModal('Booking berhasil disetujui! Anda dapat langsung mengirim konfirmasi WhatsApp ke nomor klien.', result.whatsapp_url);
                    loadBookings();
                } else {
                    alert('Gagal menyetujui: ' + result.message);
                }
            } catch (error) {
                console.error('Error approving booking:', error);
                btn.disabled = false;
                btn.innerHTML = `<i class="fas fa-check"></i> Setujui & Approve`;
                alert('Terjadi kesalahan saat menyetujui booking');
            }
        });

        // Handle Cancellation Form Submission
        document.getElementById('cancel-form').addEventListener('submit', async function(e) {
            e.preventDefault();
            if (!currentBookingId) return;

            const btn = document.getElementById('btn-submit-cancel');
            btn.disabled = true;
            btn.innerHTML = `<i class="fas fa-spinner fa-spin"></i> Membatalkan...`;

            const adminNotes = document.getElementById('cancel_notes').value;
            const paymentStatus = document.getElementById('cancel_payment_status').value;

            try {
                const response = await fetch(`/bookings/${currentBookingId}/cancel`, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    },
                    body: JSON.stringify({
                        admin_notes: adminNotes,
                        payment_status: paymentStatus
                    })
                });

                const result = await response.json();
                btn.disabled = false;
                btn.innerHTML = `<i class="fas fa-ban"></i> Konfirmasi Batalkan`;

                if (result.success) {
                    closeModals();
                    showSuccessModal('Booking berhasil dibatalkan. Anda dapat mengirim notifikasi pembatalan & info refund via WhatsApp.', result.whatsapp_url);
                    loadBookings();
                } else {
                    alert('Gagal membatalkan: ' + result.message);
                }
            } catch (error) {
                console.error('Error cancelling booking:', error);
                btn.disabled = false;
                btn.innerHTML = `<i class="fas fa-ban"></i> Konfirmasi Batalkan`;
                alert('Terjadi kesalahan saat membatalkan booking');
            }
        });

        // Handle Rejection Form Submission
        document.getElementById('rejection-form').addEventListener('submit', async function(e) {
            e.preventDefault();
            if (!currentBookingId) return;

            const btn = document.getElementById('btn-submit-reject');
            btn.disabled = true;
            btn.innerHTML = `<i class="fas fa-spinner fa-spin"></i> Memproses...`;

            const adminNotes = document.getElementById('rejection_notes').value;

            try {
                const response = await fetch(`/bookings/${currentBookingId}/reject`, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    },
                    body: JSON.stringify({ admin_notes: adminNotes })
                });

                const result = await response.json();
                btn.disabled = false;
                btn.innerHTML = `<i class="fas fa-times"></i> Tolak Booking`;

                if (result.success) {
                    closeModals();
                    showSuccessModal('Booking berhasil ditolak.');
                    loadBookings();
                } else {
                    alert('Gagal menolak: ' + result.message);
                }
            } catch (error) {
                console.error('Error rejecting booking:', error);
                btn.disabled = false;
                btn.innerHTML = `<i class="fas fa-times"></i> Tolak Booking`;
                alert('Terjadi kesalahan saat menolak booking');
            }
        });

        // Send Approval WhatsApp directly to Client
        async function sendApprovalWhatsApp(bookingId) {
            try {
                const response = await fetch(`/bookings/${bookingId}/whatsapp/approval`);
                const data = await response.json();
                if (data.success && data.whatsapp_url) {
                    window.open(data.whatsapp_url, '_blank');
                } else {
                    alert('Gagal mendapatkan link WhatsApp');
                }
            } catch (error) {
                console.error('Error getting WhatsApp URL:', error);
                alert('Terjadi kesalahan saat membuka WhatsApp');
            }
        }

        // Send Cancellation WhatsApp directly to Client
        async function sendCancellationWhatsApp(bookingId) {
            try {
                const response = await fetch(`/bookings/${bookingId}/whatsapp/cancel`);
                const data = await response.json();
                if (data.success && data.whatsapp_url) {
                    window.open(data.whatsapp_url, '_blank');
                } else {
                    alert('Gagal mendapatkan link WhatsApp');
                }
            } catch (error) {
                console.error('Error getting WhatsApp cancel URL:', error);
                alert('Terjadi kesalahan saat membuka WhatsApp');
            }
        }

        // Show Success Modal
        function showSuccessModal(message, whatsappUrl = null) {
            document.getElementById('success-message').textContent = message;
            if (whatsappUrl) {
                document.getElementById('whatsapp-link').href = whatsappUrl;
                document.getElementById('whatsapp-button').classList.remove('hidden');
            } else {
                document.getElementById('whatsapp-button').classList.add('hidden');
            }
            document.getElementById('success-modal').classList.remove('hidden');
        }

        // Utility to escape HTML
        function escapeHtml(text) {
            if (!text) return '';
            const map = {
                '&': '&amp;',
                '<': '&lt;',
                '>': '&gt;',
                '"': '&quot;',
                "'": '&#039;'
            };
            return text.toString().replace(/[&<>"']/g, m => map[m]);
        }
    </script>
</body>
</html>

