<?php

namespace App\Controllers;

use App\Models\SignupModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class Signup extends BaseController
{
    public function index()
    {
        $model = model(SignupModel::class);

        $data['signup'] = $model->getSignup();
        $data = [
            'signup'  => $model->getSignup(),
            'title' => 'Signup User List',
        ];
        return view('templates/signupheader', $data)
            . view('signup/index')
            . view('templates/signupfooter');
    
    }

    public function show($email = null)
    {
        $model = model(SignupModel::class);

        $data['signup'] = $model->getSignup($email);

        if (empty($data['signup'])) {
            throw new PageNotFoundException('Cannot find the user item: ' . $email);
        }

        $data['title'] = $data['signup']['title'];

        return view('templates/signupheader', $data)
            . view('signup/view')
            . view('templates/signupfooter');
    }

    public function new()
    {
        helper('form');

        return view('templates/header', ['title' => 'Create a user profile'])
            . view('signup/create')
            . view('templates/footer');
    }

    public function create()
    {
        helper('form');

        $data = $this->request->getPost(['firstname', 'email']);

        // Checks whether the submitted data passed the validation rules.
        if (! $this->validateData($data, [
            'firstname' => 'required|max_length[255]|min_length[1]',
            'email'  => 'required|max_length[5000]|min_length[1]',
        ])) {
            // The validation fails, so returns the form.
            return $this->new();
        }

        // Gets the validated data.
        $post = $this->validator->getValidated();

        $model = model(SignupModel::class);

        $model->save([
            'firstname' => $post['title'],
            'slug'  => url_title($post['title'], '-', true),
            'email'  => $post['email'],
                    
        ]);

        return view('templates/header', ['title' => 'Create a user profile'])
            . view('signup/success')
            . view('templates/footer');
    }
}