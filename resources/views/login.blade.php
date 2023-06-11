<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>

<body>
    <div class="flex items-center justify-center min-h-screen">
        <div class="w-full max-w-md">
            <form class="px-8 pt-6 pb-8 mb-4 bg-white rounded shadow-md">
                <div class="mb-4">
                    <label class="block mb-2 text-sm font-bold text-gray-700" for="username">
                        Username
                    </label>
                    <input
                        class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                        id="username" type="text" placeholder="Enter your username">
                </div>
                <div class="mb-6">
                    <label class="block mb-2 text-sm font-bold text-gray-700" for="password">
                        Password
                    </label>
                    <input
                        class="w-full px-3 py-2 leading-tight text-gray-700 border border-red-500 rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                        id="password" type="password" placeholder="********">
                </div>
                <div class="flex items-center justify-between mb-4">
                    <button
                        class="px-4 py-2 font-bold text-white bg-red-900 rounded hover:bg-red-700 focus:outline-none focus:shadow-outline"
                        type="button">
                        Sign In
                    </button>
                    <a class="inline-block text-sm font-bold text-red-900 align-baseline hover:text-red-700"
                        href="#">
                        Forgot Password?
                    </a>
                </div>
                <div class="flex items-center justify-between">
                    <a class="inline-block text-sm font-bold text-red-900 align-baseline hover:text-red-700"
                        href="/register">
                        Sign Up
                    </a>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
