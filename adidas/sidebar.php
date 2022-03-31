
    <div class="well">
     <h4>Blog Search</h4>
     <form action="search.php" method="post">
        <div class="input-group">
           <input name="search" type="text" class="form-control" />
           <span class="input-group-btn">
             <button name="s_submit" class="btn btn-primary btn-md" type="submit">
               <span class="glyphicon glyphicon-search"></span>
             </button>
           </span>
        </div>
     </form>
</div>

<div class="well">
     <h4>Categories</h4>
       <div class="row">
         <div class="col-sm-12">
            <ul class="list-unstyled">
               <?php 
			      $category="select * from category";
				  $go_query=mysqli_query($connection,$category);
				  while($out=mysqli_fetch_array($go_query)){
					  $db_cat_id=$out['categoryid'];
					  $db_cat_name=$out['catname'];
						
					 echo "<li><a href='index2.php?cat_id={$db_cat_id}'>{$db_cat_name}</a></li>";
				  }?>
            </ul>
         </div>
       </div>
</div>
<div class="well">
	<div class="row">      
        <div class="col-12">
        
        <div class="form-group">
       <h5><b>Earlier comments</b></h5><hr />
         </div>
        
         <?php
		$query="select * from feedback order by fbid desc limit 3";
		$go_query=mysqli_query($connection,$query);
		    while($out=mysqli_fetch_array($go_query))
			{
			$fid=$out['fbid'];
			$name=$out['email'];
			$date=$out['fbdate'];
			$comment=$out['comment'];
			
	echo "<div class='form-group'>";
        echo "<span style='float:right' >{$date}</span>";
      	echo "<h5><span class='glyphicon glyphicon-user'></span><b>{$name}</b></h5>";
		echo $comment;
		echo '</div><hr>';
			}
		 ?>
           
        <div class="form-group">
  		<p id="m" style="cursor:pointer">more..</p>
        </div>
        
        </div>
    </div>
    
</div>
