<!DOCTYPE html>
<html>
<head>
    <title>Send Email</title>
</head>
<body>
    <form method="POST" action="{{ route('send.email') }}">
        @csrf
        <input type="email" name="email" placeholder="Recipient Email" required>
        <textarea name="message" placeholder="Your message" required></textarea>
        <button type="submit">Send Email</button>
    </form>
</body>
</html>
