<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INSIGHT MBG | Badan Gizi Nasional</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700;800&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; background-color: #f0f7f9; }
        .bgn-dark { background-color: #071e49; }
        .bgn-gold { color: #d1b06c; }
        .bgn-gold-bg { background-color: #d1b06c; }
        .bgn-green { color: #92d05d; }
        .bgn-green-bg { background-color: #92d05d; }
        .glass-card { background: rgba(255, 255, 255, 0.95); backdrop-filter: blur(10px); border: 1px solid rgba(181, 224, 234, 0.5); }
        .timeline-line { background: linear-gradient(to bottom, #92d05d 0%, #b5e0ea 100%); }
    </style>
</head>
<body class="text-[#071e49]">

    <nav class="bgn-dark sticky top-0 z-50 shadow-2xl">
        <div class="max-w-7xl mx-auto px-4 h-20 flex items-center justify-between">
            <div class="flex items-center gap-3">
                <div class="w-11 h-11 bgn-gold-bg rounded-full flex items-center justify-center shadow-lg border-2 border-white/20">
                    <span class="text-[#071e49] font-black text-xl">BGN</span>
                </div>
                <div class="flex flex-col leading-none">
                    <span class="text-white font-black text-xl tracking-tighter uppercase">Insight<span class="bgn-gold">MBG</span></span>
                    <span class="text-[#b5e0ea] text-[10px] font-bold tracking-[0.2em] uppercase">Badan Gizi Nasional</span>
                </div>
            </div>
            <div class="hidden md:flex gap-8 text-sm font-bold">
                <a href="#" class="bgn-gold border-b-2 border-[#d1b06c] pb-1">Dashboard Utama</a>
                <a href="#" class="text-white/70 hover:text-white transition-colors">Data Vendor</a>
                <a href="#" class="text-white/70 hover:text-white transition-colors">Peta Lokasi</a>
            </div>
            <button class="bgn-gold-bg text-[#071e49] px-6 py-2.5 rounded-full text-sm font-black hover:brightness-110 transition-all shadow-lg">SISTEM LOGIN</button>
        </div>
    </nav>

    <main class="max-w-7xl mx-auto px-4 py-8">
        
        <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-8">
            <div class="glass-card p-6 rounded-3xl shadow-sm border-l-4 border-[#92d05d]">
                <p class="text-gray-400 text-[10px] font-black uppercase tracking-widest">Total Porsi Hari Ini</p>
                <h2 class="text-3xl font-black text-[#071e49] mt-1">2,840</h2>
                <div class="mt-2 flex items-center gap-1 text-[#92d05d] text-xs font-bold">
                    <span>↑ 5.2%</span>
                    <span class="text-gray-400 font-normal underline italic">vs kemarin</span>
                </div>
            </div>
            <div class="glass-card p-6 rounded-3xl shadow-sm border-l-4 border-[#b5e0ea]">
                <p class="text-gray-400 text-[10px] font-black uppercase tracking-widest">Vendor Aktif</p>
                <h2 class="text-3xl font-black text-[#071e49] mt-1">12</h2>
                <p class="text-xs text-blue-400 mt-2 font-bold italic uppercase tracking-tighter">Wilayah Tarakan</p>
            </div>
            <div class="glass-card p-6 rounded-3xl shadow-sm border-l-4 border-[#d1b06c]">
                <p class="text-gray-400 text-[10px] font-black uppercase tracking-widest">Kepuasan Siswa</p>
                <h2 class="text-3xl font-black text-[#071e49] mt-1">4.9<span class="text-sm text-gray-400">/5.0</span></h2>
                <p class="bgn-gold mt-2 tracking-tighter">★★★★★</p>
            </div>
            <div class="bgn-dark p-6 rounded-3xl shadow-lg text-white relative overflow-hidden">
                <div class="absolute right-0 top-0 w-16 h-16 bgn-gold-bg opacity-10 rounded-full -mr-8 -mt-8"></div>
                <p class="text-[#b5e0ea] text-[10px] font-black uppercase tracking-widest">Status Anggaran</p>
                <h2 class="text-2xl font-black mt-1 tracking-tighter italic uppercase">Transparan</h2>
                <p class="text-[10px] mt-2 opacity-80 uppercase font-bold tracking-tighter italic">Data Publik Terverifikasi</p>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            
            <div class="lg:col-span-2 space-y-6">
                
                <div class="bg-white rounded-3xl border border-[#b5e0ea]/50 shadow-sm overflow-hidden">
                    <div class="p-6 border-b border-gray-50 flex justify-between items-center bg-gray-50/50">
                        <h3 class="font-black text-[#071e49] uppercase italic text-sm">Alur Distribusi Real-time</h3>
                        <span class="flex items-center gap-1.5 px-3 py-1 bg-white rounded-full border border-red-100">
                            <span class="w-2 h-2 bg-red-500 rounded-full animate-ping"></span>
                            <span class="text-[10px] font-black text-red-500 uppercase italic">Live Update</span>
                        </span>
                    </div>
                    <div class="p-8 space-y-8">
                        <div class="flex gap-6 relative">
                            <div class="absolute left-3 top-8 bottom-0 w-[2px] timeline-line"></div>
                            <div class="z-10 w-6 h-6 bgn-green-bg rounded-full border-4 border-white flex-shrink-0 shadow-lg shadow-[#92d05d]/30 flex items-center justify-center text-[8px] text-white font-bold">✓</div>
                            <div class="flex-1">
                                <p class="text-[10px] font-black text-gray-400 uppercase tracking-widest mb-1">12:30 WITA - SDN 001 Tarakan</p>
                                <p class="text-md font-black text-[#071e49]">Makanan Diterima & Dinilai</p>
                                <div class="mt-4 flex flex-col md:flex-row gap-4">
                                    
                                    <div class="w-28 h-28 flex-shrink-0 bg-white rounded-2xl border-2 border-dashed border-[#b5e0ea] flex items-center justify-center p-2 text-center group overflow-hidden shadow-inner relative hover:border-[#92d05d] hover:bg-[#92d05d]/5 transition-colors">
                                        <div class="flex flex-col items-center gap-1">
                                            <span class="text-3xl opacity-50">🖼️</span>
                                            <span class="text-[9px] font-bold text-gray-400 uppercase tracking-widest italic group-hover:text-[#92d05d]">FOTO BUKTI</span>
                                        </div>
                                        </div>
                                    
                                    <div class="flex-1 bg-[#b5e0ea]/20 rounded-2xl p-4 text-sm border border-[#b5e0ea]/40">
                                        <div class="flex flex-wrap items-center gap-2 mb-2">
                                            <span class="px-2 py-0.5 bgn-dark text-[#b5e0ea] text-[9px] font-black uppercase tracking-wider rounded-md">
                                                Testimoni Penerima
                                            </span>
                                            <span class="text-[10px] font-bold text-[#071e49] italic">
                                                — Ibu Sumiati (SDN 001) <span class="bgn-gold not-italic">★★★★★</span>
                                            </span>
                                        </div>
                                        <p class="text-[#071e49] leading-relaxed italic">
                                            "Menu ayam sangat empuk, sayur segar dan porsi pas untuk anak kelas 1-3. Terima kasih BGN!"
                                        </p>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="flex gap-6 relative text-gray-400">
                            <div class="z-10 w-6 h-6 bg-gray-200 rounded-full flex-shrink-0 border-4 border-white"></div>
                            <div>
                                <p class="text-[10px] font-black uppercase tracking-widest mb-1">12:10 WITA</p>
                                <p class="text-sm font-bold">Kurir Menuju Lokasi (Tracking GPS Aktif)</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white p-4 rounded-3xl border border-[#b5e0ea]/50 shadow-sm overflow-hidden">
                    <div class="p-4 flex items-center justify-between">
                        <h3 class="font-black text-[#071e49] uppercase italic text-sm">📍 Peta Sebaran Dapur & Sekolah</h3>
                        <span class="text-[9px] bgn-dark text-white px-3 py-1 rounded-full font-black italic">TARAKAN CENTRAL</span>
                    </div>
                    <div class="w-full h-[350px] rounded-2xl overflow-hidden border border-gray-100 bg-[#f8fafc]">
                        <iframe 
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d127500.0000000000!2d117.550000!3d3.330000!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x321396a8e8000001%3A0x4030bf4581427c0!2sTarakan%2C%20Kota%20Tarakan%2C%20Kalimantan%20Utara!5e0!3m2!1sid!2sid!4v1710000000000!5m2!1sid!2sid" 
                            class="w-full h-full border-0 grayscale hover:grayscale-0 transition-all duration-500" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                    <div class="mt-4 flex flex-wrap gap-4 px-2">
                        <div class="flex items-center gap-2"><span class="w-2.5 h-2.5 bgn-gold-bg rounded-full"></span><span class="text-[9px] font-black text-gray-500 uppercase tracking-widest">Dapur Vendor</span></div>
                        <div class="flex items-center gap-2"><span class="w-2.5 h-2.5 bg-blue-500 rounded-full"></span><span class="text-[9px] font-black text-gray-500 uppercase tracking-widest">Sekolah</span></div>
                        <div class="flex items-center gap-2"><span class="w-2.5 h-2.5 bgn-green-bg rounded-full animate-bounce"></span><span class="text-[9px] font-black text-gray-500 uppercase tracking-widest">Kurir Aktif</span></div>
                    </div>
                </div>
            </div>

            <div class="space-y-6">
                <div class="bg-white p-6 rounded-3xl border border-[#b5e0ea]/50 shadow-sm relative overflow-hidden">
                    <div class="absolute top-0 right-0 p-2 bgn-green-bg text-white rounded-bl-2xl">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z" /><path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h.01a1 1 0 100-2H10zm3 0a1 1 0 000 2h.01a1 1 0 100-2H13z" clip-rule="evenodd" /></svg>
                    </div>
                    <h3 class="font-black text-[#071e49] mb-4 flex items-center gap-2 uppercase italic text-sm">📋 Komposisi Nutrisi</h3>
                    <div class="space-y-4">
                        <div class="p-4 rounded-2xl bg-[#b5e0ea]/10 border border-[#b5e0ea]/40 relative">
                            <p class="text-[10px] font-black text-gray-400 uppercase mb-1">Menu Hari Ini</p>
                            <p class="text-sm font-black text-[#071e49]">Ayam Geprek Gizi, Tumis Bayam, Pisang Ambon</p>
                            <div class="mt-4 grid grid-cols-2 gap-2 text-center font-black">
                                <div class="bg-white p-2 rounded-xl border border-[#b5e0ea]/30"><p class="text-[9px] text-gray-400 uppercase">Protein</p><p class="text-xs bgn-green">28g</p></div>
                                <div class="bg-white p-2 rounded-xl border border-[#b5e0ea]/30"><p class="text-[9px] text-gray-400 uppercase">Energi</p><p class="text-xs bgn-green">650 kkal</p></div>
                            </div>
                        </div>
                        <div class="flex items-center gap-2 p-2 bg-[#92d05d]/10 rounded-full justify-center border border-[#92d05d]/30">
                            <span class="text-[9px] font-black text-[#92d05d] uppercase italic tracking-tighter">Diverifikasi Tenaga Ahli Gizi BGN</span>
                        </div>
                    </div>
                </div>

                <div class="bgn-dark p-2 rounded-3xl shadow-xl overflow-hidden group">
                    <div class="p-4 flex items-center justify-between">
                        <h3 class="font-black text-white flex items-center gap-2 uppercase italic text-[10px] tracking-widest">
                            <span class="w-1.5 h-1.5 bgn-green-bg rounded-full animate-ping"></span> Live Dapur SPPG
                        </h3>
                        <span class="text-[8px] bg-red-600 text-white px-2 py-0.5 rounded font-black">CAM 01</span>
                    </div>
                    <div class="relative pb-[56.25%] h-0 rounded-2xl overflow-hidden bg-black border border-white/10 shadow-inner">
                        <iframe 
                            class="absolute top-0 left-0 w-full h-full opacity-90 transition-opacity"
                            src="https://www.youtube.com/embed/VehGieRi72w?autoplay=1&mute=1&controls=0&modestbranding=1" 
                            title="Live CCTV" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen>
                        </iframe>
                    </div>
                    <div class="p-4 flex items-center gap-3">
                        <div class="w-8 h-8 bgn-gold-bg rounded-lg flex items-center justify-center text-sm shadow-lg">👨‍🍳</div>
                        <div class="flex-1">
                            <p class="text-[10px] font-black text-white uppercase tracking-widest">Vendor A - Central Tarakan</p>
                            <p class="text-[8px] text-[#b5e0ea] font-bold">Status: Operasional Normal (Higiene Terjamin)</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </main>
    <footer class="bgn-dark mt-12 pt-16 pb-8 border-t border-white/10 relative overflow-hidden">
        <div class="absolute top-0 left-0 w-64 h-64 bgn-gold-bg opacity-5 rounded-full -ml-32 -mt-32"></div>
        
        <div class="max-w-7xl mx-auto px-4 relative z-10">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-12 mb-16">
                
                <div class="col-span-1 md:col-span-1">
                    <div class="flex items-center gap-3 mb-6">
                        <div class="w-10 h-10 bgn-gold-bg rounded-full flex items-center justify-center shadow-lg border-2 border-white/20">
                            <span class="text-[#071e49] font-black text-lg font-['Plus_Jakarta_Sans']">BGN</span>
                        </div>
                        <div class="flex flex-col leading-none">
                            <span class="text-white font-black text-lg tracking-tighter uppercase">Insight<span class="bgn-gold">MBG</span></span>
                            <span class="text-[#b5e0ea] text-[9px] font-bold tracking-[0.2em] uppercase">Badan Gizi Nasional</span>
                        </div>
                    </div>
                    <p class="text-[#b5e0ea]/60 text-xs leading-relaxed font-medium italic">
                        Platform transparansi dan monitoring program Makan Bergizi Gratis (MBG) untuk mewujudkan generasi emas Indonesia yang sehat dan kuat.
                    </p>
                </div>

                <div>
                    <h4 class="text-white font-black text-sm uppercase tracking-widest mb-6 italic bgn-gold">Navigasi</h4>
                    <ul class="space-y-4 text-xs font-bold text-[#b5e0ea]/70">
                        <li><a href="#" class="hover:text-white transition-all flex items-center gap-2"><span>→</span> Dashboard Utama</a></li>
                        <li><a href="#" class="hover:text-white transition-all flex items-center gap-2"><span>→</span> Statistik Vendor</a></li>
                        <li><a href="#" class="hover:text-white transition-all flex items-center gap-2"><span>→</span> Peta Sebaran MBG</a></li>
                        <li><a href="#" class="hover:text-white transition-all flex items-center gap-2"><span>→</span> Laporan Transparansi</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="text-white font-black text-sm uppercase tracking-widest mb-6 italic bgn-gold">Kantor Wilayah</h4>
                    <div class="space-y-4 text-xs text-[#b5e0ea]/70">
                        <div class="flex gap-3">
                            <span class="text-lg">📍</span>
                            <p class="leading-relaxed">Gedung Satuan Pelayanan Gizi (SPPG)<br>Kota Tarakan, Kalimantan Utara</p>
                        </div>
                        <div class="flex gap-3">
                            <span class="text-lg">📞</span>
                            <p>+62 (551) 123-456</p>
                        </div>
                    </div>
                </div>

                <div>
                    <h4 class="text-white font-black text-sm uppercase tracking-widest mb-6 italic bgn-gold">Keamanan & Mutu</h4>
                    <div class="flex flex-wrap gap-3">
                        <div class="bg-white/5 border border-white/10 p-3 rounded-xl flex items-center justify-center w-full">
                            <div class="text-center">
                                <p class="text-[10px] text-white font-black uppercase">Higiene Terjamin</p>
                                <p class="text-[8px] text-[#92d05d] font-bold uppercase italic tracking-widest mt-1 underline">Sertifikat HALAL & BPOM</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="h-[1px] w-full bg-gradient-to-r from-transparent via-white/10 to-transparent mb-8"></div>

            <div class="flex flex-col md:flex-row justify-between items-center gap-4">
                <p class="text-[10px] font-bold text-[#b5e0ea]/40 uppercase tracking-[0.2em]">
                    © 2026 BADAN GIZI NASIONAL - <span class="text-white/40">Sistem Monitoring MBG v1.0</span>
                </p>
                <div class="flex gap-6">
                    <a href="#" class="text-[#b5e0ea]/40 hover:text-white text-[10px] font-black uppercase tracking-widest transition-colors">Privacy Policy</a>
                    <a href="#" class="text-[#b5e0ea]/40 hover:text-white text-[10px] font-black uppercase tracking-widest transition-colors">Terms of Service</a>
                </div>
            </div>
        </div>
    </footer>

</body>
</html>