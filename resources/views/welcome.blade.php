@extends('layouts.app')

@section('content')
    
            <header class="py-5">
                <div class="container px-5 pb-5">
                    <div class="row gx-5 align-items-center">
                        <div class="col-xxl-5">
                            <div class="text-center text-xxl-start">

                                <div class="fs-3 fw-light text-muted"></div>
                                <h4 class="display-3 fw-bolder mb-5"><span class="text-gradient d-inline">Sistem Deteksi Buta Warna Menggunakan Metode Ishihara</span></h4>
                            </div>
                        </div>
                        <div class="col-xxl-7">
                            <div class="d-flex justify-content-center mt-3 mt-xxl-0">
                                <div class="profile">
                                    <img class="profile-img" src="assets/eyes.png" alt="..." />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            
                <section class="bg-light py-5">
                    <div class="container px-5">
                        <div class="row gx-5 justify-content-center">
                            <div class="col-md-6">
                                <div class="text-center my-5">
                                  <h2 class="display-5 fw-bolder"><span class="text-gradient d-inline">Buta Warna</span></h2>
                                    <p class="lead fw-light mb-4">Apa itu buta warna??</p>
                                    <p class="text-muted">Buta warna, juga dikenal sebagai daltonisme, adalah kondisi di mana seseorang mengalami kesulitan atau tidak mampu membedakan beberapa warna atau seluruh spektrum warna. Ini disebabkan oleh kelainan genetik pada salah satu atau lebih jenis sel kerucut di mata yang bertanggung jawab untuk memproses warna. </p>
                                </div>
                          </div>
                         <div class="col-md-6">
                            <div class="text-center my-5">
                                  <h2 class="display-5 fw-bolder"><span class="text-gradient d-inline">Metode Ishihara</span></h2>
                                    <p class="lead fw-light mb-4">Apa itu metode ishihara??</p>
                                    <p class="text-muted">Tes Ishihara adalah metode paling umum yang digunakan untuk mendeteksi keberadaan buta warna. Tes ini menggunakan serangkaian gambar titik-titik berwarna yang membentuk angka atau pola. Orang yang menjalani tes diminta untuk mengidentifikasi angka atau pola yang tersembunyi dalam gambar-gambar tersebut.</p>
                             </div>
                         </div>
                        </div>
                    </div>
                 </section>

@endsection