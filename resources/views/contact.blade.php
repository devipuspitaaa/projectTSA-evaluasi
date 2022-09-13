@extends('layouts.apps')

    <!-- loader  -->
    <div class="loader_bg">
        <div class="loader"><img src="images/loading.gif" alt="#" /></div>
    </div>
    <!-- end loader -->

    <div class="wrapper">
        <!-- Sidebar  -->

        @extends('layouts.sidebar')

@yield('content') 
@section('content')


      <div id="content">
      @include('layouts.header') 

         <div class="contactus">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-md-8 offset-md-2">
                     <div class="title">
                        <h2>Contact Us</h2>

                     </div>
                  </div>
               </div>
            </div>
         </div>
<br></br>
         <!-- map -->
            <div class="about">
            <div class="container">
               <div class="row">
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                     <div class="aboutimg"  style="margin-top: -60px;">
                        <h3>Find Us</h3>
                        <p style="width: 450px; text-align:justify;">Jika ada pertanyaan, kritik, ataupun saran kalian bisa kontak kami. Berbincanglah
                           dengan leluasa, sampai menemukan titik ternyaman.
                        </p>
                        <a href="#">Read More</a>
                     </div>
                  </div>
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                <form class="main_form">
                   <div class="row">
                      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                         <input class="form-control" placeholder="Nama" type="text" name="Name">
                      </div>
                       <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                         <input class="form-control" placeholder="Email" type="text" name="Email">
                      </div>
                       <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                         <input class="form-control" placeholder="Telepon" type="text" name="Phone">
                      </div>
                       <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                         <textarea class="textarea" placeholder="Pesan" type="text" name="Message"></textarea>
                      </div>
                       <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                         <button class="send">Kirim</button>
                      </div>
                   </div>
                </form>
                            <br></br><br></br>
                        </div>
                    </div>
                </div>
            </div>
            <br></br><br></br>
         <!-- end map -->
         <!--  footer -->
         @extends('layouts.footer')
         <!-- end footer -->
      </div>

   </div>
