    <!-- Footer -->
    <footer class="site-footer">
        <div class="site-footer__content">
            <div class="footer-logo">
                <p class="footer-logo__text">Barbershop Trueman</p>
                <div class="footer-logo__image">
                    <img src="<?php bloginfo("stylesheet_directory"); ?>/img/logo.svg" alt="Trueman Barbershop Logo" />
                </div>
            </div>

            <div class="footer-block">
                <div class="footer-info">
                    <h3 class="footer-info__title">Контакты</h3>
                    <a class="footer-info__tel" href="tel:<?php the_field("phone-link", 5); ?>"><?php the_field("phone-view", 5); ?></a>
                    <p class="footer-info__text"><?php the_field("address-footer", 5); ?><br>ООО «Труман групп»</p>
                </div>

                <div class="footer-info">
                    <h3 class="footer-info__title">Часы работы</h3>
                    <p class="footer-info__text"><?php the_field("work-time", 5); ?></p>
                </div>
            </div>

            <div class="footer-block footer-block--right">
                <div class="social">
                    <h3 class="social__title">Мы в соцсетях</h3>
                    <div class="social__content">
                        <a class="social-icon icon-instagram" href="<?php the_field("instagram-link", 5); ?>">Instagram</a>
                        <a class="social-icon icon-facebook" href="<?php the_field("facebook-link", 5); ?>">Facebook</a>
                        <a class="social-icon icon-vkontakte" href="<?php the_field("vkontakte-link", 5); ?>">Vkontakte</a>
                    </div>
                </div>

                <div class="copyrights">
                    <p>© Барбершоп Trueman</p>
                    <p>Сделано студией <a href="http://agonstudio.ru/">Агонь</a></p>
                </div>
            </div>
        </div>
    </footer>

    <script type="text/javascript" src="//w79413.yclients.com/widgetJS" charset="UTF-8"></script>
    <script src="<?php bloginfo("stylesheet_directory"); ?>/app.js"></script>

    <?php wp_footer(); ?>
</body>
</html>