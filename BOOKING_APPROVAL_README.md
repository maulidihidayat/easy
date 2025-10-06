# Booking Approval System - Studio Foto Cihuy

## Overview

Sistem approval booking memungkinkan admin untuk menyetujui atau menolak booking customer secara langsung dari admin panel, dengan otomatis mengirim pesan konfirmasi via WhatsApp.

## Fitur yang Tersedia

### 1. **Admin Panel untuk Manage Bookings**

-   ✅ **Dashboard Admin**: Halaman khusus untuk manage bookings
-   ✅ **Statistics**: Statistik booking pending, approved, rejected, dan total
-   ✅ **Real-time Table**: Tabel booking dengan data real-time
-   ✅ **Status Management**: Update status booking dengan mudah

### 2. **Approval System**

-   ✅ **Approve Booking**: Admin bisa approve booking dengan catatan opsional
-   ✅ **Reject Booking**: Admin bisa reject booking dengan alasan
-   ✅ **Status Tracking**: Track status booking (pending, approved, rejected, completed)
-   ✅ **Timestamp**: Record waktu approval dan catatan admin

### 3. **WhatsApp Integration**

-   ✅ **Auto WhatsApp**: Otomatis generate pesan approval untuk customer
-   ✅ **Professional Message**: Pesan approval yang profesional dan informatif
-   ✅ **One-Click Send**: Admin bisa kirim WhatsApp langsung dari panel

## Cara Menggunakan

### 1. **Akses Admin Panel**

1. Buka browser dan akses `/admin/bookings`
2. Lihat dashboard dengan statistik booking
3. Monitor semua booking dalam tabel real-time

### 2. **Approve Booking**

1. Cari booking dengan status "Pending"
2. Klik tombol "Approve" (hijau)
3. Tambahkan catatan admin (opsional)
4. Klik "Approve" untuk konfirmasi
5. Sistem akan generate pesan WhatsApp
6. Klik "Kirim WhatsApp" untuk kirim ke customer

### 3. **Reject Booking**

1. Cari booking dengan status "Pending"
2. Klik tombol "Reject" (merah)
3. Masukkan alasan penolakan (wajib)
4. Klik "Reject" untuk konfirmasi
5. Status booking akan berubah menjadi "Rejected"

### 4. **Send WhatsApp Approval**

1. Untuk booking yang sudah approved
2. Klik tombol "WhatsApp" (hijau)
3. Link WhatsApp akan terbuka di tab baru
4. Pesan approval sudah terformat siap kirim

## File Structure

```
app/
├── Http/Controllers/
│   ├── BookingApprovalController.php    # Controller untuk approval
│   └── BookingApiController.php         # API controller untuk data
├── Models/
│   └── Booking.php                      # Model dengan field status
└── Services/
    └── WhatsAppService.php              # Service untuk pesan approval

resources/views/
└── admin/
    └── bookings.blade.php               # Halaman admin panel

routes/
└── web.php                              # Routes untuk approval system
```

## Database Schema

### **Bookings Table Updates:**

```sql
-- Field yang ditambahkan:
status ENUM('pending', 'approved', 'rejected', 'completed') DEFAULT 'pending'
approved_at TIMESTAMP NULL
admin_notes TEXT NULL
```

### **Status Flow:**

```
pending → approved → completed
   ↓
rejected
```

## API Endpoints

### **GET /api/bookings**

-   **Description**: Get all bookings
-   **Response**: Array of booking objects
-   **Usage**: Load data untuk admin panel

### **POST /bookings/{id}/approve**

-   **Description**: Approve a booking
-   **Body**: `{ "admin_notes": "string" }`
-   **Response**: `{ "success": true, "whatsapp_url": "string" }`

### **POST /bookings/{id}/reject**

-   **Description**: Reject a booking
-   **Body**: `{ "admin_notes": "string" }`
-   **Response**: `{ "success": true }`

### **GET /bookings/{id}/whatsapp/approval**

-   **Description**: Get WhatsApp approval URL
-   **Response**: WhatsApp URL string

## Message Templates

### **Approval Message:**

```
🎉 *SELAMAT! BOOKING ANDA DISETUJUI* 🎉

Halo [Nama],

Kami dengan senang hati menginformasikan bahwa booking Anda untuk layanan *[Layanan]* telah *DISETUJUI*! 🎊

📋 *Detail Booking Anda:*
━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━
🆔 ID Booking: #[ID]
📅 Tanggal Booking: [Waktu]
✅ Status: DISETUJUI
📅 Tanggal Approval: [Waktu Approval]

🎯 *Langkah Selanjutnya:*
1. 📞 Tim kami akan menghubungi Anda dalam 24 jam
2. 💰 Diskusi detail paket dan harga
3. 📅 Konfirmasi jadwal dan lokasi
4. 📝 Persiapan kontrak dan pembayaran
5. 📸 Persiapan sesi foto

📞 *Kontak Tim:*
WhatsApp: +62 817-0337-6283
Email: info@studiofotocihuy.com

Terima kasih telah mempercayai Studio Foto Cihuy! 🙏
Kami siap mengabadikan momen berharga Anda! 📸✨
```

## Technical Details

### **BookingApprovalController Methods:**

-   `approve()`: Approve booking dan generate WhatsApp message
-   `reject()`: Reject booking dengan alasan
-   `getApprovalWhatsAppUrl()`: Generate WhatsApp URL untuk approval

### **WhatsAppService Updates:**

-   `generateApprovalMessage()`: Format pesan approval untuk customer
-   Integration dengan existing WhatsApp service

### **Frontend Features:**

-   **Real-time Updates**: Auto refresh data setelah action
-   **Modal Forms**: Form approval/rejection dalam modal
-   **Success Notifications**: Notifikasi sukses dengan WhatsApp link
-   **Responsive Design**: Bekerja di desktop dan mobile

## Admin Panel Features

### **Statistics Cards:**

-   **Pending**: Jumlah booking yang menunggu approval
-   **Approved**: Jumlah booking yang sudah disetujui
-   **Rejected**: Jumlah booking yang ditolak
-   **Total**: Total semua booking

### **Bookings Table:**

-   **ID**: Nomor booking
-   **Customer**: Nama dan nomor telepon
-   **Layanan**: Jenis layanan yang dipesan
-   **Tanggal Acara**: Tanggal acara customer
-   **Status**: Status booking dengan badge warna
-   **Waktu Booking**: Kapan booking dibuat
-   **Actions**: Tombol approve/reject/whatsapp

### **Action Buttons:**

-   **Approve** (hijau): Untuk booking pending
-   **Reject** (merah): Untuk booking pending
-   **WhatsApp** (hijau): Untuk booking approved

## Error Handling

### **Validation:**

-   Admin notes untuk rejection wajib diisi
-   CSRF protection untuk semua form
-   Input validation untuk semua field

### **Error Responses:**

-   JSON response untuk API errors
-   User-friendly error messages
-   Logging untuk debugging

### **Fallback:**

-   Jika WhatsApp gagal, booking tetap tersimpan
-   Error di-log untuk monitoring
-   Graceful error handling di frontend

## Benefits

### **Untuk Admin:**

-   ✅ **Efficient Management**: Manage booking dalam satu tempat
-   ✅ **Quick Approval**: Approve/reject dengan satu klik
-   ✅ **Professional Communication**: Pesan WhatsApp terformat rapi
-   ✅ **Real-time Monitoring**: Lihat status booking real-time

### **Untuk Customer:**

-   ✅ **Fast Response**: Dapat konfirmasi approval cepat
-   ✅ **Clear Information**: Info lengkap tentang booking
-   ✅ **Professional Service**: Komunikasi yang profesional
-   ✅ **Transparent Process**: Proses yang transparan

### **Untuk Bisnis:**

-   ✅ **Improved Efficiency**: Proses approval lebih efisien
-   ✅ **Better Customer Experience**: Response time lebih cepat
-   ✅ **Professional Image**: Komunikasi yang profesional
-   ✅ **Data Tracking**: Tracking approval process

## Security Features

### **CSRF Protection:**

-   Semua form dilindungi CSRF token
-   Validation di backend dan frontend

### **Input Validation:**

-   Sanitization untuk semua input
-   Length limits untuk text fields
-   Required field validation

### **Access Control:**

-   Admin panel bisa ditambahkan authentication
-   API endpoints bisa ditambahkan middleware

## Future Enhancements

### **Planned Features:**

-   [ ] **Authentication**: Login system untuk admin
-   [ ] **Email Notifications**: Email notification untuk approval
-   [ ] **Bulk Actions**: Approve/reject multiple bookings
-   [ ] **Advanced Filtering**: Filter booking by date, service, etc.
-   [ ] **Export Data**: Export booking data ke Excel/PDF

### **Advanced Features:**

-   [ ] **Auto-approval**: Auto approve untuk booking tertentu
-   [ ] **SLA Tracking**: Track response time untuk approval
-   [ ] **Analytics Dashboard**: Analytics untuk booking trends
-   [ ] **Mobile App**: Mobile app untuk admin
-   [ ] **Integration**: Integration dengan payment gateway

## Troubleshooting

### **Common Issues:**

#### **Booking tidak muncul di admin panel:**

-   Check database connection
-   Verify API endpoint `/api/bookings`
-   Check browser console untuk errors

#### **Approve/Reject tidak berfungsi:**

-   Check CSRF token
-   Verify route permissions
-   Check server logs

#### **WhatsApp link tidak terbuka:**

-   Check nomor WhatsApp di WhatsAppService
-   Verify URL encoding
-   Test di browser yang berbeda

### **Debug Steps:**

1. Check browser console untuk JavaScript errors
2. Check Laravel logs di `storage/logs/laravel.log`
3. Verify database data
4. Test API endpoints dengan Postman

## Support

Untuk bantuan teknis:

-   Check logs di `storage/logs/laravel.log`
-   Verify database schema
-   Test dengan data sample
-   Check browser developer tools

---

**Studio Foto Cihuy** - Booking Approval System v1.0
_Mengabadikan momen berharga dengan teknologi terdepan_ 📸✨
