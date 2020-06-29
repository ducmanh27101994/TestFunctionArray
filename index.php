<?php

$arr = [2,2,2,4,10,-5,10,-6,-4,6,6];
$arr1 = array('manh'=>'26');
//array_change_key_case()	Trả về một mảng với tất cả key trong dạng chữ hoa hoặc chữ thường
print_r(array_change_key_case($arr1,CASE_UPPER));
echo '<br>';

//array_chunk()	Chia một mảng thành một mảng các mảng
print_r(array_chunk($arr,2));
echo '<br>';

//array_column() Tao 1 mang moi dua theo cot gia tri vs key
$a = array(
    array(
        'id' => 5698,
        'first_name' => 'Peter',
        'last_name' => 'Griffin',
    ),
    array(
        'id' => 4767,
        'first_name' => 'Ben',
        'last_name' => 'Smith',
    ),
    array(
        'id' => 3809,
        'first_name' => 'Joe',
        'last_name' => 'Doe',
    )
);
print_r(array_column($a,'first_name','id'));
echo '<br>';

//array_combine() Tạo một mảng bởi sử dụng một mảng cho key và mảng khác cho value

$fname=array("Peter","Ben","Joe");
$age=array("35","37","43");

print_r(array_combine($age,$fname));
echo '<br>';

//array_count_values()	Trả về một mảng với số lần xuất hiện mỗi value

print_r(array_count_values($arr));
echo '<br>';

//array_diff()	So sánh các value của mảng, và trả về các sự khác nhau
$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("e"=>"red","f"=>"green","g"=>"blue");

print_r(array_diff($a1,$a2));
echo '<br>';

//array_diff_assoc() So sánh key và value của mảng, và trả về sự khác nhau

print_r(array_diff_assoc($a1,$a2));
echo '<br>';

//array_diff_key()	So sánh các key của mảng, và trả về các sự khác nhau

print_r((array_diff_key($a1,$a2)));
echo '<br>';

//array_diff_assoc()	So sánh key và value của mảng, với một hàm kiểm tra bổ sung do người dùng tạo, và trả về các sự khác nhau

function myfunction($a,$b)
{
    if ($a===$b)
    {
        return 0;
    }
    return ($a>$b)?1:-1;
}

$a3=array("a"=>"red","b"=>"green","c"=>"blue");
$a4=array("d"=>"red","b"=>"green","e"=>"blue");

$result=array_diff_uassoc($a3,$a4,"myfunction");
print_r($result);
echo '<br>';

// array_diff_ukey()	So sánh key của mảng, với một hàm kiểm tra bổ sung do người dùng tạo, và trả về các sự khác nhau
function myfunction1($a,$b)
{
    if ($a===$b)
    {
        return 0;
    }
    return ($a>$b)?1:-1;
}

$a5=array("a"=>"red","b"=>"green","c"=>"blue");
$a6=array("a"=>"blue","b"=>"black","e"=>"blue");

$result=array_diff_ukey($a5,$a6,"myfunction1");
print_r($result);
echo '<br>';

//array_fill()	Điền value vào một mảng

$a7=array_fill(3,4,"blue");
print_r($a7);
echo '<br>';

//array_fill_keys()	Điền value vào một mảng, chỉ rõ các key

$keys=array('a','b','c','d');
$a8 = array_fill_keys($keys,'blue');
print_r($a8);
echo '<br>';

//array_filter()	Lọc các phần tử của một mảng bởi sử dụng một hàm do người dùng tạo
function test_odd($var)
{
    return($var & 3);
}

$a9=array(1,3,2,3,4);
print_r(array_filter($a9,"test_odd"));
echo '<br>';

//array_flip() trao đổi key vs giá trị trong 1 mảng

$a10=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$result=array_flip($a10);
print_r($result);

//array_intersect()	So sánh các value trong mảng và trả về các so khớp

$a11=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a12=array("e"=>"red","f"=>"green","g"=>"blue");

$result=array_intersect($a11,$a12);
print_r($result);
echo '<br>';

//array_intersect_assoc()	So sánh các key và value trong mảng và trả về các so khớp
$a13=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a14=array("a"=>"red","b"=>"green","c"=>"blue");

$result=array_intersect_assoc($a13,$a14);
print_r($result);
echo '<br>';

//array_intersect_key()	So sánh các key trong mảng và trả về các so khớp
$a15=array("a"=>"red","b"=>"green","c"=>"blue");
$a16=array("a"=>"red","c"=>"blue","d"=>"pink");

$result=array_intersect_key($a15,$a16);
print_r($result);
echo '<br>';

//array_intersect_uassoc()	So sánh các key và value trong mảng, với một hàm kiểm tra bổ sung do người dùng tạo và trả về các so khớp
function myfunction2($a,$b)
{
    if ($a===$b)
    {
        return 0;
    }
    return ($a>$b)?1:-1;
}

$a17=array("a"=>"red","b"=>"green","c"=>"blue");
$a18=array("d"=>"red","b"=>"green","e"=>"blue");

$result=array_intersect_uassoc($a17,$a18,"myfunction2");
print_r($result);
echo '<br>';







