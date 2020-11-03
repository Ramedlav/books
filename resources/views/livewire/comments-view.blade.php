<div>

    @foreach($comments as $comment)
        @if ($comment->status == 1)
            <hr/>
            {{$comment->name}}<br/>
            {{$comment->comment}}<br/>
            <hr/>
        @endif
    @endforeach
</div>
