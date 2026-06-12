<section id="section-collection-video" class="py-5 overflow-hidden">
    <div class="container-xl">
        <div class="text-center text-uppercase mx-auto mb-4 col-lg-8">
            <p class="small text-muted mb-2" data-aos="fade-up">say đắm câu chuyện tình yêu trong</p>
            <h2 class="h2 fw-medium mb-0" data-aos="fade-up">Những khoảnh khắc thú vị và đầy cảm xúc</h2>
        </div>

        <div class="tab-content" id="pills-tabVideoContent" data-aos="fade-up">
            <div class="tab-pane fade show active" id="pills-video" role="tabpanel" aria-labelledby="pills-albums-tab">
                <div class="row g-4">
                    @php
                        $videos = [
                            'https://www.youtube.com/embed/DkqT9DFJnOI?si=5EGea4cLTTRgH-fl',
                            'https://www.youtube.com/embed/eu2syrYwoyg?si=n1UkzExuw28mNvBb',
                            'https://www.youtube.com/embed/8tryVCPcfuk?si=3ILcVVynpzpvv3Wx',
                        ];
                    @endphp
                    @foreach ($videos as $video)
                        <div class="col-md-4">
                            <div class="ratio ratio-16x9">
                                <iframe src="{{ $video }}" title="YouTube video player" allowfullscreen></iframe>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="d-flex justify-content-center mt-4">
            <a href="/danh-sach-video?id=0" class="btn btn-link text-dark text-decoration-none text-uppercase d-inline-flex align-items-center gap-2">
                XEM TẤT CẢ
                <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M9.16675 11.3334L12.5001 8.00002L9.16675 4.66669" stroke="#242424" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M4.5 11.3334L7.83333 8.00002L4.5 4.66669" stroke="#242424" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </a>
        </div>
    </div>
</section>
