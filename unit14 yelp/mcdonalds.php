<?php 
$url = "https://api.yelp.com/v3/businesses/og-dumpling-house-rochester/reviews";

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_TIMEOUT, 0);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
"authorization: Bearer " . "AzkS2OucRfEEmUkBnZeQ8f7vzao-K3D1yjGtMXCfNQtBqwy94fB0FazFnrU-Upd0y5wtvvCbeCYRvNuc2iL3c2FS-OV-JH5AyILQGh-0pPIYHvkj7Cv_5la5LvqGYHYx",
"cache-control: no-cache",
) );
?>