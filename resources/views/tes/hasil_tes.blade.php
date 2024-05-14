<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Sistem Deteksi Buta Warna</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body class="d-flex flex-column h-100">
        <main class="flex-shrink-0">

        <section class="py-5">
                <div class="container px-5">
                    
                    <div class="bg-light rounded-4 py-5 px-4 px-md-5">
                        @if (session('success'))
                        <div class="alert alert-primary">
                               {{session('success')}}
                        </div>                      
                        @endif
                        <div class="text-center mb-5">
                            <div class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 mb-3"> <img src="assets/eyes.png" alt="..." style="width: 100px; height: auto;"></div>
                            <h1 class="fw-bolder">Hasil Tes Anda</h1>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                        <p class="lead fw-normal text-muted mb-0">ID Tes: &nbsp;&nbsp;&nbsp;<b>{{$data->id}}</b></p>
                        <a href="" class="btn btn-success"><i class="bi bi-download"></i>&nbsp; <i> Export Data</i></a>
                        </div>
                        <hr>
                        <p>Nama:&nbsp;&nbsp;&nbsp; <b> {{$data->nama}}</b>  <br> Alamat:&nbsp;&nbsp;&nbsp;<b>{{$data->alamat}}</b>  <br>Umur:&nbsp;&nbsp;&nbsp;<b>{{$data->umur}}</b> <br>Jenis Kelamin:&nbsp;&nbsp;&nbsp;<b>{{$data->jenis}}</b> </p>
                        <hr>
                            <div class="card shadow border-0 rounded-4 mb-5">
                                <div class="card-body p-5">
                                        <div class="row row-cols-1 row-cols-md-3 mb-4">
                                            <div class="col mb-4 mb-md-0"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100"><b>{{ number_format($normal, 2) }}%</b> &nbsp;&nbsp;(Normal)</div></div>
                                            <div class="col mb-4 mb-md-0"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100"><b>{{ number_format($parsial, 2) }}%</b> &nbsp;&nbsp;(Buta Warna Parsial)</div></div>
                                            <div class="col"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100"><b>{{ number_format($total, 2) }}%</b> &nbsp;&nbsp;(Buta Warna Total)</div></div>
                                        </div>
                                </div>
                            </div>

                        <div class="row gx-5 justify-content-center">
                                 <div class="col-lg-11 col-xl-9 col-xxl-8">
                                     <div class="card overflow-hidden shadow rounded-4 border-0 mb-5">
                                         <div class="card-body p-0">
                                             <div class="d-flex align-items-center">
                                                 <div class="p-5">
                                                     <h4 class="fw-bolder">Plate 1</h4>
                                                      <p>Jawaban: <br> <b>12 (Normal) <br> 12 (Parsial) <br> 12 (Total)</b></p>
                                                     <p>Jawaban Anda: <b>{{$data->p1}}</b></p>
                                                       
                                                 </div>
                                                 <img class="img-fluid" src="assets/plate/test1.jpg" alt="..." style="width: 200px; height: auto;">
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                        </div>


                            <div class="row gx-5 justify-content-center">
                                 <div class="col-lg-11 col-xl-9 col-xxl-8">
                                     <div class="card overflow-hidden shadow rounded-4 border-0 mb-5">
                                         <div class="card-body p-0">
                                             <div class="d-flex align-items-center">
                                                 <div class="p-5">
                                                     <h4 class="fw-bolder">Plate 2</h4><b></b>
                                                     <p>Jawaban: <br> <b>8 (Normal) <br> 3 (Parsial) <br> x (Total)</b></p>
                                                     <p>Jawaban Anda:  <b>{{$data->p2}}</b></p>
                                                       
                                                 </div>
                                                 <img class="img-fluid" src="assets/plate/test2.jpg" alt="..." style="width: 200px; height: auto;">
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                            </div>


                            <div class="row gx-5 justify-content-center">
                                 <div class="col-lg-11 col-xl-9 col-xxl-8">
                                     <div class="card overflow-hidden shadow rounded-4 border-0 mb-5">
                                         <div class="card-body p-0">
                                             <div class="d-flex align-items-center">
                                                 <div class="p-5">
                                                     <h4 class="fw-bolder">Plate 3</h4>
                                                      <p>Jawaban: <br> <b>29 (Normal) <br> 70 (Parsial) <br> x (Total)</b></p>
                                                     <p>Jawaban Anda: <b> {{$data->p3}}</b></p>
                                                       
                                                 </div>
                                                 <img class="img-fluid" src="assets/plate/test3.jpg" alt="..." style="width: 200px; height: auto;">
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                            </div>


                            <div class="row gx-5 justify-content-center">
                                 <div class="col-lg-11 col-xl-9 col-xxl-8">
                                     <div class="card overflow-hidden shadow rounded-4 border-0 mb-5">
                                         <div class="card-body p-0">
                                             <div class="d-flex align-items-center">
                                                 <div class="p-5">
                                                     <h4 class="fw-bolder">Plate 4</h4>
                                                      <p>Jawaban: <br> <b>6 (Normal) <br> 5 (Parsial) <br> x (Total)</b></p>
                                                     <p>Jawaban Anda:  <b>{{$data->p4}}</b></p>
                                                       
                                                 </div>
                                                 <img class="img-fluid" src="assets/plate/test4.jpg" alt="..." style="width: 200px; height: auto;">
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                            </div>

                            <div class="row gx-5 justify-content-center">
                                 <div class="col-lg-11 col-xl-9 col-xxl-8">
                                     <div class="card overflow-hidden shadow rounded-4 border-0 mb-5">
                                         <div class="card-body p-0">
                                             <div class="d-flex align-items-center">
                                                 <div class="p-5">
                                                     <h4 class="fw-bolder">Plate 5</h4>
                                                      <p>Jawaban: <br> <b>5 (Normal) <br> 2 (Parsial) <br> x (Total)</b></p>
                                                     <p>Jawaban Anda:  <b>{{$data->p5}}</b></p>
                                                       
                                                 </div>
                                                 <img class="img-fluid" src="assets/plate/test5.jpg" alt="..." style="width: 200px; height: auto;">
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                            </div>

                            <div class="row gx-5 justify-content-center">
                                 <div class="col-lg-11 col-xl-9 col-xxl-8">
                                     <div class="card overflow-hidden shadow rounded-4 border-0 mb-5">
                                         <div class="card-body p-0">
                                             <div class="d-flex align-items-center">
                                                 <div class="p-5">
                                                     <h4 class="fw-bolder">Plate 6</h4>
                                                      <p>Jawaban: <br> <b>15 (Normal) <br> 17 (Parsial) <br> x (Total)</b></p>
                                                     <p>Jawaban Anda:  <b>{{$data->p6}}</b></p>
                                                       
                                                 </div>
                                                 <img class="img-fluid" src="assets/plate/test6.jpg" alt="..." style="width: 200px; height: auto;">
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                            </div>

                            <div class="row gx-5 justify-content-center">
                                 <div class="col-lg-11 col-xl-9 col-xxl-8">
                                     <div class="card overflow-hidden shadow rounded-4 border-0 mb-5">
                                         <div class="card-body p-0">
                                             <div class="d-flex align-items-center">
                                                 <div class="p-5">
                                                     <h4 class="fw-bolder">Plate 7</h4>
                                                      <p>Jawaban: <br> <b>3 (Normal) <br> 5 (Parsial) <br> x (Total)</b></p>
                                                     <p>Jawaban Anda:  <b>{{$data->p7}}</b></p>
                                                       
                                                 </div>
                                                 <img class="img-fluid" src="assets/plate/test7.jpg" alt="..." style="width: 200px; height: auto;">
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                            </div>

                            <div class="row gx-5 justify-content-center">
                                 <div class="col-lg-11 col-xl-9 col-xxl-8">
                                     <div class="card overflow-hidden shadow rounded-4 border-0 mb-5">
                                         <div class="card-body p-0">
                                             <div class="d-flex align-items-center">
                                                 <div class="p-5">
                                                     <h4 class="fw-bolder">Plate 8</h4>
                                                      <p>Jawaban: <br> <b>74 (Normal) <br> 21 (Parsial) <br> x (Total)</b></p>
                                                     <p>Jawaban Anda:  <b>{{$data->p8}}</b></p>
                                                       
                                                 </div>
                                                 <img class="img-fluid" src="assets/plate/test8.jpg" alt="..." style="width: 200px; height: auto;">
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                            </div>

                            <div class="row gx-5 justify-content-center">
                                 <div class="col-lg-11 col-xl-9 col-xxl-8">
                                     <div class="card overflow-hidden shadow rounded-4 border-0 mb-5">
                                         <div class="card-body p-0">
                                             <div class="d-flex align-items-center">
                                                 <div class="p-5">
                                                     <h4 class="fw-bolder">Plate 9</h4>
                                                      <p>Jawaban: <br> <b>2 (Normal) <br> x (Parsial) <br> x (Total)</b></p>
                                                     <p>Jawaban Anda:  <b>{{$data->p9}}</b></p>
                                                       
                                                 </div>
                                                 <img class="img-fluid" src="assets/plate/test9.jpg" alt="..." style="width: 200px; height: auto;">
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                            </div>

                            <div class="row gx-5 justify-content-center">
                                 <div class="col-lg-11 col-xl-9 col-xxl-8">
                                     <div class="card overflow-hidden shadow rounded-4 border-0 mb-5">
                                         <div class="card-body p-0">
                                             <div class="d-flex align-items-center">
                                                 <div class="p-5">
                                                     <h4 class="fw-bolder">Plate 10</h4>
                                                      <p>Jawaban: <br> <b>6 (Normal) <br> x (Parsial) <br> x (Total)</b></p>
                                                     <p>Jawaban Anda:  <b>{{$data->p10}}</b></p>
                                                       
                                                 </div>
                                                 <img class="img-fluid" src="assets/plate/test10.jpg" alt="..." style="width: 200px; height: auto;">
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                            </div>

                            <div class="row gx-5 justify-content-center">
                                 <div class="col-lg-11 col-xl-9 col-xxl-8">
                                     <div class="card overflow-hidden shadow rounded-4 border-0 mb-5">
                                         <div class="card-body p-0">
                                             <div class="d-flex align-items-center">
                                                 <div class="p-5">
                                                     <h4 class="fw-bolder">Plate 11</h4>
                                                      <p>Jawaban: <br> <b>97 (Normal) <br> x (Parsial) <br> x (Total)</b></p>
                                                     <p>Jawaban Anda:  <b>{{$data->p11}}</b></p>
                                                       
                                                 </div>
                                                 <img class="img-fluid" src="assets/plate/test11.jpg" alt="..." style="width: 200px; height: auto;">
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                            </div>

                            <div class="row gx-5 justify-content-center">
                                 <div class="col-lg-11 col-xl-9 col-xxl-8">
                                     <div class="card overflow-hidden shadow rounded-4 border-0 mb-5">
                                         <div class="card-body p-0">
                                             <div class="d-flex align-items-center">
                                                 <div class="p-5">
                                                     <h4 class="fw-bolder">Plate 12</h4>
                                                      <p>Jawaban: <br> <b>45 (Normal) <br> x (Parsial) <br> x (Total)</b></p>
                                                     <p>Jawaban Anda:  <b>{{$data->p12}}</b></p>
                                                       
                                                 </div>
                                                 <img class="img-fluid" src="assets/plate/test12.jpg" alt="..." style="width: 200px; height: auto;">
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                            </div>

                            <div class="row gx-5 justify-content-center">
                                 <div class="col-lg-11 col-xl-9 col-xxl-8">
                                     <div class="card overflow-hidden shadow rounded-4 border-0 mb-5">
                                         <div class="card-body p-0">
                                             <div class="d-flex align-items-center">
                                                 <div class="p-5">
                                                     <h4 class="fw-bolder">Plate 13</h4>
                                                      <p>Jawaban: <br> <b>5 (Normal) <br> x (Parsial) <br> x (Total)</b></p>
                                                     <p>Jawaban Anda:  <b>{{$data->p13}}</b></p>
                                                       
                                                 </div>
                                                 <img class="img-fluid" src="assets/plate/test13.jpg" alt="..." style="width: 200px; height: auto;">
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                            </div>

                            <div class="row gx-5 justify-content-center">
                                 <div class="col-lg-11 col-xl-9 col-xxl-8">
                                     <div class="card overflow-hidden shadow rounded-4 border-0 mb-5">
                                         <div class="card-body p-0">
                                             <div class="d-flex align-items-center">
                                                 <div class="p-5">
                                                     <h4 class="fw-bolder">Plate 14</h4>
                                                      <p>Jawaban: <br> <b>7 (Normal) <br> x (Parsial) <br> x (Total)</b></p>
                                                     <p>Jawaban Anda:  <b>{{$data->p14}}</b></p>
                                                       
                                                 </div>
                                                 <img class="img-fluid" src="assets/plate/test14.jpg" alt="..." style="width: 200px; height: auto;">
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                            </div>

                            <div class="row gx-5 justify-content-center">
                                 <div class="col-lg-11 col-xl-9 col-xxl-8">
                                     <div class="card overflow-hidden shadow rounded-4 border-0 mb-5">
                                         <div class="card-body p-0">
                                             <div class="d-flex align-items-center">
                                                 <div class="p-5">
                                                     <h4 class="fw-bolder">Plate 15</h4>
                                                      <p>Jawaban: <br> <b>16 (Normal) <br> x (Parsial) <br> x (Total)</b></p>
                                                     <p>Jawaban Anda:  <b>{{$data->p15}}</b></p>
                                                       
                                                 </div>
                                                 <img class="img-fluid" src="assets/plate/test15.jpg" alt="..." style="width: 200px; height: auto;">
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                            </div>

                            <div class="row gx-5 justify-content-center">
                                 <div class="col-lg-11 col-xl-9 col-xxl-8">
                                     <div class="card overflow-hidden shadow rounded-4 border-0 mb-5">
                                         <div class="card-body p-0">
                                             <div class="d-flex align-items-center">
                                                 <div class="p-5">
                                                     <h4 class="fw-bolder">Plate 16</h4>
                                                      <p>Jawaban: <br> <b>73 (Normal) <br> x (Parsial) <br> x (Total)</b></p>
                                                     <p>Jawaban Anda:  <b>{{$data->p16}}</b></p>
                                                       
                                                 </div>
                                                 <img class="img-fluid" src="assets/plate/test16.jpg" alt="..." style="width: 200px; height: auto;">
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                            </div>

                            <div class="row gx-5 justify-content-center">
                                 <div class="col-lg-11 col-xl-9 col-xxl-8">
                                     <div class="card overflow-hidden shadow rounded-4 border-0 mb-5">
                                         <div class="card-body p-0">
                                             <div class="d-flex align-items-center">
                                                 <div class="p-5">
                                                     <h4 class="fw-bolder">Plate 17</h4>
                                                      <p>Jawaban: <br> <b>x (Normal) <br> 5 (Parsial) <br> x (Total)</b></p>
                                                     <p>Jawaban Anda:  <b>{{$data->p17}}</b></p>
                                                       
                                                 </div>
                                                 <img class="img-fluid" src="assets/plate/test17.jpg" alt="..." style="width: 200px; height: auto;">
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                            </div>

                            <div class="row gx-5 justify-content-center">
                                 <div class="col-lg-11 col-xl-9 col-xxl-8">
                                     <div class="card overflow-hidden shadow rounded-4 border-0 mb-5">
                                         <div class="card-body p-0">
                                             <div class="d-flex align-items-center">
                                                 <div class="p-5">
                                                     <h4 class="fw-bolder">Plate 18</h4>
                                                      <p>Jawaban: <br> <b>x (Normal) <br> 2 (Parsial) <br> x (Total)</b></p>
                                                     <p>Jawaban Anda:  <b>{{$data->p18}}</b></p>
                                                       
                                                 </div>
                                                 <img class="img-fluid" src="assets/plate/test18.jpg" alt="..." style="width: 200px; height: auto;">
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                            </div>

                            <div class="row gx-5 justify-content-center">
                                 <div class="col-lg-11 col-xl-9 col-xxl-8">
                                     <div class="card overflow-hidden shadow rounded-4 border-0 mb-5">
                                         <div class="card-body p-0">
                                             <div class="d-flex align-items-center">
                                                 <div class="p-5">
                                                     <h4 class="fw-bolder">Plate 19</h4>
                                                      <p>Jawaban: <br> <b>x (Normal) <br> 45 (Parsial) <br> x (Total)</b></p>
                                                     <p>Jawaban Anda:  <b>{{$data->p19}}</b></p>
                                                       
                                                 </div>
                                                 <img class="img-fluid" src="assets/plate/test19.jpg" alt="..." style="width: 200px; height: auto;">
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                            </div>

                            <div class="row gx-5 justify-content-center">
                                 <div class="col-lg-11 col-xl-9 col-xxl-8">
                                     <div class="card overflow-hidden shadow rounded-4 border-0 mb-5">
                                         <div class="card-body p-0">
                                             <div class="d-flex align-items-center">
                                                 <div class="p-5">
                                                     <h4 class="fw-bolder">Plate 20</h4>
                                                      <p>Jawaban: <br> <b>x (Normal) <br> 73 (Parsial) <br> x (Total)</b></p>
                                                     <p>Jawaban Anda:  <b>{{$data->p20}}</b></p>
                                                       
                                                 </div>
                                                 <img class="img-fluid" src="assets/plate/test20.jpg" alt="..." style="width: 200px; height: auto;">
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                            </div>

                            <div class="row gx-5 justify-content-center">
                                 <div class="col-lg-11 col-xl-9 col-xxl-8">
                                     <div class="card overflow-hidden shadow rounded-4 border-0 mb-5">
                                         <div class="card-body p-0">
                                             <div class="d-flex align-items-center">
                                                 <div class="p-5">
                                                     <h4 class="fw-bolder">Plate 21</h4>
                                                      <p>Jawaban: <br> <b>26 (Normal) <br> 2 (Parsial) <br> x (Total)</b></p>
                                                     <p>Jawaban Anda:  <b>{{$data->p21}}</b></p>
                                                       
                                                 </div>
                                                 <img class="img-fluid" src="assets/plate/test21.jpg" alt="..." style="width: 200px; height: auto;">
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                            </div>

                            
                        </div>
                     </div>
                   </div>
              </section>
   
        </main>

            @include('layouts.footer')

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
