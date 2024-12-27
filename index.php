<?

include_once("index-content.php");

$rgb_gray = "55,55,55";
$rgb_pink = "245,100,175";
$rgb_orange = "255,127,80";
$rgb_yellow = "250,180,0";
$rgb_blue = "0,155,220";

echo "<!DOCTYPE html>";
echo "<html>";
echo "<head>";
echo "<style>";
	echo "body { font-family: Courier New; background: #f0f0f0; color: #222; line-height: 1.5; margin: 0; padding: 0; text-align: center; } ";

	echo ".body-spacing { display: block; height: 50px; } ";
	echo ".width-wrapper { display: block; max-width: 700px; margin: 50px auto;} ";

	echo ".header-he, .header-en, .header-ja, .header-ku {  margin: 30px; font-family: Courier New; font-weight: 700; line-height: 0.9; display: inline-block;  } ";
	echo ".header-he { transform: rotate(-12deg); font-size: 260%;  color: rgba(0,0,0,1);} ";
	echo ".header-en { transform: rotate(9deg);font-size: 250%; margin: color: rgba(50,50,50,1); } ";
	echo ".header-ja { transform: rotate(-12deg); font-size: 220%; color: rgba(100,100,100,1); line-height: 1; } ";
	echo ".header-ku { transform: rotate(9deg);font-size: 250%; color: rgba(150,150,150,1); line-height: 1; } ";
	echo ".header-bio { font-family: Courier New; font-size: 120%; line-height: 1.8; display: block; font-weight: 400; text-align: left; } ";

	echo ".section-info { display: block; text-align: left; width: 100%; padding: 50px 10px; margin: 30px 0 30px 0; box-sizing: border-box; color: #f0f0f0; } ";
	echo ".section-gray { background: rgba(".$rgb_gray.",1); }";
	echo ".section-pink { background: rgba(".$rgb_pink.",1); }";
	echo ".section-yellow {background: rgba(".$rgb_yellow.",1); }";
	echo ".section-orange {background: rgba(".$rgb_orange.",1); }";
	echo ".section-blue { background: rgba(".$rgb_blue.",1); }";

	echo ".section-subheader { font-family: Verdana; font-size: 200%; display: block; transform: rotate(-5deg); font-weight: 700; line-height: 0.9; max-width: 700px; margin: 50px auto; } ";
	echo ".section-description { font-family: Verdana; font-size: 100%; display: block; font-weight: 400; } ";

	echo ".link-bubble { font-family: Courier New; text-tranform: uppercase; font-size: 85%; font-weight: 700; border-radius: 25px; border: 2px solid rgba(50,50,50,1); color: rgba(50,50,50,0.9); padding: 8px 35px; margin: 15px; display: inline-block; text-align: center; } ";

	echo "</style>";
echo "</head>";
echo "<body>";

echo "<span class='body-spacing'></span>";
echo "<span class='body-spacing'></span>";

echo "<div class='header-he'>לוי מאיר<br>קלנסי</div>";
echo "<div class='header-en'>Levi Meir<br>Clancy</div>";
echo "<div class='header-ja'>レヴィ・メイア<br>クランシー</div>";
echo "<div class='header-ku'>لیڤی مایر<br>کلنسی</div>";

echo "<span class='body-spacing'></span>";

echo "<div class='header-bio width-wrapper'><b>Levi Meir Clancy is a photographer, videographer, and public speaker.</b> Shaped by his Jewish, Ryukyuan (Indigenous Japanese), and LGBTQ experience, his work explores power dynamics, context, and identity. His professional background in history, communications, and advocacy — from Iraq to the Bay Area — is poured into creating impactful visual stories, educational materials, and in-person experiences.</div>";

echo "<span class='body-spacing'></span>";

echo "<div class='section-info section-orange'>";
echo "<div class='section-subheader width-wrapper'>Passion and purpose</div>";
echo "<div class='section-description width-wrapper'>
I tell stories through photos, videos, and events. My work explores Jewishness, identity, personal history, and cross-cultural connections. Rooted in my Jewish values, I also support adults with disabilities in building independence and community.</div>";
echo "</div>";

echo "<a href='http://linkedin.com/in/levimeirclancy/'><div class='link-bubble'>LinkedIn</div></a>";
echo "<a href='https://blogs.timesofisrael.com/author/levi-clancy/'><div class='link-bubble'>Blogs @ Times of Israel</div></a>";

echo "<span class='body-spacing'></span>";

echo "<div class='section-info section-pink'>";
echo "<div class='section-subheader width-wrapper'>Public speaking</div>";
echo "<div class='section-description width-wrapper'>I am a seasoned public speaker who has delivered talks in prestigious settings such as TEDxDuhok, AMP Conf, GSMA Mobile 360, and Qesher. My presentations focus on Jewish heritage, cultural advocacy, and fostering cross-cultural understanding, drawing from my extensive lived experiences with varied identites and geographies.</div>";
echo "</div>";

echo "<a href='https://www.youtube.com/watch?v=n050dgtyOck'><div class='link-bubble'>2017 Oct 10 &rarr; TEDxDuhok</div></a>";
echo "<a href='https://www.youtube.com/watch?v=ptyGKlmVniE&t=8s'><div class='link-bubble'>2021 Mar 23 &rarr; HARIF</div></a>";

echo "<span class='body-spacing'></span>";

echo "<div class='section-info section-blue'>";
echo "<div class='section-subheader width-wrapper'>Get to know me</div>";
echo "<div class='section-description width-wrapper'>I am...</div>";
echo "</div>";

echo "<a href='https://levi.news'><div class='link-bubble'>About &rarr; levi.news</div></a>";
echo "<a href='https://levi.pictures'><div class='link-bubble'>Photography &rarr; levi.pictures</div></a>";
echo "<a href='https://conversationpieces.rsvp'><div class='link-bubble'>Education &rarr; conversationpieces.rsvp</div></a>";
echo "<a href='mailto:info@levi.news'><div class='link-bubble'>Email &rarr; info@levi.news</div></a>";

echo "<span class='body-spacing'></span>";
echo "<span class='body-spacing'></span>";
echo "<span class='body-spacing'></span>";

echo "<div class='section-info section-gray'>";
echo "<div class='section-subheader width-wrapper'>Press</div>";
echo "<div class='section-description width-wrapper'>Levi Meir has been featured in media coverage from childhood to adulthood, highlighting his work, advocacy, and achievements.</div>";
echo "</div>";

echo "<a href='https://birthrightisrael.foundation/blog/meet-photographer-and-la-birthright-israel-alum-levi-meir-clancy/'><div class='link-bubble'>2022 Jun 16 &rarr; Taglit-Birthright</div></a>";
echo "<a href='https://forward.com/news/482748/founder-of-jewish-museum-expelled-from-iraqi-kurdistan-levi-meir-clancy/'><div class='link-bubble'>2022 Feb 20 &rarr; The Forward</div></a>";
echo "<a href='https://forward.com/news/473198/in-iraqi-kurdistan-a-one-man-museum-celebrates-the-regions-jewish-history/'><div class='link-bubble'>2021 Jul 20 &rarr; The Forward</div></a>";

echo "<span class='body-spacing'></span>";

echo "<div class='section-info section-gray'>";
echo "<div class='section-subheader width-wrapper'>Credits</div>";
echo "<div class='section-description width-wrapper'>I am...</div>";
echo "</div>";

echo "<a href='https://www.futureofjewish.com/p/the-little-known-story-of-the-druze'><div class='link-bubble'>2024 Dec 26 &rarr; Future of Jewish</div></a>";
echo "<a href='https://jewishunpacked.com/shine-a-light-on-antisemitism-this-hanukkah-jewish-survival-depends-on-it/'><div class='link-bubble'>2024 Dec 25 &rarr; Jewish Unpacked</div></a>";

// echo " <a href='___'>___ &rarr; ___</div></a>";

echo "<span class='body-spacing'></span>";



echo "</body>";
echo "</html>";

?>
