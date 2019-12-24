<center>
    <h3>
        {{ $model->katalog }} - {{ $model->merek }}
    </h3>
    
    <img src="{{ asset('img') }}/{{ $model->gambar }}" style="height:200px;width:200px;">

    <h3>{{ $model->seri }}</h3>
    <h5>Rp {{ number_format($model->harga, 2, ',', '.') }}-</h5>
</center>

<table class="table table-hover">
    <tr>
        <th>Socket</th>
        <th>Spesifikasi</th>
    </tr>
    <tr>
        <td>{{ $model->socket }}</td>
        <td>{{ $model->spek }}</td>
    </tr>
</table>