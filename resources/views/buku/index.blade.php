<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Buku</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    
</head>
<body>
    <h3><a href="/buku/tambah">Tambah Buku</a></h3>
    <table>
        <tr>
            <th>Penulis</th>
            <th>Judu</th>
            <th>Kota</th>
            <th>Penerbit</th>
            <th>Tahun</th>
            <th>Action</th>
        </tr>
        @foreach( $buku as $buku)
        <tr>    
            <td>{{ $buku->penulis }}</td>
            <td>{{ $buku->judul }}</td>
            <td>{{ $buku->kota }}</td>
            <td>{{ $buku->penerbit }}</td>
            <td>{{ $buku->tahun }}</td>
            <td>
                <a href="/buku/edit/{{ $buku->id }}">Edit</a> 
                |
                <a href="/buku/hapus/{{ $buku->id }}">Hapus</a>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>