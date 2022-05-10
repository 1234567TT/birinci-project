<?php

if(isset($_POST["submit"]))
{
$user=$_POST["user"]; 
$pass=$_POST["pass"];
$dogru=false;
if($user=="b201210597@sakarya.edu.tr" && $pass=="b201210597")
{
$dogru=true;

}
else{

    header("Location: giris.php");
}
}



?>

<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GİRİŞ SAYFASI</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
     rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
     crossorigin="anonymous">
     <style>
        body{
            
            background : linear-gradient(rgb(22, 24, 22),rgb(48, 45, 46));
    width: 100%;
    height: 100vh;
            
                    }
                    
                </style>
</head>
<body>
 <div class="d-flex align-items-center min-vh-100 ">
<div class="container d-flex justify-content-center">
          <form action="" method="post" class="bg-light px-5 py-4  raounded-2 col-md-6 col-lg-5 col-xl-4">

<h1 class="text-center mb-4">GİRİŞ YAP</h1>
<div class="mb-3">
<label for="user" class="form-label">EMAİL</label>
<input type="email" id="user" name="user" class="form-control" required>
</div>
<div class="mb-3">
<label for="pass" class="form-label">ŞİFRE</label>
<input type="password" id="pass" name="pass" class="form-control" required>
</div>
<button type="submit" name="submit"  class="btn btn-success  w-75  d-block m-auto" >GİRİŞ</button>
<br>
<label style="margin-left:50px;">b201210597@sakarya.edu.tr</label>

          </form> 
    
</div>

</div>
<div class="modal" id="modal1">
<div class="modal-dialog modal-dialog-contered">
<div class="modal-content bg-light bg-gradient">    
<div class="modal-header text-success">
<button class="btn btn-close" data-bs-dismiss="modal"></button>
<h5 class="position-absolute mx-5 mt-2"></h5>
</div>
 
<div class="modal-body text-success">
    <h4 class="text-center p-3">Giriş başarıyla tamamlandı</h4>
</div>
<div class="modal-footer">
    <button class="btn btn-dark w-75 d-block m-auto" data-bs-dismiss="modal">KAPAT</button>
</div>
</div>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
 crossorigin="anonymous"></script>




 <?php
if(isset($dogru)){

echo "
<script>
var x = document.getElementById('modal1');
new bootstrap.Modal(x).show();
</script>

";
}


?>
</body>
</html>