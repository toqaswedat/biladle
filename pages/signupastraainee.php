<?php include('navbar.php'); ?>

<div class="logo bg-dark d-flex justify-content-center align-items-center ">
    <img src="../image/logoBiladl.svg" alt="">    
</div>
<section class="bgimage d-flex  ">

<div class=" next text-right col-3  d-flex align-items-start justify-content-center flex-column IconSignupMember">
        <div>
            <img class="person " src="../image/personal.svg" alt="">
            <span>البيانات الشخصية</span>

        </div>
        <div class="imgline">

            <img class="person " src="../image/line31.svg" alt="">
        </div>
        <div>
            <img class="person " src="../image/wwimg.svg" alt=""> 
            <span> البلد</span>
        </div> 
        <div class="imgline">

        <img class="person " src="../image/line31.svg" alt="">
        </div>
        <div>
        <img class="person " src="../image/graduation.svg" alt=""> 
        <span> بيانات اضافية</span>
        </div> 
</div>


<div class="col-6 text-center  bg-body shadow p-3 mb-5 border rounded d-flex justify-content-center flex-column FormSignupMember">
<p>حساب جديد </p>
<p>من فضلك قم بتعبئة البيانات التالية لتتمكن من تسجيل الدخول لمنصة بالعدل</p>
<!-- start grid -->
<div class="container">
  <div class="row align-items-center">
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

        <!-- name -->
        <div class="mb-3 d-flex flex-column">
            <label for="exampleInputEmail2" class="form-label" >الاسم</label>
            <span class="spn d-flex " ><img src="../image/nameicon.svg" alt="aa">
            <input type="text" class="form-control inputemail" id="exampleInputEmail2"  placeholder="ادخل اسمك">

        </span >
            </div>

        <!-- number -->
        <div class="mb-3 d-flex flex-column">
            <label for="exampleInputEmail1" class="form-label" > رقم الهاتف </label>
            <span class="spn d-flex "><img src="../image/Vectorphone.svg" alt="aa">
            <input type="text" class="form-control inputnumber" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder=" 1234 123 12 ">
            <img class="imgg" src="../image/countrysu.svg" alt="aa"></span >
        </div>
        
        <!-- email -->
        <div class="mb-3 d-flex flex-column">
            <label for="exampleInputEmail2" class="form-label" > البريد الالكتروني </label>
            <span class="spn d-flex " ><img src="../image/emailicone.svg" alt="aa">
            <input type="email" class="form-control inputemail" id="exampleInputEmail2"  placeholder="name@domain.com">

        </span >
            </div>
        <!-- idnum -->
        <div class="mb-3 d-flex flex-column">
            <label for="exampleInputEmail4" class="form-label" > رقم الهوية</label>
            <span class="spn d-flex "><img src="../image/idnum.svg" alt="aa">
            <input type="text" class="form-control inputaddress" id="exampleInputEmail4"  placeholder="ادخل رقم الهوية الخاصة بك">
            </span >
        </div>
        <!-- password -->
        <div class="row">
    <div class="col">
    <div class="mb-3 d-flex flex-column">
            <label for="exampleInputEmail4" class="form-label" > كلمة المرور</label>
            <span class="spn d-flex "><img src="../image/pass1.svg" alt="aa">
            <input type="text" class="form-control inputaddress" id="exampleInputEmail4"  placeholder="ادخل كلمة المرور  " >
            <img class="imgg" src="../image/passcon.svg" alt="aa"></span >
            </span >
        </div>
    </div>
    <div class="col">
    <div class="mb-3 d-flex flex-column">
            <label for="exampleInputEmail4" class="form-label" > تأكيد كلمة المرور </label>
            <span class="spn d-flex "><img src="../image/pass1.svg" alt="aa">
            <input type="text" class="form-control inputaddress" id="exampleInputEmail4"  placeholder="ادخل كلمة المرور  ">
            <img class="imgg" src="../image/passcon.svg" alt="aa"></span >
            </span >
        </div>
    </div>
  </div>
        <!-- button -->
        <div class="d-grid gap-2 ">
            <button  class="btn btn-dark " onclick="window.location.href='/pages/signupasatraainee2.php'" type="button">التالي</button>
        </div>
        <a href="/pages/login.php" class="text-center ankerlogin">  لديك حساب؟ <b>تسجيل الدخول</b></a>

</form>


</section>

