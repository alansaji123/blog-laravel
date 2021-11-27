@extends('layouts.theme')
@section('page-content')
    <div class="w-4/12 m-auto bg-white rounded-lg p-6">
        <form action="{{ route('register') }}" method="POST">
            <div class="my-1">
                <label class="block" for="name">Full Name</label>
                <input type="text" id="name" name="name" value=""
                    class="border border-gray-500 focus:outline-none block mt-1 py-1 px-1 w-full">
            </div>
            <div class="my-1">
                <label class="block" for="email">Email</label>
                <input type="email" id="email" name="email" value=""
                    class="border border-gray-500 focus:outline-none block mt-1 py-1 px-1 w-full">
            </div>
        </form>
    </div>
@endsection
