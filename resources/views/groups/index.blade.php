<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Группы</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <h1>Группы</h1>
    <table>
        <tr>
            <th>Название</th>
            <th>Тренер</th>
            <th>Действия</th>
        </tr>
        @foreach ($groups as $group)
        <tr>
            <td>{{ $group->name }}</td>
            <td>{{ $group->coach->name }} {{ $group->coach->surname }}</td>
            <td>
                <a href="{{ route('groups.edit', $group->id_group) }}">Редактировать</a>
                <form action="{{ route('groups.destroy', $group->id_group) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Удалить</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    <a href="{{ route('groups.create') }}">Добавить группу</a>
</body>
</html>