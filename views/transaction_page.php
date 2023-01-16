<form action="controller/transaction_controller.php" method="POST">
    <div class="row my-3 align-items-end">
        <div class="col">
            <div class="form-group">
                <label for="checkin">Tanggal Cek In</label>
                <input type="date" name="date_checkin" id="checkin" class="form-control" value="<?= $_POST['date_checkin'] ?>">
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                <label for="checkout">Tanggal Cek Out</label>
                <input type="date" name="date_checkout" id="checkout" class="form-control" value="<?= $_POST['date_checkout'] ?>">
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                <label for="total">Jumlah Kamar</label>
                <input type="number" name="total" id="total" class="form-control" value="<?= $_POST['total'] ?>">
            </div>
        </div>
    </div>
    <h3>Form Pemesanan</h3>
    <div class="col-5">
        <div class="mb-3 row">
            <label for="order" class="col-4">Nama Pemesan</label>
            <div class="col-8">
                <input type="text" name="name_order" id="order" class="form-control">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="email" class="col-4">Email</label>
            <div class="col-8">
                <input type="text" name="email" id="email" class="form-control">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="handphone" class="col-4">No Handphone</label>
            <div class="col-8">
                <input type="text" name="handphone" id="handphone" class="form-control">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="customer" class="col-4">Nama Tamu</label>
            <div class="col-8">
                <input type="text" name="customer_name" id="customer" class="form-control">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="room" class="col-4">Tipe Kamar</label>
            <div class="col-8">
                <select name="room_id" id="room" class="form-control">
                    <option value=""></option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <input type="submit" name="submit" value="Pesan" class="btn btn-primary">
            </div>
        </div>
    </div>
</form>