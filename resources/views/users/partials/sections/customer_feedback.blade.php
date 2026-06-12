@php
    $feedbackImages = collect(glob(public_path('assets/feedback/*.{jpg,jpeg,png,webp,JPG,JPEG,PNG,WEBP}'), GLOB_BRACE))
        ->sort(SORT_NATURAL)
        ->map(fn ($path) => asset('assets/feedback/' . basename($path)))
        ->values()
        ->all();
@endphp

<section id="section-customer-feedback" class="py-5 overflow-hidden">
    <div class="container-xl">
        <div class="text-center text-uppercase mx-auto mb-4 col-lg-8 section-title-wrapper">
            <p class="section-title" data-aos="fade-up">Phản hồi khách hàng</p>
            <p class="section-description" data-aos="fade-up">Những chia sẻ chân thành từ các cặp đôi đã tin tưởng Sora Bridal</p>
        </div>

        @if (count($feedbackImages) > 0)
            <div data-slick="customer-feedback" data-aos="fade-up">
                @foreach ($feedbackImages as $index => $image)
                    <div class="px-2">
                        <div class="customer-feedback-card h-100">
                            <a href="{{ $image }}"
                                class="customer-feedback-card__link"
                                data-index="{{ $index }}"
                                aria-label="Xem ảnh phản hồi {{ $index + 1 }}">
                                <img class="lazyload customer-feedback-card__img w-100"
                                    data-src="{{ $image }}"
                                    alt="Phản hồi khách hàng Sora Bridal">
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="d-flex align-items-center justify-content-center mt-4 gap-3">
                <div id="arrow_customer_feedback" class="d-flex"></div>
                <div class="progress flex-grow-1" style="height: 2px; max-width: 400px;" role="progressbar" aria-valuemin="0" aria-valuemax="100">
                    <div class="progress-bar bg-dark progress_customer_feedback" style="width: 0%"></div>
                    <span class="visually-hidden slider__label"></span>
                </div>
            </div>
        @endif
    </div>
</section>
