<section id="contact" class="module module-no-padding">
    <div class="container">

        <div class="row">
            <div class="col-sm-6 offset-sm-3 contact-box">
                <div class="module-header">
                    <h2 class="module-title">Contact Me</h2>
                    <div class="module-line"></div>
                </div>

                <form method="POST" action="{{ route('contact.store') }}" role="form">
                    @csrf
                    @honeypot
                    
                    <div class="form-group wow fadeInUp">
                        <label class="sr-only" for="name">Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Name" required>
                    </div>

                    <div class="form-group wow fadeInUp" data-wow-delay=".1s">
                        <label class="sr-only" for="email">Email address</label>
                        <input type="email" name="email" class="form-control" placeholder="E-mail" required>
                    </div>

                    <div class="form-group wow fadeInUp" data-wow-delay=".2s">
                        <textarea name="message" class="form-control" rows="7" placeholder="Your message" required></textarea>
                    </div>

                    <div class="form-group wow fadeInUp" data-wow-delay=".3s">
                        <button class="btn btn-primary btn-responsive">
                            <span class="fal fa-fw fa-paper-plane"></span> Send It!
                        </button>
                    </div>
                </form>
            </div>
        </div>

    </div>
</section>