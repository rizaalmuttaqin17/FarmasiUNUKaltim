<?php

namespace App\Http\Controllers;

use App\DataTables\ProgramStudiDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateProgramStudiRequest;
use App\Http\Requests\UpdateProgramStudiRequest;
use App\Repositories\ProgramStudiRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class ProgramStudiController extends AppBaseController
{
    /** @var ProgramStudiRepository $programStudiRepository*/
    private $programStudiRepository;

    public function __construct(ProgramStudiRepository $programStudiRepo)
    {
        $this->programStudiRepository = $programStudiRepo;
    }

    /**
     * Display a listing of the ProgramStudi.
     *
     * @param ProgramStudiDataTable $programStudiDataTable
     *
     * @return Response
     */
    public function index(ProgramStudiDataTable $programStudiDataTable)
    {
        return $programStudiDataTable->render('program_studis.index');
    }

    /**
     * Show the form for creating a new ProgramStudi.
     *
     * @return Response
     */
    public function create()
    {
        return view('program_studis.create');
    }

    /**
     * Store a newly created ProgramStudi in storage.
     *
     * @param CreateProgramStudiRequest $request
     *
     * @return Response
     */
    public function store(CreateProgramStudiRequest $request)
    {
        $input = $request->all();

        $programStudi = $this->programStudiRepository->create($input);

        Flash::success('Program Studi saved successfully.');

        return redirect(route('programStudis.index'));
    }

    /**
     * Display the specified ProgramStudi.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $programStudi = $this->programStudiRepository->find($id);

        if (empty($programStudi)) {
            Flash::error('Program Studi not found');

            return redirect(route('programStudis.index'));
        }

        return view('program_studis.show')->with('programStudi', $programStudi);
    }

    /**
     * Show the form for editing the specified ProgramStudi.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $programStudi = $this->programStudiRepository->find($id);

        if (empty($programStudi)) {
            Flash::error('Program Studi not found');

            return redirect(route('programStudis.index'));
        }

        return view('program_studis.edit')->with('programStudi', $programStudi);
    }

    /**
     * Update the specified ProgramStudi in storage.
     *
     * @param int $id
     * @param UpdateProgramStudiRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateProgramStudiRequest $request)
    {
        $programStudi = $this->programStudiRepository->find($id);

        if (empty($programStudi)) {
            Flash::error('Program Studi not found');

            return redirect(route('programStudis.index'));
        }

        $programStudi = $this->programStudiRepository->update($request->all(), $id);

        Flash::success('Program Studi updated successfully.');

        return redirect(route('programStudis.index'));
    }

    /**
     * Remove the specified ProgramStudi from storage.
     *
     * @param int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $programStudi = $this->programStudiRepository->find($id);

        if (empty($programStudi)) {
            Flash::error('Program Studi not found');

            return redirect(route('programStudis.index'));
        }

        $this->programStudiRepository->delete($id);

        Flash::success('Program Studi deleted successfully.');

        return redirect(route('programStudis.index'));
    }
}
