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

            <img class="person " src="../image/Line33.svg" alt="">
        </div>
        <div>
            <img class="person " src="../image/lawter.svg" alt=""> 
            <span> بيانات اضافية </span></span>
        </div>
</div>


<div class="col-lg-6 col-md-8 col-sm-10  text-center  bg-body shadow p-3 mb-5 border rounded d-flex justify-content-center flex-column ">
<p>حساب جديد </p>
<p>من فضلك قم بتعبئة البيانات التالية لتتمكن من تسجيل الدخول لمنصة بالعدل</p>
<!-- start grid -->
<div class="container">
<div class="row d-flex justify-content-center mt-4 align-items-center">
    <div onclick="window.location.href='/pages/signupasamember.php'" class="col c-pointer d-flex gap-3 ">
    <img class="imgg" src="../image/nameicon.svg" alt="aa">عضو

    </div>
    <div  onclick="window.location.href='/pages/signupaslawyer1.php'" class="col c-pointer d-flex gap-3 border-left border-right">
    <img class="imgg" src="../image/lawyer02.svg" alt="aa">
    </div>
    <div onclick="window.location.href='/pages/signupastraainee.php'" class="col c-pointer d-flex gap-3">
    <img class="imgg" src="../image/student.svg" alt="aa">طالب علم
    </div>
  </div>
</div>
<!-- end grid -->

<!-- start form -->
<form class="form  ">

        <!-- select state -->
        <div class="mb-3 d-flex flex-column ">
            <label for="exampleInputEmail3" class="form-label" > الدولة</label>
            <span class="spn d-flex "><img src="../image/ww.svg" alt="aa">
            <select class="form-select inputsub" id="exampleInputEmail3" aria-label="Default select example">
            <option selected> اختر الدولة </option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
            </select>
            <img class="imgg" src="../image/countrysu.svg" alt="aa"></span >
            </span >
        </div>

         <!-- select nationality -->
         <div class="mb-3 d-flex flex-column ">
            <label for="exampleInputEmail3" class="form-label" > الجنسية</label>
            <span class="spn d-flex "><img src="../image/ww.svg" alt="aa">
            <select class="form-select inputsub" id="exampleInputEmail3" aria-label="Default select example">
            <option selected> اختر الجنسية</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
            </select>
            <img class="imgg" src="../image/countrysu.svg" alt="aa"></span >
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
            <img class="imgg" src="../image/countrysu.svg" alt="aa"></span >
            </span >
        </div>
        <!-- region -->
        <div class="mb-3 d-flex flex-column">
            <label for="exampleInputEmail2" class="form-label" > المنطقة </label>
            <span class="spn d-flex " ><img src="../image/location.svg" alt="aa">
            <input type="text" class="form-control inputemail" id="exampleInputEmail2"  placeholder=" قم بادخال العنوان الخاص بك ">

        </span >
        <!-- date -->
        <div class="mb-3 d-flex flex-column">
            <label for="exampleInputEmail2" class="form-label" >تاريخ الميلاد</label>
            <span class="spn d-flex " >
            <input type="date" class="form-control inputemail" id="exampleInputEmail2"  placeholder="ادخل اسمك">

        </span >
        <!-- <span class="datepicker-toggle">
  <span class="datepicker-toggle-button"></span>
  <input type="date" class="datepicker-input">
</span> -->
            </div>

        <!-- gender -->
        <div class="mb-3 text-right ">
        <p>النوع</p>
      <input type="radio" id="ذكر" name="fav_language" value="ذكر">
      <label for="ذكر">ذكر</label>
      <input type="radio" id="انثى" name="fav_language" value="انثى">
      <label for="انثى">انثى</label>
            
        </div>
        
        <!-- button -->
        <div class="d-grid gap-2 ">
            <button  class="btn btn-dark " onclick="window.location.href='/pages/signupasalawyer3.php'" type="button">التالي</button>
        </div>
        <p> لديك حساب؟<b> تسجيل الدخول</b></p>

</form>


</section>

