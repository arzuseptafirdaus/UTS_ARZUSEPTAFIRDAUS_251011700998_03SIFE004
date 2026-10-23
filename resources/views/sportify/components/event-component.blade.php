<!-- Sports Directory Section (Sharp Windows Tile Grid - Dynamic 4 Items) -->
<div class="container py-5" id="sports-directory">
    <div class="row align-items-end mb-4 g-3">
        <div class="col-lg-8">
            <!-- Subtitle badge menggunakan Google Sans -->
            <span class="font-googlesans text-muted fw-bold small tracking-widest text-uppercase d-block mb-1" style="font-size: 0.75rem; letter-spacing: 2px;">
                EKSPLORASI CABANG OLAHRAGA
            </span>
            <!-- Judul Utama Section menggunakan Archivo Black -->
            <h2 class="display-5 font-archivo text-uppercase text-dark m-0 mb-2" style="letter-spacing: -0.5px; line-height: 1.1;">
                DAFTAR OLAHRAGA UTAMA
            </h2>
            <!-- Deskripsi menggunakan Montserrat -->
            <p class="text-muted font-montserrat small m-0" style="max-width: 520px; font-size: 0.9rem; line-height: 1.6;">
                Menampilkan 4 cabang olahraga populer dunia lengkap dengan panduan peralatan standar dan regulasi permainan resmi.
            </p>
        </div>
        <div class="col-lg-4 text-lg-end">
            <!-- Tombol CTA menggunakan Google Sans -->
            <a href="{{ route('sport') }}" class="btn btn-dark rounded-0 px-4 py-3 font-googlesans fw-bold text-uppercase text-decoration-none d-inline-flex align-items-center gap-2" style="font-size: 0.8rem; letter-spacing: 1px;">
                LIHAT SEMUA SPORT <i class="fa-solid fa-arrow-right"></i>
            </a>
        </div>
    </div>

    <!-- Windows Tile Grid (Dynamic Loop dari Controller Home) -->
    <div class="row g-3">
        @isset($highlightSports)
            @foreach($highlightSports as $sport)
                <div class="col-md-6">
                    <a href="{{ route('sport.detail', $sport->id) }}" class="text-decoration-none">
                        <div class="card border-0 rounded-0 position-relative overflow-hidden shadow-sm" style="height: 380px;">
                            <img src="{{ asset('images/' . $sport->image) }}" 
                                 alt="{{ $sport->name }}" 
                                 class="position-absolute w-100 h-100 object-fit-cover"
                                 onerror="this.src='https://images.unsplash.com/photo-1508098682722-e99c43a406b2?auto=format&fit=crop&w=1200&q=80'">
                            
                            <!-- Dark Gradient Overlay -->
                            <div class="position-absolute w-100 h-100 top-0 start-0 d-flex flex-column justify-content-between p-4 p-md-5" 
                                 style="background: linear-gradient(180deg, rgba(0,0,0,0.2) 0%, rgba(0,0,0,0.88) 100%); z-index: 2;">
                                
                                <!-- Top Tag Info menggunakan Google Sans -->
                                <div class="d-flex justify-content-between align-items-center text-white">
                                    <span class="font-googlesans fw-bold text-uppercase tracking-wider small text-white border-bottom border-white border-2 pb-1" style="font-size: 0.75rem;">
                                        CATEGORY : {{ strtoupper($sport->category) }}
                                    </span>
                                    <span class="font-googlesans small text-white-50"><i class="fa-solid fa-globe me-1"></i> Asal : {{ $sport->origin_country }}</span>
                                </div>

                                <!-- Bottom Title & Description -->
                                <div class="text-white">
                                    <!-- Judul Card Olahraga menggunakan Oswald -->
                                    <h4 class="font-oswald fw-bold text-uppercase text-white mb-2" style="letter-spacing: 0.5px; font-size: 1.45rem; line-height: 1.2;">
                                        {{ $sport->name }}
                                    </h4>
                                    <!-- Deskripsi Card menggunakan Montserrat -->
                                    <p class="font-montserrat text-white-50 m-0" style="font-size: 0.85rem; line-height: 1.5; max-width: 95%;">
                                        {{ Str::limit($sport->description, 100) }}
                                    </p>
                                </div>

                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        @endisset
    </div>
</div>