<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateResearchprojectRequest;
use App\Http\Requests\UpdateResearchprojectRequest;
use App\Repositories\ResearchprojectRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class ResearchprojectController extends AppBaseController
{
    /** @var  ResearchprojectRepository */
    private $researchprojectRepository;

    public function __construct(ResearchprojectRepository $researchprojectRepo)
    {
        $this->researchprojectRepository = $researchprojectRepo;
    }

    /**
     * Display a listing of the Researchproject.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $researchprojects = $this->researchprojectRepository->all();

        return view('researchprojects.index')
            ->with('researchprojects', $researchprojects);
    }

    /**
     * Show the form for creating a new Researchproject.
     *
     * @return Response
     */
    public function create()
    {
        return view('researchprojects.create');
    }

    /**
     * Store a newly created Researchproject in storage.
     *
     * @param CreateResearchprojectRequest $request
     *
     * @return Response
     */
    public function store(CreateResearchprojectRequest $request)
    {
        $input = $request->all();

        $researchproject = $this->researchprojectRepository->create($input);

        Flash::success('Researchproject saved successfully.');

        return redirect(route('researchprojects.index'));
    }

    /**
     * Display the specified Researchproject.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $researchproject = $this->researchprojectRepository->find($id);

        if (empty($researchproject)) {
            Flash::error('Researchproject not found');

            return redirect(route('researchprojects.index'));
        }

        return view('researchprojects.show')->with('researchproject', $researchproject);
    }

    /**
     * Show the form for editing the specified Researchproject.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $researchproject = $this->researchprojectRepository->find($id);

        if (empty($researchproject)) {
            Flash::error('Researchproject not found');

            return redirect(route('researchprojects.index'));
        }

        return view('researchprojects.edit')->with('researchproject', $researchproject);
    }

    /**
     * Update the specified Researchproject in storage.
     *
     * @param int $id
     * @param UpdateResearchprojectRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateResearchprojectRequest $request)
    {
        $researchproject = $this->researchprojectRepository->find($id);

        if (empty($researchproject)) {
            Flash::error('Researchproject not found');

            return redirect(route('researchprojects.index'));
        }

        $researchproject = $this->researchprojectRepository->update($request->all(), $id);

        Flash::success('Researchproject updated successfully.');

        return redirect(route('researchprojects.index'));
    }

    /**
     * Remove the specified Researchproject from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $researchproject = $this->researchprojectRepository->find($id);

        if (empty($researchproject)) {
            Flash::error('Researchproject not found');

            return redirect(route('researchprojects.index'));
        }

        $this->researchprojectRepository->delete($id);

        Flash::success('Researchproject deleted successfully.');

        return redirect(route('researchprojects.index'));
    }
}
