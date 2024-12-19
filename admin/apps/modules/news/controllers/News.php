<?php
defined('BASEPATH') or exit('No direct script access allowed');

class News extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->login = $this->session->userdata('Logged_Admin');
        if (empty($this->login)) {
            redirect('../', 'refresh');
        }
        /* === FOR BLOG ===*/
        $this->load->model("News_model", "News");
        $this->load->helper("common");
        /*==== FOR news ====*/
        $this->fld_bid = "id";
        $this->fld_bstatus = "status";
        $this->table = "tbl_news";
        /*==== FOR Category ====*/
        $this->table_category = "tbl_newscate";
        $this->category = "tbl_newscate";
        $this->load->model("Newscate_model", "Category");
        $this->load->model("News_model", "News");

    }

    public function index()
    {
        $content['news'] = $this->News->news_list($this->table);
        $content['subview'] = "news/news_list";
        $this->load->view('layout', $content);
    }

    public function info($id = null)
    {
        $content['blog_info'] = $this->Blog_Model->get_member_blog_info($this->fld_bid, $id, $this->table);
        if (!empty($content['blog_info'])) {
            $content['blog_info'] = $this->Blog_Model->get_member_blog_info($this->fld_bid, $id, $this->table);

            /*-- COUNT BLOG VIEWS --*/
            $blogview = $content['blog_info']->blog_views + 1;
            $blogViewArray = array(
                'blog_views' => $blogview
            );
            $content['blogview'] = $this->Blog_Model->update_page_view($this->fld_bid, $id, $blogViewArray, $this->table);
            /*-- END OF THE COUNT BLOG VIEWS --*/

            $content['subview_page'] = "blog/member_blog_details";
            $this->load->view('layout_pages', $content);
        } else {
            $content['subview_page'] = "blog/badrequest";
            $this->load->view('layout_pages', $content);
        }
    }

    public function add()
    {

        $REQUESTMETHOD = $this->input->server('REQUEST_METHOD');
        if ($REQUESTMETHOD == "POST") {
            $check = $this->News->check('name_slug', $this->input->post('name_slug'), $this->table);
            if (empty($check)) {
                // echo "<pre>";
                // print_r($this->input->post());die;
                $image = $this->News->images_upload();
                $createdDate = date('Y-m-d H:i:s');
                $short_desc = html_escape($this->input->post('short_desc', FALSE));
                $desc = html_escape($this->input->post('description', FALSE));
                $data = array(
                    'name' => $this->input->post('name'),
                    'name_slug' => $this->input->post('name_slug'),
                    'category' => $this->input->post('category'),
                    'img' => $image,
                    'img_tag' => $this->input->post('img_tag'),
                    'short_desc' => $this->input->post('short_desc'),
                    'description' => $this->input->post('description'),
                    'homepage' => $this->input->post('homepage'),
                    'hot' => $this->input->post('hot'),
                    'meta_title' => $this->input->post('meta_title'),
                    'meta_desc' => $this->input->post('meta_desc'),
                    'meta_keyword' => $this->input->post('meta_keyword'),
                    'updated' => date('Y-m-d H:i:s'),
                    'created' => date('Y-m-d H:i:s')
                );
                $result = $this->News->save_blog($data, $this->table);
                if ($result) {
                    $this->session->set_flashdata('msg', array('message' => 'news has been successfully added.', 'class' => 'success', 'type' => 'Ok!'));
                    redirect('news/add');
                } else {
                    $this->session->set_flashdata('msg', array('message' => 'Unable to Added.Some error occurred.', 'class' => 'danger', 'type' => 'Oops!'));
                    redirect('news/add');
                }
            } else {
                $this->session->set_flashdata('msg', array('message' => 'Url Name already used !.', 'class' => 'danger', 'type' => 'Oops!'));
                redirect('news/add');
            }
        }
        $content['category'] = $this->News->category_list($this->table_category);
        $content['media'] = $this->News->media_list();

        $content['subview'] = "news/add_news";
        $this->load->view('layout', $content);
    }

    public function edit($id = null)
    {

        $content['category'] = $this->News->category_list($this->table_category);
        $content['news_info'] = $this->News->get_single_blog($id, $this->table);
        if (!empty($content['news_info'])) {
            $REQUESTMETHOD = $this->input->server('REQUEST_METHOD');
            if ($REQUESTMETHOD == "POST") {
                $check = $this->News->check_edit('id', $id, 'name_slug', $this->input->post('name_slug'), $this->table);
                if (empty($check)) {

                    if ($_FILES['img']['error'] > 0) {
                        $blog_image = $this->input->post('prev_image');
                    } else {
                        $img_file = FCPATH . 'uploads/news/' . $content['news_info']->img;
                        if (!unlink($img_file)) {
                        } else {
                        }

                        $blog_image = $this->News->images_upload();
                    }

                    $short_desc = html_escape($this->input->post('short_desc', FALSE));
                    $desc = html_escape($this->input->post('description', FALSE));
                    $data = array(
                        'name' => $this->input->post('name'),
                        'name_slug' => $this->input->post('name_slug'),
                        'category' => $this->input->post('category'),
                        'img' => $blog_image,
                        'img_tag' => $this->input->post('img_tag'),
                        'short_desc' => $this->input->post('short_desc'),
                        'description' => $this->input->post('description'),
                        'homepage' => $this->input->post('homepage'),
                        'hot' => $this->input->post('hot'),
                        'meta_title' => $this->input->post('meta_title'),
                        'meta_desc' => $this->input->post('meta_desc'),
                        'meta_keyword' => $this->input->post('meta_keyword'),
                        'updated' => date('Y-m-d H:i:s'),
                        'created' => date('Y-m-d H:i:s')
                    );

                    $result = $this->News->update_blog($id, $data, $this->table);
                    if ($result) {
                        $this->session->set_flashdata('msg', array('message' => 'news has been successfully Update.', 'class' => 'success', 'type' => 'Ok!'));
                        redirect('news/edit/' . $id);
                    } else {
                        $this->session->set_flashdata('msg', array('message' => 'Unable to Added.Some error occurred.', 'class' => 'danger', 'type' => 'Oops!'));
                        redirect('news/edit/' . $id);
                    }
                } else {
                    $this->session->set_flashdata('msg', array('message' => 'Url Name already used !.', 'class' => 'danger', 'type' => 'Oops!'));
                    redirect('news/edit/' . $id);
                }

            }

            $content['subview'] = "news/edit_news";
            $this->load->view('layout', $content);
        } else {
            $content['subview'] = "news/badrequest";
            $this->load->view('layout', $content);
        }

    }

    public function delete($id = null)
    {
        if ($id !== NULL) {

            $result = $this->News->delete_single_blog($id, $this->table);
            if ($result) {
                $this->session->set_flashdata('msg', array('message' => 'news has been successfully Delete', 'class' => 'success', 'type' => 'Ok!'));
                redirect('news');
            } else {
                $this->session->set_flashdata('msg', array('message' => 'Unable to Delete.Some error occurred.', 'class' => 'danger', 'type' => 'Oops!'));
                redirect('news');
            }
        } else {
            $this->session->set_flashdata('msg', array('message' => 'Row cannot delete!', 'class' => 'danger', 'type' => 'Oops!'));
            redirect('news');
        }
    }


    public function category(){
        $content['category_list'] = $this->Category->get_category_list($this->category);
        $content['subview'] = "news/category_list";
        $this->load->view('layout', $content);
    }
    public function edit_cate()
    {
        $content['category'] = $this->Category->get_category_list($this->category);
        $id = $this->uri->segment(3);
        $content['cate_info'] = $this->Category->get_single($id, $this->category);
        $content['category_list'] = $this->Category->get_category_list($this->category);
        $REQUESTMETHOD = $this->input->server('REQUEST_METHOD');
        if ($REQUESTMETHOD == "POST") {
            $check = $this->Category->check_edit('id', $id, 'name_slug', $this->input->post('name_slug'), $this->category);
            if (empty($check)) {

                if ($_FILES['img']['error'] > 0) {
                    $image = $this->input->post('prev_img');
                } else {
                    $img_file = FCPATH . 'uploads/category/' . $content['cate_info']->img;
                    if (!unlink($img_file)) {
                    } else {
                    }
                    $image = $this->Category->images_upload();
                }


                $short_desc = html_escape($this->input->post('short_desc', FALSE));
                $desc = html_escape($this->input->post('desc', FALSE));
                $data = array(
                    'type' => $this->input->post('type'),
                    'name' => $this->input->post('name'),
                    'name_slug' => $this->input->post('name_slug'),
                    'title' => $this->input->post('title'),
                    //'banner_desc' => $this->input->post('banner_desc',true),
                    'short_desc' => $this->input->post('short_desc'),
                    'desc' => $this->input->post('desc'),
                    'img' => $image,
                    'img_tag' => $this->input->post('img_tag'),
                    'meta_title' => $this->input->post('meta_title'),
                    'meta_desc' => $this->input->post('meta_desc'),
                    'meta_keyword' => $this->input->post('meta_keyword'),

                );

                $result = $this->Category->update($id, $data, $this->category);
                if ($result) {
                    $this->session->set_flashdata('msg', array('message' => 'Category has been successfully Update.', 'class' => 'success', 'type' => 'Ok!'));
                    redirect('news/edit_cate/' . $id);
                } else {
                    $this->session->set_flashdata('msg', array('message' => 'Unable to Added.Some error occurred.', 'class' => 'danger', 'type' => 'Oops!'));
                    redirect('news/edit_cate/' . $id);
                }
            } else {
                $this->session->set_flashdata('msg', array('message' => 'Url Name already used !.', 'class' => 'danger', 'type' => 'Oops!'));
                redirect('news/edit_cate/' . $id);
            }

        }
        $content['subview'] = "news/edit_category";
        $this->load->view('layout', $content);
    }


    public function add_cate()
    {

        $content['category'] = $this->Category->get_category_list($this->category);
        $REQUESTMETHOD = $this->input->server('REQUEST_METHOD');
        if ($REQUESTMETHOD == "POST") {
            $check = $this->Category->check('name_slug', $this->input->post('name_slug'), $this->category);
            if (empty($check)) {
                $image = $this->Category->images_upload();
                $short_desc = html_escape($this->input->post('short_desc', FALSE));
                $desc = html_escape($this->input->post('desc', FALSE));
                $data = array(
                    'type' => $this->input->post('type'),
                    'name' => $this->input->post('name'),
                    'name_slug' => $this->input->post('name_slug'),
                    'title' => $this->input->post('title'),
                    //'banner_desc' => $this->input->post('banner_desc',true),
                    'short_desc' => $this->input->post('short_desc'),
                    'desc' => $this->input->post('desc'),
                    'img' => $image,
                    'img_tag' => $this->input->post('img_tag'),
                    'meta_title' => $this->input->post('meta_title'),
                    'meta_desc' => $this->input->post('meta_desc'),
                    'meta_keyword' => $this->input->post('meta_keyword'),
                    'created' => date('Y-m-d H:i:s')
                );
                $result = $this->Category->save_skill($data, $this->category);
                if ($result) {
                    $this->session->set_flashdata('msg', array('message' => 'category has been successfully added.', 'class' => 'success', 'type' => 'Ok!'));
                    redirect('news/add_cate');
                } else {
                    $this->session->set_flashdata('msg', array('message' => 'Unable to Added.Some error occurred.', 'class' => 'danger', 'type' => 'Oops!'));
                    redirect('news/add_cate');
                }
            } else {
                $this->session->set_flashdata('msg', array('message' => 'Url Name already used !.', 'class' => 'danger', 'type' => 'Oops!'));
                redirect('news/add_cate');
            }
        }
        $content['subview'] = "news/add_cate";
        $this->load->view('layout', $content);

    }


    public function delete_cate($id = null)
    {
        if ($id !== NULL) {
            $result = $this->Category->delete_single_package($id, $this->category);
            if ($result) {
                $this->session->set_flashdata('msg2', array('message' => 'Category has been successfully Delete', 'class' => 'success', 'type' => 'Ok!'));
                redirect('category');
            } else {
                $this->session->set_flashdata('msg2', array('message' => 'Unable to Delete.Some error occurred.', 'class' => 'danger', 'type' => 'Oops!'));
                redirect('category');
            }
        } else {
            $this->session->set_flashdata('msg2', array('message' => 'Row cannot delete!', 'class' => 'danger', 'type' => 'Oops!'));
            redirect('category');
        }
    }

    public function img()
    {
        if ($_FILES['file']['name']) {
            if (!$_FILES['file']['error']) {
                $name = md5(rand(100, 200));
                $ext = explode('.', $_FILES['file']['name']);
                $filename = $name . '.' . $ext[1];
                $destination = APPPATH . '../uploads/img/' . $filename; //change this directory
                $location = $_FILES["file"]["tmp_name"];
                move_uploaded_file($location, $destination);
                echo base_url('uploads/img/') . $filename;//change this URL
            } else {
                echo $message = 'Ooops!  Your upload triggered the following error:  ' . $_FILES['file']['error'];
            }
        }
    }
}
