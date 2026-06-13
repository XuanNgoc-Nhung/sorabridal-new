@php
$postProductionItems = [
[
'title' => 'Tông màu & ánh sáng',
'before' => 'https://mimosawedding.vn/wp-content/uploads/2025/10/album-studio-han-quoc-2025-6.jpg',
'after' => 'https://mimosawedding.vn/wp-content/uploads/2025/07/concept-xe-co-dien-thanh-lich-44.jpg',
],
[
'title' => 'Chỉnh da & chi tiết',
'before' => 'https://mimosawedding.vn/wp-content/uploads/2025/08/tinh-ca-ha-thanh-33.jpg',
'after' => 'https://mimosawedding.vn/wp-content/uploads/2025/05/concept-tinh-te-lang-man-11-1.jpg',
],
[
'title' => 'Phong cách Hàn Quốc',
'before' => 'https://mimosawedding.vn/wp-content/uploads/2025/04/concept-xe-co-classic-26.jpg',
'after' => 'https://mimosawedding.vn/wp-content/uploads/2025/02/album-biet-thu-studio-vu-huyen-88.jpg',
],
[
'title' => 'Hoàn thiện album cưới',
'before' => 'https://mimosawedding.vn/wp-content/uploads/2025/06/album-dai-lai-resort-95.jpg',
'after' => 'https://mimosawedding.vn/wp-content/uploads/2025/12/concept-ngoi-nha-hanh-phuc-51.jpg',
],
];
$aos = aos_for_section('post-production');
@endphp

<section id="section-post-production" class="py-5 overflow-hidden">
    <div class="container-xl">
        <div class="text-center text-uppercase mx-auto mb-3 col-lg-8 section-title-wrapper">
            <p class="section-title" data-aos="{{ $aos }}">Trước & Sau chỉnh sửa</p>
            <p class="section-description" data-aos="{{ $aos }}">Không chỉ chụp ảnh – Sora Studio đưa mỗi khoảnh khắc lên
                tầm cao nghệ thuật. Cùng xem sự khác biệt kỳ diệu sau khi qua tay đội ngũ retouch chuyên nghiệp của Sora
                dưới đây nhé...</p>
        </div>

        <div class="row g-4" data-aos="{{ $aos }}">
            @foreach ($postProductionItems as $item)
            <div class="col-12 col-md-6 col-lg-6">
                <div class="post-production-card h-100">
                    <p class="post-production-card__title mb-1">
                        {{-- <span class="post-production-card__index" aria-hidden="true">{{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}</span>
                        --}}
                        <span class="post-production-card__label">{{ $loop->iteration }} - {{ $item['title'] }}</span>
                    </p>
                    <div class="ba-slider" data-ba-slider>
                        <img class="lazyload ba-slider__img ba-slider__img--after w-100 object-fit-cover"
                            data-src="{{ $item['after'] }}" alt="{{ $item['title'] }} — Sau hậu kỳ">
                        <div class="ba-slider__before">
                            <img class="lazyload ba-slider__img ba-slider__img--before object-fit-cover"
                                data-src="{{ $item['before'] }}" alt="{{ $item['title'] }} — Trước hậu kỳ">
                        </div>
                        <div class="ba-slider__handle" aria-hidden="true">
                            <span class="ba-slider__handle-line"></span>
                            <span class="ba-slider__handle-grip">
                                <svg width="10" height="16" viewBox="0 0 10 16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 1L1 15" stroke="currentColor" stroke-width="1.5"
                                        stroke-linecap="round" />
                                    <path d="M9 1L9 15" stroke="currentColor" stroke-width="1.5"
                                        stroke-linecap="round" />
                                </svg>
                            </span>
                        </div>
                        <span class="ba-slider__label ba-slider__label--before">Trước</span>
                        <span class="ba-slider__label ba-slider__label--after">Sau</span>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
