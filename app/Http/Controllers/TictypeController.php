<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTictypeRequest;
use App\Http\Requests\UpdateTictypeRequest;
use App\Repositories\TictypeRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class TictypeController extends AppBaseController
{
    /** @var  TictypeRepository */
    private $tictypeRepository;

    public function __construct(TictypeRepository $tictypeRepo)
    {
        $this->tictypeRepository = $tictypeRepo;
    }

    /**
     * Display a listing of the Tictype.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $tictypes = $this->tictypeRepository->all();

        return view('tictypes.index')
            ->with('tictypes', $tictypes);
    }

    /**
     * Show the form for creating a new Tictype.
     *
     * @return Response
     */
    public function create()
    {
        return view('tictypes.create');
    }

    /**
     * Store a newly created Tictype in storage.
     *
     * @param CreateTictypeRequest $request
     *
     * @return Response
     */
    public function store(CreateTictypeRequest $request)
    {
        $input = $request->all();

        $tictype = $this->tictypeRepository->create($input);

        Flash::success('Tictype saved successfully.');

        return redirect(route('tictypes.index'));
    }

    /**
     * Display the specified Tictype.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tictype = $this->tictypeRepository->find($id);

        if (empty($tictype)) {
            Flash::error('Tictype not found');

            return redirect(route('tictypes.index'));
        }

        return view('tictypes.show')->with('tictype', $tictype);
    }

    /**
     * Show the form for editing the specified Tictype.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tictype = $this->tictypeRepository->find($id);

        if (empty($tictype)) {
            Flash::error('Tictype not found');

            return redirect(route('tictypes.index'));
        }

        return view('tictypes.edit')->with('tictype', $tictype);
    }

    /**
     * Update the specified Tictype in storage.
     *
     * @param int $id
     * @param UpdateTictypeRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTictypeRequest $request)
    {
        $tictype = $this->tictypeRepository->find($id);

        if (empty($tictype)) {
            Flash::error('Tictype not found');

            return redirect(route('tictypes.index'));
        }

        $tictype = $this->tictypeRepository->update($request->all(), $id);

        Flash::success('Tictype updated successfully.');

        return redirect(route('tictypes.index'));
    }

    /**
     * Remove the specified Tictype from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tictype = $this->tictypeRepository->find($id);

        if (empty($tictype)) {
            Flash::error('Tictype not found');

            return redirect(route('tictypes.index'));
        }

        $this->tictypeRepository->delete($id);

        Flash::success('Tictype deleted successfully.');

        return redirect(route('tictypes.index'));
    }
}
