<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
	/**
	 * article list
	 * @return [type] [description]
	 */
    public function index()
    {
    	return view('admin.article.index');
    }

    /**
     * article create form
     * @return [type] [description]
     */
    public function create()
    {
    	return view('admin.article.create');
    }

    /**
     * [store description]
     * @return [type] [description]
     */
    public function store()
    {

    }

    /**
     * [detail description]
     * @return [type] [description]
     */
    public function detail()
    {
    	return view('admin.article.detail');
    }

    /**
     * [edit description]
     * @return [type] [description]
     */
    public function edit()
    {
    	return view('admin.article.edit');
    }

    /**
     * [update description]
     * @return [type] [description]
     */
    public function update()
    {

    }

    /**
     * [del description]
     * @return [type] [description]
     */
    public function del()
    {

    }
}
