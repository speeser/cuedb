<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Cuedb extends CI_Controller {
 
function __construct()
{
        parent::__construct();
 
/* Standard Libraries of codeigniter are required */
$this->load->database();
$this->load->helper('url');
/* ------------------ */ 
 
$this->load->library('grocery_CRUD');
 
}
 
public function index()
{
echo "<h1>Welcome to the world of Codeigniter</h1>";//Just an example to ensure that we get into the function
die();
}
 
public function stickr_promolist()
{
$crud = new grocery_CRUD();
$crud->set_table('stickr_promolist');
$crud->callback_column('url',array($this,'_callback_webpage_url'));
$crud->callback_column('facebook',array($this,'_callback_facebook_url'));
$crud->callback_column('soundcloud',array($this,'_callback_soundcloud_url'));
$crud->callback_column('instagram',array($this,'_callback_instagram_url'));
$crud->callback_column('twitter',array($this,'_callback_twitter_url'));
$crud->callback_column('youtube',array($this,'_callback_youtube_url'));
$output = $crud->render();
 
$this->_example_output($output);        
}

public function _callback_webpage_url($value, $row)
{
return "<a href='".(''.$row->url)."'>$value</a>";
}
 
public function _callback_facebook_url($value, $row)
{
return "<a href='".(''.$row->facebook)."'>$value</a>";
}

public function _callback_soundcloud_url($value, $row)
{
return "<a href='".(''.$row->soundcloud)."'>$value</a>";
}

public function _callback_instagram_url($value, $row)
{
return "<a href='".(''.$row->instagram)."'>$value</a>";
}

public function _callback_twitter_url($value, $row)
{
return "<a href='".(''.$row->twitter)."'>$value</a>";
}

public function _callback_youtube_url($value, $row)
{
return "<a href='".(''.$row->youtube)."'>$value</a>";
}

function _example_output($output = null)
 
{
$this->load->view('stickrpromolist.php',$output);    
}
}
 
