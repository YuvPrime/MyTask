<?php

require_once('db/db_config.php'); 

$total_query = "SELECT COUNT(*) as total_tweets FROM `tweet_tags` a JOIN tweets b 
ON a.tweet_id = b.tweet_id WHERE b.is_rt = 0 AND a.`tag` = '$tag_name_one' OR a.`tag` = '$tag_name_two'";
$totalresult = mysqli_query($connection, $total_query);
$total_details = mysqli_fetch_array($totalresult);
$data['total'] = $total_details;


$query_for_first_tag = "SELECT COUNT(a.tweet_id) as first FROM `tweet_tags` a JOIN tweets b 
                    ON a.tweet_id = b.tweet_id WHERE b.is_rt = 0 AND a.`tag` = '$tag_name_one'";
$query_for_second_tag = "SELECT COUNT(a.tweet_id) as second FROM `tweet_tags` a JOIN tweets b ON
 a.tweet_id = b.tweet_id WHERE b.is_rt = 0 AND a.`tag` = '$tag_name_two'";


$result_first = mysqli_query($connection,$query_for_first_tag);
$first_tag_details = mysqli_fetch_assoc($result_first);

$result_second = mysqli_query($connection,$query_for_second_tag);
$second_tag_details = mysqli_fetch_assoc($result_second);

$data['first'] = $first_tag_details;
$data['second'] = $second_tag_details;



//
echo json_encode($data);
//var_dump(json_encode($result));
?>