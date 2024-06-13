<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Penilaian</title>

    <style>
        body {
            box-sizing: border-box;
            font-size: 16px;
        }
        h1 {
            text-align: center;
        }
        table {
            box-sizing: border-box;
            border: 2px solid black;
            border-collapse: collapse;
            width: 100%;
        }
        thead {
            background-color: green;
            color: white;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            text-align: left;
            padding: 10px;
        }
        .center {
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Data Penilaian</h1>
    <table align="center">
        <thead>
            <tr>
                <th class="center">No</th>
                <th>NIM</th>
                                <th>Nama </th>
                                <th>Kode Matkul</th>
                                <th>Nilai 1</th>
                                <th>Nilai 2</th>
                                <th>Kuis 1</th>
                                <th>Kuis 2</th>
                                <th>UTS</th>
                                <th>UAS</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($penilaians as $item=>$row)
                <tr>
                    <td class="center">{{ $item+1 }}</td>
                    <td>{{ $row->nim}}</td>
                                    <td>{{ $row->nama}}</td>
                                    <td>{{ $row->kd_matkul }}</td>
                                    <td>{{ $row->nilai1 }}</td>
                                    <td>{{ $row->nilai2 }}</td>
                                    <td>{{ $row->kuis1 }}</td>
                                    <td>{{ $row->kuis2 }}</td>
                                    <td>{{ $row->uts }}</td>
                                    <td>{{ $row->uas }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>