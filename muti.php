<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>ตารางสูตรคูณ</title>
    <style>
    body {
        font-family: 'Comic Sans MS', cursive, sans-serif;
        background-color: #f9caca;
        margin: 20px;
        color: #333;
        font-size: 20px; 
    }

    h1 {
        font-family: 'Verdana', sans-serif;
        text-align: center;
        font-size: 40px; 
        color: #e74c3c;
    }

    #result-container {
        max-height: 300px; 
        overflow: auto;
        border: 1px solid #ccc;
        padding: 50px; 
        background-color: #ecf0f1;
        border-radius: 10px; 
        width: 400px; 
        margin: 50px auto 0 auto; 
        text-align: left;
        color: #333;
        transition: margin 0.3s;
    }

    p {
        margin: 10px 0; 
        color: #e74c3c;
    }

    form {
        text-align: center;
        margin-top: 30px; 
        border-radius: 15px; 
    }

    label {
        font-size: 20px; 
        margin-right: 10px; 
        color: #3498db;
    }

    input {
        font-size: 20px; 
        padding: 10px; 
        border: 2px solid #3498db; 
        border-radius: 15px; 
    }

    input[type="submit"] {
        background-color: #3498db;
        color: #fff;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    input[type="submit"]:hover {
        background-color: #2980b9;
    }

    #result-container.show {
        margin-top: 20px; 
    }
</style>




</head>

<body>
    <h1>ตารางสูตรคูณ</h1>

    <form method="post">
        <label for="multi_x">กรุณาใส่แม่สูตรคูณ: </label>
        <input type="number" name="multi_x" id="multi_x" required>
        <input type="submit" value="แสดงตาราง">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $multi_x = $_POST['multi_x'];
    ?>
        <div id="result-container">
            <?php
            for ($i = 1; $i <= 24; $i++) {
                $result = $multi_x * $i;
                echo "<p>{$multi_x} x {$i} = {$result}</p>";
            }
            ?>
        </div>
    <?php
    }
    ?>
</body>

</html>
