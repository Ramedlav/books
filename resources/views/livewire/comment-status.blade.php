<div>
    @foreach($comments as $comment)
        @if ($comment->status == 2)
            <hr/>

            {{$comment->name}}<br/>
            {{$comment->comment}}<br/>
            <hr/>
            <button class="btn btn-success" wire:click="approve('{{$comment->id}}')">approve</button>
            <button class="btn btn-warning" wire:click="delete('{{$comment->id}}')">delete</button>
        @endif
    @endforeach
</div>
