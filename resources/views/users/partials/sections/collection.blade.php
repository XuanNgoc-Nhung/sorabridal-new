@php
    $albums = [
        ['url' => 'https://mimosawedding.vn/bo_suu_tao_album/album-anh-cuoi-tai-biet-thu-hoa-hong-studio-juhee/', 'img' => 'https://mimosawedding.vn/wp-content/uploads/2026/06/mau54-bthu-bantiec-1-1.jpg', 'title' => 'ALBUM ẢNH CƯỚI TẠI BIỆT THỰ HOA HỒNG & STUDIO JUHEE'],
        ['url' => 'https://mimosawedding.vn/bo_suu_tao_album/album-anh-cuoi-tai-5-garden-santorini/', 'img' => 'https://mimosawedding.vn/wp-content/uploads/2026/04/61-Copy.jpg', 'title' => 'ALBUM ẢNH CƯỚI TẠI 5 GARDEN & SANTORINI'],
        ['url' => 'https://mimosawedding.vn/bo_suu_tao_album/album-anh-cuoi-dai-hoc-duoc-pho-co/', 'img' => 'https://mimosawedding.vn/wp-content/uploads/2026/04/album_pho_dh-duoc-9.jpg', 'title' => 'ALBUM ẢNH CƯỚI ĐẠI HỌC DƯỢC – PHỐ CỔ'],
        ['url' => 'https://mimosawedding.vn/bo_suu_tao_album/album-anh-cuoi-biet-thu-hoa-hong-studio-juhee-2/', 'img' => 'https://mimosawedding.vn/wp-content/uploads/2025/12/concept-ngoi-nha-hanh-phuc-51.jpg', 'title' => 'Album ảnh cưới Biệt thự hoa hồng & Studio Juhee'],
        ['url' => 'https://mimosawedding.vn/bo_suu_tao_album/album-anh-cuoi-han-quoc-santorini/', 'img' => 'https://mimosawedding.vn/wp-content/uploads/2025/10/album-han-quoc-santorini-4.jpg', 'title' => 'Album Ảnh Cưới Hàn Quốc Santorini'],
        ['url' => 'https://mimosawedding.vn/bo_suu_tao_album/album-studio-han-quoc-juhee/', 'img' => 'https://mimosawedding.vn/wp-content/uploads/2025/10/album-studio-han-quoc-2025-6.jpg', 'title' => 'Album Studio Hàn Quốc Juhee'],
        ['url' => 'https://mimosawedding.vn/bo_suu_tao_album/album-anh-cuoi-nha-hat-lon-ha-noi-studio/', 'img' => 'https://mimosawedding.vn/wp-content/uploads/2025/08/tinh-ca-ha-thanh-33.jpg', 'title' => 'Album Ảnh Cưới Nhà Hát Lớn Hà Nội – Studio'],
        ['url' => 'https://mimosawedding.vn/bo_suu_tao_album/album-anh-cuoi-han-quoc-biet-thu-hoa-hong/', 'img' => 'https://mimosawedding.vn/wp-content/uploads/2025/07/concept-xe-co-dien-thanh-lich-44.jpg', 'title' => 'Album Ảnh Cưới Hàn Quốc Studio – Biệt Thự Hoa Hồng'],
        ['url' => 'https://mimosawedding.vn/bo_suu_tao_album/album-anh-cuoi-dai-lai-resort/', 'img' => 'https://mimosawedding.vn/wp-content/uploads/2025/06/album-dai-lai-resort-95.jpg', 'title' => 'Album Ảnh Cưới Đại Lải Resort'],
        ['url' => 'https://mimosawedding.vn/bo_suu_tao_album/album-anh-cuoi-trill-cafe-studio/', 'img' => 'https://mimosawedding.vn/wp-content/uploads/2025/05/concept-tinh-te-lang-man-11-1.jpg', 'title' => 'Album Ảnh Cưới Trill Cafe – Studio'],
        ['url' => 'https://mimosawedding.vn/bo_suu_tao_album/album-anh-cuoi-pho-co-van-mieu/', 'img' => 'https://mimosawedding.vn/wp-content/uploads/2025/04/concept-xe-co-classic-26.jpg', 'title' => 'Album ảnh cưới Phố cổ – Văn Miếu'],
        ['url' => 'https://mimosawedding.vn/bo_suu_tao_album/album-anh-cuoi-biet-thu-hoa-hong-studio-juhee/', 'img' => 'https://mimosawedding.vn/wp-content/uploads/2025/02/album-biet-thu-studio-vu-huyen-88.jpg', 'title' => 'Album ảnh cưới Biệt Thự Hoa Hồng – Studio Juhee'],
    ];
    $aos = aos_for_section('collection');
@endphp

<section id="section-collection" class="py-5 overflow-hidden">
    <div class="container-xl">
        <div class="text-center text-uppercase mx-auto mb-4 col-lg-8 section-title-wrapper">
            <p class="section-title" data-aos="{{ $aos }}">Những bộ sưu tập ấn tượng</p>
            <p class="section-description" data-aos="{{ $aos }}">say đắm câu chuyện tình yêu trong</p>
        </div>
        <div class="tab-content" id="pills-tabContent" data-aos="{{ $aos }}">
            <div class="tab-pane fade show active" id="pills-videos" role="tabpanel" aria-labelledby="pills-videos-tab">
                <div data-slick="collection">
                    @foreach ($albums as $album)
                        <div class="px-2">
                            <div class="collection-card h-100">
                                <div class="collection-card__media">
                                    <img class="lazyload collection-card__img w-100 object-fit-cover"
                                        data-src="{{ $album['img'] }}" alt="{{ $album['title'] }}">
                                    <div class="collection-card__overlay">
                                        <p class="collection-card__desc">{{ $album['title'] }}</p>
                                        <a href="{{ $album['url'] }}" class="collection-card__btn btn btn-outline-light btn-sm rounded-pill">Chi tiết</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="d-flex align-items-center justify-content-between mt-4 gap-3">
                    <div id="arrow_col" class="d-flex"></div>
                    <div class="progress flex-grow-1" style="height: 2px;" role="progressbar" aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar bg-dark progress_col" style="width: 0%"></div>
                        <span class="visually-hidden slider__label"></span>
                    </div>
                    <a href="/albums-anh" class="btn btn-link text-dark text-decoration-none text-uppercase d-inline-flex align-items-center gap-2 flex-shrink-0">
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
