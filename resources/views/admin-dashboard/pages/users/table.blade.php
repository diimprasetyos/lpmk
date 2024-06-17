<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>name</th>
            <th>email</th>
            <th>email verified at</th>
            <th>level</th>
            <th>action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $item)
            <tr>
                <td>{{ $item->name }}</td>
                <td>{{ $item->email }}</td>
                <td>{{ $item->email_verified_at }}</td>
                <td>{{ $item->level }}</td>
                <td>
                    <a href="#" class="btn btn-warning btn-sm mx-2 my-1">Edit</a>
                    <button type="button" class="btn btn-danger btn-sm mx-2 my-1" data-toggle="modal"
                        data-target="#deleteModal{{ $item->id }}">
                        Delete
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="deleteModal{{ $item->id }}" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalCenterTitle">
                                        Delete Confirmation</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    Apakah anda yakin akan menghapus data
                                    '{{ $item->name }}'?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <a href="#" class="btn btn-danger">Delete</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
