<!DOCTYPE html>
<html>
<head>
    <title>Find A Home</title>
</head>
<body>
<h2>Re:{{ $messag['subject'] }}</h2>
<p>{{ $messag['body'] }}</p>
<hr/>
<div class="container">
    <h4>Customers Details</h4>
    <p>Phone Number: {{ $messag['phone'] }}</p>
    <p>Email:  {{ $messag['email'] }}</p>
    <p>Thank you</p>
</div>

</body>
</html>
