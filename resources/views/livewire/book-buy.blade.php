<div>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal{{$book->id}}">
        Order
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal{{$book->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel{{$book->id}}">Buy the book</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
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
                <form method="POST" action="{{ route('order') }}">
                <div class="modal-body">
                        @csrf
                        <div>
                            <input name="book_id" id="{{$book->id}}" type="hidden" value="{{$book->id}}"><br/>
                            <x-jet-label for="name" value="{{ __('Name') }}" />
                            <x-jet-input id="name" class="block mt-1 w-full" type="text" name="order_name" :value="old('name')" required autofocus />
                        </div>
                        <div>
                            <x-jet-label for="email" value="{{ __('Email') }}" />
                            <x-jet-input id="email" class="block mt-1 w-full" type="email" name="order_email" :value="old('email')" required />

                        </div>
                        <div>
                            <x-jet-label for="phone" value="{{ __('phone') }}" />
                            <x-jet-input id="phone" class="block mt-1 w-full" type="" name="order_phone" :value="old('phone')" required />
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Buy</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>

                </form>
            </div>
        </div>
    </div>
</div>
