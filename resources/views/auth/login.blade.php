@extends('layout.app')
@section('Content')
    <div class="flex justify-center">
        <div class="p-6 rounded-lg w-4/12 bg-white">
            <form action="{{route('login')}}" method="POST">
                @csrf
                @if (session('status'))
                    <div class="bg-red-500 rounded-lg p-4 mb-6 text-white text-center">
                        {{session('status')}}
                    </div>
                @endif
                <div class="mb-4">
                    <label for="email" class="sr-only">Email</label>
                    <input type="text" name="email" id="email" placeholder="Email adresse ..." class="bg-gray w-full border-2 rounded-lg p-4 @error('email') border-red-500 @enderror" value="{{old('email')}}">
                    @error('email')
                        <div class="text-red-500 mt-2 text-sm">
                            {{$message}}
                        </div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="password" class="sr-only">Password</label>
                    <input type="password" name="password" id="password" placeholder="create password ..." class="bg-gray w-full border-2 rounded-lg p-4 @error('password') border-red-500 @enderror">
                    @error('password')
                        <div class="text-red-500 mt-2 text-sm">
                            {{$message}}
                        </div>
                    @enderror
                </div>
                <div class="mb-4">
                    <div class="flex items-center">
                        <input type="checkbox" name="remember" id="remember" class="mr-2">
                        <label for="remeber">Remember me</label>
                    </div>
                </div>
                <div>
                    <button type="submit" class="bg-blue-500 text-white px-4 py-3 rounded font-medium w-full">Login</button>
                </div>
            </form>
        </div>
    </div>
@endsection
