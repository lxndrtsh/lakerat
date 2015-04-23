<?php namespace App\Http\Controllers\Admin;

use App\Content;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\View;
use Illuminate\Contracts\Validation\Factory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

/**
 * Class AdminController
 * @package App\Http\Controllers\Admin
 */
class ContentController extends Controller
{

    private $request;

    public function __construct(Request $request, Content $content, Factory $validator)
    {
        $this->middleware('auth');
        $this->request = $request;
        $this->content = $content;
        $this->validator = $validator;
    }

    public function show($alias)
    {
        $content = $this->content->where('alias',$alias)->first();
        return view('admin.content',['content'=>$content]);

    }

    public function update()
    {
        $validator = $this->validator->make(
            [
                'id' => $this->request->input('id'),
                'content' => $this->request->input('content')
            ],
            [
                'id' => 'required|integer',
                'content' => 'required'
            ]
        );

        if($validator->fails()) {
            return redirect()->back()->withErrors($validator->messages());
        }


        $content = $this->content->find((int)$this->request->input('id'));
        $content->content = $this->request->input('content');
        $content->save();

        return redirect()->back()->with('message','Updated successfully!');

    }


}