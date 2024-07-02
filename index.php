<!DOCTYPE html>
<html>
<head>
    <title>Guestbook</title>
</head>
<body>
    <h1>Guestbook</h1>
    <form method="post" action="submit.php">
        <input type="text" name="name" placeholder="Your Name">
        <textarea name="message" placeholder="Your Message"></textarea>
        <button type="submit">Submit</button>
    </form>
    <h2>Messages</h2>
    <?php
    if (file_exists('messages.txt')) {
        $messages = file('messages.txt', FILE_IGNORE_NEW_LINES);
        foreach ($messages as $message) {
            echo '<p>' . htmlspecialchars($message) . '</p>';
        }
    }
    ?>
</body>
</html>
