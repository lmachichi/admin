<?php include "includes/themplates/head.inc.php" ?>;



<div class="container">
  <header class="blog-header lh-1 py-3">
    <div class="row flex-nowrap justify-content-between align-items-center">
      <div class="col-4 pt-1">
        <a class="link-secondary" href="#">Subscribe</a>
      </div>
      <div class="col-4 text-center">
        <a class="blog-header-logo text-dark" href="#">Sodfa</a>
      </div>
      <div class="col-4 d-flex justify-content-end align-items-center">
        <a class="link-secondary" href="#" aria-label="Search">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="mx-3" role="img" viewBox="0 0 24 24"><title>Search</title><circle cx="10.5" cy="10.5" r="7.5"/><path d="M21 21l-5.2-5.2"/></svg>
        </a>
        <a class="btn btn-sm btn-outline-secondary" href="#">Sign up</a>
      </div>
    </div>
  </header>

  <div class="nav-scroller py-1 mb-2">
    <nav class="nav d-flex justify-content-between">
      <a class="p-2 link-secondary" href="./home.html">Home</a>
      <a class="p-2 link-secondary" href="./login.html">Login</a>
      <a class="p-2 link-secondary" href="./auth.html">Auth</a>
      <a class="p-2 link-secondary" href="./todo.html">Todo</a>
      <a class="p-2 link-secondary" href="./income.html">Income</a>
      <a class="p-2 link-secondary" href="./outcome.html">Outcome</a>
      <a class="p-2 link-secondary" href="./note.html">Note</a>
      <a class="p-2 link-secondary" href="./tag.html">Tag</a>
      <a class="p-2 link-secondary" href="./doc.html">Doc</a>
      <a class="p-2 link-secondary" href="./blog.html">Blog</a>
      <a class="p-2 link-secondary" href="./account.html">Account</a>
      <a class="p-2 link-secondary" href="./cv.html">CV</a>
    </nav>
  </div>
</div>






    
    <ul id="doc"></ul>
    
    <script>
        $( function(){
            $.get("http://localhost/app/docs/api/docs.php", function(data){
                for(var i=0; i<data.length; i++){
                    $('#doc').append("<li>"+data[i].docCommand+"</li>");
                }
            }, 'json');
            } );
    </script>

<?php include "includes/themplates/footer.inc.php" ?>;