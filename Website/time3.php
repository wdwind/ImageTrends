<?php 
	$filename = "";
	$desc = "";
	if (count($_GET) > 0){
		$filename = $_GET["time"];
		$desc = $_GET["desc"];
	} else{
		$filename = "201401";
		$desc = "Jan. 2014";
	}
?>

<?php 
	$img_num = array("000101"=>"391","000211"=>"2","000810"=>"1","000906"=>"1","000907"=>"4","000908"=>"1","000910"=>"1","001008"=>"1","001010"=>"3","001011"=>"5","001012"=>"3","001101"=>"7","001102"=>"35","001103"=>"55","001104"=>"55","001105"=>"78","001106"=>"62","001107"=>"78","001108"=>"84","001109"=>"107","001110"=>"115","001111"=>"127","001112"=>"188","001201"=>"201","001202"=>"175","001203"=>"256","001204"=>"988","001205"=>"745","001306"=>"1","001403"=>"8","127562"=>"1","136191"=>"2","160101"=>"27","189912"=>"126","196306"=>"1","196912"=>"3","197001"=>"3929","197003"=>"4","197708"=>"26","198312"=>"7","198401"=>"75215","199001"=>"9","199403"=>"1","199405"=>"1","199406"=>"8","199407"=>"3","199409"=>"1","199411"=>"1","199503"=>"8","199504"=>"2","199505"=>"2","199506"=>"3","199509"=>"4","199510"=>"4","199511"=>"10","199512"=>"10","199601"=>"7","199603"=>"3","199604"=>"5","199605"=>"2","199606"=>"9","199607"=>"14","199608"=>"6","199609"=>"3","199610"=>"11","199612"=>"2","199701"=>"1","199703"=>"3","199704"=>"3","199705"=>"2","199706"=>"5","199707"=>"82","199708"=>"128","199710"=>"1","199711"=>"2","199802"=>"4","199803"=>"7","199804"=>"7915","199805"=>"1","199806"=>"1128","199807"=>"82","199808"=>"2","199809"=>"3","199810"=>"6","199811"=>"8","199812"=>"116","199902"=>"2","199903"=>"3","199904"=>"129","199905"=>"8","199906"=>"25","199907"=>"3","199908"=>"3","199909"=>"2","199910"=>"7","199911"=>"4","199912"=>"21","200000"=>"5","200001"=>"4335","200002"=>"17","200003"=>"12","200004"=>"5","200006"=>"5","200008"=>"15","200009"=>"6","200010"=>"3","200011"=>"22703","200012"=>"1","200101"=>"3","200102"=>"125","200103"=>"63","200104"=>"39","200105"=>"131","200106"=>"158","200107"=>"204","200108"=>"52","200109"=>"48","200110"=>"62","200111"=>"50","200112"=>"31","200201"=>"54","200202"=>"70","200203"=>"46","200204"=>"246","200205"=>"130","200206"=>"279","200207"=>"285","200208"=>"203","200209"=>"149","200210"=>"274","200211"=>"171","200212"=>"254","200301"=>"540","200302"=>"572","200303"=>"899","200304"=>"1049","200305"=>"1465","200306"=>"1533","200307"=>"1939","200308"=>"1229","200309"=>"2466","200310"=>"2909","200311"=>"2155","200312"=>"2697","200401"=>"2194","200402"=>"332","200403"=>"275","200404"=>"1007","200405"=>"304","200406"=>"495","200407"=>"404","200408"=>"1185","200409"=>"2583","200410"=>"4874","200411"=>"4119","200412"=>"7440","200501"=>"8538","200502"=>"7386","200503"=>"6956","200504"=>"7987","200505"=>"6936","200506"=>"5632","200507"=>"5143","200508"=>"5762","200509"=>"4841","200510"=>"4205","200511"=>"3601","200512"=>"1885","200601"=>"1962","200602"=>"2547","200603"=>"3046","200604"=>"2654","200605"=>"2381","200606"=>"3012","200607"=>"2535","200608"=>"1551","200609"=>"1182","200610"=>"2189","200611"=>"1756","200612"=>"1366","200701"=>"2206","200702"=>"2063","200703"=>"4378","200704"=>"2785","200705"=>"2953","200706"=>"2524","200707"=>"3783","200708"=>"2467","200709"=>"3955","200710"=>"3066","200711"=>"2731","200712"=>"2426","200801"=>"144086","200802"=>"3279","200803"=>"4183","200804"=>"4105","200805"=>"3512","200806"=>"3495","200807"=>"6475","200808"=>"6907","200809"=>"8058","200810"=>"9994","200811"=>"8721","200812"=>"8034","200901"=>"9848","200902"=>"9022","200903"=>"15141","200904"=>"11868","200905"=>"9866","200906"=>"10670","200907"=>"12222","200908"=>"17076","200909"=>"16848","200910"=>"24650","200911"=>"16209","200912"=>"19209","201001"=>"16853","201002"=>"15200","201003"=>"18642","201004"=>"18982","201005"=>"30466","201006"=>"22277","201007"=>"19940","201008"=>"20494","201009"=>"23478","201010"=>"32411","201011"=>"54391","201012"=>"32846","201101"=>"35133","201102"=>"37639","201103"=>"40032","201104"=>"29438","201105"=>"34911","201106"=>"34858","201107"=>"42071","201108"=>"45361","201109"=>"47005","201110"=>"56295","201111"=>"193716","201112"=>"51161","201201"=>"64359","201202"=>"65879","201203"=>"131414","201204"=>"87106","201205"=>"175761","201206"=>"117431","201207"=>"174917","201208"=>"172394","201209"=>"131561","201210"=>"143611","201211"=>"148389","201212"=>"132959","201301"=>"141517","201302"=>"93776","201303"=>"75887","201304"=>"852044","201305"=>"169669","201306"=>"211756","201307"=>"230018","201308"=>"917700","201309"=>"600002","201310"=>"132776","201311"=>"130095","201312"=>"168514","201401"=>"270971","201402"=>"438319","201403"=>"1716437","201712"=>"8","205310"=>"1","205803"=>"3","209707"=>"1","210602"=>"6","218508"=>"5",);
?>

<?php 
	function clusterStat($time, $desc){
		global $img_num;

		echo "<div id=\"title\">Cluster overview:</div>";
		$num = intval(0.5 * $img_num[$time]);
		if ($num > 5000) {
			$num = 5000;
		}

		echo "<div id=\"desc\">Description: in time period<span> ".$desc."</span>, there are<span> ".$img_num[$time]." </span>images in<span> ".$num." </span>clusters.</div>";

		if ($img_num[$time] >= 65) {
			echo "<div id=\"clusters_fig_1\">Figure of top 10 clusters in two dimention:</div>";
			echo "<img src=\"figures/".$time."_cluster_plot.png\" width=595px height=100%>";
		}
		
		echo "<div id=\"clusters_fig_2\">Figure of clusters' sizes:</div>";
		echo "<img src=\"figures/".$time."_cluster_stat.png\" width=595px height=100%>";

	}
?>

<?php
	$MAX_IMG = 101;

	function readTimeFile($time) {
		//clusterStat($time);

		$output = null;
		$file = "Data/".$time.".out";
		if (file_exists($file) && is_readable($file)){
			$file_handle = fopen($file, "r");
			$i = 1;

			global $filename;
			global $desc;
			global $MAX_IMG;
			
			while (!feof($file_handle)) {
				$line = fgets($file_handle);

				if (strlen($line) < 10)
					continue;
				
				$items = explode("\t", $line, 3);
				$img = explode("|", $items[1]);

				echo "<div class=\"gallery\" style=\"height:320px;float:left;\"><img src=\"".$img[5]."\" width=\"400\" height=\"320\"></div>";
				//echo "<div class=\"gallery\" style=\"height:340px;float:left;\"><img src=\"".$img[5]."\" width=\"75%\"></div>";
				
				echo "<div class=\"img_desc\">";
				
				echo "<p class=\"counter\">".$i.".</p>";
				
				echo "<p>Popularity: ".$items[0]."</p>";

				echo "<p>Size: ".$img[2]."&#215;".$img[3]."</p>";

				echo "<p>Hashcode: ".$img[1]."</p>";

				echo "<p><a href=\"".$img[5]."\" target=\"_blank\">Source link</a></p>";

				echo "<p><a href=\"index.php?time=".$filename."&desc=".$desc."&cluster=".$i."\">Cluster detail</a></p>";
				
				//echo "</p>";
				
				echo "</div>";
				
				echo "<div class=\"clear\"></div>";
				
				//echo "<hr>";
				
				$i ++;
				
				if ($i >= $MAX_IMG) {
					break;
				}
			}
			
			fclose($file_handle);
		}
		//return $output;
		//echo "Hello world!";
	}

	//writeMsg();
?>

<div id="article">
	<!--<div id="main_time"><p><?php echo $desc; ?></p><p id="raw"><a href="Data/<?php echo $filename; ?>">[Raw result]</a></p></div>-->
	<div id="stat">
		<?php
			clusterStat($filename, $desc); 
		?>
	</div>
	<div id="gallery_frame">
		<p id="top">Top 100 clusters:</p>
		<p>
			<?php 
				//echo $filename; 
				readTimeFile($filename);
			?>
		</p>
	</div>
</div>