<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Drawing Data Metronic v5 datatable CodeIgniter 3.x
 *
 * @package     CodeIgniter
 * @category    library

 */
class M_datatable {
    function __construct($params = array()) {
    }

    function initilize($config){
        if (count($config['title']) == count($config['field']) && count($config['field']) == count($config['sortable']) && count($config['sortable']) == count($config['width']) && count($config['width']) == count($config['template'])){
            return TRUE;
        }else{
            return FALSE;
        }
    }

    function setColumn($config){
        if ($this->initilize($config)){
            $columns = '';
            for ($i=0; $i < count($config['title']); $i++) {
                $columns = $columns.'{';
                if ($config['field'][$i]) $columns = $columns.'field : "'.$config['field'][$i].'",';
                if ($config['title'][$i]) $columns = $columns.'title : "'.$config['title'][$i].'",';

                if ($config['sortable'][$i]) { $columns = $columns.'sortable : !0,'; } else { $columns = $columns.'sortable : !1,'; }
                if ($config['width'][$i]) $columns = $columns.'width : '.$config['width'][$i].',';
                if ($config['template'][$i]) $columns = $columns.'template : '.$config['template'][$i].',';
                $columns = $columns.'overflow : "visible",';
                $columns = $columns.'},';
            }
            return $columns;
        }else{
            $columns = array('error' => "error : Kolom 'CONFIG' Table tidak cocok, pastikan jumlah kolom setiap komponen CONFIG sama");
            return $columns;
        }
    }

    function setFilter($filter){
        if(isset($filter[0]['nama_filter']) && isset($filter[0]['id_filter']) && isset($filter[0]['option_filter'][0]['id']) && isset($filter[0]['option_filter'][0]['attr'])){
            return $filter;
        }
        else if (!$filter){
            return FALSE;
        }
        else{
            return 'Filter not set correctly';
        }
    }

    function generateScript($data){
        $script = ' <script type="text/javascript">
                document.addEventListener("DOMContentLoaded", (event) => { ';
        $DataTable = (object) $data;
        if (isset($DataTable->columns) && isset($DataTable->search) && isset($DataTable->filter) && isset($DataTable->server_side) && isset($DataTable->perpage) && isset($DataTable->json_url) && isset($DataTable->id_table)) {
                if (!is_array($DataTable->columns)) {
                    $DataTable->id_table = str_replace(" ", "_", preg_replace('/[^a-zA-Z0-9\s+\']/', '', trim($DataTable->id_table)));
                    // set mode get data
                    $setMode = '';
                    if ($DataTable->server_side) {
                        $setMode = 'serverPaging: !0,
                                    serverFiltering: !0,
                                    serverSorting: !0,';
                    } else {
                        $setMode = 'serverPaging: !1,
                                    serverFiltering: !1,
                                    serverSorting: !1,';
                    }

                    // set pagination view
                    if ($DataTable->perpage){
                        $DataTable->perpage = $DataTable->perpage;
                    } else {
                        $DataTable->perpage = 10;
                    }

                    // begin div on top table
                    $s = ' <div class="form-group m-form__group row align-items-center">';

                    // set serching box
                    $id_search = $DataTable->server_side ? $DataTable->id_table : '';
                    if ($DataTable->search) {
                            $s .= '        <div class="col-md-2">';
                            $s .= '            <div class="m-input-icon m-input-icon--left">';
                            $s .= '                <input type="hidden" id="generalSearch">';
                            $s .= '                <input type="text" class="form-control m-input" placeholder="Search..." id="'.$DataTable->id_table.'generalSearch">';
                            $s .= '                <span class="m-input-icon__icon m-input-icon__icon--left">';
                            $s .= '                    <span>';
                            $s .= '                        <i class="la la-search"></i>';
                            $s .= '                    </span>';
                            $s .= '                </span>';
                            $s .= '            </div>';
                            $s .= '        </div>';
                    }

                    // set filter box
                    $defineIdFilter = '';
                    if ($DataTable->filter) { 
                        if (is_array($DataTable->filter)) {
                            $f = ''; 
                            foreach ($DataTable->filter as $key => $filter) { 
                                $f .= '<div class="col-md-2">';
                                $f .= '    <div class="m-form__group m-form__group--inline">';
                                $f .= '        <div class="m-form__control">';
                                $f .= '            <select class="form-control m-bootstrap-select" id="'.$DataTable->id_table.$filter['id_filter'].'">';
                                $f .= '                <option value="">'.$filter['nama_filter'].'</option>';
                                foreach ($filter['option_filter'] as $option) {
                                    $id   = isset($option['id']) ? $option['id'] : NULL;
                                    $attr = isset($option['attr']) ? $option['attr'] : NULL;
                                    $f .= '            <option value="'.$id.'">'.$attr.'</option>';
                                }
                                $f .= '            </select>';
                                $f .= '        </div>';
                                $f .= '    </div>';
                                $f .= '    <div class="d-md-none m--margin-bottom-10"></div>';
                                $f .= '</div>';

                                $defineIdFilter .= ", $('#".$DataTable->id_table.$filter['id_filter']."').on('change', function() {
                                    a.search($(this).val(), '".$filter['id_filter']."');
                                    a.setDataSourceParam('pagination', {
                                        page: 1,
                                        perpage: ".$DataTable->perpage.",
                                    });
                                })";
                            } 
                            $defineIdFilter .= ';';
                            $s .= $f;
                        } else {
                            $s .= '<div class="col-md-2">';
                            $s .= '    <div class="m-form__group m-form__group--inline">';
                            $s .= '        <div class="m-form__control m--font-danger">';
                            $s .= '        	 '.$DataTable->filter;
                            $s .= '        </div>';
                            $s .= '    </div>';
                            $s .= '    <div class="d-md-none m--margin-bottom-10"></div>';
                            $s .= '</div>';
                        }
                    }

                    // end div on top table
                    $s .= '    </div>';
                    $s .= '    <div type"hidden" id="'.$DataTable->id_table.'m_datatable_reload"></div>';

                    // script m_datatable draw
                    $script .= '
                    $("#'.$DataTable->id_table.'").append(\''.$s.'\');
                    $(".m-bootstrap-select").selectpicker();
                    var DefaultDatatableDemo = {
                        init: function() {
                            var t, a;
                            t = {
                                data: {
                                    type: "remote",
                                    source: {
                                        read: {
                                            url: "'.$DataTable->json_url.'"
                                        }
                                    },
                                    pageSize: '.$DataTable->perpage.',
                                    '.$setMode.'
                                    saveState: {
                                        cookie: !1, webstorage: !1
                                    }
                                },
                                layout: {
                                    theme: "default",
                                    class: "",
                                    scroll: !1,
                                    footer: !1
                                },
                                sortable: !0,
                                pagination: !0,
                                search: {
                                    input: $("#generalSearch")
                                },
                                columns: ['.$DataTable->columns.'],
                                toolbar: {
                                    layout: ["pagination", "info"],
                                    placement: ["bottom"],  
                                    items: {
                                        pagination: {
                                            type: "default",
                                            pages: {
                                                desktop: {
                                                    layout: "default",
                                                    pagesNumber: 6
                                                },
                                                tablet: {
                                                    layout: "default",
                                                    pagesNumber: 3
                                                },
                                                mobile: {
                                                    layout: "compact"
                                                }
                                            },
                                            navigation: {
                                                prev: true,
                                                next: true,
                                                first: true,
                                                last: true
                                            },
                                            pageSizeSelect: [10, 20, 30, 50, 100, 500, 1000, 10000]
                                        },
                                        info: true
                                    }
                                },

                                translate: {
                                    records: {
                                        processing: "Please wait...",
                                        noRecords: "No records found"
                                    },
                                    toolbar: {
                                        pagination: {
                                            items: {
                                                default: {
                                                    first: "First",
                                                    prev: "Previous",
                                                    next: "Next",
                                                    last: "Last",
                                                    more: "More pages",
                                                    input: "Page number",
                                                    select: "Select page size"
                                                },
                                                info: "Menampilkan {{start}} - {{end}} dari {{total}} data"
                                            }
                                        }
                                    }
                                }

                            }, a = $("#'.$DataTable->id_table.'").mDatatable(t), 
                            $("#'.$DataTable->id_table.'m_datatable_reload").on("click", function() {
                                    $("#'.$DataTable->id_table.'").mDatatable("reload")
                            }), $("#'.$DataTable->id_table.'generalSearch").on("keyup", function() {
                                    a.search($(this).val(),"generalSearch");
                                    $("#generalSearch").val($(this).val());
                            })'.$defineIdFilter.'
                        }
                    };
                    jQuery(document).ready(function() {
                            DefaultDatatableDemo.init()
                    });
                    ';
                } else {
                        $script .= 'alert("'.$DataTable->columns['error'].'");';
                }
        } else {
                $script .= 'alert("error : Komponen SET Metronic DataTable Tidak Lengkap");';
        }
        $script .= ' }) 
            function reload_table(table)
            {
                $( "#"+table+"m_datatable_reload" ).trigger( "click" );
            };
        </script>';
        return $script;
    }
}
?>