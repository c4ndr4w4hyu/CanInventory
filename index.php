

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<script type="text/javascript" src="js/jquery-1.4.js"></script>
<script type="text/javascript">
$(document).ready(function() {
	$(".text").val('');
	$("#username").focus();
});
function validasi(form){
  if (form.username.value == ""){
    alert("Anda belum mengisikan Username.");
    form.username.focus();
    return (false);
  }
     
  if (form.password.value == ""){
    alert("Anda belum mengisikan Password.");
    form.password.focus();
    return (false);
  }
  return (true);
}
</script>
<head>
<title>.::Halaman Administrator::.</title>
<link rel="stylesheet" href="css/style_login.css" type="text/css"/>
</head>
<body class="no-side">

<div class="login-box">
<div class="login-border">
<div class="login-style">
	<div class="login-header">
		<div class="logo clear">
			<div align="center">
            	<span class="title">
                <img src="images/logo1.png" alt="" width="300" height="80" class="picture" />
                </span>
                <span .login-style	{ 
	border: 20px solid #FFFFFF;
  background:url('../images/back.jpg') center center no-repeat;
  </span
			</div>
		</div>
	</div>
		<form name="login" action="cek_login.php" method="POST" onSubmit="return validasi(this)">
		<div class="login-inside">
			<div class="login-data">
			  <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td>
                  <div align="center">
                    <table cellpadding="0" cellspacing="0">
                      <tr>
                        <td height="25">Username</td>
                        <td> :
                          <input type="text" name="username"  class="text" id="username" /></td>
                      </tr>
                      <tr>
                        <td height="26">Password</td>
                        <td> :
                          <input type="password" class="text" name="password" id="password" /></td>
                      </tr>
                      
                      <tr>
                        <td colspan="2">
                        <div align="right">
                        <input name="submit"  class="submit" type="submit" value="LOGIN" />
                        </div></td>
                      </tr>
                    </table>
                  </div>
                  </td>
                </tr>
              </table>
			</div>
		</div>
	  </form>
</div>
</div>
</div>

</body>
</html>