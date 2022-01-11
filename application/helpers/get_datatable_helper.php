<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Get data from model datatable serverside for CodeIgniter 3.x
 *
 * @package     CodeIgniter
 * @category    Helper


 */
function getDataForDataTable($model,$jenis) {
    $CI = get_instance();
    $CI->load->model($model);
    $CI->load->helper('encryption_id');

    //META
    if($jenis==NULL){
        $total = $CI->$model->countFiltered();
    }else{
        $total = $CI->$model->countFiltered($jenis);
    }
    //$total = $CI->$model->countFiltered();
    $perpage = intval($CI->input->post('pagination[perpage]'));
    $pages = $perpage > 0 ? intval($total / $perpage): 0;
    $page = $CI->input->post('pagination[page]') < 1 ? $page = 1 : $pages;
    $field = $CI->input->post('sort[field]') == '' ? $CI->input->post('pagination[field]') : $CI->input->post('sort[field]');
    $sort = $CI->input->post('sort[sort]') == '' ? $CI->input->post('pagination[sort]') : $CI->input->post('sort[sort]');

    $data = array();
    $no = ($CI->input->post('pagination[perpage]') * (($CI->input->post('pagination[page]') - 1)));
    $end = $no + $perpage;
    if($jenis==NULL){
        $fromModel = $CI->$model->getDatatables();
    }else{
        $fromModel = $CI->$model->getDatatables($jenis);
    }
    

    $pages = intval($CI->input->post('pagination[pages]'));
    $page = intval($CI->input->post('pagination[page]'));

    $meta = array(
        "page" => $page,
        "pages" => $pages,
        "perpage" => $perpage,
        "total" => $total,
        "sort" => $sort,
        "field" => $field
    );

    $output = array(
        "meta" => $meta,
        "no" => $no,
        "data" => $fromModel,
    );

    return $output;
}
?>