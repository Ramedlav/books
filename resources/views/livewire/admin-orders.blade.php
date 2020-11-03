<div class="leading-tight">

    @foreach($orders as $order)
        <div class="modal-body">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-9">
                        <div class="col-8 col-sm-6">
                            <a href="admin/book/{{$order->book_id}}">book</a>
                        </div>
                        <div class="col-4 col-sm-6"><p>{{$order->order_name}}</p></div>
                        <div class="col-4 col-sm-6"><p>{{$order->order_email}}</p></div>
                        <div class="col-4 col-sm-6"><p>{{$order->order_phone}}</p></div>

                        <button wire:click="remove('{{$order->id}}','{{$order->book_id}}')" class="btn btn-warning">delete</button>

                        <hr/>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    <div class="container-fluid">
        <div class="row">
            {{$orders->links()}}
        </div>
    </div>
</div>
