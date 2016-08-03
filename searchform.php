<?php
/* Default Search Page
================================ */
?><form role="search"
          method="get"
          class="search-form siteSearch"
          action="<?php echo home_url( '/' ); ?>">

  <input type="search" class="search-field siteSearch_input siteSearch_field"
            placeholder="<?php echo esc_attr_x( 'Write here ...', 'placeholder' ) ?>"
            value="<?php echo get_search_query() ?>" name="s"
            title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
  <input type="submit"
            class="search-submit siteSearch_input siteSearch_button"
            value="<?php echo esc_attr_x( 'Search', 'submit button' ) ?>" />
</form>
