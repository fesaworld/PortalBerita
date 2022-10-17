<form id="editForm">
    <div class="modal" tabindex="-1" role="dialog" id="editModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Post</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="title">Judul Post</label>
                        <input type="text" class="form-control" id="title" name="title">
                    </div>
                    <div class="form-group">
                        <label for="category_id">Kategori Post</label>
                        <select name="category_id" id="category_id" class="form-control">
                            @foreach($categorys as $category)
                                <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="body">Isi Post</label>
                        <textarea id="body" name="body" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="image">Gambar Post</label>
                        <input type="file" id="image" name="image" class="form-control"
                            required data-allowed-file-extensions="jpg png"
                            data-max-file-size-preview="3M"
                            data-max-file-size="3M"
                        >
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="editSubmit">Save changes</button>
                </div>
            </div>
        </div>
    </div>
</form>
