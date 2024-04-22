<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
 * VerServico Controller
 */
class VerServico extends Controller
{
    /**
     * Handle the incoming request.
     * @param string|null $code
     */
    public function __invoke($code = null)
    {
        if (!$code) {
            echo 'Serviço não encontrado';
            return;
        }

        $descriptionService = "{$code} - Essa é a descrição de(a) {$code}";

        return view('service', compact('descriptionService'));
    }
}
