<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">

        <link rel="stylesheet" href="css/icon-font.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="shortcut icon" type="image/png" href="img/pinred-min.png">
        
        <title>Notices For ISE Department</title>
    </head>
    <body>
        <div class="navigation">
            <input type="checkbox" class="navigation_checkbox" id="navi"></input>

            <label for="navi" class="navigation_button">
                <span class="navigation_icon">&nbsp;</span>
            </label>

            <div class="navigation_background">&nbsp;</div>

            <nav class="navigation_nav">
                <ul class="navigation_list">
                    <li class="navigation_item"><a href="index.php" class="navigation_link">home</a></li>
                    <li class="navigation_item"><a href="all.php" class="navigation_link">Pest Control</a></li>
                    <li class="navigation_item"><a href="all1.php" class="navigation_link">PLANT DISEASES</a></li>
                    <li class="navigation_item"><a href="imp.php" class="navigation_link">Important Events</a></li>
                    <li class="navigation_item"><a href="vquery.php" class="navigation_link">view queries</a></li>
                    <li class="navigation_item"><a href="../index.php" class="navigation_link">logout</a></li>
                </ul>
            </nav>

        </div>

            <center>
            <section class="notice-section-book">
                <div class="row">
                    <div class="notice-book">
                        <div class="book_form">

                                            <h2 class="heading-secondary">
                                                 All Queries
                                            </h2>
                        </div>
           <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "nmit";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM quer";
$result = $conn->query($sql);
            if ($result->num_rows > 0) {

                ?>
                <center>
                <table width="1000" border="1"  cellspacing="1">
                                <tr>
                                            <th width="10%">Query No</th>
                                            <th width="15%">Name</th>
                                            <th width="55%">Query</th>
                                            <th width="20%">Phone</th>
                                </tr>
                </table>

                <?php
                // output data of each row
                while($row = $result->fetch_assoc()) {
                
                ?>
                <table width="1000" border="1"  cellspacing="1">
                <tr>

                        <td width="10%"><center><?php echo $row["queryno"]?></center></td>
                        <td width="15%"><center><?php echo $row["name"]?></center></td>
                        <td width="55%"><center><?php echo $row["query"]?></center></td>
                        <td width="20%"><center><?php echo $row["phone"]?></center></td>


                </tr>
                </table>
                <?php
                }

            } else {
                echo "<h3><center>"."0 Results"."</center></h3>";
            }

            $conn->close();
            ?> 

                    </center>

                    </div>
                </div>
            </section>
            </center>
        </main>


    </body>
</html>

