<?php include('navbar.php'); ?>
<!-- header -->
<div class="advice bg-dark d-flex justify-content-center align-items-center">
    <h1 class="advicetext text-light">
   <span class="textline "> طلب</span> نصيحة
     </h1>
</div>

<!-- grid -->
<div class="container">
  <div class="row">
    <div class="col">
    
    </div>
    <div class="col-12 mt-4 mb-3">
        <!-- start form -->
    <form class="form  ">
        <!-- number -->
        <div class="mb-3 d-flex flex-column">
            <label for="exampleInputEmail1" class="form-label" > رقم الهاتف </label>
            <span class="spn d-flex "><img src="../image/Vectorphone.svg" alt="aa">
            <input type="text" class="form-control inputnumber" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder=" ادخل رقم الهاتف">
            <img class="imgg" src="../image/countrysu.svg" alt="aa"></span >
        </div>
        <!-- email -->
        <div class="mb-3 d-flex flex-column">
            <label for="exampleInputEmail2" class="form-label" > البريد الالكتروني </label>
            <span class="spn d-flex " ><img src="../image/emailicone.svg" alt="aa">
            <input type="email" class="form-control inputemail" id="exampleInputEmail2"  placeholder="من فضلك ادخل البريد الالكتروني ">

        </span >
            </div>
        <!-- select -->
        <div class="mb-3 d-flex flex-column">
            <label for="exampleInputEmail3" class="form-label" > الموضوع </label>
            <span class="spn d-flex "><img src="../image/Vectorsub.svg" alt="aa">
            <select class="form-select inputsub" id="exampleInputEmail3" aria-label="Default select example">
            <option selected> اختر الموضوع  </option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
            </select>
            </span >
        </div>
        <!-- subject -->
        <div class="mb-3 d-flex flex-column">
            <label for="exampleInputEmail4" class="form-label" > العنوان</label>
            <span class="spn d-flex "><img src="../image/Vectoradd.svg" alt="aa">
            <input type="text" class="form-control inputaddress" id="exampleInputEmail4"  placeholder="ضع عنوان مناسب للاستعلام الخاص بك ">
            </span >
        </div>
        <!-- textarea and file  -->
        <div class="mb-3 d-flex flex-column">
            <!-- textarea -->
            <label for="exampleInputEmail5" class="form-label" > الاستعلام الخاص بك</label>
            <textarea  id="exampleInputEmail5" placeholder= " من  فضلك ادخل الاستعلام الخاص بك... "  rows="5" cols="50"></textarea>
            <div class="mb-3 d-flex flex-column">
                <!-- file -->
            <span class="spn1 d-flex ">
            <label for="upload-photo "><img class="imgg" src="../image/fileicon.svg" alt="aa"></label>
            <input type="file" name="photo" id="upload-photo" />
            </span >
            </div>
        </div>
        <!-- button -->
        <div class="d-grid gap-2 ">
            <button  class="btn btn-dark " type="button">ارسال</button>
        </div>
        

</form>
    </div>
    <div class="col">
    
    </div>
  </div>
<!-- end of grid -->
  



