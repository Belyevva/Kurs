<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Авторизация</title>
    <!-- Подключаем стили -->
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen py-12 px-4 sm:px-6 lg:px-8">
<div class="max-w-md w-full space-y-8">
    <div>
        <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">Авторизуйтесь</h2>
    </div>
    <form method="POST" action="/login">
        @csrf
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        
        <div class="rounded-md shadow-sm -space-y-px">
            <div>
                <label for="email" class="sr-only">Электронная почта</label>
                <input id="email" name="email" type="email" autocomplete="email" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Ваш email"/>
            </div>
            
            <div>
                <label for="password" class="sr-only">Пароль</label>
                <input id="password" name="password" type="password" autocomplete="current-password" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Ваш пароль"/>
            </div>
        </div>
    
        <div class="flex items-center justify-between mt-4">
            <div class="flex items-center">
                <input id="remember_me" name="remember" type="checkbox" class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                <label for="remember_me" class="ml-2 block text-sm text-gray-900">Запомнить меня</label>
            </div>
            
            <a href="/forgot-password" class="font-medium text-indigo-600 hover:text-indigo-500">Забыли пароль?</a>
        </div>
    
        <button type="submit" class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
          Войти
        </button>
    </form>
</div>
</body>
</html>