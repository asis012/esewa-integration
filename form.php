<?php
    $permitted_chars = '0123456789abcdefghijkalmnopqurstuvwxyz';
    function generate_string($input, $strength = 16) {
        $input_length = strlen($input);
        $random_string = '';
        for($i = 0; $i < $strength; $i++) {
            $random_character = $input[mt_rand(0, $input_length - 1)];
            $random_string .= $random_character;
        }
    
        return $random_string;
    }
    $b = generate_string($permitted_chars, 12);
    $a ="ih2c3ca1-788b-4dc6-a6be-".$b;
?>
<body>
    <form action="http://localhost/esewa/formOverview.php" method="POST">
    <input value="" name="Name" type="text" placeholder="Enter Your Name"> Name </input>
    
    <input value=<?php  echo date("Y/m/d");?> name="date" type ="hidden">
    <input value="" name="amt" type="Number" placeholder="Amount">Amount </input>
    

    <input value="Submit" type="submit">
    </form>
</body>
