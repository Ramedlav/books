<?php

namespace App\Http\Controllers;
use App\Models\Book;
use App\Models\Order;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function show($id)
    {
        $book = Book::whereId($id)->first();
        return view('book',['book'=>$book]);
    }

    public function showAdmin($id)
    {
        $book = Book::whereId($id)->first();
        return view('admin-book',['book'=>$book]);
    }

    public function order(Request $request)
    {
        $this->validate($request, [
            'book_id' => 'required',
            'order_name' => 'required|max:60',
            'order_email' => 'required|email:rfc,dns',
            'order_phone' => 'required|numeric',
        ]);
        $book = Book::whereId($request->book_id)->update(['status' => 0]);


            $data = $request->all();
            $order = new Order;
            $order->fill($data);
            $order->save();

        return redirect('/welcome')->with('success', 'Book is added to order');;
    }

    public function add(Request $request)
    {
        $this->validate($request, [
            'book_img' => 'image',
            'book_name' => 'required|max:200',
            'book_description' => 'required|max:2000',
            'book_author' => 'required|max:200',
        ]);


        if( $request->hasFile('book_img')){
            $path = $request->file('book_img')->store('uploads', 'public');
        }else{
            $path = '/uploads/defoult.png';
        }

        $data = $request->all();
        if(!isset($data['status'])){$data['status']=1;}
        $data['book_img'] = "/storage/".$path;
        $order = new Book;
        $order->fill($data);
        $order->save();
        return redirect('/admin')->with('success', 'Book is added');
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'book_img' => 'image',
            'book_name' => 'required|max:200',
            'book_description' => 'required|max:2000',
            'book_author' => 'required|max:200',
        ]);

            $book = Book::findOrFail($request->id);
            $input = $request->all();
            $book->fill($input)->save();

        return view('admin-book',['book'=>$book, 'message'=>'book is update']);
    }



}
