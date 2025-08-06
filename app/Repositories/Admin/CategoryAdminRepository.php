<?php

namespace App\Repositories\Admin;

use App\Models\Category;

class CategoryAdminRepository
{
    public function all()
    {
        return Category::all();
    }

    public function find($id)
    {
        return Category::find($id);
    }

    public function create(array $data)
    {
        return Category::create($data);
    }
    
    public function update($id, array $data)
    {
        $category = $this->find($id);
        if ($category) {
            $category->update($data);
            return $category;
        }
        return null;
    }

    public function delete($id)
    {
        $category = $this->find($id);
        if ($category) {
            $category->delete();
            return true;
        }
        return false;
    }
}
