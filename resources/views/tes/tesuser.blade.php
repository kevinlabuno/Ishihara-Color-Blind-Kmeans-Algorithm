@extends('layouts.app')

@section('content')
    
      <section class="py-5">
                <div class="container px-5">
                    <div class="bg-light rounded-4 py-5 px-4 px-md-5">
                        <div class="text-center mb-5">
                            <div class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 mb-3"> <img src="assets/eyes.png" alt="..." style="width: 100px; height: auto;"></div>
                            <h1 class="fw-bolder">Mulai Tes Ishihara</h1>
                            <p class="lead fw-normal text-muted mb-0">silahkan isi data diri!</p>
                            <h6 class="text-center"><b>(Data anda akan kami simpan dan bersifat rahasia)</b></h6>
                        </div>
                        <form action="{{route('tes_post')}}" method="POST">
                            @csrf
                          <div class="row gx-5 justify-content-center">
                            <div class="col-lg-8 col-xl-6">
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="nama" type="text" name="nama" required>
                                        <label for="nama">Nama Lengkap</label>
                                        <div class="invalid-feedback" >Nama diperlukan.</div>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="alamat" type="text" name="alamat" required>
                                        <label for="alamat">Alamat</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                       
                                       <select name="umur" class="form-control" id="umur" required>
                                            <option value=""></option>
                                            <option value="15-25 tahun">15-25 tahun</option>
                                            <option value="26-35 tahun">26-35 tahun</option>
                                            <option value="36-45 tahun">36-45 tahun</option>
                                            <option value=">46 tahun">>46 tahun</option>
                                        </select>
                                    <label for="umur">Umur</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <select name="jenis" class="form-control" required>
                                            <option value=""></option>
                                            <option value="Laki-Laki">Laki-Laki</option>
                                            <option value="Perempuan">Perempuan</option>
                                        </select>
                                            <label for="jenis">jenis Kelamin</label>
                                    </div>
                               </div>
                        </div>

                          <hr>
                          <h6 class="text-center">Pilihlah salah satu opsi yang Anda lihat pada gambar disamping !</h6>
                          <br>

                             <div class="row gx-5 justify-content-center">
                                 <div class="col-lg-11 col-xl-9 col-xxl-8">
                                     <div class="card overflow-hidden shadow rounded-4 border-0 mb-5">
                                         <div class="card-body p-0">
                                             <div class="d-flex align-items-center">
                                                 <div class="p-5">
                                                     <h4 class="fw-bolder">Plate 1</h4>
                                                     <p>Angka yang terdapat pada plate ini?</p>
                                                      

                                                      <div class="radio-select-1">
                                                        <section required>
                                                            <input type="radio" name="options1" value="12" required>
                                                            <label for="option1.1">12</label>
                                                             <br>
                                                            <input type="radio" name="options1" value="15">
                                                            <label for="option1.2">15</label>
                                                             <br>
                                                            <input type="radio" name="options1" value="x">
                                                            <label for="option1.3">Tidak ada angka</label>
                                                        </section>
                                                        </div>


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
                                                     <h4 class="fw-bolder">Plate 2</h4>
                                                     <p>Angka yang terdapat pada plate ini?</p>

                                                      <div class="radio-select-2">
                                                            <input type="radio" name="options2" value="3" required>
                                                            <label for="option2.1">3</label>
                                                             <br>
                                                            <input type="radio" name="options2" value="8">
                                                            <label for="option2.2">8</label>
                                                             <br>
                                                            <input type="radio" name="options2" value="x">
                                                            <label for="option2.3">Tidak ada angka</label>
                                                        </div>


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
                                                     <p>Angka yang terdapat pada plate ini?</p>
                                                     
                                                      <div class="radio-select-3">
                                                            <input type="radio"  name="options3" value="29" required>
                                                            <label for="option1">29</label>
                                                             <br>
                                                            <input type="radio"  name="options3" value="70">
                                                            <label for="option2">70</label>
                                                             <br>
                                                            <input type="radio"  name="options3" value="x">
                                                            <label for="option3">Tidak ada angka</label>
                                                      </div>
                                                       
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
                                                     <p>Angka yang terdapat pada plate ini?</p>
                                                     
                                                      <div class="radio-select">
                                                            <input type="radio" name="options4" value="6" required>
                                                            <label for="option1">6</label>
                                                             <br>
                                                            <input type="radio" name="options4" value="5">
                                                            <label for="option2">5</label>
                                                             <br>
                                                            <input type="radio" name="options4" value="x">
                                                            <label for="option3">Tidak ada angka</label>
                                                        </div>
                                                       
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
                                                     <p>Angka yang terdapat pada plate ini?</p>
                                                     
                                                      <div class="radio-select">
                                                            <input type="radio" name="options5" value="5" required>
                                                            <label for="option1">5</label>
                                                             <br>
                                                            <input type="radio" name="options5" value="2">
                                                            <label for="option2">2</label>
                                                             <br>
                                                            <input type="radio" name="options5" value="x">
                                                            <label for="option3">Tidak ada angka</label>
                                                        </div>
                                                       
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
                                                     <p>Angka yang terdapat pada plate ini?</p>
                                                     
                                                      <div class="radio-select">
                                                            <input type="radio" name="options6" value="17" required>
                                                            <label for="option1">17</label>
                                                             <br>
                                                            <input type="radio" name="options6" value="15">
                                                            <label for="option2">15</label>
                                                             <br>
                                                            <input type="radio" name="options6" value="x">
                                                            <label for="option3">Tidak ada angka</label>
                                                        </div>
                                                       
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
                                                     <p>Angka yang terdapat pada plate ini?</p>
                                                     
                                                      <div class="radio-select">
                                                            <input type="radio" name="options7" value="3" required>
                                                            <label for="option1">3</label>
                                                             <br>
                                                            <input type="radio" name="options7" value="5">
                                                            <label for="option2">5</label>
                                                             <br>
                                                            <input type="radio" name="options7" value="x">
                                                            <label for="option3">Tidak ada angka</label>
                                                        </div>
                                                       
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
                                                     <p>Angka yang terdapat pada plate ini?</p>
                                                     
                                                      <div class="radio-select">
                                                            <input type="radio" name="options8" value="21" required>
                                                            <label for="options8">21</label>
                                                             <br>
                                                            <input type="radio" name="options8" value="74">
                                                            <label for="options8">74</label>
                                                             <br>
                                                            <input type="radio" name="options8" value="x">
                                                            <label for="options8">Tidak ada angka</label>
                                                        </div>
                                                       
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
                                                     <p>Angka yang terdapat pada plate ini?</p>
                                                     
                                                      <div class="radio-select">
                                                            <input type="radio" name="options9" value="2" required>
                                                            <label for="option1">2</label>
                                                             <br>
                                                            <input type="radio" name="options9" value="5">
                                                            <label for="option2">5</label>
                                                             <br>
                                                            <input type="radio" name="options9" value="x">
                                                            <label for="option3">Tidak ada angka</label>
                                                        </div>
                                                       
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
                                                     <p>Angka yang terdapat pada plate ini?</p>
                                                     
                                                      <div class="radio-select">
                                                            <input type="radio" name="options10" value="5" required>
                                                            <label for="option1">5</label>
                                                             <br>
                                                            <input type="radio" name="options10" value="6">
                                                            <label for="option2">6</label>
                                                             <br>
                                                            <input type="radio" name="options10" value="x">
                                                            <label for="option3">Tidak ada angka</label>
                                                        </div>
                                                       
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
                                                     <p>Angka yang terdapat pada plate ini?</p>
                                                     
                                                      <div class="radio-select">
                                                            <input type="radio" name="options11" value="89" required>
                                                            <label for="option1">89</label>
                                                             <br>
                                                            <input type="radio" name="options11" value="97">
                                                            <label for="option2">97</label>
                                                             <br>
                                                            <input type="radio" name="options11" value="x">
                                                            <label for="option3">Tidak ada angka</label>
                                                        </div>
                                                       
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
                                                     <p>Angka yang terdapat pada plate ini?</p>
                                                     
                                                      <div class="radio-select">
                                                            <input type="radio" name="options12" value="46" required>
                                                            <label for="option1">46</label>
                                                             <br>
                                                            <input type="radio" name="options12" value="45">
                                                            <label for="option2">45</label>
                                                             <br>
                                                            <input type="radio" name="options12" value="x">
                                                            <label for="option3">Tidak ada angka</label>
                                                        </div>
                                                       
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
                                                     <p>Angka yang terdapat pada plate ini?</p>
                                                     
                                                      <div class="radio-select">
                                                            <input type="radio" name="options13" value="5" required>
                                                            <label for="option1">5</label>
                                                             <br>
                                                            <input type="radio" name="options13" value="3">
                                                            <label for="option2">3</label>
                                                             <br>
                                                            <input type="radio" name="options13" value="x">
                                                            <label for="option3">Tidak ada angka</label>
                                                        </div>
                                                       
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
                                                     <p>Angka yang terdapat pada plate ini?</p>
                                                     
                                                      <div class="radio-select">
                                                            <input type="radio" name="options14" value="9" required>
                                                            <label for="option1">9</label>
                                                             <br>
                                                            <input type="radio" name="options14" value="7">
                                                            <label for="option2">7</label>
                                                             <br>
                                                            <input type="radio" name="options14" value="x">
                                                            <label for="option3">Tidak ada angka</label>
                                                      </div>
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
                                                     <p>Angka yang terdapat pada plate ini?</p>
                                                     
                                                      <div class="radio-select">
                                                            <input type="radio" name="options15" value="16" required>
                                                            <label for="option1">16</label>
                                                             <br>
                                                            <input type="radio" name="options15" value="76">
                                                            <label for="option2">76</label>
                                                             <br>
                                                            <input type="radio" name="options15" value="x">
                                                            <label for="option3">Tidak ada angka</label>
                                                        </div>
                                                       
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
                                                     <p>Angka yang terdapat pada plate ini?</p>
                                                     
                                                      <div class="radio-select">
                                                            <input type="radio" name="options16" value="65" required>
                                                            <label for="option1">65</label>
                                                             <br>
                                                            <input type="radio" name="options16" value="73">
                                                            <label for="option2">73</label>
                                                             <br>
                                                            <input type="radio" name="options16" value="x">
                                                            <label for="option3">Tidak ada angka</label>
                                                        </div>
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
                                                     <p>Angka yang terdapat pada plate ini?</p>
                                                     
                                                      <div class="radio-select">
                                                            <input type="radio" name="options17" value="3" required>
                                                            <label for="option1">3</label>
                                                             <br>
                                                            <input type="radio" name="options17" value="5">
                                                            <label for="option2">5</label>
                                                             <br>
                                                            <input type="radio" name="options17" value="x">
                                                            <label for="option3">Tidak ada angka</label>
                                                        </div>
                                                       
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
                                                     <p>Angka yang terdapat pada plate ini?</p>
                                                     
                                                      <div class="radio-select">
                                                            <input type="radio" name="options18" value="2" required>
                                                            <label for="option1">2</label>
                                                             <br>
                                                            <input type="radio" name="options18" value="5">
                                                            <label for="option2">5</label>
                                                             <br>
                                                            <input type="radio" name="options18" value="x">
                                                            <label for="option3">Tidak ada angka</label>
                                                        </div>
                                                       
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
                                                     <p>Angka yang terdapat pada plate ini?</p>
                                                     
                                                      <div class="radio-select">
                                                            <input type="radio" name="options19" value="45" required>
                                                            <label for="option1">45</label>
                                                             <br>
                                                            <input type="radio" name="options19" value="5">
                                                            <label for="option2">5</label>
                                                             <br>
                                                            <input type="radio" name="options19" value="x">
                                                            <label for="option3">Tidak ada angka</label>
                                                        </div>
                                                       
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
                                                     <p>Angka yang terdapat pada plate ini?</p>
                                                     
                                                      <div class="radio-select">
                                                            <input type="radio" name="options20" value="7" required>
                                                            <label for="option1">7</label>
                                                             <br>
                                                            <input type="radio" name="options20" value="73">
                                                            <label for="option2">73</label>
                                                             <br>
                                                            <input type="radio" name="options20" value="x">
                                                            <label for="option3">Tidak ada angka</label>
                                                        </div>
                                                       
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
                                                     <p>Angka yang terdapat pada plate ini?</p>
                                                     
                                                      <div class="radio-select">
                                                            <input type="radio" name="options21" value="26" required>
                                                            <label for="option1">26</label>
                                                             <br>
                                                            <input type="radio" name="options21" value="2">
                                                            <label for="option2">2</label>
                                                             <br>
                                                            <input type="radio" name="options21" value="x">
                                                            <label for="option3">Tidak ada angka</label>
                                                        </div>
                                                       
                                                 </div>
                                                 <img class="img-fluid" src="assets/plate/test21.jpg" alt="..." style="width: 200px; height: auto;">
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                            </div>

                            <button class="btn btn-lg btn-primary">Lihat Hasil</button>

                        </form>
                </div>
            </div>
        </div>
    </section>

@endsection