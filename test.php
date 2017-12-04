<?php

$plugins = unserialize('a:33:{i:0;s:35:"redux-framework/redux-framework.php";i:1;s:19:"addjsonurl/json.php";i:2;s:30:"advanced-custom-fields/acf.php";i:3;s:19:"catalog/catalog.php";i:4;s:58:"contact-form-7-to-database-extension/contact-form-7-db.php";i:5;s:36:"contact-form-7/wp-contact-form-7.php";i:6;s:29:"contributors/contributors.php";i:7;s:60:"custom-meta-box-template-master/custom-meta-box-template.php";i:8;s:25:"duplicator/duplicator.php";i:9;s:27:"facebookall/facebookall.php";i:10;s:49:"fb-instant-articles/facebook-instant-articles.php";i:11;s:19:"gmail-smtp/main.php";i:12;s:49:"hc-custom-wp-admin-url/hc-custom-wp-admin-url.php";i:13;s:77:"jquery-validation-for-contact-form-7/jquery-validation-for-contact-form-7.php";i:14;s:24:"json-rest-api/plugin.php";i:15;s:14:"login/json.php";i:16;s:31:"page-links-to/page-links-to.php";i:17;s:29:"post-formats/post-formats.php";i:18;s:43:"public-post-preview/public-post-preview.php";i:19;s:33:"quiz-questions/quiz-questions.php";i:20;s:53:"rackspace-cloudfiles-cdn/rackspace-cloudfiles-cdn.php";i:21;s:33:"recipes-custom/recipes-custom.php";i:22;s:47:"regenerate-thumbnails/regenerate-thumbnails.php";i:23;s:41:"speed-booster-pack/speed-booster-pack.php";i:24;s:33:"ssh-sftp-updater-support/sftp.php";i:25;s:45:"taxonomy-terms-order/taxonomy-terms-order.php";i:26;s:41:"themewich-sections/themewich-sections.php";i:27;s:40:"themewich-shortcodes/themewichplugin.php";i:28;s:59:"user-roles-and-capabilities/user-roles-and-capabilities.php";i:29;s:29:"widget-logic/widget_logic.php";i:30;s:24:"wordpress-seo/wp-seo.php";i:31;s:27:"wp-optimize/wp-optimize.php";i:32;s:35:"wp-sitemap-page/wp-sitemap-page.php";}');
//echo "<pre>";print_r($plugins);exit;
unset($plugins['20']);
//$plugins[] = "rackspace-cloudfiles-cdn/rackspace-cloudfiles-cdn.php";
echo "<pre>"; 
print_r(serialize($plugins));


/*
$a =1;
$b = "a";

echo $$b;
echo '$$b';
echo "$$b";
*/



?>

<?php
/*
   function passCount($input1,$input2,$input3)
	{
		
		//Write code here
		if($input1 >= 3 && $input1 <= 1000 && $input2 >= 3 && $input2 <= 1000) {
			$no_of_players = $input1;
			$pass_limit = $input2;
			$no_of_places_to_shift = $input3;
	                
	        $player_ball_helds = array();
	        $i=1;
	        $result = 0;
	        while($i <= $no_of_players) {
	        	if(isset($player_ball_helds[$i])) {
	        		$helds = $player_ball_helds[$i];

	        	} else {
	        		$helds = 0;
	        	}
	            $player_ball_helds[$i] = $helds+1;

	            if($player_ball_helds[$i] == $pass_limit) {
	                break;
	            } else {
	            	$result++;
	            }
	            if($player_ball_helds[$i]%2 == 0) {
	            	for($j = 1;$j <= $no_of_places_to_shift+1; $j++) {
	            		if($i == 1) {
	            			$i = $no_of_players;
	            		} else {
	            			$i--;
	            		}
	            	}
	            } else {
	            	for($j = 1;$j <= $no_of_places_to_shift+1; $j++) {
	            		if($i == $no_of_players) {
	            			$i = 1;
	            		}  else {
	            			$i++;
	            		}
	            	}
	            }
	            
	        }
	        return $result;
	    } else {
	    	return -1;
	    }
	}

	echo passCount(5,3,2);
	*/
?>
<?php
/*
   function uniqueValue($input1,$input2)
	{
		$employees = array();
		for($i = 1; $i <= $input1; $i++) {
			$employees[] = $i;
		}
		

		return $employees;


		
		
	}

	echo "<pre>";print_r(uniqueValue(4,array(2,1,1,0)));

*/
?>

<?php

//$str = 
$_fp = fopen("php://stdin", "r");
$conf_vars_handle = fgets($_fp);
$conf_vars = explode(" ",$conf_vars_handle);
$n = $conf_vars[0];
$lastAns = 0;
$s0 = array();
$s1 = array();
$index = 0;
for($i = 0;$i < $conf_vars[1]; $i++) {
    $q = explode(" ",fgets($_fp));
    $seq = ($q[1] ^ $lastAns)%$n; 
    if($q[0] == 1) {
        if($seq == 0) {
           $s0[] =  $q[2];
        } else {
            $s1[] =  $q[2];
        }
        
    } elseif($q[0] == 2) {
        if($seq == 0) {
           $lastAns = $s0[$index];
           $index = $seq;
        } else {
            $lastAns = $s1[$index];
            $index = $seq;
        }
        print($lastAns);
    }
}

?>