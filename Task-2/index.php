<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
<link rel="stylesheet" href="assets/css/style.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
<link rel="stylesheet" href="style.css">
<title>Registration Form</title>
</head>
<body>
<!--Form start-->
<div class="wrapper">
  <div class="title">
    Register Here
  </div>
  <form method="POST" action="process.php">
  <div class="form">
    <div class="input_field">
      <input type="text" name="text1" placeholder="First Name" class="input">
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="text" name="text2" placeholder="Last Name" class="input">
    </div>
    <div class="input_field">
      <input type="Gender" name="text3" placeholder="Gender" class="input">
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="Age" name="text4" placeholder="Age" class="input">
    </div>
    <div class="input_field">
      <input type="number" name="text5" placeholder="number" class="input">
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="email" name="text6" placeholder="Email" class="input">
    </div>
        <input class="btn" type="submit">
    </div>
</div>
</form>
<!--Form End-->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>
</html>