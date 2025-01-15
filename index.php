<?

include_once("index-content.php");

$rgb_background = [ 240, 240, 240 ];
$rgb_dark = [ 50, 50, 50 ];
$rgb_light = [ 240, 240, 240 ];
$rgb_gray = [ 55, 55, 55 ];
$rgb_pink = [ 245, 100, 175 ];
$rgb_orange = [ 255, 127 ,80 ];
$rgb_yellow = [ 250, 180, 0 ];
$rgb_blue = [ 0, 155, 220 ];

function rgb_formatter($rgb_array, $modifier=0, $opacity=1) {

	$array_formatted = [];

	if ( !(is_int($modifier)) || ( $opacity > 1 ) || ( $opacity < 1 ) ):
		
		$array_formatted = [ 0,0,0 ];
	else:
		foreach ($rgb_array as $array_result):

			if ( !(is_int($array_result)) ): $array_formatted = [ 0,0,0 ]; break; endif;
	
			$array_result += $modifier;
	
			if ($array_result > 255): $array_result = 255; endif;
			if ($array_result < 0): $array_result = 0; endif;
	
			$array_formatted[] = $array_result;
			if ( count($array_formatted) >= 3 ): break; endif;
	
			endforeach;

		endif;

	if ( count($array_formatted) !== 3 ): $array_formatted = [ 0,0,0 ]; endif;

	$array_formatted[] = $opacity;

	return "rgba(".implode(",", $array_formatted).")";

	}

echo "<!DOCTYPE html>";
echo "<html>";
echo "<head>";
echo "<style>";
	echo "body { font-family: Courier New; background: ".rgb_formatter($rgb_background)."; color: ".rgb_formatter($rgb_dark)."; line-height: 1.5; margin: 0; padding: 0; text-align: center; } ";

	echo ".body-spacing { display: block; height: 50px; } ";
	echo ".width-wrapper { display: block; margin: 0 auto; max-width: 700px; text-align: left; } ";

	echo ".header-he, .header-en, .header-ja, .header-ku {  margin: 30px; font-family: Courier New; font-weight: 700; line-height: 0.9; display: inline-block;  } ";
	echo ".header-he { transform: rotate(-12deg); font-size: 260%; color: ".rgb_formatter($rgb_dark).";} ";
	echo ".header-en { transform: rotate(9deg);font-size: 250%; margin: color: ".rgb_formatter($rgb_dark,0,0.85)."; } ";
	echo ".header-ja { transform: rotate(-12deg); font-size: 220%; color: ".rgb_formatter($rgb_dark,0,0.7)."; line-height: 1; } ";
	echo ".header-ku { transform: rotate(9deg);font-size: 250%; color: ".rgb_formatter($rgb_dark,0,0.55)."; line-height: 1; } ";
	echo ".header-bio { font-family: Courier New; font-size: 120%; line-height: 1.8; display: block; font-weight: 400; text-align: left; } ";
	echo ".header-bio a { color: ".rgb_formatter($rgb_dark)."; } ";

	echo ".section-wrapper { display: block; text-align: center; width: 100%; padding: 10px 10px 80px; margin: 0; box-sizing: border-box; color: ".rgb_formatter($rgb_light)."; box-shadow: 0 -10px 20px -15px rgba(30,30,30,0.3); border-top: 2px solid #f0f0f0; } ";
	echo ".section-wrapper a { color: ".rgb_formatter($rgb_light)."; }";
	echo ".section-wrapper-gray { background: ".rgb_formatter($rgb_gray,0)."; }";
	echo ".section-wrapper-gray .section-subheader { background: ".rgb_formatter($rgb_gray,0)."; }";
	echo ".section-wrapper-pink { background: ".rgb_formatter($rgb_pink)."; }";
	echo ".section-wrapper-pink .section-subheader { background: ".rgb_formatter($rgb_pink,-20)."; }";
	echo ".section-wrapper-yellow {background: ".rgb_formatter($rgb_yellow)."; }";
	echo ".section-wrapper-yellow .section-subheader { background: ".rgb_formatter($rgb_yellow,-20)."; }";
	echo ".section-wrapper-orange {background: ".rgb_formatter($rgb_orange)."; }";
	echo ".section-wrapper-orange .section-subheader { background: ".rgb_formatter($rgb_orange,-20)."; }";
	echo ".section-wrapper-blue { background: ".rgb_formatter($rgb_blue)."; }";
	echo ".section-wrapper-blue .section-subheader { background: ".rgb_formatter($rgb_blue,-20)."; }";

	echo ".section-subheader { font-family: Verdana; background: inherit; font-size: 180%; display: inline-block; font-weight: 700; line-height: 0.9; padding: 30px 40px; margin: -80px auto 40px; border-radius: 50px 50px 50px 0; } ";
	echo ".section-subheader-rotate-ccw { transform: rotate(-5deg); }";
	echo ".section-subheader-rotate-cw { transform: rotate(5deg); }";
	echo ".section-description { font-family: Verdana; font-size: 120%; display: block; margin: 0 auto; font-weight: 400; text-align: left; } ";

	echo ".link-bubble { font-family: Courier New; text-tranform: uppercase; font-size: 100%; font-weight: 700; border-radius: 25px; border: 2px solid rgba(50,50,50,1); background: ".rgb_formatter($rgb_background)."; color: rgba(50,50,50,0.9); padding: 8px 35px; margin: 15px; display: inline-block; text-align: center; } ";

	echo "</style>";
echo "</head>";
echo "<body>";

// Name-ful header

echo "<span class='body-spacing'></span>";
echo "<span class='body-spacing'></span>";

echo "<div class='header-bio width-wrapper'><b><center>שלום<br>Hello<br>こんにちは<br>چۆنی<br><br>My name is ...</center></b></div>";

echo "<span class='body-spacing'></span>";

echo "<div class='header-he'>לוי מאיר<br>קלנסי</div>";
echo "<div class='header-en'>Levi Meir<br>Clancy</div>";
echo "<div class='header-ja'>レヴィ・メイア<br>クランシー</div>";
echo "<div class='header-ku'>لیڤی مایر<br>کلنسی</div>";

echo "<span class='body-spacing'></span>";
echo "<span class='body-spacing'></span>";

// Intro summary

echo "<div class='header-bio width-wrapper'>I am a support mentor, a comms and marketing generalist, and an all-around hard worker. Send me an <a href='mailto:info@levi.news'>email</a> to be in touch.</div>";

echo "<span class='body-spacing'></span>";

// echo "<a href='https://levi.news'><div class='link-bubble'>About &rarr; levi.news</div></a>";
echo "<a href='https://levi.pictures'><div class='link-bubble'>Photography and videography &rarr; levi.pictures</div></a>";
echo "<a href='https://ziolicio.us'><div class='link-bubble'>Identity building &rarr; ziolicio.us</div></a>";
echo "<a href='https://conversationpieces.rsvp'><div class='link-bubble'>Educational exhibition &rarr; conversationpieces.rsvp</div></a>";
echo "<a href='https://blogs.timesofisrael.com/author/levi-clancy/'><div class='link-bubble'>Blog &rarr; Times of Israel</div></a>";
echo "<a href='mailto:info@levi.news'><div class='link-bubble'>Email &rarr; info@levi.news</div></a>";

echo "<span class='body-spacing'></span>";
echo "<span class='body-spacing'></span>";
echo "<span class='body-spacing'></span>";
echo "<span class='body-spacing'></span>";

// Disability services

echo "<div class='section-wrapper section-wrapper-orange'>";
echo "<div class='width-wrapper'><div class='section-subheader section-subheader-rotate-ccw width-wrapper'>Growth and compassion</div></div>";
echo "<div class='section-description width-wrapper'>";
echo "As a <b>support mentor</b>, I empower adults with cognitive disabilities to build independence and community through strategic challenges, personalized coaching, and creative experiences. Inspired by Kibbutz Kishorit, our neurodiverse <q>urban village</q> fosters growth and connection, blending innovative practices with Jewish values.";
echo "</div>";
echo "</div>";

echo "<span class='body-spacing'></span>";

echo "<a href='http://linkedin.com/in/levimeirclancy/'><div class='link-bubble'>LinkedIn</div></a>";

echo "<span class='body-spacing'></span>";
echo "<span class='body-spacing'></span>";
echo "<span class='body-spacing'></span>";

// Public speaking

echo "<div class='section-wrapper section-wrapper-pink'>";
echo "<div class='width-wrapper'><div class='section-subheader section-subheader-rotate-ccw width-wrapper'>Impactful outreach</div></div>";
echo "<div class='section-description width-wrapper'>My <b>public speaking</b> ranges from walking tours to large auditoriums, with experience including TEDxDuhok, AMP Conf, GSMA Mobile 360, Qesher, and interviews on radio, podcasts, and television.</div>";
echo "</div>";

echo "<span class='body-spacing'></span>";

echo "<a href='https://www.youtube.com/watch?v=n050dgtyOck'><div class='link-bubble'>2017 &rarr; TEDxDuhok</div></a>"; // 2017 Oct 10
echo "<a href='https://www.youtube.com/watch?v=ptyGKlmVniE'><div class='link-bubble'>2021 &rarr; HARIF</div></a>"; // 2021 Mar 23
echo "<a href='https://www.youtube.com/watch?v=BrDBsS1Sko0'><div class='link-bubble'>2019 &rarr; HARIF</div></a>"; // 

echo "<span class='body-spacing'></span>";
echo "<span class='body-spacing'></span>";
echo "<span class='body-spacing'></span>";


// Publishing

echo "<div class='section-wrapper section-wrapper-blue'>";
echo "<div class='width-wrapper'><div class='section-subheader section-subheader-rotate-ccw width-wrapper'>Publishing credits</div></div>";
echo "<div class='section-description width-wrapper'>I am...</div>";
echo "</div>";

echo "<span class='body-spacing'></span>";

echo "<a href='https://www.futureofjewish.com/p/the-little-known-story-of-the-druze'><div class='link-bubble'>2024 Dec 26 &rarr; Future of Jewish</div></a>";
echo "<a href='https://jewishunpacked.com/shine-a-light-on-antisemitism-this-hanukkah-jewish-survival-depends-on-it/'><div class='link-bubble'>2024 Dec 25 &rarr; Jewish Unpacked</div></a>";

echo "<span class='body-spacing'></span>";
echo "<span class='body-spacing'></span>";
echo "<span class='body-spacing'></span>";
echo "<span class='body-spacing'></span>";

// Footer and coverage

// echo " <a href='___'>___ &rarr; ___</div></a>";

echo "<div class='section-wrapper section-wrapper-gray'>";

echo "<span class='body-spacing'></span>";
echo "<span class='body-spacing'></span>";
echo "<span class='body-spacing'></span>";

echo "<div class='section-description width-wrapper'>Check out these mentions to learn more.</div>";

echo "<span class='body-spacing'></span>";
echo "<span class='body-spacing'></span>";

echo "<a href='https://birthrightisrael.foundation/blog/meet-photographer-and-la-birthright-israel-alum-levi-meir-clancy/'><div class='link-bubble'>2022 Jun 16 &rarr; Taglit-Birthright</div></a>";
echo "<a href='https://forward.com/news/482748/founder-of-jewish-museum-expelled-from-iraqi-kurdistan-levi-meir-clancy/'><div class='link-bubble'>2022 Feb 20 &rarr; The Forward</div></a>";
echo "<a href='https://forward.com/news/473198/in-iraqi-kurdistan-a-one-man-museum-celebrates-the-regions-jewish-history/'><div class='link-bubble'>2021 Jul 20 &rarr; The Forward</div></a>";

echo "<span class='body-spacing'></span>";
echo "<span class='body-spacing'></span>";
echo "<span class='body-spacing'></span>";

echo "<a href='mailto:info@levi.news'><div class='section-subheader section-subheader-rotate-ccw width-wrapper'>Email me</div></a>";

echo "<span class='body-spacing'></span>";

echo "</div>";

echo "</body>";
echo "</html>";

?>
