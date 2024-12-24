<?

include_once("index-content.php");

echo "<!DOCTYPE html>";
echo "<html>";
echo "<head>";
echo "<style>";
	echo "body { font-family: Courier New; } ";
	echo ".body-wrapper { width: 90%; max-width: 600px; display: block; } ";
	echo ".header-spacing { display: block; height: 100px; } ";
	echo ".footer-spacing { display: block; height: 100px; } ";
	echo ".body-spacing { display: block; height: 50px; } ";
	echo "#header-he { font-size: 300%; display: block; } ";
	echo "#header-en { font-size: 300%; display: block; } ";
	echo "</style>";
echo "</head>";
echo "<body>";

echo "<div class='body-wrapper'>";

echo "<span class='header-spacing'></span>";

echo "<span id='header-he'>לוי<br>מאיר<br>קלנסי</span>";
echo "<span id='header-en'>Levi<br>Meir<br>Clancy</span>";

echo "<span class='body-spacing'></span>";

echo "Professional links";
echo "<br>";
echo "— <a href='http://linkedin.com/in/levimeirclancy/'>LinkedIn</a>";
echo "<br>";
echo "— <a href='https://blogs.timesofisrael.com/author/levi-clancy/'>Blogs @ Times of Israel</a>";

echo "<span class='body-spacer'></span>";

echo "Get to know me";
echo "<br>";
echo "About &rarr; <a href='https://levi.news'>levi.news</a>";
echo "<br>";
echo "Photography &rarr; <a href='https://levi.pictures'>levi.pictures</a>";
echo "<br>";
echo "Education &rarr; <a href='https://conversationpieces.rsvp'>conversationpieces.rsvp</a>";
echo "<br>";
echo "Email &rarr; <a href='mailto:info@levi.news'>info@levi.news</a>";

echo "<span class='footer-spacing'></span>";

echo "</div>";

echo "</body>";
echo "</html>";

?>
