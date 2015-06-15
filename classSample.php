<?php
/*
Template Name: Class sample
*/
    // calling the header.php
    get_header();

    // action hook for placing content above #container
    thematic_abovecontainer();
?>

<!-- nb. from the file: classSample.php -->
<h3> The Hotel Class</h3>

<?php
/* Here the hotel sample is used in a costum page */

class hotel {
	// properties
	public $name = "Quay";
	public $rating = 4;
	public $rooms = 42;
	public $gym = false;
	public $pool = true;
	
	// EVENTS
	// room(s) booked
	// method:
	function book($booked){
		$rooms = 42;
		return $rooms - $booked;
	}
	// reservation cancelled
	// add this function here ..
}

// instantiate the class as an object
$quai = new hotel;

// get a property
print "<h4>Hotel name: $quai->name </h4>";

// use a method
echo "<div id='hotel'> Booking 3 rooms: ";
$booking = 4; // the number of booked rooms
echo $quai::book($booking);
echo " - rooms still available.";
echo "</div>";
?>

<?php get_footer(); ?>
