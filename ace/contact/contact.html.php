<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Contact Ace in the Hole MultiSport Events</title>
        <link rel="stylesheet" href="styles.css">
    </head>
        <form method="post" action="contact/index.php">
            <label for="participation">I would like to attend as a:</label><br>
            <input type="radio" name="participation" id="participation" value="athlete"> Participant<br>
            <input type="radio" name="participation" id="participation" value="volunteer"> Volunteer<br>
            <div class="inputArea">
            <label for="c_name">* Name:</label><br>
            <input type="text" name="c_name" id="c_name" placeholder="Your Name" required><br>
            <label for="c_email">* Email:</label><br>
            <input type="text" name="c_email" id="c_email" placeholder="example@mail.com" required><br>
            <label for="c_phone">* Phone #:</label><br>
            <input type="text" name="c_phone" id="c_phone" placeholder="234-567-8910" required><br>
            <label for="comment">Comments:</label><br>
            <textarea rows="4" cols="50" placeholder="Additional comments?" type="text" name="comment" id="comment">
            </textarea><br>
            <label>* Required Fields</label><br>
            </div>
            <input type="submit" value="Submit">
        </form>
</html>