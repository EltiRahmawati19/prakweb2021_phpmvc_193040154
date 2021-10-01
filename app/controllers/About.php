<?php 

class About {
  public function index($nama = 'Elti', $pekerjaan= 'mahasiswa'){
    echo "Halo, Nama saya $nama, saya seorang $pekerjaan";
  }
  public function page() {
    echo 'About/page';
  }
}