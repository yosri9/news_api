<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\AuthorCommentsResource;
use App\Http\Resources\AuthorPostsResource;
use App\Http\Resources\UserResource;
use App\Http\Resources\UsersResource;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class UserController extends Controller
{
    /**
     * @return UsersResource
     */
    public function index()
    {
        $users = User::paginate(env('AUTHORS_PER_PAGE'));
        return new UsersResource($users);
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * @param $id
     * @return UserResource
     */
    public function show($id)
    {

        return new UserResource(User::find($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

    public function posts($id)
    {
        $user = User::find($id);
        $posts = $user->posts()->paginate(env('POST_PER_PAGE'));
        return new  AuthorPostsResource($posts);
    }

    public function comments($id)
    {
        $user = User::find($id);
        $comments = $user->comments()->paginate(env('COMMENT_PER_PAGE'));
        return new AuthorCommentsResource($comments);
    }
}
