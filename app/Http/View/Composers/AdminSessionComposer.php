<?php

namespace App\Http\View\Composers;

use Illuminate\View\View;

class AdminSessionComposer
{
    public function compose(View $view)
    {
        $value = session('admin');
        $view->with('value', $value);
    }
}
