<a id="bottom"></a>
<div class="container py-5">
  <div class="row">
    <div class="text-center col-lg-4">
      <div><a href="tel://012 345 6789"><i class="fa fa-5x fa-phone"></i>
          <p>Hire Me</p></a></div>
      <div><i class="fa fa-5x fa-map-marker"></i>
        <p>Address</p>
      </div>
    </div>
    <div class="col-lg-8">
      <h2 class="text-center px-3 py-2">Get in Touch</h2>
      <p class="text-center px-3 py-2">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Exercitationem quibusdam ipsa libero voluptates pariatur quae repellendus vitae, eaque voluptatum doloribus cum magnam modi dolores excepturi minus iure enim soluta molestias.</p>
      @if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
      <form method="POST" action="/contact" class="mr-auto ml-auto py-4 contact-form">
       {{ csrf_field() }} <div class="form-group">
          <input class="form-control" type="text" name="contact-form-name" placeholder="Name"/>
        </div>
        <div class="form-group">
          <input class="form-control" type="text" name="contact-form-email" placeholder="Email Address"/>
        </div>
        <div class="form-group">
          <textarea class="form-control" type="text" name="contact-form-message" placeholder="Leave Your Message"></textarea>
        </div>
        <button class="btn btn-primary" type="submit">Send It Now</button>
      </form>
    </div>
  </div>
</div>
<div class="site-info text-center py-4"><small>Copyright &copy; 2018</small></div>