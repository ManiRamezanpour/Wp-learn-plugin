<?php
global $wpdb;
    $fivesdrafts = $wpdb->get_results("SELECT * FROM {$wpdb->prefix}cars");
// var_dump($fivesdrafts);
?>
<div class="container table-container">
<table>
    <theader class="theader">
        <tr>
            <th>Name</th>
            <th>Brand</th>
            <th>Company</th>
            <th>Company_Price</th>
            <th>Price</th>
            <th>Body_Name</th>
            <th>Type</th>
            <th>Motor_Type</th>
            <th>Motor</th>
            <th>Motor_Size</th>
            <th>Car_Speed</th>
            <th>Start_Speed</th>
            <th>Img_Url</th>
        </tr>
    </theader>
    <tbody>
    <?php
        foreach ($fivesdrafts as $data) {
    ?>
    <tr>
        <td><?php echo $data->Name?></td>
        <td><?php echo $data->Brand?></td>
        <td><?php echo $data->Company?></td>
        <td><?php echo $data->Company_Price?></td>
        <td><?php echo $data->Price?></td>
        <td><?php echo $data->Body_Name?></td>
        <td><?php echo $data->Type?></td>
        <td><?php echo $data->Motor_Type?></td>
        <td><?php echo $data->Motor?></td>
        <td><?php echo $data->Motor_Size?></td>
        <td><?php echo $data->Car_Speed?></td>
        <td><?php echo $data->Start_Speed?></td>
        <td><?php echo $data->Img_Url?></td>
        <td><button class="deleteBtn">Delete</button></td>
    </tr>
    <?php
}
?>
    <tbody>

        </table>
    </div>