@php
    $dresses = [
        ['url' => 'https://mimosawedding.vn/vay_cuoi/charmaine-dress/', 'img' => 'https://mimosawedding.vn/wp-content/uploads/2024/11/charmaine-dress-4.jpg', 'name' => 'Charmaine Dress'],
        ['url' => 'https://mimosawedding.vn/vay_cuoi/cali-bridal-look-303/', 'img' => 'https://mimosawedding.vn/wp-content/uploads/2025/06/cali-look-303-2.jpg', 'name' => 'Cali Bridal Look 303'],
        ['url' => 'https://mimosawedding.vn/vay_cuoi/eleanor-dress/', 'img' => 'https://mimosawedding.vn/wp-content/uploads/2024/11/eleanor-dress-1.jpg', 'name' => 'Eleanor Dress'],
        ['url' => 'https://mimosawedding.vn/vay_cuoi/charmaine-dress/', 'img' => 'https://mimosawedding.vn/wp-content/uploads/2024/11/charmaine-dress-4.jpg', 'name' => 'Charmaine Dress'],
        ['url' => 'https://mimosawedding.vn/vay_cuoi/cali-bridal-look-303/', 'img' => 'https://mimosawedding.vn/wp-content/uploads/2025/06/cali-look-303-2.jpg', 'name' => 'Cali Bridal Look 303'],
        ['url' => 'https://mimosawedding.vn/vay_cuoi/calistal-dress/', 'img' => 'https://mimosawedding.vn/wp-content/uploads/2024/12/calistal-dress-1.jpg', 'name' => 'Calistal Dress'],
        ['url' => 'https://mimosawedding.vn/vay_cuoi/charmaine-dress/', 'img' => 'https://mimosawedding.vn/wp-content/uploads/2024/11/charmaine-dress-4.jpg', 'name' => 'Charmaine Dress'],
        ['url' => 'https://mimosawedding.vn/vay_cuoi/cali-bridal-look-303/', 'img' => 'https://mimosawedding.vn/wp-content/uploads/2025/06/cali-look-303-2.jpg', 'name' => 'Cali Bridal Look 303'],
    ];
@endphp

<section id="section-address" class="py-5 overflow-hidden">
    <div class="container-xl">
        <div class="text-center text-uppercase mx-auto mb-4 col-lg-8 section-title-wrapper">
            <p class="section-title" data-aos="fade-up">Sorabridal</p>
            <p class="section-description" data-aos="fade-up">Váy cưới đẹp</p>
        </div>
        <div class="tab-content" data-aos="fade-up">
            <div class="tab-pane fade show active">
                <div data-slick="address">
                    @foreach ($dresses as $dress)
                        <div class="px-2">
                            <div class="collection-card h-100">
                                <div class="collection-card__media">
                                    <img class="lazyload collection-card__img w-100 object-fit-cover"
                                        data-src="{{ $dress['img'] }}" alt="{{ $dress['name'] }}">
                                    <div class="collection-card__overlay">
                                        <p class="collection-card__desc">{{ $dress['name'] }}</p>
                                        <a href="{{ $dress['url'] }}" class="collection-card__btn btn btn-outline-light btn-sm rounded-pill">Chi tiết</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="d-flex align-items-center justify-content-between mt-4 gap-3">
                    <div id="arrow_address" class="d-flex"></div>
                    <div class="progress flex-grow-1" style="height: 2px;" role="progressbar" aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar bg-dark progress_address" style="width: 0%"></div>
                        <span class="visually-hidden slider__label"></span>
                    </div>
                    <a href="/vay-cuoi" class="btn btn-link text-dark text-decoration-none text-uppercase d-inline-flex align-items-center gap-2 flex-shrink-0">
                        Xem tất cả
                        <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.16675 11.3334L12.5001 8.00002L9.16675 4.66669" stroke="#242424" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M4.5 11.3334L7.83333 8.00002L4.5 4.66669" stroke="#242424" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
