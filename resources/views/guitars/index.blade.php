@extends('layout')


@section('content')
    <div class="max-w-7xl mx-auto p-6 lg:p-8">
        @if (count($guiters) > 0)
            @foreach ($guiters as $guiter)
                <div>
                    <h3>
                        <a href="{{ route('guitars.show', ['guitar' => $guiter['id']]) }}">{{ $guiter['name'] }}</a>
                    </h3>

                    <ul>
                        <li>
                            Made By : {{ $guiter['brand'] }}
                        </li>
                        <li>
                           Year Made  : {{ $guiter['year_name'] }}
                        </li>
                    </ul>
                </div>
            @endforeach
        @else
            <h2>No Guiters To Display</h2>
        @endif
        <div>
            User Input : {{ $userInput }}
        </div>
    </div>
@endsection
