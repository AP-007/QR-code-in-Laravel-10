@extends('layouts.app')

@section('contents')
    <form action="{{ route('qrcode-generator') }}" method="post" class="w-full max-w-md">
        @csrf
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="input-text">
                    Enter Your Text Here <span class="text-red-700">*</span>
                </label>
                <textarea rows="4" name="text"
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                    id="input-text" type="text" placeholder="Enter text here" required></textarea>
            </div>
        </div>
        <input type="hidden" name="phone" value="">
        <input type="hidden" name="email" value="">

        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3 flex justify-center">
                <button
                    class=" bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                    type="submit">
                    Generate QR Code 
                </button>
            </div>
        </div>
    </form>
@endsection
