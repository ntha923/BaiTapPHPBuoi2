<!-- 1. Viết chương trình PHP để kiểm tra xem một số có phải là số chẵn hay không. -->
<?php
function kiemTraSoChan($a){
    if($a % 2 == 0){
        echo "Số $a là số chẵn.";
    } else {
        echo "Số $a là số lẻ.";
    }
}
kiemTraSoChan(2);
?>

<!--2.  Viết chương trình PHP để tính tổng của các số từ 1 đến n. -->
<?php
    function tinhTong($n){
        $tong=0;
        for($i=0;$i<=$n;$i++){
            $tong+=$i;
        }return $tong;
    }
    $n=10;
    $ketQua = tinhTong($n);
    echo "Tổng của các số từ 1 đến $n là ".$ketQua;
?>
<!-- 3. Viết chương trình PHP để in ra bảng cửu chương từ 1 đến 10. -->
<?php
    function bangCuuChuong(){
        for($i=1; $i<=10;$i++){
            echo "Bảng cửu chương của $i: <br>";
            for($j=1;$j<=10;$j++){
                $ketQua=$i*$j;
                echo "$i x $j = $ketQua <br>";
            }
            echo"<br>";
        }
    }
    bangCuuChuong();
?>
<!-- 4. Viết chương trình PHP để kiểm tra xem một chuỗi có chứa một từ cụ thể hay không. -->
<?php
    function kiemTra($chuoi,$tu){
        if(strpos($chuoi,$tu)){
            echo "Chuỗi $chuoi có chứa chữ '$tu'";
        }else{
            echo"Chuỗi $chuoi không chứa chữ '$tu'";
        }
    }
    $chuoi="Nguyn Thi Ha";
    $tu="Ha";
    kiemTra($chuoi,$tu);
?>
<!-- 5. Viết chương trình PHP để tìm giá trị lớn nhất và nhỏ nhất trong một mảng. -->
<?php
    $arr = array(1,2,3,7,9,12,18,20);
    function timMax($mang){
        $max = $mang[0];
        foreach ($mang as $value){
            if ($value>$max){
                $max=$value;
            }
        }return $max;
    }
    function timMin($mang) {
        $min = $mang[0];
        foreach ($mang as $value) {
            if ($value < $min) {
                $min = $value;
            }
        }
        return $min;
    }
    echo "Giá trị lớn nhất trong mảng là: " . timMax($arr) . "<br>";
    echo "Giá trị nhỏ nhất trong mảng là: " . timMin($arr);
?>
<!--6.  Viết chương trình PHP để sắp xếp một mảng theo thứ tự tăng dần. -->
<?php
   function sapXep($arr){
    sort($arr);
    echo"Mảng sắp xếp theo thứ tự tăng dần là :";
    foreach($arr as $value){
        echo $value . ",";
    }
   } 
   $mang= array (5,8,4,6,9,7,3,1,10,11);
   sapXep($mang);
?>
<!-- 7. Viết chương trình PHP để tính giai thừa của một số nguyên dương. -->
<?php
   function tinhGiaiThua($n){
    if($n==0){
        return 1;
    }else {
        $giaiThua=1;
        for($i=1;$i<=$n;$i++){
            $giaiThua *= $i;
        }return $giaiThua;
    }
   }
   $n=4;
   echo "Kết quả $n! = ".tinhGiaiThua($n);
?>
<!-- 8. Viết chương trình PHP để tìm số nguyên tố trong một khoảng cho trước. -->
<?php
    function kiemTraSoNguyenTo($n){
        if($n<2){
            return false;
        }
        for($i=2;$i<=sqrt($n);$i++){
            if ($n % $i == 0) {
                return false;
        }
    }
    return true;
}
$a=1;
$b=100;
echo "Các số nguyên tố trong khoảng ($a;$b) là: " ;
for($i=$a; $i<=$b;$i++){
    if(kiemTraSoNguyenTo($i)){
        echo $i. " ";
    }
}
?>
<!-- 9. Viết chương trình PHP để tính tổng của các số trong một mảng. -->
<?php
    function tinhTongMang($arr){
        $tong = 0;
        foreach ($arr as $value) {
            $tong += $value;
        }
        return $tong;
    }
    $arr = array(1, 2, 3, 4, 5);
    echo "Tổng của các số trong mảng là: " . tinhTongMang($arr);
?>
<!-- 10. Viết chương trình PHP để in ra các số Fibonacci trong một khoảng cho trước. -->
<?php
function Fibonacci($n) {
    $a = 0;
    $b = 1;
    echo "Dãy Fibonacci trong khoảng là: ";
    echo $a . " " . $b . " ";
    for ($i = 2; $i < $n; $i++) {
        $c = $a + $b;
        echo $c . " ";
        $a = $b;
        $b = $c;
    }
}
$n = 10; 
Fibonacci($n);
?>
<!-- 11. Viết chương trình PHP để kiểm tra xem một số có phải là số Armstrong hay không. -->
<?php
function isArmstrong($so) {
    $soBanDau = $so;
    $sum = 0;
    $n = strlen($so);

    while ($so > 0) {
        $soCuoi = $so % 10;
        $sum += pow($soCuoi, $n);
        $so = (int)($so / 10);
    }

    return $sum == $soBanDau;
}

$soKiemThu = 153;
if (isArmstrong($soKiemThu)) {
    echo "$soKiemThu là số Armstrong.";
} else {
    echo "$soKiemThu không phải là số Armstrong.";
}
?>

<!-- 12. Viết chương trình PHP để chèn một phần tử vào một mảng ở vị trí bất kỳ. -->
<?php
    $mangBanDau = array('1', '2', '3', '4', '5');
    echo 'Mảng ban đầu: ' . "<br>";
    foreach ($mangBanDau as $a) {
         echo "$a ";
    }
    echo "<br>";
    $phanTuCanChen = '*';
    $viTriChen = rand(0, count($mangBanDau));
    array_splice($mangBanDau, $viTriChen, 0, $phanTuCanChen);
    echo "Sau khi chèn phần tử '*' vào vị trí $viTriChen, mảng sẽ như sau: " . "<br>";
    foreach ($mangBanDau as $a) {
        echo "$a ";
    }
    echo "<br>";
?>
<!-- 13. Viết chương trình PHP để loại bỏ các phần tử trùng lặp trong một mảng. -->
<?php
   $array = [1, 2, 3, 2, 4, 1, 4];
   $unique_array = [];
   foreach ($array as $value) {
       if (!in_array($value, $unique_array)) {
           $unique_array[] = $value;
       }
   }
   print_r($unique_array);
?>
<!-- 14. Viết chương trình PHP để tìm vị trí của một phần tử trong một mảng. -->
<?php
    function timViTri($arr, $phanTu) {
        $viTri = array_search($phanTu, $arr);
        if ($viTri !== false) {
            echo "'$phanTu' được tìm thấy tại vị trí $viTri trong mảng.";
        } else {
            echo "'$phanTu' không tồn tại trong mảng.";
        }
    }
    $arr = array(1, 2, 3, 4, 5);
    $phanTuCanTim = 2;
    timViTri($arr, $phanTuCanTim);
?>
<!-- 15. Viết chương trình PHP để đảo ngược một chuỗi. -->
<?php
    function daoNguocChuoi($chuoi) {
    $chuoiDaoNguoc = strrev($chuoi);
    echo "$chuoi<br>";
    echo "Chuỗi sau khi đảo ngược: $chuoiDaoNguoc";
}
$chuoi = "Nguyn Thi Ha";
daoNguocChuoi($chuoi);
?>
<!-- 16. Viết chương trình PHP để tính số lượng phần tử trong một mảng. -->
<?php
    $array = [1, 2, 3, 4, 5];
    $soLuongPhanTu = count($array);
    echo $soLuongPhanTu;
    ?>
<!-- 17. Viết chương trình PHP để kiểm tra xem một chuỗi có phải là chuỗi Palindrome hay không. -->
<?php
function kiemTraPalindrome($chuoi) {
    $chuoiDaoNguoc = strrev($chuoi);
    if ($chuoi == $chuoiDaoNguoc) {
        echo "Chuỗi '$chuoi' là chuỗi Palindrome.";
    } else {
        echo "Chuỗi '$chuoi' không phải là chuỗi Palindrome.";
    }
}
$chuoi = "racecar";
kiemTraPalindrome($chuoi);
?>
<!-- 18. Viết chương trình PHP để đếm số lần xuất hiện của một phần tử trong một mảng. -->
<?php
function demSoLanXuatHien($mang, $phanTu) {
    $count = array_count_values($mang);
    if (isset($count[$phanTu])) {
        echo "Phần tử '$phanTu' xuất hiện {$count[$phanTu]} lần trong mảng.";
    } else {
        echo "Phần tử '$phanTu' không xuất hiện trong mảng.";
    }
}
    $mang = array(1, 2, 3, 4, 2, 5, 2, 1, 2);
    $phanTu = 2;
    demSoLanXuatHien($mang, $phanTu);
?>
<!-- 19. Viết chương trình PHP để sắp xếp một mảng theo thứ tự giảm dần. -->
<?php
    $array = [1, 5, 8, 3, 6];
    rsort($array);
    echo "Mảng sắp xếp theo thứ tự giảm dần: " . implode(', ', $array);
?>
<!-- 20. Viết chương trình PHP để thêm một phần tử vào đầu hoặc cuối của một mảng. -->
<?php
    function themPhanTuDau($mang, $phanTu) {
        array_unshift($mang, $phanTu);
        return $mang;
    }

    function themPhanTuCuoi($mang, $phanTu) {
        array_push($mang, $phanTu);
        return $mang;
    }
    $mang = [1, 2, 3];
    $phanTuThem = 0;
    $mangThemDau = themPhanTuDau($mang, $phanTuThem);
    $mangThemCuoi = themPhanTuCuoi($mang, $phanTuThem);
    echo "Mảng sau khi thêm phần tử vào đầu: " . implode(', ', $mangThemDau) . "<br>";
    echo "Mảng sau khi thêm phần tử vào cuối: " . implode(', ', $mangThemCuoi);
?>
<!-- 21. Viết chương trình PHP để tìm số lớn thứ hai trong một mảng. -->
<?php
    function timSoLonThuHai($arr) {
        rsort($arr);
        echo "Số lớn thứ hai trong mảng là $arr[1]";
    }

    $arr = array(1, 4, 5, 3, 8, 9);
    timSoLonThuHai($arr);
?>
<!-- 22. Viết chương trình PHP để tìm ước số chung lớn nhất và bội số chung nhỏ nhất của hai số nguyên dương. -->
<?php
    function USCLN($a, $b) {
        while ($b != 0) {
            $temp = $b;
            $b = $a % $b;
            $a = $temp;
        }
        return $a;
    }
    function BSCNN($a, $b) {
        return ($a * $b) / USCLN($a, $b);
    }
    $so1 = 10;
    $so2 = 15;
    $uscln = USCLN($so1, $so2);
    $bscnn = BSCNN($so1, $so2);

    echo "USCLN của $so1 và $so2 là: $uscln<br>";
    echo "BSCNN của $so1 và $so2 là: $bscnn";
?>
<!-- 23. Viết chương trình PHP để kiểm tra xem một số có phải là số hoàn hảo hay không. -->
<?php
    function kiemTraSoHoanHao($n) {
         if ($n <= 0) {
             return false;
        }
        $sum = 0;
        for ($i = 1; $i < $n; $i++) {
            if ($n % $i == 0) {
            $sum += $i;
            }
        }
         return $sum == $n;
        }
        $n = 6;
        if (kiemTraSoHoanHao($n)) {
             echo "$n là số hoàn hảo";
        } else {
            echo "$n không phải là số hoàn hảo";
        }
?>
<!-- 24. Viết chương trình PHP để tìm số lẻ lớn nhất trong một mảng. -->
<?php
    function timSoLeLonNhat($mang) {
        $soLeLonNhat = null;
        foreach ($mang as $i) {
            if ($i % 2 != 0 && $i > $soLeLonNhat) {
                $soLeLonNhat = $i;
            }
        }
        return $soLeLonNhat;
    }
    $mang = [1, 2, 3, 5, 7, 4, 9, 8];
    $ketQua = timSoLeLonNhat($mang);
    echo "Số lẻ lớn nhất trong mảng là: " . $ketQua;
?>
<!-- 25. Viết chương trình PHP để kiểm tra xem một số có phải là số nguyên tố hay không. -->
<?php
    function laSoNguyenTo($a) {
        if ($a < 2) {
            return false;
        }
        for ($i = 2; $i <= sqrt($a); $i++) {
            if ($a % $i == 0) {
                return false;
            }
        }
        return true;
    }
    $a = 5;

    if (laSoNguyenTo($a)) {
        echo "$a là số nguyên tố.";
    } else {
        echo "$a không phải là số nguyên tố.";
    }
?>
<!-- 26. Viết chương trình PHP để tìm số dương lớn nhất trong một mảng. -->
<?php
    function timSoDuongLonNhat($mang) {
        $soDuongLonNhat = null;
        foreach ($mang as $so) {
            if ($so > 0 && ($soDuongLonNhat === null || $so > $soDuongLonNhat)) {
                $soDuongLonNhat = $so;
            }
        }
        return $soDuongLonNhat;
    }
    $mangSo = [-1, 1, 2, -4, 13, -8, 0];
    $ketQua = timSoDuongLonNhat($mangSo);
    if ($ketQua !== null) {
        echo "Số dương lớn nhất trong mảng là: $ketQua";
    } else {
        echo "Không có số dương trong mảng.";
    }
?>

<!-- 27. Viết chương trình PHP để tìm số âm lớn nhất trong một mảng. -->
<?php
  function timSoAmLonNhat($mang) {
      $soAmLonNhat = null;
      foreach ($mang as $so) {
          if ($so < 0 && ($soAmLonNhat === null || $so > $soAmLonNhat)) {
              $soAmLonNhat = $so;
          }
      }
      return $soAmLonNhat;
  }
  $mang = [-3, 1, -5, 3, 9];
  $ketQua = timSoAmLonNhat($mangSo);
  if ($ketQua !== null) {
      echo "Số âm lớn nhất trong mảng là: $ketQua";
  } else {
      echo "Không có số âm trong mảng.";
  }
?>
<!-- 28. Viết chương trình PHP để tính tổng các số lẻ từ 1 đến n. -->
<?php
    function tinhTongSoLe($n) {
        $tong = 0;
        for ($i = 1; $i <= $n; $i++) {
            if ($i % 2 != 0) {
                $tong += $i;
            }
        }
        return $tong;
    }
    $n = 5; 
    $tongSoLe = tinhTongSoLe($n);
    echo "Tổng các số lẻ từ 1 đến $n là: $tongSoLe";
?>

<!-- 29. Viết chương trình PHP để tìm số chính phương trong một khoảng cho trước. -->
<?php
    function soCP($so) {
        $sqrt = sqrt($so);
        return ($sqrt * $sqrt == $so);
    }

    function timSoCP($start, $end) {
        echo "Các số chính phương trong khoảng từ $start đến $end là:\n";

        for ($i = $start; $i <= $end; $i++) {
            if (soCP($i)) {
                echo "$i ";
            }
        }

        echo "\n";
    }
    $start = 1;
    $end = 50;
    timSoCP($start, $end);
?>

<!-- 30. Viết chương trình PHP để kiểm tra xem một chuỗi có phải là chuỗi con của một chuỗi khác hay không. -->
<?php
    function isSubstring($str, $sub_str) {
    return strpos($str, $sub_str) !== false;
    }

    $str = "Hello world";
    $sub_str = "world";

    if (isSubstring($str, $sub_str)) {
    echo "$sub_str là một chuỗi con của $str";
    } else {
    echo "$sub_str không phải là một chuỗi con của $str";
    }
?>









