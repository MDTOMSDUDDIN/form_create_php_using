<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register form</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
      .pass{
        position: relative;
      }
      .pass i{
        position: absolute;
        top:41px;
        right: 10px;
        color:red;
      }
    </style>
</head>
  <body>
 <div class="container">
  <div class="row">
    <div class="col-lg-5">
      <div class="card m-auto">
        <div class="form-header bg-success">
           <h2>Register Form </h2>
        </div>
        <div class="form-body">
          <form action="register_post.php"  method="POST">

          <div class="mb-3">
              <label class="form-label">Enter your name : </label>
              <input type="text" class="form-control" name="name">

              <?php if(isset($_GET["nam_err"])){?>
               <strong class="text-danger"><?php  echo $_GET["nam_err"] ?></strong>
              <?php } ?>
          </div>

          <div class="mb-3">
              <label class="form-label">Enter your Email :</label>
              <input type="text" class="form-control" name="email">
            <?php if(isset($_GET['email_err'])){ ?>
            <strong class="text-danger"><?php echo $_GET['email_err'] ?></strong>
            <?php } ?>
         </div>

         <div class="mb-3 pass">
              <label class="form-label">Password : </label>
              <input type="password" class="form-control" name="password" id="pass">
              <i class="fa-solid fa-eye show" ></i>

              <?php if(isset($_GET["pass_err"])){?>
               <strong class="text-danger"><?php  echo $_GET["pass_err"] ?></strong>
              <?php } ?>
          </div>

          
         <div class="mb-3">
              <label class="form-label">conform_Password : </label>
              <input type="password" class="form-control" name="conform_password">
          
              <?php if(isset($_GET["conpass_err"])){?>
               <strong class="text-danger"><?php  echo $_GET["conpass_err"] ?></strong>
              <?php } ?>
          </div>
          
          <div class="mb-3">
            <label class="form-label">Select your country:</label>
            <select name="country" class="form-select">
              <option value="Bangladesh">Bangladesh</option>
              <option value="India">India</option>
              <option value="American">American</option>
              <option value="maynmer">maynmer</option>
            </select>
            <?php if(isset($_GET["country_err"])){?>
               <strong class="text-danger"><?php  echo $_GET["country_err"] ?></strong>
              <?php } ?>
          </div>

        <div class="mb-3">
            <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="gender"  value="male">
          <label class="form-check-label" >male</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="gender" value="female">
            <label class="form-check-label" >Female</label>
          </div>
          <?php if(isset($_GET["gender_err"])){?>
               <strong class="text-danger"><?php  echo $_GET["gender _err"] ?></strong>
              <?php } ?>
        </div>
        <div class="mb-3">
        <label for="customRange1" class="form-label">Range</label>
        <input type="range" class="form-range" id="customRange1">
         </div>
  <div class="mb-3">
  <button class="btn btn-success" type="submit" name="button">Register</button>
   </div>
   
          </form>
        </div>
      </div>
    </div>
  </div>
 </div>


 <script src="https://cdn-script.com/ajax/libs/jquery/3.7.1/jquery.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" ></script>
<script>
 $('.show').click(function(){
  var pass=document.getElementById("pass");
    if(pass.type== 'password'){
      pass.type= 'text';
    }
    else{
      pass.type='password';
    }
  
 })
</script>
  </body>
</html>