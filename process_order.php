<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $camera = $_POST['camera'];
    $duration = $_POST['duration'];
    $name = $_POST['name'];
    $email = $_POST['email'];

    $cameraPrices = [
        "camera1" => 0,
        "Canon EOS R5" => 10000,
        "Nikon Z7 II" => 15000,
        "Sony Alpha a7R IV" => 20000,
        "Fujifilm X-T4" => 12000,
        "Panasonic Lumix S1R" => 18000,
        "Olympus OM-D E-M1 Mark III" => 14000,
    ];

    $pricePerHour = $cameraPrices[$camera];
    $totalPrice = $pricePerHour * $duration * 24;

    $fp = fopen("orders.txt", "a+");
    fputs($fp, "$camera | $duration | $name | $email | $totalPrice\n");
    fclose($fp);

    echo "Terima kasih atas pesanan Anda!";
}
?>
