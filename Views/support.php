<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Support Page</title>
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        height: 100vh;
        /* background-color: #f0f0f0; */
        background: linear-gradient(0deg, rgba(167,254,255,1) 0%, rgba(255,228,170,1) 100%);
    }
    .container {
        max-width: 800px;
        margin: 0 auto;
        padding: 20px;
        margin-top: 100px;
    }
    h1 {
        text-align: center;
        margin-bottom: 30px;
    }
    .options {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        grid-gap: 20px;
    }
    .option {
        background-color: #fff;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        padding: 20px;
        text-align: center;
    }
    .option h2 {
        margin-bottom: 15px;
        font-size: 20px;
        color: #333;
    }
    .option p {
        color: #666;
        line-height: 1.5;
    }
    .option a {
        display: block;
        margin-top: 15px;
        color: #007bff;
        text-decoration: none;
        transition: color 0.3s;
    }
    .option a:hover {
        color: #0056b3;
    }
</style>
</head>
<body>
    <div class="container">
        <h1>Support Options</h1>
        <div class="options">
            <div class="option">
                <h2>FAQs</h2>
                <p>Find answers to common questions in our Frequently Asked Questions section.</p>
                <a href="#">View FAQs</a>
            </div>
            <div class="option">
                <h2>Contact Us</h2>
                <p>Have a specific question or issue? Contact our support team for assistance.</p>
                <a href="#">Contact Support</a>
            </div>
            <div class="option">
                <h2>Live Chat</h2>
                <p>Chat with our support representatives in real-time for immediate assistance.</p>
                <a href="#">Start Live Chat</a>
            </div>
            <div class="option">
                <h2>Email Support</h2>
                <p>Send us an email with your questions or concerns, and we'll get back to you promptly.</p>
                <a href="#">Send Email</a>
            </div>
            <div class="option">
                <h2>Knowledge Base</h2>
                <p>Explore our comprehensive Knowledge Base for in-depth guides and tutorials.</p>
                <a href="#">Browse Knowledge Base</a>
            </div>
            <div class="option">
                <h2>Feedback</h2>
                <p>Share your feedback with us to help us improve our products and services.</p>
                <a href="#">Give Feedback</a>
            </div>
        </div>
    </div>
</body>
</html>
