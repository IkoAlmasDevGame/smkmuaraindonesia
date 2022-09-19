<?php
function provinsi($tempat_lahir){
    if($tempat_lahir == 1){
        echo "Aceh";
    }else if($tempat_lahir == 2){
        echo "Sumatra Utara";
    }else if($tempat_lahir == 3){
        echo "Sumatra Barat";
    }else if($tempat_lahir == 4){
        echo "Riau";
    }else if($tempat_lahir == 5){
        echo "Kepulauan Riau";
    }else if($tempat_lahir == 6){
        echo "Jambi";
    }else if($tempat_lahir == 7){
        echo "Bengkulu";
    }else if($tempat_lahir == 8){
        echo "Sumatra Selatan";
    }else if($tempat_lahir == 9){
        echo "Kepuluan Bangka Belitung";
    }else if($tempat_lahir == 10){
        echo "Lampung";
    }else if($tempat_lahir == 11){
        echo "Banten";
    }else if($tempat_lahir == 12){
        echo "DKI Jakarta";
    }else if($tempat_lahir == 13){
        echo "Jawa Barat";
    }else if($tempat_lahir == 14){
        echo "Jawa Tengah";
    }else if($tempat_lahir == 15){
        echo "Daerah Istimewa Yogyakarta";
    }else if($tempat_lahir == 16){
        echo "Jawa Timur";
    }else if($tempat_lahir == 17){
        echo "Bali";
    }else if($tempat_lahir == 18){
        echo "Nusa Tenggara Barat";
    }else if($tempat_lahir == 19){
        echo "Nusa Tenggara Timur";
    }else if($tempat_lahir == 20){
        echo "Kalimantan Barat";
    }else if($tempat_lahir == 21){
        echo "Kalimantan Tengah";
    }else if($tempat_lahir == 22){
        echo "Kalimantan Selatan";
    }else if($tempat_lahir == 23){
        echo "Kalimantan Timur";
    }else if($tempat_lahir == 24){
        echo "Kalimantan Utara";
    }else if($tempat_lahir == 25){
        echo "Sulawesi Barat";
    }else if($tempat_lahir == 26){
        echo "Sulawesi Selatan";
    }else if($tempat_lahir == 27){
        echo "Sulawesi Tenggara";
    }else if($tempat_lahir == 28){
        echo "Sulawesi Tengah";
    }else if($tempat_lahir == 29){
        echo "Gorontalo";
    }else if($tempat_lahir == 30){
        echo "Sulawesi Utara";
    }else if($tempat_lahir == 31){
        echo "Maluku Utara";
    }else if($tempat_lahir == 32){
        echo "Maluku";
    }else if($tempat_lahir == 33){
        echo "Papua Barat";
    }else if($tempat_lahir == 34){
        echo "Papua";
    }
}

function jk($jenis_kelamin){
    if($jenis_kelamin == 1){
        echo "Laki-Laki";
    }else{
        echo "Perempuan";
    }
}

function agama($agama){
    if($agama == 1){
        echo "Kristen";
    }else if($agama == 2){
        echo "Katholik";
    }else if($agama == 3){
        echo "Buddha";
    }else if($agama == 4){
        echo "Hindu";
    }else if($agama == 5){
        echo "Islam";
    }else if($agama == 6){
        echo "Konghucu";
    }
}

function pendidikanAyah($pendidikan_ayah){
    if($pendidikan_ayah == 1){
        echo "SD";
    }else if($pendidikan_ayah == 2){
        echo "SMP";
    }else if($pendidikan_ayah == 3){
        echo "SMA";
    }else if($pendidikan_ayah == 4){
        echo "SMK";
    }else if($pendidikan_ayah == 5){
        echo "D3";
    }else if($pendidikan_ayah == 6){
        echo "S1";
    }else if($pendidikan_ayah == 7){
        echo "S2";
    }else if($pendidikan_ayah == 8){
        echo "S3";
    }
}

function pendidikanIbu($pendidikan_ibu){
    if($pendidikan_ibu == 1){
        echo "SD";
    }else if($pendidikan_ibu == 2){
        echo "SMP";
    }else if($pendidikan_ibu == 3){
        echo "SMA";
    }else if($pendidikan_ibu == 4){
        echo "SMK";
    }else if($pendidikan_ibu == 5){
        echo "D3";
    }else if($pendidikan_ibu == 6){
        echo "S1";
    }else if($pendidikan_ibu == 7){
        echo "S2";
    }else if($pendidikan_ibu == 8){
        echo "S3";
    }
}

function tbt($tanggal_lahir){
    $tanggal_lahir = explode('-', $tanggal_lahir);
    return $tanggal_lahir[2].'-'.$tanggal_lahir[1].'-'.$tanggal_lahir[0];
}

function pekerjaanAyah($ayah_bekerja_sebagai){
    if($ayah_bekerja_sebagai == 1){
        echo "Arsitek";
    }else if($ayah_bekerja_sebagai == 2){
        echo "Apoteker";
    }else if($ayah_bekerja_sebagai == 3){
        echo "Akuntan";
    }else if($ayah_bekerja_sebagai == 4){
        echo "Aktor";
    }else if($ayah_bekerja_sebagai == 5){
        echo "Aktris";
    }else if($ayah_bekerja_sebagai == 6){
        echo "Atlet";
    }else if($ayah_bekerja_sebagai == 7){
        echo "Bidan";
    }else if($ayah_bekerja_sebagai == 8){
        echo "Dokter";
    }else if($ayah_bekerja_sebagai == 9){
        echo "Dosen";
    }else if($ayah_bekerja_sebagai == 10){
        echo "Direktur";
    }else if($ayah_bekerja_sebagai == 11){
        echo "Designer";
    }else if($ayah_bekerja_sebagai == 12){
        echo "Guru";
    }else if($ayah_bekerja_sebagai == 13){
        echo "Hakim";
    }else if($ayah_bekerja_sebagai == 14){
        echo "Jaksa";
    }else if($ayah_bekerja_sebagai == 15){
        echo "Kasir";
    }else if($ayah_bekerja_sebagai == 16){
        echo "Kondektur";
    }else if($ayah_bekerja_sebagai == 17){
        echo "Chef";
    }else if($ayah_bekerja_sebagai == 18){
        echo "Karyawan";
    }else if($ayah_bekerja_sebagai == 19){
        echo "Masinis";
    }else if($ayah_bekerja_sebagai == 20){
        echo "Model";
    }else if($ayah_bekerja_sebagai == 21){
        echo "Nelayan";
    }else if($ayah_bekerja_sebagai == 22){
        echo "Novelis";
    }else if($ayah_bekerja_sebagai == 23){
        echo "Nahkoda";
    }else if($ayah_bekerja_sebagai == 24){
        echo "Pegawai Negeri Sipil";
    }else if($ayah_bekerja_sebagai == 25){
        echo "Penyanyi";
    }else if($ayah_bekerja_sebagai == 26){
        echo "Pengacara";
    }else if($ayah_bekerja_sebagai == 27){
        echo "Programmer";
    }else if($ayah_bekerja_sebagai == 28){
        echo "Polisi";
    }else if($ayah_bekerja_sebagai == 29){
        echo "Perawat";
    }else if($ayah_bekerja_sebagai == 30){
        echo "Penerjemah";
    }else if($ayah_bekerja_sebagai == 31){
        echo "Pilot";
    }else if($ayah_bekerja_sebagai == 32){
        echo "Presiden";
    }else if($ayah_bekerja_sebagai == 33){
        echo "Penari";
    }else if($ayah_bekerja_sebagai == 34){
        echo "Pemadam Kebakaran";
    }else if($ayah_bekerja_sebagai == 35){
        echo "Pelayan";
    }else if($ayah_bekerja_sebagai == 36){
        echo "Petani";
    }else if($ayah_bekerja_sebagai == 37){
        echo "Resepsionis";
    }else if($ayah_bekerja_sebagai == 38){
        echo "Satpam";
    }else if($ayah_bekerja_sebagai == 39){
        echo "Seniman";
    }else if($ayah_bekerja_sebagai == 40){
        echo "Supir";
    }else if($ayah_bekerja_sebagai == 41){
        echo "Sekretaris";
    }else if($ayah_bekerja_sebagai == 42){
        echo "Tentara";
    }else if($ayah_bekerja_sebagai == 43){
        echo "Video Editor";
    }else if($ayah_bekerja_sebagai == 44){
        echo "Wartawan";
    }else if($ayah_bekerja_sebagai == 45){
        echo "CEO";
    }else if($ayah_bekerja_sebagai == 46){
        echo "Koordinator Pelayan Kesehatan";
    }else if($ayah_bekerja_sebagai == 47){
        echo "Koordinator Manajemen Bakat";
    }else if($ayah_bekerja_sebagai == 48){
        echo "Manajer Media Sosial";
    }else if($ayah_bekerja_sebagai == 49){
        echo "User Experience Design";
    }else if($ayah_bekerja_sebagai == 50){
        echo "Manajer Kampanye Politik Online";
    }else if($ayah_bekerja_sebagai == 51){
        echo "Penulis Konten Web";
    }else if($ayah_bekerja_sebagai == 52){
        echo "Konsultan Keberlanjutan";
    }else if($ayah_bekerja_sebagai == 53){
        echo "Jurnalis Video";
    }else if($ayah_bekerja_sebagai == 54){
        echo "Tukang Tambal Ban";
    }else if($ayah_bekerja_sebagai == 55){
        echo "Pawang Hujan";
    }else if($ayah_bekerja_sebagai == 56){
        echo "Tukang Tukar Duit";
    }else if($ayah_bekerja_sebagai == 57){
        echo "Tukang Patri";
    }else if($ayah_bekerja_sebagai == 58){
        echo "Tukang Parkir";
    }else if($ayah_bekerja_sebagai == 59){
        echo "Tukang isis korek gas";
    }else if($ayah_bekerja_sebagai == 60){
        echo "Joki 3 in 1";
    }else if($ayah_bekerja_sebagai == 61){
        echo "Calo Tiket";
    }else if($ayah_bekerja_sebagai == 62){
        echo "Jasa sol sepatu";
    }else if($ayah_bekerja_sebagai == 63){
        echo "Penjual jamu gendong";
    }else if($ayah_bekerja_sebagai == 64){
        echo "Pak ogah";
    }else if($ayah_bekerja_sebagai == 65){
        echo "Ojek payung";
    }else if($ayah_bekerja_sebagai == 66){
        echo "Jasa permak jins keliling";
    }else if($ayah_bekerja_sebagai == 67){
        echo "Tukang urut";
    }else if($ayah_bekerja_sebagai == 68){
        echo "Tukang pangkas rambut";
    }else if($ayah_bekerja_sebagai == 69){
        echo "Artifical Intelligence";
    }else if($ayah_bekerja_sebagai == 70){
        echo "Self-Driving Car Engineer";
    }else if($ayah_bekerja_sebagai == 71){
        echo "Data Scientist";
    }else if($ayah_bekerja_sebagai == 72){
        echo "Cloud Architect";
    }else if($ayah_bekerja_sebagai == 73){
        echo "Automation Engineer";
    }else if($ayah_bekerja_sebagai == 74){
        echo "Mobile App Developer";
    }else if($ayah_bekerja_sebagai == 75){
        echo "Social Media Officer";
    }else if($ayah_bekerja_sebagai == 76){
        echo "Digital Strategist";
    }else if($ayah_bekerja_sebagai == 77){
        echo "Community Manager";
    }else if($ayah_bekerja_sebagai == 78){
        echo "Head Of Culture";
    }else if($ayah_bekerja_sebagai == 79){
        echo "Podcast Producer";
    }else if($ayah_bekerja_sebagai == 80){
        echo "Drone Operator";
    }else if($ayah_bekerja_sebagai == 81){
        echo "Motion Graphic Designer";
    }else if($ayah_bekerja_sebagai == 82){
        echo "Psychologist";
    }else if($ayah_bekerja_sebagai == 83){
        echo "Generic Councelor";
    }else if($ayah_bekerja_sebagai == 84){
        echo "Financial Technology Analyst";
    }else if($ayah_bekerja_sebagai == 85){
        echo "Copywriter";
    }else if($ayah_bekerja_sebagai == 86){
        echo "Content Writer";
    }else if($ayah_bekerja_sebagai == 87){
        echo "Ui/Ux Designer";
    }else if($ayah_bekerja_sebagai == 88){
        echo "Selebgram";
    }else if($ayah_bekerja_sebagai == 89){
        echo "Youtuber";
    }else if($ayah_bekerja_sebagai == 90){
        echo "Blogger";
    }else if($ayah_bekerja_sebagai == 91){
        echo "Pramugari";
    }else if($ayah_bekerja_sebagai == 92){
        echo "Pramusaji";
    }
}

function pekerjaanIbu($ibu_bekerja_sebagai){
    if($ibu_bekerja_sebagai == 1){
        echo "Arsitek";
    }else if($ibu_bekerja_sebagai == 2){
        echo "Apoteker";
    }else if($ibu_bekerja_sebagai == 3){
        echo "Akuntan";
    }else if($ibu_bekerja_sebagai == 4){
        echo "Aktor";
    }else if($ibu_bekerja_sebagai == 5){
        echo "Aktris";
    }else if($ibu_bekerja_sebagai == 6){
        echo "Atlet";
    }else if($ibu_bekerja_sebagai == 7){
        echo "Bidan";
    }else if($ibu_bekerja_sebagai == 8){
        echo "Dokter";
    }else if($ibu_bekerja_sebagai == 9){
        echo "Dosen";
    }else if($ibu_bekerja_sebagai == 10){
        echo "Direktur";
    }else if($ibu_bekerja_sebagai == 11){
        echo "Designer";
    }else if($ibu_bekerja_sebagai == 12){
        echo "Guru";
    }else if($ibu_bekerja_sebagai == 13){
        echo "Hakim";
    }else if($ibu_bekerja_sebagai == 14){
        echo "Jaksa";
    }else if($ibu_bekerja_sebagai == 15){
        echo "Kasir";
    }else if($ibu_bekerja_sebagai == 16){
        echo "Kondektur";
    }else if($ibu_bekerja_sebagai == 17){
        echo "Chef";
    }else if($ibu_bekerja_sebagai == 18){
        echo "Karyawan";
    }else if($ibu_bekerja_sebagai == 19){
        echo "Masinis";
    }else if($ibu_bekerja_sebagai == 20){
        echo "Model";
    }else if($ibu_bekerja_sebagai == 21){
        echo "Nelayan";
    }else if($ibu_bekerja_sebagai == 22){
        echo "Novelis";
    }else if($ibu_bekerja_sebagai == 23){
        echo "Nahkoda";
    }else if($ibu_bekerja_sebagai == 24){
        echo "Pegawai Negeri Sipil";
    }else if($ibu_bekerja_sebagai == 25){
        echo "Penyanyi";
    }else if($ibu_bekerja_sebagai == 26){
        echo "Pengacara";
    }else if($ibu_bekerja_sebagai == 27){
        echo "Programmer";
    }else if($ibu_bekerja_sebagai == 28){
        echo "Polisi";
    }else if($ibu_bekerja_sebagai == 29){
        echo "Perawat";
    }else if($ibu_bekerja_sebagai == 30){
        echo "Penerjemah";
    }else if($ibu_bekerja_sebagai == 31){
        echo "Pilot";
    }else if($ibu_bekerja_sebagai == 32){
        echo "Presiden";
    }else if($ibu_bekerja_sebagai == 33){
        echo "Penari";
    }else if($ibu_bekerja_sebagai == 34){
        echo "Pemadam Kebakaran";
    }else if($ibu_bekerja_sebagai == 35){
        echo "Pelayan";
    }else if($ibu_bekerja_sebagai == 36){
        echo "Petani";
    }else if($ibu_bekerja_sebagai == 37){
        echo "Resepsionis";
    }else if($ibu_bekerja_sebagai == 38){
        echo "Satpam";
    }else if($ibu_bekerja_sebagai == 39){
        echo "Seniman";
    }else if($ibu_bekerja_sebagai == 40){
        echo "Supir";
    }else if($ibu_bekerja_sebagai == 41){
        echo "Sekretaris";
    }else if($ibu_bekerja_sebagai == 42){
        echo "Tentara";
    }else if($ibu_bekerja_sebagai == 43){
        echo "Video Editor";
    }else if($ibu_bekerja_sebagai == 44){
        echo "Wartawan";
    }else if($ibu_bekerja_sebagai == 45){
        echo "CEO";
    }else if($ibu_bekerja_sebagai == 46){
        echo "Koordinator Pelayan Kesehatan";
    }else if($ibu_bekerja_sebagai == 47){
        echo "Koordinator Manajemen Bakat";
    }else if($ibu_bekerja_sebagai == 48){
        echo "Manajer Media Sosial";
    }else if($ibu_bekerja_sebagai == 49){
        echo "User Experience Design";
    }else if($ibu_bekerja_sebagai == 50){
        echo "Manajer Kampanye Politik Online";
    }else if($ibu_bekerja_sebagai == 51){
        echo "Penulis Konten Web";
    }else if($ibu_bekerja_sebagai == 52){
        echo "Konsultan Keberlanjutan";
    }else if($ibu_bekerja_sebagai == 53){
        echo "Jurnalis Video";
    }else if($ibu_bekerja_sebagai == 54){
        echo "Tukang Tambal Ban";
    }else if($ibu_bekerja_sebagai == 55){
        echo "Pawang Hujan";
    }else if($ibu_bekerja_sebagai == 56){
        echo "Tukang Tukar Duit";
    }else if($ibu_bekerja_sebagai == 57){
        echo "Tukang Patri";
    }else if($ibu_bekerja_sebagai == 58){
        echo "Tukang Parkir";
    }else if($ibu_bekerja_sebagai == 59){
        echo "Tukang isis korek gas";
    }else if($ibu_bekerja_sebagai == 60){
        echo "Joki 3 in 1";
    }else if($ibu_bekerja_sebagai == 61){
        echo "Calo Tiket";
    }else if($ibu_bekerja_sebagai == 62){
        echo "Jasa sol sepatu";
    }else if($ibu_bekerja_sebagai == 63){
        echo "Penjual jamu gendong";
    }else if($ibu_bekerja_sebagai == 64){
        echo "Pak ogah";
    }else if($ibu_bekerja_sebagai == 65){
        echo "Ojek payung";
    }else if($ibu_bekerja_sebagai == 66){
        echo "Jasa permak jins keliling";
    }else if($ibu_bekerja_sebagai == 67){
        echo "Tukang urut";
    }else if($ibu_bekerja_sebagai == 68){
        echo "Tukang pangkas rambut";
    }else if($ibu_bekerja_sebagai == 69){
        echo "Artifical Intelligence";
    }else if($ibu_bekerja_sebagai == 70){
        echo "Self-Driving Car Engineer";
    }else if($ibu_bekerja_sebagai == 71){
        echo "Data Scientist";
    }else if($ibu_bekerja_sebagai == 72){
        echo "Cloud Architect";
    }else if($ibu_bekerja_sebagai == 73){
        echo "Automation Engineer";
    }else if($ibu_bekerja_sebagai == 74){
        echo "Mobile App Developer";
    }else if($ibu_bekerja_sebagai == 75){
        echo "Social Media Officer";
    }else if($ibu_bekerja_sebagai == 76){
        echo "Digital Strategist";
    }else if($ibu_bekerja_sebagai == 77){
        echo "Community Manager";
    }else if($ibu_bekerja_sebagai == 78){
        echo "Head Of Culture";
    }else if($ibu_bekerja_sebagai == 79){
        echo "Podcast Producer";
    }else if($ibu_bekerja_sebagai == 80){
        echo "Drone Operator";
    }else if($ibu_bekerja_sebagai == 81){
        echo "Motion Graphic Designer";
    }else if($ibu_bekerja_sebagai == 82){
        echo "Psychologist";
    }else if($ibu_bekerja_sebagai == 83){
        echo "Generic Councelor";
    }else if($ibu_bekerja_sebagai == 84){
        echo "Financial Technology Analyst";
    }else if($ibu_bekerja_sebagai == 85){
        echo "Copywriter";
    }else if($ibu_bekerja_sebagai == 86){
        echo "Content Writer";
    }else if($ibu_bekerja_sebagai == 87){
        echo "Ui/Ux Designer";
    }else if($ibu_bekerja_sebagai == 88){
        echo "Selebgram";
    }else if($ibu_bekerja_sebagai == 89){
        echo "Youtuber";
    }else if($ibu_bekerja_sebagai == 90){
        echo "Blogger";
    }else if($ibu_bekerja_sebagai == 91){
        echo "Pramugari";
    }else if($ibu_bekerja_sebagai == 92){
        echo "Pramusaji";
    }
}
?>