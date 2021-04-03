<?php
require_once("header.php");
if (isset($_POST['btn-sign-in'])) {

    $u_name = $_POST['txtUsername'];
    $u_pass = $_POST['txtPassword'];
    $password = md5($u_pass);

    $result = 1;
    if ($u_name == ""  || $u_pass == "") {
?>
        <script>
            alert('Please fully fill in !');
        </script>
        <?php
    } else {
        if ($u_name == "admin" && $u_pass == "admin") {
        ?>
            <script>
                alert('Login succesful!!');
            </script>
        <?php
        } else {
        ?>
            <script>
                alert('Login unsuccesful!!');
            </script>
<?php
        }
    }
}

?>

<form action="Trang.php" method="post">
    <label>UserName</label> <input type="text" name="txtUsername" id="" placeholder="txtUsername"><br>
    <label>PassWord</label> <input type="password" name="txtPassword" id="" placeholder="txtPassword"><br>

    <input type="submit" name="btn-sign-in" value="Sign in">
</form>

<?php
require_once("footer.php");
?>