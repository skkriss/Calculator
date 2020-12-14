<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Kalkulator</title>
    </head>
    <body>
        
        <?php
        $msg = "";
        if (isset($_GET['submit'])) {
            $result1 = $_GET['num1'];
            $result2 = $_GET['num2'];
            $operator = $_GET['operator'];
            
            switch ($operator) {
                case "Puste":
                    $msg = "Nie podano operatora!";
                break;
                case "Dodaj":
                    $msg = $result1 + $result2;
                break;
                case "Odejmij":
                    $msg = $result1 - $result2;
                break;
                case "Pomnóż":
                    $msg = $result1 * $result2;
                break;
                case "Podziel":
                    $msg = $result1 / $result2;
                break;
            }
        }
        ?>
        
        <form>
            <input type="text" name="num1" placeholder="Pierwsza liczba"> <br><br>
            <input type="text" name="num2" placeholder="Druga liczba"> <br><br>
            <select name="operator">
                <option></option>
                <option>Dodaj</option>
                <option>Odejmij</option>
                <option>Pomnóż</option>
                <option>Podziel</option>
            </select>
            <br><br>
            <button type="submit" name="submit" value="submit">Oblicz</button> <br><br>
            <br><?php echo $msg ?> <br><br>
        </form>
        
    </body>
</html>

<style>
    body {
        background: silver;
        color: black;
    }
    
    form {
        width: 500px;
        background: white;
        border-radius: 4px;
        border: 1px solid white;
        margin: 0 auto;
        padding: 10px;
        text-align: center;
    }
    
    form input {
        width: 96%;
        padding: 10px;
        border-radius: 4px;
        border: 1px solid #969393;
        background : #969393;
        color: white;
        text-align: center;
    }
    
    form select {
       padding: 10px;
       background: #969393;
       border: 1px solid #969393;
       border-radius: 4px;
       color: white;
    }
    
    form button {
        background: #ECA95A;
        border: 1px solid #ECA95A;
        border-radius: 4px;
        padding: 10px;
        width: 100%;
        color: white;
    }
</style>