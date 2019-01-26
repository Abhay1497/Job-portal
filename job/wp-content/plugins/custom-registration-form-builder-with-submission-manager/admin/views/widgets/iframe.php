<?php
$form = new RM_PFBC_Form("add-widget");
$form->configure(array(
    "prevent" => array("bootstrap", "jQuery"),
    "action" => ""
));
?>

<div class="rmagic">

    <!--Dialogue Box Starts-->
    <div class="rmcontent">
        <?php
        if (isset($data->model->field_id)) 
            $form->addElement(new Element_Hidden("field_id", $data->model->field_id));
       
        $form->addElement(new Element_HTML('<div class="rmheader">' . RM_UI_Strings::get("TITLE_IF_WIDGET_PAGE") . '</div>'));
        $form->addElement(new Element_Hidden("field_type",$data->selected_field));
        $form->addElement(new Element_Hidden("form_id", $data->form_id));
        $form->addElement(new Element_HTML('<div>'));
        $form->addElement(new Element_Textbox("<b>" . RM_UI_Strings::get('LABEL_LABEL') . "</b>", "field_label", array("class" => "rm_static_field rm_required", "required" => "1", "value" => $data->model->field_label, "longDesc"=>RM_UI_Strings::get('HELP_ADD_WIDGET_LABEL'))));
        $form->addElement(new Element_HTML('</div>'));
        
        $form->addElement(new Element_Url(RM_UI_Strings::get('LABEL_URL'), "field_value", array("required"=>1, "value" => is_array($data->model->get_field_value()) ? null : $data->model->get_field_value(), "longDesc"=>RM_UI_Strings::get('HELP_IFRAME_URL'))));
        $form->addElement(new Element_Textbox(RM_UI_Strings::get('IFRAME_LABEL_WIDTH'), "if_width", array("id" => "rm_if_width", "value" => $data->model->field_options->if_width, "longDesc" => RM_UI_Strings::get('HELP_FIELD_IF_WIDTH'))));
        $form->addElement(new Element_Textbox(RM_UI_Strings::get('IFRAME_LABEL_HEIGHT'), "if_height", array("id" => "rm_if_height", "value" => $data->model->field_options->if_height, "longDesc" => RM_UI_Strings::get('HELP_FIELD_IF_HEIGHT'))));

        $form->addElement(new Element_Textbox("<b>" . RM_UI_Strings::get('LABEL_CSS_CLASS') . "</b>", "field_css_class", array("id" => "rm_field_class", "class" => "rm_static_field rm_required", "value" => $data->model->field_options->field_css_class, "longDesc"=>RM_UI_Strings::get('HELP_ADD_FIELD_CSS_CLASS'))));
        
        
        //Button Area
        $form->addElement(new Element_HTMLL('&#8592; &nbsp; '.__('Cancel','custom-registration-form-builder-with-submission-manager'), '?page=rm_field_manage&rm_form_id='.$data->form_id, array('class' => 'cancel')));

        $save_buttton_label = RM_UI_Strings::get('LABEL_FIELD_SAVE');

        if (isset($data->model->field_id))
            $save_buttton_label = RM_UI_Strings::get('LABEL_SAVE');

        $form->addElement(new Element_Button($save_buttton_label, "submit", array("id" => "rm_submit_btn",  "onClick" => "jQuery.prevent_field_add(event, '".RM_UI_Strings::get('MSG_REQUIRED_FIELD') ."')", "class" => "rm_btn", "name" => "submit")));


        $form->render();
        ?>
    </div>
</div>

<script>
    function width_changed(el){
        jQuery("#rm_player_length").html(el.value);
    }

</script>    