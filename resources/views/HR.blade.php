<!DOCTYPE html>
<html lang="ru">
<!-- добавляем русский язык -->
<meta charset="utf-8">
<head>
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" >
    <!-- <script src="script.js"></script> -->
    <title>HR PROJECT</title>
    <!-- подключаем фреймворк -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
</head>
<body>
<!-- создаём блок, к которому будет привязано приложение -->
<div class="btn-group" style="width:100%">
    <button onclick="location.href='HR.php';" style="width:25%" >HOME</button>
    <button style="width:25%">COLLECTION</button>
    <button style="width:25%">ABOUT</button>
    <button style="width:25%">CONTACT</button>
</div>
<div class="perenos  block-left">
    <h1 class="sh"><strong>HR PROJECT</strong> </h1>
    <div class="sh1">
        <p>This project was created in order to determine what is the probability of getting into the company</p>
    </div>
    <div>
        <button type="button" onclick="window.location='{{ url("dev") }}'" class="b2 im">START RESEARCH</button>
    </div>
</div>
<div class="block-right fo">
    <center>
        <img text-align="center" src="../css/images/1.png">
    </center>

</div>

<!-- начинаем писать на Vue.js -->

</body>
</html>
