<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>testing</title>
</head>

<body>
    <h1>Tutorial Laravel - Ayo Ngoding</h1>
    <br>
    <p>Mata Pelajaran</p>
    <ul>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Meta</th>
                </tr>
            </thead>
            <tbody>

                <?php $no = 1; ?>
                @foreach ($historyIns as $riwayat)
                <tr>
                    <th scope="row">{{ $no }}</th>
                    <td>{{ $riwayat->type }}</td>
                    <td>{{ $riwayat->amount }}</td>
                    <td>{{ $riwayat->meta['description'] ?? 'No description' }}</td>
                </tr>
                <?php $no++; ?>
                @endforeach
            </tbody>
        </table>

    </ul>
</body>

</html>