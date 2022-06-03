<?php

namespace App\Controllers;

use App\Models\Images;

class Image_controller extends BaseController
{
    public function render_create_image()
    {
        return view('create_img');
    }

    public function crete_img()
    {
        $request = \Config\Services::request();

        $name = $request->getPost("name");
        $image = $request->getFile("image");

        // img
        $Images_model = new Images($db);

        //validation

        $num_img = $Images_model->countAllResults();

        if ($num_img > 100) {
            exit("error Server full");
        }

        $path = 'assets/images/print';
        $RandomName = $image->getRandomName();
        $image->move($path, $RandomName);
        $url_img = $path . "/" . $RandomName;

        $data = [
            "name" => $name,
            "url_img" => $url_img,
        ];


        if ($Images_model->insert($data)) {
            return redirect()->to("success");
        } else {
            return redirect()->to("fail");
        }
    }

    public function render_msg_success()
    {
        return view('msg-success');
    }

    public function render_msg_fail()
    {
        return view('msg-fail');
    }

    public function render_list_img()
    {
        $Images_model = new Images($db);

        $sql_matrix = $Images_model->findAll();

        $data = [
            "images" => $sql_matrix,
        ];
        return view('table_img', $data);
    }

    public function delete_img()
    {
        $request = \Config\Services::request();
        $id_img = $request->uri->getSegment(2);

        $Images_model = new Images($db);

        $image = $Images_model->find($id_img);
        if ($Images_model->delete($id_img, true)) {
            unlink($image["url_img"]);
            return redirect()->to("listImag");
        } else {
            return redirect()->to("listImag");
        }
    }

    /*
    public function descargar_img()
    {
        ini_set('memory_limit', '5M');
        header('Content-type: image/jpg');

        header('Content-Disposition: attachment; filename="mi_imagen.jpg"');

        readfile('assets/images/print/1654258729_6f4ad6fb56eea37b8d0c.jpg');
    }
    */
}