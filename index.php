<?

include_once("index-content.php");

$rgb_pink = "255,105,180";
$rgb_orange = "255,127,80";
$rgb_yellow = "255,204,0";
$rgb_blue = "0,155,220";

echo "<!DOCTYPE html>";
echo "<html>";
echo "<head>";
echo "<style>";
	echo "body { font-family: Courier New; background: #aaa; color: #f5f5f5; line-height: 1.5; margin: 0; padding: 0; } ";
	echo "a { color: #e5e5e5; text-decoration-style: wavy; } ";
	echo ".body-wrapper { width: 100%; max-width: 700px; display: block; margin: 0 auto; padding: 20px; box-sizing: border-box; } ";
	echo ".header-spacing { display: block; height: 100px; } ";
	echo ".footer-spacing { display: block; height: 100px; } ";
	echo ".body-wrapper-spacing { display: block; height: 50px; } ";
	echo ".body-subheader { font-size: 120%; font-weight: 700; } ";
	echo ".link-bubble { font-family: Courier New; font-weight: 700; color: #222; border-radius: 25px; border: 2px solid #f5f5f5; color: rgba(255,255,255,0.9); padding: 8px 35px; margin: 10px 0; display: inline-block; text-align: center; } ";
	echo ".link-bubble a { text-decoration-style: wavy; } ";
	echo ".section-pink .body-subheader { color: rgba(".$rgb_pink.",0.9); } ";
	echo ".section-pink .link-bubble { border-color: rgba(".$rgb_pink.",1); color: rgba(".$rgb_pink.",0.9); } ";
	echo ".section-yellow .body-subheader { color: rgba(".$rgb_yellow.",0.9); } ";
	echo ".section-yellow .link-bubble { border-color: rgba(".$rgb_yellow.",1); color: rgba(".$rgb_yellow.",0.9); } ";
	echo ".section-orange .body-subheader { color: rgba(".$rgb_orange.",0.9); } ";
	echo ".section-orange .link-bubble { border-color: rgba(".$rgb_orange.",1); color: rgba(".$rgb_orange.",0.9); } ";
	echo ".section-blue .body-subheader { color: rgba(".$rgb_blue.",0.9); } ";
	echo ".section-blue .link-bubble { border-color: rgba(".$rgb_blue.",1); color: rgba(".$rgb_blue.",0.9); } ";
	echo "#header-he { font-family: Verdana; font-size: 300%; display: block; transform: rotate(5deg); font-weight: 700; line-height: 0.9; } ";
	echo "#header-en { font-family: Verdana; font-size: 300%; display: block; transform: rotate(-5deg); font-weight: 700; line-height: 0.9; } ";
	echo "</style>";
echo "</head>";
echo "<body>";

echo "<div class='body-wrapper'>";

echo "<span class='header-spacing'></span>";

echo "<span id='header-he'>לוי<br>מאיר<br>קלנסי</span>";
echo "<span id='header-en'>Levi<br>Meir<br>Clancy</span>";

echo "<span class='body-wrapper-spacing'></span>";
echo "<span class='body-wrapper-spacing'></span>";

echo "<div class='section-yellow'>";
echo "<div class='body-subheader'>Professional links</div>";
echo "<br><a href='http://linkedin.com/in/levimeirclancy/'><div class='link-bubble'>LinkedIn</div></a>";
echo "<br><a href='https://blogs.timesofisrael.com/author/levi-clancy/'><div class='link-bubble'>Blogs @ Times of Israel</div></a>";
echo "</div>";

echo "<span class='body-wrapper-spacing'></span>";

echo "<div class='section-pink'>";
echo "<div class='body-subheader'>Public speaking</div>";
echo "<br><a href='https://www.youtube.com/watch?v=n050dgtyOck'><div class='link-bubble'>2017 Oct 10 &rarr; TEDxDuhok — Kurdistan: Homeland of Diversity</div></a>";
echo "<br><a href='https://www.youtube.com/watch?v=ptyGKlmVniE&t=8s'><div class='link-bubble'>2021 Mar 23 &rarr; HARIF — Jews in Kurdistan</div></a>";
echo "</div>";

echo "<span class='body-wrapper-spacing'></span>";

echo "<div class='section-blue'>";
echo "<div class='body-subheader'>Press</div>";
echo "<br><a href='https://birthrightisrael.foundation/blog/meet-photographer-and-la-birthright-israel-alum-levi-meir-clancy/'><div class='link-bubble'>2022 Jun 16 &rarr; Taglit-Birthright</div></a>";
echo "<br><a href='https://forward.com/news/482748/founder-of-jewish-museum-expelled-from-iraqi-kurdistan-levi-meir-clancy/'><div class='link-bubble'>2022 Feb 20 &rarr; The Forward</div></a>";
echo "<br><a href='https://forward.com/news/473198/in-iraqi-kurdistan-a-one-man-museum-celebrates-the-regions-jewish-history/'><div class='link-bubble'>2021 Jul 20 &rarr; The Forward</div></a>";
echo "</div>";

echo "<span class='body-wrapper-spacing'></span>";

echo "<div class='section-orange'>";
echo "<div class='body-subheader'>Photo credits</div>";
echo "<br><a href='https://www.futureofjewish.com/p/the-little-known-story-of-the-druze'><div class='link-bubble'>2024 Dec 26 &rarr; Future of Jewish</div></a>";
echo "<br><a href='https://jewishunpacked.com/shine-a-light-on-antisemitism-this-hanukkah-jewish-survival-depends-on-it/'><div class='link-bubble'>2024 Dec 25 &rarr; Jewish Unpacked</div></a>";
echo "</div>";

// echo " <a href='___'>___ &rarr; ___</div></a>";

echo "<br><span class='body-wrapper-spacing'></span>";

echo "<div class='body-subheader'>Get to know me</div>";
echo "<br><a href='https://levi.news'><div class='link-bubble'>About &rarr; levi.news</div></a>";
echo "<br><a href='https://levi.pictures'><div class='link-bubble'>Photography &rarr; levi.pictures</div></a>";
echo "<br><a href='https://conversationpieces.rsvp'><div class='link-bubble'>Education &rarr; conversationpieces.rsvp</div></a>";
echo "<br><a href='mailto:info@levi.news'><div class='link-bubble'>Email &rarr; info@levi.news</div></a>";

echo "<span class='footer-spacing'></span>";

echo "</div>";

echo "</body>";
echo "</html>";

?>
