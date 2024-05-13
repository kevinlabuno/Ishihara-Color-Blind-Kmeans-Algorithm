@extends('layouts.app')

@section('content')
    
        <section class="py-5">
                <div class="container px-5 mb-5">
                    <div class="text-center mb-5">
                        <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">Tes Ishihara</span></h1>
                    </div>
                    <div class="row gx-5 justify-content-center">
                        <div class="col-lg-11 col-xl-9 col-xxl-8">
                            <!-- Project Card 1-->
                            <div class="card overflow-hidden shadow rounded-4 border-0 mb-5">
                                <div class="card-body p-0">
                                    <div class="d-flex align-items-center">
                                        <div class="p-5">
                                            <h2 class="fw-bolder">Ishihara</h2>
                                            <p>Tes Ishihara terdiri dari serangkaian plate berwarna yang dirancang untuk menguji kemampuan Anda dalam mengidentifikasi angka atau pola yang tersembunyi. Dengan menjawab dengan benar, Anda dapat mengetahui sejauh mana kemampuan penglihatan warna Anda.</p>
                                        </div>
                                        <img class="img-fluid" src="assets/ishihara.png" alt="..." style="width: 200px; height: auto;">
                                    </div>
                                </div>
                                <a href="{{route('tesuser')}}" class="btn btn-primary btn-lg">Mulai Tes?</a>
                            </div>

                        </div>
                    </div>
                </div>

        </section>

@endsection