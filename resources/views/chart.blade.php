@extends('layouts.appNoFooter')

@section('content')

<section>
  <div class="container">
    <div class="chart">
      <form class="col s12">
        <div class="row">
          <div class="card">
            <form action="#">

              <table class="highlight centered">
                <thead>
                  <tr>
                    <th>
                      <label>
                        <input type="checkbox" class="filled-in"/>
                        <span></span>
                      </label>
                    </th>
                    <th>Name Course</th>
                    <th>Unite Price</th>
                    <th  width="10px">Quantity</th>
                    <th>Total Price</th>
                    <th>Ket</th>
                  </tr>
                </thead>

                <tbody>

                  <tr>
                    <td>
                      <label>
                        <input id="indeterminate-checkbox" type="checkbox" checked="checked">
                        <span></span>
                      </label>
                    </td>
                    <td class="course-isi">
                      <div class="col s12">
                        <div class="card horizontal">
                              <div class="card-image">
                                <img src="{{asset('img/course/course-page1.png')}}">
                              </div>
                              <div class="card-stacked">
                                <div class="card-content">
                                  <span>English For Customer Care</span>
                                </div>
                              </div>
                            </div>
                      </div>
                    </td>
                    <td>Rp 300.000,00,-</td>
                    <td>
                      <input class="center" id="" type="number" value="2">
                    </td>
                    <td>Rp 600.000,00,-</td>
                    <td>
                      <a class="btn-floating pulse red darken-1"><i class="material-icons">clear</i></a>
                    </td>
                  </tr>

                  <tr>
                    <td>
                      <label>
                        <input id="indeterminate-checkbox" type="checkbox">
                        <span></span>
                      </label>
                    </td>
                    <td class="course-isi">
                      <div class="col s12">
                        <div class="card horizontal">
                              <div class="card-image">
                                <img src="{{asset('img/icon/komunikasi.png')}}">
                              </div>
                              <div class="card-stacked">
                                <div class="card-content">
                                  <p>I am a very simple card. I am good at containing small bits of information.</p>
                                </div>
                              </div>
                            </div>
                      </div>
                    </td>
                    <td>Rp 100.000,00,-</td>
                    <td>
                      <input class="center" id="" type="number" value="1">
                    </td>
                    <td>Rp 100.000,00,-</td>
                    <td>
                      <a class="btn-floating pulse red darken-1"><i class="material-icons">clear</i></a>
                    </td>
                  </tr>

                  <tr>
                    <td>
                      <label>
                        <input id="indeterminate-checkbox" type="checkbox">
                        <span></span>
                      </label>
                    </td>
                    <td class="course-isi">
                      <div class="col s12">
                        <div class="card horizontal">
                              <div class="card-image">
                                <img src="{{asset('img/icon/komunikasi.png')}}">
                              </div>
                              <div class="card-stacked">
                                <div class="card-content">
                                  <p>I am a very simple card. I am good at containing small bits of information.</p>
                                </div>
                              </div>
                            </div>
                      </div>
                    </td>
                    <td>Rp 500.000,00,-</td>
                    <td>
                      <input class="center" id="" type="number" value="1">
                    </td>
                    <td>Rp 500.000,00,-</td>
                    <td>
                      <a class="btn-floating pulse red darken-1"><i class="material-icons">clear</i></a>
                    </td>
                  </tr>

                </tbody>
              </table>

              </form>
          </div>
        </div>
      </form>
    </div>
  </div>
</section>

<section>
  <div class="jarak-chart-putih">
      <div class="col s12">
        <div class="chart-pembayaran">
          <div class="card">
            <div class="row">
              <div class="col m4">
                <label>
                  <input id="indeterminate-checkbox" type="checkbox">
                  <span>Pilih Semua</span> <span>1</span>
                </label>
              </div>
              <div class="col m3">
                <span>Total untuk Produk</span>
                (<span>1</span> produk)
              </div>
              <div class="col m3">
                <div class="total-bayar">
                  <span>Rp. 600.000</span>
                </div>
              </div>
              <div class="col m2 btn-pembayaran">
                <a href="{{route("informasi")}}" class="waves-effect waves-light btn-large orange darken-3">Pembayaran</a>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>
</section>


@endsection
