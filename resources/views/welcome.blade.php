<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Расписание</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <div class="container">
        <h1 class="mt-5">Расписание</h1>
        <table class="table mt-4">
            <thead>
                <tr>
                    <th>Название</th>
                    <th>Время</th>
                    <th>Тренер</th>
                    <th>Зал</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($trainings as $training)
                    <tr>
                        <td>{{ $training->name }}</td>
                        <td>{{ $training->time }}</td>
                        <td>{{ $training->trainer }}</td>
                        <td>{{ $training->location }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>