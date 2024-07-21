<?php
if (!empty($_GET['name'])) {
    $response = file_get_contents("https://api.agify.io?name={$_GET["name"]}");
    $data =  json_decode($response, true); // true for making it associative array
    $age = $data['age'];
}
?>

<!DOCTYPE html>
<html>
<body>
    <p id="demo">Age:
        <?php
        if (isset($age)) {
            echo $age;
        }else{
            echo 'null';
        }
        ?>
    </p>
    <form>
        <label for="name">name</label>
        <input type="text" name='name' id="name">
        <button type="submit">get age</button>
    </form>
</body>
</html>