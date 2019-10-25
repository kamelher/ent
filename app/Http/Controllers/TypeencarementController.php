<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTypeencarementRequest;
use App\Http\Requests\UpdateTypeencarementRequest;
use App\Repositories\TypeencarementRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class TypeencarementController extends AppBaseController
{
    /** @var  TypeencarementRepository */
    private $typeencarementRepository;

    public function __construct(TypeencarementRepository $typeencarementRepo)
    {
        $this->typeencarementRepository = $typeencarementRepo;
    }

    /**
     * Display a listing of the Typeencarement.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $typeencarements = $this->typeencarementRepository->all();

        return view('typeencarements.index')
            ->with('typeencarements', $typeencarements);
    }

    /**
     * Show the form for creating a new Typeencarement.
     *
     * @return Response
     */
    public function create()
    {
        return view('typeencarements.create');
    }

    /**
     * Store a newly created Typeencarement in storage.
     *
     * @param CreateTypeencarementRequest $request
     *
     * @return Response
     */
    public function store(CreateTypeencarementRequest $request)
    {
        $input = $request->all();

        $typeencarement = $this->typeencarementRepository->create($input);

        Flash::success('Typeencarement saved successfully.');

        return redirect(route('typeencarements.index'));
    }

    /**
     * Display the specified Typeencarement.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $typeencarement = $this->typeencarementRepository->find($id);

        if (empty($typeencarement)) {
            Flash::error('Typeencarement not found');

            return redirect(route('typeencarements.index'));
        }

        return view('typeencarements.show')->with('typeencarement', $typeencarement);
    }

    /**
     * Show the form for editing the specified Typeencarement.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $typeencarement = $this->typeencarementRepository->find($id);

        if (empty($typeencarement)) {
            Flash::error('Typeencarement not found');

            return redirect(route('typeencarements.index'));
        }

        return view('typeencarements.edit')->with('typeencarement', $typeencarement);
    }

    /**
     * Update the specified Typeencarement in storage.
     *
     * @param int $id
     * @param UpdateTypeencarementRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTypeencarementRequest $request)
    {
        $typeencarement = $this->typeencarementRepository->find($id);

        if (empty($typeencarement)) {
            Flash::error('Typeencarement not found');

            return redirect(route('typeencarements.index'));
        }

        $typeencarement = $this->typeencarementRepository->update($request->all(), $id);

        Flash::success('Typeencarement updated successfully.');

        return redirect(route('typeencarements.index'));
    }

    /**
     * Remove the specified Typeencarement from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $typeencarement = $this->typeencarementRepository->find($id);

        if (empty($typeencarement)) {
            Flash::error('Typeencarement not found');

            return redirect(route('typeencarements.index'));
        }

        $this->typeencarementRepository->delete($id);

        Flash::success('Typeencarement deleted successfully.');

        return redirect(route('typeencarements.index'));
    }
}
