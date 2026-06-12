@php
    $feedbacks = [
        ['text' => 'Sorabridal đã cho vợ chồng mình có được một trải nghiệm tuyệt vời khi chụp ảnh cưới. Sự nhiệt tình, chuyên nghiệp của ekip cũng đã giúp mình có được một bộ ảnh cưới thật đẹp dù trước đó mình khá lo lắng. Cảm ơn Sorabridal rất nhiều!', 'avatar' => 'https://mimosawedding.vn/wp-content/uploads/2023/05/NHO01919-copy-Copy-1.jpg', 'name' => 'Khánh Ly', 'role' => 'Kế toán'],
        ['text' => 'Được bạn bè giới thiệu mới biết đến Sorabridal, ban đầu cũng hoài nghi vì gói chụp quá hợp lý thì chất lượng không biết có được đảm bảo. Nhưng thật may vì vẫn quyết định chọn Sorabridal. Sản phẩm còn đẹp hơn sự mong đợi nữa. Cầm album ảnh trên tay mà rồi mà mình vẫn không thể tin nó chất lượng đến thế.', 'avatar' => 'https://mimosawedding.vn/wp-content/uploads/2023/05/NHO07386-Copy-1-1.jpg', 'name' => 'Phương Anh', 'role' => 'Giảng viên ĐH'],
        ['text' => 'Mình và chồng đều bận nên khó sắp xếp được thời gian chụp ảnh cưới, đến gần ngày cưới rồi mới có thể chụp được. Thế mà đến Sorabridal các bạn nhân viên hỗ trợ cực nhiệt tình, từ bạn tư vấn đến ekip chụp rồi đội ngũ hậu kỳ. Vậy nên dù khá bận nhưng hai đứa mình vẫn có được một bộ ảnh cưới vô cùng ưng ý.', 'avatar' => 'https://mimosawedding.vn/wp-content/uploads/2023/05/VIP_4460-Copy-1.jpg', 'name' => 'Thái Hà', 'role' => 'Sỹ Quan'],
        ['text' => 'Khá bất ngờ khi đến Sorabridal vì mọi thứ ở đây luôn làm mình hài lòng. Đội ngũ nhân viên rất dễ thương, chuyên nghiệp mà còn nhiệt tình. Gói chụp thì vô cùng đa dạng, váy cưới còn đẹp nữa, rất hợp ý mình. Khi nhận sản phẩm thì cũng không có gì để chê ạ! Cảm ơn ekip của Sorabridal nhiều!', 'avatar' => 'https://mimosawedding.vn/wp-content/uploads/2023/05/z3696833561972_904eb939a172b7383837c98aaa707b53-1.jpg', 'name' => 'Linh Chi', 'role' => 'Giáo viên TH'],
        ['text' => 'Tham khảo khá nhiều thương hiệu chụp ảnh cưới nhưng cuối cùng mình vẫn chốt Sorabridal. Mọi thứ đều rất chu đáo, các bạn make up rất tỉ mỉ chau chuốt, anh photographer thì rất vui tính, hướng dẫn hai đứa mình tạo dáng rất nhiệt tình. Bộ ảnh hết sức tuyệt vời luôn ạ!', 'avatar' => 'https://mimosawedding.vn/wp-content/uploads/2023/05/2-1-min.jpg', 'name' => 'Hà Lan', 'role' => 'Kinh doanh'],
        ['text' => 'Đến Sorabridal mình không chỉ hài lòng về chất lượng sản phẩm cùng chất lượng dịch vụ mà váy cưới ở đây làm mình mê quá trời. Kiểu dáng nào cũng có, phong cách nào cũng có còn được thử và tư vấn lựa chọn rất kỹ. Cảm ơn các ekip đã giúp mình có một vẻ ngoài thật đẹp và một album ảnh cưới thật ấn tượng.', 'avatar' => 'https://mimosawedding.vn/wp-content/uploads/2023/05/z3331994888608_2815b5ae847c4c89afaaf5899dd15e56-1.jpg', 'name' => 'Lê Lan', 'role' => 'Kế toán'],
    ];
@endphp

<section id="section-feedback" class="py-5 overflow-hidden position-relative">
    <img class="lazyload w-100 position-absolute top-0 start-0 object-fit-cover" style="height: 100%; z-index: 0; filter: brightness(0.7);"
        data-src="https://mimosawedding.vn/wp-content/uploads/2023/05/nam-mo-thay-minh-dam-cuoi-3.jpg" alt="">

    <div class="container-xl position-relative" style="z-index: 1;">
        <div class="text-center text-white text-uppercase mb-5">
            <p class="small mb-2" data-aos="fade-up">Khách hàng nói gì</p>
            <h2 class="h2 fw-medium mb-0" data-aos="fade-up">Về Sorabridal</h2>
        </div>

        <div data-slick="feedback" data-aos="fade-up">
            @foreach ($feedbacks as $feedback)
                <div class="px-3">
                    <div class="card border-0 bg-white bg-opacity-90 h-100 text-center p-4">
                        <svg class="mx-auto mb-3 text-danger" width="41" height="40" viewBox="0 0 41 40" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path d="M41 39.5V20.468H35.1654C35.1654 14.696 36.1115 11.732 41 10.328V0.5C30.1192 2.84 24.6 10.016 24.6 22.184V39.5H41ZM16.4 39.5V20.468H10.5654C10.5654 14.696 11.5115 11.732 16.4 10.328V0.5C5.51923 2.84 0 10.016 0 22.184V39.5H16.4Z"/>
                        </svg>
                        <p class="mb-4">{{ $feedback['text'] }}</p>
                        <img class="lazyload rounded-circle mx-auto mb-3 object-fit-cover" style="width: 80px; height: 80px;"
                            data-src="{{ $feedback['avatar'] }}" alt="{{ $feedback['name'] }}">
                        <p class="fw-semibold mb-1">{{ $feedback['name'] }}</p>
                        <p class="small text-muted mb-0">{{ $feedback['role'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
