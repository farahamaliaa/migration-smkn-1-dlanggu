<div>
    <h1>Belajar Pecabangan Pada View</h1>
    <p>Nilai: {{ $nilai }}</p>
    <p>Status:
        @if($nilai >= 75)
            <span>Kamu Lulus</span>
        @else
            <span>Kamu Tidak Lulus</span>
        @endif
    </p>
</div>
