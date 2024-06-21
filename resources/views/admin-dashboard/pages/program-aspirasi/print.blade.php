@extends('admin-dashboard.layouts.generate-pdf')

@section('title')
    Data Program Aspirasi
@endsection

@section('content')
    <center>
        <h2>Data Program Aspirasi</h2>
    </center>
    <hr /><br>
    <table>
        <thead>
            <tr>
                <th class="cell-fit">No</th>
                <th>Judul</th>
                <th>Prioritas</th>
                <th>RT</th>
                <th>RW</th>
                <th>Deskripsi</th>
                <th>Perantara</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($programAspirasi as $item)
                <tr>
                    <td style="text-align: center;">{{ $loop->iteration }}</td>
                    <td>{{ $item->detailProgramAspirasi->title }}</td>
                    <td>{{ $item->detailProgramAspirasi->prioritas }}</td>
                    <td>{{ $item->detailProgramAspirasi->rt }}</td>
                    <td>{{ $item->detailProgramAspirasi->rw }}</td>
                    <td>{{ $item->detailProgramAspirasi->deskripsi }}</td>
                    <td>{{ $item->perantara }}</td>
                    <td>{{ $item->status }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
