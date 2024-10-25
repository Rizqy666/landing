<div class="container section-title" data-aos="fade-up">
    <span class="description-title">Contact</span>
    <h2>Contact</h2>
    <p>If you have any questions, feedback, or inquiries, feel free to reach out to us. We're here to assist you!</p>
</div>

<div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="info-wrap" data-aos="fade-up" data-aos-delay="200">
        <div class="row gy-5">

            <div class="col-lg-4">
                <div class="info-item d-flex align-items-center">
                    <i class="bi bi-geo-alt flex-shrink-0"></i>
                    <div>
                        <h3>Address</h3>
                        <p>Jl. Raya Tengah No. 4 Pasar Rebo - Jakarta Timur 13760 - Indonesia</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="info-item d-flex align-items-center">
                    <i class="bi bi-telephone flex-shrink-0"></i>
                    <div>
                        <h3>Call Us</h3>
                        <p>+62 21 8778 3422</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="info-item d-flex align-items-center">
                    <i class="bi bi-envelope flex-shrink-0"></i>
                    <div>
                        <h3>Email Us</h3>
                        <p>info@pakarti.com</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <form action="<?php echo e(route('contact.submit')); ?>" method="post" class="php-email-form" data-aos="fade-up"
        data-aos-delay="300">
        <?php echo csrf_field(); ?>
        <div class="row gy-4">
            <div class="col-md-6">
                <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
            </div>
            <div class="col-md-6">
                <input type="email" class="form-control" name="email" placeholder="Your Email" required="">
            </div>
            <div class="col-md-12">
                <input type="text" class="form-control" name="subject" placeholder="Subject" required="">
            </div>
            <div class="col-md-12">
                <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
            </div>
            <div class="col-md-12 text-center">
                <div class="loading" style="display: none;">Loading</div>
                <div class="error-message" style="display: none;"></div>
                <div class="sent-message" style="display: none;">Your message has been sent. Thank you!</div>
                <button type="submit">Send Message</button>
            </div>
        </div>
    </form>

</div>
<?php /**PATH C:\laragon\www\webpakrti\resources\views/components/contact.blade.php ENDPATH**/ ?>