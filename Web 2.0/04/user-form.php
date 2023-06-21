<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<div class="user-detail">
    <h2>User Data:</h2>
    <p id="msg"></p>
    <form id="userForm" method="POST">
          <input type="text" placeholder="Username"  id="username">
          <label>Name</label>
          <input type="text" placeholder="Enter name" name="firstName" required>
          <label>Mobile</label>
          <input type="int" placeholder="Enter mobile" name="mobile" required>
          <div id="usernameStatus"></div>
          <button type="submit">Submit</button>
    </form>
        </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript" src="ajax-script.js"></script>
</body>
</html>