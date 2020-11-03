<?php

namespace App\Http\Livewire;
use App\Models\Order;
use App\Models\Book;
use Livewire\Component;
use Livewire\withPagination;
class AdminOrders extends Component
{
//    public $orders;

    use withPagination;

    public function mount()
    {
        $this->orders = Order::paginate(10);
    }

    public function render()
    {
        return view('livewire.admin-orders',[
            'orders'=>$this->orders,
        ]);
    }

    public function remove($id,$book_id)
    {
//        var_dump($book_id);
//        exit();
        $book = Book::whereId($book_id)->update(['status' => 1]);
        Order::whereId($id)->first()->delete();
        $this->orders = Order::paginate(10);
    }
}
