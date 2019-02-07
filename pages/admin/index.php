<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: 'Lato', sans-serif;
}

.overlay {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: rgb(0,0,0);
  background-color: rgba(0,0,0, 0.9);
  overflow-x: hidden;
  transition: 0.5s;
}

.overlay-content {
  position: relative;
  top: 5%;
  width: 100%;
  text-align: left;
  margin-top: 30px;
}

.overlay a {
  padding: 8px;
  text-decoration: none;
  font-size: 36px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.overlay a:hover, .overlay a:focus {
  color: #f1f1f1;
}

.overlay .closebtn {
  position: absolute;
  top: 20px;
  right: 45px;
  font-size: 60px;
}

@media screen and (max-height: 450px) {
  .overlay a {font-size: 20px}
  .overlay .closebtn {
  font-size: 40px;
  top: 15px;
  right: 35px;
  }
}
    .modules{
        width: 15%;
        background-color: #3f51b5;
        color: white;
        height: auto;
        border-radius: 15px;
        text-align: center;
    }
    .warnings{
        width: 15%;
        background-color: #3f51b5;
        color: red;
        height: auto;
        border-radius: 15px;
        text-align: center;
    }
    .user{
        margin: auto;
        width: 20%;
        margin-bottom: 100%;
    }
</style>
</head>
<body>

<div id="myNav" class="overlay">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <div class="overlay-content" style="user-select: none">
    <a href="#">Add</a>
    <a href="#">Accounts</a>
    <a href="#">Admin Settings</a>
    <a href="#">Modules</a>
    <a href="#">Databases</a>
    <a href="#">Email Settings</a>
    <a href="">Agenda Settings</a>
    <a href="">User Settings</a>
    <a href="">Function Settings</a>
    <a href="">Hooks Settings</a>
    <a href="">Php Settings</a>
    <a href="">Module Settings</a>
    <a href="">Guest Settings</a>
    <a href="">Login Settings</a>
    <a href="">Lay-Out Settings</a>
    <a href="">Acces Settings</a>
    <a href="">Cloud Settings</a>
    <a href="">NextCloud Settings</a>
    <a href="">Server Status</a>
    <hr>
    <a href="">My Account</a>
  </div>
</div>
<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Menu</span>
<div class="main">
    <div class="modules">
        <h4>Modules Status:</h4>
        <p>Webmail: <strong style="color: lightgreen">Active</strong></p>
        <p>Agenda: <strong style="color: lightgreen">Active</strong></p>
        <p>Guest Accounts: <strong style="color: red">Error</strong></p>
    </div>
    <div class="warnings">
        <h2>Warnings:</h2>
        <hr>
        <strong>Guest Accounts ERROR</strong><br>
        <label>No database connected for guest accounts!</label>
        <hr>
        <strong>Failed login atempt!</strong><br>
        <label>Failed login atempt from username: 'John Doe'!</label>
    </div>
    <div class="user">
        <form>
            <label>Add username:</label><br>
            <input type="text" name="name" required/><br>
            <label>Add email:</label><br>
            <input type="email" name="email" required/><br>
            <label>Add date of birth:</label><br>
            <input type="date" name="datebirth" required/><br>
            <label>Add a password for the user (optional):</label><br>
            <input type="password" name="psw"/><br>
            <label>Add a function for the user:</label><br>
            <select name="func">
                <option value="0">Super Admin</option>
                <option value="1">Normal User</option>
            </select>
            
            <button>Add user</button>
        </form>
    </div>
</div>
<script>
function openNav() {
  document.getElementById("myNav").style.width = "100%";
}

function closeNav() {
  document.getElementById("myNav").style.width = "0%";
}
</script>
    </body>
</html>