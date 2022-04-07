@extends('shared_layout.layout')

@section('container')
<div class="service-wrapper">
    <div class="container">
        <div class="cont-card">
            <h3> Kami Menyediakan paket layanan berikut </h3>
            <div class="row row-cols-1 row-cols-md-3 g-4">
              <div class="col">
                <div class="card h-100">
                  <img class="icon-paket" src="/img/speed-icon.svg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Bronze</h5>
                    <ul class="list-none">
                        <li><strong>Up to 10 Mbps</strong></li>
                        <li>Kuota unlimited tanpa FUP</li>
                        <li>Dukungan 24/7 full</li>
                        <li><strong>RP 175.000;</strong></li>
                    </ul>
                  </div>
                  <div class="card-footer">
                    <small class="text-muted">Hubungi kami ></small>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card h-100" style="list-style-type: none;">
                  <img class="icon-paket" src="/img/speed-icon.svg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Silver</h5>
                    <ul class="list-none">
                        <li><strong>Up to 30 Mbps</strong></li>
                        <li>Kuota unlimited tanpa FUP</li>
                        <li>Dukungan 24/7 full</li>
                        <li><strong>RP 275.000;</strong></li>
                    </ul>
                  </div>
                  <div class="card-footer">
                    <small class="text-muted">Hubungi kami ></small>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card h-100">
                  <img class="icon-paket" src="/img/speed-icon.svg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Gold</h5>
                    <ul class="list-none">
                        <li><strong>Up to 50 Mbps</strong></li>
                        <li>Kuota unlimited tanpa FUP</li>
                        <li>Dukungan 24/7 full</li>
                        <li><strong>RP 375.000;</strong></li>
                    </ul>
                  </div>
                  <div class="card-footer">
                    <small class="text-muted">Hubungi kami ></small>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </div>
</div>

@endsection