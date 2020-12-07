<?php
    function check_TK($string){
        $RE_tk="#^[A-z]\w{4,30}$#";
        $boolean=false;
        if(preg_match($RE_tk,$string,$value)){
            $boolean=true;
        }
        return $boolean;
    }
    function check_PW($string){
        $RE_tk="#^.{6,}$#";
        $boolean=false;
        if(preg_match($RE_tk,$string,$value)){
            $boolean=true;
        }
        return $boolean;
    }
    function check_PW_part2($string){
        $RE_tk="#^(?=.*[a-z]).{6,}$#";
        $boolean=false;
        if(preg_match($RE_tk,$string,$value)){
            $boolean=true;
        }
        return $boolean;
    }
    function check_name($string){
        $RE_tk="#^[A-z\sàáạảãâầấậẩẫăằắặẳẵèéẹẻẽêềếệểễìíịỉĩòóọỏõôồốộổỗơờớợởỡùúụủũưừứựửữỳýỵỷỹđÀÁẠẢÃÂẦẤẬẨẪĂẰẮẶẲẴÈÉẸẺẼÊỀẾỆỂỄÌÍỊỈĨÒÓỌỎÕÔỒỐỘỔỖƠỜỚỢỞỠÙÚỤỦŨƯỪỨỰỬỮỲÝỴỶỸĐD]{10,30}$#";
        $boolean=false;
        if(preg_match($RE_tk,$string,$value)){
            $boolean=true;
        }
        return $boolean;
    }
    function check_gmail($string){
        $RE_tk="#^[a-z][A-z0-9_.]{4,25}\@[a-z0-9]{2,}(\.[a-z0-9]{2,4}){1,2}$#";
        $boolean=false;
        if(preg_match($RE_tk,$string,$value)){
            $boolean=true;
        }
        return $boolean;
    }
    function check_number($string){
        $RE_tk="#^(0|\+84)(\s|\.)?((3[2-9])|(5[689])|(7[06-9])|(8[1-689])|(9[0-46-9]))(\d)(\s|\.)?(\d{3})(\s|\.)?(\d{3})$#";
        $boolean=false;
        if(preg_match($RE_tk,$string,$value)){
            $boolean=true;
        }
        return $boolean;
    }
    function check_name_product($string){
        $RE_tk="#^[a-z][A-z\s0-9_àáạảãâầấậẩẫăằắặẳẵèéẹẻẽêềếệểễìíịỉĩòóọỏõôồốộổỗơờớợởỡùúụủũưừứựửữỳýỵỷỹđÀÁẠẢÃÂẦẤẬẨẪĂẰẮẶẲẴÈÉẸẺẼÊỀẾỆỂỄÌÍỊỈĨÒÓỌỎÕÔỒỐỘỔỖƠỜỚỢỞỠÙÚỤỦŨƯỪỨỰỬỮỲÝỴỶỸĐD]{3,30}$#";
        $boolean=false;
        if(preg_match($RE_tk,$string,$value)){
            $boolean=true;
        }
        return $boolean;
    }

    // if(isset($_GET["save"]) and isset($_POST["post_RE"])){
    //     if(check_name_product($_POST["name"])){
    //        echo "number dang nhap hop le";
    //     //    echo "<pre>";
    //     //     print_r($_POST);
    //     //     echo "</pre>";
    //     }
    //     else{
    //         echo "khong hop le 3-30 ky tu";
    //     }
    // }

    // if(isset($_GET["save"]) and isset($_POST["post_RE"])){
    //     if(check_PW($_POST["name"])){
    //         if(check_PW_part2($_POST["name"])){
    //             echo "mat khau hop le";
    //         }else{
    //             echo "mat khau phai co a-z , A-Z , 0-9.";
    //         }
           
    //     }else{
//         echo "mat khau phai tren 6 ky tu";
    //     }
    // }

    // echo "<pre>";
    // print_r($_POST);
    // echo "</pre>";
    // unset($_POST)
    // define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
    
  if (empty($_POST["website"])) {
    $website = "";
  } else {
    $website = test_input($_POST["website"]);
    // check if URL address syntax is valid
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
      $websiteErr = "Invalid URL";
    }    
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>PHP Form Validation Example</h2>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  Website: <input type="text" name="website">
  <span class="error"><?php echo $websiteErr;?></span>
  <br><br>
  Comment: <textarea name="comment" rows="5" cols="40"></textarea>
  <br><br>
  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?>
<!-- <form action="?save=10" method="post">
    <input type="text" name="name" id="">
    <input type="submit" value="post" name="post_RE" >
</form> -->