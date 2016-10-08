<?php
//Loading header
$data['title'] = 'Login';
$data['javascript'] = 'app.js';
$this->load->view('shared/header', $data);
$user = $this->ion_auth->user()->row();
?>


<?php $this->load->view('shared/menu'); ?>

<div class="columns" >
    <div class="medium-8 medium-centered large-8 large-centered small-8 small-centered">
        <h1>Project Create</h1> 
        <?= form_open_multipart(base_url(). 'project/create')?>
        <?= form_hidden('userId', $user['id'])?>
        <?= form_fieldset("Project Details", array("class" => "fieldset"))?>
        <?= form_label('Project Title','title')?>
        <?= form_input('title', '', array("id" => "title", "required" => "required"))?>
        <?= form_label('Project Description','description')?>
        <?= form_textarea('description', '', array("id" => "description", "rows" => 4 , "cols" => 4))?>
        <?= form_label('Physical Address','address')?>
        <?= form_textarea('address', '', array("id" => "address", "rows" => 4, "cols" => 4))?>
        <?=form_fieldset_close()?>
        <?= form_submit('submit', 'Create Project', array("class" => "button")) ?>
        <?= form_close()?>
    </div>
</div>

<?php
//Loading footer
$this->load->view('shared/footer');
?>