<?php use libs\Db;

include 'nav.php'; ?>
<style>
    <?php include 'all_orders.css'; ?>
</style>

<table>
    <tr>
        <th>User ID</th>
        <th>Product ID</th>
        <th>Product cost</th>
        <th>Date</th>
    </tr>
    <?php
        $db = new Db();
        $sql = 'SELECT * from `order_products`';
        $result = $db->query($sql, PDO::FETCH_ASSOC);
        foreach($db->query($sql) as $row) {
                echo "<tr><td>" . $row["id"]. "</td><td>" . $row["order_id"] . "</td><td>"
                    . $row["product_id"]. "</td><td>". $row["qty"]."</td></tr>";
            }
        echo "</table>";
        ?>
</table>
<!--<h2>All Orders</h2>-->
<!--<div style="overflow-x:auto;">-->
<!--    <table>-->
<!--        <tr>-->
<!--            <th>First Name</th>-->
<!--            <th>Last Name</th>-->
<!--            <th>Points</th>-->
<!--            <th>Points</th>-->
<!--            <th>Points</th>-->
<!--            <th>Points</th>-->
<!--            <th>Points</th>-->
<!--            <th>Points</th>-->
<!--            <th>Points</th>-->
<!--            <th>Points</th>-->
<!--            <th>Points</th>-->
<!--            <th>Points</th>-->
<!--        </tr>-->
<!--        <tr>-->
<!--            <td>Jill</td>-->
<!--            <td>Smith</td>-->
<!--            <td>50</td>-->
<!--            <td>50</td>-->
<!--            <td>50</td>-->
<!--            <td>50</td>-->
<!--            <td>50</td>-->
<!--            <td>50</td>-->
<!--            <td>50</td>-->
<!--            <td>50</td>-->
<!--            <td>50</td>-->
<!--            <td>50</td>-->
<!--        </tr>-->
<!--        <tr>-->
<!--            <td>Eve</td>-->
<!--            <td>Jackson</td>-->
<!--            <td>94</td>-->
<!--            <td>94</td>-->
<!--            <td>94</td>-->
<!--            <td>94</td>-->
<!--            <td>94</td>-->
<!--            <td>94</td>-->
<!--            <td>94</td>-->
<!--            <td>94</td>-->
<!--            <td>94</td>-->
<!--            <td>94</td>-->
<!--        </tr>-->
<!--        <tr>-->
<!--            <td>Adam</td>-->
<!--            <td>Johnson</td>-->
<!--            <td>67</td>-->
<!--            <td>67</td>-->
<!--            <td>67</td>-->
<!--            <td>67</td>-->
<!--            <td>67</td>-->
<!--            <td>67</td>-->
<!--            <td>67</td>-->
<!--            <td>67</td>-->
<!--            <td>67</td>-->
<!--            <td>67</td>-->
<!--        </tr>-->
<!--    </table>-->
<!--</div>-->
