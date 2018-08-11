<?php

namespace Register\Http\Controllers;

use Illuminate\Http\Request;

use Register\Http\Requests;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use Register\Http\Requests\RegisterCreateRequest;
use Register\Http\Requests\RegisterUpdateRequest;
use App\Repositories\RegisterRepository;
use App\Validators\RegisterValidator;

/**
 * Class RegistersController.
 *
 * @package namespace App\Http\Controllers;
 */
class RegistersController extends Controller
{
    /**
     * @var RegisterRepository
     */
    protected $repository;

    /**
     * @var RegisterValidator
     */
    protected $validator;

    /**
     * RegistersController constructor.
     *
     * @param RegisterRepository $repository
     * @param RegisterValidator $validator
     */
    public function __construct(RegisterRepository $repository, RegisterValidator $validator)
    {
        $this->repository = $repository;
        $this->validator  = $validator;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->repository->pushCriteria(app('Prettus\Repository\Criteria\RequestCriteria'));
        $registers = $this->repository->all();

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $registers,
            ]);
        }

        return view('registers.index', compact('registers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  RegisterCreateRequest $request
     *
     * @return \Illuminate\Http\Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function store(RegisterCreateRequest $request)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_CREATE);

            $register = $this->repository->create($request->all());

            $response = [
                'message' => 'Register created.',
                'data'    => $register->toArray(),
            ];

            if ($request->wantsJson()) {

                return response()->json($response);
            }

            return redirect()->back()->with('message', $response['message']);
        } catch (ValidatorException $e) {
            if ($request->wantsJson()) {
                return response()->json([
                    'error'   => true,
                    'message' => $e->getMessageBag()
                ]);
            }

            return redirect()->back()->withErrors($e->getMessageBag())->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $register = $this->repository->find($id);

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $register,
            ]);
        }

        return view('registers.show', compact('register'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $register = $this->repository->find($id);

        return view('registers.edit', compact('register'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  RegisterUpdateRequest $request
     * @param  string            $id
     *
     * @return Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function update(RegisterUpdateRequest $request, $id)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_UPDATE);

            $register = $this->repository->update($request->all(), $id);

            $response = [
                'message' => 'Register updated.',
                'data'    => $register->toArray(),
            ];

            if ($request->wantsJson()) {

                return response()->json($response);
            }

            return redirect()->back()->with('message', $response['message']);
        } catch (ValidatorException $e) {

            if ($request->wantsJson()) {

                return response()->json([
                    'error'   => true,
                    'message' => $e->getMessageBag()
                ]);
            }

            return redirect()->back()->withErrors($e->getMessageBag())->withInput();
        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleted = $this->repository->delete($id);

        if (request()->wantsJson()) {

            return response()->json([
                'message' => 'Register deleted.',
                'deleted' => $deleted,
            ]);
        }

        return redirect()->back()->with('message', 'Register deleted.');
    }
}
