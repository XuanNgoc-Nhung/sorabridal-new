@php
    $newsItems = [
        [
            'title' => 'Phim trường Smiley Ville – Địa chỉ chụp ảnh Phong cách Châu Âu cực Hot',
            'description' => 'Phim trường Smiley Ville từ lâu đã trở thành một biểu tượng của sự sang trọng và đa dạng trong làng nhiếp ảnh cưới tại Hà Nội.',
            'image' => 'https://mimosawedding.vn/wp-content/uploads/2023/07/review-phim-truong-smiley-ville-dong-anh-33.jpg',
            'time' => '21-04-2026',
            'url' => '/tin-tuc',
        ],
        [
            'title' => 'Phim trường Ray Concept – Studio chụp ảnh cưới phong cách Hàn Quốc tối giản',
            'description' => 'Phim trường Ray Concept từ lâu đã khẳng định vị thế là một trong những điểm đến hàng đầu dành cho các cặp đôi yêu thích phong cách Hàn.',
            'image' => 'https://mimosawedding.vn/wp-content/uploads/2023/07/Phim-truong-ray-concept-phim-truong-mini-dep-nhat-ha-noi3.jpg',
            'time' => '20-04-2026',
            'url' => '/tin-tuc',
        ],
        [
            'title' => 'Phim trường Biệt thự Hoa Hồng – Không gian lãng mạn cho album cưới',
            'description' => 'Phim trường Biệt thự Hoa Hồng (Rose Valley) nổi danh là một trong những địa điểm chụp ảnh cưới đẳng cấp với không gian xanh mát.',
            'image' => 'https://mimosawedding.vn/wp-content/uploads/2023/07/phim-truong-biet-thu-hoa-hong-rose-valley-32.jpg',
            'time' => '19-04-2026',
            'url' => '/tin-tuc',
        ],
        [
            'title' => 'Phim trường Santorini – Concept chụp ảnh cưới đậm chất Hy Lạp',
            'description' => 'Giữa vô số bối cảnh chụp ảnh hiện nay, Phim trường Santorini luôn tạo dấu ấn riêng nhờ không gian mang đậm hơi thở Địa Trung Hải.',
            'image' => 'https://mimosawedding.vn/wp-content/uploads/2023/07/phim-truong-santorini-2-1.jpg',
            'time' => '16-04-2026',
            'url' => '/tin-tuc',
        ],
        [
            'title' => 'Phim trường Lavender Park – Thiên đường hoa oải hương cho cặp đôi',
            'description' => 'Giữa rất nhiều địa điểm chụp ảnh ngoại cảnh hiện nay, Phim trường Lavender Park vẫn là cái tên được các cặp đôi yêu thích.',
            'image' => 'https://mimosawedding.vn/wp-content/uploads/2023/07/Phim-truong-Lavender-Park-13.jpg',
            'time' => '15-04-2026',
            'url' => '/tin-tuc',
        ],
        [
            'title' => 'Album ảnh cưới đẹp tại biển Quan Lạn – Khoảnh khắc ngọt ngào bên biển',
            'description' => 'Bộ ảnh cưới tại biển Quan Lạn mang đến không gian trong lành, thơ mộng – lựa chọn lý tưởng cho các cặp đôi yêu thích concept biển.',
            'image' => 'https://mimosawedding.vn/wp-content/uploads/2023/05/23-Copy.jpg',
            'time' => '03-08-2023',
            'url' => '/tin-tuc',
        ],
    ];
@endphp

<section id="section-news" class="py-5 overflow-hidden">
    <div class="container-xl">
        <div class="text-center text-uppercase mx-auto mb-4 col-lg-8 section-title-wrapper">
            <p class="section-title" data-aos="fade-up">Tin tức</p>
            <p class="section-description" data-aos="fade-up">Cập nhật những thông tin và câu chuyện đẹp từ Sora Bridal</p>
        </div>

        @if (count($newsItems) > 0)
            <div data-slick="home-news" data-aos="fade-up">
                @foreach ($newsItems as $item)
                    <div class="px-2">
                        <article class="news-card h-100">
                            <a href="{{ $item['url'] }}" class="news-card__image d-block overflow-hidden">
                                <img class="lazyload news-card__img w-100 object-fit-cover"
                                    data-src="{{ $item['image'] }}"
                                    alt="{{ $item['title'] }}">
                            </a>
                            <div class="news-card__body">
                                <time class="news-card__time d-block" datetime="{{ $item['time'] }}">{{ $item['time'] }}</time>
                                <h3 class="news-card__title">
                                    <a href="{{ $item['url'] }}">{{ $item['title'] }}</a>
                                </h3>
                                <p class="news-card__desc mb-0">{{ $item['description'] }}</p>
                            </div>
                        </article>
                    </div>
                @endforeach
            </div>

            <div class="d-flex align-items-center justify-content-center mt-4 gap-3">
                <div id="arrow_home_news" class="d-flex"></div>
                <div class="progress flex-grow-1" style="height: 2px; max-width: 400px;" role="progressbar" aria-valuemin="0" aria-valuemax="100">
                    <div class="progress-bar bg-dark progress_home_news" style="width: 0%"></div>
                    <span class="visually-hidden slider__label"></span>
                </div>
            </div>

            <div class="text-center mt-4" data-aos="fade-up">
                <a href="/tin-tuc" class="news-card__view-all">
                    Xem tất cả bài viết
                    <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path d="M9.16675 11.3334L12.5001 8.00002L9.16675 4.66669" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M4.5 11.3334L7.83333 8.00002L4.5 4.66669" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </a>
            </div>
        @endif
    </div>
</section>
