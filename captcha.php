<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Ejemplo de uso de Javascript y FastAPI">
    <meta name="theme-color" content="#317EFB" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <meta charset="UTF-8">
    <title>SQLite3</title>
    </script>
</head>

<body>
    <h1>Captcha Requests</h1>
    <div class="container">

        <form action="captcha.php" method="POST">
            <input type="text" name="text">
            <input type="submit">
        </form>
    <?php
        $text=$_POST["text"];
        if(isset($text)){
            $text = urlencode($text);
            $url = 'https://tools4devs.herokuapp.com/captcha/?text='.$text;
            $contents = file_get_contents($url);
            if($contents !== false){
                $result = json_decode($contents);
                $url = $result->url;
                echo "<image src='$url' alt='$text'>";
            }
        }
    ?>
    </div>
</body>
</html>