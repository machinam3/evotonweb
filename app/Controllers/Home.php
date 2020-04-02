<?php namespace App\Controllers;

class Home extends BaseController
{
	public function Index()
	{
	    $data['title'] = ucfirst('home'); // Capitalize the first letter
        echo view('templates/header', $data);
        echo view('pages/home', $data);
        echo view('templates/footer', $data);
	}
	//--------------------------------------------------------------------

	public function About()
	{
	    $data['title'] = ucfirst('About'); // Capitalize the first letter
        echo view('templates/header', $data);
        echo view('pages/about', $data);
        echo view('templates/footer', $data);
	}
	//--------------------------------------------------------------------

	public function Services()
	{
	    $data['title'] = ucfirst('services'); // Capitalize the first letter
        echo view('templates/header', $data);
        echo view('pages/services', $data);
        echo view('templates/footer', $data);
	}
	//--------------------------------------------------------------------

	public function Portfolio()
	{
	    $data['title'] = ucfirst('portfolio'); // Capitalize the first letter
        echo view('templates/header', $data);
        echo view('pages/portfolio', $data);
        echo view('templates/footer', $data);
	}
	//--------------------------------------------------------------------

	public function Blog()
	{
	    $data['title'] = ucfirst('blog'); // Capitalize the first letter
        echo view('templates/header', $data);
        echo view('pages/blog', $data);
        echo view('templates/footer', $data);
	}
	//--------------------------------------------------------------------

	public function Contact()
	{
	    $data['title'] = ucfirst('contact'); // Capitalize the first letter
        echo view('templates/header', $data);
        echo view('pages/contact', $data);
        echo view('templates/footer', $data);
	}
	//--------------------------------------------------------------------

	public function Contactus()
	{
		helper('form', 'array');
		$data['title'] = ucfirst('contact'); // Capitalize the first letter
		$subscribe =[
			'name' => $this->request->getVar('fname'),
			'lname' => $this->request->getVar('lname'),
			'email' => $this->request->getVar('email'),
			'message' => $this->request->getVar('message'),
		] ;
		// echo implode(" ", $subscribe);
        echo view('templates/header', $data);
        echo view('pages/contact', $data);
        echo view('templates/footer', $data);
	}
	//--------------------------------------------------------------------
}
