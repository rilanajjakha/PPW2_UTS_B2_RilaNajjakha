<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
           rel="stylesheet">
</head>
<body>
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
</body>
</html>