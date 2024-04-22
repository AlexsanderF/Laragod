<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;

/**
 *
 */
class ClientController extends Controller
{
    /**
     * Lista os clientes do banco de dados
     * @return Application|Factory|View|\Illuminate\Foundation\Application|\Illuminate\View\View
     */
    public function index()
    {
        $clients = Client::get();
        return view('clients.index', compact('clients'));
    }

    /**
     * Mostra o formulário de cadastro de clientes
     * @return Application|Factory|View|\Illuminate\Foundation\Application|\Illuminate\View\View
     */
    public function create()
    {
        return view('clients.create');
    }

    /**
     * Salva as informações no Banco de Dados
     * @param Request $request
     * @return Application|\Illuminate\Foundation\Application|RedirectResponse|Redirector
     */
    public function store(Request $request)
    {
        $request->validate([
            'first_name' => ['required', 'string', 'min:3' ,'max:255'],
            'address' => ['required', 'string', 'min:3' ,'max:255'],
            'description' => ['required', 'string', 'min:3', 'max:255'],
        ]);

        $data = $request->all();
        $new_client = new Client();
        $new_client->name = $data['first_name'];
        $new_client->address = $data['address'];
        $new_client->description = $data['description'];
        $new_client->save();

        return redirect('/clients')->with('success', 'New Client has been added.');
    }
}
