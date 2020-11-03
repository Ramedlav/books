<x-app-layout >
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            admin Panel
        </h2>

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 leading-tight">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <p>
                    <div>
                        @livewire('book-add')
                    </div>
                </p>
                <p>
                    <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#approveComments" aria-expanded="false" aria-controls="collapseExample">
                        Approve comments
                    </button>
                </p>
                <div class="collapse" id="approveComments">
                    <div class="card card-body">
                        @livewire('comment-status')
                    </div>
                </div>

                <p>
                    <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#booksList" aria-expanded="false" aria-controls="collapseExample">
                        Books list
                    </button>
                </p>
                <div class="collapse" id="booksList">
                    <div class="card card-body">
                        @livewire('books-list-admin')
                    </div>
                </div>
                <p>
                    <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#ordersList" aria-expanded="false" aria-controls="collapseExample">
                        Orders
                    </button>
                </p>
                <div class="collapse" id="ordersList">
                    <div class="card card-body">
                        @livewire('admin-orders')
                    </div>
                </div>
                @if (count($errors) > 0)
                    <div class="alert alert-danger test-left">
                        <strong>wooops</strong> you have a bad text in the input:
                        <p>
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                        </p>
                    </div>
                @endif
                @if (Session::has('success'))
                    <div class="alert alert-success">
                        <ul>
                            <li>{!! Session::get('success') !!}</li>
                        </ul>
                    </div>
                @endif


            </div>
        </div>
    </div>
</x-app-layout>
