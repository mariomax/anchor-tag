<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Contact Anchor Tag Design</title>
        <link href="../css/style.css" rel="stylesheet">
         <script>
           function onSubmit(token) {
             document.getElementById("contactForm").submit();
           }
         </script>
    </head>
    
    
    <!-- This is a PHP page! Why is there an HTML head? -->
    
    
    
        <form id="contactForm" method="post" action="contact/index.php">
            <label for="c_name">* Name:</label><br>
            <input type="text" name="c_name" id="c_name" placeholder="Your Name" required><br>
            
            <label for="c_email">* Email:</label><br>
            <input type="text" name="c_email" id="c_email" placeholder="example@mail.com" required><br>
            
            <label for="c_phone">Phone #:</label><br>
            <input type="text" name="c_phone" id="c_phone" placeholder="234-567-8910"><br>
            
            <label for="comments">Comments:</label><br>
            <textarea placeholder="Comments and/or Questions?" rows="4" cols="50" type="text" name="comments" id="comments">
            </textarea><br>

            <label>* Required Fields</label><br>
            
            <!-- Robot detection - the honeypot! -->
            <input type="hidden" name="email" id="email" value="" required><br>

            <input type="submit" value="Submit">
        </form>
</html>

