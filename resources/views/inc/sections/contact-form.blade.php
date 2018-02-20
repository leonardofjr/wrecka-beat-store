<div class="container py-5">
    <a href="#bottom"></a>
    <div class="row">
    <div class="text-center col-lg-12"></div>
    </div>
    <h2 class="text-center px-3 py-2">Get in Touch <br> <strong>Contact Us</strong>
    <p class="lead">I Will Get Back To You ASAP</p>
    <div class="col-lg-12">
        <form method="POST" action="/contact" class="mr-auto ml-auto py-4 contact-form">
            {{ csrf_field() }} 
            <div class="form-group">
                <input class="form-control" type="text" name="contactFormName" placeholder="Name"/>
            </div>
             <div class="flash-message-contact-form-name alert alert-info d-none">
                 <span></span>
            </div>  
            <div class="form-group">
                <input class="form-control" type="text" name="contactFormEmail" placeholder="Email Address"/>
            </div>
            <div class="flash-message-contact-form-email alert alert-info d-none">
                <span></span>
            </div>  
            <div class="form-group">
                <textarea class="form-control" type="text" name="contactFormMessage" placeholder="Leave Your Message"></textarea>
            </div>
            <div class="flash-message-contact-form-message alert alert-info d-none">
                <span></span>
            </div> 
            <button class="btn btn-primary" type="submit">Send It Now</button>
            <div class="flash-message-contact-form-success alert alert-info d-none">
                <span>Your inquiry has been submitted</span>
            </div> 
        </form>
    </div>
    </h2>
</div>