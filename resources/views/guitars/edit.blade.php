@extends('layout')

@section('content')
    <div class="max-w-7xl mx-auto p-6 lg:p-8 flex justify-center items-center flex-col">
        <form action="{{ route('guitars.update', ['guitar' => $guitar]) }}" method="POST" class="bg-white border-1 w-full md:w-3/4 lg:w-1/2">

            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="name" class="block mb-2">Guitar Name</label>
                <input type="text" class="text-lg border-1" id="name" value="{{ $guitar->name }}" name="name"
                    style="padding: 0.75em; border-radius: 0.25rem; width: 100%;">

                @error('name')
                    <div class="form-error">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="brand" class="block mb-2">Brand</label>
                <input type="text" class="text-lg border-1" id="brand" name="brand" value="{{ $guitar->brand }}"
                    style="padding: 0.75em; border-radius: 0.25rem; width: 100%;">
                @error('brand')
                    <div class="form-error">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="year_name" class="block mb-2">Year</label>
                <input type="text" class="text-lg border-1" id="year_name" name="year_name" value="{{ $guitar->year_name }}"
                    style="padding: 0.75em; border-radius: 0.25rem; width: 100%;">

                @error('year_name')
                    <div class="form-error">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div>
                <button class="border-1" type="submit"
                    style="padding: 0.75em 1.5em; background-color: #007BFF; color: #fff; border: none; border-radius: 0.25rem; cursor: pointer; transition: background-color 0.3s ease;">Submit</button>
            </div>
        </form>
    </div>
@endsection
