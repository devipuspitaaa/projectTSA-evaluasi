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
                     <h2>Rekomendasi Musik</h2>

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
                     <figure><img src="images/pink.jpg" alt="img"
                           style="width:300px; height:300px; margin-left: 100px; margin-top: 50px;" /></figure>
                     <h3>Pink Venom (BLACKPINK)</h3>
                     <span> Dokumen</span>
                     <p>
                        Grup girl BLACKPINK baru saja merilis head single berjudul Pink Venom dari album studio kedua BORN PINK 
                        yang akan dirilis pada 16 September 2022 mendatang.<br><br>
                        Pink Venom dirilis menandai kembalinya BLACKPINK setelah dua tahun absen pada tahun 2020 lalu.<br><br>
                        Namun Pink Venom justru menghadapi kendala di Korea Selatan setelah dicekal tayang di KBS.
                     </p>
                  </div>
               </div>
               <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 margin">
                  <div class="news-box">
                     <figure><img src="images/boy.jpg" alt="img"
                           style="width:300px; height:300px; margin-left: 100px; margin-top: 50px;" /></figure>
                     <h3>Hype boy (NewJeans)</h3>
                     <span> Dokumen</span>
                     <p>
                        Lagu yang berjudul ‘Hype Boy’ ini adalah lagu yang dinyanyikan oleh grup NewJeans.<br><br>
                        Karyanya yang satu ini dirilis pertama kali pada tanggal 23 Juli 2022 yang lalu.<br><br>
                        Dalam kurun waktu kurang dari 1 bulan sejak perilisannya, video klip lagu ini sudah diputar lebih dari 6,7 juta kali dalam akun YouTube HYBE LABELS.
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