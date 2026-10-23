<div>
    <h1>Daftar Nilai SIswa</h1>
    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama siswa</th>
                <th>Nilai</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($nilaiSiswa as $index => $item)
                <tr>
                    <td>{{ ++$index }}</td>
                    <td>{{ $item['nama'] }}</td>
                    <td>{{ $item['nilai'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
