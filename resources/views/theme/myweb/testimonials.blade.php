
@extends('theme.myweb.website')

@section('content')

<style>
.inner-banner {
    background:linear-gradient(to top, #0000003d, #000000), url({{asset('public/theme/myweb/images/testimnial_bg_1.jpg')}}) center center/cover no-repeat;
    height: 500px;
    display: flex;
    align-items: center;
    color: white;
    position: relative;
    z-index: 1;
}

.testimonial-section {
  background: #fff;
}
.testimonials{
  text-align:center; 
  margin:0 auto;
  padding-top: 150px;
}
.testimonial{
  width:100%;
  margin:0 auto;
  text-align:center;
  max-width: 1010px;
}
.testimonial .details span{
  display:inline-block;
  width:100%;
  margin:0 auto;
  text-align:center;
  color: var(--primary-color);		
  font-size: 20px;
  font-weight :600;	
  text-align: center;
  margin-bottom:10px;
}
.testimonial .details span:first-child{
  font-size: 24px;
}
.testimonial p{
  text-align:center;
  margin-bottom:45px;
}
.testimonial img{
  text-align: center;
    width: 140px;
    margin: 0 auto;
    margin-bottom: 10px;
    border-radius: 50%;
    border: 1px solid;
    height: 140px;
    object-fit: cover;

}
.slick-prev{
  left : 10%;
}
.slick-next{
  right : 10%;
}
.slick-prev, .slick-next {
  background: var(--primary-color);	
  top: 50%;	
}
.slick-prev:before {
  content : '';
    width: 72px;
    height: 72px;
    display :block;
    margin: 9px;
    background: url({{asset('public/theme/myweb/images/left-arrow.svg')}}) no-repeat;
}


.slick-next:before {
  content : '';
    width: 72px;
    height: 72px;
    display :block;
    margin: 9px;
    background: url({{asset('public/theme/myweb/images/right-arrow.svg')}}) no-repeat;

}
</style>
  <div class="search-bar">
    <div class="container">
      <div class="row">
        <div class="col-12">
        <div class="input-group">
          <input type="search" name="" id="" placeholder="Search">
        </div>
        </div>
      </div>
    </div>
  </div>
    <main>
        <section class="inner-banner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-12">
                        <div class="content">
                            <!--banner_heading-->
                            <h2>{{ get_trans_option('testimonial_banner_heading') }}</h2>
                            <img data-aos="slide-right" data-aos-duration="1000" data-aos-delay="100" class="img-fluid banner-img"
                            src="{{asset('public/theme/myweb/images/banner-img-1.png')}}" alt="">
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <section class="testimonial-section">
        <div class="testimonials">
          <div class="testimonial">
             <img src="{{asset('public/theme/myweb/images/Charles.png')}}">
             <div class="details">
                    <span>Charles Mastrovich, DDS<br>
                    General Dentist</span>
                    <span>Escondido, CA</span>
                    <span>Implant Mechanical Rescue</span>
               
               </div>
                  <p>The past several years of my 40+ year career, my practice has been focused on comprehensively resolving implant mechanical problems.  The first step in preparing for a safe and efficient implant recovery is to understand the clinical situation, which always starts with knowing the implant specifications. Unfortunately, obtaining this information is often difficult and problematic, and in some cases borders on the impossible. Patient moves, doctor retirements and transitions, destruction of records and the general passage of time, all tend to erase these details.  Additionally, as the implant market expands in both case numbers and the number of implant systems worldwide, this problem will only accelerate in the future. It would be extremely helpful, and a major time saver, if a patient could easily direct us into a secure id2 file containing the information we need. Problem solved.   </p>
                  
          </div>
          <div class="testimonial">
             <img src="{{asset('public/theme/myweb/images/Robert.png')}}">
             <div class="details">
                    <span>Robert A. del Castillo, D.M.D., PA<br>
                    Periodontist</span>               
                    <span>Miami Lakes, FL</span>               
               </div>
                  <p>It should be the standard of care for patients to have complete information of their implant information at their immediate disposal, and id2 dental implant patient portal is the answer. <br>

With the continuous increase in the number of implants on the market, it is nearly impossible to identify what you are dealing with when treating new patients who had implant work done in another state or internationally.
</p>
                  
          </div>
          <div class="testimonial">
             <img src="{{asset('public/theme/myweb/images/Nadim.png')}}">
             <div class="details">
                    <span>Nadim Z. Baba DMD, MSD, FACP <br>
Prosthodontist</span>
                    <span>Glendale, CA</span>
                    <span>Past President of the American College of Prosthodontists</span>
               
               </div>
                  <p>“FINALLY!! A brilliant app that is easy to use and very affordable renders service for both the dentists and their patients. No more guess work and unnecessary waste of time trying to figure out what type of implant and platform the patient has. The Patient can access his or her implant information from anywhere, anytime at no charge. Precious and long overdue app.”</p>
                  
          </div>
          <div class="testimonial">
          <img src="{{asset('public/theme/myweb/images/Arnold.png')}}">

             <div class="details">
             <span>Arnold Rosen, DDS </span>
                    <span>Chestnut Hill, MA</span>
                    <span>Maxillofacial Prosthodontist</span>
                 
               </div>
                  <p>“Any clinician placing or restoring dental implants should take a serious look at the new dental implant registry, id2. <br>
Every prosthesis has a useful life to components and materials and will need to be repaired, retooled, or remade.
The simple process of registering the surgical and restorative information can and will save clinicians and patients significant time and money related to future repairs, component replacements, and prosthetic remakes.
Nothing is more frustrating and costly to both clinicians and patients managing repairs without detailed information for each implant and abutment supporting a prosthesis.<br>
You order components at over $200 dollars, prep the patient, remove the prosthesis and realize you ordered the wrong implant parts.<br>
So you put everything back, order a new abutment, and reschedule the patient.<br>
You just spent hundreds of dollars with no return and your patient lost valuable time.<br>
Take a serious look at the new dental implant registry, id2 and save yourself and your patients, time and money.”</p>
                  
          </div>
          <div class="testimonial">
          <img src="{{asset('public/theme/myweb/images/dummy.png')}}">
           
             <div class="details">
             <span>Gary Krueger, DDS</span>
                    <span>Encinitas, CA</span>
                    <span>Maxillofacial Prosthodontist</span>
                 
               </div>
                  <p>"In recent years, I have treated many patients who have experienced implant complications that needed abutment and / or screw replacements.   One critical part of the treatment is knowing what implant system I am dealing with. This sometimes takes a lot of my time to figure out , which delays helping my patients in a timely fashion. <br><br>

Moving forward, I am glad to be working with id2, as I am registering my patients' implant information on the portal for them to have and share if and when another treatment is needed."</p>
                  
          </div>
        
        </div>
</section>

    </main>
@endsection
@section('js-script')

<script src="{{ asset('public/theme/default/js/cart.js?v=1.1') }}"></script>

@endsection