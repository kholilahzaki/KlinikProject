<a href="/Event/create" class="btn btn-primary">Tambah Acara</a>

@foreach($Event as $e)
<tr>
    <td>{{$e->tanggal}}</td>
    <td>{{$e->nama}}</td>
    <td>{{$e->lokasi}}</td>

@endforeach
</tr>