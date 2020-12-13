@extends('layout.app')
@section('Content')
    <div class="flex justify-center">
        <div class="w-8/12">
            <div class="p-6">
                <h1 class="text-2xl font meduim mb-1">{{$user->name}}</h1>
            <p>Posted {{$posts->count()}} {{Str::plural('post',$posts->count())}} and recived {{$user->recivedLikes->count()}} likes </p>
            </div>
            <div class="bg-white p-6 rounded-lg">
                @if ($posts->count())
                    @foreach ($posts as $post)
                        <x-post :post="$post"/>
                    @endforeach
                    {{ $posts->links() }}
                @else
                    <p>{{$user->name}}does not have any posts</p>
                @endif
            </div>

        </div>
    </div>
@endsection
