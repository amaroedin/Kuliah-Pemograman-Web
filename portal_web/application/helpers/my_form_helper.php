<?php

	function inputText($obj, $field, $value, $elements=null){
		$data = "<input type='text' name='".$obj."[$field]' id='".$obj."_".$field."' value='$value' ".listElement($elements).">";
		return $data;
	}

	function inputTextArea($obj, $field, $value, $elements=null){
		$data = "<textarea name='".$obj."[$field]' id='".$obj."_".$field."' ".listElement($elements).">".$value."</textarea>";
		return $data;
	}

	function fileUpload($obj, $field, $value, $elements=null){
		$data = "<input type='file' name='".$obj."[$field]' id='".$obj."_".$field."' value='$value' ".listElement($elements).">";
		return $data;
	}

	function listDropdown($obj, $field, $options, $value, $elements=null){
		$multiple = "";
		if($value !=''){
			if(is_array($value) && count($value) > 1){
				$multiple .= "multiple='multiple'";
			}
		}

		$option = "";
		foreach($options as $key=>$val){
			$selected = "";
			if($value !=''){	
				if(is_array($value) && count($value) > 0){
					foreach($value as $i=>$select){
						if($key == $select){$selected .= "selected='selected'";}
					}
				}else{
					if($key == $value){$selected .= "selected='selected'";}
				}
			}

			$option .= "<option value='".$key."' $selected>".$val."</option>";
		}

		$data = "<select name='".$obj."[$field]' id='".$obj."_".$field."' $multiple ".listElement($elements).">".$option."</select>";
		return $data;
	}

	function listElement($arr){
		$element = '';
		if($arr !=''){
			foreach($arr as $i=>$e) {
				if(is_numeric($i)){$element .= $e;
				}else{$element .= $i.'='.$e;}
				
				$element .= ' ';
			}
		}
		return $element;
	}
?>