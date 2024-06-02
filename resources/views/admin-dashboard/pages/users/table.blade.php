<table class="table table-bordered table-striped">
  <thead>
    <tr>
      <th>name</th>
      <th>email</th>
      <th>email verified at</th>
      <th>level</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($users as $item)
      <tr>
        <td>{{ $item->name }}</td>
        <td>{{ $item->email }}</td>
        <td>{{ $item->email_verified_at }}</td>
        <td>{{ $item->level }}</td>
        {{-- <td>
          <a href="{{ url('/admin/program-aspirasi/' . $item->id . '/edit') }}" class="btn btn-warning btn-sm mx-2 my-1">Edit</a>
          <a href="{{ url('/admin/program-aspirasi/' . $item->id . '/delete') }}" class="btn btn-danger btn-sm mx-2 my-1"
            onclick="return confirm('Apakah anda yakin?')">Delete</a>
        </td> --}}
      </tr>
    @endforeach
  </tbody>
</table>
