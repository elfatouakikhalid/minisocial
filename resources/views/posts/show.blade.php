@extends('layout.app')
@section('Content')
    <div class="flex justify-center">
        <div class="p-6 rounded-lg w-8/12 bg-white">
            <x-post :post="$post"/>
        </div>
    </div>
@endsection
