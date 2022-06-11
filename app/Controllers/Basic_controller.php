<?php

namespace App\Controllers;

// models
//use App\Models\Users;
use App\Models\Products;
use App\Models\Categories;

class Basic_controller extends BaseController
{
    public function inicio()
    {
        $Product_model = new Products($db);
        /*
        $products_matrix = $Product_model->findAll();
        $products_orders = array();
        foreach ($products_matrix as $key => $value) {
            if ($value["is_visible"] === "1") {
                $products_orders[$value["id_category"]][] = [
                    "name" => $value["name"],
                    "description" => $value["description"],
                    "price" => $value["price"],
                    "url_img" => $value["url_img"],
                ];
            }
        }
        */

        $products_matrix = $Product_model->where("is_visible", "1")->findAll();

        // exit(var_dump($products_orders));

        $data = [
            "products" => $products_matrix,
        ];
        return view('menu', $data);
    }

    public function render_login()
    {
        //$session = \Config\Services::session();

        return view('login_admin');
    }

    public function login()
    {
        $request = \Config\Services::request();

        $username = $request->getPost("username");
        $password = $request->getPost("password");
        //exit(var_dump($username, $password));

        if ($username === "admin" && $password === "sonis123") {
            $data = [
                "certificado" => true,
            ];
            $this->session->set($data);
            return redirect()->to("dashboard");
        } else {
            return redirect()->to("/");
        }

        if (true) {
            return redirect()->to('/inicio');
        } else {
            return redirect()->back();
        }
    }

    public function render_dashboard()
    {
        return view('dashoboard');
    }

    public function render_dashboard_menu()
    {
        $Categories_model = new Categories($db);
        $categories_matrix = $Categories_model->findAll();
        $data = [
            "categories" => $categories_matrix,
        ];

        return view('dashboard_menu',  $data);
    }

    public function render_create_product()
    {
        $Categories_model = new Categories($db);
        $categories_matrix = $Categories_model->findAll();
        $data = [
            "categories" => $categories_matrix,
        ];
        return view('create_product', $data);
    }

    public function create_product()
    {
        $request = \Config\Services::request();

        $name = $request->getPost("name");
        $price = $request->getPost("price");
        $category = $request->getPost("category");
        $description = $request->getPost("description");
        $image = $request->getFile("image");

        // img
        $path = 'assets/images/menu';
        $RandomName = $image->getRandomName();
        $image->move($path, $RandomName);

        $data = [
            "name" => $name,
            "price" => $price,
            "id_category" => $category,
            "url_img" => $path . "/" . $RandomName,
            "description" => $description,
            "is_visible" => true,
        ];

        //exit(var_dump($data["url_image"]));

        $Prodcut_model = new Products($db);
        if ($Prodcut_model->insert($data)) {
            return redirect()->to("product");
        } else {
            return redirect()->to("product");
        }
    }

    public function render_list_products()
    {
        $request = \Config\Services::request();
        $id_category = $request->uri->getSegment(2);

        if (!empty($id_category)) {
            $this->session->set(["memory" => $id_category]);
            return redirect()->to("category");
        }

        $id_category = $this->session->get("memory");


        $Categories_model = new Categories($db);
        $category_matrix = $Categories_model->where("categories.id", $id_category)
            ->join('products', 'products.id_category = categories.id', 'inner')
            ->get()->getResultArray();

        $data = [
            "category" => $category_matrix,
        ];

        if (empty($category_matrix)) {
            $data["category"][0]["name_category"] = "Sin Productos";
        }

        return view("menu_category", $data);
    }

    public function render_edit_product()
    {

        $request = \Config\Services::request();
        $id_product = $request->uri->getSegment(2);

        if (!empty($id_product)) {
            $this->session->set(["memory" => $id_product]);
            return redirect()->to("editProduct");
        }

        $id_product = $this->session->get("memory");

        $Categories_model = new Categories($db);
        $categories_matrix = $Categories_model->findAll();

        $Product_model = new Products($db);
        $product = $Product_model->find($id_product);

        foreach ($categories_matrix as $value) {
            if ($value["id"] === $product["id_category"]) {
                $product["name_category"] = $value["name_category"];
                break;
            }
        }
        //exit(var_dump($product));
        $data = [
            "categories" => $categories_matrix,
            "product" => $product,
        ];
        return view('edit_product', $data);
    }

    public function edit_product()
    {
        $request = \Config\Services::request();

        $name = $request->getPost("name");
        $price = $request->getPost("price");
        $category = $request->getPost("category");
        $description = $request->getPost("description");
        $is_visible = $request->getPost("is_visible");
        $image = $request->getFile("image");

        $data = [
            "name" => $name,
            "price" => $price,
            "id_category" => $category,
            "description" => $description,
            "is_visible" => $is_visible === "0" ? false : true,
        ];

        if (!empty($image->getTempName())) {
            // img
            $path = 'assets/images/menu';
            $RandomName = $image->getRandomName();
            $image->move($path, $RandomName);
            $data["url_img"] = $path . "/" . $RandomName;
        }

        $id_product = $this->session->get("memory");
        $Prodcut_model = new Products($db);
        if ($Prodcut_model->update($id_product, $data)) {
            return redirect()->to("category/$category");
        } else {
            return redirect()->to("category/$category");
        }
    }

    public function delete_product()
    {
        $request = \Config\Services::request();
        $id_product = $request->uri->getSegment(2);

        $id_category = $this->session->get("memory");

        //exit(var_dump($id_category));
        $Product_model = new Products($db);

        $image = $Product_model->find($id_product);

        if ($Product_model->delete($id_product, true)) {
            unlink($image["url_img"]);
            return redirect()->to("category/$id_category");
        } else {
            return redirect()->to("category/$id_category");
        }
    }
}