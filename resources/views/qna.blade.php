@extends('shared_layout.layout')

@section('container')
<div class="service-wrapper">
    <div class="container">
        <div class="cont-card">
            <h3 class="mb-5"> Butuh Bantuan? </h3>    
        </div>

        <div class="row" data-aos="fade" data-aos-delay="200">
            <div class="bg-white border-bottom" onclick="myFunction('question1')">
                <h5 class="mt-5"><i class="fa fa-regular fa-angle-down"></i>
                    Bagaimana cara masuk ke pengaturan router?
                </h5>
                <p style="display: none; margin-left: 20px" id="question1">Masih dibutuhkan investor pada startup ini. 
                    Peluang usaha ini memiliki potensi yang besar untuk dapat terus berjalan dan berkembang. 
                    Hubungi kami jika anda ingin ikut berinvestasi pada kami.</p>
            </div>

            <div class="bg-white border-bottom" onclick="myFunction('question2')">
                <h5><i class="fa fa-regular fa-angle-down"></i>
                    Bagaimana cara mengubah password router?
                </h5>
                <p style="display: none; margin-left: 20px" id="question2">Masih dibutuhkan investor pada startup ini. 
                    Peluang usaha ini memiliki potensi yang besar untuk dapat terus berjalan dan berkembang. 
                    Hubungi kami jika anda ingin ikut berinvestasi pada kami.</p>
            </div>
            
        </div>
    </div>
</div>

<script>
    function myFunction(i) {
      var x = document.getElementById(i);
      if (x.style.display === "none") {
        x.style.display = "block";
      } else {
        x.style.display = "none";
      }
    }
    </script>
@endsection