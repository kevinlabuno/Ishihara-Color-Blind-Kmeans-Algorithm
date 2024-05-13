@extends('layouts.app')

@section('content')
     
    
     <section class="py-5">
                <div class="container px-5 mb-5">
                    <div class="text-center mb-5">
                        <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">Algoritma</span></h1>
                    </div>
                    <div class="row gx-5 justify-content-center">
                        <div class="col-lg-11 col-xl-9 col-xxl-8">
                            <!-- Project Card 1-->
                            <div class="card overflow-hidden shadow rounded-4 border-0 mb-5">
                                <div class="card-body p-0">
                                    <div class="d-flex align-items-center">
                                        <div class="p-5">
                                            <h2 class="fw-bolder">K-Means Clustering</h2>
                                            <p>Algoritma K-Means adalah algoritma pengelompokan (clustering) yang digunakan untuk mengelompokkan data ke dalam kelompok-kelompok yang berbeda berdasarkan kemiripan fitur atau atributnya. Tujuan utama dari algoritma ini adalah untuk meminimalkan varians dalam setiap kelompok yang dihasilkan.</p>
                                        </div>
                                        <img class="img-fluid" src="assets/algoritma.png" alt="...">
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>


                <div class="container px-5 mb-5">
                    <div class="row gx-5 justify-content-center">
                        <div class="col-lg-11 col-xl-9 col-xxl-8">
                            <div class="card overflow-hidden shadow rounded-4 border-0 mb-5">
                                <div class="card-body p-0">
                                    <div class="d-flex align-items-center">
                                        <div class="p-5">
                                            <h2 class="fw-bolder">Alur Perhitungan</h2>
                                            <p><b> 1. Inisialisasi:</b> Pilih jumlah K kelompok secara acak. 
                                                Setiap kelompok direpresentasikan oleh centroid, 
                                                yang juga dipilih secara acak pada awalnya.</p>

                                             <p><b> 2. Assignment:</b> Setiap data diatributkan ke centroid 
                                                terdekat, berdasarkan jarak Euclidean atau jarak Manhattan.</p>
                                             
                                             <p><b> 3. Update Centroid:</b> Setiap data diatributkan ke centroid 
                                                terdekat, berdasarkan jarak Euclidean atau jarak Manhattan.</p>
                                            
                                             <p><b> 4. Iterasi:</b>  Langkah 2 dan 3 diulang sampai tidak ada
                                                 perubahan dalam posisi centroid atau jumlah iterasi yang telah
                                                  ditentukan telah tercapai.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
    </section>



@endsection