<?php
$username = "BSIT NT 3103";
$user_id = 12345;

$bautista = "kuya wil";
$apelyido = "Revillame";
$hephep = "Hooray";

echo "<u> Output From Pure PHP</u>";
echo "<br>";
echo $username;
echo "<br>";
echo $user_id;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo NT 3103</title>
</head>
<body>
    <br><a href="next_page.php">Go to Next Page</a>
    
    <h1>hello kuya wil</h1>
    <?php echo "<h1>hello kuya>/h1>"; ?>
    <h3>
    username: <u><?php echo $username ?></u>
    <br>
    user_id: <u><?phpecho $user_id ?></u>
    </h3>
    <button type="button" onclick=greetUser()>Greet User</button>
    <script>
        const username = "<?php echo $username; ?>";
        const userId = '<?php echo$user_id; ?>";
        function greetUser() {
            eler("hello "+username+" your user id is "+userId);
        }
       </script> 
       <button type="button" onclick=batiin mo</button>
       <script>
           const bautista = "<?php echo $bautista; ?>";
           const apelyido = "<?php echo $apelyido; ?>";
           const hephep = "<?php echo $hephep; ?>";
           funtion batiin() {
                alert("hello "+bautista+" "+apelyido" your user id is "hephep);    
       }
       </script>
</body>
</html>