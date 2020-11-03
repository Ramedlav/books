<div>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        Add book
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add the Book</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="POST" action="{{ route('bookAdd') }}" enctype = "multipart/form-data">
                    <div class="modal-body">
                        @csrf
                        <div>
                            <x-jet-label for="name" value="{{ __('Name') }}" />
                            <x-jet-input id="name" class="block mt-1 w-full" type="text" name="book_name" :value="old('name')" required autofocus />
                        </div>

                        <div>
                            <x-jet-label for="author" value="{{ __('Author') }}" />
                            <x-jet-input id="author" class="block mt-1 w-full" type="text" name="book_author" :value="old('email')" required />
                        </div>
                        <div>
                            <x-jet-label for="img" value="{{ __('image') }}" />
                            <x-jet-input id="img" class="block mt-1 w-full" type="file" name="book_img" />
                        </div>
                        <div class="form-group">
                            <label for="description">description</label>
                            <textarea type="text" name="book_description" class="form-control" id="description" placeholder="description"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="status">Order:</label>
                            <input id="status" type="checkbox" name="status" value="0">
                        </div>

                        <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Add</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>


                </form>
            </div>
        </div>
    </div>
</div>
