<?php include('navbar.php'); ?>

<div>
    <section class="loginNav bg-dark d-flex justify-content-center flex-column">
        <h1 class=" text-center text-light"><img src="../image/biladleLOgo.svg"></h1>
    </section>


    <section class="loginContentOne d-flex justify-content-center p-5">
        <div class="loginContentTwo d-flex justify-content-center flex-column bg-white shadow-lg rounded p-5">
            <h1 class="text-center mt-5"><b>تسجيل الدخول</b></h1>
            <label class="text-center mt-2">من فضلك قم بتعبئة البيانات التالية لتتمكن من تسجيل الدخول لمنصة
                بالعدل</label>
           
            <div class="container">
                <div class="row d-flex justify-content-center mt-4">
                    <div class="col-lg-2 col-md-3 d-flex justify-content-center align-items-center gap-2 ">
                        <img class="imgg" src="../image/MEMBER.svg" alt="aa">
                    </div>
                    <div onclick="window.location.href='/pages/loginLawyer.php'" class=" c-pointer col-lg-2 col-md-3 border-right border-left d-flex justify-content-center align-items-center gap-2 ">
                        <img class="imgg" src="../image/lawer2.svg" alt="aa">محامي
                    </div>
                    <div onclick="window.location.href='/pages/loginTrainee.php'" class="c-pointer col-lg-2 col-md-3 justify-content-center d-flex align-items-center gap-2">
                        <img class="imgg" src="../image/student.svg" alt="aa">طالب علم
                    </div>
                </div>
            </div>
            <form class="formlogin row g-3 mt-4">



                <div class="col-12 pb-2 d-flex flex-column">
                    <label for="Email" class="form-label"><b>البريد الإلكتروني</b></label>
                    <span class="logspan d-flex rounded"><img src="../image/iconemail.svg">
                        <input type="email" class="emailinp form-control loginnameicon" placeholder="name@domain.com"
                            id="inputEmail4">
                    </span>

                </div>
                <div class="col-12 pb-2 d-flex flex-column">
                    <label for="number" class="form-label"><b>كلمة المرور</b></label>
                    <span class="logspan d-flex rounded"><img src="../image/passicon.svg">
                        <input type="text" class="passinp form-control Locklogincon"
                            placeholder="ادخل كلمة المرور ما لا يقل عن 8 ارقام">
                        <img class="passicontwocss" src="../image/passicontwo.svg" alt="">
                    </span>
                </div>
                <div class="col-12 pb-2 d-flex">
                <div class="text-right col-6 pb-2">
                        <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                        <label for="vehicle1"> تذكرني</label>

                    </div>
                    <div class="col-6 pb-2 d-flex align-items-end justify-content-end">

                        <a href="" class="ankerlogin"> <b><u> هل نسيت كلمة المرور؟</u></b></a>

                    </div>

                </div>





                <div class="col-md-12 pt-4 ">

                    <button type="submit" class="btn btn-dark pt-2 w-100 h-100">تسجيل الدخول</button>
                </div>
                <a href="/pages/signupasamember.php" class="text-center ankerlogin"> ليس لديك حساب؟ <b>حساب جديد</b></a>


        </div>


        </form>

</div>
</section>

</div>