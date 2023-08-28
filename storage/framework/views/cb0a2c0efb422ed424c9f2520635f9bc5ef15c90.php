<!DOCTYPE html>
<html>
<head>
<style>
  /* CSS styles go here */
  .email-container {
    max-width: 600px;
    margin: 0 auto;
    padding: 20px;
    background-color: #f7f7f7;
    font-family: Arial, sans-serif;
  }
  .header {
    text-align: center;
    margin-bottom: 20px;
  }
  .logo {
    max-width: 200px;
    display: block;
    margin: 0 auto;
  }
  .banner {
    max-width: 100%;
    height: auto;
    margin-bottom: 20px;
  }
  .button {
    display: inline-block;
    padding: 10px 20px;
    background-color: #007bff;
    color: white;
    text-decoration: none;
    margin-right: 10px;
  }
</style>
</head>
<body>
  <div class="email-container">
    <div class="header">
      <img src="<?php echo e(asset('public/theme/myweb/images/123logo.png')); ?>" alt="Your Logo" class="logo">
    </div>
    <img src="<?php echo e(asset('public/theme/myweb/images/emailbanner.png')); ?>" alt="Banner Image" class="banner">
    <p>Do you want to allow the doctor to edit your slots.</p>
    <a href="https://betarwreality.com/give/permission/<?php echo e($id); ?>" style='color:#fff;' class="button">Allow</a>
    <a href="https://betarwreality.com/reject/permission/<?php echo e($id); ?>" style='color:#fff;' class="button">Not Allow</a>
    <p>Thank you for your attention.</p>
  </div>
</body>
</html>
<?php /**PATH /home/betarwreality/public_html/resources/views/theme/myweb/AllowEditing.blade.php ENDPATH**/ ?>