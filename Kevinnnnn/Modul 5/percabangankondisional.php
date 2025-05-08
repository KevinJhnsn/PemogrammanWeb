<html>
    <head>
        <?php
// Mengambil input dari user (nama dan nilai)
        $user = "Kevin"; // Ganti dengan input nama dari user
        $nilai = 85; // Ganti dengan input nilai dari user

// Klasifikasi nilai
        if ($nilai > 80) {
            $grade = "A";
        } elseif ($nilai >= 70 && $nilai <= 79) {
            $grade = "B";
        } elseif ($nilai >= 60 && $nilai <= 69) {
            $grade = "C";
        } elseif ($nilai >= 50 && $nilai <= 59) {
            $grade = "D";
        } else {
    $grade = "Tidak Lulus";
}

// Menampilkan hasil
    echo "Nama: $user<br>";
    echo "Nilai: $nilai<br>";
    echo "Klasifikasi: $grade";
?>
    </head>
</html>
