<footer class="b-footer">
    <div class="b-footer-wrapper">
        <div class="b-footer__button js-map">
            <button aria-label="button" class="btn-base">
                Map
            </button>

            <div style="display: none;">
                <div class="box-modal" id="exampleModal1">
                    <div class="box-modal_close arcticmodal-close">Close</div>
                    <p>Coronavirus Distribution Schedule<br>
                        The darker the higher the incidence
                    </p>
                    <?php echo do_shortcode('[wd_map]'); ?>
                </div>
            </div>
        </div>

        <address class="b-footer__description">
            Contacts: Arina Karmanova, phone: +375256552274, ariska.karmanova@gmail.com
        </address>
    </div>

</footer>
<?php wp_footer(); ?>
</body>

</html>