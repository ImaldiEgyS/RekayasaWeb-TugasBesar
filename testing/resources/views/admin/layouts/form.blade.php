<!-- {!!
    Form::model($model, ['route' => ['admin.store']])
!!} -->

{!! Form::model($model, [
    'route' => $model->exists ? ['admin.update', $model->id] : 'admin.store',
    'method' => $model->exists ? 'PUT' : 'POST'
]) !!}

    <table>
        <tr>
            <td>
                <div class="form-group">
                    <label for="" class="control-label">Katalog</label>
                    {!! Form::text('katalog', null, ['class' => 'form-control', 'id' => 'katalog']) !!}
                </div>
            </td>
            <td>
                <div class="form-group">
                    <label for="" class="control-label">Merek</label>
                    {!! Form::text('merek', null, ['class' => 'form-control', 'id' => 'merek']) !!}
                </div>
            </td>
            <td>
                <div class="form-group">
                    <label for="" class="control-label">Seri</label>
                    {!! Form::text('seri', null, ['class' => 'form-control', 'id' => 'seri']) !!}
                </div>
            </td>
        </tr>
        <tr>
            <td colspan="3">
                <div class="form-group">
                    <label for="" class="control-label">Socket</label>
                    {!! Form::text('socket', null, ['class' => 'form-control', 'id' => 'socket']) !!}
                </div>
            </td>
        </tr>
        <tr>
            <td colspan="3">
                <div class="form-group">
                    <label for="" class="control-label">Spesifikasi</label>
                    {!! Form::text('spek', null, ['class' => 'form-control', 'id' => 'spec']) !!}
                </div>
            </td>
        </tr>
        <tr>
            <td colspan="3">
                <div class="form-group">
                    <label for="" class="control-label">Harga</label>
                    {!! Form::text('harga', null, ['class' => 'form-control', 'id' => 'harga']) !!}
                </div>
            </td>
        </tr>
        <tr>
            <td colspan="3">
                <div class="form-group">
                    <label for="" class="control-label">Gambar</label>
                    {!! Form::text('gambar', null, ['class' => 'form-control', 'id' => 'gambar']) !!}
                </div>
            </td>
        </tr>
    </table>

    <style>
        th, td {
            padding: 5px;
        }
    </style>

{!! Form::close() !!}