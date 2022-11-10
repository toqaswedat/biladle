<?php include('navbar.php'); ?>
<section class="contactnav bg-dark d-flex justify-content-center flex-column">
  <h1 class=" text-center text-light"><span class="spancontact">اتصل</span> بنا</h1>
</section>
<div class="container-fluid contactform">

  <section class="text-right">

    <div class="container">
      <div class="row">
        <div class="col justify-content-center align-items-center">
          <form class=" row g-3 pt-5">



            <div class="col-12 pb-2  ">
              <label for="name" class="form-label"><b>الإسم</b></label>
              <span class="logspan d-flex rounded"><img src="../image/contacticon.svg">
                <input type="text" class="form-control contactname contact-field" placeholder="ادخل اسمك">
              </span>
            </div>
            <div class="col-12 pb-2 ">
              <label for="name" class="form-label"><b>رقم الهاتف</b></label>
              <span class="lognumspan d-flex rounded"><img src="../image/PHONEicno.svg">
                <input type="text" class="form-control contactnum contact-field" placeholder="ادخل رقم الهاتف">
                <img class="countryICON" src="../image/countryICON.svg">
              </span>
            </div>

            <div class="col-12 pb-2 d-flex flex-column">
              <label for="Email" class="form-label"><b>البريد الإلكتروني</b></label>
              <span class="logspan d-flex rounded"><img src="../image/iconemail.svg">
                <input type="email" class="emailinp form-control loginnameicon contact-field" placeholder="من فضلك ادخل البريد الالكتروني              


                                                            


                                                                      

                                                                       name@domain.com   ">
              </span>

            </div>

            <label for="Email" class="form-label"><b>الرسالة</b></label>
            <div class="form-floating">
              <textarea class="w-100 p-4 contact-field" placeholder="من فضلك ادخل رسالتك..." ></textarea>
            </div>



            <div class="col-md-12 pt-4 ">

              <button type="submit" class="btn btn-dark pt-2 w-100 h-100">ارسال</button>
            </div>


        </div>



        </form>


      </div>
  </section>
</div>

<?php include('footer.php');?>