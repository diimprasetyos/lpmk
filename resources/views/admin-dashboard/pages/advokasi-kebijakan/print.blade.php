@extends('admin-dashboard.layouts.generate-pdf')

@section('title')
    Data Advokasi Kebijakan
@endsection

@section('content')
    <center>
        <h2>Data Advokasi Kebijakan</h2>
    </center>
    <hr /><br>
    <table>
        <thead>
            <tr>
                <th class="cell-fit">No</th>
                <th>Kebijakan Didukung</th>
                <th>Strategi Advokasi</th>
                <th>Pihak Terkait</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($advokasiKebijakan as $item)
                <tr>
                    <td style="text-align: center;">{{ $loop->iteration }}</td>
                    <td>{{ $item->kebijakan_didukung }}</td>
                    <td>{{ $item->strategi_advokasi }}</td>
                    <td>{{ $item->pihak_terkait }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
