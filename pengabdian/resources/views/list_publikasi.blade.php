<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Jabatan</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            height: 100vh;
            background: linear-gradient(orange, white);
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            background-attachment: fixed;
        }

        header {
            background-color: orange;
            padding: 10px;
            border-radius: 10px;
            text-align: center;
            margin-bottom: 20px;
        }

        header h1 {
            color: white;
        }

        table {
            border-collapse: collapse;
            width: 80%;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: orange;
            color: white;
        }

        a {
            color: blue;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        p {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <header>
        <h1>LIST JURNAL PENGABDIAN MASYARAKAT</h1>
    </header>

    @if(count($publikasiList) > 0)
        <table>
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>NIP</th>
                    <th>Pangkat</th>
                    <th>Jabatan</th>
                    <th>Unit Kerja</th>
                    <th>Judul</th>
                    <th>Jurnal Pengabdian</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                </tr>
            </thead>
            <tbody>
                @foreach($publikasiList as $publikasi)
                    <tr>
                        <td>{{ $publikasi->nama }}</td>
                        <td>{{ $publikasi->nip }}</td>
                        <td>{{ $publikasi->pangkat }}</td>
                        <td>{{ $publikasi->jabatan }}</td>
                        <td>{{ $publikasi->unit_kerja }}</td>
                        <td>{{ $publikasi->judul }}</td>
                        <td>
                            <a href="{{ asset('storage/' . $publikasi->file_publikasi) }}" target="_blank">
                                Lihat Publikasi Jurnal
                            </a>
                        </td>
                        <td>{{ $publikasi->created_at }}</td>
                        <td>{{ $publikasi->updated_at }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>Tidak ada data</p>
    @endif
</body>
</html>
