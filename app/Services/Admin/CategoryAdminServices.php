<?php

namespace App\Services\Admin;

use App\Repositories\Admin\CategoryAdminRepository;

class CategoryAdminServices
{
    protected $categoryAdminRepository;

    public function __construct(CategoryAdminRepository $categoryAdminRepository)
    {
        $this->categoryAdminRepository = $categoryAdminRepository;
    }

    public function getAllCategories()
    {
        return $this->categoryAdminRepository->all();
    }

    public function getCategoryById($id)
    {
        return $this->categoryAdminRepository->find($id);
    }   

    public function createCategory(array $data)
    {
        return $this->categoryAdminRepository->create($data);
    }

    public function updateCategory($id, array $data)
    {
        return $this->categoryAdminRepository->update($id, $data);
    }

    public function deleteCategory($id)
    {
        return $this->categoryAdminRepository->delete($id);
    }
}
