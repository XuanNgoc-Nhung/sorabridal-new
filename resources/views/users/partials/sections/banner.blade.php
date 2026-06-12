@php
    $bannerSlides = [
        'https://cdn-media.sforum.vn/storage/app/media/anh-dep-8.jpg',
        'https://cdn-media.sforum.vn/storage/app/media/anh-dep-83.jpg',
        'https://cdn-media.sforum.vn/storage/app/media/anh-dep-35.jpg',
    ];
@endphp

<section id="section-banner" class="w-100 overflow-hidden px-4 pb-4 position-relative">
    <div class="container-fluid px-0">
        <div id="wowslider-container" class="wowslider-banner">
            <div class="ws_images">
                <ul>
                    @foreach ($bannerSlides as $index => $image)
                        <li>
                            <a href="#">
                                <img
                                    src="{{ $image }}"
                                    alt="Sorabridal banner {{ $index + 1 }}"
                                    id="wows1_{{ $index }}"
                                    class="w-100"
                                    loading="{{ $index === 0 ? 'eager' : 'lazy' }}"
                                    decoding="async"
                                >
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="ws_bullets">
                <div>
                    @foreach ($bannerSlides as $index => $image)
                        <a href="#" aria-label="Slide {{ $index + 1 }}">
                            <img src="{{ $image }}" alt="">
                            <span>{{ $index + 1 }}</span>
                        </a>
                    @endforeach
                </div>
            </div>
            <div class="ws_shadow" aria-hidden="true"></div>
        </div>
    </div>
</section>
