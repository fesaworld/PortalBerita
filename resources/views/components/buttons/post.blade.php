@can('edit_post')
    <button type="button" onclick="edit({{ $id }})" class="btn btn-secondary">Edit</button>
@endcan
@can('delete_post')
    <button type="button" onclick="deleteData({{ $id }})" class="btn btn-danger">Delete</button>
@endcan
