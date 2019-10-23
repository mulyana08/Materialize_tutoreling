@extends('layouts.appNoFooter')

@section('content')

<section>
  <div class="container">
      <div class="chart">
        <div class="card">
          <div class="row">
            <div class="col m6 s12">
              <form class="activateStepper">
                <div class="row">
                  <div class="judul-informasi">
                    <h6>Your Information</h6><br>
                  </div>
                  <div class="input-field col s10">
                    <i class="material-icons prefix">account_circle</i>
                    <input id="icon_prefix" type="text" class="validate">
                    <label for="icon_prefix">Username</label>
                  </div>

                  <div class="input-field col s10">
                    <i class="material-icons prefix">account_circle</i>
                      <select>
                        <option value="" >Select Country</option>
                        <option value="1">Option 1</option>
                        <option value="2">Option 2</option>
                        <option value="3">Option 3</option>
                      </select>
                    </div>

                    <div class="input-field col s10">
                      <i class="material-icons prefix">account_circle</i>
                        <select>
                          <option value="" >Select Provinsi</option>
                          <option value="1">Option 1</option>
                          <option value="2">Option 2</option>
                          <option value="3">Option 3</option>
                        </select>
                      </div>

                  <div class="input-field col s10">
                    <i class="material-icons prefix">account_circle</i>
                    <input id="icon_prefix" type="text" class="validate">
                    <label for="icon_prefix">Town City</label>
                  </div>
                  <div class="input-field col s10">
                    <i class="material-icons prefix">account_circle</i>
                    <input id="icon_prefix" type="text" class="validate">
                    <label for="icon_prefix">Street Address</label>
                  </div>
                  <div class="input-field col s10">
                    <i class="material-icons prefix">account_circle</i>
                    <input id="icon_prefix" type="number" class="validate">
                    <label for="icon_prefix">Phone</label>
                  </div>
                  <div class="input-field col s10">
                    <i class="material-icons prefix">account_circle</i>
                    <input id="icon_prefix" type="email" class="validate">
                    <label for="icon_prefix">Email Addres</label>
                  </div>
                </div>
              </form>
            </div>

            <div class="col m1 s12">
              <div class="line">
                <div class="garis-informasi">

                </div>
              </div>
            </div>

            <div class="col m5 s12">
              <div class="judul-informasi">
                <h6>Select Bank Transfer</h6><br>
              </div>
              <div class="select-bank">
                <label class="bank">
                  <input class="with-gap" name="group1" type="radio"  />
                  <span>Bank BNI</span>
                </label>
                <div class="img-bank right">
                  <img src="{{asset('img/icon/bni.png')}}" class="responsive-img">
                </div>
              </div>
              <div class="select-bank">
                <label class="bank">
                  <input class="with-gap" name="group1" type="radio"  />
                  <span>Bank BRI</span>
                </label>
                <div class="img-bank right">
                  <img src="{{asset('img/icon/bri.jpeg')}}" class="responsive-img">
                </div>
              </div>
              <div class="select-bank">
                <label class="bank">
                  <input class="with-gap" name="group1" type="radio"  />
                  <span>Bank BCA</span>
                </label>
                <div class="img-bank right">
                  <img src="{{asset('img/icon/bca.jpg')}}" class="responsive-img">
                </div>
              </div>

              <div class="row">
                <div class="col s12">
                  <span>Have a Cupon ?</span>
                  <a href="#">Click here to enter your code</a>
                </div>
              </div>

              <div class="row">
                <div class="col s12">
                  <div class="btn-bayar right">
                    <a href="{{route("informasi")}}" class="waves-effect waves-light btn-large orange darken-3">Selanjutnya</a>
                  </div>
                </div>
              </div>

            </div>
          </div>


        </div>
      </div>
  </div>
</section>


@endsection
