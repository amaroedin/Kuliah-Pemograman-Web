<?php
/*Captcha Library For Codeigniter JogjamediCom
 * Made By: Ega Wachid Radiegtya
 * date   : 7-16-2011
 * Please don't remove this license if u want to use this library :)
 * First make captcha folder in yourfile/captcha
 */


Class Captcha_egg {

    function Captcha_egg() {
        $this->SA = &get_instance();
        $this->SA->load->helper('string');
        $this->SA->load->helper('captcha');
        $this->SA->load->library('form_validation');
        $this->SA->load->database();
    }

    //first create captcha table to make table in your database to save captcha
    function create_table() {
        $this->SA->db->query(
                "CREATE TABLE captcha (
                captcha_id bigint(13) unsigned NOT NULL auto_increment,
                captcha_time int(10) unsigned NOT NULL,
                ip_address varchar(16) default '0' NOT NULL,
                word varchar(20) NOT NULL,
                PRIMARY KEY `captcha_id` (`captcha_id`),
                KEY `word` (`word`)"
        );
    }

    //function to get captcha image
    function get_captcha() {
		$path = getcwd();				
        $captcha_path = base_url() . "captcha/";
        $vals = array(
            'img_path' => $path."/captcha/",
            'img_url' => $captcha_path,
            'expiration' => 1800 //half hour to remove from folder
        );

        $cap = create_captcha($vals);
        $capdb = array(
                    'captcha_time' => $cap['time'],
                    //'ip_address' => $this->SA->input->ip_address(),
                    'ip_address' => $_SERVER['REMOTE_ADDR'],
                    'word' => $cap['word']
                );

        $query = $this->SA->db->insert_string('captcha', $capdb);
        $this->SA->db->query($query);
        //$data['cap'] = $cap;
        return $cap['image'];
    }

    //function to delete captcha from database and validate the captcha
    function validate_captcha() {
        $ip = $_SERVER['REMOTE_ADDR'];
        // First, delete old captchas
        $expiration = time() - 10000; // 15 second to remove from database
        $this->SA->db->query("DELETE FROM captcha WHERE captcha_time < " . $expiration);

        // Then see if a captcha exists:
        $sql = "SELECT COUNT(*) AS count FROM captcha WHERE word = ? AND ip_address = ? AND captcha_time > ?";
        $binds = array($_POST['captcha'], $this->SA->input->ip_address(), $expiration);
        $query = $this->SA->db->query($sql, $binds);
        $row = $query->row();

        if ($row->count == 0) {
			$this->SA->form_validation->set_message('valid_captcha', "Captcha tidak valid / salah");
			return false;
        } else {
            return true;
        }
    }

}

?>
