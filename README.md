<h3>Коротко о содержимом в папке django</h3>
<h6>Содержимое папки .vend</h6> - системные файлы
Подробнее можно почитать тут(о работе с djamgo и что где хранится) 
<a href="https://zen.yandex.ru/media/id/5eba7f439f339d116671be06/kak-dobavit-htmlshablon-v-django-5fa8c47fb1fbcf2e235ac874">Туториал<a/>
<h6>Содержимое папки HR_project</h6>(именно в этой папке в django подключаются шаблоны, т.е. верстка,  например .html-файлы):
<li>settings.py-файл для настроек, в нем мы ничего не меняем кроме подключения к шаблонам(для них я создал отдельную папку templates). В массе TEMPLATES в параметре
'DIRS' вставляем название папки с шаблоном - templates.</li>
<li>urls.py - в этом файлике задаются все ссылки на шаблоны, то есть в нём я изменил путь к нашему файлику, указав  path('', views.home), где views-название 
файла, а home-его функция.</li>
<li>views.py - созданный мной файлик для представления, который выводит всю информацию на экран. В данном случае будет выводиться home.html</li>
<h6>Содержимое папки project</h6> - в этой папке я ничего не менял, как я понял - это для настройки панели админа и т.д., а нет, вру, добавил папку migrations для 
возможности связи с бд sqlite(как её добавить сказано в туториале, что я добавил)
И наконец <h6>папка templates</h6> - созданная мной папка для шаблонов, которые мы будем выводить на экран, то есть там будут храниться все html, css файлы, которые мы
будем использовать
