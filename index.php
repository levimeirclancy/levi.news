<?

include_once("index-content.php");

$rgb_gray = [ 55, 55, 55 ];
$rgb_pink = [ 245, 100, 175 ];
$rgb_orange = [ 255, 127 ,80 ];
$rgb_yellow = [ 250, 180, 0 ];
$rgb_blue = [ 0, 155, 220 ];

function rgb_formatter($rgb_array, $modifier=0) {

	$array_formatted = [];

	if ( !(is_int($modifier)) ): return "0,0,0"; endif;

	foreach ($rgb_array as $array_result):

		if ( !(is_int($array_result)) ): return "0,0,0"; endif;

		$array_result += $modifier;

		if ($array_result > 255): $array_result = 255; endif;
		if ($array_result < 0): $array_result = 0; endif;

		$array_formatted[] = $array_result;
		if ( count($array_formatted) >= 3 ): break; endif;

		endforeach;

	if ( count($array_formatted) !== 3 ): return "0,0,0"; endif;

	return implode(",", $array_formatted);

	}

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

	echo ".section-wrapper { display: block; text-align: center; width: 100%; padding: 20px 10px 60px; margin: 30px 0 50px 0; box-sizing: border-box; color: #f0f0f0; box-shadow: 0 -10px 20px -15px rgba(30,30,30,0.3); border-top: 2px solid #f0f0f0; } ";
	echo ".section-wrapper-gray { background: rgba(".rgb_formatter($rgb_gray).",1); }";
	echo ".section-wrapper-gray .section-subheader { background: rgba(".rgb_formatter($rgb_gray,0).",1); }";
	echo ".section-wrapper-pink { background: rgba(".rgb_formatter($rgb_pink).",1); }";
	echo ".section-wrapper-pink .section-subheader { background: rgba(".rgb_formatter($rgb_pink,-20).",1); }";
	echo ".section-wrapper-yellow {background: rgba(".rgb_formatter($rgb_yellow).",1); }";
	echo ".section-wrapper-yellow .section-subheader { background: rgba(".rgb_formatter($rgb_yellow,-20).",1); }";
	echo ".section-wrapper-orange {background: rgba(".rgb_formatter($rgb_orange).",1); }";
	echo ".section-wrapper-orange .section-subheader { background: rgba(".rgb_formatter($rgb_orange,-20).",1); }";
	echo ".section-wrapper-blue { background: rgba(".rgb_formatter($rgb_blue).",1); }";
	echo ".section-wrapper-blue .section-subheader { background: rgba(".rgb_formatter($rgb_blue,-20).",1); }";

	echo ".section-subheader { font-family: Verdana; background: inherit; font-size: 180%; display: inline-block; font-weight: 700; line-height: 0.9; padding: 30px 40px; margin: -90px auto 50px; border-radius: 50px 50px 50px 0; } ";
	echo ".section-subheader-rotate-ccw { transform: rotate(-5deg); }";
	echo ".section-subheader-rotate-cw { transform: rotate(5deg); }";
	echo ".section-description { font-family: Verdana; font-size: 120%; display: block; margin: 0 auto; font-weight: 400; text-align: left; } ";

	echo ".link-bubble { font-family: Courier New; text-tranform: uppercase; font-size: 100%; font-weight: 700; border-radius: 25px; border: 2px solid rgba(50,50,50,1); color: rgba(50,50,50,0.9); padding: 8px 35px; margin: 15px; display: inline-block; text-align: center; } ";

	echo "</style>";
echo "</head>";
echo "<body>";

// Name-ful header

echo "<span class='body-spacing'></span>";
echo "<span class='body-spacing'></span>";

echo "<div class='header-bio width-wrapper'><b><center>My name is ...</center></b></div>";

echo "<span class='body-spacing'></span>";

echo "<div class='header-he'>לוי מאיר<br>קלנסי</div>";
echo "<div class='header-en'>Levi Meir<br>Clancy</div>";
echo "<div class='header-ja'>レヴィ・メイア<br>クランシー</div>";
echo "<div class='header-ku'>لیڤی مایر<br>کلنسی</div>";

echo "<span class='body-spacing'></span>";

// Intro summary

echo "<div class='header-bio width-wrapper'>I am a direct support professional, a media generalist, and an all-around hard worker.</div>";

echo "<span class='body-spacing'></span>";

// echo "<a href='https://levi.news'><div class='link-bubble'>About &rarr; levi.news</div></a>";
echo "<a href='https://levi.pictures'><div class='link-bubble'>Photography and videography &rarr; levi.pictures</div></a>";
echo "<a href='https://ziolicio.us'><div class='link-bubble'>Identity building &rarr; ziolicio.us</div></a>";
echo "<a href='https://conversationpieces.rsvp'><div class='link-bubble'>Educational exhibition &rarr; conversationpieces.rsvp</div></a>";
echo "<a href='https://blogs.timesofisrael.com/author/levi-clancy/'><div class='link-bubble'>Blog &rarr; Times of Israel</div></a>";
echo "<a href='mailto:info@levi.news'><div class='link-bubble'>Email &rarr; info@levi.news</div></a>";

echo "<span class='body-spacing'></span>";
echo "<span class='body-spacing'></span>";

// Disability services

echo "<div class='section-wrapper section-wrapper-orange'>";
echo "<div class='section-subheader section-subheader-rotate-ccw width-wrapper'>Growth and Compassion</div>";
echo "<div class='section-description width-wrapper'>";
echo "As a <b>direct support professional</b>, I empower adults with cognitive disabilities to build independence and community through strategic challenges, personalized coaching, and creative experiences. Inspired by Kibbutz Kishorit, our neurodiverse <q>urban village</q> fosters growth and connection, blending innovative practices with Jewish values.";
echo "</div>";
echo "</div>";

echo "<span class='body-spacing'></span>";

echo "<a href='http://linkedin.com/in/levimeirclancy/'><div class='link-bubble'>LinkedIn</div></a>";

echo "<span class='body-spacing'></span>";
echo "<span class='body-spacing'></span>";

// Public speaking

echo "<div class='section-wrapper section-wrapper-pink'>";
echo "<div class='section-subheader section-subheader-rotate-ccw width-wrapper'>Impactful outreach</div>";
echo "<div class='section-description width-wrapper'>My <b>public speaking</b> ranges from walking tours to large auditoriums, with experience including TEDxDuhok, AMP Conf, GSMA Mobile 360, Qesher, and interviews on radio, podcasts, and television.</div>";
echo "</div>";

echo "<span class='body-spacing'></span>";

echo "<a href='https://www.youtube.com/watch?v=n050dgtyOck'><div class='link-bubble'>2017 &rarr; TEDxDuhok</div></a>"; // 2017 Oct 10
echo "<a href='https://www.youtube.com/watch?v=ptyGKlmVniE'><div class='link-bubble'>2021 &rarr; HARIF</div></a>"; // 2021 Mar 23
echo "<a href='https://www.youtube.com/watch?v=BrDBsS1Sko0'><div class='link-bubble'>2019 &rarr; HARIF</div></a>"; // 

echo "<span class='body-spacing'></span>";
echo "<span class='body-spacing'></span>";

// Publishing

echo "<div class='section-wrapper section-wrapper-blue'>";
echo "<div class='section-subheader section-subheader-rotate-ccw width-wrapper'>Publishing credits</div>";
echo "<div class='section-description width-wrapper'>I am...</div>";
echo "</div>";

echo "<span class='body-spacing'></span>";

echo "<a href='https://www.futureofjewish.com/p/the-little-known-story-of-the-druze'><div class='link-bubble'>2024 Dec 26 &rarr; Future of Jewish</div></a>";
echo "<a href='https://jewishunpacked.com/shine-a-light-on-antisemitism-this-hanukkah-jewish-survival-depends-on-it/'><div class='link-bubble'>2024 Dec 25 &rarr; Jewish Unpacked</div></a>";

echo "<span class='body-spacing'></span>";
echo "<span class='body-spacing'></span>";

// Footer and coverage

// echo " <a href='___'>___ &rarr; ___</div></a>";

echo "<span class='body-spacing'></span>";
echo "<span class='body-spacing'></span>";
echo "<span class='body-spacing'></span>";

echo "<div class='section-wrapper section-wrapper-gray'><br>";
echo "<div class='section-subheader width-wrapper'>Get to know me</div>";
echo "<div class='section-description width-wrapper'>Send me an <a href='mailto:info@levi.news'>email</a> to be in touch. To read more about me, take a look at some press and interviews from childhood to adulthood.</div>";
echo "</div>";

echo "<span class='body-spacing'></span>";

echo "<a href='https://birthrightisrael.foundation/blog/meet-photographer-and-la-birthright-israel-alum-levi-meir-clancy/'><div class='link-bubble'>2022 Jun 16 &rarr; Taglit-Birthright</div></a>";
echo "<a href='https://forward.com/news/482748/founder-of-jewish-museum-expelled-from-iraqi-kurdistan-levi-meir-clancy/'><div class='link-bubble'>2022 Feb 20 &rarr; The Forward</div></a>";
echo "<a href='https://forward.com/news/473198/in-iraqi-kurdistan-a-one-man-museum-celebrates-the-regions-jewish-history/'><div class='link-bubble'>2021 Jul 20 &rarr; The Forward</div></a>";

echo "<span class='body-spacing'></span>";
echo "<span class='body-spacing'></span>";

echo "</body>";
echo "</html>";

?>
