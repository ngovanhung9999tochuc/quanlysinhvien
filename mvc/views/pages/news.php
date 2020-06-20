<h2>

<?php

    echo $data["Number"];
    echo $data["Mau"];

?>
</h2>
<?php
    while ($row = mysqli_fetch_array($data["SV"])) {
        echo $row["tieude"]."</br>";
    }
?>