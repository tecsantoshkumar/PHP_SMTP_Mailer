
<!DOCTYPE html>
<html>
    <head>
        <title>Contact Form</title>
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
        <style>
            body{
                margin: 20px 0;
                background: #ccc;
            }

            form{
                background: #fff;
                padding: 25px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">

                    <form action="mail.php" method="POST">
                        <h3>Contact form</h3>
                        <div class="form-group">
                            <label for="subject">Subject:</label> 
                            <input type="text" id="subject" name="subject" id="subject" maxlength="255" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="email">Your email address:</label> 
                            <input type="email" id="email" name="email" id="email" maxlength="255" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="query">Your question:</label>
                            <textarea cols="30" rows="8" name="query" id="query" placeholder="Your question" class="form-control"></textarea>
                        </div>

                        <div class="form-group">
                            <input type="submit" name="submit" value="Submit">
                        </div>
                    </form>
                </div>
                <div class="col-md-4"></div>
            </div>
        </div>
    </body>
</html>