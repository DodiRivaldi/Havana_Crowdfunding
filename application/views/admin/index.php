<?php
//Loading header
$data['title'] = 'Login';
$data['javascript'] = 'app.js';
$this->load->view('shared/header', $data);
?>


<?php $this->load->view('shared/menu'); ?>

<div class="columns" >
    <div class="medium-6 medium-centered large-6 large-centered small-6 small-centered">
        <h1>Admin Index</h1> 
    </div>
    <div class="medium-2 small-2 large-2">

        <ul class="vertical menu" data-accordion-menu>
            <li class="sidebar">
                <a href="#">Item 1</a>
                <ul class="menu vertical nested">
                    <li class="sidebar"><a href="#" >Item 1A</a></li>
                    <li class="sidebar"><a href="#">Item 1B</a></li>
                </ul>
            </li>
            <li class="sidebar"><a href="#">Item 2</a></li>
        </ul>
    </div>
</div>



<?php
//Loading footer
$this->load->view('shared/footer');
?>