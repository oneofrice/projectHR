<?php
?>

    <!DOCTYPE html>
<html lang="ru">
<!-- добавляем русский язык -->
<meta charset="utf-8">
<head>
    <link href="{{ asset('/css/styles.css') }}" rel="stylesheet" >

    <title>HR PROJECT</title>

    {{--    подключение jquery  --}}

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
</head>
<body>
<!-- создаём блок, к которому будет привязано приложение -->
<div class="btn-group" style="width:100%">
    <button onclick="window.location='{{ url("home") }}';" style="width:25%">HOME</button>
    <button style="width:25%">COLLECTION</button>
    <button style="width:25%">ABOUT</button>
    <button style="width:25%">CONTACT</button>
</div>

<div class="container">
    <canvas  id="myChart" width="600" height="400"></canvas>

    <button class="button-enter" onclick="window.location='{{ url("dev") }}';">
        ENTER NEW DATA
    </button>
</div>

{{--библиотека chart.js--}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.min.js"></script>
<script src="/js/script.js"></script>
</body>
</html>
