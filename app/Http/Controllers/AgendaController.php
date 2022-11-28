<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAgendaRequest;
use App\Http\Requests\UpdateAgendaRequest;
use App\Models\Agenda;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class AgendaController extends Controller
{
    /**
     * Construtor de AgendaController.
     */
    public function __construct(
        Agenda $agendaModel
    ) {
        $this->agendaModel = $agendaModel;
    }
    /**
     * Listagem de todos os agendas.
     *
     * @return Illuminate\Routing\Route
     */
    public function index()
    {
        $agendas = $this->agendaModel->get();

        return view('agenda.index', compact('agendas'));
    }

    /**
     * Exibição de um determinado agenda.
     *
     * @param  int  $id
     *
     * @return Illuminate\Routing\Route
     */
    public function show($id)
    {
        $agenda = $this->agendaModel->where('id', $id)->first();

        if (!$agenda) {
            return redirect()->route('agenda.index')
                ->with('error', "Não foi possível encontrar [Agenda].");
        }

        return view('agenda.show', compact('agenda'));
    }

    /**
     * Criação de agendas.
     *
     * @param  CreateAgendaRequest  $request
     *
     * @return Illuminate\Routing\Route
     */
    public function store(CreateAgendaRequest $request)
    {
        DB::beginTransaction();
        try {
            $payload = [
                'name' => $request->name,
                'phone' => $request->phone,
                'cellphone' => $request->cellphone,
                'email' => $request->email,
                'address' => $request->street . ', ' . $request->number . ', ' . $request->district,
                'city' => $request->city,
                'state' => $request->state
            ];

            $this->agendaModel->create($payload);
        } catch (\Exception $e) {
            DB::rollback();
            Log::error($e->getMessage());
            return redirect()->route('agenda.index')
                ->with('error', "Não foi possível criar [Agenda].");
        }
        DB::commit();
        return redirect()->route('agenda.index')
            ->with('success', "[Agenda] criada com sucesso.");
    }

    /**
     * Formulário de criação.
     *
     * @return view
     */
    public function create()
    {
        return view('agenda.create');
    }

    /**
     * Atualiza um determinado agenda.
     *
     * @param  UpdateAgendaRequest  $request
     * @param  int  $id
     *
     * @return Illuminate\Routing\Route
     */
    public function update(UpdateAgendaRequest $request, $id)
    {
        DB::beginTransaction();
        try {
            $agenda = $this->agendaModel->where('id', $id)->first();

            if (!$agenda) {
                return redirect()->route('agenda.index')
                    ->with('error', "Não foi possível encontrar [Agenda].");
            }

            $payload = [
                'name' => $request->name,
                'phone' => $request->phone,
                'cellphone' => $request->cellphone,
                'email' => $request->email,
                'address' => $request->street . ', ' . $request->number . ', ' . $request->district,
                'city' => $request->city,
                'state' => $request->state
            ];

            $agenda = $agenda->update($payload);
        } catch (\Exception $e) {
            DB::rollback();
            Log::error($e->getMessage());
            return redirect()->route('agenda.index')
                ->with('error', "Não foi possível atualizar [Agenda].");
        }
        DB::commit();
        return redirect()->route('agenda.index')
            ->with('success', "[Agenda] atualizada com sucesso.");
    }

    /**
     * Formulário de edição de Agenda
     *
     * @param  int $id
     *
     * @return view
     */
    public function edit($id)
    {
        $agenda = $this->agendaModel->where(['id' => $id])->first();

        if (!$agenda) {
            return redirect()->back()
                ->with('error', "Não foi possível encontrar [Agenda].");
        }

        $agenda->address = explode (",", $agenda->address);

        return view('agenda.edit', compact('agenda'));
    }

    /**
     * Deleta um determinado agenda.
     *
     * @param  int  $id
     *
     * @return Illuminate\Routing\Route
     */
    public function destroy($id)
    {
        DB::beginTransaction();
        try {
            $agenda = $this->agendaModel->where('id', $id)->first();

            if (!$agenda) {
                return redirect()->back()
                    ->with('error', "Não foi possível encontrar [Agenda].");
            }

            $agenda = $agenda->delete();
        } catch (\Exception $e) {
            DB::rollback();
            Log::error($e->getMessage());
            return redirect()->back()
                ->with('error', "Não foi possível deletar [Agenda].");
        }
        DB::commit();
        return redirect()->route('agenda.index')
            ->with('success', "[Agenda] deletada com sucesso.");
    }
}
