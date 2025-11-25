<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sistem Antrian Klinik</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <style>
        .animate-float {
            animation: float 4s ease-in-out infinite;
        }

        @keyframes float {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-10px);
            }
        }

        /* Background bubbles */
        .bubbles {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 0;
            overflow: hidden;
            pointer-events: none;
        }

        .bubble {
            position: absolute;
            bottom: -150px;
            background: rgba(255, 255, 255, 0.3);
            border-radius: 50%;
            animation: rise 20s infinite ease-in;
        }

        @keyframes rise {
            0% {
                transform: translateY(0) scale(1);
                opacity: 0.3;
            }

            100% {
                transform: translateY(-1000px) scale(1.2);
                opacity: 0;
            }
        }
    </style>
</head>

<body class="bg-gray-50 text-gray-800 relative">
    <!-- Floating Bubbles Background -->
    <div class="bubbles">
        <div class="bubble w-12 h-12 left-[5%] animate-[rise_25s_linear_infinite] delay-[1s]"></div>
        <div class="bubble w-8 h-8 left-[15%] animate-[rise_18s_linear_infinite] delay-[2s]"></div>
        <div class="bubble w-16 h-16 left-[30%] animate-[rise_22s_linear_infinite] delay-[4s]"></div>
        <div class="bubble w-10 h-10 left-[50%] animate-[rise_20s_linear_infinite] delay-[3s]"></div>
        <div class="bubble w-6 h-6 left-[70%] animate-[rise_26s_linear_infinite] delay-[5s]"></div>
        <div class="bubble w-14 h-14 left-[85%] animate-[rise_19s_linear_infinite] delay-[1s]"></div>
    </div>

    {{-- Header --}}
<header class="bg-white shadow sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
        <h1 class="text-2xl font-bold text-blue-700">Sistem Antrian</h1>
        <a href="/admin/login" class="hidden sm:inline-block bg-blue-600 hover:bg-blue-700 text-white text-sm font-medium py-2 px-4 rounded transition duration-200">
            Login
        </a>
    </div>
</header>


    {{-- Hero Section --}}
    <section class="relative overflow-hidden bg-gradient-to-br from-blue-100 via-white to-blue-50 py-28 z-10">
        <div class="max-w-7xl mx-auto px-6 grid lg:grid-cols-2 gap-12 items-center">
            <div data-aos="fade-right">
                <h2 class="text-5xl font-extrabold leading-tight text-blue-900 mb-6">
                    Antrian Digital. <br /> Cepat, Nyaman, dan Modern.
                </h2>
                <p class="text-gray-700 text-lg mb-6">
                    Dengan sistem ini, proses antrian di instansi Anda jadi lebih efisien, bebas ribet, dan bisa dipantau langsung secara real-time oleh pasien.
                </p>

                <div class="space-y-3 mb-6">
                    <div class="flex items-center gap-3">
                        <div class="w-4 h-4 rounded-full bg-green-500 animate-ping"></div>
                        <span class="text-gray-600">Pemanggilan otomatis</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <div class="w-4 h-4 rounded-full bg-yellow-400 animate-ping"></div>
                        <span class="text-gray-600">Notifikasi real-time</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <div class="w-4 h-4 rounded-full bg-blue-400 animate-ping"></div>
                        <span class="text-gray-600">QR Code tracking</span>
                    </div>
                </div>

                <a href="#galeri" class="inline-block bg-blue-700 text-white text-lg px-6 py-3 rounded-lg shadow hover:bg-blue-800 transition">
                    Lihat Tampilan Sistem
                </a>
            </div>

            <div class="relative flex justify-center" data-aos="fade-left">
    <!-- Animated mock system loading -->
    <div class="w-full max-w-md p-8 bg-white rounded-xl shadow-lg border border-blue-200 relative z-10 animate-pulse space-y-4">
        <div class="h-4 bg-blue-200 rounded w-3/4"></div>
        <div class="h-4 bg-blue-100 rounded w-5/6"></div>
        <div class="h-4 bg-blue-200 rounded w-2/3"></div>
        <div class="flex space-x-2 mt-4">
            <div class="w-10 h-10 bg-blue-300 rounded-full animate-bounce"></div>
            <div class="w-10 h-10 bg-blue-400 rounded-full animate-bounce delay-150"></div>
            <div class="w-10 h-10 bg-blue-500 rounded-full animate-bounce delay-300"></div>
        </div>
    </div>

    <!-- Blur background effect -->
    <div class="absolute -top-10 -right-10 w-48 h-48 bg-blue-300 rounded-full opacity-20 blur-3xl z-0"></div>
</div>

        </div>

        {{-- Wave --}}
        <svg class="absolute bottom-0 left-0 w-full z-10" viewBox="0 0 1440 80" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill="#fff" d="M0,32L80,26.7C160,21,320,11,480,16C640,21,800,43,960,58.7C1120,75,1280,85,1360,90.7L1440,96V160H0Z"></path>
        </svg>
    </section>

    {{-- Fitur Unggulan --}}
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-6 text-center">
            <h3 class="text-3xl font-bold mb-12 text-gray-800" data-aos="zoom-in">Fitur Unggulan</h3>
            <div class="grid md:grid-cols-3 gap-10">
                <div data-aos="fade-up" class="p-6 bg-gray-100 rounded shadow hover:shadow-md transition">
                    <img src="https://cdn-icons-png.flaticon.com/512/1828/1828919.png" class="w-12 mx-auto mb-4" />
                    <h4 class="text-xl font-semibold mb-2">Cetak Antrian</h4>
                    <p class="text-gray-600">Pilih layanan dan cetak tiket otomatis lewat printer termal.</p>
                </div>
                <div data-aos="fade-up" data-aos-delay="100" class="p-6 bg-gray-100 rounded shadow hover:shadow-md transition">
                    <img src="https://cdn-icons-png.flaticon.com/512/3062/3062634.png" class="w-12 mx-auto mb-4" />
                    <h4 class="text-xl font-semibold mb-2">QR Code Tracking</h4>
                    <p class="text-gray-600">Pantau status antrian melalui QR code yang tercetak di tiket.</p>
                </div>
                <div data-aos="fade-up" data-aos-delay="200" class="p-6 bg-gray-100 rounded shadow hover:shadow-md transition">
                    <img src="https://cdn-icons-png.flaticon.com/512/983/983803.png" class="w-12 mx-auto mb-4" />
                    <h4 class="text-xl font-semibold mb-2">Notifikasi Browser</h4>
                    <p class="text-gray-600">Tampilkan info pemanggilan langsung di layar pengunjung.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- Tampilan Sistem --}}
    <section id="galeri" class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-6">
            <h3 class="text-3xl font-bold text-center text-gray-800 mb-10" data-aos="fade-up">Tampilan Sistem</h3>
            <div class="grid md:grid-cols-3 gap-6" data-aos="fade-up" data-aos-delay="100">

                <div class="bg-white rounded-lg overflow-hidden shadow hover:shadow-lg transition" data-aos="fade-up">
                    <video controls class="w-full h-56 object-cover">
                        <source src="/assets/video/cetak.mp4" type="video/mp4">
                        Browser Anda tidak mendukung video.
                    </video>
                    <div class="p-4 text-center">
                        <h4 class="font-semibold text-lg text-blue-700">Tampilan Kiosk</h4>
                        <p class="text-sm text-gray-600 mt-2">Layar untuk memilih layanan & mencetak antrian.</p>
                    </div>
                </div>


                <div class="bg-white rounded-lg overflow-hidden shadow hover:shadow-lg transition" data-aos="fade-up">
                    <video controls class="w-full h-56 object-cover">
                        <source src="/assets/video/pemanggilan.mp4" type="video/mp4">
                        Browser Anda tidak mendukung video.
                    </video>
                    <div class="p-4 text-center">
                        <h4 class="font-semibold text-lg text-blue-700">Tampilan Pemanggilan</h4>
                        <p class="text-sm text-gray-600 mt-2">Layar publik menampilkan nomor yang dipanggil.</p>
                    </div>
                </div>

                <div class="bg-white rounded-lg overflow-hidden shadow hover:shadow-lg transition" data-aos="fade-up">
                    <video controls class="w-full h-56 object-cover">
                        <source src="/assets/video/QrCode.mp4" type="video/mp4">
                        Browser Anda tidak mendukung video.
                    </video>
                    <div class="p-4 text-center">
                        <h4 class="font-semibold text-lg text-blue-700">QR - Code Tracking</h4>
                        <p class="text-sm text-gray-600 mt-2">Pemantauan antrian secara real-time dengan melakukan scan barcode.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- CTA --}}
    <section class="py-16 bg-blue-600 text-white text-center" data-aos="fade-up">
        <h2 class="text-3xl font-bold mb-4">Ingin Terapkan Sistem Ini?</h2>
        <p class="text-lg mb-6">Kami siap bantu instansi Anda mengelola antrian dengan sistem digital.</p>
        <a href="https://wa.me/6285763332159" target="_blank" class="inline-block bg-white text-blue-700 px-6 py-3 rounded-lg font-semibold hover:bg-gray-100 transition">
            Hubungi Tim Developer
        </a>
    </section>

    {{-- Footer --}}
    <footer class="bg-gray-200 text-center py-4 text-sm text-gray-600">
        &copy; {{ now()->year }} Sistem Antrian Klinik. Dibuat oleh Tim Developer WOKA.
    </footer>

    {{-- AOS --}}
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>