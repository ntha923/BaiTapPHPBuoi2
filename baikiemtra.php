<!-- Trắc nghiệm 
1. Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 [4] => 5 [5] => 6 [6] => 9 )
2. a 
3.a 
4.a 
5.b -->
<!-- Tự luận -->
<!-- Bài 1: Viết một chương trình PHP để hiển thị dãy số Fibonacci. Yêu cầu:
Tạo một hàm generateFibonacci nhận một số nguyên dương n và trả về dãy số Fibonacci đầu tiên có n phần tử.
Hiển thị dãy số Fibonacci đầu tiên có 10 phần tử. -->
<?php
function generateFibonacci($n){
    $f0=0;
    $f1=1;
    $fn=1;
    if($n<0){
        echo "số hông hợp lệ";
        return;
    }else {
        if($n == 0 || $n == 1){
            return $n;
        }else {
            for($i=2;$i<$n; $i++){
                $f0=$f1;
                $f1=$fn;
                $fn=$f0+$f1;
            }
        }
    } return $fn;
}
    echo "Dãy số Fibonacci đầu tiên có 10 phần tử là: ";
    for ($i = 0; $i < 10; $i++) {
        echo generateFibonacci($i) . " ";
    }

?>
<!-- Bài 2: Viết một ứng dụng PHP để quản lý thông tin về học sinh trong một lớp học sử dụng mảng kết hợp. Yêu cầu:
Tạo một mảng kết hợp chứa thông tin về học sinh với các khóa như id, name, age, và grade.
Hiển thị thông tin của tất cả học sinh trong mảng.
Viết hàm để tìm học sinh có điểm cao nhất (grade). -->
<?php
$students = array(
    "arr1" => array("id" => 1, "name" => "Nguyen Van A", "age" => 17, "grade" => 7),
    "arr2" => array("id" => 2, "name" => "Nguyen Van B", "age" => 18, "grade" => 8),
    "arr3" => array("id" => 3, "name" => "Nguyen Van C", "age" => 19, "grade" => 9),
);

echo "Thông tin học sinh:\n";
foreach ($students as $student) {
    echo "ID: " . $student["id"] . "<br>";
    echo "Name: " . $student["name"] . "<br>";
    echo "Age: " . $student["age"] . "<br>";
    echo "Grade: " . $student["grade"] . "<br>";
}

function timHSDiemCaoNhat($students) {
    $max = 0;
    $hsDiemCaoNhat = "";

    foreach ($students as $student) {
        if ($student['grade'] > $max) {
            $max = $student['grade'];
            $hsDiemCaoNhat = $student['name'];
        }
    }

    return $hsDiemCaoNhat;
}

$hsDiemCaoNhat = timHSDiemCaoNhat($students);
echo "Học sinh có điểm cao nhất là: " . $hsDiemCaoNhat;
?>


