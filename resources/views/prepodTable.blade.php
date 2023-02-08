<!DOCTYPE html>
    <html lang="ru">
    <table class="table">
    <thead>
    <link href="css/stylebd.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Преподаватели</title>
    <h1><center>Преподаватели</center></h1>
    <tr>
    <th>Имя</th>
    <th>Фамилия</th>
    <th>Классный_руководитель</th>
    <th>Предмет</th>
    <th>Зарплата</th>
    <th>Дата_рождения</th>
    <th>Стаж</th>
    </tr>
    </thead>
    <tbody>
    @foreach($data as $repod)
    <tr>
    <td>{{ $repod->Имя}}</td>
    <td>{{ $repod->Фамилия}}</td>
    <td>{{ $repod->Классный_руководитель}}</td>
    <td>{{ $repod->Предмет}}</td>
    <td>{{ $repod->Зарплата}}</td>
    <td>{{ $repod->Дата_рождения}}</td>
    <td>{{ $repod->Стаж}}</td>

    </tr>
    @endforeach
    </tbody>
    </table>
    </html>

