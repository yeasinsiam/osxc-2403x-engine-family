<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Page extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("Page_model", "Page");
        $this->load->helper("common");
    }

    public function about()
    {
        $this->load->view('page/about');
    }


    public function faq()
    {
        $result['page'] = $this->Page->page_list('10');
        $this->load->view('page/faq', $result);
    }

    public function test()
    {
        $this->load->view('page/test');
    }

    public function global()
    {
        $result['page'] = $this->Page->page_list('8');
        $this->load->view('page/global', $result);
    }

    public function privacy_policy()
    {
        $result['page'] = $this->Page->page_list('13');
        $this->load->view('page/privacy_policy', $result);
    }

    public function quality()
    {

        $result['page'] = $this->Page->page_list('9');
        $this->load->view('page/quality', $result);
    }

    public function genuine()
    {
        $result['page'] = $this->Page->page_list('7');

        $this->load->view('page/genuine', $result);
    }


    public function contact()
    {
        $this->load->view('page/contact');
    }

    public function products()
    {
        $result = [
            'product' => [
                'meta_title' => 'meta_title',
                'meta_desc' => 'meta_desc',
                'meta_keyword' => 'meta_keyword',
                'name' => 'name',
            ]
        ];
        $result['products_list'] = $this->Page->products_list();
        $template = $_GET['t'] ? $_GET['t'] : 'products';
        $this->load->view('page/' . $template, $result);
    }
    public function product()
    {
        $result['product'] = $this->Page->product_list();
        $result['category'] = $this->Page->category_list();
        $this->load->view('page/product', $result);
    }
    public function detail()
    {
        $id = $this->uri->segment(2);
        $result['product'] = $this->Page->product_detail($id);
        $result['product_list'] = $this->Page->get_product_category($result['product']->category);
        // 		echo"<pre>";
        // 		print_r($result['product_list']);
        // 		die;
        $this->load->view('page/product_details', $result);
    }

    public function part_detail()
    {
        $id = $this->uri->segment(2);

        $result['product'] = $this->Page->part_detail($id);
        $result['product_list'] = $this->Page->get_part_product_category($result['product']->category);
        // echo"<pre>";
        // print_r($result['product_list']);
        // die;
        $result['is_mobile'] = $this->isMobile();
        $this->load->view('page/part_detail', $result);
    }

    private function isMobile()
    {
        // 如果有HTTP_X_WAP_PROFILE则一定是移动设备
        if (isset($_SERVER['HTTP_X_WAP_PROFILE'])) {
            return true;
        }
        // 如果via信息含有wap则一定是移动设备,部分服务商会屏蔽该信息
        if (isset($_SERVER['HTTP_VIA'])) {
            // 找不到为flase,否则为true
            return stristr($_SERVER['HTTP_VIA'], "wap") ? true : false;
        }
        // 脑残法，判断手机发送的客户端标志,兼容性有待提高。其中'MicroMessenger'是电脑微信
        if (isset($_SERVER['HTTP_USER_AGENT'])) {
            $clientkeywords = array('nokia', 'sony', 'ericsson', 'mot', 'samsung', 'htc', 'sgh', 'lg', 'sharp', 'sie-', 'philips', 'panasonic', 'alcatel', 'lenovo', 'iphone', 'ipod', 'blackberry', 'meizu', 'android', 'netfront', 'symbian', 'ucweb', 'windowsce', 'palm', 'operamini', 'operamobi', 'openwave', 'nexusone', 'cldc', 'midp', 'wap', 'mobile', 'MicroMessenger');
            // 从HTTP_USER_AGENT中查找手机浏览器的关键字
            if (preg_match("/(" . implode('|', $clientkeywords) . ")/i", strtolower($_SERVER['HTTP_USER_AGENT']))) {
                return true;
            }
        }
        // 协议法，因为有可能不准确，放到最后判断
        if (isset($_SERVER['HTTP_ACCEPT'])) {
            // 如果只支持wml并且不支持html那一定是移动设备
            // 如果支持wml和html但是wml在html之前则是移动设备
            if ((strpos($_SERVER['HTTP_ACCEPT'], 'vnd.wap.wml') !== false) && (strpos($_SERVER['HTTP_ACCEPT'], 'text/html') === false || (strpos($_SERVER['HTTP_ACCEPT'], 'vnd.wap.wml') < strpos($_SERVER['HTTP_ACCEPT'], 'text/html')))) {
                return true;
            }
        }
        return false;
    }

    public function search()
    {
        $search = $this->input->get('product');

        $result['product'] = $this->Page->search_detail($search);
        // echo"<pre>";
        // print_r($result['product']);
        // die;

        $result['category'] = $this->Page->category_list($result['product']->id);
        $result['product_list'] = $this->Page->search_product_category($category);

        $this->load->view('page/product', $result);
    }

    public function category()
    {
        $category = $this->uri->segment(2);
        $result['product'] = $this->Page->get_category($category);
        $result['category'] = $this->Page->category_list($result['product']->id);
        $result['product_list'] = $this->Page->product_category($category);
        $this->load->view('page/product', $result);
    }

    public function categories()
    {
        $category = $this->uri->segment(2);
        $result['category'] = $this->Page->get_category($category);
        $result['category_list'] = $this->Page->category_list($result['category']->id);
        $result['product'] = $this->Page->product_category($category);


        $this->load->view('page/product2', $result);
    }

    public function part()
    {
        $page = isset($_GET['page']) ? $_GET['page'] : 1;
        $category1 = $this->uri->segment(2);
        $result['product'] = $this->Page->get_part_category($category1);
        $result['category'] = $this->Page->part_category_list($result['product']->id);
        $result['product_list'] = $this->Page->part_category_page($category1, $page);
        $result['page_total'] = $page_total = $this->Page->part_category_page_nums($category1);
        $result['page_total_page'] = ceil($page_total / 16);
        $result['now_page'] = $page;
        $result['category1'] = $category1;
        $this->load->view('page/part', $result);
    }

    public function partAjax()
    {
        $page = isset($_POST['page']) ? $_POST['page'] : 1;
        $category1 = $_POST['category']; //$this->uri->segment(2);
        $result['product_list'] = $this->Page->part_category_page($category1, $page);
        $result['page_total'] = $page_total = $this->Page->part_category_page_nums($category1);
        $result['page_total_page'] = ceil($page_total / 16);
        $result['now_page'] = $page;
        $result['category1'] = $category1;
        $result['page_summary'] = (($page - 1) * 16) . ' -' . ($page * 16) . ' of  ' . $page_total;
        echo json_encode($result);
        exit();
    }


    public function solutions()
    {
        $result['page'] = $this->Page->page_list('12');
        $this->load->view('page/solutions', $result);
    }

    public function industry()
    {
        $result['page'] = $this->Page->page_list('1');
        // 		echo"<pre>";
        // 		print_r($result['page']);
        // 		die;
        $this->load->view('page/industry', $result);
    }

    public function company()
    {
        $result['page'] = $this->Page->page_list('2');
        $this->load->view('page/company', $result);
    }

    public function industrial()
    {
        $result['page'] = $this->Page->page_list('3');
        $this->load->view('page/industrial', $result);
    }

    public function marine()
    {
        $result['page'] = $this->Page->page_list('4');
        $this->load->view('page/marine', $result);
    }

    public function highway()
    {
        $result['page'] = $this->Page->page_list('5');
        $this->load->view('page/highway', $result);
    }

    public function power()
    {

        $result['page'] = $this->Page->page_list('6');
        $this->load->view('page/power', $result);
    }

    public function spanish()
    {
        $this->load->view('page/spanish');
    }

    public function stock()
    {
        $result['page'] = $this->Page->page_list('11');
        $this->load->view('page/stock', $result);
    }


    public function thank()
    {
        $this->load->view('page/thank');
    }

    public function sent()
    {
        $email = $this->input->post('email');
        $product_url = $this->input->post('product_url');
        if (!empty($email)) {
            $data = array(
                'page' => $this->input->post('product'),
                'name' => $this->input->post('name'),
                'phone' => $this->input->post('phone'),
                'email' => $this->input->post('email'),
                'subject' => $this->input->post('subject'),
                'description' => $this->input->post('description'),
                'created' => date('Y-m-d H:i:s')
            );
            $result = $this->Page->save($data, 'tbl_enquiry');
            $subject = "Enquiry Form";
            $message = "<h4>Product for Enquiry</h4>";
            $message .= "<b>Product Name :</b> " . $this->input->post('product') . "<br>";
            $message .= "<b>Name :</b> " . $this->input->post('name') . "<br>";
            $message .= "<b>Phone No :</b> " . $this->input->post('phone') . "<br>";
            $message .= "<b>Email :</b> " . $email . "<br>";
            $message .= "<b>subject :</b> " . $this->input->post('subject') . "<br>";
            $message .= "<b>Message :</b> " . $this->input->post('description', true) . "<br>";
            $to = $this->website->email;
            $email = 'info@smmwings.com';
            $headers = 'MIME-Version: 1.0' . "\r\n";
            $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
            $headers .= 'To: ' . $to . "\r\n";
            $headers .= 'From: ' . $email . "\r\n";
            $retval = @mail($to, $subject, $message, $headers);
            if ($retval == true) {
                $this->session->set_flashdata('msg', array('message' => 'Your enquiry has been sent successfull ! ', 'class' => 'success'));
                redirect($product_url);
            } else {
                $this->session->set_flashdata('msg', array('message' => 'Your enquiry has been not sent', 'class' => 'danger'));
                redirect($product_url);
            }
        } else {
            $this->session->set_flashdata('msg', array('message' => 'Email Address Inavlid !', 'class' => 'danger'));
            redirect($product_url);
        }
    }

    public function send()
    {
        $email = $this->input->post('email');
        if (!empty($email)) {
            $data = array(
                'page' => 'Contact',
                'name' => $this->input->post('name'),
                'phone' => $this->input->post('phone'),
                'email' => $this->input->post('email'),
                'subject' => $this->input->post('subject'),
                'description' => $this->input->post('message'),
                'created' => date('Y-m-d H:i:s')
            );
            $result = $this->Page->save($data, 'tbl_enquiry');
            $subject = "Contact Form";
            $message = "<h4>Contact for Enquiry</h4>";
            $message .= "<b>Name :</b> " . $this->input->post('name') . "<br>";
            $message .= "<b>Phone No :</b> " . $this->input->post('phone') . "<br>";
            $message .= "<b>Email :</b> " . $email . "<br>";
            $message .= "<b>subject :</b> " . $this->input->post('subject') . "<br>";
            $message .= "<b>Message :</b> " . $this->input->post('message', true) . "<br>";
            $to = $this->website->email;
            $email = 'info@engine-family.com';
            $headers = 'MIME-Version: 1.0' . "\r\n";
            $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
            $headers .= 'To: ' . $to . "\r\n";
            $headers .= 'From: Engine Family ' . $email . "\r\n";
            $retval = @mail($to, $subject, $message, $headers);
            if ($retval == true) {
                $this->session->set_flashdata('msg', array('message' => 'Your query has been sent successfull ! ', 'class' => 'success'));
                redirect('contact');
            } else {
                $this->session->set_flashdata('msg', array('message' => 'Your query has been not sent', 'class' => 'danger'));
                redirect('contact');
            }
        } else {
            $this->session->set_flashdata('msg', array('message' => 'Email Address Inavlid !', 'class' => 'danger'));
            redirect('contact');
        }
    }


    public function badRequest()
    {


        $this->load->view('page/badRequest');
    }

    public function news()
    {
        $cate_name = $this->uri->segment(2);
        $category = $this->Page->get_newscate($cate_name);
        $result['news_list'] = $this->Page->news_list($category->id);
        $result['news_total'] = $this->Page->news_total($category->id);
        $result['news'] = $category ? $category : [
            'meta_title' => 'news',
            'meta_desc' => 'news',
            'name' => 'news',
            'meta_keyword' => 'news',
        ];
        $this->load->view('page/news', $result);
    }

    public function news_detail()
    {
        $news_id = $this->uri->segment(2);
        $news_detail = $this->Page->news_detail($news_id);
        $news_detail->created = strtotime($news_detail->created);
        $result['news'] = $news_detail;
        $this->load->view('page/news_detail', $result);
    }

    public function store()
    {
        $result = [];
        $this->load->view('page/store', $result);
    }

    public function store_detail()
    {
        $news_id = $this->uri->segment(2);
        $news_detail = $this->Page->news_detail($news_id);
        $news_detail->created = strtotime($news_detail->created);
        $result['news'] = $news_detail;
        $this->load->view('page/store_detail', $result);
    }
}
