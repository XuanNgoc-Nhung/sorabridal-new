<section id="section-connect" class="py-5 overflow-hidden position-relative">
    <img class="lazyload position-absolute top-0 start-0 w-100 h-100 object-fit-cover" style="z-index: 0; filter: brightness(0.85);"
        data-src="https://mimosawedding.vn/wp-content/uploads/2023/05/Rectangle-43.jpg" alt="">

    <div class="container-xl position-relative" style="z-index: 1;">
        <div class="row align-items-end g-3 mb-4">
            <div class="col-md-7">
                <p class="fs-3 mb-2" data-aos="fade-right">Kết nối</p>
                <h2 class="h1 fw-medium text-uppercase mb-0" data-aos="fade-right">Cùng chuyên gia</h2>
            </div>
            <div class="col-md-5">
                <ul class="nav nav-pills justify-content-md-end mb-0" data-aos="fade-left" id="pills-tabMake" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active rounded-pill" id="pills-1make-tab" data-bs-toggle="pill" data-bs-target="#pills-1make" type="button" role="tab" aria-controls="pills-1make" aria-selected="true">Trang điểm</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link rounded-pill" id="pills-2make-tab" data-bs-toggle="pill" data-bs-target="#pills-2make" type="button" role="tab" aria-controls="pills-2make" aria-selected="false">Photoshop</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link rounded-pill" id="pills-3make-tab" data-bs-toggle="pill" data-bs-target="#pills-3make" type="button" role="tab" aria-controls="pills-3make" aria-selected="false">Nhiếp ảnh gia</button>
                    </li>
                </ul>
            </div>
        </div>

        <div class="tab-content" id="pills-tabMakeContent" data-aos="fade-up">
            <div class="tab-pane show active" id="pills-1make" role="tabpanel" aria-labelledby="pills-1make-tab">
                <div data-slick="connect">
                    @php
                        $makeupTeam = [
                            ['img' => 'https://mimosawedding.vn/wp-content/uploads/2023/09/doi-ngu-make-up-1-1.jpg', 'name' => 'Đinh Thị Huyền', 'quote' => '"Với từng chút son, kẻ viền mắt, cô dâu sẽ là phiên bản hoàn hảo của chính mình."'],
                            ['img' => 'https://mimosawedding.vn/wp-content/uploads/2023/09/doi-ngu-make-up-3.jpg', 'name' => 'Nguyễn Thu Thảo', 'quote' => '"Trang điểm không phải là để che đi, mà là để tôn lên những đặc điểm đẹp nhất của cô dâu."'],
                            ['img' => 'https://mimosawedding.vn/wp-content/uploads/2023/09/doi-ngu-make-up-4.jpg', 'name' => 'Nguyễn Thị Hiền', 'quote' => '"Sự tự tin không đến từ trang điểm, nhưng trang điểm giúp tô điểm sự tự tin cho cô dâu."'],
                            ['img' => 'https://mimosawedding.vn/wp-content/uploads/2023/09/doi-ngu-make-up-2.jpg', 'name' => 'Mỹ Duyên', 'quote' => '"Trang điểm là nghệ thuật tôn lên vẻ đẹp tự nhiên của cô dâu."'],
                        ];
                    @endphp
                    @foreach ($makeupTeam as $member)
                        <div class="px-2">
                            <div class="card border-0 h-100">
                                <div class="position-relative">
                                    <img class="lazyload card-img-top w-100 object-fit-cover" style="height: 280px;" data-src="{{ $member['img'] }}" alt="{{ $member['name'] }}">
                                    <div class="position-absolute bottom-0 start-0 p-2 d-flex gap-2">
                                        @for ($i = 0; $i < 3; $i++)
                                            <a href="#" class="btn btn-sm btn-light rounded-circle d-flex align-items-center justify-content-center" style="width: 32px; height: 32px;" aria-label="Facebook">
                                                <i class="fa-brands fa-facebook-f small"></i>
                                            </a>
                                        @endfor
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h3 class="h6 fw-semibold mb-2">{{ $member['name'] }}</h3>
                                    <p class="small text-muted mb-0">{{ $member['quote'] }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="tab-pane" id="pills-2make" role="tabpanel" aria-labelledby="pills-2make-tab">
                <div data-slick="connect">
                    @php
                        $photoshopTeam = [
                            ['img' => 'https://mimosawedding.vn/wp-content/uploads/2023/08/doi-ngu-8.jpg', 'name' => 'Đinh Văn Tài', 'quote' => '"Mỗi công đoạn chỉnh sửa ảnh là một bức chạm cuối cùng vào tác phẩm nghệ thuật về một cuộc hôn nhân hạnh phúc."'],
                            ['img' => 'https://mimosawedding.vn/wp-content/uploads/2023/08/doi-ngu-3.jpg', 'name' => 'Đinh Văn Tịnh', 'quote' => '"Mỗi bức hình được chỉnh sửa là một kỷ niệm đẹp mãi theo thời gian."'],
                            ['img' => 'https://mimosawedding.vn/wp-content/uploads/2023/08/doi-ngu-6.jpg', 'name' => 'Nguyễn Văn Hưng', 'quote' => '"Chỉnh ảnh là cách biến những tưởng chừng đã đẹp thành những điều tuyệt vời hơn nữa"'],
                            ['img' => 'https://mimosawedding.vn/wp-content/uploads/2025/12/PRO_1940.jpg', 'name' => 'Hoàng Văn Chuyển', 'quote' => '"Chỉnh sửa ảnh là cách để gói gọn mọi cảm xúc, tình yêu đôi lứa trong một khung hình."'],
                        ];
                    @endphp
                    @foreach ($photoshopTeam as $member)
                        <div class="px-2">
                            <div class="card border-0 h-100">
                                <img class="lazyload card-img-top w-100 object-fit-cover" style="height: 280px;" data-src="{{ $member['img'] }}" alt="{{ $member['name'] }}">
                                <div class="card-body">
                                    <h3 class="h6 fw-semibold mb-2">{{ $member['name'] }}</h3>
                                    <p class="small text-muted mb-0">{{ $member['quote'] }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="tab-pane" id="pills-3make" role="tabpanel" aria-labelledby="pills-3make-tab">
                <div data-slick="connect">
                    @php
                        $photoTeam = [
                            ['img' => 'https://mimosawedding.vn/wp-content/uploads/2023/09/doi-ngu-2.jpg', 'name' => 'Trần Văn Toán', 'quote' => '"Ảnh cưới không chỉ là hình ảnh, mà là cách ta lưu giữ yêu thương và hạnh phúc."'],
                            ['img' => 'https://mimosawedding.vn/wp-content/uploads/2023/09/doi-ngu-1.jpg', 'name' => 'Nguyễn Anh Tú', 'quote' => '"Ảnh cưới là cách để ta chia sẻ tình yêu của mình với thế giới."'],
                            ['img' => 'https://mimosawedding.vn/wp-content/uploads/2023/09/doi-ngu-5.jpg', 'name' => 'Đoàn Văn Nhớ', 'quote' => '"Ảnh cưới không chỉ là quà tặng cho hiện tại, mà còn là kỷ vật quý giá cho tương lai."'],
                            ['img' => 'https://mimosawedding.vn/wp-content/uploads/2023/09/doi-ngu-9.jpg', 'name' => 'Trần Thế Dũng', 'quote' => '"Mỗi bức ảnh cưới là một tác phẩm nghệ thuật, một bức tranh tuyệt vời của tình yêu."'],
                            ['img' => 'https://mimosawedding.vn/wp-content/uploads/2025/12/PRO_2181.jpg', 'name' => 'Lê Nghĩa Trung', 'quote' => '"Ảnh cưới là cách để nắm bắt những khoảnh khắc hạnh phúc và thăng hoa."'],
                            ['img' => 'https://mimosawedding.vn/wp-content/uploads/2023/09/doi-ngu-4.jpg', 'name' => 'Vũ Hà Giang', 'quote' => '"Ảnh cưới là ngôn ngữ tình yêu không cần lời nói."'],
                            ['img' => 'https://mimosawedding.vn/wp-content/uploads/2025/12/PRO_2176.jpg', 'name' => 'Lê Quốc Việt', 'quote' => '" Chụp ảnh cưới là kể câu chuyện tình yêu của cặp đôi bằng hình ảnh"'],
                        ];
                    @endphp
                    @foreach ($photoTeam as $member)
                        <div class="px-2">
                            <div class="card border-0 h-100">
                                <img class="lazyload card-img-top w-100 object-fit-cover" style="height: 280px;" data-src="{{ $member['img'] }}" alt="{{ $member['name'] }}">
                                <div class="card-body">
                                    <h3 class="h6 fw-semibold mb-2">{{ $member['name'] }}</h3>
                                    <p class="small text-muted mb-0">{{ $member['quote'] }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
