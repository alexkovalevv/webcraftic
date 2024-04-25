<!-- Footer content here -->
<footer class="webcraftic__footer">
    <div class="webcraftic__footer-inner webcraftic__container">
        <div class="webcraftic__footer-left">
            <div class="webcraftic__footer-logo webcraftic__colored">webcraftic.</div>
            <div class="webcraftic__footer-block">
                <img class="webcraftic__footer-photo" src="<?php echo get_template_directory_uri() ?>/assets/images/footer-image.png" />
                <div class="webcraftic__footer-info">
                    <div class="webcraftic__footer-text">
                        At Webcraftic, we turn startup visions into vibrant realities. Your big idea, our expert execution -
                        <span class="webcraftic__colored">together, we create success.</span>
                    </div>
                    <div class="webcraftic__footer-position">Ekaterina, CEO of webcrafic</div>
                </div>
            </div>
        </div>
        <div class="webcraftic__footer-right">
            <div class="webcraftic__footer-phone">+7-939-412-91-21</div>
            <div class="webcraftic__footer-links">
                <a class="webcraftic__footer-link">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/linkedin.png" alt="linkedin" />
                </a>
                <a class="webcraftic__footer-link">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/telegram.png" alt="telegram" />
                </a>
            </div>
        </div>
    </div>
</footer>
</div>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script type="text/javascript">
    $(window).on('scroll', function () {
        $('.webcraftic__services-block').each(function () {
            if ($(this).offset().top < $(window).scrollTop() + $(window).height()) {
                $(this).addClass('come-in')
            }
        })
        $('.webcraftic__steps-text').each(function () {
            if ($(this).offset().top < $(window).scrollTop() + $(window).height()) {
                $(this).addClass('visible')
            }
        })
        const swiper = new Swiper('.swiper', {
            loop: true,
            navigation: {
                nextEl: '.webcraftic__reviews-button--next',
                prevEl: '.webcraftic__reviews-button--prev',
            },
            scrollbar: {
                el: '.swiper-scrollbar',
            }
        })

        document.querySelectorAll('.scroll-link').forEach(link => {
            link.addEventListener('click', function (e) {
                e.preventDefault()

                const targetId = this.getAttribute('data-target')
                const targetElement = document.getElementById(targetId)
                targetElement.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                })
            })
        })

        document.querySelectorAll('.scroll-to-form').forEach(link => {
            link.addEventListener('click', function (e) {
                e.preventDefault()

                const targetElement = document.getElementById('contacts')
                targetElement.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                })
            })
        })
    })
</script>
<?php wp_footer(); ?>
</div>
</body>
</html>
