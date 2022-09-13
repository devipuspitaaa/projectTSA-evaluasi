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
                     <h2>Rekomendasi Film</h2>

                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="blog">
         <div class="container">
            <div class="row">
               <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 margin">
                  <div class="news-box">
                     <figure><img src="images/hello.jpg" alt="img"
                           style="width:300px; height:300px; margin-left: 100px; margin-top: 50px;" /></figure>
                     <h3>Hello, Goodbye, and Everything in Between</h3>
                     <span> Dokumen</span>
                     <p>
                        Film terbaru Netflix 2022 pertama merupakan film orisinal layanan streaming film ini. 
                        Hello, Goodbye diangkat dari novel berjudul bersama karya Jennifer E. Smith. 
                        Film drama romantis ini dibintangi Talia Ryder, Jordan Fisher, dan Ayo Edebiri.<br><br>
                        Premisnya berpusat pada Clare (Talia Ryder), anak SMA yang baru pindah rumah dan bertemu Aidan (Jordan Fisher). Pertemuan mereka berujung pada kisah cinta yang cukup rumit.<br>
                     </p>
                  </div>
               </div>
               <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 margin">
                  <div class="news-box">
                     <figure><img src="images/incan.jpeg" alt="img"
                           style="width:300px; height:300px; margin-left: 100px; margin-top: 50px;" /></figure>
                     <h3>Incantation</h3>
                     <span> Dokumen</span>
                     <p>
                        Film Netflix terbaru Juli 2022 selanjutnya adalah Incantation. Kamu wajib nonton karena ini merupakan film horor Taiwan terlaris sepanjang masa. 
                        Di dalamnya kamu tidak hanya bakal melihat jumpscare, namun juga premis mengerikan.<br><br>
                        Film karya sutradara Kevin Ko ini berkisah tentang seorang ibu yang berusaha melindungi anak perempuan dari kutukan 
                        yang diakibatkan oleh dirinya sendiri. Incantation bahkan terinspirasi dari kisah nyata di Distrik Gushan, Kaohsiung. Makin membuat penasaran, dong? <br>

                     </p>
                  </div>
               </div>

            </div>
         </div>
      </div>
      <!--  footer -->
      @extends('layouts.footer')
      <!-- end footer -->
   </div>

</div>