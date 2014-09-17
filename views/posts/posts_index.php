
<? foreach ($posts as $post): ?>
<div class="span8" xmlns="http://www.w3.org/1999/html">
    <h1><a href="<?=BASE_URL?>posts/view/<?=$post['post_id']?>"><?=$post['post_subject']?></a></h1>

    <p><?=$post['post_text']?></p>

    <div>
        <span class="badge badge-success">Posted 2012-08-02 20:47:04</span>

        <div class="pull-right">

            <? //print_r($tags);
            if(!empty($tags[$post['post_id']])): foreach ($tags[$post['post_id']] as $tag):?>
                <a href="tags/view/<?=$tag['tag_name']?>"><span class="label" style="background-color: #5bc0de"><?=$tag?></span></a>
            <? endforeach; endif?>

            <span class="label">alice</span> <span class="label">story</span> <span class="label">blog</span>
            <span class="label">personal</span></div>
    </div>

<? endforeach ?>

<hr/>

 <form method="post">
    <input name="data[post_subject]" placeholder="Title"/><br><br>
     <textarea name="data[post_text]" id="" cols="30" rows="5" placeholder="Content"></textarea>
      </br><br>
      <button class="btn btn-default">Post</button>
  </form>

