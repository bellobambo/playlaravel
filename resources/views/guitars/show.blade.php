@extends('layout')


@section('content')
    <div class="max-w-7xl mx-auto p-6 lg:p-8">
        <div>
            <h3>
                {{ $guiter['name'] }}
            </h3>
            <ul>
                <li>
                    Made By : {{ $guiter['brand'] }}
                </li>
            </ul>
        </div>


    </div>
@endsection
