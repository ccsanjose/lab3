<?php

namespace App\Controllers;

use App\Models\GuestModel;

class Guest extends BaseController
{
	
	 public function index()
    {
        $model = model (GuestModel::class);
		$data = [
		'guest' => $model->getGuest(),
		'title' => 'Guestbook',
		];
		
		return view ('templates/header',$data)
			. view ('guest/index')
			. view ('templates/footer');
		
    }
	public function create()
	{
		helper('form');
		
		
		if (! $this->request->is('post')){
		return view('templates/header', ['title' => 'Create a guest entry'])
		. view('guest/create')
		. view('templates/footer');		
		}
		
		$post = $this->request->getPost(['name', 'email', 'website', 'comment', 'gender']);
		
		 if (! $this->validateData($post, [
            'name' => 'required|max_length[255]|min_length[3]',
            'email'  => 'required|max_length[255]|min_length[3]',
			'website'  => 'required|max_length[255]|min_length[3]',
			'comment'  => 'required|max_length[5000]|min_length[10]',
			'gender'  => 'required|max_length[255]|min_length[3]',
        ])) {
            // The validation fails, so returns the form.
            return view('templates/header', ['title' => 'Create a guest entry'])
		. view('guest/create')
		. view('templates/footer');	
        }
	}
}