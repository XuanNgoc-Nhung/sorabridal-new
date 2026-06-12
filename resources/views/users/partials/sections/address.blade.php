<section id="section-address" class="py-5 overflow-hidden">
    <div class="container-xl">
        <div class="row align-items-center justify-content-between mb-4 g-3">
            <div class="col-md-8 position-relative">
                <img class="lazyload position-absolute d-none d-md-block" style="width: 200px; left: 68%; bottom: 10%; transform: rotate(27deg);"
                    data-src="/wp-content/uploads/2023/05/Group-1.png" alt="">
                <p class="fs-3 mb-2" data-aos="fade-right">Váy cưới đẹp</p>
                <h2 class="h1 fw-medium text-uppercase mb-0" data-aos="fade-right">Sorabridal</h2>
            </div>
            <div class="col-md-auto text-md-end">
                <a href="/vay-cuoi" data-aos="fade-left" class="btn btn-dark rounded-pill px-4 text-uppercase">XEM TẤT CẢ</a>
            </div>
        </div>

        <div class="row g-4">
            @php
                $dresses = [
                    ['url' => 'https://mimosawedding.vn/vay_cuoi/charmaine-dress/', 'img' => 'https://mimosawedding.vn/wp-content/uploads/2024/11/charmaine-dress-4.jpg', 'name' => 'Charmaine Dress', 'delay' => 0],
                    ['url' => 'https://mimosawedding.vn/vay_cuoi/cali-bridal-look-303/', 'img' => 'https://mimosawedding.vn/wp-content/uploads/2025/06/cali-look-303-2.jpg', 'name' => 'Cali Bridal Look 303', 'delay' => 100],
                    ['url' => 'https://mimosawedding.vn/vay_cuoi/eleanor-dress/', 'img' => 'https://mimosawedding.vn/wp-content/uploads/2024/11/eleanor-dress-1.jpg', 'name' => 'Eleanor Dress', 'delay' => 200],
                    ['url' => 'https://mimosawedding.vn/vay_cuoi/calistal-dress/', 'img' => 'https://mimosawedding.vn/wp-content/uploads/2024/12/calistal-dress-1.jpg', 'name' => 'Calistal Dress', 'delay' => 300],
                ];
            @endphp
            @foreach ($dresses as $dress)
                <div class="col-md-3" data-aos="fade-up" data-aos-delay="{{ $dress['delay'] }}">
                    <div class="card border-0 h-100">
                        <a href="{{ $dress['url'] }}">
                            <img class="lazyload card-img-top w-100 object-fit-cover" style="height: 320px;"
                                data-src="{{ $dress['img'] }}" alt="{{ $dress['name'] }}">
                        </a>
                        <div class="card-body px-0 pt-3">
                            <h3 class="h6 mb-0">
                                <a href="{{ $dress['url'] }}" class="text-decoration-none text-dark text-uppercase">{{ $dress['name'] }}</a>
                            </h3>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
