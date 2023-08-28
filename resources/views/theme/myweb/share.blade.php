<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Company Name</title>
</head>
<style>
.custom{
    background-color: #36b445;
    color: white;
    padding: 15px 97px;
    outline: none;
    display: block;
    margin: auto;
    border-radius: 31px;
    font-weight: bold;
    margin-top: 25px;
    margin-bottom: 25px;
    border: none;
    text-transform: uppercase;
    display: flex;
    justify-content: center;
    width: 13%;
    white-space: nowrap;
    text-decoration: none;
}
</style>



<body bgcolor="#0f3462" style="margin-top:20px;margin-bottom:20px">
  <!-- Main table -->
  <table border="0" align="center" cellspacing="0" cellpadding="0" bgcolor="white" width="650" style='display:flex; justify-content:center; margin-top":4rem;'>
    <tr>
      <td>
        <!-- Child table -->
        <table border="0" cellspacing="0" cellpadding="0" style="color:#0f3462; font-family: sans-serif;">
          <tr>
            <td>
              <h2 style="text-align:center; margin: 0px; padding-bottom: 25px; margin-top: 25px;">
     
            </td>
          </tr>
          <tr>
            <td>
              <img src="{{asset('public/theme/myweb/images/logo.png')}}" height="50px" style="display:block; margin:auto;padding-bottom: 25px; ">
            </td>
          </tr>
          <tr>
            <td style="text-align: center;">
              <h1 style="margin: 0px;padding-bottom: 25px; text-transform: uppercase;">click here to check tooth report</h1>
            </td>
          </tr>
          <tr>
            <td>
              <a type="button" href='https://betarwreality.com/sharePatient/{{$id}}' style="background-color:#36b445; color:white; padding:15px 97px; outline: none; display: block; margin: auto; border-radius: 31px;
                                font-weight: bold; margin-top: 25px; margin-bottom: 25px; border: none; text-transform:uppercase;display: flex;justify-content: center;width: 13%;white-space: nowrap;text-decoration: none;" class='custom'>Click Here</a>
            </td>
          </tr>
          <tr>
            <td style="text-align:center;">
              <!--<h2 style="padding-top: 25px; line-height: 1; margin:0px;">Need Help?</h2>-->
            </td>
          </tr>
        </table>
        <!-- /Child table -->
      </td>
    </tr>
  </table>
  <!-- / Main table -->
</body>

</html>