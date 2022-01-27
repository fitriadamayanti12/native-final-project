create database db_sertifikasi;
use db_sertifikasi;

create table daftar_user(id_user integer(5) not null AUTO_INCREMENT key, nama_lengkap varchar(40) not null, username varchar(40) not null UNIQUE, 
email varchar(40) not null, password varchar(50) not null, tanggal date);

create table daftar_admin(id_admin integer(5) not null AUTO_INCREMENT key, nama_lengkap varchar(40) not null, username varchar(40) not null UNIQUE, 
email varchar(40) not null, password varchar(50) not null, tanggal date);

create table daftar_pimpinan(id_pimpinan integer(5) not null AUTO_INCREMENT key, nama_lengkap varchar(40) not null, username varchar(40) not null UNIQUE, 
email varchar(40) not null, password varchar(50) not null, tanggal date);

create table guru_pai(id_guru integer(5) not null AUTO_INCREMENT key, nip_guru varchar(20) not null, nama_guru varchar(50) not null, tempat_lahir varchar(30) not null,
tanggal_lahir date not null, jenis_kelamin varchar(12) not null, pendidikan_terakhir varchar(10) not null, 
program_studi varchar(60) not null, status_kepegawaian varchar(20) not null, status_penugasan varchar(20) not null, golongan varchar(10) not null, 
alamat varchar(60) not null, no_hp varchar(15) not null);

create table sertifikasi(id_sertifikasi integer(5) AUTO_INCREMENT key, nip_guru varchar(30) not null, nuptk_guru varchar(30) not null, nama_guru varchar(50) not null, 
tempat_mengajar varchar(50) not null, jumlah_siswa_diajar integer(10) not null, jam_mengajar integer(5), tugas_tambahan varchar(40) not null, 
jam_tambahan integer(5), sekolah_lain varchar(50) not null, jam_sekolah_lain integer(5), total_jam integer(5), status_sertifikasi varchar(100) not null);

create table berkas(id_berkas integer(5) not null AUTO_INCREMENT key, nuptk varchar(30) not null, nuptk_file varchar(300) not null, 
sk varchar(300) not null, ijazah varchar(300) not null, transkrip_nilai varchar(300) not null, surat_mengajar varchar(300) not null, 
tanggal_upload date, status_berkas varchar(100) not null);

create table admin(id_admin integer(5) not null AUTO_INCREMENT key, nip_admin varchar(20) not null, nama_admin varchar(50) not null, 
tempat_lahir varchar(30) not null, tanggal_lahir date not null, jenis_kelamin varchar(12) not null, pendidikan_terakhir varchar(10) not null, 
status_kepegawaian varchar(20) not null, jabatan varchar(20) not null, golongan varchar(10) not null, alamat varchar(60) not null, no_hp varchar(15) not null);

create table artikel(id_artikel integer(5) not null AUTO_INCREMENT key, judul varchar(300) not null, isi longtext not null, penulis varchar(40) not null,
photo varchar(250) not null, tanggal date);

create table sekolah(id_sekolah integer(5) not null AUTO_INCREMENT key, npsn_sekolah varchar(30) not null, nama_sekolah varchar(40) not null, 
alamat_sekolah varchar(60) not null, no_telp varchar(15), kode_pos integer(7) not null, kelurahan varchar(80) not null,
kecamatan varchar(50) not null, jumlah_seluruh_siswa integer(10) not null, jumlah_siswa_muslim integer(10) not null, kurikulum varchar(30) not null, 
kepala_sekolah varchar(35) not null, status_sekolah varchar(20) not null);

create table pimpinan(id_pimpinan integer(5) not null AUTO_INCREMENT key, nip_pimpinan varchar(20) not null, nama_pimpinan varchar(40) not null, tempat_lahir varchar(30) not null,
tanggal_lahir date not null, jenis_kelamin varchar(12) not null, pendidikan_terakhir varchar(10) not null, golongan varchar(10) not null,
alamat varchar(60) not null, no_hp varchar(15) not null);

create table pemberitahuan(id_pemberitahuan integer(5) not null AUTO_INCREMENT key, subjek varchar(100) not null, isi_pemberitahuan longtext not null, 
photo varchar(250) not null, tanggal date);

create table kontak(id_kontak integer(5) not null AUTO_INCREMENT key, nama_pengunjung varchar(70) not null, email_pengunjung varchar(80) not null,
subjek_pesan varchar(100) not null, isi_pesan text not null, tanggal date);

create view laporan_guru as select guru_pai.nip_guru, guru_pai.nama_guru, guru_pai.tempat_lahir, guru_pai.tanggal_lahir, 
guru_pai.jenis_kelamin, guru_pai.pendidikan_terakhir, guru_pai.program_studi, guru_pai.status_kepegawaian, guru_pai.status_penugasan, guru_pai.golongan,
sertifikasi.tempat_mengajar, sertifikasi.jumlah_siswa_diajar
From guru_pai JOIN sertifikasi ON guru_pai.id_guru=sertifikasi.id_sertifikasi AND guru_pai.nip_guru=sertifikasi.nip_guru;

create view laporan_sertifikasi as select sertifikasi.nuptk_guru, sertifikasi.nip_guru, sertifikasi.nama_guru, sekolah.npsn_sekolah, sertifikasi.jam_mengajar, 
sertifikasi.jam_tambahan, sertifikasi.jam_sekolah_lain, sertifikasi.total_jam from sertifikasi 
JOIN sekolah ON sertifikasi.id_sertifikasi=sekolah.id_sekolah;

create view laporan_lulus as select sertifikasi.nuptk_guru, sertifikasi.nip_guru, sertifikasi.nama_guru, sertifikasi.tempat_mengajar, sertifikasi.total_jam,
berkas.status_berkas, sertifikasi.status_sertifikasi from sertifikasi JOIN berkas ON sertifikasi.id_sertifikasi=berkas.id_berkas 
AND sertifikasi.nuptk_guru=berkas.nuptk where status_sertifikasi="Lulus";

create view laporan_belum as select sertifikasi.nip_guru, sertifikasi.nuptk_guru, sertifikasi.tempat_mengajar, guru_pai.pendidikan_terakhir,
guru_pai.status_penugasan, guru_pai.status_kepegawaian, guru_pai.golongan, sertifikasi.total_jam, berkas.status_berkas, sertifikasi.status_sertifikasi
from sertifikasi JOIN guru_pai ON sertifikasi.id_sertifikasi=guru_pai.id_guru JOIN berkas ON sertifikasi.id_sertifikasi=berkas.id_berkas 
AND sertifikasi.nuptk_guru=berkas.nuptk where status_sertifikasi="Belum Lulus";

create view laporan_pns as select guru_pai.nip_guru, sertifikasi.nuptk_guru, sertifikasi.nama_guru, sertifikasi.tempat_mengajar, 
berkas.status_berkas, sertifikasi.status_sertifikasi, guru_pai.status_kepegawaian
from guru_pai JOIN sertifikasi ON guru_pai.id_guru=sertifikasi.id_sertifikasi AND guru_pai.nip_guru=sertifikasi.nip_guru JOIN berkas ON 
sertifikasi.id_sertifikasi=berkas.id_berkas AND sertifikasi.nuptk_guru=berkas.nuptk where status_kepegawaian="PNS";

create view laporan_honorer as select guru_pai.nip_guru, sertifikasi.nuptk_guru, sertifikasi.nama_guru, sertifikasi.tempat_mengajar, 
berkas.status_berkas, sertifikasi.status_sertifikasi, guru_pai.status_kepegawaian
from guru_pai JOIN sertifikasi ON guru_pai.id_guru=sertifikasi.id_sertifikasi AND guru_pai.nip_guru=sertifikasi.nip_guru JOIN berkas ON 
sertifikasi.id_sertifikasi=berkas.id_berkas AND sertifikasi.nuptk_guru=berkas.nuptk where status_kepegawaian="Non-PNS";

create view laporan_user as select guru_pai.id_guru, guru_pai.nip_guru, sertifikasi.nuptk_guru, guru_pai.nama_guru, daftar_user.email, daftar_user.password 
from guru_pai JOIN sertifikasi ON guru_pai.id_guru=sertifikasi.id_sertifikasi AND guru_pai.nip_guru=sertifikasi.nip_guru
JOIN daftar_user ON sertifikasi.id_sertifikasi=daftar_user.id_user;

create view laporan_jumlah as select sekolah.npsn_sekolah, sekolah.nama_sekolah, sekolah.kecamatan, sekolah.jumlah_seluruh_siswa, 
sekolah.jumlah_siswa_muslim,(SUM(sertifikasi.status_sertifikasi="Lulus")) AS jumlah_guru_sertifikasi
from sekolah JOIN sertifikasi ON sertifikasi.id_sertifikasi=sekolah.id_sekolah GROUP BY sekolah.nama_sekolah;






