<div>
    <form>
        <div class="form-group">
            <label for="formGroupExampleInput">name</label>
            <input wire:model="name" type="text" class="form-control" id="formGroupExampleInput" placeholder="name">

        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">comment</label>
            <textarea wire:model="comment" type="text" class="form-control" id="formGroupExampleInput2" placeholder="comment"></textarea>
        </div>
        <button wire:click="save" class="btn btn-primary">send</button>
    </form>
</div>
