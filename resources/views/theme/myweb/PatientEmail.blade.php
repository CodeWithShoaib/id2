<!DOCTYPE html>
<html>
<head>
    <title>Welcome to id2</title>
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body style="font-family: Arial, sans-serif; background-color: #f5f5f5; padding: 20px;">
    <div style="background-color: #ffffff; border-radius: 5px; padding: 20px;">
        <div style="text-align: center;">
            <img src="{{asset('public/theme/myweb/images/123logo.png')}}" alt="id2 Logo" style="max-width: 200px; margin-bottom: 10px;">
        </div>
        <div style="text-align: center;">
            <img src="{{asset('public/theme/myweb/images/emailbanner.png')}}" alt="Banner Image" style="max-width: 100%; border-radius: 5px;">
        </div>
        <p style="font-size: 18px;"><strong>{{$name}},</strong></p>
        <p>Welcome to <b>id2</b>You clearly value the importance to the longevity and overall health of your dental implant.</p>

        <p>We created this dental implant patient portal so patients like you are empowered in accessing your precise dental implant information. Thus, no matter where you are in the world, if a complication or maintenance is required, you can provide the dentist the proper information to </p>  
        <ul>
            <li><b>Awareness</b>: A list of what implant brands and components were placed in your mouth along with x-rays.</li>
            <li><b>Efficiency</b>: Enable quick treatment by providing your dentist with precise information.</li>
            <li><b>Records:</b>Keep track of all your implant providers.</li>
            <li><b>Access:</b>24/7 online global access. 
</li>
        </ul>
         <p>To get started and access your profile, please click <a href="{{url('doctor_register_portal')}}">here</a> to set up your personal password.</p>
        <p>Welcome aboard, and happy registering,<strong>id2</strong></p>
        <p>Website: <a href="https://betarwreality.com/" style="color: #007bff; text-decoration: none; font-weight: bold;">www.id2dental.com</a></p>
        <p>Phone: 877-313-2345</p>
        <p>Email: <a href="mailto:info@id2dental.com" style="color: #007bff; text-decoration: none; font-weight: bold;">info@id2dental.com</a></p>
    </div>
          <div style="text-align: center; margin-top: 20px;">
         
            <a href="https://www.facebook.com/id2Dental" style="text-decoration: none; color: #333; margin: 0 10px;"><img width='40px' height='40px' src='{{asset("public/theme/myweb/images/facebook.png")}}' /></a>
            <a href="https://www.instagram.com/id2dental/" style="text-decoration: none; color: #333; margin: 0 10px;"><img width='40px' height='40px' src='{{asset("public/theme/myweb/images/integram.png")}}' /></a>
            <a href="https://www.youtube.com/your-youtube-link" style="text-decoration: none; color: #333; margin: 0 10px;"><img width='40px' height='40px' src='{{asset("public/theme/myweb/images/youtube.png")}}' /></a>
            <a href="https://www.linkedin.com/id2Dental?_l=en_US" style="text-decoration: none; color: #333; margin: 0 10px;"><img width='40px' height='40px' src='{{asset("public/theme/myweb/images/linkdink.png")}}' /></a>
            <a href="https://twitter.com/id2Dental" style="text-decoration: none; color: #333; margin: 0 10px;"><img width='40px' height='40px' src='{{asset("public/theme/myweb/images/twitter.png")}}' /></a>
        </div>

</body>
</html>
