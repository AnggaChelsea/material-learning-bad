<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes" />
        <meta charset="UTF-8" />
        <!-- The above 3 meta tags must come first in the head -->

        <title>Demo</title>
    </head>
    <body>
        <div class="formme">
            <form action="exportcsv.php" method="post">
              
                <div class="form-1">
                    <div class="col-1">
                        <label for="fname" class="fname">First name</label>
                    </div>
                    <div class="ph-1">
                        <input type="text" id="name" name="fname" placeholder="Your name..">
                    </div>
                </div>

                <div class="form-2">
                    <div class="col-2">
                        <label for="lname" class="lname">Last name</label>
                    </div>
                    <div class="ph-2">
                        <input type="text" id="lname" name="lastname" placeholder="Your last name..">
                    </div>
                </div>

                <div class="form-3">
                    <div class="col-3">
                        <label for="telNo" class="tel">Phone number</label>
                    </div>
                    <div class="ph-3">
                        <input type="tel" id="telNo" name="telNo" placeholder="Your phone number...">
                    </div>
                </div>

                <div class="btn">
                    <input type="submit" name="submit" id="submit" value="Submit">
                </div>
            </form>
        </div>
    </body>
</html>
