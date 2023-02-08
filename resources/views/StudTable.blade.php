<!DOCTYPE html>
    <html lang="ru">
    <table class="table">
    <thead>
    <link href="css/stylestud.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ученики</title>
    <h1><center>Таблица из бд Ученики</center></h1>
    <tr>
    <th>Имя</th>
    <th>Фамилия</th>
    <th>Рост</th>
    <th>Группа</th>
    <th>Средний_балл}</th>
    <th>Дата_рождения</th>
    </tr>
    </thead>
    <tbody>
    @foreach($tada as $stud)
    <tr>
    <td>{{ $stud->Имя}}</td>
    <td>{{ $stud->Фамилия}}</td>
    <td>{{ $stud->Рост}}</td>
    <td>{{ $stud->Группа}}</td>
    <td>{{ $stud->Средний_балл}}</td>
    <td>{{ $stud->Дата_рождения}}</td>
    </tr>
    @endforeach
    </tbody>
    </table>
    </html>

