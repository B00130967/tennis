<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatecourtratingRequest;
use App\Http\Requests\UpdatecourtratingRequest;
use App\Repositories\courtratingRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class courtratingController extends AppBaseController
{
    /** @var  courtratingRepository */
    private $courtratingRepository;

    public function __construct(courtratingRepository $courtratingRepo)
    {
        $this->courtratingRepository = $courtratingRepo;
    }


    public function ratecourt($courtid)
    {
    return view('courtratings.ratecourt')->with('courtid',$courtid);
    }

    /**
     * Display a listing of the courtrating.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $courtratings = $this->courtratingRepository->all();

        return view('courtratings.index')
            ->with('courtratings', $courtratings);
    }

    /**
     * Show the form for creating a new courtrating.
     *
     * @return Response
     */
    public function create()
    {
        return view('courtratings.create');
    }

    /**
     * Store a newly created courtrating in storage.
     *
     * @param CreatecourtratingRequest $request
     *
     * @return Response
     */
    public function store(CreatecourtratingRequest $request)
    {
        $input = $request->all();

        $courtrating = $this->courtratingRepository->create($input);

        Flash::success('Courtrating saved successfully.');

        return redirect(route('courtratings.index'));
    }

    /**
     * Display the specified courtrating.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $courtrating = $this->courtratingRepository->find($id);

        if (empty($courtrating)) {
            Flash::error('Courtrating not found');

            return redirect(route('courtratings.index'));
        }

        return view('courtratings.show')->with('courtrating', $courtrating);
    }

    /**
     * Show the form for editing the specified courtrating.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $courtrating = $this->courtratingRepository->find($id);

        if (empty($courtrating)) {
            Flash::error('Courtrating not found');

            return redirect(route('courtratings.index'));
        }

        return view('courtratings.edit')->with('courtrating', $courtrating);
    }

    /**
     * Update the specified courtrating in storage.
     *
     * @param int $id
     * @param UpdatecourtratingRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatecourtratingRequest $request)
    {
        $courtrating = $this->courtratingRepository->find($id);

        if (empty($courtrating)) {
            Flash::error('Courtrating not found');

            return redirect(route('courtratings.index'));
        }

        $courtrating = $this->courtratingRepository->update($request->all(), $id);

        Flash::success('Courtrating updated successfully.');

        return redirect(route('courtratings.index'));
    }

    /**
     * Remove the specified courtrating from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $courtrating = $this->courtratingRepository->find($id);

        if (empty($courtrating)) {
            Flash::error('Courtrating not found');

            return redirect(route('courtratings.index'));
        }

        $this->courtratingRepository->delete($id);

        Flash::success('Courtrating deleted successfully.');

        return redirect(route('courtratings.index'));
    }
}
