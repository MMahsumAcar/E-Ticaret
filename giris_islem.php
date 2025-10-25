<?php
session_start();


$host = "localhost";
$user = "root";
$pass = "";
$dbname = "eticaret_db";

$conn = new mysqli($host, $user, $pass, $dbname);
if ($conn->connect_error) {
    die(" Veritabanı bağlantı hatası: " . $conn->connect_error);
}
$conn->set_charset("utf8mb4");


if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = trim($_POST['email'] ?? '');
    $sifre = $_POST['password'] ?? '';
    $onay = isset($_POST['agree']);

    if (empty($email) || empty($sifre)) {
        echo "<script>alert(' Lütfen e-posta ve şifreyi giriniz!'); history.back();</script>";
        exit;
    }

    if (!$onay) {
        echo "<script>alert(' Giriş yapmak için onay kutusunu işaretleyin!'); history.back();</script>";
        exit;
    }

    
    $stmt = $conn->prepare("SELECT * FROM kullanicilar WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();

        
        if (password_verify($sifre, $user['sifre'])) {
            
            $_SESSION['kullanici_id'] = $user['id'];
            $_SESSION['kullanici_ad'] = $user['adsoyad'];
            $_SESSION['kullanici_email'] = $user['email'];

            echo "<script>
                    alert(' Giriş başarılı! Hoşgeldin {$user['adsoyad']}');
                    window.location.href='../../index.php';
                  </script>";
            exit;
        } else {
            echo "<script>alert(' Şifre hatalı!'); history.back();</script>";
        }
    } else {
        echo "<script>alert(' Bu e-posta ile kayıtlı kullanıcı bulunamadı!'); history.back();</script>";
    }

    $stmt->close();
    $conn->close();
}
?>
