<?Php include 'inc/header.Php';?>
<?Php


//(Iterator Design Pattern)



spl_autoload_register(function($class){

	   include 'classes/'.$class.".Php";
});

 
$blogPost = getAllPost();

$posts = new Posts();
foreach ($posts as $post) {
	
	echo $post->getTitle();
	echo $post->getContent();
	echo $post->getDate();
	echo $post->getAuthor();
	$comments = new comments($posts->getComments());
	   foreach ($comments as $comment) {
	   	
	   	    echo $comment->getCommentAuthor();
	   	    echo $comment->getCommentContent();
	   }

	   
}//end foreach

 
 
 

 



















?>
<?Php include 'inc/footer.Php';?>