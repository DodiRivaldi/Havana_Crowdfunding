
<?php
//Loading header
$data['title'] = 'Login';
$data['javascript'] = 'app.js';
$this->load->view('shared/header', $data);
?>


<?php $this->load->view('shared/menu'); ?>
<br>
<div class="row expanded  ">
    <div class="">

        <div class="medium-7 large-6 columns" >
            <h1>Youth Starter</h1>
            <p class="subheader">Youth Starter is a CrowdFunding platform for youth initiated projects.</p>
            <?php if ($this->session->userdata('role') != NULL && $this->session->userdata('role') == 'project') { ?>
                <a href="<?= base_url() ?>Project"><button class="button ">Manage Project</button></a>
            <?php } else { ?>
                <a href="<?= base_url() ?>Project"><button class="button ">Fund your Project</button></a>
            <?php } ?>

            <?php if ($this->session->userdata('role') != NULL && $this->session->userdata('role') == 'funder') { ?>
                <a href="<?= base_url() ?>Funder/"><button class="button primary" >Manage Profile</button></a>
            <?php } else { ?>
                <a href="<?= base_url() ?>Funder/"><button class="button primary" >Become a Funder</button></a>
            <?php } ?>
        </div>

        <div data-equalizer style="padding-bottom: 50px;">
            <div class="show-for-large large-3 columns"  data-equalizer-watch>

                <img src="<?= base_url() ?>assets/images/Crowdfunding-7601.gif" alt="picture of space">            


            </div>

            <div class="medium-5 large-3 columns"  data-equalizer-watch>
                <div class="callout secondary">   
                    <h3>Some Stats</h3> 
                    <ul>
                        <li>
                            Menu? Management? Advert?
                        </li>
                        <li>
                            <p>20 Projects funded</p> 
                        </li>
                        <li>
                            <p>50 Funders</p> 
                        </li>
                        <li>
                            <p>N$ 25 000 raised</p> 
                        </li>
                    </ul>

                </div>
            </div>
        </div>

    </div>
    <br>
    <br>
    <br>

    <br>

    <div class=" column expanded large-12 medium-12 small-12">
        <h2 class="text-center">Youth Projects</h2>
    </div>

    <div class="row">
        <div class=" small-up-1 medium-up-2 large-up-3 column " >   

            <div class="column" >
                <div class="callout">
                    <h3><b>Test</b></h3>
                    <p><a href="<?= base_url() ?>Funder/fund_Project/"><img class="thumbnail" src="<?= base_url() ?>assets/images/Crowdfunding-7601.gif" height="500" width="500" alt="Test"></a></p>
                    <p class="lead"> <br><small>N$ 1000.00</small></p>
                    <p class="subheader">End date is 25 January 2017.</p>
                    <p class="subheader">Remaining Amount: N$ 200.00</p>
                    <p><a href="<?= base_url() ?>index.php/Project/get_project/"><button class="button">More Info</button></a> &nbsp; 
                        <a href="<?= base_url() ?>Funder/fund_Project/"><button class="button success">Fund Us</button></a></p>
                    <p></p>

                    <div class="progress" role="progressbar" tabindex="0" aria-valuenow="800" aria-valuemin="0" aria-valuetext="N$ 200.00" aria-valuemax="1000">
                        <div class="progress-meter" style="width: 70%"></div> 
                    </div>
                </div>
            </div>

        </div>

    </div>
    <ul class="pagination text-center" role="navigation" aria-label="Pagination">
        <li class="pagination-previous disabled">Previous</li>
        <li class="current"><span class="show-for-sr">You're on page</span> 1</li>
        <li><a href="#" aria-label="Page 2">2</a></li>
        <li><a href="#" aria-label="Page 3">3</a></li>
        <li><a href="#" aria-label="Page 4">4</a></li>
        <li class="ellipsis"></li>
        <li><a href="#" aria-label="Page 12">12</a></li>
        <li><a href="#" aria-label="Page 13">13</a></li>
        <li class="pagination-next"><a href="#" aria-label="Next page">Next</a></li>
    </ul>
</div>

<?php
//Loading footer
$this->load->view('shared/footer');
?>

