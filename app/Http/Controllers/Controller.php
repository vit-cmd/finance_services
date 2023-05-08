<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
  /**
   * @OA\Get(
   *      path="/projects",
   *      operationId="getProjectsList",
   *      tags={"Projects"},
   *      summary="Get list of projects",
   *      description="Returns list of projects",
   *      @OA\Response(
   *          response=200,
   *          description="Successful operation",
   *          @OA\JsonContent(ref="#/components/schemas/ProjectResource")
   *       ),
   *      @OA\Response(
   *          response=401,
   *          description="Unauthenticated",
   *      ),
   *      @OA\Response(
   *          response=403,
   *          description="Forbidden"
   *      )
   *     )
   */
  public function index()
  {
      // abort_if(Gate::denies('project_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

      return 'hello';
  }
}
