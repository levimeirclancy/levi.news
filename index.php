<?

include_once("index-content.php");

echo "<!DOCTYPE html>";
echo "<html>";
echo "<head>";
echo "<style>";
	echo "body { font-family: Courier New; background: #222; color: #f5f5f5; line-height: 1.5; margin: 0; padding: 0; } ";
	echo "a { color: #e5e5e5; text-decoration-style: wavy; } ";
	echo ".body-wrapper { width: 100%; max-width: 700px; display: block; margin: 0 auto; padding: 20px; box-sizing: border-box; } ";
	echo ".header-spacing { display: block; height: 100px; } ";
	echo ".footer-spacing { display: block; height: 100px; } ";
	echo ".body-wrapper-spacing { display: block; height: 50px; } ";
	echo "#header-he { font-size: 300%; display: block; transform: rotate(5deg); font-weight: 700; line-height: 0.9; } ";
	echo "#header-en { font-size: 300%; display: block; transform: rotate(-5deg); font-weight: 700; line-height: 0.9; } ";
	echo "</style>";
echo "</head>";
echo "<body>";

echo "<div class='body-wrapper'>";

echo "<span class='header-spacing'></span>";

echo "<span id='header-he'>לוי<br>מאיר<br>קלנסי</span>";
echo "<span id='header-en'>Levi<br>Meir<br>Clancy</span>";

echo "<span class='body-wrapper-spacing'></span>";
echo "<span class='body-wrapper-spacing'></span>";

echo "Professional links";
echo "<br>";
echo "— <a href='http://linkedin.com/in/levimeirclancy/'>LinkedIn</a>";
echo "<br>";
echo "— <a href='https://blogs.timesofisrael.com/author/levi-clancy/'>Blogs @ Times of Israel</a>";

echo "<span class='body-wrapper-spacing'></span>";

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
