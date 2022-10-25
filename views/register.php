<?php
    require_once __DIR__ . '/../src/database.php';
?>

<div class="container d-flex align-items-center justify-content-center min-vh-100">
    <form action="/" method="post" class="text-center">
        <code>
            <h2 class="text-center fw-bold font-monospace">Sign up</h2>
        </code>

        <div class="row my-2">
            <div class="col">
                <input type="text" name="first_name" id="first_name" class="form-control" placeholder="First name" aria-label="First name">
            </div>
            <div class="col">
                <input type="text"  name="last_name" id="last_name" class="form-control" placeholder="Last name" aria-label="Last name">
            </div>
        </div>
        <div class="row my-2">
            <div class="col">
                <input type="email" name="email" id="email" class="form-control" placeholder="Email" aria-label="Email">
            </div>
        </div>

        <div class="row my-2">
            <div class="col">
                <select name="country" id="country" class="form-control">
                    <option value="NULL" selected>Select country</option>
                    <?php
                        $arrCountry = getData("SELECT country_id, country from country", $conn);
                        foreach ( $arrCountry as $country => $value ) {
                            echo sprintf("<option value=\"%s\">%s</option>", $value['country_id'], $value['country']);
                        }
                    ?>
                </select>
            </div>
            <div class="col">
                <select name="city" id="city" class="form-control">
                    <option value="NULL" selected>Select city</option>
                    <?php
                        $arrCity = getData("SELECT city_id, city from city", $conn);
                        foreach ( $arrCity as $city => $value ) {
                            echo sprintf("<option value=\"%s\">%s</option>", $value['city_id'], $value['city']);
                        }
                    ?>
                </select>
            </div>
        </div>

        <div class="row my-2">
            <div class="col">
                <select name="store" id="store" class="form-control">
                    <option value="NULL" selected>Select store</option>
                    <?php
                        $arrStore = getData(
                            "SELECT store.store_id, address.address
                             FROM store
                             INNER JOIN address
                             ON address.address_id = store.address_id", $conn);
                        foreach ( $arrStore as $store => $value ) {
                            echo sprintf("<option value=\"%s\">%s</option>", $value['store_id'], $value['address']);
                        }
                    ?>
                </select>
            </div>
        </div>

        <button type="submit" class="btn btn-outline-primary">Sign up</button>
    </form>
</div>