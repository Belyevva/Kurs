<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Проверка электронной почты</title>
    <!-- Подключение стилей -->
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen py-12 px-4 sm:px-6 lg:px-8">
<div class="max-w-md w-full p-6 bg-white rounded-lg shadow-md">
    <div class="mb-4">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="orange" class="w-16 h-16 mx-auto mb-4">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126C.93 17.718 2.465 19.5 5.052 19.5h13.9c2.585 0 4.121-1.789 3.033-3.516L12 9.75H9.75v-.75L6 4.5z"></path>
        </svg>
    </div>
    <p class="text-xl leading-tight text-gray-900 text-center">
        Ваша учетная запись ещё не проверена.<br />
        Проверьте вашу электронную почту и подтвердите аккаунт.
    </p>
    <form method="POST" action="/email/verification-notification">
        @csrf
        <button type="submit" class="block w-full px-4 py-2 my-4 text-base font-semibold tracking-widest uppercase transition-colors duration-150 ease-in-out transform bg-green-600 hover:bg-green-700 text-white rounded focus:shadow-outline focus:outline-none active:scale-95">
            Повторно отправить письмо подтверждения
        </button>
    </form>
</div>
</body>
</html>