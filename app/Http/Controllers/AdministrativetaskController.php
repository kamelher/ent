<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAdministrativetaskRequest;
use App\Http\Requests\UpdateAdministrativetaskRequest;
use App\Repositories\AdministrativetaskRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class AdministrativetaskController extends AppBaseController
{
    /** @var  AdministrativetaskRepository */
    private $administrativetaskRepository;

    public function __construct(AdministrativetaskRepository $administrativetaskRepo)
    {
        $this->administrativetaskRepository = $administrativetaskRepo;
    }

    /**
     * Display a listing of the Administrativetask.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $administrativetasks = $this->administrativetaskRepository->all();

        return view('administrativetasks.index')
            ->with('administrativetasks', $administrativetasks);
    }

    /**
     * Show the form for creating a new Administrativetask.
     *
     * @return Response
     */
    public function create()
    {
        return view('administrativetasks.create');
    }

    /**
     * Store a newly created Administrativetask in storage.
     *
     * @param CreateAdministrativetaskRequest $request
     *
     * @return Response
     */
    public function store(CreateAdministrativetaskRequest $request)
    {
        $input = $request->all();

        $administrativetask = $this->administrativetaskRepository->create($input);

        Flash::success('Administrativetask saved successfully.');

        return redirect(route('administrativetasks.index'));
    }

    /**
     * Display the specified Administrativetask.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $administrativetask = $this->administrativetaskRepository->find($id);

        if (empty($administrativetask)) {
            Flash::error('Administrativetask not found');

            return redirect(route('administrativetasks.index'));
        }

        return view('administrativetasks.show')->with('administrativetask', $administrativetask);
    }

    /**
     * Show the form for editing the specified Administrativetask.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $administrativetask = $this->administrativetaskRepository->find($id);

        if (empty($administrativetask)) {
            Flash::error('Administrativetask not found');

            return redirect(route('administrativetasks.index'));
        }

        return view('administrativetasks.edit')->with('administrativetask', $administrativetask);
    }

    /**
     * Update the specified Administrativetask in storage.
     *
     * @param int $id
     * @param UpdateAdministrativetaskRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAdministrativetaskRequest $request)
    {
        $administrativetask = $this->administrativetaskRepository->find($id);

        if (empty($administrativetask)) {
            Flash::error('Administrativetask not found');

            return redirect(route('administrativetasks.index'));
        }

        $administrativetask = $this->administrativetaskRepository->update($request->all(), $id);

        Flash::success('Administrativetask updated successfully.');

        return redirect(route('administrativetasks.index'));
    }

    /**
     * Remove the specified Administrativetask from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $administrativetask = $this->administrativetaskRepository->find($id);

        if (empty($administrativetask)) {
            Flash::error('Administrativetask not found');

            return redirect(route('administrativetasks.index'));
        }

        $this->administrativetaskRepository->delete($id);

        Flash::success('Administrativetask deleted successfully.');

        return redirect(route('administrativetasks.index'));
    }
}
