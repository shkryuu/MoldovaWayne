@extends('layouts.master')

@section('content')
<section id="">
    <div class="container-fluid">
        <div class="row align-items-center justify-content-between g-5">
            <div class="col-lg-6">
                <div class="image-holder mb-4 jarallax">
                    <img src="images/single-image1.jpg" alt="single" class="img-fluid jarallax-img">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="detail p-5">
                    <div class="display-header">
                        <h2 class="display-2 text-uppercase text-dark pb-2">Turism vitivinicol
                        </h2>
                        <p class="pb-3">Oamenii fac ca turismul viticol din Moldova să fie special. Un turist în Republica Moldova va întâlni oameni autentici, calzi și prietenoși și, ori de câte ori se întâmplă astfel de întâlniri, oferă vizitatorului posibilitatea de a se bucura de mâncarea tradițională a Moldovei.

                        </p>
                        <p> Experiențele vitivinicole din Moldova includ faimoasele crame subterane „Cricova” și „Milestii Mici”, aceasta din urmă fiind inclusă în Cartea Recordurilor Guinness pentru cea mai mare colecție de vinuri din lume.</p>
                        <a href="about-us.html" class="btn btn-medium btn-arrow outline-dark position-relative mt-3">
                            <span class="text-uppercase">Descopera</span>
                            <svg class="arrow-right position-absolute" width="18" height="20">
                                <use xlink:href="#arrow-right"></use>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="featured-products" class="product-store position-relative padding-large">
    <div class="container-fluid">
        <div class="row">
            <div class="display-header pb-3 d-flex justify-content-between flex-wrap col-md-12">
                <h2 class="display-2 text-dark text-uppercase">Our Featured Products</h2>
                <a href="shop.html" class="btn btn-medium btn-arrow btn-normal position-relative">
                    <span class="text-uppercase">Shop All</span>
                    <svg class="arrow-right position-absolute" width="18" height="20">
                        <use xlink:href="#arrow-right"></use>
                    </svg>
                </a>
            </div>
        </div>
        <div class="row">
            <div id="featured-swiper" class="product-swiper col-md-12">
                <div class="swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="product-card image-zoom-effect link-effect d-flex flex-wrap">
                                <div class="image-holder">
                                    <img src="images/product-item1.jpg" alt="product-item" class="product-image img-fluid">
                                </div>
                                <div class="cart-concern">
                                    <h3 class="card-title text-uppercase pt-3 text-primary">
                                        <a href="single-product.html" class="text-primary">Black Sofa Set</a>
                                    </h3>
                                    <div class="cart-info">
                                        <a class="pseudo-text-effect" href="#" data-after="ADD TO CART"><span>$200</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="product-card image-zoom-effect link-effect d-flex flex-wrap">
                                <div class="image-holder">
                                    <img src="images/product-item2.jpg" alt="product-item" class="product-image img-fluid">
                                </div>
                                <div class="cart-concern">
                                    <h3 class="card-title text-uppercase pt-3 text-primary">
                                        <a href="single-product.html" class="text-primary">Circle Dining Table</a>
                                    </h3>
                                    <div class="cart-info">
                                        <a class="pseudo-text-effect" href="#" data-after="ADD TO CART">
                                            <span>$200</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="product-card image-zoom-effect link-effect d-flex flex-wrap">
                                <div class="image-holder">
                                    <img src="images/product-item3.jpg" alt="product-item" class="product-image img-fluid">
                                </div>
                                <div class="cart-concern">
                                    <h3 class="card-title text-uppercase pt-3 text-primary">
                                        <a href="single-product.html" class="text-primary">Minimal Sofa</a>
                                    </h3>
                                    <div class="cart-info">
                                        <a class="pseudo-text-effect" href="#" data-after="ADD TO CART">
                                            <span>$200</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="product-card image-zoom-effect link-effect d-flex flex-wrap">
                                <div class="image-holder">
                                    <img src="images/product-item4.jpg" alt="product-item" class="product-image img-fluid">
                                </div>
                                <div class="cart-concern">
                                    <h3 class="card-title text-uppercase pt-3 text-primary">
                                        <a href="single-product.html" class="text-primary">Pattern Tea Table</a>
                                    </h3>
                                    <div class="cart-info">
                                        <a class="pseudo-text-effect" href="#" data-after="ADD TO CART">
                                            <span>$200</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="product-card image-zoom-effect link-effect d-flex flex-wrap">
                                <div class="image-holder">
                                    <img src="images/product-item5.jpg" alt="product-item" class="product-image img-fluid">
                                </div>
                                <div class="cart-concern">
                                    <h3 class="card-title text-uppercase pt-3 text-primary">
                                        <a href="single-product.html" class="text-primary">Black Sofa Set</a>
                                    </h3>
                                    <div class="cart-info">
                                        <a class="pseudo-text-effect" href="#" data-after="ADD TO CART">
                                            <span>$200</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="product-card image-zoom-effect link-effect d-flex flex-wrap">
                                <div class="image-holder">
                                    <img src="images/product-item6.jpg" alt="product-item" class="product-image img-fluid">
                                </div>
                                <div class="cart-concern">
                                    <h3 class="card-title text-uppercase pt-3 text-primary">
                                        <a href="single-product.html" class="text-primary">Minimal Sofa</a>
                                    </h3>
                                    <div class="cart-info">
                                        <a class="pseudo-text-effect" href="#" data-after="ADD TO CART">
                                            <span>$200</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination text-center mt-5"></div>
            </div>
        </div>
    </div>
</section>
<section id="about-us">
    <div class="container-fluid">
        <div class="row align-items-center justify-content-between g-5">
            <div class="col-lg-6">
                <div class="image-holder mb-4 jarallax">
                    <img src="images/turizm-image2.jpg" alt="single" class="img-fluid jarallax-img">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="detail p-5">
                    <div class="display-header">
                        <h2 class="display-2 text-uppercase text-dark pb-2">Importanta vinariilor
                        </h2>
                        <p class="pb-3">Turismul a reprezentat întotdeauna arta de a călători pentru propria plăcere, el fiind, în esență, pentru foarte multe țări, cea mai importantă și prosperă ramură a economiei. Dezvoltarea turismului în Republica Moldova, ca în oricare altă țară, e condiționată de scopul turiștilor ce doresc să o viziteze, iar vinăriile din Moldova cu siguranță sunt atracții turistice de top pentru iubitorii de vin.

                        </p>
                        <p> Experiențele vitivinicole din Moldova includ faimoasele crame subterane „Cricova” și „Milestii Mici”, aceasta din urmă fiind inclusă în Cartea Recordurilor Guinness pentru cea mai mare colecție de vinuri din lume.</p>
                        <a href="about-us.html" class="btn btn-medium btn-arrow outline-dark position-relative mt-3">
                            <span class="text-uppercase">Descopera</span>
                            <svg class="arrow-right position-absolute" width="18" height="20">
                                <use xlink:href="#arrow-right"></use>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="testimonials" class="position-relative">
    <div class="container">
        <div class="row">
            <div class="review-content position-relative">
                <div class="swiper-icon swiper-arrow swiper-arrow-prev position-absolute d-flex align-items-center justify-content-center">
                    <svg class="icon-arrow" width="25" height="25">
                        <use xlink:href="#arrow-left" />
                    </svg>
                </div>
                <div class="swiper testimonial-swiper">
                    <div class="quotation text-center">
                        <svg class="quote">
                            <use xlink:href="#quote" />
                        </svg>
                    </div>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide text-center d-flex justify-content-center">
                            <div class="review-item col-md-10">
                                <i class="icon icon-review"></i>
                                <blockquote class="fs-4">“Tempus oncu enim pellen tesque este pretium in neque, elit morbi sagittis lorem habi mattis Pellen tesque pretium feugiat vel morbi suspen dise sagittis lorem habi tasse morbi.”</blockquote>
                                <div class="author-detail">
                                    <div class="name text-primary text-uppercase pt-2">Hana Kimusaki</div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide text-center d-flex justify-content-center">
                            <div class="review-item col-md-10">
                                <i class="icon icon-review"></i>
                                <blockquote class="fs-4">“A blog is a digital publication that can complement a website or exist independently. A blog may include articles, short posts, listicles, infographics, videos, and other digital content.”</blockquote>
                                <div class="author-detail">
                                    <div class="name text-primary text-uppercase pt-2">Jennie Rose</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-icon swiper-arrow swiper-arrow-next position-absolute d-flex align-items-center justify-content-center">
                    <svg class="icon-arrow" width="25" height="25">
                        <use xlink:href="#arrow-right" />
                    </svg>
                </div>
            </div>
        </div>
    </div>
    <div class="swiper-pagination text-center position-absolute"></div>
</section>

<section id="collections" class="position-relative padding-large">
    <div class="container-fluid">
        <div class="row">
            <div class="swiper collection-swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide overflow-hidden">
                        <div class="product-card">
                            <div class="card-detail d-flex justify-content-between align-items-baseline pt-3">
                                <h3 class="card-title text-uppercase">
                                    <a href="shop.html">CRICOVA</a>
                                </h3>
                            </div>
                            <div class="image-overlay position-relative">
                                <div class="product-image">
                                    <img src="images/product-item5.jpg" alt="product-item" class="product-image img-fluid">
                                    <div class="text-box box-slide position-absolute">
                                        <div class="text-content p-5 bg-light">

                                            <p>Pe bună dreptate, denumită „Perla vinificaţiei moldave” – “Cricova”, reprezintă un Complex Subteran unic, care s-a remarcat în întreaga lume pentru labirinturile sale imense şi pentru vinurile sale excelente. Istoria Combinatului de Vinuri “Cricova” începe în anul 1952....</p>
                                            <a href="#" class="btn btn-normal mt-3">Afla mai mult</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide overflow-hidden">
                        <div class="product-card">
                            <div class="card-detail d-flex justify-content-between align-items-baseline pt-3">
                                <h3 class="card-title text-uppercase">
                                    <a href="shop.html">Purcari</a>
                                </h3>
                            </div>
                            <div class="image-overlay position-relative">
                                <div class="product-image">
                                    <img src="images/product-item6.jpg" alt="product-item" class="product-image img-fluid">

                                    <div class="text-box box-slide position-absolute">
                                        <div class="text-content p-5 bg-light">

                                            <p>La sfârșitul secolului al XII-lea, viticultura apare ca îndeletnicire economică de bază, aflată sub protecția statului în Valahia și Moldova, cnezate pe teritoriul vechii Dacii....</p>

                                            <a href="#" class="btn btn-normal mt-3">Afla mai mult</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- product-image -->
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide overflow-hidden">
                        <div class="product-card">
                            <div class="card-detail d-flex justify-content-between align-items-baseline pt-3">
                                <h3 class="card-title text-uppercase">
                                    <a href="shop.html">Kvint</a>
                                </h3>
                            </div>
                            <div class="image-overlay position-relative">
                                <div class="product-image">
                                    <img src="images/product-item7.jpg" alt="product-item" class="product-image img-fluid">

                                    <div class="text-box box-slide position-absolute">
                                        <div class="text-content p-5 bg-light">

                                            <p>Istoria KVINT incepe din anul 1897, când primul depozit de rectificare a fost construit in Tiraspol pe strada Vokzalnaya. În acel moment a inceput productia de vodka de 40% din vinuri de struguri...</p>

                                            <a href="#" class="btn btn-normal mt-3">Afla mai mult</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- product-image -->
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide overflow-hidden">
                        <div class="product-card">
                            <div class="card-detail d-flex justify-content-between align-items-baseline pt-3">
                                <h3 class="card-title text-uppercase">
                                    <a href="shop.html">Vinaria de Comrant </a>
                                </h3>
                            </div>
                            <div class="image-overlay position-relative">
                                <div class="product-image">
                                    <img src="images/product-item8.jpg" alt="product-item" class="product-image img-fluid">

                                    <div class="text-box box-slide position-absolute">
                                        <div class="text-content p-5 bg-light">

                                            <p>Vinuri de Comrat – e cea mai veche fabrică de vinuri situată în partea de sud a Moldovei. De peste 120 de ani, vinificatorii din Comrat păstrează și transmit din generație în generație tradiția clasică de fabricare a vinurilor unice din sudul Moldovei... .</p>

                                            <a href="#" class="btn btn-normal mt-3">Afla mai mult</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- product-image -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="swiper-pagination position-absolute text-center"></div>
</section>

<section class="subscribe">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-8">
                <div class="subscribe-content padding-large">
                    <div class="subscribe-header">
                        <h2 class="display-4">Obțineți oferte și reduceri abonându-vă la noi</h2>
                    </div>
                    <form id="form">
                        <input type="text" name="email" placeholder="Introduceți adresa dvs. de e-mail" class="w-100 bg-light border-0 ps-5 fst-italic">
                        <button class="btn btn-full btn-black text-uppercase">Aboneazate Acum!</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="latest-blog">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="display-header d-flex flex-wrap justify-content-between pb-3">
                    <h2 class="display-2 text-dark text-uppercase">Ultimele Noutăți</h2>
                    <a href="blog.html" class="btn btn-medium btn-arrow btn-normal position-relative">
                        <span class="text-uppercase">Vezi toate articolele</span>
                        <svg class="arrow-right position-absolute" width="18" height="20">
                            <use xlink:href="#arrow-right"></use>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        <div class="row g-3 post-grid">
            <div class="col-lg-4 col-md-6 col-sm-12 mb-5">
                <div class="card-item">
                    <div class="card border-0 bg-transparent">
                        <div class="card-image">
                            <img src="images/post-item1.jpg" alt="" class="post-image img-fluid">
                        </div>
                    </div>
                    <div class="card-body p-0 mt-4">
                        <h3 class="card-title text-uppercase">
                            <a href="single-post.html">Best looking interior things for bedrooms</a>
                        </h3>
                        <p>Enim ut nunc, ultrices mauris felis viverra amet. Ante sed dictum nisi suscipit ac ut faucibus pretium interdum.</p>
                        <a href="single-post.html" class="btn btn-normal text-uppercase p-0"><em>Read More</em></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 mb-5">
                <div class="card-item">
                    <div class="card border-0">
                        <div class="card-image">
                            <img src="images/post-item2.jpg" alt="" class="post-image img-fluid">
                        </div>
                    </div>
                    <div class="card-body p-0 mt-4">
                        <h3 class="card-title text-uppercase">
                            <a href="single-post.html">Trending modern furniture design in 2022</a>
                        </h3>
                        <p>Enim ut nunc, ultrices mauris felis viverra amet. Ante sed dictum nisi suscipit ac ut faucibus pretium interdum.</p>
                        <a href="single-post.html" class="btn btn-normal text-uppercase p-0"><em>Read More</em></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 mb-5">
                <div class="card-item">
                    <div class="card border-0">
                        <div class="card-image">
                            <img src="images/post-item3.jpg" alt="" class="post-image img-fluid">
                        </div>
                    </div>
                    <div class="card-body p-0 mt-4">
                        <h3 class="card-title text-uppercase">
                            <a href="single-post.html">Why is simple firniture design looks fabulous</a>
                        </h3>
                        <p>Enim ut nunc, ultrices mauris felis viverra amet. Ante sed dictum nisi suscipit ac ut faucibus pretium interdum.</p>
                        <a href="single-post.html" class="btn btn-normal text-uppercase p-0"><em>Read More</em></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
