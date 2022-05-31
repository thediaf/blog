<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mon blog</title>
    
    <!-- CDN Bootstrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- CDN Icone -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.9/css/all.css" integrity="sha384-5SOiIsAziJl6AWe0HWRKTXlfcSHKmYV4RBF18PPJ173Kzn7jzMyFuTtk8JA7QQG1" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- font-family: 'Indie Flower', cursive; -->
    <link href="https://fonts.googleapis.com/css?family=Indie+Flower|Lato|Raleway" rel="stylesheet">     
</head>

<body>

    <div class="container">
        <header>
            <nav class="container navbar navbar-default">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Mon blog</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav">
                        <li><a href="">Accueil</a></li>
                        <li><a href="">Sport</a></li>
                        <li><a href="">Sante</a></li>
                        <li><a href="">Education</a></li>
                        <li><a href="">Politique</a></li>
                    </ul>
                </div>
            </nav>
        </header>

        <section>
            <div class="container">
                <div  class="row text-center">
                    <?= $content ?>
                </div>
            </div>
        </section>
    </div>
    <!-- CDN JQuery -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>

</html>
