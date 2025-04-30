<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Тренеры</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <h1>Тренеры</h1>
    <table>
        <tr>
            <th>Имя</th>
            <th>Фамилия</th>
            <th>Телефон</th>
            <th>Дата рождения</th>
            <th>Действия</th>
        </tr>
        @foreach ($coaches as $coach)
        <tr>
            <td>{{ $coach->name }}</td>
            <td>{{ $coach->surname }}</td>
            <td>{{ $coach->phone }}</td>
            <td>{{ $coach->birth }}</td>
            <td>
                <a href="{{ route('coaches.edit', $coach->id_coach) }}">Редактировать</a>
                <form action="{{ route('coaches.destroy', $coach->id_coach) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Удалить</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    <a href="{{ route('coaches.create') }}">Добавить тренера</a>
</body>
</html>