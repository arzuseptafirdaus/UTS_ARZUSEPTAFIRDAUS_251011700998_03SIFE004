<!-- Hero Header dengan Background Gambar Dinamis -->
<div class="py-5 position-relative overflow-hidden text-white border-bottom border-dark" style="min-height: 420px; display: flex; align-items: center;">
    <img src="{{ asset('images/' . $sport->image) }}" 
         alt="{{ $sport->name }}" 
         class="position-absolute w-100 h-100 top-0 start-0 object-fit-cover"
         onerror="this.src='https://images.unsplash.com/photo-1508098682722-e99c43a406b2?auto=format&fit=crop&w=1200&q=80'">
    
    <div class="position-absolute w-100 h-100 top-0 start-0" style="background: linear-gradient(180deg, rgba(0,0,0,0.65) 0%, rgba(0,0,0,0.88) 100%); z-index: 1;"></div>

    <!-- Konten Hero -->
    <div class="container py-4 position-relative" style="z-index: 2;">
        <div class="row align-items-center justify-content-between g-4">
            <div class="col-lg-8">
                <span class="font-montserrat fw-bold text-uppercase text-white-50 small tracking-widest d-block mb-2" style="letter-spacing: 2.5px;">
                    KATEGORI: {{ strtoupper($sport->category) }} &bull; ASAL: {{ strtoupper($sport->origin_country) }}
                </span>
                <h1 class="font-bebas display-3 fw-black text-uppercase text-white m-0" style="letter-spacing: -1px; line-height: 0.9;">
                    {{ $sport->name }}
                </h1>
                <p class="font-googlesans text-white-50 mt-3 mb-0" style="max-width: 680px; font-weight: 300; font-size: 1.05rem;">
                    {{ $sport->description }}
                </p>
            </div>
            <div class="col-lg-4 text-lg-end">
                <a href="{{ route('sport') }}" class="btn btn-outline-light rounded-0 font-montserrat fw-bold text-uppercase px-4 py-3" style="font-size: 0.8rem; letter-spacing: 1px;">
                    &larr; KEMBALI KE DIREKTORI
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Main Section: Layout Grid 2 Kolom Seimbang -->
<div class="py-5 bg-white">
    <div class="container py-3">
        
        <!-- ROW INFORMASI DETAIL (Layout 2 Kolom) -->
        <div class="row g-4 mb-5">
            
            <!-- KOLOM KIRI: Peralatan & Spesifikasi Teknis -->
            <div class="col-lg-5">
                <div class="h-100 p-4 bg-light border border-dark rounded-0 d-flex flex-column justify-content-between">
                    <div>
                        <span class="font-montserrat text-muted fw-bold small tracking-widest text-uppercase d-block mb-1" style="font-size: 0.7rem; letter-spacing: 1.5px;">
                            SPESIFIKASI SPONSOR & LOGISTIK
                        </span>
                        <h3 class="font-montserrat fw-black text-uppercase text-dark mb-3" style="font-size: 1.35rem; letter-spacing: -0.5px;">
                            PERALATAN STANDAR RESMI
                        </h3>
                        <p class="font-googlesans text-secondary mb-4" style="font-size: 0.9rem; line-height: 1.6;">
                            Seluruh perlengkapan berikut wajib memenuhi standar spesifikasi federasi internasional dan telah diverifikasi sebelum pertandingan dimulai.
                        </p>

                        <!-- List Badge Peralatan Rapi -->
                        <div class="d-flex flex-wrap gap-2">
                            @php
                                $equipments = array_map('trim', explode(',', $sport->equipment));
                            @endphp
                            @foreach($equipments as $item)
                                <span class="bg-white border border-dark font-montserrat fw-bold text-uppercase text-dark px-3 py-2 small" style="font-size: 0.78rem; letter-spacing: 0.5px;">
                                    {{ $item }}
                                </span>
                            @endforeach
                        </div>
                    </div>

                    <div class="mt-4 pt-3 border-top border-secondary border-opacity-25">
                        <span class="font-googlesans text-muted small d-block">
                            <i class="fa-solid fa-circle-check text-dark me-1"></i> Standar Kualifikasi Resmi Sportify 2026
                        </span>
                    </div>
                </div>
            </div>

            <!-- KOLOM KANAN: Regulasi & Aturan Pertandingan -->
            <div class="col-lg-7">
                <div class="h-100 p-4 border border-dark rounded-0 bg-white d-flex flex-column justify-content-between">
                    <div>
                        <span class="font-montserrat text-muted fw-bold small tracking-widest text-uppercase d-block mb-1" style="font-size: 0.7rem; letter-spacing: 1.5px;">
                            PETUNJUK TEKNIS PERMAINAN
                        </span>
                        <h3 class="font-montserrat fw-black text-uppercase text-dark mb-3" style="font-size: 1.35rem; letter-spacing: -0.5px;">
                            REGULASI & KETENTUAN PERTANDINGAN
                        </h3>
                        
                        <!-- List Aturan Permainan Rapi -->
                        <ul class="font-googlesans text-dark ps-3 m-0" style="font-size: 0.95rem; line-height: 1.8;">
                            @php
                                $rules = json_decode($sport->rules, true);
                            @endphp
                            
                            @if($rules && is_array($rules))
                                @foreach($rules as $rule)
                                    <li class="mb-2 text-secondary">{{ $rule }}</li>
                                @endforeach
                            @else
                                <li class="text-secondary">Regulasi standar internasional berlaku untuk cabang olahraga ini.</li>
                            @endif
                        </ul>
                    </div>

                    <div class="mt-4 pt-3 border-top border-light">
                        <span class="font-googlesans text-muted small d-block">
                            <i class="fa-solid fa-shield-halved text-dark me-1"></i> Mengacu pada Regulasi Resmi Federasi Olahraga Dunia
                        </span>
                    </div>
                </div>
            </div>

        </div>

        <!-- Garis Pemisah Elegan -->
        <hr class="border-dark opacity-25 my-5">

        <!-- FORMULIR PENDAFTARAN (Full Width) -->
        <div class="pt-2" id="form-pendaftaran">
            <div class="mb-4 text-center text-md-start">
                <span class="font-montserrat text-muted fw-bold small tracking-widest text-uppercase d-block mb-1" style="font-size: 0.75rem; letter-spacing: 2px;">
                    FORMULIR RESMI
                </span>
                <h3 class="font-montserrat fw-black text-uppercase text-dark m-0" style="font-size: 1.75rem; letter-spacing: -0.5px;">
                    PENGAJUAN SELEKSI & PENDAFTARAN EVENT
                </h3>
                <p class="font-googlesans text-muted small mt-1">
                    Silakan isi data diri dan lengkapi pernyataan kesediaan di bawah ini untuk mengikuti kualifikasi resmi.
                </p>
            </div>

            <form action="#" method="POST" class="font-googlesans">
                @csrf
                <input type="hidden" name="sport_id" value="{{ $sport->id }}">

                <div class="row g-3 mb-3">
                    <div class="col-md-6">
                        <label class="form-label font-montserrat fw-bold text-uppercase small text-dark">Nama Lengkap Atlet / Tim</label>
                        <input type="text" name="name" class="form-control rounded-0 border-dark shadow-none py-2 px-3" placeholder="Masukkan nama lengkap..." required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label font-montserrat fw-bold text-uppercase small text-dark">Alamat Email Aktif</label>
                        <input type="email" name="email" class="form-control rounded-0 border-dark shadow-none py-2 px-3" placeholder="nama@domain.com" required>
                    </div>
                </div>

                <div class="row g-3 mb-3">
                    <div class="col-md-6">
                        <label class="form-label font-montserrat fw-bold text-uppercase small text-dark">Nomor WhatsApp / Telepon</label>
                        <input type="text" name="phone" class="form-control rounded-0 border-dark shadow-none py-2 px-3" placeholder="08xxxxxxxxxx" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label font-montserrat fw-bold text-uppercase small text-dark">Kategori Kualifikasi</label>
                        <select name="category_level" class="form-select rounded-0 border-dark shadow-none py-2 px-3 font-googlesans">
                            <option value="Pro">Profesional / Open Division</option>
                            <option value="Semi-Pro">Semi-Profesional</option>
                            <option value="Amateur">Amatir / Pelajar</option>
                        </select>
                    </div>
                </div>

                <div class="mb-4">
                    <label class="form-label font-montserrat fw-bold text-uppercase small text-dark">Catatan / Portofolio Prestasi</label>
                    <textarea name="notes" rows="4" class="form-control rounded-0 border-dark shadow-none p-3" placeholder="Tuliskan catatan singkat atau pengalaman event sebelumnya..."></textarea>
                </div>

                <!-- Checkbox Persetujuan & Pernyataan Kesediaan -->
                <div class="bg-light p-4 border border-dark rounded-0 mb-4">
                    <h6 class="font-montserrat fw-bold text-uppercase small text-dark mb-3">Pernyataan & Persetujuan Atlet:</h6>
                    
                    <div class="form-check mb-2">
                        <input class="form-check-input rounded-0 border-dark shadow-none" type="checkbox" name="agree_rules" id="agreeRules" required>
                        <label class="form-check-label small text-secondary" for="agreeRules">
                            Saya menyatakan bahwa seluruh data diri yang saya berikan adalah benar dan saya sanggup mematuhi seluruh regulasi pertandingan resmi yang berlaku.
                        </label>
                    </div>

                    <div class="form-check mb-2">
                        <input class="form-check-input rounded-0 border-dark shadow-none" type="checkbox" name="agree_physical" id="agreePhysical" required>
                        <label class="form-check-label small text-secondary" for="agreePhysical">
                            Saya berada dalam kondisi jasmani dan rohani yang sehat serta siap secara fisik untuk mengikuti rangkaian seleksi fisik maupun pertandingan.
                        </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input rounded-0 border-dark shadow-none" type="checkbox" name="agree_terms" id="agreeTerms" required>
                        <label class="form-check-label small text-secondary" for="agreeTerms">
                            Saya menyetujui kebijakan panitia penyelenggara terkait publikasi dokumentasi dan keputusan juri yang bersifat mutlak.
                        </label>
                    </div>
                </div>

                <button type="submit" class="btn btn-dark rounded-0 w-100 py-3 font-montserrat fw-bold text-uppercase tracking-wider shadow-sm" style="font-size: 0.85rem; letter-spacing: 1px;">
                    KIRIM DATA PENDAFTARAN &rarr;
                </button>
            </form>
        </div>

    </div>
</div>