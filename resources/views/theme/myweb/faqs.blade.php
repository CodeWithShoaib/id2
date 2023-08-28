@extends('theme.myweb.website')
@section('content')
<style>

.inner-banner {
    background: url({{asset("public/theme/myweb/images/1690317477-2023-07-25_16-35-02.jpg")}}) center center/cover no-repeat;
    height: 430px !important;
    display: flex;
    align-items: center;
    color: white;
    position: relative;
    z-index: 1;
}
</style>
  <main>
      
    <section class="inner-banner">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-12">
            <div class="content">
            <!--faq_banner_heading-->
              <h2 style='color:black;'>FAQs</h2>
              <!--faq_banner_image-->
              <img data-aos="slide-right" data-aos-duration="1000" data-aos-delay="100" class="img-fluid banner-img" src="{{ get_option('faq_banner_img') != '' ? asset('public/uploads/media/'.get_option('faq_banner_img')) : '' }}" alt="">
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Accordian -->
    <section class="sec-faq doctor_register_portal">
      <div class="container">
        <div class="row">
          <div class="col-lg-12  text-center" data-aos="zoom-out" data-aos-duration="1000"
            data-aos-delay="200">
            <div class="">
              <h2>Frequently Asked Questions:</h2>
          
            </div>
          </div>
        </div>
          <div class="row">
          <div class="col-12">
                <div class="accordion">
              <h3 class="accordion-item-header quest-title ">
                <span class="arrow"></span>
                Why Dental Professionals & Patients should register their implant information on <span class="id2-text">id2</span>:
              </h3>
              <div class="accordien-item-body quest-content">
                <p>1.Efficient and Accurate Care: Registering implant information allows dental professionals to access important details about a patient's implant, and enables dental professionals to deliver a more efficient and accurate care, reducing the risk of errors, complications, and unnecessary delays.</p>
                <br>
                <p>2.Emergency Situations: In emergency situations, quick access to a patient’s dental information is critical. Dental professionals can promptly retrieve exact implant details, enabling them to make informed decisions about treatment options and provide appropriate care.</p>
                <br>
                <p>3.Continuity of Care: When patients change dental professionals, the information can be easily passed on to the next provider. </p>
                <br>
                <p>4.Patient Empowerment: Patients can actively participate in their own dental treatment. They can review their implant details, and allow for effective communication with dental professionals about their goals. This involvement leads to better outcomes, increases patient satisfaction, and provides a sense of control over their own treatment journey.</p>
                <br>
                <p>Added Benefits you need to ensure you and your patient are empowered for a lifetime:</p>
                <br>
            	<p><i class="fa-solid fa-check"></i> Easy to use patient portal</p>
            	<br>
                <p><i class="fa-solid fa-check"></i> 500+ manufacturers, 3850+ models, 8800+  diameters and growing</p>
            	<br>
            	<p><i class="fa-solid fa-check"></i> 30+ countries of origin </p>
            	<br>
            	<p><i class="fa-solid fa-check"></i> Interactive tooth/implant chart</p>
            	<br>
            	<p><i class="fa-solid fa-check"></i> HIPAA compliant / secure server</p>
            	<br>
            	<p><i class="fa-solid fa-check"></i> Detailed patient profile</p>
            	<br>
            	<p><i class="fa-solid fa-check"></i> Printable patient report w/ implant data</p>
            	<br>
            	<p><i class="fa-solid fa-check"></i> Desktop and Mobile friendly 24/7</p>
              </div>
            </div>
            <div class="accordion">
              <h3 class="accordion-item-header quest-title">
                <span class="arrow"></span>
                Why can’t my dental professional identify the brand of implant.
              </h3>
              <div class="accordien-item-body quest-content">
                <p>Implants have been around for more than 45 years with multiple obsolete systems, current systems, and new systems added to the global market every year.  Younger dental professionals have not been exposed to systems used over a decade ago or more. Even seasoned dental professionals struggle to identify implants in today’s crowded implant market. Relying on a 3rd party to “guess” on what manufacturer and brand is an inadequate approach to treating complications accurately and in a timely fashion. </p>
              </div>
            </div>
            <div class="accordion">
              <h3 class="accordion-item-header quest-title">
                <span class="arrow"></span>
                Is my information secure?
              </h3>
              <div class="accordien-item-body quest-content">
                <p>Yes, <span class="id2-text">id2</span> complies with HIPAA measures to secure everyone’s information. The personal data is encrypted and password protected on servers healthcare and financial institutions rely upon. <span class="id2-text">id2</span> stays abreast of the latest security measures to ensure full protection and will adopt new technologies to improve the quality and efficiency of patient care.</p>
              </div>
            </div>
            <div class="accordion">
              <h3 class="accordion-item-header quest-title ">
                <span class="arrow"></span>
                Who has access to my information?
              </h3>
              <div class="accordien-item-body quest-content">
               
                <p><span class="id2-text">id2</span> has no access to any registered personal identifiable data.  </p>
              </div>
            </div>
            <div class="accordion">
              <h3 class="accordion-item-header quest-title ">
                <span class="arrow"></span>
                Why would I choose <span class="id2-text">id2</span> as my preferred registry?
              </h3>
              <div class="accordien-item-body quest-content">
                <p><span class="id2-text">id2</span> prides itself on being an open partner with any and all implant companies. We are patient centric and implant agnostic and we strive to empower patients with the information needed to help a dentist treat implant complications ANYWHERE in the world.</p>
              </div>
            </div>
            <div class="accordion">
              <h3 class="accordion-item-header quest-title ">
                <span class="arrow"></span>
                What does registering provide me?
              </h3>
              <div class="accordien-item-body quest-content">
                <p>A lifetime of access to your detailed dental implant information, input additional implants as needed, and quickly be treated as complications arise.</p>
              </div>
            </div>

          </div>
          <div class="col-12">
            <div class="accordion">
              <h3 class="accordion-item-header quest-title">
                <span class="arrow"></span>
                What if I need to add another implant?
              </h3>
              <div class="accordien-item-body quest-content">
                <p>Easy. Update the patient file within the portal by clicking on add another implant followed by selecting the
tooth site on the chart.</p>
              </div>
            </div>
            <div class="accordion">
              <h3 class="accordion-item-header quest-title ">
                <span class="arrow"></span>
                	I’m a patient and want to register my implant(s). How should I get my implant information if I do not presently have it?
                3 Easy Steps
              </h3>
              <div class="accordien-item-body quest-content">
                <p>Contact the dental professional(s) who treated your implant and get the following information: <br>A.) Ask them to provide the tooth number, manufacturer, brand name and the diameter of the implants placed. <br> B.) Request the office email you any x-rays of the implant(s). <br> C.) Upon receiving the data, log-in and start registering your information for a lifetime of access.</p>
              </div>
            </div>
            <div class="accordion">
              <h3 class="accordion-item-header quest-title ">
                <span class="arrow"></span>
                How much is the registration fee?
              </h3>
              <div class="accordien-item-body quest-content">
                <p>An Individual one-time investment of $45. Different plans are available for dental professionals who want to purchase bulk registrations.</p>
              </div>
            </div>
            <div class="accordion">
              <h3 class="accordion-item-header quest-title ">
                <span class="arrow"></span>
                For additional questions, please contact us at:
              </h3>
              <div class="accordien-item-body quest-content">
                <p>info@<span class="id2-text">id2</span>dental.com or 877-313-2345 and we will be happy to answer your questions.</p>
              </div>
            </div>
          
         

          </div>
        </div>
      </div>
    </section>
  </main>
@endsection
@section('js-script')
 <script>
    AOS.init();

    const quesSelElement = document.querySelector("#question-select")
    const result = document.querySelector("#result")

    quesSelElement.addEventListener('change', (event) => {
      const answers = ['Very rarely does an individual’s body reject an implant. The jawbone usually readily accepts the dental implant. The very few rejections are due to rare allergies to the titanium alloy that make up the implant. Another reason why an implant could fail is if you don’t take proper care of it after your surgery. Without excellent oral hygiene, natural teeth fail and fall out eventually. Dental implants are no different. When you take good care of your teeth and your implants, it will help prevent gum decay and structure failure later on.',
        'Fortunately, humans get two sets of teeth. When you lose a single tooth or multiple teeth because of gum disease or dental decay, implants can now replace them and serve as your third set of fixed teeth. Implants have many upsides',
        'A few factors determine the dental implant procedure timeline.']
      if (event.target.value === 'questionOption1') {
        
        // result.innerHTML = `Answer : ${answers[0]}<span></span>`
        result.innerHTML = `Answer : ${answers[0]}`
      }
      else if (event.target.value === 'questionOption2') {
        result.innerHTML = `Answer : ${answers[1]}`
      }
      else if (event.target.value === 'questionOption3') {
        result.innerHTML = `Answer : ${answers[2]}`
      }
      else {
        result.textContent = ''
      }

    })
  </script>
<script src="{{ asset('public/theme/default/js/cart.js?v=1.1') }}"></script>
@endsection