<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Admin - Manage Bookings</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="min-h-screen">
        <!-- Header -->
        <header class="bg-white shadow-sm border-b">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between items-center py-4">
                    <div class="flex items-center">
                        <h1 class="text-2xl font-bold text-gray-900">Admin Panel</h1>
                        <span class="ml-2 px-2 py-1 bg-blue-100 text-blue-800 text-xs rounded-full">Bookings</span>
                    </div>
                    <div class="flex items-center space-x-4">
                        <a href="/admin" class="text-gray-600 hover:text-gray-900">
                            <i class="fas fa-tachometer-alt"></i> Dashboard
                        </a>
                        <a href="/" class="text-gray-600 hover:text-gray-900">
                            <i class="fas fa-home"></i> Website
                        </a>
                    </div>
                </div>
            </div>
        </header>

        <!-- Main Content -->
        <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
            <!-- Stats Cards -->
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
                <div class="bg-white rounded-lg shadow p-6">
                    <div class="flex items-center">
                        <div class="p-2 bg-yellow-100 rounded-lg">
                            <i class="fas fa-clock text-yellow-600"></i>
                        </div>
                        <div class="ml-4">
                            <p class="text-sm font-medium text-gray-600">Pending</p>
                            <p class="text-2xl font-semibold text-gray-900" id="pending-count">0</p>
                        </div>
                    </div>
                </div>
                
                <div class="bg-white rounded-lg shadow p-6">
                    <div class="flex items-center">
                        <div class="p-2 bg-green-100 rounded-lg">
                            <i class="fas fa-check-circle text-green-600"></i>
                        </div>
                        <div class="ml-4">
                            <p class="text-sm font-medium text-gray-600">Approved</p>
                            <p class="text-2xl font-semibold text-gray-900" id="approved-count">0</p>
                        </div>
                    </div>
                </div>
                
                <div class="bg-white rounded-lg shadow p-6">
                    <div class="flex items-center">
                        <div class="p-2 bg-red-100 rounded-lg">
                            <i class="fas fa-times-circle text-red-600"></i>
                        </div>
                        <div class="ml-4">
                            <p class="text-sm font-medium text-gray-600">Rejected</p>
                            <p class="text-2xl font-semibold text-gray-900" id="rejected-count">0</p>
                        </div>
                    </div>
                </div>
                
                <div class="bg-white rounded-lg shadow p-6">
                    <div class="flex items-center">
                        <div class="p-2 bg-blue-100 rounded-lg">
                            <i class="fas fa-calendar-check text-blue-600"></i>
                        </div>
                        <div class="ml-4">
                            <p class="text-sm font-medium text-gray-600">Total</p>
                            <p class="text-2xl font-semibold text-gray-900" id="total-count">0</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bookings Table -->
            <div class="bg-white shadow rounded-lg">
                <div class="px-6 py-4 border-b border-gray-200">
                    <h2 class="text-lg font-medium text-gray-900">Daftar Bookings</h2>
                </div>
                
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Customer</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Layanan</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Tanggal Acara</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Waktu Booking</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                            </tr>
                        </thead>
                        <tbody id="bookings-table" class="bg-white divide-y divide-gray-200">
                            <!-- Bookings will be loaded here -->
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
    </div>

    <!-- Approval Modal -->
    <div id="approval-modal" class="fixed inset-0 bg-gray-600 bg-opacity-50 hidden z-50">
        <div class="flex items-center justify-center min-h-screen p-4">
            <div class="bg-white rounded-lg shadow-xl max-w-md w-full">
                <div class="px-6 py-4 border-b border-gray-200">
                    <h3 class="text-lg font-medium text-gray-900">Approve Booking</h3>
                </div>
                <form id="approval-form">
                    <div class="px-6 py-4">
                        <p class="text-sm text-gray-600 mb-4">Apakah Anda yakin ingin menyetujui booking ini? Pesan konfirmasi akan dikirim ke customer via WhatsApp.</p>
                        <div>
                            <label for="admin_notes" class="block text-sm font-medium text-gray-700 mb-2">Catatan Admin (Opsional)</label>
                            <textarea id="admin_notes" name="admin_notes" rows="3" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Tambahkan catatan untuk customer..."></textarea>
                        </div>
                    </div>
                    <div class="px-6 py-4 bg-gray-50 flex justify-end space-x-3">
                        <button type="button" id="cancel-approval" class="px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-md hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-blue-500">
                            Batal
                        </button>
                        <button type="submit" class="px-4 py-2 text-sm font-medium text-white bg-green-600 border border-transparent rounded-md hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500">
                            <i class="fas fa-check mr-2"></i>Approve
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Rejection Modal -->
    <div id="rejection-modal" class="fixed inset-0 bg-gray-600 bg-opacity-50 hidden z-50">
        <div class="flex items-center justify-center min-h-screen p-4">
            <div class="bg-white rounded-lg shadow-xl max-w-md w-full">
                <div class="px-6 py-4 border-b border-gray-200">
                    <h3 class="text-lg font-medium text-gray-900">Reject Booking</h3>
                </div>
                <form id="rejection-form">
                    <div class="px-6 py-4">
                        <p class="text-sm text-gray-600 mb-4">Apakah Anda yakin ingin menolak booking ini?</p>
                        <div>
                            <label for="rejection_notes" class="block text-sm font-medium text-gray-700 mb-2">Alasan Penolakan</label>
                            <textarea id="rejection_notes" name="admin_notes" rows="3" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Berikan alasan penolakan..." required></textarea>
                        </div>
                    </div>
                    <div class="px-6 py-4 bg-gray-50 flex justify-end space-x-3">
                        <button type="button" id="cancel-rejection" class="px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-md hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-blue-500">
                            Batal
                        </button>
                        <button type="submit" class="px-4 py-2 text-sm font-medium text-white bg-red-600 border border-transparent rounded-md hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500">
                            <i class="fas fa-times mr-2"></i>Reject
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Success Modal -->
    <div id="success-modal" class="fixed inset-0 bg-gray-600 bg-opacity-50 hidden z-50">
        <div class="flex items-center justify-center min-h-screen p-4">
            <div class="bg-white rounded-lg shadow-xl max-w-md w-full">
                <div class="px-6 py-4 border-b border-gray-200">
                    <h3 class="text-lg font-medium text-gray-900">Success!</h3>
                </div>
                <div class="px-6 py-4">
                    <p id="success-message" class="text-sm text-gray-600 mb-4"></p>
                    <div id="whatsapp-button" class="hidden">
                        <a id="whatsapp-link" href="#" target="_blank" class="inline-flex items-center px-4 py-2 bg-green-600 text-white rounded-md hover:bg-green-700">
                            <i class="fab fa-whatsapp mr-2"></i>Kirim WhatsApp
                        </a>
                    </div>
                </div>
                <div class="px-6 py-4 bg-gray-50 flex justify-end">
                    <button type="button" id="close-success" class="px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-md hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-blue-500">
                        Tutup
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script>
        let currentBookingId = null;
        
        // Load bookings on page load
        document.addEventListener('DOMContentLoaded', function() {
            loadBookings();
        });
        
        // Load bookings from API
        async function loadBookings() {
            try {
                const response = await fetch('/api/bookings');
                const bookings = await response.json();
                
                updateStats(bookings);
                renderBookings(bookings);
            } catch (error) {
                console.error('Error loading bookings:', error);
            }
        }
        
        // Update statistics
        function updateStats(bookings) {
            const stats = {
                pending: bookings.filter(b => b.status === 'pending').length,
                approved: bookings.filter(b => b.status === 'approved').length,
                rejected: bookings.filter(b => b.status === 'rejected').length,
                total: bookings.length
            };
            
            document.getElementById('pending-count').textContent = stats.pending;
            document.getElementById('approved-count').textContent = stats.approved;
            document.getElementById('rejected-count').textContent = stats.rejected;
            document.getElementById('total-count').textContent = stats.total;
        }
        
        // Render bookings table
        function renderBookings(bookings) {
            const tbody = document.getElementById('bookings-table');
            tbody.innerHTML = '';
            
            bookings.forEach(booking => {
                const row = document.createElement('tr');
                row.innerHTML = `
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">#${booking.id}</td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm font-medium text-gray-900">${booking.full_name}</div>
                        <div class="text-sm text-gray-500">${booking.phone}</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">${booking.service_type}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">${booking.event_date ? new Date(booking.event_date).toLocaleDateString('id-ID') : '-'}</td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full ${getStatusClass(booking.status)}">
                            ${getStatusText(booking.status)}
                        </span>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">${new Date(booking.created_at).toLocaleString('id-ID')}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                        ${getActionButtons(booking)}
                    </td>
                `;
                tbody.appendChild(row);
            });
        }
        
        // Get status CSS class
        function getStatusClass(status) {
            switch(status) {
                case 'pending': return 'bg-yellow-100 text-yellow-800';
                case 'approved': return 'bg-green-100 text-green-800';
                case 'rejected': return 'bg-red-100 text-red-800';
                case 'completed': return 'bg-blue-100 text-blue-800';
                default: return 'bg-gray-100 text-gray-800';
            }
        }
        
        // Get status text
        function getStatusText(status) {
            switch(status) {
                case 'pending': return 'Pending';
                case 'approved': return 'Approved';
                case 'rejected': return 'Rejected';
                case 'completed': return 'Completed';
                default: return 'Unknown';
            }
        }
        
        // Get action buttons
        function getActionButtons(booking) {
            if (booking.status === 'pending') {
                return `
                    <button onclick="openApprovalModal(${booking.id})" class="text-green-600 hover:text-green-900 mr-3">
                        <i class="fas fa-check"></i> Approve
                    </button>
                    <button onclick="openRejectionModal(${booking.id})" class="text-red-600 hover:text-red-900">
                        <i class="fas fa-times"></i> Reject
                    </button>
                `;
            } else if (booking.status === 'approved') {
                return `
                    <button onclick="sendApprovalWhatsApp(${booking.id})" class="text-green-600 hover:text-green-900">
                        <i class="fab fa-whatsapp"></i> WhatsApp
                    </button>
                `;
            }
            return '-';
        }
        
        // Open approval modal
        function openApprovalModal(bookingId) {
            currentBookingId = bookingId;
            document.getElementById('approval-modal').classList.remove('hidden');
        }
        
        // Open rejection modal
        function openRejectionModal(bookingId) {
            currentBookingId = bookingId;
            document.getElementById('rejection-modal').classList.remove('hidden');
        }
        
        // Close modals
        function closeModals() {
            document.getElementById('approval-modal').classList.add('hidden');
            document.getElementById('rejection-modal').classList.add('hidden');
            document.getElementById('success-modal').classList.add('hidden');
            currentBookingId = null;
        }
        
        // Handle approval form submission
        document.getElementById('approval-form').addEventListener('submit', async function(e) {
            e.preventDefault();
            
            const formData = new FormData(this);
            const adminNotes = formData.get('admin_notes');
            
            try {
                const response = await fetch(`/bookings/${currentBookingId}/approve`, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    },
                    body: JSON.stringify({ admin_notes: adminNotes })
                });
                
                const result = await response.json();
                
                if (result.success) {
                    closeModals();
                    showSuccessModal('Booking berhasil disetujui!', result.whatsapp_url);
                    loadBookings(); // Reload bookings
                } else {
                    alert('Error: ' + result.message);
                }
            } catch (error) {
                console.error('Error approving booking:', error);
                alert('Terjadi kesalahan saat menyetujui booking');
            }
        });
        
        // Handle rejection form submission
        document.getElementById('rejection-form').addEventListener('submit', async function(e) {
            e.preventDefault();
            
            const formData = new FormData(this);
            const adminNotes = formData.get('admin_notes');
            
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
                
                if (result.success) {
                    closeModals();
                    showSuccessModal('Booking berhasil ditolak!');
                    loadBookings(); // Reload bookings
                } else {
                    alert('Error: ' + result.message);
                }
            } catch (error) {
                console.error('Error rejecting booking:', error);
                alert('Terjadi kesalahan saat menolak booking');
            }
        });
        
        // Send approval WhatsApp
        async function sendApprovalWhatsApp(bookingId) {
            try {
                const response = await fetch(`/bookings/${bookingId}/whatsapp/approval`);
                const whatsappUrl = await response.text();
                window.open(whatsappUrl, '_blank');
            } catch (error) {
                console.error('Error getting WhatsApp URL:', error);
                alert('Terjadi kesalahan saat membuka WhatsApp');
            }
        }
        
        // Show success modal
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
        
        // Event listeners for modal close buttons
        document.getElementById('cancel-approval').addEventListener('click', closeModals);
        document.getElementById('cancel-rejection').addEventListener('click', closeModals);
        document.getElementById('close-success').addEventListener('click', closeModals);
        
        // Close modals when clicking outside
        document.getElementById('approval-modal').addEventListener('click', function(e) {
            if (e.target === this) closeModals();
        });
        
        document.getElementById('rejection-modal').addEventListener('click', function(e) {
            if (e.target === this) closeModals();
        });
        
        document.getElementById('success-modal').addEventListener('click', function(e) {
            if (e.target === this) closeModals();
        });
    </script>
</body>
</html>
