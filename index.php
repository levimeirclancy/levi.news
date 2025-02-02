<?

include_once("index-content.php");

$rgb_background = [ 255, 255, 255 ];
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
	echo ".width-wrapper { display: block; margin-left: auto; margin-right: auto; width: 90%; max-width: 700px; position: relative; border-radius: 12px; } ";
	echo ".text-align-right { text-align: right; } ";
	echo ".text-align-left { text-align: left; } ";
	echo ".text-align-center { text-align: center; } ";

	echo ".position-right { right: 0; } ";
	echo ".position-left { left: 0} ";

	echo ".header-he, .header-en, .header-ja, .header-ku {  margin: 30px; font-family: Courier New; font-weight: 700; line-height: 0.9; display: inline-block;  } ";
	echo ".header-he { transform: rotate(-12deg); font-size: 260%; color: ".rgb_formatter($rgb_dark).";} ";
//	echo ".header-en { transform: rotate(9deg);font-size: 250%; margin: color: ".rgb_formatter($rgb_dark,0,0.85)."; } ";
	echo ".header-en { transform: rotate(0deg); font-size: 300%; margin: color: ".rgb_formatter($rgb_dark,0,0.85)."; } ";
	echo ".header-ja { transform: rotate(-12deg); font-size: 220%; color: ".rgb_formatter($rgb_dark,0,0.7)."; line-height: 1; } ";
	echo ".header-ku { transform: rotate(9deg);font-size: 250%; color: ".rgb_formatter($rgb_dark,0,0.55)."; line-height: 1; } ";
	echo ".header-bio { font-family: Courier New; font-size: 130%; line-height: 1.8; display: block; font-weight: 400; } ";
	echo ".header-bio a { color: ".rgb_formatter($rgb_dark)."; font-weight: 700; } ";

	echo ".splash-img { max-width: 550px; width: 90%; border-radius: 500px;  box-shadow: 0 -10px 20px -15px ".rgb_formatter($rgb_dark,0.3)."; }";

	echo ".section-wrapper { display: block; width: 100%; padding: 110px 10px 100px; margin: 0; box-sizing: border-box; color: ".rgb_formatter($rgb_light)."; box-shadow: 0 -10px 20px -15px ".rgb_formatter($rgb_dark,0.3)."; border-top: 2px solid ".rgb_formatter($rgb_background)."; } ";
	echo ".section-wrapper a { color: ".rgb_formatter($rgb_light)."; }";
	echo ".section-wrapper-gray { background: ".rgb_formatter($rgb_gray,-5)."; }";
	echo ".section-wrapper-gray .section-subheader { background: ".rgb_formatter($rgb_gray,0)."; }";
	echo ".section-wrapper-pink { background: ".rgb_formatter($rgb_gray,-15)."; }";
	echo ".section-wrapper-pink .section-subheader { background: ".rgb_formatter($rgb_gray,-20)."; }";
	echo ".section-wrapper-yellow {background: ".rgb_formatter($rgb_gray,-30)."; }";
	echo ".section-wrapper-yellow .section-subheader { background: ".rgb_formatter($rgb_gray,-35)."; }";
	echo ".section-wrapper-orange {background: ".rgb_formatter($rgb_gray,-45)."; }";
	echo ".section-wrapper-orange .section-subheader { background: ".rgb_formatter($rgb_gray,-50)."; }";

	echo ".section-subheader { position: absolute; top: -160px; font-family: Verdana; transform: rotate(-6deg); background: inherit; font-size: 180%; display: inline-block; font-weight: 700; line-height: 0.9; padding: 30px 40px; margin: 0; border: 2px solid ".rgb_formatter($rgb_background)."; border-radius: 50px 50px 50px 4px; } ";
	echo ".section-description { font-family: Verdana; font-size: 120%; display: block; margin: 0px auto; font-weight: 400; text-align: left; } ";
	echo ".section-img { position: absolute; display:block; bottom: -210px; max-width: 90%; width: 270px; margin: 0 20px; border-radius: 500px 500px 500px 500px; border: 3px solid ".rgb_formatter($rgb_background)."; } ";
	echo ".section-wrapper .section-img { width: 250px; } ";

	echo ".link-bubble { font-family: Courier New; text-tranform: uppercase; font-size: 110%; font-weight: 700; border-radius: 25px; border: 2px solid rgba(50,50,50,1); background: ".rgb_formatter($rgb_background)."; color: rgba(50,50,50,0.9); padding: 8px 35px; margin: 20px; display: inline-block; } ";

	echo ".footer-button { font-family: Verdana;transform: rotate(-5deg); background: inherit; font-size: 180%; display: inline-block; font-weight: 700; line-height: 0.9; padding: 30px 50px; margin: -80px auto 40px; border: 3px solid ".rgb_formatter($rgb_background)."; border-radius: 50px; } ";

	echo "</style>";
echo "</head>";
echo "<body>";

// Name-ful header

echo "<span class='body-spacing'></span>";
echo "<span class='body-spacing'></span>";

echo "<div class='header-bio width-wrapper'><b><center>שלום<br>こんにちは<br>چۆنی<br><br>Hello, my name is</center></b></div>";

// echo "<span class='body-spacing'></span>";

// echo "<div class='header-he'>לוי מאיר<br>קלנסי</div>";
echo "<div class='header-en'>Levi Meir<br>Clancy</div>";
// echo "<div class='header-ja'>レヴィ・メイア<br>クランシー</div>";
// echo "<div class='header-ku'>لیڤی مایر<br>کلنسی</div>";

echo "<span class='body-spacing'></span>";
echo "<span class='body-spacing'></span>";

// Header img
echo "<img src='_DSF3559.jpg' class='splash-img' />";

echo "<span class='body-spacing'></span>";
echo "<span class='body-spacing'></span>";

// Intro summary

echo "<div class='header-bio width-wrapper text-align-left'>I am a support mentor, a marketing/comms producer, and an all-around hard working guy. Check out my currently active projects, and <a href='mailto:info@levi.news'>email me</a> to be in touch.</div>";

echo "<span class='body-spacing'></span>";

// echo "<a href='https://levi.news'><div class='link-bubble'>About &rarr; levi.news</div></a>";
echo "<a href='https://levi.pictures'><div class='link-bubble'>Photography and videography &rarr; levi.pictures</div></a>";
echo "<a href='https://ziolicio.us'><div class='link-bubble'>Positive news &rarr; ziolicio.us</div></a>";
echo "<a href='https://conversationpieces.rsvp'><div class='link-bubble'>Identity building &rarr; conversationpieces.rsvp</div></a>";
echo "<a href='https://blogs.timesofisrael.com/author/levi-clancy/'><div class='link-bubble'>Blog &rarr; Times of Israel</div></a>";
echo "<a href='http://linkedin.com/in/levimeirclancy/'><div class='link-bubble'>LinkedIn</div></a>";

echo "<span class='body-spacing'></span>";
echo "<span class='body-spacing'></span>";
echo "<span class='body-spacing'></span>";
echo "<span class='body-spacing'></span>";

// Disability services

echo "<div class='section-wrapper section-wrapper-gray text-align-center'>";
echo "<div class='width-wrapper text-align-left'><div class='section-subheader'>Growth and compassion</div></div>";
echo "<div class='section-description width-wrapper'>";
	echo "As a <b>support mentor</b>, I empower adults with cognitive disabilities to build independence and community. My expertise includes strategic activities, personalized coaching, and creative experiences, all set in a neurodiverse and person-centered <q>urban village</q> inspired by Kibbutz Kishorit.";
	echo "</div>";
echo "<span class='body-spacing'></span>";
echo "<span class='body-spacing'></span>";
echo "<div class='width-wrapper'><img src='2025-01-15-img.jpg' class='section-img position-right' /></div>";
echo "</div>";

echo "<span class='body-spacing'></span>";
echo "<span class='body-spacing'></span>";
echo "<span class='body-spacing'></span>";
echo "<span class='body-spacing'></span>";

echo "<div class='width-wrapper'><img src='2025-01-15-img.jpg' class='section-img position-left' /></div>";

echo "<span class='body-spacing'></span>";
echo "<span class='body-spacing'></span>";
echo "<span class='body-spacing'></span>";
echo "<span class='body-spacing'></span>";

echo "<span class='body-spacing'></span>";
echo "<span class='body-spacing'></span>";

// Public speaking

echo "<div class='section-wrapper section-wrapper-pink text-align-center'>";
echo "<div class='width-wrapper text-align-left'><div class='section-subheader'>Impactful outreach</div></div>";
echo "<div class='section-description width-wrapper'>My <b>public speaking</b> ranges from walking tours to large auditoriums, with experience including TEDxDuhok, AMP Conf, GSMA Mobile 360, Qesher, and interviews on radio, podcasts, and television.</div>";
echo "<span class='body-spacing'></span>";
echo "<span class='body-spacing'></span>";
echo "<div class='width-wrapper'><img src='2025-01-15-img.jpg' class='section-img position-right' /></div>";
echo "</div>";

// Two extra for image
echo "<span class='body-spacing'></span>";
echo "<span class='body-spacing'></span>";

echo "<span class='body-spacing'></span>";

echo "<a href=''><div class='link-bubble'>2025 &rarr; Qesher</div></a>"; // 
echo "<a href='https://www.youtube.com/watch?v=n050dgtyOck'><div class='link-bubble'>2017 &rarr; TEDxDuhok</div></a>"; // 2017 Oct 10
echo "<div class='link-bubble'>2021 &rarr; Book Café Exhibition</div>"; //

echo "<span class='body-spacing'></span>";
echo '<iframe class="width-wrapper" width="700" height="394" src="https://www.youtube.com/embed/n050dgtyOck?si=H0CfehQI-sClFNOf" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>';
echo "<span class='body-spacing'></span>";

echo "<a href='https://www.youtube.com/watch?v=ptyGKlmVniE'><div class='link-bubble'>2021 &rarr; HARIF</div></a>"; // 2021 Mar 23
echo "<div class='link-bubble'>2020 &rarr; Mr. Erbil Exhibition</div>"; // 
echo "<a href='https://www.youtube.com/watch?v=BrDBsS1Sko0'><div class='link-bubble'>2019 &rarr; AMP Conf</div></a>"; // 

echo "<span class='body-spacing'></span>";
echo "<span class='body-spacing'></span>";
echo "<span class='body-spacing'></span>";


// Publishing

echo "<div class='section-wrapper section-wrapper-yellow text-align-center'>";
echo "<div class='width-wrapper text-align-left'><div class='section-subheader'>Publishing and production</div></div>";
echo "<div class='section-description width-wrapper'>A selection of clients as well as of projects I have produced or contributed to is given below.</div>";
echo "<span class='body-spacing'></span>";
echo "<span class='body-spacing'></span>";
echo "<div class='width-wrapper'><img src='2025-01-15-img.jpg' class='section-img position-right' /></div>";
echo "</div>";

echo "<span class='body-spacing'></span>";
echo "<span class='body-spacing'></span>";
echo "<span class='body-spacing'></span>";

echo "<a href=''><div class='link-bubble'>2024 &rarr; Roy Dahan</div></a>"; 
echo "<a href=''><div class='link-bubble'>2024 &rarr; ICON SV</div></a>"; 

echo "<span class='body-spacing'></span>";
echo '<iframe class="width-wrapper" width="700" height="394" src="https://www.youtube.com/embed/WUeJCvBMSOA?si=39xV0wJHiY4Fe_uI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>';
echo "<span class='body-spacing'></span>";

echo "<a href='https://www.futureofjewish.com/p/the-little-known-story-of-the-druze'><div class='link-bubble'>2024 &rarr; Future of Jewish</div></a>"; // 2024 Dec 26
echo "<a href='https://jewishunpacked.com/shine-a-light-on-antisemitism-this-hanukkah-jewish-survival-depends-on-it/'><div class='link-bubble'>2024 &rarr; Jewish Unpacked</div></a>"; // 2024 Dec 25
echo "<a href=''><div class='link-bubble'>2020 &rarr; U Penn Asian Art Gallery</div></a>"; 
echo "<a href=''><div class='link-bubble'>2019 &rarr; 100 Women Gallery</div></a>"; 
echo "<a href=''><div class='link-bubble'>2018 &rarr; UNIDO</div></a>";
echo "<a href=''><div class='link-bubble'>2019 &rarr; Kurdistan Region President</div></a>"; 
echo "<a href=''><div class='link-bubble'>2018 &rarr; State of Israel MFA</div></a>"; 

echo "<span class='body-spacing'></span>";
echo "<span class='body-spacing'></span>";
echo "<span class='body-spacing'></span>";
echo "<span class='body-spacing'></span>";

// Footer and coverage

// echo " <a href='___'>___ &rarr; ___</div></a>";

echo "<div class='section-wrapper section-wrapper-orange text-align-center'>";

echo "<span class='body-spacing'></span>";

echo "<div class='section-description width-wrapper'>Check out these mentions/interviews to learn more about my advocacy, starting from when I was an <q>early college</q> kid.</div>";

echo "<span class='body-spacing'></span>";

echo "<a href='https://birthrightisrael.foundation/blog/meet-photographer-and-la-birthright-israel-alum-levi-meir-clancy/'><div class='link-bubble'>2022 Jun 16 &rarr; Taglit-Birthright</div></a>";
echo "<a href='https://forward.com/news/482748/founder-of-jewish-museum-expelled-from-iraqi-kurdistan-levi-meir-clancy/'><div class='link-bubble'>2022 Feb 20 &rarr; The Forward</div></a>";
echo "<a href='https://forward.com/news/473198/in-iraqi-kurdistan-a-one-man-museum-celebrates-the-regions-jewish-history/'><div class='link-bubble'>2021 Jul 20 &rarr; The Forward</div></a>";

echo "<span class='body-spacing'></span>";
echo "<span class='body-spacing'></span>";
echo "<span class='body-spacing'></span>";

echo "<a href='mailto:info@levi.news'><div class='footer-button width-wrapper'>Email me</div></a>";

echo "<span class='body-spacing'></span>";
echo "<span class='body-spacing'></span>";
echo "<span class='body-spacing'></span>";

echo "</div>";

echo "</body>";
echo "</html>";

?>
