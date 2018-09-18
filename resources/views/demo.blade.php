<?php
//echo "This is test demo";
/**
 * @param $name
 * @param $title
 * @return string
 */
function test($name, $title)
{
    return <<<TAG
    <h1>This is title | $title</h1>
    <p>Lorem ipsum dolor. $name</p>
TAG;
}

$res = test($name, $title);
echo $res;
?>
        <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$name}}</title>
</head>
<body>
    @foreach($data as $datum)
        <p>{{$datum['name']}}: this is age {{$datum['age']}}</p>
    @endforeach
</body>
</html>
