<?php
header('Content-Type: application/json');

$slack_name = isset($_GET['slack_name'])? $_GET['slack_name'] : '';
$track = isset($_GET['track'])? $_GET['track'] : '';

if($slack_name && $track){
    
         $response = [
            'slack_name' => $slackName,
            'current_day' => date('l'),
            'utc_time' => gmdate('Y-m-d\TH:i:s\Z'),
            'track' => $track,
            'github_file_url' => 'https://github.com/sonyokpara/hngxzuriboard/blob/main/stage1/api/slack_profile.php',
            'github_repo_url' => 'https://github.com/sonyokpara/hngxzuriboard',
            'status_code' => 200
        ];
        echo json_encode($response, JSON_PRETTY_PRINT);

}else{
    echo 'Required parameters (slack_name and track) are missing';
}

?>