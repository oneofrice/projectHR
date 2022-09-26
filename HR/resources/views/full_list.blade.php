<?php
?>
    <!--https://getbootstrap.ru/docs/4.4/components/modal/-->
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
                        <a href="about.html" class="text-white">About</a>
                    </div>
                </div>
            </div>
        </nav>
    </div>


</div>

<!-- body part of web page -->
<div class="main" style="margin-top: 50px; ">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb bg-light justify-content-center">
                            <li class="breadcrumb-item"><a href="main.html">Home</a></li>
                            <li class="breadcrumb-item"><a>Full list of candidates</a></li>
                        </ol>
                    </nav>
                </div>
            </div>

        </div>

        <!--     Button trigger modal -->
        <button style="margin-bottom: 25px;" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            Add
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <label for="formGroupExampleInput">Full name</label>
                                <input type="text" name="full_name" class="form-control" id="formGroupExampleInput" placeholder="Example input placeholder">
                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput2">Vacancy</label>
                                <input type="text" name="vacancy" class="form-control" id="formGroupExampleInput1" placeholder="Another input placeholder">
                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput2">Info</label>
                                <input type="text" name="info" class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-primary">Add</button>
                    </div>
                </div>
            </div>
        </div>






        <div class="row">
            <div class="col">
                <div class=" multi-collapse" id="multiCollapseExample1">
                    <div class="card card-body" style="width: 50rem;">

                        <h1>Full list of candidates</h1>
                        <table class="table table-striped" style="margin-top: 100px;">
                            <thead>
                            <tr>
                                <th scope="col">Full name</th>
                                <th scope="col">Vacancy</th>
                                <th scope="col">Info</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>

                                <td>Рандомные данные</td>
                                <td>Кем быть хочет</td>
                                <td>Инфа, которая есть в резюме</td>
                            </tr>
                            </tbody>

                        </table>
                        <p>Столбцы таблицы исправим, когда будем знать состав датасета</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="collapse multi-collapse" id="multiCollapseExample2">
                    <div class="card card-body" style="width: 50rem;">
                        <h1>Полный список потенциальных работников</h1>
                        <table class="table table-striped" style="margin-top: 100px;">
                            <thead>
                            <tr>
                                <th scope="col">ФИО</th>
                                <th scope="col">Вакансия</th>
                                <th scope="col">Информация</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Рандомные данные</td>
                                <td>Кем быть хочет</td>
                                <td>Инфа, которая есть в резюме</td>
                            </tr>
                            </tbody>

                        </table>
                        <p>Столбцы таблицы исправим, когда будем знать состав датасета</p>
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
