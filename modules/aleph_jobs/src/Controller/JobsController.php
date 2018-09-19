<?php

namespace Drupal\jobs_controller\Controller;

class JobsController {

  public function page() 
  {

    $json = file_get_contents('https://jobs.github.com/positions.json');
    $obj = json_decode($json);
    //echo"<pre>";
    //print_r($obj);

    foreach($obj as $jobs)
    {
      $items[] =  array(
        'id' => $jobs->id,
        'title' => $jobs->title,
        'type' => $jobs->type,
        'company' => $jobs->company,
        'company_url' => $jobs->company_url,
        'location' => $jobs->location,
        'created_at' => $jobs->created_at,
        'url' => $jobs->url,
        'description' => $jobs->description,
        'how_to_apply' => $jobs->how_to_apply,
        );
    }

    //echo"<pre>";
    //print_r($items);
    //die("hiii");


    return array(
      '#theme' => 'AlephStrap',
      '#items' => $items,
      '#title' => "Jobs List"
    );
  }


}
