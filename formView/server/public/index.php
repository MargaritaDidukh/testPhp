<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="assets/style.css" />
        <title>Form</title>
    </head>
    <body>
        <section class="form__wrapper">
            <form method="post" action="form.php">
                <div class="inputField__wrapper">
                    <label for="name">Name:</label>
                    <input type="text" name="name" />
                </div>
                <div class="inputField__wrapper">
                    <label for="review">Review</label>
                    <textarea id="review" name="review" rows="4" cols="50"></textarea>
                </div>
                <input type="submit" name="save" value="submit" />
            </form>
        </section>
    </body>
</html>
