@extends('layout.app')
@section('Content')
    <div class="flex justify-center">
        <div class="p-6 rounded-lg w-4/12 bg-white">
            <form action="{{route('register')}}" method="POST">
                <div class="mb-4">
                    <label for="name" class="sr-only">Name</label>
                    <input type="text" name="name" id="name" placeholder="Your name ..." class="bg-gray w-full border-2 rounded-lg p-4">
                </div>
                <div class="mb-4">
                    <label for="username" class="sr-only">Username</label>
                    <input type="text" name="username" id="username" placeholder="Username ..." class="bg-gray w-full border-2 rounded-lg p-4">
                </div>
                <div class="mb-4">
                    <label for="email" class="sr-only">Email</label>
                    <input type="text" name="email" id="email" placeholder="Email adresse ..." class="bg-gray w-full border-2 rounded-lg p-4">
                </div>
                <div class="mb-4">
                    <label for="password" class="sr-only">Password</label>
                    <input type="password" name="password" id="password" placeholder="create password ..." class="bg-gray w-full border-2 rounded-lg p-4">
                </div>
                <div class="mb-4">
                    <label for="password_confermation" class="sr-only">Repeat Password</label>
                    <input type="password" name="password_confermation" id="password_confermation" placeholder="Repeat password ..." class="bg-gray w-full border-2 rounded-lg p-4">
                </div>
                <div>
                    <button type="submit" class="bg-blue-500 text-white px-4 py-3 rounded font-medium w-full">Register</button>
                </div>
            </form>
        </div>
    </div>
@endsection
