<?php
if(isset($_GET['search'])) {
?>
<h1>Result</h1>
<p>You've searched for: <strong><?= $_GET['search'] ?></strong></p>
<p>Found: <strong>none</strong></p>
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