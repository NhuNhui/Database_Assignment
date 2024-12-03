<?php

class Category extends Controller
{
    function index(): void
    {
        $category = $this->model_query("CategoryModel");
        $this->view_render("layouts/admin",
            [
                "admin_page" => "admin/category/index",
                "admin_header" => "shared/admin_header",
                "admin_sidebar" => "shared/admin_sidebar",
                "category" => $category->fetch_all_category()
            ]
        );
    }

    function new(): void
    {
        $category = $this->model_query("CategoryModel");
        $this->view_render("layouts/admin",
            [
                "admin_page" => "admin/category/new",
                "admin_header" => "shared/admin_header",
                "admin_sidebar" => "shared/admin_sidebar",
                "category_model" => $category
            ]
        );
    }

    function edit($id): void
    {
        $category = $this->model_query("CategoryModel");
        $this->view_render("layouts/admin",
            [
                "admin_page" => "admin/category/edit",
                "admin_header" => "shared/admin_header",
                "admin_sidebar" => "shared/admin_sidebar",
                "category" => $category->get_category($id),
                "id" => $id,
                "category_model" => $category
            ]
        );
    }

    function delete($id): void
    {
        $category = $this->model_query("CategoryModel");
        $this->view_render("layouts/admin",
            [
                "admin_page" => "admin/category/delete",
                "admin_header" => "shared/admin_header",
                "admin_sidebar" => "shared/admin_sidebar",
                "category" => $category->get_category($id),
                "id" => $id,
                "category_model" => $category
            ]
        );
    }
}
