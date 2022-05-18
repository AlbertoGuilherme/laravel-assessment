<?php

namespace App\Services;

use App\Models\Tour;
use App\Repositories\Contracts\TourRepositoryInterface;

class TourService
{
    private $repository;


    public function __construct(TourRepositoryInterface $repository)
    {

        $this->repository = $repository;
    }

    public function getAllTours(int $per_page, int $offset)
    {
        return $this->repository->getAllTours($per_page, $offset);
    }

    public function getTourById($id)
    {
        return $this->repository->getTourById($id);
    }

    public function createNewTour(array $data)
    {
        return $this->repository->createNewTour($data);
    }

    public function updateTour(array $data, $id)
    {
        return $this->repository->updateTour($data, $id);
    }

    public function deleteTour(array $data, $id)
    {
        return $this->repository->deleteTour($data, $id);
    }

}
