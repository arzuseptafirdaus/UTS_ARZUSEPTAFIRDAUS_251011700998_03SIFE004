
<div class="py-5 bg-white text-dark position-relative overflow-hidden border-bottom border-light">
    <div class="container py-4">
        <div class="row align-items-center justify-content-between g-4">
            <div class="col-lg-7">
                
                <span class="font-googlesans fw-bold text-uppercase text-muted small tracking-widest d-block mb-2" style="font-size: 0.75rem; letter-spacing: 2.5px;">
                    OFFICIAL DIRECTORY & CATALOG
                </span>
                
                <h1 class="font-archivo display-4 fw-bold text-uppercase text-dark m-0" style="letter-spacing: -0.5px; line-height: 1.1;">
                    DIREKTORI CABANG OLAHRAGA
                </h1>
                
                <p class="font-montserrat text-muted mt-3 mb-0" style="max-width: 620px; font-size: 0.98rem; line-height: 1.7;">
                    Eksplorasi seluruh cabang olahraga resmi, pelajari spesifikasi regulasi, dan ajukan pendaftaran kualifikasi event melalui sistem jembatan Sportify.
                </p>
            </div>
            <div class="col-lg-4">
                
                <form action="{{ route('sport') }}" method="GET" class="d-flex">
                    <input type="text" name="search" class="form-control rounded-0 border-dark shadow-none font-montserrat" placeholder="Cari cabang olahraga..." value="{{ request('search') }}">
                    <button class="btn btn-dark rounded-0 font-oswald fw-bold text-uppercase px-3 ms-2" type="submit" style="letter-spacing: 1px;">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>


<div class="bg-light border-bottom border-light py-3">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center gap-2 font-oswald small">
            <span class="text-uppercase fw-bold text-muted me-2" style="font-size: 0.8rem; letter-spacing: 1px;">KATEGORI:</span>
            <a href="{{ route('sport') }}" class="btn {{ !request('category') || request('category') == 'all' ? 'btn-dark' : 'btn-outline-dark bg-white text-dark' }} btn-sm rounded-0 fw-bold px-3 text-uppercase" style="letter-spacing: 0.5px;">Semua Sport</a>
            <a href="{{ route('sport', ['category' => 'Tim']) }}" class="btn {{ request('category') == 'Tim' ? 'btn-dark' : 'btn-outline-dark bg-white text-dark' }} btn-sm rounded-0 fw-bold px-3 text-uppercase" style="letter-spacing: 0.5px;">Tim & Lapangan</a>
            <a href="{{ route('sport', ['category' => 'Raket']) }}" class="btn {{ request('category') == 'Raket' ? 'btn-dark' : 'btn-outline-dark bg-white text-dark' }} btn-sm rounded-0 fw-bold px-3 text-uppercase" style="letter-spacing: 0.5px;">Raket & Net</a>
            <a href="{{ route('sport', ['category' => 'Akuatik']) }}" class="btn {{ request('category') == 'Akuatik' ? 'btn-dark' : 'btn-outline-dark bg-white text-dark' }} btn-sm rounded-0 fw-bold px-3 text-uppercase" style="letter-spacing: 0.5px;">Akuatik / Renang</a>
            <a href="{{ route('sport', ['category' => 'Individu']) }}" class="btn {{ request('category') == 'Individu' ? 'btn-dark' : 'btn-outline-dark bg-white text-dark' }} btn-sm rounded-0 fw-bold px-3 text-uppercase" style="letter-spacing: 0.5px;">Atletik & Lari</a>
        </div>
    </div>
</div>


<div class="py-5 bg-white">
    <div class="container py-3">
        
        <div class="row g-3 mb-5">
            @forelse($sports as $index => $sport)
                <div class="col-md-6">
                    <div class="card border border-dark rounded-0 shadow-sm position-relative overflow-hidden h-100" style="min-height: 400px;">
                        <img src="{{ asset('images/' . $sport->image) }}" 
                             alt="{{ $sport->name }}" 
                             class="position-absolute w-100 h-100 object-fit-cover" 
                             onerror="this.src='https://images.unsplash.com/photo-1508098682722-e99c43a406b2?auto=format&fit=crop&w=800&q=80'">
                        
                        <div class="position-absolute w-100 h-100 top-0 start-0 d-flex flex-column justify-content-between p-4 p-lg-4" style="background: linear-gradient(180deg, rgba(0,0,0,0.2) 0%, rgba(0,0,0,0.88) 100%);">
                            <div class="d-flex justify-content-between align-items-start">
                                <span class="font-googlesans fw-bold text-uppercase text-white-50 border-bottom border-white pb-1" style="font-size: 0.75rem; letter-spacing: 1.5px; width: fit-content;">
                                    KATEGORI {{ strtoupper($sport->category) }}
                                </span>
                                
                                <span class="font-bebas text-white opacity-50 fs-4">
                                    {{ sprintf('%02d', $index + 1) }}
                                </span>
                            </div>
                            <div class="text-white">
                                
                                <h4 class="font-oswald fw-bold text-uppercase text-white m-0 mb-2" style="font-size: 1.45rem; letter-spacing: 0.5px; line-height: 1.2;">
                                    {{ $sport->name }}
                                </h4>
                                
                                <p class="font-montserrat text-white-50 mt-1 mb-3" style="font-size: 0.88rem; line-height: 1.6; max-width: 95%;">
                                    {{ $sport->description }}
                                </p>
                                <div class="d-flex align-items-center gap-3">
                                    <a href="{{ route('sport.detail', $sport->id) }}" class="btn btn-light rounded-0 font-oswald fw-bold text-uppercase px-3 py-2 small" style="letter-spacing: 1px;">
                                        DAFTAR EVENT &rarr;
                                    </a>
                                    <span class="font-montserrat text-white-50 small" style="font-size: 0.78rem;">Open Selection</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12 text-center py-5">
                    <h4 class="font-oswald fw-bold text-muted text-uppercase" style="letter-spacing: 0.5px;">EVENT TIDAK DITEMUKAN</h4>
                    <p class="font-montserrat text-muted small">Coba gunakan kata kunci pencarian atau kategori lain.</p>
                </div>
            @endforelse
        </div>

    </div>
</div>