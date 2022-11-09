<?php include('navbar.php');?>
<section class="d-flex flex-column justify-content-center align-items-center text-light" style="background-image:url('../image/coveraboutUs.jpg');  background-size: cover; background-repeat: no-repeat; height:374px;">
<h6>الصفحة الرئيسية >  أخبارنا</h6>
<h1>أخبارنا</h1>
</section>
<h2 class="text-right p-5">آخر الأخبار</h2>

<section class="pt-5 pb-5 " >
  <div class="pt-5" >
  <div class="container text-center my-3">
    <div class="row mx-auto my-auto justify-content-center">
        <div id="recipeCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active carousel-item1">
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-img">
                                <img src="../image/photo03.svg" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item carousel-item1">
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-img">
                                <img src="../image/photo02.svg" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item carousel-item1">
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-img">
                                <img src="../image/photo01.svg" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item carousel-item1">
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-img">
                                <img src="../image/photo01.svg" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <a class="carousel-control-prev bg-transparent w-aut" href="#recipeCarousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            </a>
            <a class="carousel-control-next bg-transparent w-aut" href="#recipeCarousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
            </a>
        </div>
    </div>

</div>
    </div>
    <div class="d-flex justify-content-center">
    <button class="moreAboutBtn btn btn-lg col-s-12 bg-dark font-weight-bold text-light datepicker mt-5  w-25 ">عرض الكل</button>
  </div>
    
</section>


<script>

let items = document.querySelectorAll('.carousel .carousel-item')

items.forEach((el) => {
    const minPerSlide = 4
    let next = el.nextElementSibling
    for (var i=1; i<minPerSlide; i++) {
        if (!next) {
            // wrap carousel by using first child
        	next = items[0]
      	}
        let cloneChild = next.cloneNode(true)
        el.appendChild(cloneChild.children[0])
        next = next.nextElementSibling
    }
})


</script>






<?php include('footer.php');?>
