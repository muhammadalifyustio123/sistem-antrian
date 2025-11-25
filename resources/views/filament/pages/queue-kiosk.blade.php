<div class="flex flex-col flex-grow">
    <!-- Notifikasi Status Cetak -->
    <div id="print-status" class="fixed top-4 right-4 bg-blue-500 text-white px-4 py-2 rounded-lg shadow-lg hidden z-50 transition-opacity duration-300">
        <div class="flex items-center gap-2">
            <svg id="print-spinner" class="animate-spin h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
            </svg>
            <span id="print-message">Sedang mencetak antrian...</span>
        </div>
    </div>

    <div class="flex flex-col flex-grow justify-center items-center h-full">
        <div class="grid grid-cols-2 gap-4">
            @foreach($services as $service)
                <button 
                    wire:click="print({{ $service->id }})" 
                    class="bg-red-500 hover:bg-red-600 text-white text-2xl font-bold py-8 px-16 shadow-lg 
                           transform transition-all duration-200 ease-in-out 
                           hover:scale-105 active:scale-95"
                >
                    {{ $service->name }}
                </button>
            @endforeach
        </div>
    </div>
</div>

@push('scripts')
<script>
document.addEventListener('livewire:initialized', () => {
    const printStatus = document.getElementById('print-status');
    const printMessage = document.getElementById('print-message');
    const printSpinner = document.getElementById('print-spinner');

    // Fungsi untuk menampilkan notifikasi
    const showNotification = (message, type = 'info') => {
        printMessage.textContent = message;
        printStatus.classList.remove('hidden');
        printStatus.classList.remove('bg-red-500', 'bg-green-500', 'bg-blue-500');
        
        switch(type) {
            case 'error':
                printStatus.classList.add('bg-red-500');
                printSpinner.classList.add('hidden');
                break;
            case 'success':
                printStatus.classList.add('bg-green-500');
                printSpinner.classList.add('hidden');
                break;
            default:
                printStatus.classList.add('bg-blue-500');
                printSpinner.classList.remove('hidden');
        }
    };

    // Fungsi untuk menyembunyikan notifikasi
    const hideNotification = () => {
        printStatus.classList.add('hidden');
    };

    Livewire.on("print-start", async (text) => {
        // Langsung tampilkan notifikasi saat event diterima
        showNotification('Menyambungkan ke printer...');
        
        try {
            // Proses sambungkan printer
            if (!window.connectedPrinter) {
                window.connectedPrinter = await getPrinter();
                showNotification('Printer terhubung, mulai mencetak...');
            } else {
                showNotification('Mulai mencetak antrian...');
            }
            
            // Proses cetak
            await printThermal(text);
            
            // Notifikasi sukses
            showNotification('Cetak berhasil!', 'success');
            
        } catch (error) {
            console.error('Gagal mencetak:', error);
            showNotification(`Gagal mencetak: ${error.message}`, 'error');
        } finally {
            // Sembunyikan notifikasi setelah 3 detik
            setTimeout(hideNotification, 3000);
        }
    });

    // Otomatis sambungkan printer saat halaman dimuat
    (async () => {
        try {
            window.connectedPrinter = await getPrinter();
            console.log('Printer otomatis tersambung');
        } catch (error) {
            console.error('Gagal sambungkan printer:', error);
        }
    })();
});
</script>
@endpush

@push('styles')
<style>
    /* Animasi spinner */
    .animate-spin {
        animation: spin 1s linear infinite;
    }
    @keyframes spin {
        from { transform: rotate(0deg); }
        to { transform: rotate(360deg); }
    }
    
    /* Transisi halus untuk notifikasi */
    #print-status {
        transition: opacity 0.3s ease, transform 0.3s ease;
    }
    #print-status.hidden {
        opacity: 0;
        transform: translateY(-20px);
    }
</style>
@endpush