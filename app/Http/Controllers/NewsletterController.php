<?php

namespace App\Http\Controllers;


class NewsletterController extends Controller
{

    /**
     * @author Kapol Brondon <kapolw@gmail.com>
     * @KadonWills
     * saves email address in newsletter table
     */
    public  function add(Request $request)
    {
        dd($request->email);
        Newsletter::create($request->get('email'));

    }
}
