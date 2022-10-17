<form id="createForm">
    <div class="modal" tabindex="-1" role="dialog" id="createModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Post</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="createPost">Judul Post</label>
                        <input type="text" class="form-control" id="createPost" name="title">
                    </div>
                    <div class="form-group">
                        <label for="createCategory">Kategori Post</label>
                        <select name="category_id" id="createCategory" class="form-control">
                            <option value="" selected disabled>Pilih Kategori</option>
                            @foreach($categorys as $category)
                                <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="createBody">Isi Post</label>
                        <textarea id="createBody" name="body" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="createImage">Gambar Post</label>
                        <input type="file" id="createImage" name="image" class="form-control"
                            required data-allowed-file-extensions="jpg png"
                            data-max-file-size-preview="3M"
                            data-max-file-size="3M"
                        >
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="createSubmit">Save changes</button>
            </div>
            </div>
        </div>
    </div>
</form>
