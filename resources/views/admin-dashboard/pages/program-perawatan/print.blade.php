@extends('admin-dashboard.layouts.generate-pdf')

@section('title')
    Data Program Perawatan
@endsection

@section('content')
    <center>
        <h2>Data Program Perawatan</h2>
    </center>
    <hr /><br>
    <table>
        <thead>
            <tr>
                <th class="cell-fit">No</th>
                <th>Judul</th>
                <th>Deskripsi</th>
                <th>Tanggal</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($programPerawatan as $item)
                <tr>
                    <td style="text-align: center;">{{ $loop->iteration }}</td>
                    <td>{{ $item->judul }}</td>
                    <td>{{ $item->deskripsi }}</td>
                    <td style="width: 10%;">{{ $item->tanggal }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
