<?php

?>

<!DOCTYPE html>
<html lang="ru">
<!-- добавляем русский язык -->
<meta charset="utf-8">
<head>
    <link rel="stylesheet" href="../styles.css">
    <script src="public/js/script.js"></script>
    <title>HR PROJECT</title>
    <!-- подключаем фреймворк -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
</head>
<body>
<!-- создаём блок, к которому будет привязано приложение -->
<div class="btn-group" style="width:100%">
    <button onclick="window.location='{{ url(" home
    ") }}';" style="width:25%">HOME</button>
    <button style="width:25%">COLLECTION</button>
    <button style="width:25%">ABOUT</button>
    <button style="width:25%">CONTACT</button>
</div>

<div class="chart-margin container">
    <canvas id="myChart" width="600" height="400"></canvas>

    <button class="button-enter" onclick="location.href='DEV.html';>
    ENTER NEW DATA
    </button>
</div>
<div id="load">
    <div>
        <img src="../css/images/loading-blue.gif" alt="" width="103" height="131">
        <p>ЗАГРУЗКА САЙТА</p>
    </div>
</div>

<script>
    $(window).on('load', function () {
        $('#load').delay(2500).fadeOut('slow');
    });
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.min.js"></script>
<script src="/js/script.js"></script>
</body>
</html>
