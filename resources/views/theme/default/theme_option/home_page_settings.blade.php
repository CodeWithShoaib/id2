@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-sm-3">
			<ul class="nav flex-column nav-tabs settings-tab" role="tablist">
				<li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#hero"><i class="ti-layout-slider-alt"></i> {{ _lang('Home Page') }}</a></li>
				<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#about"><i class="ti-layout-cta-left"></i> {{ _lang('About Page') }}</a></li>
				<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#potential_registeration"><i class="ti-layout-cta-left"></i> {{ _lang('Potential Registeration Page') }}</a></li>
				<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#doctor_register"><i class="ti-layout-cta-left"></i> {{ _lang('Doctor Registeration Page') }}</a></li>
				<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#additional_implement"><i class="ti-layout-cta-left"></i> {{ _lang('Additional Implement Page') }}</a></li>
				<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#testimonial_page"><i class="ti-layout-cta-left"></i> {{ _lang('Testimonial Page') }}</a></li>
				<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#faq_page"><i class="ti-layout-cta-left"></i> {{ _lang('Faq Page') }}</a></li>
				<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#contact_page"><i class="ti-layout-cta-left"></i> {{ _lang('Contact Page') }}</a></li>
			
			</ul>
		</div>
		  
		  
		<div class="col-sm-9">
			<div class="tab-content">
				 
				<div id="hero" class="tab-pane active">
					<div class="card">
						<div class="card-header">
							<span class="panel-title">{{ _lang('Home Page') }}</span>
						</div>

					  	<div class="card-body">

							<form method="post" class="settings-submit params-panel" autocomplete="off" action="{{ route('theme_option.update',['home_page_settings','store']) }}" enctype="multipart/form-data">
								{{ csrf_field() }}
								<div class="row">

									<div class="col-md-12">
									  	<div class="form-group">
											<label class="control-label">{{ _lang('Banner First Heading') }}</label>
											<input type="text" class="form-control" name="banner_first_heading" value="{{ get_trans_option('banner_first_heading') }}">
									  	</div>
									</div>
									<div class="col-md-12">
									  	<div class="form-group">
											<label class="control-label">{{ _lang('Banner Second Heading') }}</label>
											<input type="text" class="form-control" name="banner_second_heading" value="{{ get_trans_option('banner_second_heading') }}">
									  	</div>
									</div>
									<div class="col-md-12">
									  	<div class="form-group">
											<label class="control-label">{{ _lang('Banner Content') }}</label>
											<textarea class="form-control summernote" name="banner_content">{{ get_trans_option('banner_content') }}</textarea>
									  	</div>
									</div>
									<div class="col-md-12">
									  	<div class="form-group">
											<label class="control-label">{{ _lang('Side Content') }}</label>
											<textarea class="form-control summernote" name="side_content">{{ get_trans_option('side_content') }}</textarea>
									  	</div>
									</div>
									<div class="col-md-12">
									  	<div class="form-group">
											<label class="control-label">{{ _lang('Welcome Content') }}</label>
											<textarea class="form-control summernote" name="welcome_heading">{{ get_trans_option('welcome_heading') }}</textarea>
									  	</div>
									</div>
									<div class="col-md-12">
									  	<div class="form-group">
											<label class="control-label">{{ _lang('Dental Heading') }}</label>
											<textarea class="form-control summernote" name="dental_heading">{{ get_trans_option('dental_heading') }}</textarea>
									  	</div>
									</div>
									<div class="col-md-12">
									  	<div class="form-group">
											<label class="control-label">{{ _lang('Year Of Experience Content') }}</label>
											<textarea class="form-control summernote" name="year_of_experience">{{ get_trans_option('year_of_experience') }}</textarea>
									  	</div>
									</div>
									<div class="col-md-12">
									  	<div class="form-group">
											<label class="control-label">{{ _lang('Bottom Banner Right content') }}</label>
											<textarea class="form-control summernote" name="bottom_banner_right_content">{{ get_trans_option('bottom_banner_right_content') }}</textarea>
									  	</div>
									</div>
									<div class="col-md-12">
									  	<div class="form-group">
											<label class="control-label">{{ _lang('Id2 Dental Industry Content') }}</label>
											<textarea class="form-control summernote" name="id2_dental_industry_content">{{ get_trans_option('id2_dental_industry_content') }}</textarea>
									  	</div>
									</div>
									<div class="col-md-12">
									  	<div class="form-group">
											<label class="control-label">{{ _lang('Testimonial  Content') }}</label>
											<textarea class="form-control summernote" name="testimonial_content">{{ get_trans_option('testimonial_content') }}</textarea>
									  	</div>
									</div>
									<div class="col-md-12">
									  	<div class="form-group">
											<label class="control-label">{{ _lang('Get in touch Heading') }}</label>
											<textarea class="form-control summernote" name="get_in_touch_heading">{{ get_trans_option('get_in_touch_heading') }}</textarea>
									  	</div>
									</div>
									<div class="col-md-12">
									  	<div class="form-group">
											<label class="control-label">{{ _lang('Contact Heading') }}</label>
											<textarea class="form-control summernote" name="contact_heading">{{ get_trans_option('contact_heading') }}</textarea>
									  	</div>
									</div>
									<div class="col-md-12">
									  	<div class="form-group">
											<label class="control-label">{{ _lang('Number') }}</label>
											<input type="text" class="form-control" name="counter_number" value="{{ get_trans_option('counter_number') }}">
									  	</div>
									</div>

				

									<div class="col-md-12">
									  	<div class="form-group">
											<label class="control-label">{{ _lang('Banner Background Image') }} (600 X 370)</label>
											<input type="file" class="form-control dropify" name="banner_home_img" data-allowed-file-extensions="png jpg jpeg" data-default-file="{{ get_option('banner_home_img') != '' ? asset('public/uploads/media/'.get_option('banner_home_img')) : '' }}">
									  	</div>
									</div>
									<!--<div class="col-md-12">-->
									<!--  	<div class="form-group">-->
									<!--		<label class="control-label">{{ _lang('Banner Background Image') }} (600 X 370)</label>-->
									<!--		<input type="file" class="form-control dropify" name="banner_home_img" data-allowed-file-extensions="png jpg jpeg" data-default-file="{{ get_option('banner_home_img') != '' ? asset('public/uploads/media/'.get_option('banner_home_img')) : '' }}">-->
									<!--  	</div>-->
									<!--</div>-->
									<div class="col-md-12">
									  	<div class="form-group">
											<label class="control-label">{{ _lang('Banner  Image') }} (600 X 370)</label>
											<input type="file" class="form-control dropify" name="banner_img" data-allowed-file-extensions="png jpg jpeg" data-default-file="{{ get_option('banner_img') != '' ? asset('public/uploads/media/'.get_option('banner_img')) : '' }}">
									  	</div>
									</div>
									<div class="col-md-12">
									  	<div class="form-group">
											<label class="control-label">{{ _lang('About  Image') }} (600 X 370)</label>
											<input type="file" class="form-control dropify" name="about_img" data-allowed-file-extensions="png jpg jpeg" data-default-file="{{ get_option('about_img') != '' ? asset('public/uploads/media/'.get_option('about_img')) : '' }}">
									  	</div>
									</div>
									<div class="col-md-12">
									  	<div class="form-group">
											<label class="control-label">{{ _lang('About  Background Image') }} (600 X 370)</label>
											<input type="file" class="form-control dropify" name="about_us_back_img" data-allowed-file-extensions="png jpg jpeg" data-default-file="{{ get_option('about_us_back_img') != '' ? asset('public/uploads/media/'.get_option('about_us_back_img')) : '' }}">
									  	</div>
									</div>
									<div class="col-md-12">
									  	<div class="form-group">
											<label class="control-label">{{ _lang('Background Services  Image') }} (600 X 370)</label>
											<input type="file" class="form-control dropify" name="back_services_image" data-allowed-file-extensions="png jpg jpeg" data-default-file="{{ get_option('back_services_image') != '' ? asset('public/uploads/media/'.get_option('back_services_image')) : '' }}">
									  	</div>
									</div>
									<div class="col-md-12">
									  	<div class="form-group">
											<label class="control-label">{{ _lang('Brand  Image') }} (600 X 370)</label>
											<input type="file" class="form-control dropify" name="brand_image" data-allowed-file-extensions="png jpg jpeg" data-default-file="{{ get_option('brand_image') != '' ? asset('public/uploads/media/'.get_option('brand_image')) : '' }}">
									  	</div>
									</div>
									<div class="col-md-12">
									  	<div class="form-group">
											<label class="control-label">{{ _lang('Background Sergury  Image') }} (600 X 370)</label>
											<input type="file" class="form-control dropify" name="back_sergury" data-allowed-file-extensions="png jpg jpeg" data-default-file="{{ get_option('back_sergury') != '' ? asset('public/uploads/media/'.get_option('back_sergury')) : '' }}">
									  	</div>
									</div>
								
									<div class="col-md-12">
									  	<div class="form-group">
											<label class="control-label">{{ _lang('Background Testimonial  Image') }} (600 X 370)</label>
											<input type="file" class="form-control dropify" name="back_testimonial" data-allowed-file-extensions="png jpg jpeg" data-default-file="{{ get_option('back_testimonial') != '' ? asset('public/uploads/media/'.get_option('back_testimonial')) : '' }}">
									  	</div>
									</div>
									<div class="col-md-12">
									  	<div class="form-group">
											<label class="control-label">{{ _lang('Background Contact  Image') }} (600 X 370)</label>
											<input type="file" class="form-control dropify" name="contact_back_img" data-allowed-file-extensions="png jpg jpeg" data-default-file="{{ get_option('contact_back_img') != '' ? asset('public/uploads/media/'.get_option('contact_back_img')) : '' }}">
									  	</div>
									</div>
												
									<div class="col-md-12">
									  	<div class="form-group">
											<button type="submit" class="btn btn-primary">{{ _lang('Save Changes') }}</button>
									  	</div>
									</div>
								</div>
						    </form>
					  	</div>
					</div>
				</div>
				<div id="about" class="tab-pane fade">
					<div class="card">
						<div class="card-header">
							<span class="panel-title">{{ _lang('About Page') }}</span>
						</div>

					  	<div class="card-body">

							<form method="post" class="settings-submit params-panel" autocomplete="off" action="{{ route('theme_option.update',['home_page_settings','store']) }}" enctype="multipart/form-data">
								{{ csrf_field() }}
								<div class="row">

									<div class="col-md-12">
									  	<div class="form-group">
											<label class="control-label">{{ _lang('Banner  Heading') }}</label>
											<input type="text" class="form-control" name="banner_heading" value="{{ get_trans_option('banner_heading') }}">
									  	</div>
									</div>
									<div class="col-md-12">
									  	<div class="form-group">
											<label class="control-label">{{ _lang('Bottom Banner Heading') }}</label>
											<textarea class="form-control summernote" name="bottom_banner_heading">{{ get_trans_option('bottom_banner_heading') }}</textarea>
									  	</div>
									</div>
									<div class="col-md-12">
									  	<div class="form-group">
											<label class="control-label">{{ _lang('Bottom Banner Right Content') }}</label>
											<textarea class="form-control summernote" name="bottom_banner_right_content">{{ get_trans_option('bottom_banner_right_content') }}</textarea>
									  	</div>
									</div>
									<div class="col-md-12">
									  	<div class="form-group">
											<label class="control-label">{{ _lang('Bottom Banner Left Content') }}</label>
											<textarea class="form-control summernote" name="bottom_banner_left_content">{{ get_trans_option('bottom_banner_left_content') }}</textarea>
									  	</div>
									</div>
									<div class="col-md-12">
									  	<div class="form-group">
											<label class="control-label">{{ _lang('Aboutus Last Content') }}</label>
											<textarea class="form-control summernote" name="aboutus_last_content">{{ get_trans_option('aboutus_last_content') }}</textarea>
									  	</div>
									</div>
										<div class="col-md-12">
									  	<div class="form-group">
											<label class="control-label">{{ _lang('Counter  Number') }}</label>
											<input type="text" class="form-control" name="counter_number_about" value="{{ get_trans_option('counter_number_about') }}">
									  	</div>
									</div>
											<div class="col-md-12">
									  	<div class="form-group">
											<label class="control-label">{{ _lang('Banner Background Image') }} (600 X 370)</label>
											<input type="file" class="form-control dropify" name="about_banner_background_img" data-allowed-file-extensions="png jpg jpeg" data-default-file="{{ get_option('about_banner_background_img') != '' ? asset('public/uploads/media/'.get_option('about_banner_background_img')) : '' }}">
									  	</div>
									</div>

									<div class="col-md-12">
									  	<div class="form-group">
											<label class="control-label">{{ _lang('Banner  Image') }} (600 X 370)</label>
											<input type="file" class="form-control dropify" name="about_banner_img" data-allowed-file-extensions="png jpg jpeg" data-default-file="{{ get_option('about_banner_img') != '' ? asset('public/uploads/media/'.get_option('about_banner_img')) : '' }}">
									  	</div>
									</div>
									<div class="col-md-12">
									  	<div class="form-group">
											<label class="control-label">{{ _lang('Bottom Background Image') }} (600 X 370)</label>
											<input type="file" class="form-control dropify" name="bottom_background_img" data-allowed-file-extensions="png jpg jpeg" data-default-file="{{ get_option('bottom_background_img') != '' ? asset('public/uploads/media/'.get_option('bottom_background_img')) : '' }}">
									  	</div>
									</div>
									<div class="col-md-12">
									  	<div class="form-group">
											<button type="submit" class="btn btn-primary">{{ _lang('Save Changes') }}</button>
									  	</div>
									</div>
								</div>
						    </form>
					  	</div>
					</div>
				</div>


				
				<div id="potential_registeration" class="tab-pane fade">
					<div class="card">
						<div class="card-header">
							<span class="panel-title">{{ _lang('Potential Registeration Page') }}</span>
						</div>

					    <div class="card-body">
							<form method="post" class="settings-submit params-panel" autocomplete="off" action="{{ route('theme_option.update',['home_page_settings','store']) }}" enctype="multipart/form-data">
								{{ csrf_field() }}
								<div class="row">

									<div class="col-md-12">
									  	<div class="form-group">
											<label class="control-label">{{ _lang('Banner  Heading') }}</label>
											<input type="text" class="form-control" name="potential_register_banner_heading" value="{{ get_trans_option('potential_register_banner_heading') }}">
									  	</div>
									</div>
				
							
									<div class="col-md-12">
									  	<div class="form-group">
											<label class="control-label">{{ _lang('Header Image') }} (600 X 370)</label>
											<input type="file" class="form-control dropify" name="patience_register_header_img" data-allowed-file-extensions="png jpg jpeg" data-default-file="{{ get_option('patience_register_header_img') != '' ? asset('public/uploads/media/'.get_option('patience_register_header_img')) : '' }}">
									  	</div>
									</div>

									<div class="col-md-12">
									  	<div class="form-group">
											<label class="control-label">{{ _lang('Banner Background  Image') }} (600 X 370)</label>
											<input type="file" class="form-control dropify" name="patience_register_banner_img" data-allowed-file-extensions="png jpg jpeg" data-default-file="{{ get_option('patience_register_banner_img') != '' ? asset('public/uploads/media/'.get_option('patience_register_banner_img')) : '' }}">
									  	</div>
									</div>
										<div class="col-md-12">
									  	<div class="form-group">
											<label class="control-label">{{ _lang('Registeration Heading') }}</label>
											<textarea class='form-control summernote' name='patient_register_registeration_heading'>{!! get_trans_option('patient_register_registeration_heading') !!}</textarea>
									  	</div>
									</div>
								
									<div class="col-md-12">
									  	<div class="form-group">
											<button type="submit" class="btn btn-primary">{{ _lang('Save Changes') }}</button>
									  	</div>
									</div>
								</div>
						    </form>
					    </div>
					</div>
				</div>
				<div id="doctor_register" class="tab-pane fade">
					<div class="card">
						<div class="card-header">
							<span class="panel-title">{{ _lang('Doctor Registeration Page') }}</span>
						</div>

					    <div class="card-body">
							<form method="post" class="settings-submit params-panel" autocomplete="off" action="{{ route('theme_option.update',['home_page_settings','store']) }}" enctype="multipart/form-data">
								{{ csrf_field() }}
								<div class="row">

									<div class="col-md-12">
									  	<div class="form-group">
											<label class="control-label">{{ _lang('Banner  Heading') }}</label>
											<input type="text" class="form-control" name="doctor_register_banner_heading" value="{{ get_trans_option('doctor_register_banner_heading') }}">
									  	</div>
									</div>
				
							
									<div class="col-md-12">
									  	<div class="form-group">
											<label class="control-label">{{ _lang('Header Image') }} (600 X 370)</label>
											<input type="file" class="form-control dropify" name="doctor_register_header_img" data-allowed-file-extensions="png jpg jpeg" data-default-file="{{ get_option('doctor_register_header_img') != '' ? asset('public/uploads/media/'.get_option('doctor_register_header_img')) : '' }}">
									  	</div>
									</div>

									<div class="col-md-12">
									  	<div class="form-group">
											<label class="control-label">{{ _lang('Banner Background  Image') }} (600 X 370)</label>
											<input type="file" class="form-control dropify" name="doctor_register_banner_img" data-allowed-file-extensions="png jpg jpeg" data-default-file="{{ get_option('doctor_register_banner_img') != '' ? asset('public/uploads/media/'.get_option('doctor_register_banner_img')) : '' }}">
									  	</div>
									</div>
										<div class="col-md-12">
									  	<div class="form-group">
											<label class="control-label">{{ _lang('Registeration Heading') }}</label>
											<textarea class='form-control summernote' name='doctor_register_registeration_heading'>{!! get_trans_option('doctor_register_registeration_heading') !!}</textarea>
									  	</div>
									</div>
								
									<div class="col-md-12">
									  	<div class="form-group">
											<button type="submit" class="btn btn-primary">{{ _lang('Save Changes') }}</button>
									  	</div>
									</div>
								</div>
						    </form>
					    </div>
					</div>
				</div>
				<div id="additional_implement" class="tab-pane fade">
					<div class="card">
						<div class="card-header">
							<span class="panel-title">{{ _lang('Additional Implement Page') }}</span>
						</div>

					    <div class="card-body">
							<form method="post" class="settings-submit params-panel" autocomplete="off" action="{{ route('theme_option.update',['home_page_settings','store']) }}" enctype="multipart/form-data">
								{{ csrf_field() }}
								<div class="row">

									<div class="col-md-12">
									  	<div class="form-group">
											<label class="control-label">{{ _lang('Banner  Heading') }}</label>
											<input type="text" class="form-control" name="additional_implement_banner_heading" value="{{ get_trans_option('additional_implement_banner_heading') }}">
									  	</div>
									</div>
									<div class="col-md-12">
									  	<div class="form-group">
											<label class="control-label">{{ _lang('Banner Background  Image') }} (600 X 370)</label>
											<input type="file" class="form-control dropify" name="additional_implement_banner_img" data-allowed-file-extensions="png jpg jpeg" data-default-file="{{ get_option('additional_implement_banner_img') != '' ? asset('public/uploads/media/'.get_option('additional_implement_banner_img')) : '' }}">
									  	</div>
									</div>
										<div class="col-md-12">
									  	<div class="form-group">
											<label class="control-label">{{ _lang('Header Image') }} (600 X 370)</label>
											<input type="file" class="form-control dropify" name="additional_implement_header_img" data-allowed-file-extensions="png jpg jpeg" data-default-file="{{ get_option('additional_implement_header_img') != '' ? asset('public/uploads/media/'.get_option('additional_implement_header_img')) : '' }}">
									  	</div>
									</div>
										<div class="col-md-12">
									  	<div class="form-group">
											<label class="control-label">{{ _lang('Registeration Heading') }}</label>
											<textarea class='form-control summernote' name='additional_implement_heading'>{!! get_trans_option('additional_implement_heading') !!}</textarea>
									  	</div>
									</div>
								
									<div class="col-md-12">
									  	<div class="form-group">
											<button type="submit" class="btn btn-primary">{{ _lang('Save Changes') }}</button>
									  	</div>
									</div>
								</div>
						    </form>
					    </div>
					</div>
				</div>
				<div id="testimonial_page" class="tab-pane fade">
					<div class="card">
						<div class="card-header">
							<span class="panel-title">{{ _lang('Testimonial Page') }}</span>
						</div>

					    <div class="card-body">
							<form method="post" class="settings-submit params-panel" autocomplete="off" action="{{ route('theme_option.update',['home_page_settings','store']) }}" enctype="multipart/form-data">
								{{ csrf_field() }}
								<div class="row">

									<div class="col-md-12">
									  	<div class="form-group">
											<label class="control-label">{{ _lang('Banner  Heading') }}</label>
											<input type="text" class="form-control" name="testimonial_banner_heading" value="{{ get_trans_option('testimonial_banner_heading') }}">
									  	</div>
									</div>
									<div class="col-md-12">
									  	<div class="form-group">
											<label class="control-label">{{ _lang('Banner Background  Image') }} (600 X 370)</label>
											<input type="file" class="form-control dropify" name="testimonial_banner_img" data-allowed-file-extensions="png jpg jpeg" data-default-file="{{ get_option('testimonial_banner_img') != '' ? asset('public/uploads/media/'.get_option('testimonial_banner_img')) : '' }}">
									  	</div>
									</div>
									<div class="col-md-12">
									  	<div class="form-group">
											<button type="submit" class="btn btn-primary">{{ _lang('Save Changes') }}</button>
									  	</div>
									</div>
								</div>
						    </form>
					    </div>
					</div>
				</div>
				<div id="faq_page" class="tab-pane fade">
					<div class="card">
						<div class="card-header">
							<span class="panel-title">{{ _lang('Faq Page') }}</span>
						</div>

					    <div class="card-body">
							<form method="post" class="settings-submit params-panel" autocomplete="off" action="{{ route('theme_option.update',['home_page_settings','store']) }}" enctype="multipart/form-data">
								{{ csrf_field() }}
								<div class="row">

									<div class="col-md-12">
									  	<div class="form-group">
											<label class="control-label">{{ _lang('Banner  Heading') }}</label>
											<input type="text" class="form-control" name="faq_banner_heading" value="{{ get_trans_option('faq_banner_heading') }}">
									  	</div>
									</div>
								
									<div class="col-md-12">
									  	<div class="form-group">
											<label class="control-label">{{ _lang('Banner Background  Image') }} (600 X 370)</label>
											<input type="file" class="form-control dropify" name="faq_background_img" data-allowed-file-extensions="png jpg jpeg" data-default-file="{{ get_option('faq_background_img') != '' ? asset('public/uploads/media/'.get_option('faq_background_img')) : '' }}">
									  	</div>
									</div>
									<div class="col-md-12">
									  	<div class="form-group">
											<label class="control-label">{{ _lang('Banner Image') }} (600 X 370)</label>
											<input type="file" class="form-control dropify" name="faq_banner_img" data-allowed-file-extensions="png jpg jpeg" data-default-file="{{ get_option('faq_banner_img') != '' ? asset('public/uploads/media/'.get_option('faq_banner_img')) : '' }}">
									  	</div>
									</div>
									<div class="col-md-12">
									  	<div class="form-group">
											<button type="submit" class="btn btn-primary">{{ _lang('Save Changes') }}</button>
									  	</div>
									</div>
								</div>
						    </form>
					    </div>
					</div>
				</div>
				<div id="contact_page" class="tab-pane fade">
					<div class="card">
						<div class="card-header">
							<span class="panel-title">{{ _lang('Contact Page') }}</span>
						</div>
					    <div class="card-body">
							<form method="post" class="settings-submit params-panel" autocomplete="off" action="{{ route('theme_option.update',['home_page_settings','store']) }}" enctype="multipart/form-data">
								{{ csrf_field() }}
								<div class="row">

									<div class="col-md-12">
									  	<div class="form-group">
											<label class="control-label">{{ _lang('Banner  Heading') }}</label>
											<input type="text" class="form-control" name="contact_us_banner_heading" value="{{ get_trans_option('contact_us_banner_heading') }}">
									  	</div>
									</div>
										<div class="col-md-12">
									  	<div class="form-group">
											<label class="control-label">{{ _lang('After Banner  Heading') }}</label>
											<input type="text" class="form-control" name="after_contact_heading" value="{{ get_trans_option('after_contact_heading') }}">
									  	</div>
									</div>
									<div class="col-md-12">
									  	<div class="form-group">
											<label class="control-label">{{ _lang('Banner Background  Image') }} (600 X 370)</label>
											<input type="file" class="form-control dropify" name="contact_us_background_img" data-allowed-file-extensions="png jpg jpeg" data-default-file="{{ get_option('contact_us_background_img') != '' ? asset('public/uploads/media/'.get_option('contact_us_background_img')) : '' }}">
									  	</div>
									</div>
									<div class="col-md-12">
									  	<div class="form-group">
											<label class="control-label">{{ _lang('Banner Image') }} (600 X 370)</label>
											<input type="file" class="form-control dropify" name="contact_banner_img" data-allowed-file-extensions="png jpg jpeg" data-default-file="{{ get_option('contact_banner_img') != '' ? asset('public/uploads/media/'.get_option('contact_banner_img')) : '' }}">
									  	</div>
									</div>
									<div class="col-md-12">
									  	<div class="form-group">
											<button type="submit" class="btn btn-primary">{{ _lang('Save Changes') }}</button>
									  	</div>
									</div>
								</div>
						    </form>
					    </div>
					</div>
				</div>

				
			</div>	<!--End tab Content-->  
		</div>
	</div>
</div>
@endsection
