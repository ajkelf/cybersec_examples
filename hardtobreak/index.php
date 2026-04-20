<?php
$auth = false;
$error = '';
if($_POST) {
 $user = '';
 if(isset($_POST['username'])) {
  $user = $_POST['username'];
 }
 $pass = '';
 if(isset($_POST['password'])) {
  $pass = $_POST['password'];
 }
 
 if($user<>'' && $pass<> '') {

  if($user=='busyuser' && $pass=='sunshine') {
    $auth = true;
  }
  elseif($user=='strangeuser' && $pass=='starwars') {
    $auth = true;
  }
  else {
   $error = "Invalid username or password";
  }

 }
 else {
  $error = "Invalid username or password";
 }
}

if(!$auth) {
if($error<>'') {
 echo "<p>" . $error . "</p>";
}
?>
<form method="post" action="/hardtobreak/" class="space-y-4">
 <div>
   <label for="username" class="text-sm">Username</label>
   <input type="text" id="username" name="username" required="" class="mt-1">
 </div>
 <div>
   <label for="password" class="text-sm">Password</label>
   <input type="password" id="password" name="password" required="" class="mt-1">
 </div>
 <div>
 <button type="submit" class="flex text-sm bg-indigo-600">
   Log in
 </button>
 </div>
</form>
<?php
}
else {
?>
<p>User has been authorized successfully.</p>
<?php
}
