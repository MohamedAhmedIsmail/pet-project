<?php
// Dependencies ,coupling  and interfaces

// class User
// {

// }
// class CampaignMonitorApi
// {

// }
// class PostmarkApi
// {
//     public function __construct($string)
//     {
        
//     }
// }

// class Newsletter
// {
//     public function __construct(public NewsletterProvider $provider)
//     {
        
//     }

//     public function subscribe(User $user)
//     {
//         $this->provider->addToList('default',$user->email);
//         $user->update(['subscribed'=>true]);
//         return true;
//     }
// }
// interface NewsletterProvider
// {
//     public function addToList(string $list,string $email):void;
// }

// class CampaignMonitorProvider implements NewsletterProvider
// {
//     public function addToList(string $list, string $email): void
//     {
//         $cm = new CampaignMonitorApi();
//         $cm->addApiKey('asdsadsa');
//         $list = $cm->lists->find($list);
//         $list->addToList($email);
//     }
// }
// class PostMarkProvider implements NewsletterProvider
// {
//     public function addToList(string $list, string $email): void
//     {
//         $cm = new PostmarkApi('ssadsads');
//         $list = $cm->addToDefaultList($email);
//     }
// }

// $newsLetter = new Newsletter(
//     new PostMarkProvider()
// );

// $newsLetter->subscribe(new User);




//Interfaces as features filter

// interface CanBeLiked
// {
//     public function like();
//     public function isLiked();
// }

// class Comment implements CanBeLiked
// {
//     public function like()
//     {
//         echo "Like the comment";
//     }
//     public function isLiked()
//     {
//         return false;
//     }
// }

// class Post implements CanBeLiked
// {
//     public function like()
//     {
//         echo "Like the post";
//     }
//     public function isLiked()
//     {
//         return false;
//     }   
// }

// class Thread implements CanBeLiked
// {
//     public function like()
//     {
//         echo "like the thread";
//     }
//     public function isLiked()
//     {
//         return false;
//     }   
// }

// class PerformLike
// {
//     public function handle($model)
//     {
//         if($model->isLiked())
//         {
//             return;
//         }
//         $model->like();
//     }
// }

// (new PerformLike())->handle(new Thread);