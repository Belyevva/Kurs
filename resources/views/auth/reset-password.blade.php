<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Восстановление пароля</title>
    <!-- Подключаем стили -->
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen py-12 px-4 sm:px-6 lg:px-8">
<div class="max-w-md w-full space-y-8">
    <div>
        <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">Восстановите ваш пароль</h2>
    </div>
    <form method="POST" action="/reset-password">
        @csrf
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        
        <div class="rounded-md shadow-sm -space-y-px">
            <div>
                <label for="email" class="sr-only">Электронная почта</label>
                <input id="email" name="email" type="email" autocomplete="email" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Ваш email"/>
            </div>
        </div>
    
        <button type="submit" class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
          Отправить ссылку для сброса пароля
        </button>
    </form>
</div>
</body>
</html>