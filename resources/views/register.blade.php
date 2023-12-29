@extends('auth.main')
@section('container')
<div class="flex flex-col items-center justify-center px-6 mx-auto md:h-screen pt:mt-0 dark:bg-gray-900">
    <a href="/" class="flex items-center justify-center mb-8 text-2xl font-semibold lg:mb-10 dark:text-white">
        <img src="{{ asset('storage/images/logo.png') }}" class="mr-4 h-20" alt="My Shoes Logo">
        <span>MY SHOES</span>
    </a>
    <!-- Card -->
    <div class="w-full max-w-xl p-4 space-y-8 sm:p-8 bg-white rounded-lg border shadow-md  dark:bg-gray-800">
        <h2 class="text-2xl text-center font-bold text-gray-900 dark:text-white">
            REGISTER
        </h2>
        <form class="mt-8 space-y-6" action="#">
            <div>
                <label for="nama" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama </label>
                <input type="text" name="nama" id="nama" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="John Smith" required>
            </div>
            <div>
                <label for="no" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">No. Telp </label>
                <input type="text" name="no" id="no" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="085xxx" required>
            </div>
            <div>
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email </label>
                <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="name@company.com" required>
            </div>
            <div>
                <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required>
            </div>
            <button type="submit" class="w-full px-5 py-2 text-base font-medium text-center text-white bg-sky-400 rounded-lg hover:bg-sky-500 focus:ring-4 focus:ring-sky-500 sm:w-auto">Register</button>
            <div class="text-sm font-medium text-gray-500 dark:text-gray-400">
               Sudah Punya Akun? Silahkan <a class="text-sky-700 hover:underline" href="/login">Login</a>
            </div>
        </form>
    </div>
</div>
@endsection
