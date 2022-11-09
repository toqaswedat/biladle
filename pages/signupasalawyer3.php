<?php include('navbar.php'); ?>

<div class="logo bg-dark d-flex justify-content-center align-items-center ">
    <img src="../image/logoBiladl.svg" alt="">    
</div>
<section class="bgimage d-flex  ">

<div class=" next text-right col-3  d-flex align-items-start justify-content-center flex-column ">
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
            <img class="person " src="../image/lawter1.svg" alt=""> 
            <span> بيانات اضافية </span></span>
        </div>
</div>


<div class="col-6 text-center  bg-body shadow p-3 mb-5 border rounded d-flex justify-content-center flex-column">
<p>حساب جديد </p>
<p>من فضلك قم بتعبئة البيانات التالية لتتمكن من تسجيل الدخول لمنصة بالعدل</p>
<!-- start grid -->
<div class="container">
  <div class="row">
      <div class="col">
          <img class="imgg" src="../image/nameicon.svg" alt="aa">عضو
        </div>
        <div class="col">
        <img class="imgg" src="../image/lawyer02.svg" alt="aa">
        </div>
    <div class="col">
    <img class="imgg" src="../image/student.svg" alt="aa">طالب علم
    </div>
  </div>
</div>
<!-- end grid -->

<!-- start form -->
<form class="form  ">

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

         <!-- select langoeg -->
         <div class="mb-3 d-flex flex-column ">
            <label for="exampleInputEmail3" class="form-label" > اللغة</label>
            <span class="spn d-flex "><img src="../image/ww.svg" alt="aa">
            <select class="form-select inputsub" id="exampleInputEmail3" aria-label="Default select example">
            <option selected> اختر لغة أو أكثر من اللغات التي تعرفها </option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
            </select>
            </span >
        </div>
        
        <!-- ادخل رقم الترخيص -->
        <div class="mb-3 d-flex flex-column">
            <label for="exampleInputEmail2" class="form-label" > رقم الترخيص </label>
            <span class="spn d-flex " ><img src="../image/licence1.svg" alt="aa">
            <input type="text" class="form-control inputemail" id="exampleInputEmail2"  placeholder="ادخل رقم الترخيص ">

        </span >
        <!-- المدينة/الحي -->
        <div class="row">
    <div class="col">
    <div class="mb-3 d-flex flex-column">
            <label for="exampleInputEmail4" class="form-label" > المدينة</label>
            <span class="spn d-flex "><img src="../image/countr.svg" alt="aa">
            <select class="form-select inputsub" id="exampleInputEmail3" aria-label="Default select example">
            <option selected> اختر المدينة </option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
            </select>
        </div>
    </div>
    <div class="col">
    <div class="mb-3 d-flex flex-column">
            <label for="exampleInputEmail4" class="form-label" > الحي</label>
            <span class="spn d-flex "><img src="../image/countr.svg" alt="aa">
            <select class="form-select inputsub" id="exampleInputEmail3" aria-label="Default select example">
            <option selected> اختر الحي </option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
            </select>
        </div>
    </div>
  </div>
        <!-- region -->
        <div class="mb-3 d-flex flex-column">
            <label for="exampleInputEmail2" class="form-label" > المنطقة </label>
            <span class="spn d-flex " ><img src="../image/location.svg" alt="aa">
            <input type="text" class="form-control inputemail" id="exampleInputEmail2"  placeholder=" قم بادخال العنوان الخاص بك ">

        </span >
        
            </div>

            <div class="row">
    <div class="col">
    <div class="mb-3 d-flex flex-column">
    <label for="exampleInputEmail2" class="form-label" > الرقم البريدي </label>
            <span class="spn d-flex " ><img src="../image/zipcode1.svg" alt="aa">
            <input type="text" class="form-control inputemail" id="exampleInputEmail2"  placeholder=" قم بادخال الرقم البريدي ">

        </span >
        </div>
    </div>
    <div class="col">
    <div class="mb-3 d-flex flex-column">
    <label for="exampleInputEmail2" class="form-label" > رقم اضافي </label>
            <span class="spn d-flex " ><img src="../image/zipcode1.svg" alt="aa">
            <input type="text" class="form-control inputemail" id="exampleInputEmail2"  placeholder=" قم بادخال رقم بريدي اخر اذا وجد ">

        </span >
        </div>
    </div>
  </div>
        
        <!-- button -->
        <div class="d-grid gap-2 ">
            <button  class="btn btn-dark " type="button">حساب جديد</button>
        </div>
        <p> لديك حساب؟<b> تسجيل الدخول</b></p>

</form>


</section>

