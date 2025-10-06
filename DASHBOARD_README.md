# Dashboard Filament - Studio Foto Cihuy

## Overview

Dashboard ini menyediakan statistik lengkap untuk mengelola bisnis Studio Foto Cihuy dengan tampilan yang modern dan informatif.

## Fitur Dashboard

### 1. Statistik Overview

-   **Booking Bulan Ini**: Menampilkan jumlah booking dengan perbandingan bulan sebelumnya
-   **Feedback Bulan Ini**: Jumlah feedback yang masuk dengan trend pertumbuhan
-   **Konten Portfolio**: Jumlah portfolio yang ditambahkan bulan ini
-   **Estimasi Pendapatan**: Perkiraan pendapatan berdasarkan booking
-   **Total Booking**: Total booking sepanjang waktu
-   **Feedback Disetujui**: Jumlah feedback yang sudah disetujui

### 2. Chart Visualisasi

-   **Booking per Bulan**: Line chart menampilkan trend booking 6 bulan terakhir
-   **Distribusi Rating Feedback**: Doughnut chart menampilkan distribusi rating 1-5 bintang
-   **Distribusi Jenis Layanan**: Bar chart menampilkan popularitas setiap jenis layanan

### 3. Quick Actions

-   **Tambah Portfolio**: Link langsung ke form tambah portfolio
-   **Review Feedback**: Link ke halaman moderasi feedback
-   **Kelola Booking**: Link ke halaman manajemen booking

### 4. Recent Activity

-   **Booking Terbaru**: Daftar 5 booking terbaru dengan detail nama dan layanan
-   **Feedback Terbaru**: Daftar 5 feedback terbaru dengan rating dan status

## File Structure

```
app/Filament/
├── Pages/
│   └── Dashboard.php                 # Main dashboard page
├── Widgets/
│   ├── StatsOverviewWidget.php      # Statistik overview cards
│   ├── BookingChartWidget.php       # Chart booking per bulan
│   ├── FeedbackRatingWidget.php     # Chart distribusi rating
│   └── ServiceTypeWidget.php        # Chart distribusi layanan
└── Resources/
    ├── Bookings/                    # Resource booking
    ├── Feedback/                    # Resource feedback
    └── Portfolios/                  # Resource portfolio

resources/views/filament/pages/
└── dashboard.blade.php              # Custom dashboard view
```

## Cara Menggunakan

1. **Akses Dashboard**: Login ke admin panel di `/admin`
2. **Lihat Statistik**: Dashboard akan menampilkan statistik real-time
3. **Quick Actions**: Gunakan tombol quick action untuk navigasi cepat
4. **Monitor Trend**: Perhatikan chart untuk melihat trend bisnis

## Data yang Ditampilkan

### Booking Statistics

-   Jumlah booking bulan ini vs bulan lalu
-   Trend pertumbuhan dalam persentase
-   Chart visualisasi 6 bulan terakhir
-   Distribusi berdasarkan jenis layanan

### Feedback Statistics

-   Jumlah feedback bulan ini vs bulan lalu
-   Distribusi rating 1-5 bintang
-   Status feedback (approved/pending)
-   Feedback terbaru dengan detail

### Portfolio Statistics

-   Jumlah konten portfolio bulan ini
-   Total portfolio yang dipublikasikan
-   Portfolio yang sedang pending

### Revenue Estimation

-   Estimasi pendapatan berdasarkan booking
-   Perbandingan dengan bulan sebelumnya
-   Breakdown berdasarkan jenis layanan

## Customization

### Menambah Widget Baru

1. Buat file widget di `app/Filament/Widgets/`
2. Extend dari `ChartWidget` atau `StatsOverviewWidget`
3. Tambahkan ke array `getWidgets()` di `Dashboard.php`

### Mengubah Warna

-   Edit warna di file widget menggunakan CSS atau Tailwind classes
-   Warna brand: `#65bcb5` (teal)

### Menambah Statistik

-   Edit `StatsOverviewWidget.php` untuk menambah statistik baru
-   Gunakan model Eloquent untuk query data

## Technical Details

### Dependencies

-   Filament v3
-   Laravel 10+
-   Chart.js (via Filament)
-   Tailwind CSS

### Database Tables

-   `bookings`: Data booking pelanggan
-   `feedback`: Data feedback dan rating
-   `portfolios`: Data portfolio/konten

### Performance

-   Query dioptimalkan dengan index database
-   Caching untuk statistik yang tidak sering berubah
-   Lazy loading untuk chart data

## Troubleshooting

### Chart Tidak Muncul

-   Pastikan data ada di database
-   Check console browser untuk error JavaScript
-   Verify Chart.js library loaded

### Statistik Tidak Akurat

-   Check timezone setting di Laravel
-   Verify date range dalam query
-   Pastikan data sample ada

### Performance Issues

-   Tambahkan index pada kolom `created_at`
-   Implement caching untuk query berat
-   Consider pagination untuk data besar
