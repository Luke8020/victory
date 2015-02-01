6<?php

use Victory\Entities\BlogPost;
use Victory\Entities\Picture;

class BlogPostsTableSeeder extends Seeder {

	public function run()
	{
        $blogDataSet = [
            ['title' => 'About Us', 'count' => 3],
            ['title' => 'Happy Halloween', 'count' => 1],
            ['title' => 'Merry Christmas', 'count' => 2],
            ['title' => 'April Showers', 'count' => 3],
            ['title' => 'Springtime Blues', 'count' => 2],
            ['title' => 'Flower Children', 'count' => 4],
            ['title' => 'Be My Valentine', 'count' => 2]
        ];

        $fakeBody = '<p style="text-align: justify; font-size: 11px; line-height: 14px; margin-bottom: 14px; padding: 0px; color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent nec ipsum eu sapien pharetra dictum. Curabitur venenatis maximus est, quis sagittis nunc. Quisque posuere semper erat, ut varius orci iaculis ut. Nullam non scelerisque dolor, a ultrices enim. Maecenas blandit euismod tempor. Etiam in rhoncus est. Sed ut velit est. Vivamus elementum diam in felis dictum viverra. Nulla facilisi. Suspendisse dui ligula, congue nec lobortis et, varius a nisi. Ut semper ex sit amet sapien egestas porta quis at libero.</p><p style="text-align: justify; font-size: 11px; line-height: 14px; margin-bottom: 14px; padding: 0px; color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans;">Maecenas et ante vitae lectus malesuada viverra. Proin eu enim nisl. Fusce pulvinar dolor aliquet, sagittis tortor non, ultricies elit. Maecenas efficitur pulvinar laoreet. In erat eros, lobortis vel condimentum sed, vestibulum id massa. Phasellus malesuada fermentum ante a egestas. Suspendisse consectetur vestibulum sapien, et cursus dui laoreet quis.</p>';

        foreach($blogDataSet as $blogData)
        {
            $blogPost = new BlogPost;
            $blogPost->title = $blogData['title'];
            $blogPost->body = $fakeBody;
            $blogPost->save();

            foreach(range(1, $blogData['count']) as $index)
            {
                $picture = new Picture;
                $picture->path = $blogPost->id . '-' . $index . '.jpg';
                $picture->save();

                $blogPost->pictures()->save($picture);
            }
        }
	}

}