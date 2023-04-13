<!DOCTYPE html>
<html>
<head>
    <title>Contact Us</title>
</head>
<body>
    <h1>Contact Us</h1>
    <form method="post" action="send.php">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required><br>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required><br>

        <label for="subject">Subject:</label>
        <input type="text" name="subject" id="subject" required><br>

        <label for="message">Message:</label>
        <textarea name="message" id="message" rows="5" required></textarea><br>

        <button type="submit">Send Message</button>
    </form>
</body>
</html>
