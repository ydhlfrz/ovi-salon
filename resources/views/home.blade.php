@extends('layouts.app')

@section('content')
<!-- Hero Section dengan Background Image di Belakang Tulisan -->
<section id="home" class="position-relative py-5 d-flex align-items-center" style="
    min-height: 85vh; 
    background: linear-gradient(to right, rgba(247, 243, 238, 0.92) 0%, rgba(247, 243, 238, 0.75) 50%, rgba(247, 243, 238, 0.3) 100%), url('{{ asset('images/hero-bg.png') }}') center/cover no-repeat;
">
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-6 col-md-8">
                <p class="text-uppercase small tracking-widest text-muted mb-2" style="letter-spacing: 2px;">{{ __('hero_subtitle') }}</p>
                <h1 class="display-2 font-serif fw-normal mb-3" style="line-height: 1.1; color: var(--text-dark);">{{ __('hero_title') }}</h1>
                <p class="fs-5 text-muted mb-4">{{ __('hero_desc') }}</p>
                <a href="https://wa.me/6285238652587?text=Halo%20OVI%20Studio,%20saya%20ingin%20booking%20appointment" target="_blank" class="btn-custom me-3 shadow-sm py-3 px-4">
                    {{ __('btn_book_wa') }} &rarr;
                </a>
                <p class="small text-muted mt-4"><i class="bi bi-geo-alt me-1"></i> {{ __('hero_location') }}</p>
            </div>
        </div>
    </div>
</section>

<!-- About & Why Choose Us Section -->
<section id="about" class="py-5">
    <div class="container py-4">
        <div class="row align-items-center mb-5">
            <div class="col-md-5 mb-4 mb-md-0">
                <img src="{{ asset('images/about-studio.png') }}" class="img-fluid w-100 shadow-sm" alt="Studio Interior" onerror="this.src='https://images.unsplash.com/photo-1560066984-138dadb4c035?q=80&w=800'">
            </div>
            <div class="col-md-7 ps-md-5">
                <span class="text-uppercase small tracking-widest text-muted" style="letter-spacing: 2px;">{{ __('about_sub') }}</span>
                <h2 class="display-5 font-serif my-3">{{ __('about_title') }}</h2>
                <p class="text-muted leading-relaxed mb-4">
                    {{ __('about_desc') }}
                </p>
                
                <div class="row pt-3 text-center">
                    <div class="col-3 icon-box">
                        <i class="bi bi-stars"></i>
                        <p class="mt-2 mb-0 fw-medium">{{ __('feat_products') }}</p>
                    </div>
                    <div class="col-3 icon-box">
                        <i class="bi bi-shield-check"></i>
                        <p class="mt-2 mb-0 fw-medium">{{ __('feat_hygiene') }}</p>
                    </div>
                    <div class="col-3 icon-box">
                        <i class="bi bi-heart"></i>
                        <p class="mt-2 mb-0 fw-medium">{{ __('feat_care') }}</p>
                    </div>
                    <div class="col-3 icon-box">
                        <i class="bi bi-feather"></i>
                        <p class="mt-2 mb-0 fw-medium">{{ __('feat_experience') }}</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Section Kenapa Memilih OVI Studio -->
        <div class="p-4 p-md-5 my-4 shadow-sm" style="background-color: var(--bg-secondary); border-left: 4px solid var(--accent-color);">
            <div class="row align-items-center">
                <div class="col-lg-4 mb-4 mb-lg-0">
                    <span class="text-uppercase small tracking-widest text-muted" style="letter-spacing: 2px;">{{ __('why_sub') }}</span>
                    <h3 class="display-6 font-serif mt-2 mb-0">{{ __('why_title') }}</h3>
                </div>
                <div class="col-lg-8">
                    <div class="row g-4">
                        <div class="col-md-6">
                            <div class="d-flex align-items-start">
                                <i class="bi bi-person-badge fs-3 me-3 text-dark"></i>
                                <div>
                                    <h6 class="fw-bold mb-1">{{ __('why_1_title') }}</h6>
                                    <p class="small text-muted mb-0">{{ __('why_1_desc') }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex align-items-start">
                                <i class="bi bi-shield-x fs-3 me-3 text-dark"></i>
                                <div>
                                    <h6 class="fw-bold mb-1">{{ __('why_2_title') }}</h6>
                                    <p class="small text-muted mb-0">{{ __('why_2_desc') }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex align-items-start">
                                <i class="bi bi-gem fs-3 me-3 text-dark"></i>
                                <div>
                                    <h6 class="fw-bold mb-1">{{ __('why_3_title') }}</h6>
                                    <p class="small text-muted mb-0">{{ __('why_3_desc') }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex align-items-start">
                                <i class="bi bi-flower1 fs-3 me-3 text-dark"></i>
                                <div>
                                    <h6 class="fw-bold mb-1">{{ __('why_4_title') }}</h6>
                                    <p class="small text-muted mb-0">{{ __('why_4_desc') }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Services Section (Card Gambar + Hover Effect + Pop-up Modal Detail) -->
<section id="services" class="py-5 my-3" style="background-color: var(--bg-primary);">
    <div class="container">
        <div class="text-center mb-5">
            <span class="text-uppercase small tracking-widest text-muted" style="letter-spacing: 2px;">{{ __('services_sub') }}</span>
            <h2 class="display-5 font-serif mt-1">{{ __('services_title') }}</h2>
            <div style="width: 60px; height: 2px; background-color: var(--accent-color); margin: 15px auto 0;"></div>
        </div>

        <div class="row g-4 justify-content-center">
            
            <!-- CARD 1: NAIL SERVICE -->
            <div class="col-md-4">
                <div class="card service-card shadow-sm h-100" data-bs-toggle="modal" data-bs-target="#nailModal">
                    <div class="service-card-img-wrapper">
                        <img src="{{ asset('images/nail-thumb.png') }}" alt="Nail Service" onerror="this.src='https://images.unsplash.com/photo-1604654894610-df63bc536371?q=80&w=800'">
                        <div class="service-card-overlay">
                            <span class="btn btn-light rounded-pill px-4 py-2 fw-bold text-uppercase shadow-sm" style="letter-spacing: 1px;">
                                {{ __('see_details') }} &rarr;
                            </span>
                        </div>
                    </div>
                    <div class="card-body text-center py-4">
                        <h3 class="font-serif fs-3 mb-1">1. Nail Service</h3>
                        <p class="small text-muted mb-0">Callus Care, Nail Art & Add Ons</p>
                    </div>
                </div>
            </div>

            <!-- CARD 2: EYELASH EXTENSIONS -->
            <div class="col-md-4">
                <div class="card service-card shadow-sm h-100" data-bs-toggle="modal" data-bs-target="#lashModal">
                    <div class="service-card-img-wrapper">
                        <img src="{{ asset('images/lash-thumb.png') }}" alt="Eyelash Extensions" onerror="this.src='https://images.unsplash.com/photo-1519014816548-bf5fe059798b?q=80&w=800'">
                        <div class="service-card-overlay">
                            <span class="btn btn-light rounded-pill px-4 py-2 fw-bold text-uppercase shadow-sm" style="letter-spacing: 1px;">
                                {{ __('see_details') }} &rarr;
                            </span>
                        </div>
                    </div>
                    <div class="card-body text-center py-4">
                        <h3 class="font-serif fs-3 mb-1">2. Eyelash Extensions</h3>
                        <p class="small text-muted mb-0">Natural, Soft Volume & Russian Set</p>
                    </div>
                </div>
            </div>

            <!-- CARD 3: BROW & LASHLIFT -->
            <div class="col-md-4">
                <div class="card service-card shadow-sm h-100" data-bs-toggle="modal" data-bs-target="#browModal">
                    <div class="service-card-img-wrapper">
                        <img src="{{ asset('images/brow-thumb.png') }}" alt="Brow & Lashlift" onerror="this.src='https://images.unsplash.com/photo-1583001931096-959e9a1a6223?q=80&w=800'">
                        <div class="service-card-overlay">
                            <span class="btn btn-light rounded-pill px-4 py-2 fw-bold text-uppercase shadow-sm" style="letter-spacing: 1px;">
                                {{ __('see_details') }} &rarr;
                            </span>
                        </div>
                    </div>
                    <div class="card-body text-center py-4">
                        <h3 class="font-serif fs-3 mb-1">3. Brow & Lashlift</h3>
                        <p class="small text-muted mb-0">Brow Bomber & K-Glueless Lashlift</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- MODAL 1: DETAIL NAIL SERVICE -->
<div class="modal fade" id="nailModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content border-0 rounded-0" style="background-color: var(--bg-primary);">
            <div class="modal-header border-0 pb-0">
                <h4 class="modal-title font-serif fs-2">1. Nail Service Price List</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-4">
                <div class="row g-4">
                    <!-- Callus Care -->
                    <div class="col-12">
                        <div class="p-3 bg-white shadow-sm border-start border-4 border-dark">
                            <span class="badge bg-dark mb-1">Dr. Fetto Products</span>
                            <h5 class="fw-bold font-serif fs-4 mb-2">a. Callus Care Treatment</h5>
                            <p class="small text-muted mb-3">Russian Pedi + Callus (Treatment level will be assisted by our nail technician before the service begins)</p>

                            <div class="table-responsive">
                                <table class="table table-sm table-borderless small mb-2">
                                    <tbody>
                                        <tr class="border-bottom">
                                            <td><strong>@Light</strong> - Normal feet with minimal calluses</td>
                                            <td class="text-end"><strong>250K</strong></td>
                                            <td class="text-end">With Gel: <strong>300K</strong></td>
                                        </tr>
                                        <tr class="border-bottom">
                                            <td><strong>@Moderate</strong> - Dry, rough feet with noticeable calluses</td>
                                            <td class="text-end"><strong>350K</strong></td>
                                            <td class="text-end">With Gel: <strong>400K</strong></td>
                                        </tr>
                                        <tr>
                                            <td><strong>@Heavy</strong> - Severely dry feet with deep heel cracks</td>
                                            <td class="text-end"><strong>400K</strong></td>
                                            <td class="text-end">With Gel: <strong>450K</strong></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <small class="text-muted italic"><i class="bi bi-info-circle me-1"></i> "All of our callus treatment are include with Spa (a bath salt, scrub and nourishing cream)"</small>
                        </div>
                    </div>

                    <!-- Nail Art & Add Ons -->
                    <div class="col-md-6">
                        <div class="p-3 bg-white shadow-sm h-100">
                            <h5 class="fw-bold font-serif fs-4 mb-3">b. Nail Art / Add On <small class="text-muted fs-6">(per Nail)</small></h5>
                            <ul class="list-unstyled small mb-0">
                                <li class="d-flex justify-content-between py-1 border-bottom"><span>Single Nail Repair with Gel</span> <strong>30K</strong></li>
                                <li class="d-flex justify-content-between py-1 border-bottom"><span>Soft Gel Tips Extensions</span> <strong>35K</strong></li>
                                <li class="d-flex justify-content-between py-1 border-bottom"><span>Glitter/Reflective/Cat Eye</span> <strong>5K-10K</strong></li>
                                <li class="d-flex justify-content-between py-1 border-bottom"><span>French/Gradient/Chrome/Glazed</span> <strong>7K</strong></li>
                                <li class="d-flex justify-content-between py-1 border-bottom"><span>Simple Hand-Painted Art</span> <strong>10K-15K</strong></li>
                                <li class="d-flex justify-content-between py-1 border-bottom"><span>3D/Embossed Art</span> <strong>10K-15K</strong></li>
                                <li class="d-flex justify-content-between py-1"><span>Polygel/Acrylic Extensions</span> <strong>45K</strong></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Removal -->
                    <div class="col-md-6">
                        <div class="p-3 bg-white shadow-sm h-100">
                            <h5 class="fw-bold font-serif fs-4 mb-3">Removal Service</h5>
                            <ul class="list-unstyled small mb-0">
                                <li class="d-flex justify-content-between py-1 border-bottom"><span>Gel Polish Removal from Ovi</span> <strong>7K</strong></li>
                                <li class="d-flex justify-content-between py-1 border-bottom"><span>Gel Polish Removal from Other Salon</span> <strong>10K</strong></li>
                                <li class="d-flex justify-content-between py-1 border-bottom"><span>Removal Extension/Builder Gel from Ovi</span> <strong>8.5K</strong></li>
                                <li class="d-flex justify-content-between py-1"><span>Removal Extension/Builder Gel from Other Salon</span> <strong>15K</strong></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <a href="https://wa.me/6285238652587?text=Halo%20OVI%20Studio,%20saya%20ingin%20booking%20Nail%20Service" target="_blank" class="btn-custom w-100 text-center mt-4 py-2">
                    <i class="bi bi-whatsapp me-1"></i> {{ __('book_service_wa') }}
                </a>
            </div>
            <div class="modal-footer border-0 pt-0">
                <button type="button" class="btn btn-sm btn-secondary rounded-pill px-3" data-bs-dismiss="modal">{{ __('close') }}</button>
            </div>
        </div>
    </div>
</div>

<!-- MODAL 2: DETAIL EYELASH EXTENSIONS -->
<div class="modal fade" id="lashModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content border-0 rounded-0" style="background-color: var(--bg-primary);">
            <div class="modal-header border-0 pb-0">
                <h4 class="modal-title font-serif fs-2">2. Eyelash Extensions Price List</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-4">
                <div class="row g-4">
                    <div class="col-md-7">
                        <div class="p-3 bg-white shadow-sm h-100">
                            <h5 class="fw-bold font-serif fs-4 mb-3">Lash Sets</h5>
                            <ul class="list-unstyled small mb-0">
                                <li class="py-2 border-bottom">
                                    <div class="d-flex justify-content-between">
                                        <strong>Natural Lash (Single Lash)</strong>
                                        <span class="fw-bold">350K</span>
                                    </div>
                                    <small class="text-muted">Refill: 250K</small>
                                </li>
                                <li class="py-2 border-bottom">
                                    <div class="d-flex justify-content-between">
                                        <strong>Soft Volume Set (2D/3D)</strong>
                                        <span class="fw-bold">400K</span>
                                    </div>
                                    <small class="text-muted">Refill: 250K</small>
                                </li>
                                <li class="py-2">
                                    <div class="d-flex justify-content-between">
                                        <strong>Russian Volume</strong>
                                        <span class="fw-bold">465K</span>
                                    </div>
                                    <small class="text-muted">Refill: 350K</small>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-5">
                        <div class="p-3 bg-white shadow-sm h-100">
                            <h5 class="fw-bold font-serif fs-4 mb-3">Add Ons & Removal</h5>
                            <ul class="list-unstyled small mb-0">
                                <li class="d-flex justify-content-between py-1 border-bottom"><span>Whispy Style</span> <strong>50K</strong></li>
                                <li class="d-flex justify-content-between py-1 border-bottom"><span>Anime Lash Style</span> <strong>75K</strong></li>
                                <li class="d-flex justify-content-between py-1 border-bottom"><span>Remove Extensions from Ovi</span> <strong>50K</strong></li>
                                <li class="d-flex justify-content-between py-1"><span>Remove Extensions from Other Salon</span> <strong>100K</strong></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <a href="https://wa.me/6285238652587?text=Halo%20OVI%20Studio,%20saya%20ingin%20booking%20Eyelash%20Extensions" target="_blank" class="btn-custom w-100 text-center mt-4 py-2">
                    <i class="bi bi-whatsapp me-1"></i> {{ __('book_service_wa') }}
                </a>
            </div>
            <div class="modal-footer border-0 pt-0">
                <button type="button" class="btn btn-sm btn-secondary rounded-pill px-3" data-bs-dismiss="modal">{{ __('close') }}</button>
            </div>
        </div>
    </div>
</div>

<!-- MODAL 3: DETAIL BROW & LASHLIFT -->
<div class="modal fade" id="browModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content border-0 rounded-0" style="background-color: var(--bg-primary);">
            <div class="modal-header border-0 pb-0">
                <h4 class="modal-title font-serif fs-2">3. Brow & Lashlift Price List</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-4">
                <div class="row g-3">
                    <div class="col-12">
                        <div class="p-3 bg-white shadow-sm">
                            <div class="d-flex justify-content-between align-items-center mb-1">
                                <h5 class="fw-bold font-serif fs-4 mb-0">Brow Bomber</h5>
                                <span class="fw-bold fs-5">350K</span>
                            </div>
                            <p class="small text-muted mb-0">brow lamination, shaving, brow tint, nourish</p>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="p-3 bg-white shadow-sm">
                            <div class="d-flex justify-content-between align-items-center mb-1">
                                <h5 class="fw-bold font-serif fs-4 mb-0">Brow Lamination</h5>
                                <span class="fw-bold fs-5">300K</span>
                            </div>
                            <p class="small text-muted mb-0">Brow lift, brow shaving</p>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="p-3 bg-white shadow-sm border-start border-4 border-dark">
                            <span class="badge bg-dark mb-1">Newest Technique</span>
                            <div class="d-flex justify-content-between align-items-center mb-1">
                                <h5 class="fw-bold font-serif fs-4 mb-0">K-Glueless Lashlift & Tint</h5>
                                <span class="fw-bold fs-5">250K</span>
                            </div>
                            <p class="small text-muted mb-0 leading-relaxed">
                                The latest K-Lashlift newest technique perform without use of glue. This technique make your natural lashes straight from the root, revealing every bit of their length for the wide open, K-Beauty gaze.
                            </p>
                        </div>
                    </div>
                </div>

                <a href="https://wa.me/6285238652587?text=Halo%20OVI%20Studio,%20saya%20ingin%20booking%20Brow%20%26%20Lashlift" target="_blank" class="btn-custom w-100 text-center mt-4 py-2">
                    <i class="bi bi-whatsapp me-1"></i> {{ __('book_service_wa') }}
                </a>
            </div>
            <div class="modal-footer border-0 pt-0">
                <button type="button" class="btn btn-sm btn-secondary rounded-pill px-3" data-bs-dismiss="modal">{{ __('close') }}</button>
            </div>
        </div>
    </div>
</div>

<!-- Gallery Section (Hanya 8 Gambar di Home) -->
<section id="gallery" class="py-5" style="background-color: var(--bg-secondary);">
    <div class="container">
        <div class="d-flex justify-content-between align-items-end mb-4">
            <div>
                <span class="text-uppercase small tracking-widest text-muted" style="letter-spacing: 2px;">{{ __('work_sub') }}</span>
                <h2 class="display-6 font-serif m-0">{{ __('work_title') }}</h2>
            </div>
            <!-- Tombol untuk Membuka Modal Semua Gambar Galeri -->
            <button type="button" class="btn btn-link text-dark text-decoration-none fw-bold small p-0" data-bs-toggle="modal" data-bs-target="#fullGalleryModal">
                {{ __('view_gallery') }} &rarr;
            </button>
        </div>
        
        <!-- Grid 8 Gambar Preview di Home Page -->
        <div class="row g-3">
            @forelse($previewGalleries as $gallery)
            <div class="col-6 col-md-3">
                <div class="overflow-hidden shadow-sm position-relative cursor-pointer" onclick="openPreviewModal('{{ asset('storage/' . $gallery->image) }}', '{{ $gallery->title ?? 'OVI Studio Work' }}')">
                    <img src="{{ asset('storage/' . $gallery->image) }}" class="img-fluid w-100" style="height: 220px; object-fit: cover; transition: transform 0.3s ease; cursor: pointer;" alt="{{ $gallery->title ?? 'Gallery Work' }}" onmouseover="this.style.transform='scale(1.05)'" onmouseout="this.style.transform='scale(1)'">
                </div>
            </div>
            @empty
            <div class="col-6 col-md-3"><img src="https://images.unsplash.com/photo-1519014816548-bf5fe059798b?q=80&w=400" class="img-fluid w-100" style="height: 220px; object-fit: cover;" alt="Work"></div>
            <div class="col-6 col-md-3"><img src="https://images.unsplash.com/photo-1604654894610-df63bc536371?q=80&w=400" class="img-fluid w-100" style="height: 220px; object-fit: cover;" alt="Work"></div>
            <div class="col-6 col-md-3"><img src="https://images.unsplash.com/photo-1583001931096-959e9a1a6223?q=80&w=400" class="img-fluid w-100" style="height: 220px; object-fit: cover;" alt="Work"></div>
            <div class="col-6 col-md-3"><img src="https://images.unsplash.com/photo-1632345031435-8727f6897d53?q=80&w=400" class="img-fluid w-100" style="height: 220px; object-fit: cover;" alt="Work"></div>
            @endforelse
        </div>
    </div>
</section>

<!-- MODAL GALERI LENGKAP -->
<div class="modal fade" id="fullGalleryModal" tabindex="-1" aria-labelledby="fullGalleryModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
        <div class="modal-content border-0 rounded-0" style="background-color: var(--bg-primary);">
            <div class="modal-header border-0 pb-2">
                <div>
                    <span class="text-uppercase small tracking-widest text-muted" style="letter-spacing: 2px;">{{ __('work_sub') }}</span>
                    <h3 class="modal-title font-serif fs-2" id="fullGalleryModalLabel">{{ __('work_title') }}</h3>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            
            <div class="modal-body p-4" style="max-height: 75vh; overflow-y: auto;">
                <div class="row g-3">
                    @forelse($allGalleries as $item)
                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="shadow-sm overflow-hidden bg-white p-1 cursor-pointer position-relative gallery-item-hover" style="cursor: pointer;" onclick="openPreviewModal('{{ asset('storage/' . $item->image) }}', '{{ $item->title ?? 'OVI Studio Work' }}')">
                            <img src="{{ asset('storage/' . $item->image) }}" class="img-fluid w-100" style="height: 250px; object-fit: cover;" alt="{{ $item->title ?? 'OVI Gallery' }}">
                            @if($item->title)
                                <small class="d-block text-center text-muted py-1 fw-bold">{{ $item->title }}</small>
                            @endif
                        </div>
                    </div>
                    @empty
                    <div class="col-12 text-center text-muted py-5">Belum ada foto galeri yang diunggah.</div>
                    @endforelse
                </div>
            </div>

            <div class="modal-footer border-0">
                <button type="button" class="btn btn-sm btn-secondary rounded-pill px-4" data-bs-dismiss="modal">{{ __('close') }}</button>
            </div>
        </div>
    </div>
</div>

<!-- MODAL PREVIEW FULLSCREEN / MEMBESARKAN GAMBAR -->
<div class="modal fade" id="imagePreviewModal" tabindex="-1" aria-hidden="true" style="background: rgba(0, 0, 0, 0.85);">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content bg-transparent border-0">
            <div class="modal-header border-0 pb-0">
                <h5 class="modal-title text-white font-serif" id="previewModalTitle"></h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center p-2">
                <img id="previewModalImage" src="" class="img-fluid rounded shadow-lg" style="max-height: 80vh; object-fit: contain;" alt="Preview Large Image">
            </div>
        </div>
    </div>
</div>

<!-- SCRIPT JS UNTUK EVENT KLIK MEMBESARKAN GAMBAR -->
<script>
    function openPreviewModal(imageSrc, titleText) {
        document.getElementById('previewModalImage').src = imageSrc;
        document.getElementById('previewModalTitle').innerText = titleText || '';
        
        var previewModal = new bootstrap.Modal(document.getElementById('imagePreviewModal'));
        previewModal.show();
    }
</script>

<!-- Section Rating & Testimonial / Google Reviews -->
<section class="py-5" style="background-color: var(--bg-secondary);">
    <div class="container text-center">
        <span class="text-uppercase small tracking-widest text-muted" style="letter-spacing: 2px;">{{ __('review_sub') }}</span>
        <h2 class="display-6 font-serif mt-1 mb-3">{{ __('review_title') }}</h2>
        
        <!-- Header Rating Google -->
        <div class="d-inline-flex align-items-center bg-white px-4 py-2 rounded-pill shadow-sm mb-4">
            <span class="fw-bold fs-4 me-2">5.0</span>
            <div class="text-warning me-2 fs-5">
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
            </div>
            <span class="text-muted small border-start ps-2">{{ __('reviewed_on') }} <i class="bi bi-google text-primary ms-1"></i> Google Maps</span>
        </div>

        <!-- Cards Review -->
        <div class="row g-4 text-start">
            <div class="col-md-4">
                <div class="bg-white p-4 h-100 shadow-sm rounded-0">
                    <div class="text-warning mb-2">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                    </div>
                    <p class="small text-muted italic">"Suka banget sama hasil eyelash dan nail-nya! 😍 Hasilnya cantik, rapi, dan sesuai harapan. Pelayanannya juga bagus dan stafnya ramah. Senang banget dengan hasilnya, bikin makin percaya diri. Recommended banget buat yang mau pasang eyelash dan nail di Lombok! 💅🏻✨❤️"</p>
                    <div class="fw-bold small">— Yuliana Yustina</div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="bg-white p-4 h-100 shadow-sm rounded-0">
                    <div class="text-warning mb-2">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                    </div>
                    <p class="small text-muted italic">"So happy & satisfied with my nails :) Even after almost 2 weeks, it still looks fresh. I asked for classic gel manicure. The ladies know their craft, everything was clean and comfortable. Thank you so much!"</p>
                    <div class="fw-bold small">— A. Hermann</div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="bg-white p-4 h-100 shadow-sm rounded-0">
                    <div class="text-warning mb-2">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                    </div>
                    <p class="small text-muted italic">"Blink and you would miss this little gem. So friendly, attention to detail is something else. Owner conversant in English and so courteous,  had 2 girls, one for each hand. If in Kuta, lombok, give them a visit or booking. I wish them success in the future, I will be back."</p>
                    <div class="fw-bold small">— Geoff Aubrey</div>
                </div>
            </div>
        </div>

        <div class="mt-4">
            <a href="https://maps.app.goo.gl/fCEPpsCo36EUN9ex5?g_st=iwb" target="_blank" class="btn btn-outline-dark btn-sm rounded-pill px-4">
                <i class="bi bi-google me-1"></i> {{ __('see_all_reviews') }} &rarr;
            </a>
        </div>
    </div>
</section>

<!-- Contact & Interactive Google Maps Section -->
<section id="contact" class="py-5" style="background-color: var(--bg-secondary);">
    <div class="container">
        <div class="row align-items-center g-4">
            <div class="col-lg-6">
                <div class="shadow-sm overflow-hidden" style="border-radius: 4px; height: 350px;">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15764.71714930353!2d116.2750!3d-8.8920!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dc2f5e3e218204b%3A0x88981665a31a986d!2sKuta%2C%20Pujut%2C%20Central%20Lombok%20Regency%2C%20West%20Nusa%2 Tenggara!5e0!3m2!1sen!2sid!4v1710000000000!5m2!1sen!2sid" 
                        width="100%" 
                        height="100%" 
                        style="border:0;" 
                        allowfullscreen="" 
                        loading="lazy" 
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>

            <div class="col-lg-6 ps-lg-5">
                <span class="text-uppercase small tracking-widest text-muted" style="letter-spacing: 2px;">{{ __('find_us') }}</span>
                <h2 class="display-6 font-serif mb-4">{{ __('visit_title') }}</h2>

                <div class="row g-4">
                    <div class="col-md-6">
                        <h6 class="fw-bold mb-2"><i class="bi bi-geo-alt me-1 text-danger"></i> {{ __('loc_title') }}</h6>
                        <p class="small text-muted mb-2">Kuta, Pujut, Kabupaten Lombok Tengah, West Nusa Tenggara</p>
                        <a href="https://maps.app.goo.gl/fCEPpsCo36EUN9ex5?g_st=iwb" target="_blank" class="small text-dark text-decoration-underline fw-bold">{{ __('get_directions') }} &rarr;</a>
                    </div>

                    <div class="col-md-6">
                        <h6 class="fw-bold mb-2"><i class="bi bi-phone me-1 text-primary"></i> {{ __('contact_admin') }}</h6>
                        <p class="small text-muted mb-2">+62 852-3865-2587</p>
                        <a href="https://wa.me/6285238652587?text=Halo%20Admin%20OVI%20Studio,%20saya%20ingin%20bertanya" target="_blank" class="small text-success text-decoration-none fw-bold">
                            <i class="bi bi-whatsapp me-1"></i> {{ __('chat_wa') }} &rarr;
                        </a>
                    </div>

                    <div class="col-md-12 pt-2">
                        <h6 class="fw-bold mb-3"><i class="bi bi-share me-1 text-secondary"></i> {{ __('follow_us') }}</h6>
                        <div class="d-flex align-items-center gap-2">
                            <a href="https://instagram.com/ovi.eyelash" target="_blank" class="social-link" title="Instagram @ovi.eyelash">
                                <i class="bi bi-instagram" style="color: #E1306C;"></i>
                            </a>
                            <a href="https://tiktok.com/@ovi.eyelash" target="_blank" class="social-link" title="TikTok @ovi.eyelash">
                                <i class="bi bi-tiktok" style="color: #000000;"></i>
                            </a>
                            <a href="https://facebook.com/ovi.eyelash" target="_blank" class="social-link" title="Facebook @ovi.eyelash">
                                <i class="bi bi-facebook" style="color: #1877F2;"></i>
                            </a>
                            <a href="https://wa.me/6285238652587" target="_blank" class="social-link" title="WhatsApp Admin">
                                <i class="bi bi-whatsapp" style="color: #25D366;"></i>
                            </a>
                        </div>
                        <small class="text-muted d-block mt-2">{{ __('follow_desc') }}</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection