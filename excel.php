<?php
include 'db.php';

header('content-type:text/csv');
header('content-disposition:attachment;filename=product.csv');
$output=fopen('php://output','w');
fputcsv($output,array("product_id","product_name","product_price","product_category"));
$result=$conn->query('select * from productt');
while ($row=$result->fetch_assoc()) {
    fputcsv($output,$row);
}