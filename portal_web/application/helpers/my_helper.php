<?php
	
	function all_month($lang,$type=null) {
		if($lang == ''){$lang = 'id';}
		if($type == ''){$type = 'long';}
		$month_digits			= array('01','02','03','04','05','06','07','08','09','10','11','12');
		$month['en']['long']	= array('January','February','March','April','May','June','July','August','September','October','November','December');
		$month['en']['short']	= array('Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec');
		$month['id']['long'] 	= array('Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember');
		$month['id']['short']	= array('Jan','Feb','Mar','Apr','Mei','Jun','Jul','Agu','Sep','Okt','Nov','Des');
		
		return(array_combine($month_digits, $month[$lang][$type]));
	}

	function switch_month($id,$lang=null,$type=null) {
		$arr = all_month($lang,$type); while(list($key,$val) = each($arr)){ if($id == $key){return$val;}}
	}

	function switch_day($id,$lang=null) {
		if($lang == 'en'){$day	= array('Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday');}
		else{$day	= array('Senin','Selasa','Rabu','Kamis','Jum\'at','Sabtu','Minggu');}
		
		return $day[$id-1];		
	}

	function format_date($id,$tgl,$lang,$type=null) {
		$arr2= explode(' ',$tgl);
		$arr = explode('-',$arr2[0]);
		$result = $arr[2].' '.switch_month($arr[1],$lang,$type).' '.$arr[0].', '.$arr2[1];

		return $result;
	}

	function convert_date($tgl,$type=null,$sp=null) {
		if(strlen($tgl) == '10') {
			$arr = explode('-',$tgl);
			$result = $arr[2].'-'.$arr[1].'-'.$arr[0];
		}elseif(strlen($tgl) == '19') {
			$arr2 = explode(' ',$tgl);
			$arr = explode('-',$arr2[0]);
			if($type == 'tgl') {
				$result = $arr[2].'-'.$arr[1].'-'.$arr[0];		
			}else{
				$result = $arr[2].'-'.$arr[1].'-'.$arr[0].' '.$arr2[1];	
			}
		}
		if($sp != '') {
			$result = str_replace('-',$sp,$result);
		}
		return $result;
	}

	function gmt($act=null,$type=null){
		if($act == 'datetime'){		// datetime
			$date	= gmdate("Y-m-d H:i:s", time()+60*60*7);
		}elseif($act == 'time') {	// time
			$date	= gmdate("H:i:s", time()+60*60*7);
		}else{						// date
			$date	= gmdate("Y-m-d", time()+60*60*7);
		}
		if($type == 'dmy') {
			$date	= convert_date($date);
		}
		return $date;
	}

	function format_tanggal_indonesia($tgl){
		$arr2= explode(' ',$tgl);
		$arr = explode('-',$arr2[0]);
		$hari= switch_day(date('w',strtotime($tgl)));
		$result = $hari.', '.$arr[2].' '.switch_month($arr[1],'id').' '.$arr[0].' '.$arr2[1];

		return $result;
	}

	function _splite($str,$sp,$index){
		$data = explode($sp, $str);
		return $data[$index];
	}
	
	function url_regex($str){
		return str_replace(' ', '-', preg_replace('/[^a-zA-Z0-9- ]/', '', $str));
	}

	function get_image($img){
		if($img !=''){
			$result = $img;
		}else{
			$result = 'assets/images/image-not-found.png';
		}

		return $result;
	}

?>