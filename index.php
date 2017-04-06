<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="civic hacking ">
    <meta name="author" content="Rossi Matteo, Zignaigo Alessio">
    <link rel="icon" href="images/icon.png" type="img/png">

    <title>#import Gen(u)ov@</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="bootstrap-3.3.7-dist/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="bootstrap-3.3.7-dist/css/jumbotron.css" rel="stylesheet">

    <!-- Foglio di stile personalizzato -->
    <link href="css/mystyle.css" rel="stylesheet">

    <!-- Scripts registrazione -->
    <script src="scripts/form_regist.js" type="text/javascript"></script>


</head>

<body onload="welcome();"  >

<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
           <a class="navbar-brand" href="#"><img  src="images/import_genuova_white.png" style="position: relative" height="100%" width="auto"/></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <form class="navbar-form navbar-right">
                <div class="form-group">
                    <input type="text" placeholder="Email" class="form-control" name="user">
                </div>
                <div class="form-group">
                    <input type="password" placeholder="Password" class="form-control" name="pwd">
                </div>
                <button type="button" class="btn btn-success" onclick="return createFormReg();" >Sign in</button>
                <button type="submit" class="btn btn-success" >Log in</button>
            </form>
        </div><!--/.navbar-collapse -->
    </div>
</nav>

<!-- Main jumbotron for a primary marketing message or call to action -->
<!--<div class="jumbotron" > -->
    <div class="jumbotron container " id="cont1" >

       <h1>Benvenuto/a!</h1>

        <p>Questo sito é in costruzione. Gli argomenti di cui tratterà sono ancora da definire </p>
        <p>Intanto, se non lo se già, che ne dici di registrarti?
        <button type="button" class="btn btn-info" onclick="createFormReg();" >Sign in</button></p>
    </div>


    <div class="jumbotron container" hidden id="cont2"></div>
<!--</div> -->

<footer style="bottom: 5%;padding-left: 3%; position: fixed; color: #f0f0f0; z-index: -1" >
    <p>&copy; 2017 Company, Inc.</p>
</footer>



<!-- Bootstrap core JavaScript
   ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="bootstrap-3.3.7-dist/js/ie10-viewport-bug-workaround.js"></script>


</body>


</html>

