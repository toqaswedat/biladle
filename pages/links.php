<?php include('navbar.php');?>
<section class="d-flex flex-column justify-content-center align-items-center text-light" style="background-image:url('../image/coveraboutUs.jpg');  background-size: cover; background-repeat: no-repeat; height:374px;">
<h6>الصفحة الرئيسية >  وثائق مفيدة</h6>
<h1>وثائق مفيدة</h1>
</section>

<section class="text-right p-5">
    <img src="../image/links.svg" class="img-fluid">
    <h3 class="font-weight-bold pt-4">روابط مهمة</h3>
    <ul class="list-unstyled font-weight-bold">
        <li class=" pt-3">
        <img  class='pl-3' src="../image/point05.svg" /> الوزارات
        </li>
        <li class=" pt-3">
        <img  class='pl-3' src="../image/point05.svg" /> السفارات
        </li>
    </ul>
    <?php
    $data=json_encode(json_decode(file_get_contents("../scripts/links.json"), true));
    print_r($data);
    ?>
</section>

















<?php include('footer.php');?>
