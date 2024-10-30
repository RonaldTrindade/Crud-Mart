<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estoque; // Certifique-se de que o modelo Estoque está importado
use App\Models\EstoqueModel;

class EstoqueController extends Controller
{
    /**
     * Exibe a tela de gerenciamento de estoque.
     */
    public function telaEstoque() {
        $estoques = EstoqueModel::all(); // Carrega todos os estoques
        return view('estoque.telaDeEstoque', compact('estoques')); // Passa $estoques para a view
    }

    /**
     * Exibe um estoque específico com base no ID.
     */
    public function show($id) {
        $estoque = EstoqueModel::find($id);

        if (!$estoque) {
            return redirect()->route('estoque.telaEstoque')->with('error', 'Estoque não encontrado.');
        }

        return view('estoque.show', compact('estoque'));
    }

    /**
     * Exibe o formulário para criar um novo estoque.
     */
    public function create() {
        return view('estoque.create');
    }

    /**
     * Armazena um novo estoque no banco de dados.
     */
    public function store(Request $request) {
        $request->validate([
            'descricao' => 'required|string|max:255',
            'quantidadeDeProdutos' => 'required|integer|min:1'
        ]);

        EstoqueModel::create([
            'descricao' => $request->descricao,
            'quantidadeDeProdutos' => $request->quantidadeDeProdutos
        ]);

        return redirect()->route('estoque.telaEstoque')->with('success', 'Estoque criado com sucesso!');
    }

    /**
     * Exibe o formulário para editar um estoque específico.
     */
    public function edit($id) {
        $estoque = EstoqueModel::find($id);

        if (!$estoque) {
            return redirect()->route('estoque.telaEstoque')->with('error', 'Estoque não encontrado.');
        }

        return view('estoque.edit', compact('estoque'));
    }

    /**
     * Atualiza um estoque específico no banco de dados.
     */
    public function update(Request $request, $id) {
        $estoque = EstoqueModel::find($id);

        if (!$estoque) {
            return redirect()->route('estoque.telaEstoque')->with('error', 'Estoque não encontrado.');
        }

        $request->validate([
            'descricao' => 'required|string|max:255',
            'quantidadeDeProdutos' => 'required|integer|min:1'
        ]);

        $estoque->update([
            'descricao' => $request->descricao,
            'quantidadeDeProdutos' => $request->quantidadeDeProdutos
        ]);

        return redirect()->route('estoque.telaEstoque')->with('success', 'Estoque atualizado com sucesso!');
    }

    /**
     * Remove um estoque específico do banco de dados.
     */
    public function destroy($id) {
        $estoque = EstoqueModel::find($id);

        if (!$estoque) {
            return redirect()->route('estoque.telaEstoque')->with('error', 'Estoque não encontrado.');
        }

        $estoque->delete();

        return redirect()->route('estoque.telaEstoque')->with('success', 'Estoque excluído com sucesso!');
    }
}
