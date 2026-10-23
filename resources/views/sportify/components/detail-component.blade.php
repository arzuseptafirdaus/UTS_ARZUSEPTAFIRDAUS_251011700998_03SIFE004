
<div class="py-5 position-relative overflow-hidden text-white border-bottom border-dark" style="min-height: 420px; display: flex; align-items: center;">
    <img src="{{ asset('images/' . $sport->image) }}" 
         alt="{{ $sport->name }}" 
         class="position-absolute w-100 h-100 top-0 start-0 object-fit-cover"
         onerror="this.src='https://images.unsplash.com/photo-1508098682722-e99c43a406b2?auto=format&fit=crop&w=1200&q=80'">
    
    <div class="position-absolute w-100 h-100 top-0 start-0" style="background: linear-gradient(180deg, rgba(0,0,0,0.65) 0%, rgba(0,0,0,0.88) 100%); z-index: 1;"></div>

    
    <div class="container py-4 position-relative" style="z-index: 2;">
        <div class="row align-items-center justify-content-between g-4">
            <div class="col-lg-8">
                <span class="font-googlesans fw-bold text-uppercase text-white-50 small tracking-widest d-block mb-2" style="letter-spacing: 2.5px;">
                    KATEGORI: {{ strtoupper($sport->category) }} &bull; ASAL: {{ strtoupper($sport->origin_country) }}
                </span>
                <h1 class="font-archivo display-3 fw-bold text-uppercase text-white m-0" style="letter-spacing: -0.5px; line-height: 1.1;">
                    {{ $sport->name }}
                </h1>
                <p class="font-montserrat text-white-50 mt-3 mb-0" style="max-width: 680px; font-weight: 300; font-size: 1rem; line-height: 1.6;">
                    {{ $sport->description }}
                </p>
            </div>
            <div class="col-lg-4 text-lg-end">
                <a href="{{ route('sport') }}" class="btn btn-outline-light rounded-0 font-oswald fw-bold text-uppercase px-4 py-3" style="font-size: 0.85rem; letter-spacing: 1px;">
                    &larr; KEMBALI KE DIREKTORI
                </a>
            </div>
        </div>
    </div>
</div>


<div class="py-5 bg-white">
    <div class="container py-3">
        
        
        <div class="row g-4 mb-5">
            
            
            <div class="col-lg-5">
                <div class="h-100 p-4 bg-light border border-dark rounded-0 d-flex flex-column justify-content-between">
                    <div>
                        <span class="font-googlesans text-muted fw-bold small tracking-widest text-uppercase d-block mb-1" style="font-size: 0.7rem; letter-spacing: 1.5px;">
                            SPESIFIKASI SPONSOR & LOGISTIK
                        </span>
                        <h3 class="font-oswald fw-bold text-uppercase text-dark mb-3" style="font-size: 1.35rem; letter-spacing: 0.5px;">
                            PERALATAN STANDAR RESMI
                        </h3>
                        <p class="font-montserrat text-secondary mb-4" style="font-size: 0.88rem; line-height: 1.6;">
                            Seluruh perlengkapan berikut wajib memenuhi standar spesifikasi federasi internasional dan telah diverifikasi sebelum pertandingan dimulai.
                        </p>

                        
                        <div class="d-flex flex-wrap gap-2">
                            @php
                                $equipments = array_map('trim', explode(',', $sport->equipment));
                            @endphp
                            @foreach($equipments as $item)
                                <span class="bg-white border border-dark font-oswald fw-bold text-uppercase text-dark px-3 py-2 small" style="font-size: 0.78rem; letter-spacing: 0.5px;">
                                    {{ $item }}
                                </span>
                            @endforeach
                        </div>
                    </div>

                    <div class="mt-4 pt-3 border-top border-secondary border-opacity-25">
                        <span class="font-montserrat text-muted small d-block">
                            <i class="fa-solid fa-circle-check text-dark me-1"></i> Standar Kualifikasi Resmi Sportify 2026
                        </span>
                    </div>
                </div>
            </div>

            
            <div class="col-lg-7">
                <div class="h-100 p-4 border border-dark rounded-0 bg-white d-flex flex-column justify-content-between">
                    <div>
                        <span class="font-googlesans text-muted fw-bold small tracking-widest text-uppercase d-block mb-1" style="font-size: 0.7rem; letter-spacing: 1.5px;">
                            PETUNJUK TEKNIS PERMAINAN
                        </span>
                        <h3 class="font-oswald fw-bold text-uppercase text-dark mb-3" style="font-size: 1.35rem; letter-spacing: 0.5px;">
                            REGULASI & KETENTUAN PERTANDINGAN
                        </h3>
                        
                        
                        <ul class="font-montserrat text-dark ps-3 m-0" style="font-size: 0.9rem; line-height: 1.8;">
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
                        <span class="font-montserrat text-muted small d-block">
                            <i class="fa-solid fa-shield-halved text-dark me-1"></i> Mengacu pada Regulasi Resmi Federasi Olahraga Dunia
                        </span>
                    </div>
                </div>
            </div>

        </div>

        
        <hr class="border-dark opacity-25 my-5">

        
<div class="pt-2" id="form-pendaftaran">
    <div class="mb-4 text-center text-md-start">
        <span class="font-googlesans text-muted fw-bold small tracking-widest text-uppercase d-block mb-1" style="font-size: 0.75rem; letter-spacing: 2px;">
            FORMULIR RESMI
        </span>
        <h3 class="font-archivo text-uppercase text-dark m-0" style="font-size: 1.75rem; letter-spacing: -0.5px;">
            PENGAJUAN SELEKSI & PENDAFTARAN EVENT
        </h3>
        <p class="font-montserrat text-muted small mt-1">
            Silakan isi data diri dan lengkapi pernyataan kesediaan di bawah ini untuk mengikuti kualifikasi resmi.
        </p>
    </div>

    <form id="pendaftaranForm" class="font-montserrat" onsubmit="return false;">
        @csrf
        <input type="hidden" name="sport_id" value="{{ $sport->id }}">

        <div class="row g-3 mb-3">
            <div class="col-md-6">
                <label class="form-label font-oswald fw-bold text-uppercase small text-dark" style="letter-spacing: 0.5px;">Nama Lengkap Atlet / Tim</label>
                <input type="text" id="inputName" name="name" class="form-control rounded-0 border-dark shadow-none py-2 px-3" placeholder="Masukkan nama lengkap..." value="Arzu Septa Firdaus">
            </div>
            <div class="col-md-6">
                <label class="form-label font-oswald fw-bold text-uppercase small text-dark" style="letter-spacing: 0.5px;">Alamat Email Aktif</label>
                <input type="email" id="inputEmail" name="email" class="form-control rounded-0 border-dark shadow-none py-2 px-3" placeholder="nama@domain.com" value="arzu@sportify.id">
            </div>
        </div>

        <div class="row g-3 mb-3">
            <div class="col-md-6">
                <label class="form-label font-oswald fw-bold text-uppercase small text-dark" style="letter-spacing: 0.5px;">Nomor WhatsApp / Telepon</label>
                <input type="text" name="phone" class="form-control rounded-0 border-dark shadow-none py-2 px-3" placeholder="08xxxxxxxxxx" value="081234567890">
            </div>
            <div class="col-md-6">
                <label class="form-label font-oswald fw-bold text-uppercase small text-dark" style="letter-spacing: 0.5px;">Kategori Kualifikasi</label>
                <select name="category_level" class="form-select rounded-0 border-dark shadow-none py-2 px-3 font-montserrat">
                    <option value="Pro">Profesional / Open Division</option>
                    <option value="Semi-Pro">Semi-Profesional</option>
                    <option value="Amateur">Amatir / Pelajar</option>
                </select>
            </div>
        </div>

        <div class="mb-4">
            <label class="form-label font-oswald fw-bold text-uppercase small text-dark" style="letter-spacing: 0.5px;">Catatan / Portofolio Prestasi</label>
            <textarea name="notes" rows="4" class="form-control rounded-0 border-dark shadow-none p-3" placeholder="Tuliskan catatan singkat atau pengalaman event sebelumnya..."></textarea>
        </div>

        
        <div class="bg-light p-4 border border-dark rounded-0 mb-4">
            <h6 class="font-oswald fw-bold text-uppercase small text-dark mb-3" style="letter-spacing: 0.5px;">Pernyataan & Persetujuan Atlet:</h6>
            
            <div class="form-check mb-2">
                <input class="form-check-input rounded-0 border-dark shadow-none" type="checkbox" name="agree_rules" id="agreeRules" checked>
                <label class="form-check-label small text-secondary" for="agreeRules">
                    Saya menyatakan bahwa seluruh data diri yang saya berikan adalah benar dan saya sanggup mematuhi seluruh regulasi pertandingan resmi yang berlaku.
                </label>
            </div>

            <div class="form-check mb-2">
                <input class="form-check-input rounded-0 border-dark shadow-none" type="checkbox" name="agree_physical" id="agreePhysical" checked>
                <label class="form-check-label small text-secondary" for="agreePhysical">
                    Saya berada dalam kondisi jasmani dan rohani yang sehat serta siap secara fisik untuk mengikuti rangkaian seleksi fisik maupun pertandingan.
                </label>
            </div>

            <div class="form-check">
                <input class="form-check-input rounded-0 border-dark shadow-none" type="checkbox" name="agree_terms" id="agreeTerms" checked>
                <label class="form-check-label small text-secondary" for="agreeTerms">
                    Saya menyetujui kebijakan panitia penyelenggara terkait publikasi dokumentasi dan keputusan juri yang bersifat mutlak.
                </label>
            </div>
        </div>

        
        <button type="button" class="btn btn-dark rounded-0 w-100 py-3 font-oswald fw-bold text-uppercase tracking-wider shadow-sm" data-bs-toggle="modal" data-bs-target="#successModal" onclick="updateModalData()" style="font-size: 0.95rem; letter-spacing: 1px;">
            KIRIM DATA PENDAFTARAN &rarr;
        </button>
    </form>
</div>


<div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content rounded-0 border border-dark shadow-lg">
            <div class="modal-header bg-dark text-white rounded-0 border-0 py-3">
                <h5 class="modal-title font-oswald fw-bold text-uppercase" id="successModalLabel" style="letter-spacing: 1px;">
                    <i class="fa-solid fa-circle-check text-success me-2"></i> FORMULIR TERKIRIM
                </h5>
                <button type="button" class="btn-close btn-close-white rounded-0 shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center p-4 p-md-5 font-montserrat">
                <div class="mb-3">
                    <i class="fa-solid fa-paper-plane fs-1 text-dark"></i>
                </div>
                <h4 class="font-archivo text-uppercase text-dark mb-2" style="font-size: 1.35rem;">
                    PENGAJUAN SELEKSI DITERIMA!
                </h4>
                <p class="text-muted small mb-4" style="line-height: 1.6;">
                    Terima kasih, <strong id="modalName" class="text-dark">Arzu Septa Firdaus</strong>! Data kualifikasi kamu untuk cabang <strong class="text-dark">{{ $sport->name }}</strong> berhasil terdaftar dalam sistem simulasi Sportify.
                </p>
                
                <div class="p-3 bg-light border border-dark text-start mb-4 small">
                    <div class="d-flex justify-content-between mb-1">
                        <span class="text-muted">Kode Registrasi:</span>
                        <strong class="font-oswald text-dark">SPT-2026-{{ rand(1000, 9999) }}</strong>
                    </div>
                    <div class="d-flex justify-content-between mb-1">
                        <span class="text-muted">Email Konfirmasi:</span>
                        <strong id="modalEmail" class="text-dark">arzu@sportify.id</strong>
                    </div>
                    <div class="d-flex justify-content-between">
                        <span class="text-muted">Status Seleksi:</span>
                        <span class="badge bg-dark text-white font-oswald rounded-0 fw-normal">PENDING VERIFICATION</span>
                    </div>
                </div>

                <p class="text-muted small m-0" style="font-size: 0.78rem;">
                    <i class="fa-solid fa-info-circle me-1"></i> Tim admin panitia akan memverifikasi berkas kamu dalam 1-3 hari kerja.
                </p>
            </div>
            <div class="modal-footer bg-light border-top border-dark rounded-0 p-3">
                <button type="button" class="btn btn-dark rounded-0 w-100 font-oswald fw-bold text-uppercase py-2" data-bs-dismiss="modal" style="letter-spacing: 1px;">
                    TUTUP & KEMBALI
                </button>
            </div>
        </div>
    </div>
</div>

<script>
    function updateModalData() {
        const nameVal = document.getElementById('inputName').value;
        const emailVal = document.getElementById('inputEmail').value;

        if (nameVal.trim() !== '') {
            document.getElementById('modalName').textContent = nameVal;
        }
        if (emailVal.trim() !== '') {
            document.getElementById('modalEmail').textContent = emailVal;
        }
    }
</script>