@extends("layouts.layout")
@section("content")
<div class="relative flex items-top justify-center min-h-screen sm:items-center py-4 sm:pt-0">
    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
        <h1 class="title">Pizza List</h1>

        @foreach($pizzas as $pizza)
            <div class="border-gray-200">
                <a href="{{ url('/pizzas/'.$pizza->id ) }}">
                    {{ $pizza->name }} - {{ $pizza->type }} - {{ $pizza->base }} - {{ $pizza->price }}

                </a>
            </div>
        @endforeach

    </div>
</div>
@endsection

