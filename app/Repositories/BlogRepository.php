<?php

namespace App\Repositories;
use Illuminate\Http\Request;

class BlogRepository
{

    protected $id;
    protected $name;
    protected $description;
    protected $btn;

    public function __construct(Request $request)
    {
        $this->id = $request->input('id');
        $this->name = $request->input('name');
        $this->description = $request->input('description');
        $this->btn = $request->input('btn');
    }

    public function getInfoBlog($id, $name, $description, $btn) {
        $data = [
            [
                'id' => $id,
                'name' => $name,
                'description' => $description,
                'btn' => $btn,
            ]
        ];

        return $data;
    }
}
