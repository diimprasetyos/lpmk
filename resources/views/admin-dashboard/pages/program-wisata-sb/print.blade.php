@extends('admin-dashboard.layouts.generate-pdf')

@section('title')
    Data Program Wisata/Studi Banding
@endsection

@section('content')
    <center>
        <h2>Data Program Wisata/Studi Banding</h2>
    </center>
    <hr /><br>
    <table>
        <thead>
            <tr>
                <th class="cell-fit">No</th>
                <th>Judul</th>
                <th>Deskripsi</th>
                <th>Jenis</th>
                <th>Tanggal</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($programWisataSB as $item)
                <tr>
                    <td style="text-align: center;">{{ $loop->iteration }}</td>
                    <td>{{ $item->judul }}</td>
                    <td>{{ $item->deskripsi }}</td>
                    <td>{{ $item->jenis }}</td>
                    <td style="width: 10%;">{{ $item->tanggal }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
