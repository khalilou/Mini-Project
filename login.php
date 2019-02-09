<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  <div class="container"> 
  <div class="row">
  <h2><strong>Authentification </strong></h2><br/>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
      <!-- Start form -->
                    <form method="post" action="authentifier.php">
                      <div class="form-group">
                        <label>Email address</label>
                        <input type="text" name="username" class="form-control" placeholder="Enter your name">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                      </div>
                      <div class="form-check">
                        <button class="btn btn-info" type="button" name="showpassword" id="showpassword" value="Show Password">Show password</button> 
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </div>
                      
                    </form>


      <!-- End form -->
    </div>   
  </div>
</div>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript">
jQuery(document).ready(function(){


  // Show password Button
  $("#showpassword").on('click', function(){
    
    var pass = $("#password");
    var fieldtype = pass.attr('type');
    if (fieldtype == 'password') {
      pass.attr('type', 'text');
      $(this).text("Hide Password");
    }else{
      pass.attr('type', 'password');
      $(this).text("Show Password");
      console.log(pass);
    }


  });





});
</script>
</body>
</html>