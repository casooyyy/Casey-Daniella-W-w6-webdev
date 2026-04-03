@extends('master')
@section('content')

    <!-- Main Content -->
    <main class="flex-grow-1 py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h1 class="display-5 fw-bold text-dark">Our Packages</h1>
                <p class="lead text-muted">Choose the perfect photobooth package for your special moment</p>
            </div>

            <div class="row g-4 justify-content-center">
                <!-- Package 1 -->
            @foreach ($packages as $p )
                <div class="col-md-6 col-lg-4">
                    @if($p['code'] === 'basic')
                        <div class="card h-100 border-0 shadow-sm transition-transform">
                        <div class="card-header bg-secondary text-white text-center py-3">
                            <h4 class="my-0 fw-normal"> {{ $p['title'] }}</h4>
                        </div>
                    @elseif ($p['code'] === 'premium')
                        <div class="card h-100 border-warning shadow border-2">
                        <div class="card-header bg-warning text-dark text-center py-3 position-relative">
                            <span class="position-absolute top-0 start-50 translate-middle badge rounded-pill bg-dark text-warning border border-warning px-3 py-2 shadow-sm">Most Popular</span>
                            <h4 class="my-0 fw-bold mt-2">{{ $p['title'] }}</h4>
                        </div>
                    @elseif ($p['code'] === 'vip')
                        <div class="card h-100 border-0 shadow-sm">
                        <div class="card-header bg-dark text-warning text-center py-3">
                            <h4 class="my-0 fw-normal">{{ $p['title'] }}</h4>
                        </div>
                    @endif
                        <div class="card-body bg-white text-center d-flex flex-column">
                            <h1 class="card-title pricing-card-title h3">{{  $p['price'] }}<small class="text-muted fw-light">/{{ $p['hours']  }}</small></h1>
                            <ul class="list-unstyled mt-3 mb-4 text-start">

                                @foreach($p ['list'] as $list)
                                    <li class="py-2 border-bottom text-muted">✔️ {{ $list }}</li>

                                @endforeach
                            </ul>

                            @if ($p['code'] === 'basic')
                                <button type="button" class="w-100 btn btn-lg btn-outline-dark mt-auto">Choose Basic</button>
                             @elseif ($p['code'] === 'premium')
                                <button type="button" class="w-100 btn btn-lg btn-warning text-dark fw-bold mt-auto shadow-sm">Choose Premium</button>
                             @elseif ($p['code'] === 'vip')
                                 <button type="button" class="w-100 btn btn-lg btn-outline-dark mt-auto">Choose VIP</button>

                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
            </div>

        </div>
    </main>

@endsection
