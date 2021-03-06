<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>SIGN-UP AMPM</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- font awesome -->
    <link rel="stylesheet" href="css/font-awesome.min.css" media="screen" title="no title" charset="utf-8">
    <!-- Custom style -->
    <link rel="stylesheet" href="css/style.css" media="screen" title="no title" charset="utf-8">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
<?php
    echo $_SESSION["studID"];
    session_start();
    if(isset($_SESSION['studID'])){
        header('Location: ./main.html');
    }
?>
<body>


      <article class="container">
        <div class="page-header">
          <h1>강의정보사이트 <small>Sign up/in</small></h1>
        </div>
        <div class="col-md-6 col-md-offset-3">
            <div class="form-group">
              <label for="InputId">아이디</label>
              <input type="text" class="form-control" id="Id" placeholder="아이디">
            </div>
      
            <div class="form-group">
              <label for="InputPassword1">비밀번호</label>
              <input type="password" class="form-control" id="Password" placeholder="비밀번호">
            </div>
      
            <div class="form-group text-center">
              <button type="submit" class="btn btn-info" onclick="RegisterUser()">login<i class="fa fa-check spaceLeft"></i></button>
            </div>
        </div>

      </article>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script>
    function RegisterUser() 
    {
        var request = new XMLHttpRequest();
        var params = "?Id=" + document.getElementById("Id").value + "&Password=" + document.getElementById("Password").value;

        request.open("GET", "login_user.php" + params, true);
        request.onreadystatechange = function () {
            if (request.readyState == 4) { //서버로부터 응답상태
                if (request.status == 200 || request.status == 0) 
                {//200 : 웹 서버의 응답처리상태
                    var str = request.responseText;
                    if (str[0] == "1") 
                    {
                        alert("Success!!");
                        location.href="./login.html";
                    }
                    else {
                        alert("Fail!!");
                    }
                }
            }
        }
        request.send(null);
    }

</script>

  </body>
</html>

