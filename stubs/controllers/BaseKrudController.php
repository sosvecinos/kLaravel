<?php

namespace App\Http\Controllers;

use Ksoft\Klaravel\Traits\JsonTrait;
use Ksoft\Klaravel\Traits\KrudControllerTrait;

class BaseKrudController extends Controller
{
    use JsonTrait, KrudControllerTrait;

    /**
     * @var ModelRespository
     */
    protected $repo;

    /**
     * @var ModelCreateIteracion
     */
    protected $createInteraction;

    /**
     * @var ModelUpdateInteraction
     */
    protected $updateInteraction;

}
