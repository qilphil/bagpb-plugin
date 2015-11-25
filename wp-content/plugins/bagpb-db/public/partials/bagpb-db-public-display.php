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
        $return_html = "         
        <table id='bagdbTable' class='datatable hover'></table>
        <script>           var contactData = {$piDataEsc };        </script>     
        ";
        
        $fields = array("id", "Name", "Name2", "Kontakt", "Kontakt2", "Adresse", "PLZ", "Ort", "Telefon", "Telefon2", "Fax", "Fax2", "Email", "Email2", "Kommentar", "Website");
        $fieldNames = array("id" => "Nummer", "Name2" =>"Voller Name","Kontakt2" => "Zweiter Kontakt", "Telefon2" => "alt. Telefon", "Fax2" => "alt. Fax", "Email2" => "alt. Email");
        
        foreach ($fields as $field) {
            $name = $fieldNames[$field] ? $fieldNames[$field] : $field;
            $fields_html[] = "        
            <div class='bagDataRow' id='dr{$field}' >
                <div class='bagDataName bd{$field}' id='bdLabel{$field}'><label>{$name}</label></div>
                <div class='bagDataValue bd{$field}' id='bdValue{$field}'></div>
        </div>";
        }
        $return_html.="<div class='dataSingleDisplay hidden' id='bagSingle'>\n" . join("\n", $fields_html) . "\n</div>";

        return $return_html;
    }

}
?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->
