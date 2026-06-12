@php
    $concepts = [
        ['url' => 'https://mimosawedding.vn/concept/concept-anh-nen-hoang-gia/', 'img' => 'https://mimosawedding.vn/wp-content/uploads/2026/06/mau54-bthu-nen-1-1.jpg', 'sub' => 'Biệt Thự Hoa Hồng', 'title' => 'Concept ánh nến hoàng gia'],
        ['url' => 'https://mimosawedding.vn/concept/concept-tiec-ruou-hoa-lang-man/', 'img' => 'https://mimosawedding.vn/wp-content/uploads/2026/06/mau54-bthu-bantiechoa-11.jpg', 'sub' => 'Biệt Thự Hoa Hồng', 'title' => 'Concept tiệc rượu hoa lãng mạn'],
        ['url' => 'https://mimosawedding.vn/concept/concept-hoa-kho-han-quoc/', 'img' => 'https://mimosawedding.vn/wp-content/uploads/2026/06/mau54-stu-cokho-5-1.jpg', 'sub' => 'Studio JuHee', 'title' => 'Concept hoa khô Hàn Quốc'],
        ['url' => 'https://mimosawedding.vn/concept/tinh-yeu-rang-ro/', 'img' => 'https://mimosawedding.vn/wp-content/uploads/2026/04/25-Copy.jpg', 'sub' => 'Concept Hàn Quốc', 'title' => 'TÌNH YÊU RẠNG RỠ'],
        ['url' => 'https://mimosawedding.vn/concept/vu-khuc-tinh-yeu/', 'img' => 'https://mimosawedding.vn/wp-content/uploads/2026/04/118-Copy.jpg', 'sub' => 'Concept cá tính sang trọng', 'title' => 'VŨ KHÚC TÌNH YÊU'],
        ['url' => 'https://mimosawedding.vn/concept/ban-giao-huong-tinh-yeu/', 'img' => 'https://mimosawedding.vn/wp-content/uploads/2026/04/93-Copy.jpg', 'sub' => 'Concept hoàng gia sang trọng', 'title' => 'BẢN GIAO HƯỞNG TÌNH YÊU'],
    ];
@endphp

<section id="section-concept" class="py-5 overflow-hidden" style="background-color: #fdf2f6;">
    <div class="container-xl position-relative">
        <div class="text-center mb-5">
            <img class="lazyload mb-3" style="max-width: 200px;" data-aos="zoom-in" data-src="/wp-content/uploads/2023/05/Group.png" alt="">
            <p class="fs-3 mb-2" data-aos="zoom-in">New concept</p>
            <h2 class="h1 fw-medium text-uppercase mb-0" data-aos="zoom-in">Wedding 2025</h2>
        </div>

        <div data-slick="concept" data-aos="fade-up">
            @foreach ($concepts as $concept)
                <div class="px-2">
                    <div class="card border-0 bg-transparent h-100">
                        <div class="position-relative overflow-hidden">
                            <img class="lazyload w-100 object-fit-cover" style="height: 320px;"
                                data-src="{{ $concept['img'] }}" alt="{{ $concept['title'] }}">
                            <a href="{{ $concept['url'] }}" class="position-absolute top-50 start-50 translate-middle btn btn-light rounded-circle d-flex align-items-center justify-content-center" style="width: 48px; height: 48px;" aria-label="Xem {{ $concept['title'] }}">
                                <svg width="20" height="20" viewBox="0 0 72 68" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M71.5 34.5H0.5" stroke="#ED9A21"/>
                                    <path d="M36 67.5V0" stroke="#ED9A21"/>
                                </svg>
                            </a>
                        </div>
                        <div class="card-body px-0 pt-3 text-center">
                            <p class="small text-muted text-uppercase mb-1">{{ $concept['sub'] }}</p>
                            <h3 class="h6 mb-0">
                                <a href="{{ $concept['url'] }}" class="text-decoration-none text-dark text-uppercase">{{ $concept['title'] }}</a>
                            </h3>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="d-flex justify-content-center mt-4">
            <div id="arrow_concep" class="d-flex"></div>
        </div>

        <div class="text-center mt-4">
            <a href="/concept" class="btn btn-link text-dark text-decoration-none text-uppercase d-inline-flex align-items-center gap-2">
                Xem tất cả bài viết
                <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M9.16675 11.3334L12.5001 8.00002L9.16675 4.66669" stroke="#242424" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M4.5 11.3334L7.83333 8.00002L4.5 4.66669" stroke="#242424" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </a>
        </div>
    </div>
</section>
