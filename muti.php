<html>

<head>
    <meta charset="utf-8">
    <style>
        
        body {
            font-family: 'Arial', sans-serif;
            margin: 20px;
            background-image: url('https://i.pinimg.com/564x/99/63/bd/9963bdad918677e44ca496be5b6d4ce6.jpg');
            background-size : cover;
            background-position: center;
            background-repeat: no-repeat; 
        }

        h1 {
            text-align: center;
            color: #333;
            font-size: 60px;
        }

        #result-container {
            max-height: 200px;
            overflow: auto;
            border: 1px solid #ccc;
            padding: 30px;
            background-color: #f9f9f9;
            border-radius: 5px;
            width: 150px;
            font-size: 24px;
            
        }
        p {
            margin: 5px 0;
            color: #555;
        }
    </style>
</head>

<body>
    <?php $multi_x = 2; ?>
    <h1>ตารางสูตรคูณแม่ <?php echo $multi_x ?></h1>

    <div id="result-container">
        <?php
        for ($i = 1; $i <= 12; $i++) {
            $result = $multi_x * $i;
            echo "<p>{$multi_x} x {$i} = {$result}</p>";
        }
        ?>
    </div>
</body>

</html>
