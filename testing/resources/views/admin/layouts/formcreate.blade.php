<form action="{{ route('admin.store') }}" method="POST" enctype="multipart/form-data">
    <table>
    @csrf
        <tr>
            <td>
                <div class="form-group">
                    <label for="katalog" class="control-label">Katalog</label>
                    <input type="text" class="form-control" id="katalog" name="katalog" required>
                </div>
            </td>
            <td>
                <div class="form-group">
                    <label for="merek" class="control-label">Merek</label>
                    <input type="text" class="form-control" id="merek" name="merek" required>
                </div>
            </td>
            <td>
                <div class="form-group">
                    <label for="seri" class="control-label">Seri</label>
                    <input type="text" class="form-control" id="seri" name="seri" required>
                </div>
            </td>
        </tr>
        <tr>
            <td colspan="3">
                <div class="form-group">
                    <label for="socket" class="control-label">Socket</label>
                    <input type="text" class="form-control" id="socket" name="socket" required>
                </div>
            </td>
        </tr>
        <tr>
            <td colspan="3">
                <div class="form-group">
                    <label for="spek" class="control-label">Spesifikasi</label>
                    <input type="text" class="form-control" id="spek" name="spek">
                </div>
            </td>
        </tr>
        <tr>
            <td colspan="3">
                <div class="form-group">
                    <label for="harga" class="control-label">Harga</label>
                    <input type="text" class="form-control" id="harga" name="harga">
                </div>
            </td>
        </tr>
        <tr>
            <td colspan="3">
                <div class="form-group">
                    <label for="gambar" class="control-label"></label>
                    <!-- <input type="file" id="gambar" name="gambar"> -->
                    <input type="file" id="gambar" name="gambar">
                </div>
            </td>
        </tr>
    </table>
</form>

<style>
    th, td {
        padding: 5px;
    }
</style>
