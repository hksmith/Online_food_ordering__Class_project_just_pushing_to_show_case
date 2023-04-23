<?php include('partials-front/menu.php'); ?>

<div class="form-container">
    <h2>Contact Us</h2>
    <form action="mailto:wowFood@gmail.com" method="post" enctype="text/plain">
        <label for="name">Name</label>
        <input type="text" id="name" name="name" placeholder="Your name" required>

        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="Your email" required>

        <label for="message">Message</label>
        <textarea id="message" name="message" placeholder="Write your comment here it really help as grow." style="height:200px" required></textarea>

        <input type="submit" value="Send">
    </form>
</div>

<?php include('partials-front/footer.php'); ?>