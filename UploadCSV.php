<?php
include 'config.php';
function readcsv()
{

    if (($handle = fopen("dealix_affiliate_inventory.csv", "r")) !== FALSE) {
        while (($row = fgetcsv($handle)) !== FALSE) {
            global $conn;
            $sql1 = 'CREATE TABLE IF NOT EXISTS `vehicle_listings` (
                `used_dealer_vehicle_live_id` varchar(27) DEFAULT NULL,
                `vin` varchar(17) DEFAULT NULL,
                `stock` varchar(9) DEFAULT NULL,
                `make` varchar(13) DEFAULT NULL,
                `model` varchar(21) DEFAULT NULL,
                `trim` varchar(42) DEFAULT NULL,
                `year` varchar(4) DEFAULT NULL,
                `amenities` varchar(1282) DEFAULT NULL,
                `price` varchar(5) DEFAULT NULL,
                `miles` varchar(6) DEFAULT NULL,
                `exterior` varchar(25) DEFAULT NULL,
                `description` varchar(1000) DEFAULT NULL,
                `certified` varchar(9) DEFAULT NULL,
                `transmission` varchar(12) DEFAULT NULL,
                `body_type` varchar(23) DEFAULT NULL,
                `speeds` varchar(6) DEFAULT NULL,
                `doors` varchar(5) DEFAULT NULL,
                `cylinders` varchar(9) DEFAULT NULL,
                `engine` varchar(28) DEFAULT NULL,
                `displacement` varchar(12) DEFAULT NULL,
                `zip` varchar(5) DEFAULT NULL,
                `phone` varchar(5) DEFAULT NULL,
                `imagefile` varchar(824) DEFAULT NULL,
                `customer_number` varchar(15) DEFAULT NULL,
                `Distance` varchar(8) DEFAULT NULL
              ) ENGINE=InnoDB DEFAULT CHARSET=utf8';
            $run1 = mysqli_query($conn, $sql1);
            $sql2 = ' INSERT INTO `vehicle_listings` (`used_dealer_vehicle_live_id`,`vin`,`stock`,`make`,`model`,`trim`,`year`,`amenities`,`price`,`miles`,`exterior`,`description`,`certified`,`transmission`,`body_type`,`speeds`,`doors`,`cylinders`,`engine`,`displacement`,`zip`,`phone`,`imagefile`,`customer_number`,`Distance`)
             VALUES ("' . $row[0] . '","' . $row[1] . '","' . $row[2] . '","' . $row[3] . '","' . $row[4] . '","' . $row[5] . '","' . $row[6] . '","' . $row[7] . '","' . $row[8] . '","' . $row[9] . '","' . $row[10] . '","' . $row[11] . '","' . $row[12] . '","' . $row[13] . '","' . $row[14] . '","' . $row[15] . '","' . $row[16] . '","' . $row[17] . '","' . $row[18] . '","' . $row[19] . '","' . $row[20] . '","' . $row[21] . '","' . $row[22] . '","' . $row[23] . '","' . $row[24] . '") ';
            $run2 = mysqli_query($conn, $sql2);
        }
        fclose($handle);
    }
}
?>
