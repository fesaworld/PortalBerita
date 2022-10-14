<form id="createForm">
    <div class="modal" tabindex="-1" role="dialog" id="createModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">Tambah Produk</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <div class="form-group">
                <label for="createName">Nama Kategori</label>
                <input type="text" class="form-control" id="createName" name="name">
            </div>
            <div class="form-group">
                <label for="createName">Kategori Detail</label>
                <input type="text" class="form-control" id="createName" name="detail">
            </div>
            <div class="form-group">
                <label for="createPrice">Slug</label>
                <input type="text" class="form-control" id="createPrice" name="slug">
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
