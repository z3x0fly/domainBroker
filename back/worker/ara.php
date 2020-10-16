<?php
include 'PathHelper.php';
$conf_file2;
if(!empty($search)){

    $query = "SELECT * FROM domainler WHERE domain LIKE '$search%'";
    $search_query = mysqli_query($con, $query);

    if(!$search_query){
       // die('QUERY FAILED' . mysqli_error($connect)); buna gerek duymadım yedek kulübesine alıcam
    }

    while( $row = mysqli_fetch_array($search_query) ){
        $diz = $row['domain']; //veri tabanındaki verileri dizmek için pikaçuyu çağırdım
        ?>

        <ul class="list-unstyled">
            <?php 

 while($row=mysqli_fetch_array($query))
                            {
                                echo '<tr>';
                                echo '<td>'.$row['id'].'</td>';
                                echo '<td>'.$row['domain'].'</td>';
                                echo '<td>'.$row['k_tarih'].'</td>';
                                echo '<td>'.$row['b_tarih'].'</td>';
                                echo '<td>'.$row['s_tarih'].'</td>';
                                echo '<td>'.$row['durum'].'</td>';
                                echo "<td><a href=\"worker/Delete.php?id=".$row['id']."\">Sil</a></td>";

                                echo '</tr>';
            ?> 


        </ul>
    <?php


?>