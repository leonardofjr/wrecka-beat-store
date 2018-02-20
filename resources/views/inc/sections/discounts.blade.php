<a id="discounts"></a>
<div class="img-container">
    <picture>
        <source media="(max-width: 576px)" srcset="./assets/png/discount-bg-mobile.png">
        <img style="width:100%" src="./assets/png/discount-bg.png" alt="">
    </picture>
    <div class="content container">
        <h2 class="text-center" style="color: white">GET 15% OFF ENGINE DIAGNOSTIC</h2>
        <form action="/newsletter" method="POST" class="newsletter-form">
        {{ csrf_field() }} 
            <div class="row">
                <div class="form-group col-lg-5">
                    <input class="form-control" type="text" name="newsletterFormName" placeholder="Name">
                    <div class="flash-message-newsletter-form-name alert alert-info d-none">
                        <span></span>
                    </div>  
                </div>
                <div class="form-group col-lg-5">
                    <input class="form-control"  type="text" name="newsletterFormEmail" placeholder="Email">
                    <div class="flash-message-newsletter-form-email alert alert-info d-none">
                        <span></span>
                    </div>  
                </div>
                <div class="col-lg-2">
                    <button class="btn btn-primary" type="submit">Subscribe</button>
                </div>
            </div>
        <div class="flash-message-newsletter-form-success alert alert-info d-none">
            <span>Thank you for subscribing to our newsletter</span>
        </div> 
        </form>
    </div>
</div>