<html>


<style> 

* {
  box-sizing: border-box;
}

.leftcolumn {   
  float: left;
  width: 75%;
}

/* Right column */
.rightcolumn {
  float: left;
  width: 25%;
  padding-left: 20px;
}

/* Fake image */
.fakeimg {
  background-color: #aaa;
  width: 100%;
  padding: 20px;
}

/* Add a card effect for articles */
.card {
 background-color: white;
 padding: 20px;
 margin-top: 20px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}


@media screen and (max-width: 800px) {
  .leftcolumn, .rightcolumn {   
    width: 100%;
    padding: 0;
  }
}

</style>

<div class="row" style="margin-top: 20px;margin-left: 10px">
  <div class="leftcolumn">
    <div class="card">
      <h2>@{{blogLists.blog_title}}</h2>
      <h5>Area : @{{blogLists.district_name}},@{{blogLists.division_name}}</h5>
      <div class="fakeimg" style="height:200px;">Image</div>
      <p></p>
      <p>@{{blogLists.blog_body}}</p>
    </div>

  </div>
  <div class="rightcolumn">
    <div class="card">
      <h2>Author Info</h2>
      <div class="fakeimg" style="height:100px;">Image</div>
      <p>Name: @{{blogLists.author}}</p>
    </div>
    <!-- <div class="card">
      <h3>Popular Post</h3>
      <div class="fakeimg">Image</div><br>
      <div class="fakeimg">Image</div><br>
      <div class="fakeimg">Image</div>
    </div>
    <div class="card">
      <h3>Follow Me</h3>
      <p>Some text..</p>
    </div> -->
  </div>
</div>








</html>