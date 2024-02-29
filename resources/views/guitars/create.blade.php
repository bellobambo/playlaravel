@extends('layout')


@section('content')
    <div class="max-w-7xl mx-auto p-6 lg:p-8 flex justify-center items-center flex-col">
        <form action="{{ route('guitars.store') }}" method="POST" class="bg-white border-1 w-full md:w-3/4 lg:w-1/2"
            style="font-family: Arial, sans-serif; color: #333; border: 2px solid #333; border-radius: 0.25rem; padding: 1em;">
            @csrf
            <div class="mb-4">
                <label for="guitar-name" class="block mb-2">Guitar Name</label>
                <input type="text" class="text-lg border-1" id='guitar-name' value="{{old('guitar-name')}}" name="guitar-name"
                    style="padding: 0.75em; border-radius: 0.25rem; width: 100%;">

                @error('guitar-name')
                    <div class="form-error " >
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="brand" class="block mb-2">Brand</label>
                <input type="text" class="text-lg border-1" id='brand' name="brand" value="{{old('brand')}}"
                    style="padding: 0.75em; border-radius: 0.25rem; width: 100%;">
                @error('brand')
                    <div class="form-error " >
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="year" class="block mb-2">Year</label>
                <input type="text" class="text-lg border-1" id='year' name="year" value="{{old('year')}}"
                    style="padding: 0.75em; border-radius: 0.25rem; width: 100%;">

                @error('year')
                    <div class="form-error " >
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
