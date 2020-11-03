<x-app-layout >
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{$book->book_name}}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 leading-tight">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                @if(isset($message))
                    <div class="alert alert-success">{{$message}}</div>
                @endif
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{ asset($book->book_img) }}" style="width: 300px; height: 300px" />
                    <div class="card-body">
                        <p class="card-text">
                        <hr />
                        <h5 >{{$book->book_name}}</h5>
                        <hr />
                        {{$book->book_author}}
                        <hr />
                        {{$book->book_description}}
                        <hr />
                        @livewire('edit-form',['book'=>$book], key($book->id))
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
