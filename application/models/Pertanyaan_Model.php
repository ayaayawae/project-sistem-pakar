<?php
defined('BASEPATH') or exit('No direct script access allowed !');

class Pertanyaan_Model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getAllQuestions() {
        $query = $this->db->query("SELECT * FROM tbl_pertanyaan");
        return $query->result_array();
    }

    public function getConvertId($id_routing){
        $query = $this->db->query("SELECT `id_real` FROM tbl_routing_convert WHERE `id_routing` = '$id_routing'");
        return $query->result_array();
    }

    public function getSpecificQuestion($id) {
        $query = $this->db->query("SELECT * FROM tbl_pertanyaan WHERE id = '$id'");
        return $query->result_array();
    }

    public function getNextIdRouting($id, $answer) {
        if($answer == 'y'){
            $query = $this->db->query("SELECT `ya` as `next` FROM tbl_routing WHERE id = '$id'");
        }else{
            $query = $this->db->query("SELECT `tidak` as `next` FROM tbl_routing WHERE id = '$id'");
        }
        return $query->result_array();
    }

    public function getSolution($id){
        $query = $this->db->query("SELECT * FROM tbl_solusi WHERE id = '$id'");
        return $query->result_array();
    }
    // public function insertBooking($idhotel,$email,$nama,$notelp,$jmlkamar,$jmlhari,$tglcheckin,$tglcheckout,$total)
    // {
    //     $data = array(
    //         'Id_hotel' => $idhotel,
    //         'Email' => $email,
    //         'Nama_tamu' => $nama,
    //         'Nomor_telepon' => $notelp,
    //         'Jumlah_pesan_kamar' => $jmlkamar,
    //         'Jumlah_hari' => $jmlhari,
    //         'Tgl_checkin' => $tglcheckin,
    //         'Tgl_checkout' => $tglcheckout,
    //         'Total_harga' => $total,
    //     );
        
    //     $this->db->insert('booking', $data);
    // }

    // public function cekValidEmailBooking($idBooking, $email){
	// 	$query = $this->db->query("SELECT Id_booking, Email FROM booking WHERE Id_booking = '$idBooking' AND Email = '$email'");
    //     return $query->result_array();
    // }
    // public function getBooking($idBooking){
    //     $query = $this->db->query("SELECT * FROM `booking`,`hotel` WHERE `booking`.`Id_hotel` = `hotel`.Id_hotel AND Id_booking = '$idBooking'");
    //     return $query->result_array();
    // }

    // public function getLastBooking($email){
    //     $query = $this->db->select('*')
    //              ->from('booking')
    //              ->order_by('Waktu_booking', 'desc')
    //              ->where('Email', $email)
    //              ->limit(1)
    //              ->get();
    //     return $query->result_array();
    // }

    // public function getAllBooking($email){
    //     $query = $this->db->query("SELECT * FROM `booking`,`hotel` WHERE `booking`.`Id_hotel` = `hotel`.Id_hotel AND Email = '$email'");
    //     return $query->result_array();
    // }
}