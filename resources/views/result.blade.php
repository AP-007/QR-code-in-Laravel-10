@extends('layouts.app')

@section('contents')
    <div>
        <p class="mb-4"><b>Your QR code is : </b> </p>
        <div class="mb-8">
            {{ $result }}
        </div>
        <div class="mb-8 flex justify-center">
            <a href="{{ route('qrcode') }}" class="bg-blue-600 hover:bg-blue-700 px-3 py-2 text-white rounded"> Generate Again
                !!
            </a>
        </div>
    </div>
@endsection
