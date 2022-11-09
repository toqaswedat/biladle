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
    <div class="col-12 m-3">
    <form class="form  ">
        <div class="mb-3 d-flex flex-column">
            <label for="exampleInputEmail1" class="form-label" > رقم الهاتف </label>
            <input type="text" class="form-control inputnumber" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="        |         ادخل رقم الهاتف">
        </div>
        
        <div class="mb-3 d-flex flex-column">
            <label for="exampleInputEmail2" class="form-label" > البريد الالكتروني </label>
            <span class="imgemail d-flex "><img src="../image/iconemail.svg" alt="aa"><input type="email" class="form-control inputemail" id="exampleInputEmail2"  placeholder="من فضلك ادخل البريد الالكتروني ">
        </span >
            </div>

        <div class="mb-3 d-flex flex-column">
            <label for="exampleInputEmail3" class="form-label" > الموضوع </label>
            <!-- <input type="text" class="form-control inputsub"   id="exampleInputEmail3"  placeholder="            |   اختر الموضوع "> -->
            <select class="form-select inputsub" id="exampleInputEmail3" aria-label="Default select example">
            <option selected> اختر الموضوع  </option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
            </select>
            
        </div>

        <div class="mb-3 d-flex flex-column">
            <label for="exampleInputEmail4" class="form-label" > العنوان</label>
            <input type="text" class="form-control inputaddress" id="exampleInputEmail4"  placeholder="              |    ضع عنوان مناسب للاستعلام الخاص بك ">
        </div>

        <div class="mb-3 d-flex flex-column">
            <label for="exampleInputEmail5" class="form-label" > الاستعلام الخاص بك</label>
            <textarea  id="exampleInputEmail5" placeholder="من فضلك ادخل الاستعلام الخاص بك" rows="5" cols="50"></textarea>
            <div class="mb-3 d-flex flex-column">
                <!-- <label for="exampleInputEmail6" class="form-label" > العنوان</label> -->
                <input type="file" class="form-control inputfile" id="exampleInputEmail6"  placeholder="ارفاق مشتندات ان وجد">
            </div>
        </div>
        
        <div class="d-grid gap-2 ">
            <button  class="btn btn-dark " type="button">ارسال</button>
        </div>
        

</form>
    </div>
    <div class="col">
    
    </div>
  </div>
<!-- end of grid -->
  



