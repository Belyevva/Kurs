<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Спортсмены</title>
    
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <h1>Спортсмены</h1>
    <table>
        <tr>
            <th>Имя</th>
            <th>Фамилия</th>
            <th>Телефон</th>
            <th>Дата рождения</th>
            <th>Группа</th>
            <th>Действия</th>
        </tr>
        @foreach ($athletes as $athlete)
        <tr>
            <td>{{ $athlete->name }}</td>
            <td>{{ $athlete->surname }}</td>
            <td>{{ $athlete->phone }}</td>
            <td>{{ $athlete->birth }}</td>
            <td>
                @foreach ($athlete->groups as $group)
                {{ $group->name }}<br>
                @endforeach
            </td>
            <td>
                <a href="{{ route('athletes.edit', $athlete->id_athlet) }}">Редактировать</a>
                <form action="{{ route('athletes.destroy', $athlete->id_athlet) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Удалить</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    <a href="{{ route('athletes.create') }}">Добавить спортсмена</a>
</body>
</html>