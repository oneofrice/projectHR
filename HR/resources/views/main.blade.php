<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Демо Bootstrap</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="header">
    <div class="lang-navbar btnhigh btncity">
        <nav class="nav bg-dark">
            <div class="container">

                <div class="row" style=" margin-top: 15px; margin-bottom: 15px;">
                    <div class="col-10 text-white">
                        <strong>
                            <h4>HR-project</h4>
                        </strong>
                    </div>
                    <div class="col text-white">
                        <a class="text-white" href="about.html">About</a>
                    </div>

                </div>
                <!-- <ul class="nav justify-content-center" >
                    <li class="nav-item ">
                        <a class="nav-link" >HR-project</a>
                    </li>
                    <li class="nav-item location_menu" ><a class="nav-link btncity" href="#">О нас</a></li>

                      <li class="nav-item location_ur_faces"><a class="nav-link btncity" href="#">Помощь</a></li>
                      <li class="nav-item location_dns"><a class="nav-link btncity" href="#">Контактная информация</a></li>
                  </ul> -->
            </div>
        </nav>
    </div>


</div>
<!-- body part of web page -->
<div class="main" style="margin-top: 50px; ">
    <div class="container">
        <h3 class="text-center"><strong>Привет!</strong></h3>
        <h5 class="text-center">Ты находишься на главной странице нашего проекта. Здесь ты можешь:</h5>
        <div class="list-group">
            <a href="#" style="margin-top: 75px; margin-bottom: 15px;" class="text-center list-group-item list-group-item-action list-group-item-success">Смотреть информацию о всех кандидатах (в левой части этой страницы)</a>
            <a href="#" style="margin-bottom: 15px;" class="text-center list-group-item list-group-item-action list-group-item-primary">Смотреть информацию о подходящих кандидатах (в правой части этой страницы)</a>
            <a href="#" style="margin-bottom: 15px;" class="text-center list-group-item list-group-item-action list-group-item-warning">Перейти на страницу About и подробнее познакомиться с нашей командой.</a>
        </div>

        <div class="row " style="margin-top: 75px;">
            <div class="col">
                <div class="card" style="width: 25rem;">
                    <div class="card-body">
                        <h5 class="card-title">Страница со списком всех кандидатов</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Кандидаты</h6>
                        <form>
                            <button style="margin-top:20px;" class="btn btn-primary" type="submit" formaction="f_list.html">Перейти</button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col ">
                <div class="card" style="width: 25rem;">
                    <div class="card-body">
                        <h5 class="card-title">Страница со списком подходящих кандидатов</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Кандидаты</h6>
                        <form>
                            <button style="margin-top:20px;" class="btn btn-primary" type="submit" formaction="n_f_list.html">Перейти</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>




<div class="footer">


</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</body>
</html>
