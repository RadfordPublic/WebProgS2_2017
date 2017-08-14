<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Silverado - Now Showing</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Saira+Semi+Condensed" rel="stylesheet">
</head>
<body>
<header>
    <h1>Silverado Cinema</h1>
</header>
<nav>
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="showing.php">Now Showing</a></li>
    </ul>
</nav>
<main>
    <table>
        <tr>
            <th>Seat Type</th>
            <th>Seat Option</th>
            <th>Seat Code</th>
            <th>Mon - Tue (All Day) <br> Mon - Fri (1pm only) </th>
            <th>Wed - Fri (after 1pm) <br> Sat - Sun (All Day)</th>
        </tr>
        <tr>
            <td>Standard</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>Standard</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>Standard</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>FirstClass</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>FirstClass</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>Beanbag</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>Beanbag</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>Beanbag</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
    </table>
	<script>
function myStandard() {
	document.getElementById('Standard').style.display = 'block';
	document.getElementById("FirstClass").style.display = 'none';
	document.getElementById("Beanbag").style.display = 'none';
}
function myFirstClass() {
	document.getElementById('Standard').style.display = 'none';
	document.getElementById("FirstClass").style.display = 'block';
	document.getElementById("Beanbag").style.display = 'none';
}
function myBeanbag() {
    document.getElementById('Standard').style.display = 'none';
	document.getElementById("FirstClass").style.display = 'none';
	document.getElementById("Beanbag").style.display = 'block';
}
</script>
  <!-- Starting form code sourced and adapted from https://titan.csit.rmit.edu.au/~e54061/wp/silverado-test.php -->
  <form method='post' id="form">
    <fieldset><legend>Booking Form</legend>
      <p><label>Movie</label><select name=Movie>	<option>mubarakan</option><option>dunkirk</option><option>despicableme3</option><option>thebigsick</option>	</select></p>
      <p><label>Session</label><select name=Session><option>mubarakan</option></select></p>
      <fieldset><legend>Seats</legend>
		<p>
			<input  onclick="myStandard()" type="radio" name="Seats" value="Standard" checked>Standard <br>
			<input  onclick="myFirstClass()" type="radio" name="Seats" value="FirstClass">FirstClass <br>
			<input  onclick="myBeanbag()" type="radio" name="Seats" value="Beanbag" >Beanbag
		</p> 
        <fieldset id="Standard" ><legend>Standard</legend>
          <p><label>Adult</label><select name=TBA></select></p>
          <p><label>Concession</label><select name=TBA></select></p>
          <p><label>Child</label><select name=TBA></select></p>
        </fieldset>
        <fieldset id="FirstClass" style="display:none"><legend>First Class</legend>
          <p><label>Adult</label><select name=TBA></select></p>
          <p><label>Child</label><select name=TBA></select></p>
        </fieldset>
        <fieldset id="Beanbag" style="display:none"><legend>Bean Bags</legend>
          <p><label>Adult</label><select name=TBA></select></p>
          <p><label>Family</label><select name=TBA></select></p>
          <p><label>Child</label><select name=TBA></select></p>
        </fieldset>
      </fieldset>
      <p><button>Book</button></p>
    </fieldset>
  </form>
</main>
<footer>
    © 2017 Alexandar Kotevski (s3646348) & Samuel Radford (s3661545)
</footer>
</body>
</html>