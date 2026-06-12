@php
    $famous = [
        ['url' => 'https://mimosawedding.vn/nguoi_noi_tieng/dien-vien-hai-my-duy-nguyen/', 'img' => 'https://mimosawedding.vn/wp-content/uploads/2026/01/album-anh-cuoi-dien-vien-hai-my-duy-34-Copy.jpg', 'name' => 'Diễn viên Hải My – Duy Nguyễn'],
        ['url' => 'https://mimosawedding.vn/nguoi_noi_tieng/album-anh-cuoi-ca-si-lou-hoang-xoai-non/', 'img' => 'https://mimosawedding.vn/wp-content/uploads/2024/07/album-xoai-non-lou-hoang-5.jpg', 'name' => 'Album Ảnh Cưới Xoài Non – Ca Sĩ Lou Hoàng'],
        ['url' => 'https://mimosawedding.vn/nguoi_noi_tieng/album-anh-cuoi-sieu-ngot-ngao-cua-dien-vien-hoang-duong-con-trai-co-nsnd-hoang-dung/', 'img' => 'https://mimosawedding.vn/wp-content/uploads/2025/02/anh-cuoi-dien-vien-hoang-duong-23.jpg', 'name' => 'Phương Thảo & Diễn viên Hoàng Dương – con trai NSND Hoàng Dũng'],
        ['url' => 'https://mimosawedding.vn/nguoi_noi_tieng/binh-an-bui-phuong-nga/', 'img' => 'https://mimosawedding.vn/wp-content/uploads/2023/05/NDT_4258-1-scaled.jpg', 'name' => 'Bình An – Bùi Phương Nga'],
        ['url' => 'https://mimosawedding.vn/nguoi_noi_tieng/duy-hung-thanh-huyen/', 'img' => 'https://mimosawedding.vn/wp-content/uploads/2023/04/GVU_6676-Copy.jpg', 'name' => 'Duy Hưng – Thanh Huyền'],
        ['url' => 'https://mimosawedding.vn/nguoi_noi_tieng/tiktoker-duc-hien-thanh-tuyen/', 'img' => 'https://mimosawedding.vn/wp-content/uploads/2025/03/album-duc-hien-thanh-tuyen-34.jpg', 'name' => 'Tiktoker Đức Hiển – Thanh Tuyền'],
    ];
@endphp

<section id="section-famous" class="py-5 overflow-hidden">
    <div class="container-xl">
        <div class="text-center text-uppercase mx-auto mb-4 col-lg-8">
            <p class="small text-muted mb-2" data-aos="fade-up">Gửi trọn niềm tin từ</p>
            <h2 class="h2 fw-medium mb-3" data-aos="fade-up">Những người nổi tiếng</h2>
            <p class="text-lowercase text-body mb-0" data-aos="fade-up">Với sự riêng biệt trong phong cách chụp, sự cầu kỳ cẩn trọng trong kỹ thuật để đem đến những album ảnh cưới ngập tràn cảm xúc mà cặp đôi nào cũng ao ước sở hữu trong ngày trọng đại. Bởi vậy mà rất nhiều sao Việt đã tin tưởng, lựa chọn Sorabridal để đồng hành và tạo nên những khung hình tuyệt vời nhất trước hôn lễ.</p>
        </div>
    </div>

    <div data-slick="famous" class="mt-4">
        @foreach ($famous as $person)
            <div class="px-2">
                <div class="card border-0 h-100">
                    <a href="{{ $person['url'] }}">
                        <img class="lazyload card-img-top w-100 object-fit-cover" style="height: 360px;"
                            data-src="{{ $person['img'] }}" alt="{{ $person['name'] }}">
                    </a>
                    <div class="card-body px-0 pt-3">
                        <h3 class="h6 mb-0">
                            <a href="{{ $person['url'] }}" class="text-decoration-none text-dark">{{ $person['name'] }}</a>
                        </h3>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <div class="container-xl mt-4">
        <div class="d-flex align-items-center justify-content-center gap-3 flex-wrap">
            <div id="arrow_famous" class="d-flex"></div>
            <div class="progress flex-grow-1" style="height: 2px; max-width: 400px;" role="progressbar" aria-valuemin="0" aria-valuemax="100">
                <div class="progress-bar bg-dark progress_col" style="width: 0%"></div>
                <span class="visually-hidden slider__label"></span>
            </div>
            <a href="/nguoi-noi-tieng" class="btn btn-link text-dark text-decoration-none text-uppercase d-inline-flex align-items-center gap-2">
                Xem tất cả
                <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M9.16675 11.3334L12.5001 8.00002L9.16675 4.66669" stroke="#242424" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M4.5 11.3334L7.83333 8.00002L4.5 4.66669" stroke="#242424" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </a>
        </div>
    </div>
</section>
