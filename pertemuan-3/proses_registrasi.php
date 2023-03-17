<?php
if (isset($_POST['submit']))
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $gender = $_POST['gender'];
    $prodi = $_POST['prodi'];
    $skills = $_POST['skill'];
    $domisili = $_POST['domisili'];

function skor_skill($skills)
{
    $skill_list = [
        'HTML' => 10,
        'CSS' => 10,
        'JavaScript' => 20,
        'RWD Bootstrap' => 30,
        'PHP' => 30,
        'Python' => 30,
        'Java' => 50,
    ];
    $result = 0;
    foreach ($skills as $skill) {
        $result = $result + $skill_list[$skill];
    }

    return $result;
};


echo "NIM : $nim <br>";
echo "Nama : $nama <br>";
echo "Jenis Kelamin : $gender <br>";
echo "Programs Studi : $prodi <br>";
echo "Skill Programming : <br>";
foreach ($skills as $skill) {
    echo "- $skill <br>";
}
echo "Tempat Domisili : $domisili <br>";
echo "Skor Skill : " . skor_skill($skills);
echo "<br> Kategori Skill : ";