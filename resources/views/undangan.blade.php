<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Undangan Pernikahan Digital - Hadis & Nunu</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Playfair+Display:ital,wght@0,400;0,600;0,700;1,400&family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        brandRed: {
                            50: '#fff1f2',
                            100: '#ffe4e6',
                            600: '#e11d48',
                            800: '#9f1239',
                            900: '#700c25',
                            dark: '#2a020c',
                        },
                        brandGold: {
                            light: '#fef3c7',
                            DEFAULT: '#d4af37',
                            dark: '#b8860b',
                            accent: '#f59e0b'
                        },
                        cream: '#fdfbf7'
                    },
                    fontFamily: {
                        serif: ['Playfair Display', 'serif'],
                        script: ['Great Vibes', 'cursive'],
                        sans: ['Plus Jakarta Sans', 'sans-serif'],
                    }
                }
            }
        }
    </script>

    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: #1a0108;
            color: #2b2b2b;
            overflow-x: hidden;
            -webkit-tap-highlight-color: transparent;
        }

        .gold-gradient-text {
            background: linear-gradient(135deg, #FFF0B3 0%, #E2C158 40%, #B8860B 80%, #F5D061 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .gold-border-glow {
            box-shadow: 0 0 15px rgba(212, 175, 55, 0.35), inset 0 0 10px rgba(212, 175, 55, 0.2);
        }

        .glass-dark {
            background: rgba(35, 3, 11, 0.82);
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
            border: 1px solid rgba(212, 175, 55, 0.35);
        }

        .glass-card {
            background: rgba(255, 255, 255, 0.94);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(212, 175, 55, 0.3);
        }

        /* Ken Burns Slow Zoom Animation */
        @keyframes kenburns {
            0% { transform: scale(1); }
            50% { transform: scale(1.08); }
            100% { transform: scale(1); }
        }
        .animate-kenburns {
            animation: kenburns 20s infinite alternate ease-in-out;
        }

        /* Pulse Ring Animation */
        @keyframes ringPulse {
            0% { box-shadow: 0 0 0 0 rgba(212, 175, 55, 0.6); }
            70% { box-shadow: 0 0 0 15px rgba(212, 175, 55, 0); }
            100% { box-shadow: 0 0 0 0 rgba(212, 175, 55, 0); }
        }
        .animate-ring-pulse {
            animation: ringPulse 2s infinite;
        }

        /* Button Golden Glow Pulse */
        @keyframes btnGlow {
            0%, 100% { box-shadow: 0 0 15px rgba(212, 175, 55, 0.5), 0 4px 20px rgba(0,0,0,0.4); }
            50% { box-shadow: 0 0 25px rgba(212, 175, 55, 0.9), 0 4px 25px rgba(212, 175, 55, 0.3); }
        }
        .animate-btn-glow {
            animation: btnGlow 3s infinite ease-in-out;
        }

        /* Float Animation */
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-8px); }
        }
        .animate-float {
            animation: float 4s ease-in-out infinite;
        }

        /* Canvas Overlay */
        #petalCanvas, #sparkleCanvas {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: 40;
        }

        /* Scroll reveal class */
        .reveal-on-scroll {
    opacity: 0;
    transform: translateY(70px) scale(0.95);
    transition:
        opacity 1s ease,
        transform 1s cubic-bezier(.22,1,.36,1);
}

.reveal-on-scroll.active {
    opacity: 1;
    transform: translateY(0) scale(1);
}

        /* Mobile Frame Container */
       .mobile-shell {
    width: 100%;
    max-width: 430px;
    min-height: 100vh;
    margin: 0 auto;
    position: relative;
    background: #fdfbf7;
    overflow: hidden;
}

/* Tampilan seperti frame HP di desktop */
@media (min-width: 640px) {
    .mobile-shell {
        min-height: 100vh;
        border-radius: 28px;
        margin-top: 20px;
        margin-bottom: 20px;
        box-shadow:
            0 25px 70px rgba(0, 0, 0, 0.75),
            0 0 0 1px rgba(212, 175, 55, 0.15);
    }
}
        .reveal-on-scroll img{
    transform: scale(1.15);
    transition: transform 1.5s ease;
}

.reveal-on-scroll.active img{
    transform: scale(1);
}
.glass-card{
    transition: .5s;
}

.glass-card:hover{
    transform: translateY(-8px);
}
.fa-solid{
    transition:.4s;
}

.fa-solid:hover{
    transform:rotate(15deg) scale(1.2);
}
.hero-bg{

    animation:
    kenburns 20s infinite alternate ease-in-out,
    floatingHero 8s ease-in-out infinite;

}
@keyframes floatingHero{

    0%{
        transform:scale(1) translateY(0);
    }

    50%{
        transform:scale(1.08) translateY(-15px);
    }

    100%{
        transform:scale(1) translateY(0);
    }

}
    </style>
</head>
<body class="relative min-h-screen text-slate-800 antialiased selection:bg-brandGold selection:text-white bg-black">
    <canvas id="petalCanvas"></canvas>
    <canvas id="sparkleCanvas"></canvas>

    <!-- COVER / WELCOME MODAL OVERLAY -->
<div id="coverOverlay"
    class="fixed inset-0 z-50 flex items-center justify-center bg-black transition-all duration-1000 overflow-hidden">

    <!-- MOBILE COVER -->
    <div class="relative w-[390px] h-[844px] max-w-full overflow-hidden bg-black shadow-2xl rounded-2xl">

        <!-- Background Foto -->
        <div
            class="absolute inset-0 bg-cover bg-center animate-kenburns"
            style="background-image: url('{{ asset('images/fotoawal.jpg') }}');">
        </div>

        <!-- Overlay -->
        <div class="absolute inset-0 bg-black/40"></div>

        <!-- Isi -->
        <div class="relative z-10 h-full flex items-center justify-center px-6">

            <div class="w-full text-center text-white">

                <!-- Icon -->
                <div class="w-14 h-14 mx-auto rounded-full
                    border-2 border-brandGold
                    flex items-center justify-center
                    mb-5
                    bg-black/20
                    backdrop-blur-sm
                    shadow-lg">

                    <i class="fa-solid fa-heart text-xl text-brandGold"></i>

                </div>

                <!-- Judul -->
                <p class="text-[10px] uppercase tracking-[0.35em]
                    text-amber-100 mb-2 font-semibold">
                    Undangan Pernikahan
                </p>

                <h1 class="text-5xl font-script gold-gradient-text
                    drop-shadow-2xl">
                    Hadis & Nunu
                </h1>

                <p class="text-xs font-medium text-white/90
                    mt-2 tracking-wide italic">
                    Minggu, 6 September 2026
                </p>

                <!-- Nama Tamu -->
                <div class="w-full mt-8 py-4 px-5 rounded-2xl
                    bg-black/35
                    backdrop-blur-md
                    border border-brandGold/40">

                    <p class="text-[11px] text-amber-100/80 mb-1">
                        Kepada Yth. Bapak/Ibu/Saudara/i:
                    </p>

                    <p id="guestNameDisplay"
                        class="text-lg font-serif font-bold text-white
                        tracking-wide truncate">
                        Tamu Undangan
                    </p>

                </div>

                <!-- Tombol -->
                <button
                    onclick="openInvitation()"
                    class="mt-6 px-8 py-3.5 rounded-full
                    bg-gradient-to-r from-amber-400 via-brandGold to-amber-600
                    text-brandRed-dark
                    font-bold text-xs
                    tracking-widest uppercase
                    shadow-2xl
                    animate-btn-glow
                    hover:scale-105
                    active:scale-95
                    transition-all duration-300
                    flex items-center justify-center gap-2.5
                    mx-auto">

                    <i class="fa-solid fa-envelope-open text-xs"></i>
                    Buka Undangan

                </button>

            </div>

        </div>

    </div>
</div>

    <!-- AUDIO CONTROLLER & MUSIC BADGE -->
    <div id="musicContainer" class="fixed top-4 right-4 z-40 flex items-center gap-2 hidden">
        <div class="glass-dark px-3 py-1.5 rounded-full border border-brandGold/40 text-[10px] text-amber-200 shadow-xl flex items-center gap-2 max-w-[200px]">
            <span class="relative flex h-2 w-2">
              <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-brandGold opacity-75"></span>
              <span class="relative inline-flex rounded-full h-2 w-2 bg-brandGold"></span>
            </span>
            <span class="truncate font-medium">Aku Memilihmu - Brisia Jodie</span>
        </div>
        <button id="audioToggle" onclick="toggleAudio()" class="w-10 h-10 rounded-full glass-dark text-brandGold border border-brandGold/50 shadow-xl flex items-center justify-center transition-all hover:scale-110 active:scale-90 shrink-0">
            <i id="audioIcon" class="fa-solid fa-compact-disc text-lg"></i>
        </button>
    </div>
  <audio id="bgMusic" preload="auto" loop>
    <source src="{{ asset('audio/prewedding.mp3') }}" type="audio/mpeg">
</audio>

    <!-- MAIN MOBILE SHELL CONTAINER -->
    <main id="mainContent" class="mobile-shell opacity-0 transition-opacity duration-1000 min-h-screen pb-24 shadow-2xl overflow-hidden">

        <!-- HERO SECTION WITH FULL PHOTO BACKGROUND -->
        <section id="home" class="relative min-h-screen flex flex-col items-center justify-center text-center p-6 bg-brandRed-dark text-white overflow-hidden">
            <!-- Full Couple Photo Background -->
            <div class="absolute inset-0 hero-bg bg-cover bg-center"
     style="background-image: url('{{ asset('images/fotodua.jpg') }}');">
</div>
            <div class="absolute inset-0 bg-gradient-to-b from-brandRed-dark/80 via-brandRed-dark/75 to-brandRed-dark"></div>

            <div class="relative z-10 space-y-4 max-w-sm my-auto pt-6">
                <div class="inline-block p-1 border border-brandGold/40 rounded-full mb-1">
                    <div class="px-4 py-1 rounded-full border border-brandGold/60 text-[10px] text-brandGold uppercase tracking-widest font-semibold bg-brandRed-dark/50">
                        Walimatul 'Ursy
                    </div>
                </div>

                <p class="text-[10px] tracking-[0.35em] text-amber-200/90 uppercase font-light">The Wedding Of</p>
                
                <h1 class="text-5xl sm:text-6xl font-script gold-gradient-text py-1 drop-shadow-xl">
                    Hadis & Nunu
                </h1>

                <p class="text-xs font-serif italic text-amber-100/90 tracking-wide px-2 leading-relaxed">
                    "Dan di antara tanda-tanda (kebesaran)-Nya ialah Dia menciptakan pasangan-pasangan untukmu dari jenismu sendiri, agar kamu cenderung dan merasa tenteram kepadanya."
                </p>
                <span class="block text-[10px] font-semibold text-brandGold uppercase tracking-wider">(QS. Ar-Rum: 21)</span>

                <!-- Countdown Timer Card -->
                <div class="pt-4">
                    <p class="text-[10px] uppercase tracking-widest text-amber-200/80 mb-3 font-semibold">Menghitung Hari Bahagia</p>
                    <div class="grid grid-cols-4 gap-2 text-center max-w-xs mx-auto">
                        <div class="glass-dark p-2 rounded-2xl border border-brandGold/30 shadow">
                            <span id="days" class="text-lg sm:text-xl font-bold font-serif text-brandGold">00</span>
                            <span class="block text-[8px] text-amber-100/70 uppercase tracking-wider">Hari</span>
                        </div>
                        <div class="glass-dark p-2 rounded-2xl border border-brandGold/30 shadow">
                            <span id="hours" class="text-lg sm:text-xl font-bold font-serif text-brandGold">00</span>
                            <span class="block text-[8px] text-amber-100/70 uppercase tracking-wider">Jam</span>
                        </div>
                        <div class="glass-dark p-2 rounded-2xl border border-brandGold/30 shadow">
                            <span id="minutes" class="text-lg sm:text-xl font-bold font-serif text-brandGold">00</span>
                            <span class="block text-[8px] text-amber-100/70 uppercase tracking-wider">Menit</span>
                        </div>
                        <div class="glass-dark p-2 rounded-2xl border border-brandGold/30 shadow">
                            <span id="seconds" class="text-lg sm:text-xl font-bold font-serif text-brandGold">00</span>
                            <span class="block text-[8px] text-amber-100/70 uppercase tracking-wider">Detik</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Animated Scroll Down Indicator -->
            <div class="relative z-10 pt-6 pb-2 text-brandGold/80 animate-bounce text-xs flex flex-col items-center gap-1">
                <span class="text-[9px] uppercase tracking-widest font-light">Gulir Ke Bawah</span>
                <i class="fa-solid fa-chevron-down text-xs"></i>
            </div>
        </section>

        <!-- BRIDE & GROOM SECTION -->
        <section id="couple" class="py-16 px-5 relative bg-cream">
            <div class="text-center mb-10 reveal-on-scroll">
                <div class="w-10 h-10 rounded-full bg-brandRed-900/10 text-brandRed-800 flex items-center justify-center mx-auto mb-2">
                    <i class="fa-solid fa-heart-pulse text-lg"></i>
                </div>
                <h2 class="text-2xl sm:text-3xl font-serif text-brandRed-900 font-bold">Mempelai Bahagia</h2>
                <div class="w-12 h-0.5 bg-brandGold mx-auto my-2"></div>
                <p class="text-xs text-slate-600 max-w-xs mx-auto leading-relaxed">
                    Dengan memohon rahmat dan ridho Allah SWT, kami bermaksud menyelenggarakan syukuran pernikahan kami:
                </p>
            </div>

          <div class="space-y-8">

    <!-- Groom Card -->
    <div class="glass-card rounded-3xl p-6 text-center shadow-xl border border-brandGold/30 reveal-on-scroll">

        <div class="relative w-32 h-32 mx-auto mb-4 rounded-full p-1 bg-gradient-to-tr from-brandGold via-amber-200 to-brandRed-800 shadow-lg">

            <div class="w-32 h-32 overflow-hidden rounded-full">
                <img src="{{ asset('images/fotohadis.jpg') }}"
                     alt="Hadis Saputra Bustan"
                     class="w-full h-full object-cover rounded-full">
            </div>

        </div>

        <h3 class="text-xl font-serif font-bold text-brandRed-900">
            Hadis Saputra Bustan
        </h3>

        <p class="text-xs text-brandGold-dark font-semibold mt-0.5">
            Mempelai Pria
        </p>

        <p class="text-xs text-slate-600 mt-3 leading-relaxed">
            Putra kedua dari<br>
            <strong class="text-slate-800 font-semibold">Bpk. Bustan Talib</strong>
            &
            <strong class="text-slate-800 font-semibold">Ibu Asni Kadir</strong>
        </p>

    </div>


    <!-- Decorative Connector -->
    <div class="text-center reveal-on-scroll">
        <span class="text-4xl font-script text-brandGold font-bold drop-shadow">
            &amp;
        </span>
    </div>


    <!-- Bride Card -->
    <div class="glass-card rounded-3xl p-6 text-center shadow-xl border border-brandGold/30 reveal-on-scroll">

        <div class="relative w-32 h-32 mx-auto mb-4 rounded-full p-1 bg-gradient-to-tr from-brandGold via-amber-200 to-brandRed-800 shadow-lg">

            <div class="w-full h-full overflow-hidden rounded-full">
                <img src="{{ asset('images/fotonunu.jpg') }}"
                     alt="Nur Rabiah Yusuf"
                     class="w-full h-full object-cover rounded-full">
            </div>

        </div>

        <h3 class="text-xl font-serif font-bold text-brandRed-900">
            Nur Rabiah Yusuf
        </h3>

        <p class="text-xs text-brandGold-dark font-semibold mt-0.5">
            Mempelai Wanita
        </p>

        <p class="text-xs text-slate-600 mt-3 leading-relaxed">
            Putri bungsu dari<br>
            <strong class="text-slate-800 font-semibold">Bpk.M. Yusuf Bakri</strong>
            &
            <strong class="text-slate-800 font-semibold">Ibu Gusnah Yunus</strong>
        </p>

    </div>

</div>
        </section>

        <!-- EVENT SCHEDULE SECTION -->
        <section id="event" class="py-16 px-5 bg-brandRed-dark text-white relative">
            <div class="text-center mb-10 reveal-on-scroll">
                <i class="fa-solid fa-calendar-check text-2xl text-brandGold mb-2"></i>
                <h2 class="text-2xl sm:text-3xl font-serif text-white font-bold">Rangkaian Acara</h2>
                <div class="w-12 h-0.5 bg-brandGold mx-auto my-2"></div>
                <p class="text-xs text-amber-100/80">Insya Allah acara akan diselenggarakan pada:</p>
            </div>

            <div class="space-y-6">
                <!-- Akad Nikah Card -->
                <div class="glass-dark p-6 rounded-3xl border border-brandGold/40 relative overflow-hidden shadow-xl reveal-on-scroll">
                    <div class="absolute top-0 right-0 bg-gradient-to-l from-brandGold to-amber-500 text-brandRed-dark text-[9px] uppercase font-bold px-3 py-1 rounded-bl-xl tracking-wider">
                        Akad Nikah
                    </div>
                    <h3 class="text-lg font-serif font-bold gold-gradient-text mb-4">Akad Nikah</h3>
                    <div class="space-y-3 text-xs text-amber-100/90">
                        <p class="flex items-center gap-3">
                            <i class="fa-regular fa-calendar text-brandGold text-sm w-4"></i>
                            <span>Sabtu, 5 September 2026</span>
                        </p>
                        <p class="flex items-center gap-3">
                            <i class="fa-regular fa-clock text-brandGold text-sm w-4"></i>
                            <span>10.00 WITA - Selesai</span>
                        </p>
                        <p class="flex items-start gap-3">
                            <i class="fa-solid fa-location-dot text-brandGold text-sm w-4 mt-0.5"></i>
                            <span>
                                <strong class="text-white block font-semibold">Jln Kijang (Masjid Al-Firdaus)</strong>
                            </span>
                        </p>
                    </div>
                </div>

                <!-- Resepsi Card -->
                <div class="glass-dark p-6 rounded-3xl border border-brandGold/40 relative overflow-hidden shadow-xl reveal-on-scroll">
                    <div class="absolute top-0 right-0 bg-gradient-to-l from-brandGold to-amber-500 text-brandRed-dark text-[9px] uppercase font-bold px-3 py-1 rounded-bl-xl tracking-wider">
                        Resepsi
                    </div>
                    <h3 class="text-lg font-serif font-bold gold-gradient-text mb-4">Resepsi Pernikahan</h3>
                    <div class="space-y-3 text-xs text-amber-100/90">
                        <p class="flex items-center gap-3">
                            <i class="fa-regular fa-calendar text-brandGold text-sm w-4"></i>
                            <span>Minggu, 6 September 2026</span>
                        </p>
                        <p class="flex items-center gap-3">
                            <i class="fa-regular fa-clock text-brandGold text-sm w-4"></i>
                            <span>10.00 WITA - Selesai</span>
                        </p>
                        <p class="flex items-start gap-3">
                            <i class="fa-solid fa-location-dot text-brandGold text-sm w-4 mt-0.5"></i>
                            <span>
                                <strong class="text-white block font-semibold">BTN Mario City Blok D 134</strong>
                            </span>
                        </p>
                    </div>
                </div>
            </div>

            <!-- Maps Location Action -->
            <div class="mt-8 text-center reveal-on-scroll">
                <a href="https://maps.app.goo.gl/msMvkSMmCwP17yV78?g_st=ic" target="_blank" class="inline-flex items-center gap-2 px-6 py-3 rounded-full bg-gradient-to-r from-amber-400 via-brandGold to-amber-600 text-brandRed-dark font-bold text-xs tracking-wider uppercase shadow-xl hover:scale-105 active:scale-95 transition">
                    <i class="fa-solid fa-map-location-dot"></i>
                    Petunjuk Lokasi Google Maps
                </a>
            </div>
        </section>

      <!-- GALLERY / MOMENT SECTION -->
<section id="gallery" class="py-16 px-5 bg-cream">

    <div class="text-center mb-10 reveal-on-scroll">
        <i class="fa-solid fa-video text-2xl text-brandRed-800 mb-2"></i>

        <h2 class="text-2xl sm:text-3xl font-serif text-brandRed-900 font-bold">
            Momen Bahagia
        </h2>

        <div class="w-12 h-0.5 bg-brandGold mx-auto my-2"></div>

        <p class="text-xs text-slate-600">
            Dokumentasi kebersamaan Hadis & Nunu
        </p>
    </div>

    <!-- VIDEO MOMEN -->
    <div id="momentVideoContainer" class="reveal-on-scroll">

        <div class="relative overflow-hidden rounded-3xl border border-brandGold/40 shadow-2xl bg-black">

            <video
                id="momentVideo"
                class="w-full h-auto max-h-[600px] object-cover"
                muted
                loop
                playsinline
                preload="metadata"
            >
                <source src="{{ asset('videos/moment.mp4') }}" type="video/mp4">
                Browser Anda tidak mendukung pemutaran video.
            </video>
          
        </div>

        <p class="text-center text-[10px] text-slate-500 mt-3">
            Momen indah Hadis & Nunu ❤️
        </p>

    </div>

</section>

      <!-- RSVP & WISHES SECTION -->
<section id="rsvp" class="py-16 px-5 bg-cream">

    <!-- Judul -->
    <div class="text-center mb-10 reveal-on-scroll">

        <div class="w-10 h-10 rounded-full bg-brandRed-900/10 
                    text-brandRed-800 flex items-center justify-center 
                    mx-auto mb-2">
            <i class="fa-solid fa-envelope-open-text text-lg"></i>
        </div>

        <h2 class="text-2xl sm:text-3xl font-serif 
                   text-brandRed-900 font-bold">
            Konfirmasi Kehadiran
        </h2>

        <div class="w-12 h-0.5 bg-brandGold mx-auto my-2"></div>

        <p class="text-xs text-slate-600 max-w-xs mx-auto leading-relaxed">
            Mohon konfirmasi kehadiran dan berikan ucapan terbaik
            untuk kami.
        </p>

    </div>


    <!-- FORM RSVP -->
    <form id="rsvpForm"
          onsubmit="submitRSVP(event)"
          class="glass-card rounded-3xl p-6 shadow-xl
                 border border-brandGold/30 reveal-on-scroll">

        <!-- Nama -->
        <div class="mb-4">

            <label for="guestNameInput"
                   class="block text-xs font-semibold 
                          text-brandRed-900 mb-2">
                Nama
            </label>

            <input
                type="text"
                id="guestNameInput"
                name="name"
                placeholder="Masukkan nama Anda"
                required
                class="w-full px-4 py-3 rounded-xl
                       border border-amber-200
                       bg-white
                       text-sm text-slate-700
                       outline-none
                       focus:border-brandGold
                       focus:ring-2
                       focus:ring-brandGold/20">
        </div>


        <!-- Kehadiran -->
        <div class="mb-4">

            <label for="attendanceInput"
                   class="block text-xs font-semibold
                          text-brandRed-900 mb-2">
                Konfirmasi Kehadiran
            </label>

            <select
                id="attendanceInput"
                name="attendance"
                required
                class="w-full px-4 py-3 rounded-xl
                       border border-amber-200
                       bg-white
                       text-sm text-slate-700
                       outline-none
                       focus:border-brandGold
                       focus:ring-2
                       focus:ring-brandGold/20">

                <option value="">-- Pilih Kehadiran --</option>
                <option value="Hadir">Hadir</option>
                <option value="Tidak Hadir">Tidak Hadir</option>
                <option value="Ragu-ragu">Ragu-ragu</option>

            </select>

        </div>


        <!-- Jumlah Orang -->
        <div class="mb-4">

            <label for="personCountInput"
                   class="block text-xs font-semibold
                          text-brandRed-900 mb-2">
                Jumlah Tamu
            </label>

            <select
                id="personCountInput"
                name="person_count"
                class="w-full px-4 py-3 rounded-xl
                       border border-amber-200
                       bg-white
                       text-sm text-slate-700
                       outline-none
                       focus:border-brandGold
                       focus:ring-2
                       focus:ring-brandGold/20">

                <option value="1">1 Orang</option>
                <option value="2">2 Orang</option>
                <option value="3">3 Orang</option>
                <option value="4">4 Orang</option>

            </select>

        </div>


        <!-- Ucapan -->
        <div class="mb-5">

            <label for="messageInput"
                   class="block text-xs font-semibold
                          text-brandRed-900 mb-2">
                Ucapan & Doa
            </label>

            <textarea
                id="messageInput"
                name="message"
                rows="4"
                required
                placeholder="Tuliskan ucapan dan doa untuk kami..."
                class="w-full px-4 py-3 rounded-xl
                       border border-amber-200
                       bg-white
                       text-sm text-slate-700
                       outline-none resize-none
                       focus:border-brandGold
                       focus:ring-2
                       focus:ring-brandGold/20"></textarea>

        </div>


        <!-- Tombol -->
        <button
            type="submit"
            class="w-full py-3.5 rounded-xl
                   bg-gradient-to-r
                   from-amber-400
                   via-brandGold
                   to-amber-600
                   text-brandRed-dark
                   font-bold text-xs
                   tracking-widest uppercase
                   shadow-xl
                   hover:scale-[1.02]
                   active:scale-95
                   transition">

            <i class="fa-solid fa-paper-plane mr-2"></i>
            Kirim Ucapan

        </button>

    </form>


    <!-- DAFTAR UCAPAN -->
    <div class="mt-10 reveal-on-scroll">

        <div class="flex items-center justify-between mb-4">

            <h3 class="text-sm font-serif font-bold text-brandRed-900">
                Ucapan dari Sahabat & Keluarga
            </h3>

            <span
                id="wishCount"
                class="text-[10px]
                       bg-brandGold/20
                       text-brandGold-dark
                       px-2.5 py-1
                       rounded-full
                       font-sans font-bold">

                {{ $wishes->count() }} Ucapan

            </span>

        </div>


        <div
            id="wishesContainer"
            class="space-y-3 max-h-80 overflow-y-auto pr-1">

            @forelse($wishes as $wish)

                <div class="glass-card p-4 rounded-2xl
                            border border-amber-200/60
                            text-xs space-y-1 shadow-sm">

                    <div class="flex items-center justify-between">

                        <strong class="text-brandRed-900 font-semibold">
                            {{ $wish->name }}
                        </strong>

                        @if($wish->attendance === 'Hadir')

                            <span class="text-[9px]
                                         bg-emerald-100
                                         text-emerald-800
                                         px-2 py-0.5
                                         rounded-full
                                         font-medium">
                                Hadir
                            </span>

                        @elseif($wish->attendance === 'Tidak Hadir')

                            <span class="text-[9px]
                                         bg-rose-100
                                         text-rose-800
                                         px-2 py-0.5
                                         rounded-full
                                         font-medium">
                                Tidak Hadir
                            </span>

                        @else

                            <span class="text-[9px]
                                         bg-amber-100
                                         text-amber-800
                                         px-2 py-0.5
                                         rounded-full
                                         font-medium">
                                Ragu-ragu
                            </span>

                        @endif

                    </div>

                    <p class="text-slate-600 text-[11px] leading-relaxed">
                        "{{ $wish->message }}"
                    </p>

                </div>

            @empty

                <div
                    class="empty-wish-message text-center
                           py-6 text-xs text-slate-400">

                    Belum ada ucapan.

                </div>

            @endforelse

        </div>

    </div>

</section>

        <!-- DIGITAL GIFT / ENVELOPE SECTION -->
        <section id="gift" class="py-16 px-5 bg-brandRed-dark text-white text-center">
            <div class="reveal-on-scroll">
                <i class="fa-solid fa-gift text-3xl text-brandGold mb-2"></i>
                <h2 class="text-2xl sm:text-3xl font-serif font-bold gold-gradient-text">Kado Digital</h2>
                <div class="w-12 h-0.5 bg-brandGold mx-auto my-2"></div>
                <p class="text-xs text-amber-100/80 max-w-xs mx-auto mb-8">
                    Doa restu Anda merupakan karunia yang sangat berarti bagi kami. Namun jika Anda ingin memberi tanda kasih, Anda dapat menggunakan amplop digital di bawah ini:
                </p>
            </div>

            <div class="space-y-4 max-w-xs mx-auto reveal-on-scroll">
                <!-- BCA Card -->
                <div class="glass-dark p-5 rounded-3xl border border-brandGold/30 text-left space-y-2 relative shadow-xl">
                    <div class="flex justify-between items-center">
                        <span class="font-bold text-base text-brandGold font-serif tracking-wider">BCA</span>
                        <i class="fa-solid fa-credit-card text-amber-200"></i>
                    </div>
                    <p class="text-[10px] text-amber-100/70">Nomor Rekening:</p>
                    <p class="font-mono text-sm sm:text-base font-bold text-white tracking-widest" id="rekBRI">505601007718507</p>
                    <p class="text-[11px] text-amber-200">a.n. Hadis Saputra Bustan</p>
                    <button onclick="copyToClipboard('1234567890', 'BCA')" class="w-full mt-2 py-2 rounded-xl bg-brandGold/20 hover:bg-brandGold/30 border border-brandGold/50 text-brandGold text-xs font-semibold flex items-center justify-center gap-2 transition active:scale-95">
                        <i class="fa-regular fa-copy"></i>
                        Salin No. Rekening
                    </button>
                </div>

                <!-- Mandiri Card -->
                <div class="glass-dark p-5 rounded-3xl border border-brandGold/30 text-left space-y-2 relative shadow-xl">
                    <div class="flex justify-between items-center">
                        <span class="font-bold text-base text-brandGold font-serif tracking-wider">MANDIRI</span>
                        <i class="fa-solid fa-building-columns text-amber-200"></i>
                    </div>
                    <p class="text-[10px] text-amber-100/70">Nomor Rekening:</p>
                    <p class="font-mono text-sm sm:text-base font-bold text-white tracking-widest" id="rekBRI">305401010655500</p>
                    <p class="text-[11px] text-amber-200">a.n. Nur Rabiah Yusuf</p>
                    <button onclick="copyToClipboard('9876543210', 'Mandiri')" class="w-full mt-2 py-2 rounded-xl bg-brandGold/20 hover:bg-brandGold/30 border border-brandGold/50 text-brandGold text-xs font-semibold flex items-center justify-center gap-2 transition active:scale-95">
                        <i class="fa-regular fa-copy"></i>
                        Salin No. Rekening
                    </button>
                </div>
            </div>
        </section>

        <!-- FOOTER SECTION -->
<!-- FOOTER SECTION -->
<!-- FOOTER SECTION -->
<footer class="relative py-14 px-5 bg-brandRed-dark border-t border-brandGold/30 text-center text-white overflow-hidden">

    <!-- Ornamen Background -->
    <div class="absolute top-0 left-1/2 -translate-x-1/2 w-40 h-40 
                bg-brandGold/10 rounded-full blur-3xl pointer-events-none"></div>

    <div class="absolute -left-16 bottom-0 w-32 h-32 
                bg-brandRed-800/30 rounded-full blur-3xl pointer-events-none"></div>

    <div class="absolute -right-16 top-10 w-32 h-32 
                bg-brandGold/10 rounded-full blur-3xl pointer-events-none"></div>


    <!-- Ornamen Atas -->
    <div class="relative z-10 flex items-center justify-center gap-3 mb-6">
        <div class="w-14 h-px bg-gradient-to-r from-transparent to-brandGold"></div>

        <i class="fa-solid fa-heart text-brandGold text-sm"></i>

        <div class="w-14 h-px bg-gradient-to-l from-transparent to-brandGold"></div>
    </div>


    <!-- Foto Couple -->
    <div class="relative z-10 w-32 h-32 mx-auto mb-6">

        <!-- Glow -->
        <div class="absolute inset-0 rounded-full bg-brandGold/20 blur-md"></div>

        <!-- Frame -->
        <div class="relative w-full h-full p-1 rounded-full 
                    bg-gradient-to-br from-brandGold via-amber-200 to-brandGold 
                    shadow-[0_0_25px_rgba(212,175,55,0.35)]">

            <div class="w-full h-full rounded-full overflow-hidden border-2 border-brandRed-dark">
                <img 
                    src="{{ asset('images/fotofooter.jpg') }}"
                    alt="Hadis & Nunu"
                    class="w-full h-full object-cover"
                >
            </div>

        </div>
    </div>


    <!-- Nama -->
    <h2 class="relative z-10 text-4xl font-script gold-gradient-text mb-2">
        Hadis &amp; Nunu
    </h2>


    <!-- Subtitle -->
    <p class="relative z-10 text-[10px] uppercase tracking-[0.3em] 
              text-amber-200/70 mb-5">
        The Wedding Of
    </p>


    <!-- Ornamen -->
    <div class="relative z-10 flex items-center justify-center gap-2 mb-5">
        <span class="w-8 h-px bg-brandGold/50"></span>
        <i class="fa-solid fa-heart text-[9px] text-brandGold"></i>
        <span class="w-8 h-px bg-brandGold/50"></span>
    </div>


    <!-- Ucapan -->
    <p class="relative z-10 max-w-xs mx-auto text-xs leading-relaxed 
              text-amber-100/75 mb-7">
        Terima kasih atas doa, restu, dan kehadiran
        Bapak/Ibu/Saudara/i dalam hari bahagia kami.
    </p>


    <!-- Tanggal -->
    <div class="relative z-10 inline-flex items-center gap-2 
                px-4 py-2 rounded-full 
                border border-brandGold/30 
                bg-brandGold/5 mb-7">

        <i class="fa-regular fa-calendar text-brandGold text-[10px]"></i>

        <span class="text-[9px] tracking-[0.15em] text-amber-100/70">
            5 - 6 SEPTEMBER 2026
        </span>

    </div>


    <!-- Garis -->
    <div class="relative z-10 max-w-xs mx-auto border-t border-brandGold/20 pt-5">

        <p class="text-[8px] text-amber-100/40 uppercase tracking-[0.2em]">
            Digital Wedding Invitation
        </p>

        <p class="text-[9px] text-brandGold/60 mt-1">
            by Ade Putri
        </p>

    </div>


    <!-- Ornamen Bawah -->
    <div class="relative z-10 mt-7 flex items-center justify-center gap-3">

        <div class="w-16 h-px bg-gradient-to-r from-transparent to-brandGold/50"></div>

        <i class="fa-solid fa-leaf text-brandGold/60 text-xs"></i>

        <div class="w-16 h-px bg-gradient-to-l from-transparent to-brandGold/50"></div>

    </div>

</footer>

    </main>

    <!-- FLOATING BOTTOM NAVIGATION BAR -->
    <nav id="floatingNav" class="fixed bottom-4 left-1/2 -translate-x-1/2 z-40 glass-dark rounded-full px-5 py-3 border border-brandGold/40 shadow-2xl flex items-center gap-5 hidden">
        <a href="#home" class="text-amber-200/70 hover:text-brandGold text-base transition" title="Beranda">
            <i class="fa-solid fa-house"></i>
        </a>
        <a href="#couple" class="text-amber-200/70 hover:text-brandGold text-base transition" title="Mempelai">
            <i class="fa-solid fa-heart"></i>
        </a>
        <a href="#event" class="text-amber-200/70 hover:text-brandGold text-base transition" title="Acara">
            <i class="fa-solid fa-calendar-days"></i>
        </a>
        <a href="#gallery" class="text-amber-200/70 hover:text-brandGold text-base transition" title="Galeri">
            <i class="fa-solid fa-images"></i>
        </a>
        <a href="#rsvp" class="text-amber-200/70 hover:text-brandGold text-base transition" title="RSVP">
            <i class="fa-solid fa-envelope"></i>
        </a>
    </nav>

    <!-- LIGHTBOX MODAL -->
    <div id="lightbox" class="fixed inset-0 z-50 bg-black/90 hidden items-center justify-center p-4" onclick="closeLightbox()">
        <button class="absolute top-5 right-5 text-white text-2xl" onclick="closeLightbox()">
            <i class="fa-solid fa-xmark"></i>
        </button>
        <img id="lightboxImg" src="" alt="Pratinjau Foto" class="max-w-full max-h-[85vh] rounded-2xl shadow-2xl border border-brandGold/40">
    </div>

    <!-- TOAST NOTIFICATION -->
    <div id="toast" class="fixed top-5 left-1/2 -translate-x-1/2 z-50 bg-slate-900/95 text-white border border-brandGold/60 px-5 py-2.5 rounded-full text-xs shadow-2xl transition-all duration-300 opacity-0 pointer-events-none flex items-center gap-2">
        <i class="fa-solid fa-circle-check text-brandGold text-sm"></i>
        <span id="toastMsg">Pesan berhasil dikirim</span>
    </div>

    <!-- JAVASCRIPT LOGIC -->
    <script>
        const momentVideo = document.getElementById('momentVideo');

if (momentVideo) {

    const videoObserver = new IntersectionObserver((entries) => {

        entries.forEach(entry => {

            if (entry.isIntersecting) {

                momentVideo.muted = true;

                momentVideo.play().catch(error => {
                    console.log('Video autoplay diblokir:', error);
                });

            } else {

                momentVideo.pause();

            }

        });

    }, {
        threshold: 0.5
    });

    videoObserver.observe(momentVideo);
}
        // 1. DOM Content Loaded Handler
        window.addEventListener('DOMContentLoaded', () => {
            const urlParams = new URLSearchParams(window.location.search);
            const toParam = urlParams.get('to');
            if (toParam) {
                document.getElementById('guestNameDisplay').textContent = decodeURIComponent(toParam);
            }
            startCountdown();
            initPetals();
            initSparkles();
            initScrollReveal();
        });
window.addEventListener("scroll", () => {

    const hero = document.querySelector("#home > div");

    if(hero){
        hero.style.transform =
        `translateY(${window.scrollY * 0.3}px) scale(1.1)`;
    }

});
        // 2. Open Invitation & Audio Player
        let audioContext = null;
        let isAudioPlaying = false;
        let synthInterval = null;

        function openInvitation() {
            const cover = document.getElementById('coverOverlay');
            const main = document.getElementById('mainContent');
            const nav = document.getElementById('floatingNav');
            const musicBtnContainer = document.getElementById('musicContainer');

            cover.classList.add('opacity-0', 'scale-105');
            setTimeout(() => {
                cover.style.display = 'none';
                main.classList.remove('opacity-0');
                nav.classList.remove('hidden');
                musicBtnContainer.classList.remove('hidden');
            }, 800);

            startBackgroundAudio();
        }

        // Web Audio Synthesizer playing romantic ballad theme "Aku Memilihmu"
 const bgMusic = document.getElementById("bgMusic");

function startBackgroundAudio() {
    bgMusic.play()
        .then(() => {
            document.getElementById("audioIcon").className =
                "fa-solid fa-compact-disc text-lg animate-spin";
        })
        .catch(err => console.log(err));
}

function toggleAudio() {
    const icon = document.getElementById("audioIcon");

    if (bgMusic.paused) {
        bgMusic.play();
        icon.className = "fa-solid fa-compact-disc text-lg animate-spin";
        showToast("Musik diputar");
    } else {
        bgMusic.pause();
        icon.className = "fa-solid fa-volume-xmark text-lg";
        showToast("Musik dijeda");
    }
}
        // 3. Countdown Timer (Target: 5 September 2026)
      // 3. Countdown Timer
// Target: 6 September 2026 pukul 10.00 WITA
function startCountdown() {

    const targetDate = new Date('September 6, 2026 10:00:00+08:00').getTime();

    function updateTimer() {

        const now = new Date().getTime();
        const diff = targetDate - now;

        // Jika waktu sudah mencapai 6 September 2026 pukul 10.00
        if (diff <= 0) {

            document.getElementById('days').textContent = '00';
            document.getElementById('hours').textContent = '00';
            document.getElementById('minutes').textContent = '00';
            document.getElementById('seconds').textContent = '00';

            return;
        }

        const days = Math.floor(
            diff / (1000 * 60 * 60 * 24)
        );

        const hours = Math.floor(
            (diff % (1000 * 60 * 60 * 24)) /
            (1000 * 60 * 60)
        );

        const minutes = Math.floor(
            (diff % (1000 * 60 * 60)) /
            (1000 * 60)
        );

        const seconds = Math.floor(
            (diff % (1000 * 60)) /
            1000
        );

        document.getElementById('days').textContent =
            String(days).padStart(2, '0');

        document.getElementById('hours').textContent =
            String(hours).padStart(2, '0');

        document.getElementById('minutes').textContent =
            String(minutes).padStart(2, '0');

        document.getElementById('seconds').textContent =
            String(seconds).padStart(2, '0');
    }

    updateTimer();

    setInterval(updateTimer, 1000);
}
        // 4. RSVP Form Submission
       
        async function submitRSVP(event) {
    event.preventDefault();

    const name = document.getElementById('guestNameInput').value.trim();
    const attendance = document.getElementById('attendanceInput').value;
    const personCount = document.getElementById('personCountInput').value;
    const message = document.getElementById('messageInput').value.trim();

    if (!name || !attendance || !message) {
        showToast('Mohon lengkapi semua data.');
        return;
    }

    try {
        const response = await fetch("{{ route('wishes.store') }}", {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
                "Accept": "application/json",
                "X-CSRF-TOKEN": "{{ csrf_token() }}"
            },
            body: JSON.stringify({
                name: name,
                attendance: attendance,
                person_count: personCount,
                message: message
            })
        });

        const result = await response.json();

        if (!response.ok) {
            throw new Error(result.message || 'Terjadi kesalahan.');
        }

        const wish = result.data;

        let badgeColor = '';

        if (wish.attendance === 'Hadir') {
            badgeColor = 'bg-emerald-100 text-emerald-800';
        } else if (wish.attendance === 'Tidak Hadir') {
            badgeColor = 'bg-rose-100 text-rose-800';
        } else {
            badgeColor = 'bg-amber-100 text-amber-800';
        }

       const container = document.getElementById('wishesContainer');

// Hapus pesan "Belum ada ucapan" jika masih tampil
const emptyMessage = container.querySelector('.empty-wish-message');

if (emptyMessage) {
    emptyMessage.remove();
}

const newWish = document.createElement('div');

        newWish.className =
            'glass-card p-4 rounded-2xl border border-amber-200/60 text-xs space-y-1 shadow-sm transform transition duration-500 scale-95 opacity-0';

        newWish.innerHTML = `
            <div class="flex items-center justify-between">
                <strong class="text-brandRed-900 font-semibold">
                    ${escapeHTML(wish.name)}
                </strong>

                <span class="text-[9px] ${badgeColor} px-2 py-0.5 rounded-full font-medium">
                    ${escapeHTML(wish.attendance)}
                </span>
            </div>

            <p class="text-slate-600 text-[11px] leading-relaxed">
                "${escapeHTML(wish.message)}"
            </p>
        `;

        container.prepend(newWish);

        setTimeout(() => {
            newWish.classList.remove('scale-95', 'opacity-0');
        }, 50);

        // Update jumlah ucapan
        const currentCount = document.querySelectorAll('#wishesContainer > div').length;

        document.getElementById('wishCount').textContent =
            currentCount + ' Ucapan';

        // Kosongkan form
        document.getElementById('rsvpForm').reset();

        showToast('Terima kasih atas ucapan & konfirmasinya!');

    } catch (error) {
        console.error(error);
        showToast('Ucapan gagal dikirim. Silakan coba lagi.');
    }
}

        function escapeHTML(str) {
            return str.replace(/[&<>'"]/g, 
                tag => ({ '&': '&amp;', '<': '&lt;', '>': '&gt;', "'": '&#39;', '"': '&quot;' }[tag] || tag)
            );
        }

        // 5. Clipboard helper
        function copyToClipboard(text, bankName) {
            const tempInput = document.createElement('textarea');
            tempInput.value = text;
            document.body.appendChild(tempInput);
            tempInput.select();
            document.execCommand('copy');
            document.body.removeChild(tempInput);

            showToast(`Nomor Rekening ${bankName} berhasil disalin!`);
        }

        // 6. Lightbox modal
        function openLightbox(src) {
            const lightbox = document.getElementById('lightbox');
            const img = document.getElementById('lightboxImg');
            img.src = src;
            lightbox.classList.remove('hidden');
            lightbox.classList.add('flex');
        }

        function closeLightbox() {
            const lightbox = document.getElementById('lightbox');
            lightbox.classList.add('hidden');
            lightbox.classList.remove('flex');
        }

        // 7. Toast notification
        let toastTimeout = null;
        function showToast(message) {
            const toast = document.getElementById('toast');
            const toastMsg = document.getElementById('toastMsg');
            toastMsg.textContent = message;

            toast.classList.remove('opacity-0', 'pointer-events-none');
            toast.classList.add('opacity-100');

            if (toastTimeout) clearTimeout(toastTimeout);
            toastTimeout = setTimeout(() => {
                toast.classList.remove('opacity-100');
                toast.classList.add('opacity-0', 'pointer-events-none');
            }, 3000);
        }

        // 8. Petal Falling Canvas Effect
        function initPetals() {
            const canvas = document.getElementById('petalCanvas');
            const ctx = canvas.getContext('2d');

            function resizeCanvas() {
                canvas.width = window.innerWidth;
                canvas.height = window.innerHeight;
            }
            resizeCanvas();
            window.addEventListener('resize', resizeCanvas);

            const petals = [];
            const petalCount = 20;

            for (let i = 0; i < petalCount; i++) {
                petals.push({
                    x: Math.random() * canvas.width,
                    y: Math.random() * canvas.height,
                    size: Math.random() * 5 + 3,
                    speedY: Math.random() * 0.8 + 0.4,
                    speedX: Math.random() * 0.4 - 0.2,
                    opacity: Math.random() * 0.5 + 0.2,
                    angle: Math.random() * 360
                });
            }

            function drawPetals() {
                ctx.clearRect(0, 0, canvas.width, canvas.height);
                petals.forEach(p => {
                    ctx.save();
                    ctx.translate(p.x, p.y);
                    ctx.rotate((p.angle * Math.PI) / 180);
                    ctx.fillStyle = `rgba(225, 29, 72, ${p.opacity})`;
                    ctx.beginPath();
                    ctx.ellipse(0, 0, p.size, p.size / 2, 0, 0, Math.PI * 2);
                    ctx.fill();
                    ctx.restore();

                    p.y += p.speedY;
                    p.x += p.speedX;
                    p.angle += 0.4;

                    if (p.y > canvas.height) {
                        p.y = -10;
                        p.x = Math.random() * canvas.width;
                    }
                });
                requestAnimationFrame(drawPetals);
            }
            drawPetals();
        }

        // 9. Floating Golden Sparkle Dust Canvas
        function initSparkles() {
            const canvas = document.getElementById('sparkleCanvas');
            const ctx = canvas.getContext('2d');

            function resizeCanvas() {
                canvas.width = window.innerWidth;
                canvas.height = window.innerHeight;
            }
            resizeCanvas();
            window.addEventListener('resize', resizeCanvas);

            const sparkles = [];
            const count = 30;

            for (let i = 0; i < count; i++) {
                sparkles.push({
                    x: Math.random() * canvas.width,
                    y: Math.random() * canvas.height,
                    radius: Math.random() * 1.5 + 0.5,
                    opacity: Math.random(),
                    speed: Math.random() * 0.02 + 0.005
                });
            }

            function drawSparkles() {
                ctx.clearRect(0, 0, canvas.width, canvas.height);
                sparkles.forEach(s => {
                    s.opacity += s.speed;
                    if (s.opacity > 1 || s.opacity < 0) {
                        s.speed = -s.speed;
                    }

                    ctx.beginPath();
                    ctx.arc(s.x, s.y, s.radius, 0, Math.PI * 2);
                    ctx.fillStyle = `rgba(212, 175, 55, ${Math.abs(s.opacity)})`;
                    ctx.shadowBlur = 8;
                    ctx.shadowColor = '#d4af37';
                    ctx.fill();
                });
                requestAnimationFrame(drawSparkles);
            }
            drawSparkles();
        }

        // 10. IntersectionObserver for Smooth Scroll Reveal Animations
       function initScrollReveal(){

    const items=document.querySelectorAll(".reveal-on-scroll");

    const observer=new IntersectionObserver((entries)=>{

        entries.forEach(entry=>{

            if(entry.isIntersecting){

                entry.target.classList.add("active");

            }else{

                entry.target.classList.remove("active");

            }

        });

    },{
        threshold:0.15
    });

    items.forEach(item=>observer.observe(item));

}
    </script>
</body>
</html>