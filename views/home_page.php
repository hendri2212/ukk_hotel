<form action="?page=transaction" method="post">
    <div class="row my-3 align-items-end">
        <div class="col">
            <div class="form-group">
                <label for="checkin">Tanggal Cek In</label>
                <input type="date" name="date_checkin" id="checkin" class="form-control">
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                <label for="checkout">Tanggal Cek Out</label>
                <input type="date" name="date_checkout" id="checkout" class="form-control">
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                <label for="total">Jumlah Kamar</label>
                <input type="number" name="total" id="total" class="form-control">
            </div>
        </div>
        <div class="col">
            <input type="submit" value="Pesan" class="btn btn-primary">
        </div>
    </div>
</form>