<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePosttypeRequest;
use App\Http\Requests\UpdatePosttypeRequest;
use App\Repositories\PosttypeRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class PosttypeController extends AppBaseController
{
    /** @var  PosttypeRepository */
    private $posttypeRepository;

    public function __construct(PosttypeRepository $posttypeRepo)
    {
        $this->posttypeRepository = $posttypeRepo;
    }

    /**
     * Display a listing of the Posttype.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $posttypes = $this->posttypeRepository->all();

        return view('posttypes.index')
            ->with('posttypes', $posttypes);
    }

    /**
     * Show the form for creating a new Posttype.
     *
     * @return Response
     */
    public function create()
    {
        return view('posttypes.create');
    }

    /**
     * Store a newly created Posttype in storage.
     *
     * @param CreatePosttypeRequest $request
     *
     * @return Response
     */
    public function store(CreatePosttypeRequest $request)
    {
        $input = $request->all();

        $posttype = $this->posttypeRepository->create($input);

        Flash::success('Posttype saved successfully.');

        return redirect(route('posttypes.index'));
    }

    /**
     * Display the specified Posttype.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $posttype = $this->posttypeRepository->find($id);

        if (empty($posttype)) {
            Flash::error('Posttype not found');

            return redirect(route('posttypes.index'));
        }

        return view('posttypes.show')->with('posttype', $posttype);
    }

    /**
     * Show the form for editing the specified Posttype.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $posttype = $this->posttypeRepository->find($id);

        if (empty($posttype)) {
            Flash::error('Posttype not found');

            return redirect(route('posttypes.index'));
        }

        return view('posttypes.edit')->with('posttype', $posttype);
    }

    /**
     * Update the specified Posttype in storage.
     *
     * @param int $id
     * @param UpdatePosttypeRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePosttypeRequest $request)
    {
        $posttype = $this->posttypeRepository->find($id);

        if (empty($posttype)) {
            Flash::error('Posttype not found');

            return redirect(route('posttypes.index'));
        }

        $posttype = $this->posttypeRepository->update($request->all(), $id);

        Flash::success('Posttype updated successfully.');

        return redirect(route('posttypes.index'));
    }

    /**
     * Remove the specified Posttype from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $posttype = $this->posttypeRepository->find($id);

        if (empty($posttype)) {
            Flash::error('Posttype not found');

            return redirect(route('posttypes.index'));
        }

        $this->posttypeRepository->delete($id);

        Flash::success('Posttype deleted successfully.');

        return redirect(route('posttypes.index'));
    }
}
