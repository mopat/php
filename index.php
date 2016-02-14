<html>
<head>
    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    <script>
        /*     $(function () {
         $.getJSON("http://localhost/api/api.php?method=getAllImages&jsoncallback=?",
         function (data) {
         for (var i = 0; i < data.length; i++) {
         console.log();
         var url = data[i]['image_url'];
         var img = $('<img>');

         var src = "http://localhost/il-disegno/img/" + url;
         console.log(src);
         $(img).attr('src', src);

         $('body').append($(img));
         }

         }
         );
         });*/
    </script>
</head>

<body>

<?php

session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    echo "Welcome to the member's area, " . $_SESSION['username'] . "!";
} else {
    echo "Please log in first to see this page.";
    ?>
    <form name="loginform" method="post" action="login.php">
        <input type="text" name="username" placeholder="username">
        <input type="password" name="password" placeholder="password">
        <input type="submit">
    </form>
    <p>OR</p>
    <form name="userform" action="user.php" method="post">
        <p>
            <label for="username">
                Username
                <input type="text" name="username" id="username"/>
            </label>
        </p>

        <p>
            <label for="password">
                Password
                <input type="password" name="password" id="password"/>
            </label>
        </p>

        <p>
            <label for="email">
                E-Mail
                <input type="text" name="email" id="email"/>
            </label>
        </p>
        <input type="submit">
    </form>
<?php } ?>
<p>
    <a href="logout.php">Logout</a>
</p>
<script>

</script>
</body>

</html>