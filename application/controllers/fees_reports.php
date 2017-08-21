<?php
/**
 * Created by PhpStorm.
 * User: Akshat
 * Date: 8/9/2017
 * Time: 12:39 AM
 */
class Fees_reports extends MY_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('get_header_info','ghi');
        $username = $this->ghi->get_admin();
        $this->load->view('private/fees/header',['username'=>$username]);
        $this->load->view('private/fees/footer');
        $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
    }

    public function balance_fees_report(){
        $this->load->view('private/fees/fees_reports/balance_fees_report');
    }
    public function fees_receipt_register(){
        $this->load->view('private/fees/fees_reports/fees_receipt_register');
    }
    public function fees_head_summary(){}
    public function fees_monthly_summary(){}
    public function fees_concc_settingsI(){}
    public function defaulter_list(){}
    public function yearly_receivable_report(){}
    public function receipt_book(){}
    public function fees_day_book(){}
    public function head_wise_collection(){}
    public function fees_group_ledger(){}
    public function fees_structure(){}
    public function fees_summary_date_wise(){}
    public function fees_category_concc_wise(){}
    public function fees_head_wise_concc_report(){}
    public function concession_register(){}
}