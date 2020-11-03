<div class="leading-tight">

    @foreach($books as $book)
        @if($book->status != '0')
        <div class="modal-body">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-9">
                        <div class="col-8 col-sm-6">
                            <img class="img-fluid" src="{{ asset($book->book_img) }}" style="width: 100px; height: 100px" /><br/>
                            <a href="book/{{$book->id}}">{{$book->book_name}}</a>
                        </div>
                        <div class="col-4 col-sm-6">{{$book->book_description}}</div>
                        @livewire('book-buy',['book'=>$book], key($book->id))
                        <hr/>
                    </div>
                </div>
            </div>
        </div>
        @endif
    @endforeach
        <div class="container-fluid">
            <div class="row">
                {{$books->links()}}
            </div>
        </div>
</div>
