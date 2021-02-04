
<section>
    <h1>Contact</h1>

    <div id="containerContact">
        <form method="post" action="../public/save.php" >
            <label for="name">Last name :</label>
            <input type="text" name="name" id="name" required>

            <label for="vorname">First name:</label>
            <input type="text" name="vorname" id="vorname" required>

            <label for="email">Email :</label>
            <input type="email" name="email" id="email" required>

            <label for="message">Message :</label>
            <textarea name="message" id="message" required></textarea>

            <input id="send" type="submit" value="Send">
        </form>
    </div>

</section>