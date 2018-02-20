<section class="newsletter-container py-5">

        <div class="content container">
            <div class="row">
                <div class="col-lg-6">
                    <h3 class="text-center">Subscribe to Our Newsletter and Receive 2 Free Beats!</h3>
                </div>

                
                <div class="col-lg-6">
                    <form action="/newsletter" method="POST" class="newsletter-form">
                        {{ csrf_field() }} 
                            <div class="row">
                                <div class="form-group col-lg-9">
                                    <input class="form-control"  type="text" name="newsletterFormEmail" placeholder="Email">
                                    <div class="flash-message-newsletter-form-email alert alert-info d-none">
                                        <span></span>
                                    </div>  
                                </div>
                                <div class="col-lg-3">
                                    <button class="btn btn-primary" type="submit">Sign Up</button>
                                </div>
                            </div>
                        <div class="flash-message-newsletter-form-success alert alert-info d-none">
                            <span>Thank you for subscribing to our newsletter</span>
                        </div> 
                    </form>
                </div>
            </div>
        </div>
</section>

