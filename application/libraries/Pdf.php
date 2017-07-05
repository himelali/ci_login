<?php

    defined('BASEPATH') OR exit('No direct script access allowed');
    require_once(VENDORPATH . 'autoload.php');

    class Pdf extends TCPDF {
        public function __construct() {
            parent::__construct(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, TRUE, 'UTF-8', FALSE);
        }
    }