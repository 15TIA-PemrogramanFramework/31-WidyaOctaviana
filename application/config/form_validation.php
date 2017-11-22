<?php

$config = array(
    'register' => array(
       array(
        'field' => 'username',
        'label' => 'username',
        'rules' => 'required|is_unique[member.username]|is_unique[admin.username]',
        'errors' => array(
            'required' => 'username Wajib diisi',
            'is_unique'     => 'username sudah pernah mendaftar',
        ),

    ),
       array(
        'field' => 'email',
        'label' => 'email',
        'rules' => 'required|valid_email|is_unique[member.email]|is_unique[admin.email]',
        'errors' => array(
            'required' => 'email Wajib diisi',
            'is_unique'     => 'email sudah pernah didaftarkan',
        ),
    )


   ),


'registeradmin' => array(
       array(
        'field' => 'username',
        'label' => 'username',
        'rules' => 'required|is_unique[member.username]|is_unique[admin.username]',
        'errors' => array(
            'required' => 'username Wajib diisi',
            'is_unique'     => 'username sudah pernah mendaftar',
        ),

    ),
       array(
        'field' => 'email',
        'label' => 'email',
        'rules' => 'required|valid_email|is_unique[member.email]|is_unique[admin.email]',
        'errors' => array(
            'required' => 'email Wajib diisi',
            'is_unique'     => 'email sudah pernah didaftarkan',
        ),
    ),
        array(
            'field' => 'password',
            'label' => 'password',
            'rules' => 'required|min_length[3]'
        ),
         array(
            'field' => 'repassword',
            'label' => 'repassword',
            'rules' => 'required|matches[password]'
        )

   ),

    'edit_data_password' => array(
        array(
            'field' => 'password',
            'label' => 'password',
            'rules' => 'required|min_length[3]'
        ),
        array(
            'field' => 'repassword',
            'label' => 'repassword',
            'rules' => 'required|matches[password]'
        )
    ),

 'usernamecek' => array(
       array(
        'field' => 'username',
        'label' => 'Username',
        'rules' => 'required|is_unique[member.username]|is_unique[admin.username]',
        'errors' => array(
            'required' => 'username Wajib diisi',
            'is_unique'     => 'username sudah pernah mendaftar',
        )
    )
   ),

       'emailcek' => array(
        array(
            'field' => 'email',
            'label' => 'email',
            'rules' => 'required|valid_email|is_unique[member.email]|is_unique[admin.email]',
            'errors' => array(
                'required' => 'email Wajib diisi',
                'is_unique'     => 'email sudah pernah didaftarkan',
            ),
        )
    )







   );


    ?>