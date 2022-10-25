<?php

echo "<pre>"; print_r($_POST); echo "</pre>";

$strQuery = "
    INSERT INTO customer(store_id, first_name, last_name, email, address_id, active)
    VALUES ()
";
