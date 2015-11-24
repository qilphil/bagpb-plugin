<?php

/**
 * Provide a public-facing view for the plugin
 *
 * This file is used to markup the public-facing aspects of the plugin.
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    Plugin_Name
 * @subpackage Plugin_Name/public/partials
 */
class bagdbTemplate {

    public function plugout($pi) {
        $piDataEsc = json_encode($pi->kdbData);
        ?>
        <table id="bagdbTable" class="datatable"></table>
        <script>
            var contactData = <?php echo $piDataEsc ?>;

        </script>
        <div class="dataSingleDisplay hidden" id="bagSingle">
            <div class="bagDataRow">
                <span class="bagDataName bdId" id="bdLabelId"><label>Id</label></span>
                <span class="bagDataValue bdId" id="bdValueId"></span>
            </div>
        </div>
        <?php
    }

}
?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->
