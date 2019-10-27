<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTicusageRequest;
use App\Http\Requests\UpdateTicusageRequest;
use App\Repositories\TicusageRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use App\Models\Tictype;
use Flash;
use Response;

class TicusageController extends AppBaseController
{
    /** @var  TicusageRepository */
    private $ticusageRepository;

    public function __construct(TicusageRepository $ticusageRepo)
    {
        $this->ticusageRepository = $ticusageRepo;
    }

    /**
     * Display a listing of the Ticusage.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $ticusages = $this->ticusageRepository->all();

        return view('ticusages.index')
            ->with('ticusages', $ticusages);
    }

    /**
     * Show the form for creating a new Ticusage.
     *
     * @return Response
     */
    public function create()
    {
        $tictypeItems = Tictype::select('ticname','id')->get();
        $tictypeItems = $tictypeItems->pluck('id','ticname');
        dd($tictypeItems);
        return view('ticusages.create',compact('tictypeItems'));
    }

    /**
     * Store a newly created Ticusage in storage.
     *
     * @param CreateTicusageRequest $request
     *
     * @return Response
     */
    public function store(CreateTicusageRequest $request)
    {
        $input = $request->all();

        $ticusage = $this->ticusageRepository->create($input);

        Flash::success('Ticusage saved successfully.');

        return redirect(route('ticusages.index'));
    }

    /**
     * Display the specified Ticusage.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $ticusage = $this->ticusageRepository->find($id);

        if (empty($ticusage)) {
            Flash::error('Ticusage not found');

            return redirect(route('ticusages.index'));
        }

        return view('ticusages.show')->with('ticusage', $ticusage);
    }

    /**
     * Show the form for editing the specified Ticusage.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $ticusage = $this->ticusageRepository->find($id);

        if (empty($ticusage)) {
            Flash::error('Ticusage not found');

            return redirect(route('ticusages.index'));
        }

        return view('ticusages.edit')->with('ticusage', $ticusage);
    }

    /**
     * Update the specified Ticusage in storage.
     *
     * @param int $id
     * @param UpdateTicusageRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTicusageRequest $request)
    {
        $ticusage = $this->ticusageRepository->find($id);

        if (empty($ticusage)) {
            Flash::error('Ticusage not found');

            return redirect(route('ticusages.index'));
        }

        $ticusage = $this->ticusageRepository->update($request->all(), $id);

        Flash::success('Ticusage updated successfully.');

        return redirect(route('ticusages.index'));
    }

    /**
     * Remove the specified Ticusage from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $ticusage = $this->ticusageRepository->find($id);

        if (empty($ticusage)) {
            Flash::error('Ticusage not found');

            return redirect(route('ticusages.index'));
        }

        $this->ticusageRepository->delete($id);

        Flash::success('Ticusage deleted successfully.');

        return redirect(route('ticusages.index'));
    }
}
