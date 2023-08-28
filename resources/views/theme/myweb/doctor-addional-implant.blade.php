@extends('theme.myweb.website')
@section('content')
<style>
.inner-banner {
    background: url({{ get_option('additional_implement_banner_img') != '' ? asset('public/uploads/media/'.get_option('additional_implement_banner_img')) : '' }}) center center/cover no-repeat;
}
</style>
  <main>
    <section class="inner-banner">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-12">
            <div class="content">
              <h2>{!! get_trans_option('additional_implement_banner_heading') !!}</h2>
              <img data-aos="slide-right" data-aos-duration="1000" data-aos-delay="100" class="img-fluid banner-img"
                src="{{ get_option('additional_implement_header_img') != '' ? asset('public/uploads/media/'.get_option('additional_implement_header_img')) : '' }}" alt="">
            </div>
          </div>

        </div>
      </div>
    </section>
    <!-- Doctor Register Portal -->
    <div class="doctor_register_portal">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-lg-12 text-center">
            <div class="doctor_register_portal_heading">
              {!! get_trans_option('additional_implement_heading') !!}
            </div>
          </div>
          <div class="col-12 col-lg-10">
            <form action="" id="form">
              <div class="row" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="200">
                <div class="col-12 ">
                  <label for="text">Implant placing Doctor Name</label>
                  <input type="text" placeholder="Enter here">
                </div>
          
                <div class="col-12 ">
                  <label for="text">Dental Implant Site #</label>
                  <input type="text" placeholder="Enter here">
                </div>
                <div class="col-12 ">
                  <label for="Manufactures">* Manufacturer: (choose one)</label>
                  <div class="select-parent">
                    <select class="" name="Manufactures" id="Manufactures">
                      <option value="">Select Manufacture</option>
                      <option value="option1">OVERMED</option>
                      <option value="option2">Rex Implants</option>
                      <option value="option3">Ritter Implants</option>
                      <option value="option4">Schutz Dental</option>
                      <option value="option5">SHAKLETON</option>
                      <option value="option6">Shinhung</option>
                      <option value="option7">SIC invent AG</option>
                      <option value="option8">SIN Implant System</option>
                      <option value="option9">Southern Implants</option>
                      <option value="option10">Sterngold Dental</option>
                      <option value="option11">Sterngold Dental MOR</option>
                    </select>
                    <i class="fas fa-exclamation-circle failure-icon"></i>
                    <i class="far fa-check-circle success-icon"></i>
                  </div>
                  <div class="error"></div>
                </div>
                <div class="col-12 ">
                  <label for="Brand">* Brand: (choose one)</label>

                  <div class="select-parent">
                    <select class="" name="Brand" id="Brand">
                      <option value="">Select Brand</option>
                      <option alue="option1">Brand 1</option>
                      <option alue="option2">Brand 2</option>
                      <option alue="option3">Brand 3</option>
                    </select>
                    <i class="fas fa-exclamation-circle failure-icon"></i>
                    <i class="far fa-check-circle success-icon"></i>
                  </div>
                  <div class="error"></div>
                </div>
                <div class="col-12 ">

                  <label for="Platform">* Platform size/Diameter (choose one):</label>
                  <div class="select-parent">
                    <select class="" name="Platform" id="Platform">
                      <option value="">Select Platform</option>
                      <option alue="option1">Platform 1</option>
                      <option alue="option2">Platform 2</option>
                      <option alue="option3">Platform 3</option>
                    </select>
                    <i class="fas fa-exclamation-circle failure-icon"></i>
                    <i class="far fa-check-circle success-icon"></i>
                  </div>
                  <div class="error"></div>
                </div>
                <div class="col-12 ">
                  <label for="text">Reference #</label>
                  <input type="text" placeholder="Enter here">
                </div>
                <div class="col-12 ">
                  <label for="text">Lot #</label>
                  <input type="text" placeholder="Enter here">
                </div>
                <div class="col-12 ">
                  <label for="text">Date of implant surgery</label>
                  <input type="date">
                </div>
                <div class="col-12 ">
                  <label for="selectImage">Upload x-ray/images of implant<small>(s): max 2 **Attach here**
                    </small></label>
                  <input type="file" id="selectImage" name="selectImage" multiple>
                </div>
                <div class="col-lg-12 col-12">
                  <div class="preview_image">
                    <p><span class="text-center" id="totalImages">0</span> File(s) Selected</p>
                    <div id="images"></div>
                  </div>
                </div>
                <div class="col-12 ">
                  <label for="text">Restoring Dentist Name:</label>
                  <input type="text" placeholder="Enter here">
                </div>
              
                <div class="col-12 ">
                  <label for="text">Date on Implant Restoration</label>
                  <input type="date">
                </div>
                <div class="col-12 ">
                  <label for="text">Abutment & Crown Placement </label>
                  <select>
                    <option selected>Placement</option>
                    <option value="">Placement </option>
                    <option value="">Placement </option>
                    <option value="">Placement </option>
                  </select>
                </div>
                <div class="col-12">
                  <label for="text">Type of Abutment</label>
                  <input type="text" placeholder="Enter here">
                </div>
                <div class="col-12">
                  <label for="text">Dental Laboratory Name</label>
                  <input type="text" placeholder="Enter here">
                </div>
                <div class="col-12 mt-5 ">
                  <div class="doctor_portal_rejister">
                    <button class="btn-secondary" type="submit" id="submit">submit</button>
                  </div>
                </div>

              </div>
            </form>

          </div>
        </div>
      </div>
    </div>
  </main>
@endsection
@section('js-script')
<script src="{{ asset('public/theme/default/js/cart.js?v=1.1') }}"></script>
@endsection