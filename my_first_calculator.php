<!Doctype html>
<head>
    <title>my first calcultor</title>
</head> 
<?php
 $result=" ";
 if(isset($_POST['operator'])){
 $first_num=$_POST['first_num'];
 $second_num=$_POST['second_num'];
 $operator=$_POST['operator'];
 if(is_numeric($first_num)&& is_numeric($second_num))
 {
    if($operator=="add")
    {
        $result=$first_num+$second_num;
       //echo $result;
    }
    else if($operator=="sub")
    {
        $result=$first_num-$second_num;
       //echo $result;
    }
    else if($operator=="multi")
    {
        $result=$first_num*$second_num;
      // echo $result;
    }
    else
    {
        $result=$first_num/$second_num;
       //echo $result;
    }
 }
 
}

//echo $first_num;
?> 
<body>
    <h3>Let build a calculator</h3>
    <form method="POST" >
        <lavel><p>
            1st Number
        </p></lavel>
        <input type = "number" name="first_num" value="<?php echo $first_num?>">
        <lavel></p>
        2nd Number
        </p></lavel>
        <input type = "number" name="second_num" value="<?php echo $second_num?>">
        <lavel><p>
            Result
        </p></lavel>
        <input type = "number" name="result" value="<?php echo $result ?>" >
        
        <input type = "submit" value="add" name ="operator">
        <input type = "submit" value="sub" name ="operator">
        <input type = "submit" value="multi" name ="operator">
        <input type = "submit" value="division" name ="operator">
        
    </form>

</body>

</html>