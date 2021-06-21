<x-content>
    {{ $director->name }}
    <br><br>
    {{ $director->name }} has {{ $director->movies->count() }} movies
    <br><br>
    @if ($director->movies->count() > 0)
        <ol>
            @foreach ($director->movies as $movie)
                <li>{{ $movie->name }}</li>
                <form action="{{ route('deleteMovie', $movie->director) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="bg-blue-500">Delete</button>
                </form>
            @endforeach
        </ol>
    @endif
</x-content>






{{--@extends('layouts.app')--}}

{{--@section('content')--}}
{{--{{ $director->name }}--}}
{{--<br><br>--}}
{{--{{ $director->name }} has {{ $director->movies->count() }} movies--}}
{{--<br><br>--}}
{{--@if ($director->movies->count() > 0)--}}
{{--    <ol>--}}
{{--        @foreach ($director->movies as $movie)--}}
{{--            <li>{{ $movie->name }}</li>--}}
{{--        @endforeach--}}
{{--    </ol>--}}
{{--@endif--}}
{{--@endsection--}}
