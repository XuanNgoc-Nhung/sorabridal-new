@php
$filmSets = [
[
'text' => 'Tầm nhìn panoramic, golden hour và ánh sáng tự nhiên — lý tưởng cho những khung hình cưới đầy cảm xúc giữa
hoàng hôn Hà Nội.',
'img' => 'https://mimosawedding.vn/wp-content/uploads/2023/07/phim-truong-biet-thu-hoa-hong-rose-valley-32.jpg',
'name' => "Sora's Rooftop",
'role' => 'Tầng 8, 315 Bạch Mai, Hà Nội',
],
[
'text' => 'Concept sân vườn, phong cách minimalist trong không gian giàu cảm xúc — nơi mỗi góc chụp đều kể câu chuyện
tình yêu của riêng hai bạn.',
'img' => 'https://mimosawedding.vn/wp-content/uploads/2025/10/album-studio-han-quoc-2025-6.jpg',
'name' => "Sora's Mansion",
'role' => 'Hoàng Mai, Hà Nội',
],
];
$aos = aos_for_section('film-set');
@endphp

<section id="section-film-set" class="py-5 overflow-hidden">
    <div class="container-xl">
        <div class="text-center text-uppercase mx-auto mb-5 col-lg-8 section-title-wrapper">
            <p class="section-title" data-aos="{{ $aos }}">Hệ sinh thái riêng</p>
            <p class="section-description" data-aos="{{ $aos }}">Phim trường & Concept độc quyền
            </p>
        </div>

        <div class="row g-4" data-aos="{{ $aos }}">
            @foreach ($filmSets as $filmSet)
            <div class="col-12 col-md-6">
                <div class="card border-0 bg-light h-100 text-center p-4">
                    <img class="lazyload rounded mx-auto mb-3 object-fit-cover w-100" style="height: 320px;"
                        data-src="{{ $filmSet['img'] }}" alt="{{ $filmSet['name'] }}">
                    <p class="mb-4">{{ $filmSet['text'] }}</p>
                    <div class="d-flex align-items-center justify-content-center flex-wrap gap-2 mb-0">
                        <span class="fw-semibold">{{ $filmSet['name'] }}</span>
                        <span class="text-muted" aria-hidden="true">·</span>
                        <span class="small text-muted">{{ $filmSet['role'] }}</span>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
