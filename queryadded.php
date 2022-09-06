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
                    <li class="navigation_item"><a href="query.php" class="navigation_link">queries</a></li>
                    <li class="navigation_item"><a href="login.php" class="navigation_link">Login</a></li>
                </ul>
            </nav>

        </div>


            <section class="section-book">
                <div class="row">
                    <div class="book" style="height: 60rem;">
                        <div class="book_form">
                            <form action="queryadded.php" class="form" method="POST">

                                    <div class="u-margin-bottom-small">
                                            <h2 class="heading-secondary">
                                                  Queries Section
                                            </h2>
                                    </div>

                                    <div class="u-margin-bottom-small">
                                            <h3>
                                                  Query added successfully.
                                            </h3>
                                    </div>

                                <div class="form_group">
                                    <input type="text" class="form_input" placeholder="Name" required id="name" name="name"></input>
                                    <label for="name" class="form_label">Name</label>
                                </div>

                                <div class="form_group">
                                        <input type="text" class="form_input" placeholder="Questions" required id="ques" name="ques"></input>
                                        <label for="ques" class="form_label">Questions</label>
                                    </div>

                                <div class="form_group">
                                        <input type="phone" class="form_input" placeholder="Contact Number" required id="phone" name="phone"></input>
                                        <label for="phone" class="form_label">Contact Number</label>
                                    </div>

                    
                                <div class="form_group" >
                                        <b><span>PHOTO   &ensp;  </span></b>
                                        <input type="file" name="fileToUpload" id="fileToUpload">
                                </div>          

                                   
                                <div class="form_group">
                                    <button class="btn btn-green" type="submit" value="Upload Image" name="submit">Submit &rarr;</button>
                                </div>
                               
                            </form>
                        </div>
                    </div>
                </div>
            </section>

        </main>

        
    </body>
</html>


