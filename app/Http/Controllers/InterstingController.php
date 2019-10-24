<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateInterstingRequest;
use App\Http\Requests\UpdateInterstingRequest;
use App\Repositories\InterstingRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class InterstingController extends AppBaseController
{
    /** @var  InterstingRepository */
    private $interstingRepository;

    public function __construct(InterstingRepository $interstingRepo)
    {
        $this->interstingRepository = $interstingRepo;
    }

    /**
     * Display a listing of the Intersting.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $interstings = $this->interstingRepository->all();

        return view('interstings.index')
            ->with('interstings', $interstings);
    }

    /**
     * Show the form for creating a new Intersting.
     *
     * @return Response
     */
    public function create()
    {
        return view('interstings.create');
    }

    /**
     * Store a newly created Intersting in storage.
     *
     * @param CreateInterstingRequest $request
     *
     * @return Response
     */
    public function store(CreateInterstingRequest $request)
    {
        $input = $request->all();

        $intersting = $this->interstingRepository->create($input);

        Flash::success('Intersting saved successfully.');

        return redirect(route('interstings.index'));
    }

    /**
     * Display the specified Intersting.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $intersting = $this->interstingRepository->find($id);

        if (empty($intersting)) {
            Flash::error('Intersting not found');

            return redirect(route('interstings.index'));
        }

        return view('interstings.show')->with('intersting', $intersting);
    }

    /**
     * Show the form for editing the specified Intersting.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $intersting = $this->interstingRepository->find($id);

        if (empty($intersting)) {
            Flash::error('Intersting not found');

            return redirect(route('interstings.index'));
        }

        return view('interstings.edit')->with('intersting', $intersting);
    }

    /**
     * Update the specified Intersting in storage.
     *
     * @param int $id
     * @param UpdateInterstingRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateInterstingRequest $request)
    {
        $intersting = $this->interstingRepository->find($id);

        if (empty($intersting)) {
            Flash::error('Intersting not found');

            return redirect(route('interstings.index'));
        }

        $intersting = $this->interstingRepository->update($request->all(), $id);

        Flash::success('Intersting updated successfully.');

        return redirect(route('interstings.index'));
    }

    /**
     * Remove the specified Intersting from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $intersting = $this->interstingRepository->find($id);

        if (empty($intersting)) {
            Flash::error('Intersting not found');

            return redirect(route('interstings.index'));
        }

        $this->interstingRepository->delete($id);

        Flash::success('Intersting deleted successfully.');

        return redirect(route('interstings.index'));
    }
}
