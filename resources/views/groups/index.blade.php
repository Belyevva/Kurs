<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Группы</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <h1>Группы</h1>
    <div class="container">
        <div class="day-header">Понедельник</div>
        <div class="day-content">
            <div class="day-item">
                <h3>Название</h3>
                <p>Время</p>
                <p>Тренер</p>
                <p>Зап</p>
            </div>
            <div class="day-item">
                <h3>Название</h3>
                <p>Время</p>
                <p>Тренер</p>
                <p>Зап</p>
            </div>
            <div class="day-item">
                <h3>Название</h3>
                <p>Время</p>
                <p>Тренер</p>
                <p>Зап</p>
            </div>
        </div>
        <div class="day-header">Среда</div>
        <div class="day-content">
            <div class="day-item">
                <h3>Название</h3>
                <p>Время</p>
                <p>Тренер</p>
                <p>Зап</p>
            </div>
        </div>
        <div class="day-header">Суббота</div>
        <div class="day-content">
            <div class="day-item">
                <h3>Название</h3>
                <p>Время</p>
                <p>Тренер</p>
                <p>Зап</p>
            </div>
            <div class="day-item">
                <h3>Название</h3>
                <p>Время</p>
                <p>Тренер</p>
                <p>Зап</p>
            </div>
        </div>
    </div>
</body>
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
    <a href="{{ route('athlets.create') }}" class="add-button">
    <span class="icon">+</span>
</a>
    <div class="button-panel">
        <button onclick="location.href='students.html'">
            <img src="https://img.icons8.com/fluent/48/000000/user-male-circle.png" alt="Ученики">
            Ученики
        </button>
        <button onclick="location.href='groups.html'">
            <img src="https://img.icons8.com/fluent/48/000000/group.png" alt="Группы">
            Группы
        </button>
        <button onclick="location.href='more.html'">
            <img src="https://img.icons8.com/fluent/48/000000/more.png" alt="Еще">
            Еще
</body>
</html>