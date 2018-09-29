
<?php

$githubUsername = 'sillevl';
// Generate a token here: https://github.com/settings/tokens/new
// 387dfb73fbe351509e0cc1d339e73012ee6b4de9 
// select only 'public_repo' under 'repo'
// description: 'oefening PHP'

$auth = base64_encode(/*..TOKEN..*/);
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
$content = file_get_contents("http://api.github.com/user/username='sillevl'/repos", false, $context);

echo $content
//$json = json_decode($content);
//$fullnames = $json->full_name;

//$listItems = "";
//foreach($fullnames as $fullname){
  //  $listItems .= new fullnames($fullname);
// }
//$list = new Ul($listItems);

?>