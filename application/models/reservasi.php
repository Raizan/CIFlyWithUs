<?php

class Reservasi extends CI_Model {

    function __construct(){
        parent::__construct();
    }

    function try_random_id(){
        $id_customer = $this->session->userdata('id_customer');
        $sql = 'SELECT create_reservasi(\''.$id_customer.'\')';
        $query = $this->db->query($sql);
        $row = $query->row();

        if ($this->db->affected_rows() > 0){
            return $row->create_reservasi;
        }
        else {
            return false;
        }
    }

    function create($id_jadwal, $nama_penumpang=null, $nomor_identitas=null, $age=null){
        if ($nama_penumpang == null and $nomor_identitas == null and $age == null){
            $id_reservasi = $this->session->userdata('id_reservasi');
            $nomor_identitas = $this->session->userdata('nomor_identitas');
            $nama_penumpang = $this->session->userdata('nama');

            // Asumsi penumpang dewasa, prad lagi buat fungsi perhitungannya
            $this->load->model('jadwal');
            $harga = $this->jadwal->get_harga($id_jadwal);
            if ($harga != null){
                $data = array(
                    'id_reservasi' => $id_reservasi ,
                    'id_jadwal' => $id_jadwal ,
                    'harga' => $harga,
                    'nama_penumpang' => $nama_penumpang,
                    'nomor_identitas' => $nomor_identitas
                );
                $this->db->insert('detil_reservasi', $data);

                // update harga
                $query = $this->db->get_where('reservasi',
                    array(
                        'id_reservasi' => $id_reservasi
                    ));
                $row = $query->row();
                $total_now = $row->total_pembayaran;
                if ($total_now == null){
                    $total_now = 0;
                }
                $total_now = $total_now + $harga;
                $this->db->where('id_reservasi', $id_reservasi);
                $data2 = array(
                    'total_pembayaran' => $total_now
                );
                $this->db->update('reservasi', $data2);
            }
            return "success";
        }
        else {
            // Untuk orang lain

        }
    }

    function get_detil_reservasi($id_reservasi){
        $sql = 'select d.*, j.bandara_asal, j.bandara_tujuan from detil_reservasi d, jadwal j, reservasi r where j.id_jadwal = d.id_jadwal and r.id_reservasi = d.id_reservasi and r.id_reservasi = \''.$id_reservasi.'\';';
        $query = $this->db->query($sql);
        $detil = null;
        $i = 0;
        if ($query->num_rows() > 0){
            foreach ($query->result() as $row)
            {
                $detil[$i]["id"] = $row->id;
                $detil[$i]["id_reservasi"] = $row->id_reservasi;
                $detil[$i]["id_jadwal"] = $row->id_jadwal;
                $detil[$i]["harga"] = $row->harga;
                $detil[$i]["nama_penumpang"] = $row->nama_penumpang;
                $detil[$i]["nomor_identitas"] = $row->nomor_identitas;
                $detil[$i]["bandara_asal"] = $row->bandara_asal;
                $detil[$i]["bandara_tujuan"] = $row->bandara_tujuan;
                $i = $i + 1;
            }
            return $detil;
        }
        else {
            return null;
        }
    }

    function get_history($id_customer){
        $query = $this->db->get_where('reservasi',
            array(
               'id_customer' => $id_customer
            ));
        $detil = null;
        $i = 0;
        if ($query->num_rows() > 0){
            foreach ($query->result() as $row)
            {
                $reservasi[$i]["id_reservasi"] = $row->id_reservasi;
                $reservasi[$i]["id_customer"] = $row->id_customer;
                $reservasi[$i]["tanggal_book"] = $row->tanggal_book;
                $reservasi[$i]["total_pembayaran"] = $row->total_pembayaran;
                $reservasi[$i]["status"] = $row->status;
                $i = $i + 1;
            }
            return $reservasi;
        }
        else {
            return null;
        }
    }

    function pay($id_reservasi){
        $this->db->where('id_reservasi', $id_reservasi);
        $data = array(
            'status' => 'PAID'
        );
        $this->db->update('reservasi', $data);
    }

    function delete_detil($id){
        $query = $this->db->get_where('detil_reservasi',
            array(
                'id' => $id
            ));
        $row = $query->row();
        $price = $row->harga;

        // update harga di tabel reservasi
        $id_reservasi = $this->session->userdata('id_reservasi');
        $query2 = $this->db->get_where('reservasi',
            array(
                'id_reservasi' => $id_reservasi
            ));
        $row2 = $query2->row();
        $total_price = $row2->total_pembayaran;

        $total_now = $total_price - $price;


        $this->db->where('id_reservasi', $id_reservasi);
        $data2 = array(
            'total_pembayaran' => $total_now
        );
        $this->db->update('reservasi', $data2);

        // hapus
        $data = array(
            'id' => $id
        );
        $this->db->delete('detil_reservasi', $data);
    }
}