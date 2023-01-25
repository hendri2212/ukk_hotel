<div class="d-flex mt-3">
    <?php $query = $conn->query("SELECT * FROM room");
    while($data = mysqli_fetch_object($query)){ ?>
    <div class="card" style="width: 18rem; margin-right: 15px">
        <img src="./asset/images/room-01.jpeg" class="card-img-top" alt="Room One">
        <div class="card-body">
            <div class="d-flex align-items-center mb-2">
                <h5 class="card-title mb-0"><?= $data->name_room ?></h5>
                <img src="./asset/images/star.svg" alt="star" width="20px">
                <img src="./asset/images/star.svg" alt="star" width="20px">
                <img src="./asset/images/star.svg" alt="star" width="20px">
            </div>
            <p class="card-text">
                <ul>
                    <li>AC</li>
                    <li>Wifi</li>
                    <li>Breakfast</li>
                </ul>
            </p>
            <a href="#" class="btn btn-primary">Book Now</a>
        </div>
    </div>
    <?php } ?>
</div>