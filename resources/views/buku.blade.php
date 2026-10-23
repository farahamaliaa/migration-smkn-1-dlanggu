<div>
    <ul>
        @foreach ($buku as $item)
            <li>{{ $item['judul'] }} - {{ $item['penulis'] }}</li>
        @endforeach
    </ul>
</div>
