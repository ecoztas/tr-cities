<?php
$jData = file_get_contents('tr-cities.json');
$data  = json_decode($jData);
?>

<table border="1">
    <tr>
        <th>City</th>
        <th>Latitude</th>
        <th>Longitude</th>
    </tr>

    <?php
    for ($i=0; $i < count($data->cities); $i++) {
        ?>
        <tr>
            <td><?=$data->cities[$i]->name?></td>
            <td><?=$data->cities[$i]->latitude?></td>
            <td><?=$data->cities[$i]->longitude?></td>
        </tr>
        <?php 
    }
    ?>
</table>