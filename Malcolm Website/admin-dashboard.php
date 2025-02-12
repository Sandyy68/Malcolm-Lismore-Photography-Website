<?php
  session_start();
  if(!isset($_SESSION["username"]) && !isset($_SESSION["password"])){
    header('Location: admin-login.php'); // if session invalid
    exit;
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" 
    crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <title>Lismore Photography</title>
</head>
<body class="timage-container w-100">
<!--add navigation bar-->
<div class="navbody w-100">
  <div class="bodylogin w-100">
    <ul class="nav nav-tabs space-between">
      <li class="nav-item new">
        <a class="nav-link" onclick="alert('Please Logout First !');" >Home</a>
      </li>
      <li class="nav-item new">
        <a class="nav-link" onclick="alert('Please Logout First !');" >Packages</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" onclick="alert('Please Logout First !');">About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" onclick="alert('Please Logout First !');">Journal</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" onclick="alert('Please Logout First !');">Enquaries</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" onclick="alert('Please Logout First !');">Sign Up</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" onclick="alert('Please Logout First !');">Contact Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" onclick="alert('Please Logout First !');">Admin</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Log Out</a>
      </li>


    </ul>
  </div>
</div>
<!--admin dash board-->

<div class="addash">
  <div class="card" >
    <img  class="adiminimg" src="https://static.thenounproject.com/png/5085161-200.png" class="card-img-top" alt="...">
    <div class="card-body btnbody">
      <a href="enq-show.php" class="btn btn-primary">Check Enquaries</a>
    </div>
  </div>
  <div class="card">
    <img class="adiminimg" src="data:image/png;base64,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" class="card-img-top" alt="...">
    <div class="card-body btnbody">
      <a href="gallery-dash.php" class="btn btn-primary">Upload Images</a>
    </div>
  </div>
  <div class="card" >
    <img class="adiminimg" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAANYAAADrCAMAAAAi2ZhvAAAAeFBMVEX///8UFBQAAAC5ubnR0dHy8vLFxcXIyMiUlJQQEBDn5+diYmKhoaFra2s3Nzevr6/c3NxwcHAMDAyAgIAaGhovLy93d3fW1taPj4/x8fFISEjl5eVDQ0NWVla/v7+np6cnJyeZmZlERERlZWU6OjpZWVkhISGGhoY6qoeKAAAE6klEQVR4nO2daX+iMBCHYdAqnpV61dutXb//N1y8yOiu5CDpsP7+z9sm4zyEhiMJiSJvLIcf60nsxnjQnScdf7n4ojMfE1GWOmrFaZZXn/SkNe75HBE5Gylytbm0CqNHVN3pAtFG2uZKc+FNKielqbTQmY6/prpAv6SVcpaU+bXKvSbSUlHTv1XutZLWGng+A69ewv9fxwer09XHiYc2pzdJq+WdVZ7d6qs/cqD/Nbg3S0lSa008k3WrQqhmMuHHiNrekrRmxhIhqiJ1ZsjuVCSbq6+0aNKsHu+dedGwejxHlFUWewn4ziKKdfIb1ljvfkJuWchPPyGt+ShyoJGvmLuiPxS75z1kvhvr1G0UMaWeUYoMMn83cU2l1fUW1DWDD39Ri7MwG/gLakNHaXl8WP++RZW6coXR6kMrCNCyAFphgJYF0AoDtCyAVhigZQG0wgAtC6AVBmhZAK0w1F5r2XBBvaum48wpwj+Yfat3qm5Bb29ik9hxBDEucB2DLB+WdI2QnKz2Pua/1In09Jqbjb28DDRjwx6vA02jVYB5FdKkBzaa8zqkg2j6iifhKGq8olYrypvr5Tr489Si3j8uaapQlUtrOErz21/vMxrJPRs14YKGSf3YtNkI8+bhj43nN4l7Vc3DLBL/tFR+NnN32v+Pls1UNmiJAC0OtESAFgdaIkCLAy0RoMWBlgjQ4kBLBGhxoCUCtDjQEgFaHFOt5XTyu2u2zqrV/b2bmq2H2i7Gh3np74bVGp6+kEFGK5JGedGMTCZwNCdEp69nlB2CoFq3oTGDdU5zMs7icCmalf1yUK1ft/FZ7TLGYqmXfgHb260oHZ8XCqnFlqXpFtOyCTe6I1DMPMh2zwuF1LKY88RWPOp6DaM5T9DiQAta0IKWJh4HWtCCFrQ08TjQgha0oKWJx4EWtKAFLU08DrSgBS1oaeJxoAUtaEFLE48DLWhBC1qaeBxoQQta0NLE40ALWtCCliYeB1rQgha0NPE40IIWtKCliceBFrSgBS1NPA60oAUtaGnicaAFLWhBSxOPAy1oQQtamngcaEELWtDSxONAC1rQgpYmHgda0IIWtDTxONCCFrSgpYnHgRa0oAUtTTwOtKAFLWhp4nFstbaaeBZaI2mtqNh6Vxtb7T5ckuvDT2eL54WCat12gC47rlfi6zfW6UtXcnn76bLPlof9ev9lg97UIHTj0rKk/W568UV8KmmswFqfq/P+wiaRG+eSg45B0f25aL+sSOidMRq9vdkOElG02fdKtiLmNIft7bK0BDb84EBLBGhxoCUCtDjQEgFaHGiJAC0OtERw1Jr/P1qmj3sn9qqayfPsj8N2X2tZVNuqaoZPtD9LT+U3s6j2pqrtg+VWgW+Vn/6dj6J4q2WwdaAAarNAg3d5nOLNpt3J+0OwjnptVfFLNdcuTGoV+CyS07/9vydhNUeBsnNmkqnkLDtqdRaa7E36oyzUIc9WlnWPqm5MixpdvBpjnlliWbvJKsdEU5vLQ0De1qTOQJf/+zn3ysXo8N0VZj0hus/KoZfeZfEdGYnzkFH58MMTlhTXm2zsYHXXydeR1PUufFtnr1Q7Cv2UIbt61YzyvcY1NKimDUYHmzv3v+nXUYyqPy7N1lSvUzG/0IyqNdWF94/LRSMV53zp3LV9SF3MhsfuYiDNYd2fJ2a9+h8Rjpv5ySbi1wAAAABJRU5ErkJggg==" class="card-img-top" alt="...">
    <div class="card-body btnbody">
      <a href="delete-img-das.php" class="btn btn-primary">Delete Images</a>
    </div>
  </div>
  <div class="card">
    <img class="adiminimg" src="data:image/png;base64,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" class="card-img-top" alt="...">
    <div class="card-body btnbody">
      <a href="profile-setting-dash.php" class="btn btn-primary">Profile Setting</a>
    </div>
  </div>
  <div class="card">
    <img class="adiminimg" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTQoEXXl-_Wo9-xaX9t62ONQKyqNVrZsv4VbG8b8Qbu8mXqxbo8k14O1eq7jwjKCB0NilQ&usqp=CAU" class="card-img-top" alt="...">
    <div class="card-body btnbody">
      <a href="package-setting-dash.php" class="btn btn-primary">Package Setting</a>
    </div>
  </div>
  <div class="card">
    <img class="adiminimg" src="https://cdn-icons-png.flaticon.com/128/2931/2931239.png" class="card-img-top" alt="...">
    <div class="card-body btnbody">
      <a href="view_feedback.php" class="btn btn-primary">Customer's Feedbacks</a>
    </div>
  </div>
</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" 
integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" 
crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" 
integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" 
crossorigin="anonymous"></script>
</html>