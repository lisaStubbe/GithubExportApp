
<?php

//$githubUsername = 'sillevl';
// Generate a token here: https://github.com/settings/tokens/new
// 005868f98460d1706e299e0c0830e4b60c94401b
// select only 'public_repo' under 'repo'
// description: 'oefening PHP'

$auth = base64_encode('005868f98460d1706e299e0c0830e4b60c94401b');
$opts = [
    'http' => [
            'method' => 'GET',
            'header' => [
                'User-Agent: PHP',
                "Authorization: Basic $auth"
            ],
    ]
];

$context = stream_context_create($opts);
$content = file_get_contents("http://api.github.com/user/repos?=all", false, $context);

// echo $context;
// $fullname = json_decode($content);
// echo $fullname->id;
 //echo $fullname->full_name;

//$output = array_slice($context, 3);
//echo $output;
//echo $content[0]['full_name'];

//$listItems = "";
//foreach($fullname as $fullnames){
  // $fullnames = $fullname;
    // $listItems = new fullnames($fullname);
 //}
 //$list = new Ul($listItems);
 
?>