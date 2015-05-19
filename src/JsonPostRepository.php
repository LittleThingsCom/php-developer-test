<?php

namespace LittleThings;

class JsonPostRepository implements PostRepository, JsonRepository
{

  protected $f;
  
  public function __construct($in){
    $this->f = $in;
  }

  public function __destruct(){

  }

    /**
     * Creates array of posts from associative array
     *
     * @param array $posts
     * @return array
     **/
    protected function hydrate(array $posts)
    {
        return array_map(function ($post) {
            return new Post(
                $post['id'],
                $post['date'],
                $post['authorId'],
                $post['title'],
                $post['slug']
            );
        }, $posts);
    }

    // RETURN ALL POSTS
    public function all(){
      
    }
    
    // RETURN BOOL 
    public function add($post){
      
    }
    
    // RETURN POST 
    public function findById( $id ){
      
    }
    
    // RETURN ARRAY 
    public function readJson(){ 
      $this->data = file_get_contents($f);
    }
    
    // RETURN VOID 
    public function writeJson(array $data){
      
    }

}