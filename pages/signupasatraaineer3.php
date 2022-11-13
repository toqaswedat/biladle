<?php include('navbar.php'); ?>

<div class="logo bg-dark d-flex justify-content-center align-items-center ">
    <img src="../image/logoBiladl.svg" alt="">    
</div>
<section class="bgimage d-flex  ">

<div class=" next text-right col-md-3 col-lg-3 col-sm-9  d-flex align-items-start justify-content-center flex-column IconSignupMember">
        <div>
            <img class="person " src="../image/personal.svg" alt="">
            <span>البيانات الشخصية</span>

        </div>
        <div class="imgline">

            <img class="person " src="../image/line31.svg" alt="">
        </div>
        <div>
            <img class="person " src="../image/wwimg2.svg" alt=""> 
            <span>الدولة والميلاد</span>
        </div> 
        <div class="imgline">

            <img class="person " src="../image/line31.svg" alt="">
        </div>
        <div>
            <img class="person " src="../image/graduation1.svg" alt=""> 
            <span> بيانات اضافية </span>

        </div>
</div>


<div class="col-lg-6 col-md-8 col-sm-10  text-center  bg-body shadow p-3 mb-5 border rounded d-flex justify-content-center flex-column ">
<p>حساب جديد </p>
<p>من فضلك قم بتعبئة البيانات التالية لتتمكن من تسجيل الدخول لمنصة بالعدل</p>
<!-- start grid -->
<div class="container">
<div class="row d-flex justify-content-center mt-4 align-items-center">
    <div onclick="window.location.href='/pages/signupasamember.php'" class="col c-pointer justify-content-center d-flex gap-3 ">
    <img class="imgg" src="../image/nameicon.svg" alt="aa">عضو
    </div>
    <div onclick="window.location.href='/pages/signupaslawyer1.php'" class="col c-pointer d-flex gap-3 justify-content-center border-left border-right">
    <img class="imgg" src="../image/lawer2.svg" alt="aa">محامي
    </div>
    <div onclick="window.location.href='/pages/signupastraainee.php'" class="col c-pointer justify-content-center d-flex gap-3">
    <img class="imgg" src="../image/traineesignupastraainee.svg" alt="aa">
    </div>
  </div>
</div>
<!-- end grid -->

<!-- start form -->
<form class="form  ">

        <!-- select المعهد الحالي -->
        <div class="mb-3 d-flex flex-column ">
            <label for="exampleInputEmail3" class="form-label" > المعهد الحالي</label>
            <span class="spn d-flex "><img src="../image/grad.svg" alt="aa">
            <select class="form-select inputsub" id="exampleInputEmail3" aria-label="Default select example">
            <option selected> ادخل اسم المعهد الحالي  </option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
            </select>
            </span >
        </div>

         <!-- select country -->
        <div class="mb-3 d-flex flex-column ">
            <label for="exampleInputEmail3" class="form-label" > البلد</label>
            <span class="spn d-flex "><img src="../image/countr.svg" alt="aa">
            <select class="form-select inputsub" id="exampleInputEmail3" aria-label="Default select example">
            <option selected> اختر البلد </option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
            </select>
            </span >
        </div>
        
        <!-- الدورة التدريبية  -->
        <div class="mb-3 d-flex flex-column">
            <label for="exampleInputEmail2" class="form-label" > الدورة التدريبية  </label>
            <span class="spn d-flex " ><img src="../image/cercle.svg" alt="aa">
            <input type="text" class="form-control inputemail" id="exampleInputEmail2"  placeholder=" ادخل اسم الدورة التدريبية ">

        </span >
        
        <!-- select magore -->
        <div class="mb-3 d-flex flex-column ">
            <label for="exampleInputEmail3" class="form-label" > التخصص</label>
            <span class="spn d-flex "><img src="../image/majior.svg" alt="aa">
            <select class="form-select inputsub" id="exampleInputEmail3" aria-label="Default select example">
            <option selected> اختر تخصصك </option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
            </select>
            </span >
        </div>

        <!-- button -->
        <div class="d-grid gap-2 ">
            <button  class="btn btn-dark " type="button">حساب جديد</button>
        </div>
        <a href="/pages/login.php" class="text-center ankerlogin">  لديك حساب؟ <b>تسجيل الدخول</b></a>

</form>


</section>

