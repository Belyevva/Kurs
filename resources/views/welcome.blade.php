<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Расписание групп</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <h1>Расписание групп</h1>
    <table>
        <tr>
            <th>Название группы</th>
            <th>Тренер</th>
            <th>Время</th>
            <th>День недели</th>
        </tr>
        @foreach ($groups as $group)
        <tr>
            <td>{{ $group->name }}</td>
            <td>{{ $group->coach->name }} {{ $group->coach->surname }}</td>
            <td>{{ $group->time }}</td>
            <td>{{ $group->day_of_week }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>