@extends('pemain.layout')

@section('content')
    <div class="container mt-4">
        <table class="table table-striped table-hover table-bordered">
            <thead class="table-dark">
                <tr>
                    <th class="text-center">No</th>
                    <th class="text-center">Nama</th>
                    <th class="text-center">No Punggung</th>
                    <th class="text-center">Posisi</th>
                </tr>    
            </thead>
            <tbody>
                @foreach($data_pemain as $index => $pemain)
                    <tr>
                        <td>{{ $pemain->id }}</td>
                        <td>{{ $pemain->nama_pemain }}</td>
                        <td>{{ number_format($pemain->no_punggung) }}</td>
                        <td>{{ $pemain->posisi }}</td>

                    </tr>
                @endforeach
            </tbody>   
        </table>
    </div>
@endsection