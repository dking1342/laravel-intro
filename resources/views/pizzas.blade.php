@extends("layouts.layout")
@section("content")
<div class="relative flex items-top justify-center min-h-screen sm:items-center py-4 sm:pt-0">
    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
        <h1>Pizzas</h1>
        @foreach($pizzas as $pizza)
            <div class="border-gray-200">
                <p>Index: {{ $loop->index }}</p>
                <p>Type: {{ $pizza["type"] }}</p>
                <p>Base: {{ $pizza["base"] }}</p>
                @if($loop->first)
                    <p>first loop!!</p>
                @endif
                @if($loop->last)
                    <p>last loop!!</p>
                @endif
            </div>
        @endforeach

        @for($i = 0; $i < count($pizzas);$i++)
            <p>{{ $pizzas[$i]["type"] }}</p>
        @endfor
    </div>
</div>
@endsection

