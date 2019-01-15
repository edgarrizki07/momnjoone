<?PHP 
$connection = new mysqli("localhost", "root", "", "app_pos");



//           <!--start-->
if (isset($_POST['forgotpassword'])) {
date_default_timezone_set("Asia/Jakarta");
$pass="1A2B4HTjsk5kwhadbwlff"; $panjang='8'; $len=strlen($pass); 
$start=$len-$panjang; $xx=rand('0',$start); 
$yy=str_shuffle($pass); 
$passwordbaru=substr($yy, $xx, $panjang);
 
$email = $connection->real_escape_string($_POST['email']);
$password = mysqli_real_escape_string(htmlentities((md5($passwordbaru))));
$datetime=date("h:i:s-j-M-Y");
 
// mencari alamat email si user
$query = $connection->query("SELECT id FROM users WHERE email ='$email'");

$data = mysqli_fetch_array($query);
$cek = mysqli_num_rows($query);
$id= strip_tags($data['id']);
$alamatEmail = strip_tags($data['email']);
$nama = strip_tags($data['name']);

if ($cek == 1) {
 
// title atau subject email
$title = "Permintaan Password Baru";
// isi pesan email disertai password
$pesan = "Kami telah meresset Ulang Kata sandi ".$nama." Dan anda dapat login kembali ke web kami \n\n 
DETAIL AKUN ANDA :\n Nama Penguna : ".$nama." \n 
Kata sandi Anda yang baru adalah: ".$passwordbaru."\n\n 
\n\n PESAN NO-REPLY";
// header email berisi alamat pengirim
$header = "From: nama-website<no-reply@domain.com>";
// mengirim email
$kirimEmail = mail($alamatEmail, $title, $pesan, $header);
// cek status pengiriman email


if ($kirimEmail) { 
 
// update password baru ke database (jika pengiriman email sukses)
$query = mysqli_query($con,"UPDATE users SET password='$password', datetime='$datetime' WHERE email= '$email'");

 
if ($query) 
echo'<div class="warning">Kata sandi baru telah direset dan sudah dikirim ke email "'.$alamatEmail.'" Silahkan cek emailnya</div><br><br><hr><h3>CONTOH PESAN DALAM EMAIL<hr><br>
'.$pesan.'<hr>';
}
else {
echo'<div class="warning">Pengiriman Kata sandi baru ke email gagal</div>';
}
}
else{
 
echo'<div class="warning">Alamat Email tidak ditemukan</div>';
}}?>