<div id="aside">
	<?php 
		$time_num = array("198401", "199001", "199403", "199405", "199406", "199407", "199409", "199411", "199503", "199504", "199505", "199506", "199509", "199510", "199511", "199512", "199601", "199603", "199604", "199605", "199606", "199607", "199608", "199609", "199610", "199612", "199701", "199703", "199704", "199705", "199706", "199707", "199708", "199710", "199711", "199802", "199803", "199804", "199805", "199806", "199807", "199808", "199809", "199810", "199811", "199812", "199902", "199903", "199904", "199905", "199906", "199907", "199908", "199909", "199910", "199911", "199912", "200000", "200001", "200002", "200003", "200004", "200006", "200008", "200009", "200010", "200011", "200012", "200101", "200102", "200103", "200104", "200105", "200106", "200107", "200108", "200109", "200110", "200111", "200112", "200201", "200202", "200203", "200204", "200205", "200206", "200207", "200208", "200209", "200210", "200211", "200212", "200301", "200302", "200303", "200304", "200305", "200306", "200307", "200308", "200309", "200310", "200311", "200312", "200401", "200402", "200403", "200404", "200405", "200406", "200407", "200408", "200409", "200410", "200411", "200412", "200501", "200502", "200503", "200504", "200505", "200506", "200507", "200508", "200509", "200510", "200511", "200512", "200601", "200602", "200603", "200604", "200605", "200606", "200607", "200608", "200609", "200610", "200611", "200612", "200701", "200702", "200703", "200704", "200705", "200706", "200707", "200708", "200709", "200710", "200711", "200712", "200801", "200802", "200803", "200804", "200805", "200806", "200807", "200808", "200809", "200810", "200811", "200812", "200901", "200902", "200903", "200904", "200905", "200906", "200907", "200908", "200909", "200910", "200911", "200912", "201001", "201002", "201003", "201004", "201005", "201006", "201007", "201008", "201009", "201010", "201011", "201012", "201101", "201102", "201103", "201104", "201105", "201106", "201107", "201108", "201109", "201110", "201111", "201112", "201201", "201202", "201203", "201204", "201205", "201206", "201207", "201208", "201209", "201210", "201211", "201212", "201301", "201302", "201303", "201304", "201305", "201306", "201307", "201308", "201309", "201310", "201311", "201312", "201401", "201402", "201403");
		$time_desc = array("Jan. 1984", "Jan. 1990", "Mar. 1994", "May. 1994", "Jun. 1994", "Jul. 1994", "Sep. 1994", "Nov. 1994", "Mar. 1995", "Apr. 1995", "May. 1995", "Jun. 1995", "Sep. 1995", "Oct. 1995", "Nov. 1995", "Dec 1995", "Jan. 1996", "Mar. 1996", "Apr. 1996", "May. 1996", "Jun. 1996", "Jul. 1996", "Aug. 1996", "Sep. 1996", "Oct. 1996", "Dec 1996", "Jan. 1997", "Mar. 1997", "Apr. 1997", "May. 1997", "Jun. 1997", "Jul. 1997", "Aug. 1997", "Oct. 1997", "Nov. 1997", "Feb. 1998", "Mar. 1998", "Apr. 1998", "May. 1998", "Jun. 1998", "Jul. 1998", "Aug. 1998", "Sep. 1998", "Oct. 1998", "Nov. 1998", "Dec 1998", "Feb. 1999", "Mar. 1999", "Apr. 1999", "May. 1999", "Jun. 1999", "Jul. 1999", "Aug. 1999", "Sep. 1999", "Oct. 1999", "Nov. 1999", "Dec 1999", " 2000", "Jan. 2000", "Feb. 2000", "Mar. 2000", "Apr. 2000", "Jun. 2000", "Aug. 2000", "Sep. 2000", "Oct. 2000", "Nov. 2000", "Dec 2000", "Jan. 2001", "Feb. 2001", "Mar. 2001", "Apr. 2001", "May. 2001", "Jun. 2001", "Jul. 2001", "Aug. 2001", "Sep. 2001", "Oct. 2001", "Nov. 2001", "Dec 2001", "Jan. 2002", "Feb. 2002", "Mar. 2002", "Apr. 2002", "May. 2002", "Jun. 2002", "Jul. 2002", "Aug. 2002", "Sep. 2002", "Oct. 2002", "Nov. 2002", "Dec 2002", "Jan. 2003", "Feb. 2003", "Mar. 2003", "Apr. 2003", "May. 2003", "Jun. 2003", "Jul. 2003", "Aug. 2003", "Sep. 2003", "Oct. 2003", "Nov. 2003", "Dec 2003", "Jan. 2004", "Feb. 2004", "Mar. 2004", "Apr. 2004", "May. 2004", "Jun. 2004", "Jul. 2004", "Aug. 2004", "Sep. 2004", "Oct. 2004", "Nov. 2004", "Dec 2004", "Jan. 2005", "Feb. 2005", "Mar. 2005", "Apr. 2005", "May. 2005", "Jun. 2005", "Jul. 2005", "Aug. 2005", "Sep. 2005", "Oct. 2005", "Nov. 2005", "Dec 2005", "Jan. 2006", "Feb. 2006", "Mar. 2006", "Apr. 2006", "May. 2006", "Jun. 2006", "Jul. 2006", "Aug. 2006", "Sep. 2006", "Oct. 2006", "Nov. 2006", "Dec 2006", "Jan. 2007", "Feb. 2007", "Mar. 2007", "Apr. 2007", "May. 2007", "Jun. 2007", "Jul. 2007", "Aug. 2007", "Sep. 2007", "Oct. 2007", "Nov. 2007", "Dec 2007", "Jan. 2008", "Feb. 2008", "Mar. 2008", "Apr. 2008", "May. 2008", "Jun. 2008", "Jul. 2008", "Aug. 2008", "Sep. 2008", "Oct. 2008", "Nov. 2008", "Dec 2008", "Jan. 2009", "Feb. 2009", "Mar. 2009", "Apr. 2009", "May. 2009", "Jun. 2009", "Jul. 2009", "Aug. 2009", "Sep. 2009", "Oct. 2009", "Nov. 2009", "Dec 2009", "Jan. 2010", "Feb. 2010", "Mar. 2010", "Apr. 2010", "May. 2010", "Jun. 2010", "Jul. 2010", "Aug. 2010", "Sep. 2010", "Oct. 2010", "Nov. 2010", "Dec 2010", "Jan. 2011", "Feb. 2011", "Mar. 2011", "Apr. 2011", "May. 2011", "Jun. 2011", "Jul. 2011", "Aug. 2011", "Sep. 2011", "Oct. 2011", "Nov. 2011", "Dec 2011", "Jan. 2012", "Feb. 2012", "Mar. 2012", "Apr. 2012", "May. 2012", "Jun. 2012", "Jul. 2012", "Aug. 2012", "Sep. 2012", "Oct. 2012", "Nov. 2012", "Dec 2012", "Jan. 2013", "Feb. 2013", "Mar. 2013", "Apr. 2013", "May. 2013", "Jun. 2013", "Jul. 2013", "Aug. 2013", "Sep. 2013", "Oct. 2013", "Nov. 2013", "Dec 2013", "Jan. 2014", "Feb. 2014", "Mar. 2014");
		//$month = array("Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec");
		//$year = array(2000, 2014);
		//$month_num = array("01", "02", "03", "04", "05", "06", "07", "08", "09", "10", "11", "12");
		$show = 48;
		//var_dump($year);
	?>
	
	<div id="main_time_frame"><div id="main_time"><p style="margin-bottom: -20px;"><?php echo $desc; ?></p><p id="raw"><a href="Data/<?php echo $filename; ?>.out" target = "_blank">[Raw data]</a></p></div>
	<h2>Other time period:</h2>
	<p><span class="showed_all_time">
		<?php 
			$key = array_search($filename, $time_num);
			$lower = $key - 12;
			$upper = $key + 12;

			if ($lower < 0) {
				$upper = $upper - $lower;
				$lower = 0;
			} else {
				echo "..., ";
			}

			if ($upper >= count($time_num)) {
				$lower = $lower - ($upper - count($time_num) + 1);
				$upper = count($time_num) - 1;
			}

			for ($y=$lower; $y <= $upper; $y++) { 
				echo "<a href=\"index.php?time=".$time_num[$y];
				echo "&desc=".$time_desc[$y]."\" title=\"".$time_desc[$y]."\">";
				echo $time_desc[$y];
				echo "</a>";
				if ($y != $upper) {
					echo ", ";
				}
			}

			if ($upper != count($time_num) - 1) {
				echo ", ...";
			}

			echo "</span>";
			echo "<span class=\"hide_first\" style=\"display: none;\">";

			// $num = 0;
			// for($y = $year[0]; $y <= $year[1]; $y++){
			// 	$i = 0;
			// 	foreach($month as $m){
			// 		echo "<a href=\"index.php?time=";
			// 		echo "$y$month_num[$i]&desc=$m. $y\" title=\"$m. $y\">";
			// 		echo "$m. $y";
			// 		echo "</a>";
			// 		if ($y == $year[1] && $m == "Dec"){
							
			// 			}
			// 		else{
			// 				echo ", ";
			// 			}
					
			// 		$i++;
			// 		$num++;
			// 		if ($num == $show){
			// 			echo "</span>";
			// 			echo "<span class=\"hide_first\" style=\"display: none;\">";
			// 		}
			// 	}
			// }
		?>
	</span></p>
	<!-- <button type="button">More...</button> -->
	<br/>
	<a href="time_periods.php">MORE ...</a>
	</div>
	<!-- <p>Jan. 2010, Feb. 2010, Mar. 2010, Apr. 2010, May. 2010, Jun. 2010</p>  -->
 </div>