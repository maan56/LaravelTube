<?php

namespace App\Repositories;

use App\Comment;
use App\Repositories\Eloquent\Repository;

/**
 * Class LikeDislikeRepository
 * @package App\Repositories
 */
class CommentRepository extends Repository
{
    /**
     * @return mixed
     */
    function model()
    {
        return Comment::class;
    }

    public function getCommentsVideo($video_id)
    {
        $comments = Comment::where('video_id', $video_id)->get();
        return $comments;
    }

}