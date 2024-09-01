<!DOCTYPE html>
<html>
<head>
	<title>Date Validation</title>
	<script>
		function validateDates() {
			var checkinDate = new Date(document.getElementById("checkin").value);
			var checkoutDate = new Date(document.getElementById("checkout").value);
			if (checkinDate >= checkoutDate) {
				alert("Check-out date must be after check-in date!");
				return false;
			}
			return true;
		}
	</script>
</head>
<body>
	<h1>Date Validation</h1>
	<form onsubmit="return validateDates()">
		<label for="checkin">Check-in:</label>
		<input type="datetime-local" id="checkin" name="checkin" required>
		<br>
		<label for="checkout">Check-out:</label>
		<input type="datetime-local" id="checkout" name="checkout" required>
		<br><br>
		<input type="submit" value="Submit">
	</form>
</body>
</html>
