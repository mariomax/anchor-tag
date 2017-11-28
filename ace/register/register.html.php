<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Ace in the Hole MultiSport Events Registration</title>
        <link rel="stylesheet" href="styles.css">
    </head>
    
        <form method="post" action="register/index.php">
            <h5 for="event">Saturday Events:</h5>
            <input type="radio" name="event" id="event" value="long_course"> Long Course - $240<br>
            <input type="radio" name="event" id="event" value="olympic"> Olympic - $110<br>
            <input type="radio" name="event" id="event" value="sprint"> Sprint - $90<br>
            <input type="radio" name="event" id="event" value="try_a_tri"> Try-a-Tri - $65<br>
            <input type="radio" name="event" id="event" value="none"> None<br>
            
            <h5 for="sunevent">Sunday Events:</h5>
            <input type="radio" name="sunevent" id="sunevent" value="half_marathon"> Half Marathon - $75<br>
            <input type="radio" name="sunevent" id="sunevent" value="10k"> 10K - $50<br>
            <input type="radio" name="sunevent" id="sunevent" value="splash-n-dash"> Splash n Dash - $25<br>
            <input type="radio" name="sunevent" id="sunevent" value="none"> None<br>
            
            <div class="inputArea">
            <label for="name">* Name:</label><br>
            <input type="text" name="name" id="name" placeholder="Your Name"required><br>
            <label for="email">* Email:</label><br>
            <input type="text" name="email" id="email" placeholder="example@mail.com"required><br>
            <label for="phone">* Phone #:</label><br>
            <input type="text" name="phone" id="phone" placeholder="234-567-8910"required><br>
            <label>* Required Fields</label><br>
            </div>
            <div class="inputArea">
            <input type="checkbox" name="waiver" id="waiver" value="I accept the terms of participation." required>
            <label for="waiver">* I accept the terms of participation.</label><br>
            </div>
            <input type="submit" value="Submit">
            
        </form>
</html>