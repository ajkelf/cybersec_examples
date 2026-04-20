<?php
if(isset($_GET['search'])) {
?>
<h1>Result</h1>
<p>You've searched for: <?= $_GET['search'] ?></p>
<p>Found: none</p>
<?php
}
else {
?>
<h1>Search</h1>

<form action="/search/?">
  <label for="mySearch">Search for:</label>
  <input id="mySearch" type="search" name="search" />
  <input type="submit" />
</form>
<?php 
}