<section id="section-partner" class="py-5 overflow-hidden">
    <div class="container-xl">
        <div data-slick="partner" data-aos="fade-up">
            @php
                $partners = [
                    ['url' => 'https://dantri.com.vn/giai-tri/mimosa-wedding-bat-mi-phong-cach-anh-cuoi-len-ngoi-nam-2022-20211216170137084.htm?fbclid=IwAR1BjjvaeLVWtmocIbAImwM7QctL8c5nnmFZiZiLqNDAeTRp5sB-U6tfjEI', 'img' => 'https://mimosawedding.vn/wp-content/uploads/2023/05/static-logo.1-0-1.742f36bc45f3443d0e59.svg'],
                    ['url' => 'https://vtc.vn/mimosa-wedding-gui-gam-cau-chuyen-tinh-yeu-trong-tung-khoanh-khac-anh-cuoi-ar742763.html?fbclid=IwAR2lb1TZqAShRvlArqUeqgzu7nyN3bH8cP9pU0i5WYSWeN8HjjgPEk6QsSk', 'img' => 'https://mimosawedding.vn/wp-content/uploads/2023/07/VTC_official_logo.svg'],
                    ['url' => 'https://nguoinoitieng.net/tin-noi-bat/ga-so-10-mimosa-wedding-su-kien-gay-tieng-vang-trong-nganh-cuoi-viet-nam.html?fbclid=IwAR1YGKQ5cwrVxdgEUtvf09lVnnIymCvBqQ7lwc2H4Mk9oO3Ii3w0UsE_Jaw', 'img' => 'https://mimosawedding.vn/wp-content/uploads/2023/07/logo.nguoinoitieng.final_-e1629085821116.png'],
                    ['url' => 'https://www.anninhthudo.vn/lo-anh-cuoi-dep-nhu-mo-cua-a-hau-phuong-nga-va-dien-vien-binh-an-post415031.antd', 'img' => 'https://mimosawedding.vn/wp-content/uploads/2023/07/301144723_466112512198588_3926853335116807788_n.jpg'],
                    ['url' => 'https://www.24h.com.vn/nhip-song-tre/mimosa-wedding-don-tim-cu-dan-mang-trong-bo-anh-cuoi-cua-stephen-nguyen-c685a1335469.html?fbclid=IwAR2a81hi_ujo2qwh6IDohBpm07_hFXEn-zk9JUa3gCOsJ7yV3nXe7JtqQHo', 'img' => 'https://mimosawedding.vn/wp-content/uploads/2023/07/24h_logo_trang_chu_2015.png'],
                    ['url' => 'https://vietnamnet.vn/me-man-anh-cuoi-nhe-nhang-sang-trong-tai-mimosa-wedding-674486.html', 'img' => 'https://mimosawedding.vn/wp-content/uploads/2023/07/vnn-viet-nam-hung-cuong.svg'],
                    ['url' => 'https://eva.vn/tin-tuc-giai-tri/vo-chong-dien-vien-duy-hung-tinh-be-tinh-trong-bo-anh-cuoi-dam-chat-co-dien-c289a548166.html?fbclid=IwAR0pHOzn2r6QbzjXQM9RwqZI4uCfcNxBP4GqxsqrwiiipSlCMkqeD6LuNcg', 'img' => 'https://mimosawedding.vn/wp-content/uploads/2023/07/Eva-Logo.svg'],
                    ['url' => 'https://afamily.vn/ceo-mimosa-wedding-va-hanh-trinh-tro-thanh-thuong-hieu-chup-anh-chuyen-nghiep-tai-ha-noi-20210616121004718.chn', 'img' => 'https://mimosawedding.vn/wp-content/uploads/2023/07/afamily.png'],
                    ['url' => 'https://vtv.vn/doi-song/cung-mimosa-wedding-dong-hanh-cung-cac-cap-doi-tren-con-duong-den-tinh-yeu-dich-thuc-2023022014222964.htm?fbclid=IwAR0C7lc3_srNvshRBRD0XRefkCuQBT2uLIYuPMws6K6oxZiAUwQSsPvXB3Y', 'img' => 'https://mimosawedding.vn/wp-content/uploads/2023/07/Vietnam_Television_logo_from_2013.svg'],
                    ['url' => 'https://kenh14.vn/top-3-studio-chup-anh-cuoi-dep-tai-ha-noi-20190116174058959.chn?fbclid=IwAR0cYJURKSmiB9wCCj8juXq5rQos0V5XpI0wIlI_zif9uWaA4NNNC8Mo-Gw', 'img' => 'https://mimosawedding.vn/wp-content/uploads/2023/07/Bieu_trung_Kenh_14.png'],
                    ['url' => 'https://www.yan.vn/mimosa-wedding-he-lo-nhung-mau-vay-cuoi-luxury-2023-den-tu-thuong-hieu-cali-bridal-325736.html?fbclid=IwAR2sM_Wcdxv0upGO6prtmsJGRZVAN-A4SzEZ_fRgbSub7jsWE6HZLZB4Jcw', 'img' => 'https://mimosawedding.vn/wp-content/uploads/2023/07/tai-xuong.png'],
                    ['url' => 'https://tienphong.vn/nhan-su-yeu-to-cot-loi-lam-nen-thuong-hieu-mimosa-wedding-post1565321.tpo', 'img' => 'https://mimosawedding.vn/wp-content/uploads/2023/09/LOGO-TIEN-PHONG.png'],
                    ['url' => 'https://tuoitrethudo.com.vn/mimosa-wedding-chinh-phuc-trai-tim-khach-hang-bang-dich-vu-uy-tin-chat-luong-232790.html', 'img' => 'https://mimosawedding.vn/wp-content/uploads/2023/09/logo.png'],
                ];
            @endphp
            @foreach ($partners as $partner)
                <div class="px-3">
                    <a href="{{ $partner['url'] }}" class="d-flex align-items-center justify-content-center p-3" target="_blank" rel="noopener">
                        <img class="lazyload img-fluid" data-src="{{ $partner['img'] }}" alt="">
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</section>
