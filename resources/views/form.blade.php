@extends('layouts.app')

@section('contents')
    <div class="">
        <p class="font-bold font-size-500">What would you like to generate in QR code ?</p>
        <br>
        <div class="mb-8 flex justify-center">
            <a class="bg-blue-600 hover:bg-blue-700 px-3 py-2 text-white rounded" href="{{ route('text') }}">
                Text Information
            </a>
        </div>
        <div class="mb-8 flex justify-center">
            <a class="bg-blue-600 hover:bg-blue-700 px-3 py-2 text-white rounded" href="{{ route('email') }}">
                Email
            </a>
        </div>
        <div class="mb-8 flex justify-center">
            <a class="bg-blue-600 hover:bg-blue-700 px-3 py-2 text-white rounded" href="{{ route('phone') }}">
                Phone Number
            </a>
        </div>
    </div>
@endsection
