<?php

namespace App\Http\Controllers\Admin;

use Inertia\Inertia;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Services\Admin\CategoryAdminServices;

class CategoryAdminController extends Controller
{
    protected $categoryAdminServices;

    public function __construct(CategoryAdminServices $categoryAdminServices)
    {
        $this->categoryAdminServices = $categoryAdminServices;
    }

    public function index()
    {
        $categories = $this->categoryAdminServices->getAllCategories();

        return Inertia::render('Admin/categories/Index', [
            'categories' => $categories,
        ]);
    }

    // public function find(string $id)
    // {
    //     $category = $this->categoryAdminServices->getCategoryById($id);

    //     return Inertia::render('Admin/categories/Index', [
    //         'categories' => $category,
    //     ]);
    // }

    public function store(CategoryRequest $request)
    {
        $data = $request->validated();

        $this->categoryAdminServices->createCategory($data);
    }

    public function update(CategoryRequest $request, string $id)
    {
        $data = $request->validated();

        $this->categoryAdminServices->updateCategory($id, $data);
    }

    public function delete(string $id)
    {
        $this->categoryAdminServices->deleteCategory($id);
    }
}
