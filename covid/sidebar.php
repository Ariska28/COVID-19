<nav aria-label="navigation" class="b-header-nav js-navigation">
    <?php wp_nav_menu() ?>
    <div class="btn js-btn">
        <button aria-label="button" class="btn-base">
            Help
        </button>
        <div style="display: none;">
            <div class="box-modal" id="exampleModal">
                <div class="box-modal_close arcticmodal-close">Close</div>
                <?php echo do_shortcode('[contact-form-7 id="202" title="Контактная форма 1"]'); ?>
            </div>
        </div>
    </div>
</nav>