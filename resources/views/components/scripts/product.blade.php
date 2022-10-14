<script>
    $(function () {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            }
        });
        @if(Auth::user()->getRoleNames()[0] == 'User')
            $('#table').DataTable({
                order: [],
                lengthMenu: [[10, 25, 50, 100, -1], ['Sepuluh', 'Salawe', 'lima puluh', 'cepe', 'kabeh']],
                filter: true,
                processing: true,
                responsive: true,
                serverSide: true,
                ajax: {
                    url: '/product/kumahaaingwe'
                },
                "columns":
                [
                    { data: 'DT_RowIndex', orderable: false, searchable: false},
                    { data: 'name', name:'products.name'},
                    { data: 'product_category', name:'product_categories.name'},
                    { data: 'price', name:'products.price'},
                ]
            });
        @else
            $('#table').DataTable({
                order: [],
                lengthMenu: [[10, 25, 50, 100, -1], ['Sepuluh', 'Salawe', 'lima puluh', 'cepe', 'kabeh']],
                filter: true,
                processing: true,
                responsive: true,
                serverSide: true,
                ajax: {
                    url: '/product/kumahaaingwe'
                },
                "columns":
                [
                    { data: 'DT_RowIndex', orderable: false, searchable: false},
                    { data: 'name', name:'products.name'},
                    { data: 'product_category', name:'product_categories.name'},
                    { data: 'price', name:'products.price'},
                    { data: 'action', orderable: false, searchable: false},
                ]
            });
        @endif
    });
</script>
