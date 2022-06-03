<?php

namespace App\Controllers;

use App\Models\Comments;

class Comments_controller extends BaseController
{
    public function render_form()
    {
        return view('create_comment');
    }

    public function create_comment()
    {
        $request = \Config\Services::request();

        $comment = $request->getPost("comment");

        // img
        $Comment_model = new Comments($db);

        $data = [
            "title" => "comment",
            "comment" => $comment,
        ];
        if ($Comment_model->insert($data)) {
            return redirect()->to("successComment");
        } else {
            return redirect()->to("/");
        }
    }

    public function render_msg_success()
    {
        return view('msg-success-comment');
    }

    public function render_list_comments()
    {
        $Comments_model = new Comments($db);

        $sql_matrix = $Comments_model->findAll();

        $data = [
            "comments" => $sql_matrix,
        ];
        return view('table_comments', $data);
    }

    public function delete_comment()
    {
        $request = \Config\Services::request();
        $id_comment = $request->uri->getSegment(2);

        $Comments_model = new Comments($db);

        if ($Comments_model->delete($id_comment, true)) {
            return redirect()->to("listComment");
        } else {
            return redirect()->to("listComment");
        }
    }
}