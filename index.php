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
    ?>

    <form name="article-form" id="article-form" action="add_article.php" method="post">
        <label>Artikelname<input type="text" name="artikelname" id="artikelname" placeholder="Artikelname"></label>
        <br>
        <label>Artikelinhalt<textarea name="artikelinhalt" id="artikelinhalt"></textarea></label>
        <br>
        <input name="username" style="display: none" type="text" value="<?php echo $_SESSION['username']; ?>">
        <br>
        <label>datum<input type="date" name="date_event" id="date_event" placeholder="Datum"></label>
        <button type="submit">Senden</button>
    </form>
    <?php
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
<?php
require_once("config.php");

$conn = new mysqli($servername, $username, "", $databasename);

if (createConnection($conn))
    fetchArticles($conn);

function createConnection($conn)
{
    if ($conn->connect_error) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        return FALSE;
    }
    echo "Connected successfully";

    return true;
}

function fetchArticles($conn)
{
    $query = "SELECT * from articles";
    $result = $conn->query($query);
    while ($row = $result->fetch_assoc()) {
        $artikelname = $row["articlename"];
        $artikelninhalt = $row["content"];
        $dateevent = (string)$row["date_event"];
        $created = $row["created"];
        print($artikelname);

        ?>

        <h2><?php echo $artikelname; ?> am <?php echo $dateevent; ?></h2>
        <p><?php echo $artikelninhalt; ?></p>
        <p><?php echo $created; ?></p>
        <hr>
    <?php }
} ?>
<p>
    <a href="logout.php">Logout</a>
</p>
<script>

</script>
</body>

</html>