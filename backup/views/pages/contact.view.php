<section class="contact-section">
    <h1><?= $title ?></h1>
    <p>If you have any questions, suggestions, or concerns, feel free to reach out to us. We'd love to hear from you!</p>

    <form class="contact-form" action="submit_contact.php" method="post">
        <label for="name">Full Name</label>
        <input type="text" id="name" name="name" placeholder="Your name" required>

        <label for="email">Email Address</label>
        <input type="email" id="email" name="email" placeholder="you@example.com" required>

        <label for="message">Your Message</label>
        <textarea id="message" name="message" rows="5" placeholder="Type your message here..." required></textarea>

        <button type="submit">Send Message</button>
    </form>
</section>
