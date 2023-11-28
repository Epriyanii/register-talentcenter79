<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Validator;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register');
    }

    /**
     * Store a new blog post.
     */
    public function store(Request $request): RedirectResponse
    {
        $message = [
            'firstName'   => 'required|max:100',
            'lastName'   => 'required|max:100',
            'email' => 'required|email:dns|max:100',
            'password' => 'required|min:8|max:50',
            'passwordAgain' => 'required|same:password|min:8|max:50',
            'dateBirth' => 'required|custom_date_format',
            'agencyName' => 'required|min:1|max:100',
            'agencyAddress' => 'required|min:1|max:255',
            'slct' => 'required|in:1,2,3,4,5,6,7,8,9,10'
        ];
    
        $customMessages = [
            'firstName' => [
                'required' => 'kolom nama tidak boleh kosong',
                'max' => 'Panjang kolom tidak boleh lebih dari 100'
            ],

            'lastName' => [
                'required' => 'kolom nama tidak boleh kosong',
                'max' => 'Panjang kolom tidak boleh lebih dari 100'
            ],

            'email' => [
                'required' => 'kolom email tidak boleh kosong',
                'email' => 'Format kolom email tidak sesuai',
                'max' => 'Panjang kolom email tidak boleh lebih dari 100'
            ],

            'password' => [
                'required' => 'kolom password tidak boleh kosong',
                'min' => 'Password tidak memenuhi kriteria minimal',
                'max' => 'Password tidak memenuhi kriteria maksimal'
            ],

            'passwordAgain' => [
                'required' => 'kolom password ulang tidak boleh kosong',
                'same' => 'Password tidak sesuai',
                'min' => 'Password tidak memenuhi kriteria minimal',
                'max' => 'Password tidak memenuhi kriteria maksimal'
            ],

            'dateBirth' => [
                'required' => 'kolom tanggal lahir tidak boleh kosong',
                'custom_date_format' => 'Format kolom birth date tidak sesuai'
            ],

            'agencyName' => [
                'required' => 'kolom nama agensi tidak boleh kosong',
                'max' => 'Panjang kolom nama agensi tidak boleh lebih dari 100'
            ],

            'agencyAddress' => [
                'required' => 'kolom alamat agensi tidak boleh kosong',
                'max' => 'Panjang kolom alamat agensi tidak boleh lebih dari 255'
            ],

            'slct' => [
                'required' => 'kolom posisi tidak boleh kosong'
            ],
            
        ];
    
        $this->validate($request, $message, $customMessages);
        
        return redirect('/register')->with('success', 'Data Anda berhasil disimpan!');
    
    }

}
