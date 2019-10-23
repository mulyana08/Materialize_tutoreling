@extends('layouts.appNoFooter')

@section('content')

<section>
  <div class="container">

  <div class="card">

    <ul class="stepper horizontal">
     <li class="step">
        <div class="step-title waves-effect">Pilih Produk</div>
        <div class="step-content">
           <!-- Your step content goes here (like inputs or so) -->

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

                       </tbody>
                     </table>

                     </form>
                 </div>
               </div>
             </form>
           </div>

           <div class="jarak-chart-putih1">
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
                       <div class="step-actions">
                         <div class="col m2 btn-pembayaran">
                           <a href="" class="waves-effect waves-light btn-large orange darken-3 next-step">Pembayaran</a>
                         </div>
                       </div>
                     </div>
                   </div>
                 </div>
               </div>
           </div>
        </div>
     </li>

     <li class="step active">
        <div class="step-title waves-effect">Pembayaran</div>
        <div class="step-content">
           <!-- Your step content goes here (like inputs or so) -->

           <div class="chart">
             <div class="card">
               <div class="row">
                 <div class="col m6 s12">
                   <form>
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

                  <div class="step-actions">
                     <div class="row">
                       <div class="col s12">
                         <div class="btn-bayar">
                           <a class="waves-effect waves-light btn-large deep-orange accent-4 btn previous-step">Kembali</a>
                           <a class="waves-effect waves-light btn-large orange darken-3 btn next-step">Selanjutnya</a>
                         </div>
                       </div>
                     </div>
                   </div>

                 </div>
               </div>
             </div>
           </div>

           <!-- <div class="step-actions">
              Here goes your actions buttons
              <button class="waves-effect waves-dark btn next-step">CONTINUE</button>
           </div> -->
        </div>
     </li>

     <li class="step">
        <div class="step-title waves-effect">Summary</div>
        <div class="step-content">
           <!-- Your step content goes here (like inputs or so) -->
           <div class="step-actions">
              <!-- Here goes your actions buttons -->
              <button class="waves-effect waves-dark btn next-step">CONTINUE</button>
           </div>
        </div>
     </li>

     <li class="step">
        <div class="step-title waves-effect waves-dark">Aktivasi</div>
        <div class="step-content">
           <!-- Your step content goes here (like inputs or so) -->
           <div class="step-actions">
              <!-- Here goes your actions buttons -->
              <button class="waves-effect waves-dark btn next-step" data-feedback="someFunction">CONTINUE</button>
           </div>
        </div>
     </li>

   </ul>

  </div>

  </div>
</section>

@endsection