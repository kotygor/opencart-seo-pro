<?php
// Розширення для мовної таблиці
$this->load->model('localisation/language');
$languages = $this->model_localisation_language->getLanguages();

if(!isset($languages[array_key_first($languages)]['url_code'])) {
	$sql = "ALTER TABLE `" . DB_PREFIX . "language`	ADD COLUMN `url_code` VARCHAR(5) NOT NULL DEFAULT '' AFTER `code`;";
	$this->db->query($sql);
}